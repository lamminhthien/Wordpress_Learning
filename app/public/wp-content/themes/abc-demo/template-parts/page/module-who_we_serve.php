<?php
$title = get_sub_field('title');
$headline = get_sub_field('headline');
$logo = get_sub_field('logo');
$link_title = get_sub_field('link_title');
?>

<div class="who-we-serve relative">
    <div class="bg-image"></div>
    <div class="container">
        <div class="inner">
            <div class="info">
                <h3 class="heading"><?php echo $title ?></h3>
                <div class="mt-8">
                    <p><?php echo $headline ?></p>
                </div>
            </div>
            <div class="discover">
                <img src="<?php echo $logo ?>" alt="Discover Who We Serve">
                <div class="btn-discover flex">
                    <a class="block" href="#"><?php echo $link_title ?></a>
                    <img class="icon" src="wp-content/themes/abc-demo/assets/images/icon-arrow-right.svg" alt="Discover Who We Serve">
                </div>
            </div>
        </div>
    </div>
</div>