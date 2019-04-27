<?php  get_header(); ?>


<section>

    <div class="container">
        <!-- Loop -->
        <?php if( have_posts()) : while (have_posts() ) : the_post(); ?>

            <article>

                <h2> <?php the_title(); ?> </h2>

                <?php if(has_post_thumbnail()) : ?> <!-- Verifica se tem imagem no post -->       
                    <!-- Adicionando a Imagem -->
                    <?php the_post_thumbnail( 'thumbnail'); ?>
                <?php endif; ?>

                <p>
                    <!-- Data da Postagem -->
                    <?php echo get_the_date() ?> |
                    <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> |
                    <?php the_category(', ') ?>
                </p>

                <p>
                <!-- Conteudo Completo -->
                    <?php the_content( ); ?>
                </p>
       
                <p>
                    <!-- COMENTARIOS  -->
                    <?php comments_number('0 comentarios', '1 comentário', '% comentários' ); ?> comentários |
                    
                </p>

            </article>

        <?php endwhile; else : endif; ?>
        <!-- Fim Loop -->

        <div class="paginacao">
            <div class="pagina_anterior">
                <?php previous_post_link(); ?>
            </div>

            <div class="pagina_proxima">
                <?php next_post_link(); ?>
            </div>

        </div>

    </div>

    <?php get_sidebar( ); ?>

    <div style="clear:both"></div>

</section>
<?php get_footer(); ?>

