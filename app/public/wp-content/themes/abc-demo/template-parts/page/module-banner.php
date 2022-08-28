<?php
$title = get_sub_field('title');
$headline = get_sub_field('headline');
$link = get_sub_field('link');
$logo = get_sub_field('logo');
?>

<div class="introduction bg-cover bg-[url('../images/banner.png')]">
    <div class="container lg:flex pb-20 lg:pb-0 justify-between">
        <div class="logo order-2 flex ml-auto lg:ml-0 relative md:top-4 lg:top-auto lg:-bottom-10 w-[320px] md:w-[470px] lg:w-[570px] xl:w-[735px]">
            <img src="<?php echo  $logo['url'] ?>">
        </div>
        <div class="info order-1 text-white flex w-full lg:w-[450px] xl:w-[550px] lg:mb-0 md:-mt-[113px] lg:-mt-0">
            <div class="content self-center">
                <h1 class="font-bold text-[45px] leading-[45px] xl:leading-[75px] xl:text-[70px] w-[300px] lg:w-auto">
                    <?php echo  $title ?></h1>
                <p class="my-10 md:w-[400px] lg:w-auto"><?php echo  $headline ?></p>
                <button class="flex justify-center items-center w-52 h-[56px] text-base uppercase rounded-[3px] bg-gradient-to-r from-[#DB5136] via-[#DB5136] to-[#DBA936] text-white font-bold">Learn more
                    <svg class="ml-4" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 0C18.9782 0 22.7936 1.58035 25.6066 4.3934C28.4196 7.20644 30 11.0218 30 15C30 18.9782 28.4196 22.7936 25.6066 25.6066C22.7936 28.4196 18.9782 30 15 30C11.0218 30 7.20644 28.4196 4.3934 25.6066C1.58035 22.7936 0 18.9782 0 15C0 11.0218 1.58035 7.20644 4.3934 4.3934C7.20644 1.58035 11.0218 0 15 0V0ZM8.4375 14.0625C8.18886 14.0625 7.9504 14.1613 7.77459 14.3371C7.59877 14.5129 7.5 14.7514 7.5 15C7.5 15.2486 7.59877 15.4871 7.77459 15.6629C7.9504 15.8387 8.18886 15.9375 8.4375 15.9375H19.2994L15.2738 19.9613C15.1866 20.0484 15.1174 20.1519 15.0703 20.2658C15.0231 20.3797 14.9988 20.5017 14.9988 20.625C14.9988 20.7483 15.0231 20.8703 15.0703 20.9842C15.1174 21.0981 15.1866 21.2016 15.2738 21.2887C15.3609 21.3759 15.4644 21.4451 15.5783 21.4922C15.6922 21.5394 15.8142 21.5637 15.9375 21.5637C16.0608 21.5637 16.1828 21.5394 16.2967 21.4922C16.4106 21.4451 16.5141 21.3759 16.6012 21.2887L22.2262 15.6637C22.3136 15.5767 22.3828 15.4732 22.4301 15.3593C22.4773 15.2454 22.5017 15.1233 22.5017 15C22.5017 14.8767 22.4773 14.7546 22.4301 14.6407C22.3828 14.5268 22.3136 14.4233 22.2262 14.3363L16.6012 8.71125C16.5141 8.62408 16.4106 8.55494 16.2967 8.50777C16.1828 8.4606 16.0608 8.43632 15.9375 8.43632C15.8142 8.43632 15.6922 8.4606 15.5783 8.50777C15.4644 8.55494 15.3609 8.62408 15.2738 8.71125C15.1866 8.79842 15.1174 8.90189 15.0703 9.01578C15.0231 9.12967 14.9988 9.25173 14.9988 9.375C14.9988 9.49827 15.0231 9.62033 15.0703 9.73422C15.1174 9.84811 15.1866 9.95158 15.2738 10.0387L19.2994 14.0625H8.4375Z" fill="white"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
