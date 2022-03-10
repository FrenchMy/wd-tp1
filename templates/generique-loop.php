<?php if(have_posts( )) : ?>

<?php while(have_posts( )) : the_post( ); ?>

    <article>

        <div>
            <p><?php the_content(  ); ?></p>

        </div>
    </article>

<?php   endwhile;
endif;
?>