<?php
$title = get_sub_field('title');
$headline = get_sub_field('headline');
$services = get_sub_field('services');
?>


<div class="services">
    <div class="container py-[140px] md:py-[106px] lg:py-auto">
        <div class="content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 md:gap-28 lg:gap-20">
            <div class="info">
                <img src="wp-content/themes/abc-demo/assets/images/services-logo.svg" alt="services logo">
                <h2 class="text-[34px] text-[#DB5136] font-bold mt-[11px] mb-[30px]"><?php echo $title ?></h2>
                <p class="text-[16px] font-medium"><?php echo $headline ?></p>
            </div>
            <?php foreach ($services as $service) { ?>
                <div class="service-item text-center">
                    <div class="service-logo flex justify-center">
                        <img class="md:w-[200px] w-[252px] lg:w-auto" src="<?php echo($service['logo']['url']); ?>" alt="service item">
                    </div>
                    <h2 class="font-bold text-[26px] mt-[53px] mb-[17px]"><?php echo($service['logo']['title']); ?></h2>
                    <div class="w-full flex justify-center">
                        <p class="text-[16px] font-medium w-[280px]"><?php echo($service['logo']['description']); ?></p>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>
</div>