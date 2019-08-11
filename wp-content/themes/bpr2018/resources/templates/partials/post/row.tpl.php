<?php $pic_url = get_the_post_thumbnail_url(); global $TEMPLATE_IS_CATEGORY; ?>
<div class="horizontal-rule faint"></div>
<article class="row post-row" itemscope itemtype="https://schema.org/Article">
  <div class="col-sm-2 post-date font-size-18">
    <?php
    if (get_the_date()) { echo '<time itemprop="datePublished">' . get_the_date() . '</time>'; }
    ?>
  </div>

  <div class="col-sm-7">
    <div class="post-title-small">
      <a
        itemprop="name"
        href="<?php echo get_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </div>

    <?php if (!is_category()) the_category(); ?>

    <p class="font-size-20" itemprop="articleBody">
      <?php
      $content = apply_filters('the_content', get_the_content());
      echo substr(sanitize_text_field($content), 0, 250) . '...';
      ?>
    </p>

    <div class="post-author font-size-18">
      <a 
        itemprop="author"
        href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php the_author(); ?>
      </a>
    </div>
  </div>

  <div class="col-sm-3">
    <a href="<?php echo get_permalink(); ?>">
      <div class="img-10-wrapper">
        <div
          class="img-10"
          itemprop="image"
          style="background-image: url(<?php echo $pic_url; ?>);">
        </div>
      </div>
    </a>
  </div>
</article>