<?php
$title = get_sub_field('title');
$headline = get_sub_field('headline');
$partner = get_sub_field('partner');
?>

<div class="who-trusted-us">
    <div class="container py-[70px] lg:flex lg:justify-between">
        <div class="info lg:w-[502px]">
            <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.6617 28.7917C28.1276 31.3757 16.5717 35.219 3.80153 36.1066C0.963709 36.3033 -0.940034 33.2864 0.483325 30.8642L17.0699 2.62339C19.1249 -0.874463 24.2579 -0.874463 26.3129 2.62339L29.4309 7.94012L37.2816 21.3063C38.9051 24.0652 37.6686 27.6024 34.6617 28.7917Z" fill="#3CC7F4"></path>
            </svg>
            <h3 class="mt-3.5 inline-block font-bold text-[34px] leading-[35px] w-[210px] text-[#DB5136]"><?php echo $title ?></h3>
            <p class="font-medium mt-10 lg:pr-3"><?php echo $headline ?></p>
        </div>
        <div class="logo-company grid grid-cols-4 md:grid-cols-5 xl:grid-cols-6 lg:gap-10 xl:gap-16 gap-6 mt-11 lg:mt-[145px] ">
            <?php if (have_rows('partner')) : ?>
                <?php
                while (have_rows('partner')) : the_row();
                    $logo = get_sub_field('logo');
                ?>
                    <a href="#" class="flex justify-center">
                        <img class="w-16 md:w-20" src="<?php echo $logo; ?>" alt="Company 1">
                    </a>
                <?php endwhile; ?>
        </div>

    <?php endif; ?>
    </div>
</div>
</div>