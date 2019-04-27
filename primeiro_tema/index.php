<?php  get_header(); ?>


<section>

    <div class="container">
        
        <?php if( have_posts()) : while (have_posts() ) : the_post(); ?>

            <article>
                <?php if(has_post_thumbnail()) : ?> <!-- Verifica se tem imagem no post -->   
                    <a href="<?php the_permalink(); ?>">
                    <!-- Adicionando a Imagem -->
                        <?php the_post_thumbnail( 'thumbnail', array('class' => 't') ); ?>
                    </a>
                <?php endif; ?>

                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                <p>
                    <!-- Data da Postagem -->
                    <?php echo get_the_date() ?> |
                    <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> |
                    <?php the_category(', ') ?>
                </p>

                <p>
                <!-- Mostra o conteudo e o limite de palavras -->
                    <?php the_excerpt( ); ?>
                </p>
       
                <p>
                    <!-- COMENTARIOS  -->
                    <?php comments_number('0 comentarios', '1 comentário', '% comentários' ); ?> comentários |
                    <a href="<?php the_permalink ?>"> Leia Mais</a>
                </p>

            </article>

        <?php endwhile; else : endif; ?>
        <!-- Fim Loop -->

        <div class="paginacao">
            <div class="pagina_anterior">
                <?php previous_posts_link( 'Posts Anteriores'); ?>
            </div>

            <div class="pagina_proxima">
                <?php next_posts_link( 'Próximo Posts'); ?>
            </div>

        </div>

    </div>

    <?php get_sidebar( ); ?>

    <div style="clear:both"></div>

</section>
<?php get_footer(); ?>

