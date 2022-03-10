<?php get_header(); ?>
    
    <?php if(have_posts( )) : ?>

        <?php while(have_posts( )) : the_post( ); ?>

            <article>
                <div>
                
                <?php if(has_post_thumbnail(  )) 
                {
                    the_post_thumbnail( );
                } ?>
                </div>
                <div>
                    <h3><?php the_title(  ); ?></h3>
                    <p><?php the_content(  ); ?></p>
                    <p>Ce sujet vous interesse? Consultez d'autre articles dans la catégorie <?php the_category(',' ) ?>.</p>
                </div>
            </article>


    
<?php endwhile;
    endif;
?>
<?php get_footer(); ?>