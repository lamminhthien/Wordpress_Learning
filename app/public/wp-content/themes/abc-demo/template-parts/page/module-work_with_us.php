<?php
$title = get_sub_field('title');
$headline = get_sub_field('headline');
$link = get_sub_field('link');
$logo = get_sub_field('logo');
$link_title = get_sub_field('link_title');
?>


<div class="work-with-us relative text-white mt-12 md:mt-40 lg:mt-0">
    <div class="bg-image"></div>
    <div class="container">
        <div class="inner relative py-4 mx-auto max-w-[96%] lg:max-w-[86%]">
            <div class="slide-show">
                <div class="nav-wrapper">
                    <div id="my-keen-slider" class="keen-slider h-full rounded-lg" data-keen-slider-v="">
                        <div class="keen-slider__slide" style="min-height: 570px; max-height: 570px; transform: translate3d(0px, 0px, 0px);">
                            <img class="object-cover object-center absolute w-full h-full" src="<?php echo $logo ?>">
                        </div>
                    </div>
                    <div class="dots">
                        <div class="dot dot--active"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <div class="arrow arrow--left arrow--disabled"></div>
                    <div class="arrow arrow--right"></div>
                </div>
            </div>
            <div class="info flex items-center py-8 lg:py-12 lg:pr-8 relative lg:max-w-[442px]">
                <div>
                    <h3 class="title"><?php echo $title ?></h3>
                    <p class="text font-medium leading-[22px] text-[16px] my-8 xl:my-12">
                    <?php echo $headline ?>
                    </p>
                    <button class="btn mx-auto md:mx-0 flex items-center">
                    <?php echo $link_title ?>
                        <img class="ml-3" src="wp-content/themes/abc-demo/assets/images/icon-arrow-right.svg">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>