<article>
    <div class="row">
        <div class="col-lg-1"></div> <!-- Padding -->

        <div class="content col-lg-10">
            <a name="article-top"></a>
            <h1><?php the_title(); ?></h1>

            <div class="byline">
                <?php the_author(); ?> | <?php the_date(); ?>
            </div>

            <?php 
            $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
            if ($url):
            ?>
                <img class="featured-image" src="<?php echo $url; ?>">
            <?php endif; ?>

            <div class="hline"></div>
        </div>

        <div class="col-lg-1"></div> <!-- Padding -->
    </div>

    <div class="row">
        <div class="col-lg-1">
            Part of some issue
        </div>

        <div class="content col-lg-10">
            <p><?php the_content(); ?></p>
            <div class="back-to-top">
                <a href="#article-top">Back to Top</a>
            </div>
        </div>

        <div class="col-lg-1 post-category">
            <?php the_category(); ?>
        </div>
    </div>
</article>