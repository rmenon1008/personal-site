<?php

/**
 *
 * @package Rohan_Menon
 */


get_header();
?>

<div id="path">
    <h1 id="pathString">/</h1>
    <div id="haze"></div>
</div>
<h1 id="title"><?php single_cat_title() ?></h1>
<script>
    var path = (window.location.pathname).split("-").join(" ").split("/");
    document.getElementById("pathString").innerHTML = (path.slice(0, path.length - 2).join("/") + "/");
</script>
<div class='post_list archive'>
    <div class='scroll-window'>
        <?php
        if (have_posts()) :
            $animate_order = -1;
            while (have_posts()) : the_post();
                $animate_order++;
                $myExcerpt = get_the_excerpt();
                $tags = array("<p>", "</p>");
                $myExcerpt = str_replace($tags, "", $myExcerpt);
                $category = get_the_category()[0]->name;
                $title = $category . " - " . get_the_title();

        ?>

                <a class="nostyle block" href="<?php the_permalink() ?>" role="button">
                    <div class="image-gallery-small" style="--animation-order:<?php echo $animate_order ?>;">
                        <div class="image-contain">
                            <?php the_post_thumbnail('large', array('class' => 'batch-load')); ?>
                        </div>
                        <div class="gallery-text">
                            <h3><?php echo $title ?></h3>
                            <span class='status'><?php the_date() ?></span>
                            <div class="image-gallery-small-haze"></div>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </a>

        <?php
            endwhile;
        endif;
        ?>

    </div>
</div>

<?php

the_posts_pagination(array(
    'prev_text' => __('<b>❬</b>', 'textdomain'),
    'next_text' => __('<b>❭</b>', 'textdomain'),
    'before_page_number' => '',
    'after_page_number'  => '',
));

get_footer();
