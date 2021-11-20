<template>
    <div class="flex min-h-screen flex-col">
        <div class="flex lg section-1-big h-screen relative items-center text-center flex-col lg:flex-col">
            <NavbarBlack/>
            <h1 class="font-bold text-4xl mx-10 lg:text-6xl lg:mt-14 mt-40 lg:my-14">i-b card premium gift box</h1>
        </div>

        <div class="section-2 lg:mx-40 mx-10">
            <div class="my-20">
                 <h1 class="text-8xl">I - GIFT</h1>
                <h2 class="text-5xl">Word’s no needed.</h2>
                <h3 class="mtext-lg">Special gift for special person.</h3>
            </div>
            <div class="flex flex-row flex-wrap justify-center lg:justify-between">
                <div class="flex flex-col justify-center pb-24 items-center">
                    <img class="w-80" alt="Powerful Black - i-b card sa crnom koznom kutijom" src="../../../static/images/products/black_metal/black_metal_gift.png"/>
                    <h1 class="text-3xl font-bold pt-5">{{ $t('black_metal_name') }}</h1>
                    <p class="text-lg max-w-xs text-center">{{ $t('black_metal_description') }}</p>
                    <nuxt-link :to="localePath('/products/giftbox/power_black')"><button class="rounded-full theme-color-1 text-white mt-12  py-5  px-9 text-xl">{{ $t('product_button_text')}}</button></nuxt-link>
                </div>

                <div class="flex flex-col justify-center pb-24 items-center">
                    <img class="w-80" alt="Golden Shine - i-b card sa crnom koznom kutijom" src="../../../static/images/products/gold/gold_gift.png"/>
                    <h1 class="text-3xl font-bold pt-5">{{ $t('gold_metal_name') }}</h1>
                    <p class="text-lg max-w-xs text-center">{{ $t('gold_metal_description') }}</p>
                    <nuxt-link :to="localePath('/products/giftbox/gold')"><button class="rounded-full theme-color-1 text-white mt-12  py-5  px-9 text-xl">{{ $t('product_button_text')}}</button></nuxt-link>
                </div>

                <div class="flex flex-col justify-center pb-24 items-center">
                    <img class="w-80" alt="Rose Gold - i-b card sa crnom koznom kutijom" src="../../../static/images/products/rose_gold/rose_gold_gift.png"/>
                    <h1 class="text-3xl font-bold pt-5">{{ $t('rose_metal_name') }}</h1>
                    <p class="text-lg max-w-xs text-center">{{ $t('rose_metal_description') }}</p>
                    <nuxt-link :to="localePath('/products/giftbox/rose_gold')"><button class="rounded-full theme-color-1 text-white mt-12  py-5  px-9 text-xl">{{ $t('product_button_text')}}</button></nuxt-link>
                </div>
                <!-- druga tri -->

               <div class="flex flex-col justify-center pb-24 items-center">
                    <img class="w-80" alt="Black Matte - i-b card sa crnom koznom kutijom" src="../../../static/images/products/black_pvc/black_pvc_gift.png"/>
                    <h1 class="text-3xl font-bold pt-5">{{ $t('product_black_texture_name') }}</h1>
                    <p class="text-lg max-w-xs text-center">{{ $t('product_black_texture_description') }}</p>
                    <nuxt-link :to="localePath('/products/giftbox/black_matte')"><button class="rounded-full theme-color-1 text-white mt-12  py-5  px-9 text-xl">{{ $t('product_button_text')}}</button></nuxt-link>
                </div>

                 <div class="flex flex-col justify-center pb-24 items-center">
                    <img class="w-80" alt="Black Bamboo - i-b card sa crnom koznom kutijom" src="../../../static/images/products/black_bamboo/black_bamboo_gift.png"/>
                    <h1 class="text-3xl font-bold pt-5">{{ $t('black_bamboo_name') }}</h1>
                    <p class="text-lg max-w-xs text-center">{{ $t('black_bamboo_description') }}</p>
                    <nuxt-link :to="localePath('/products/giftbox/black_bamboo')"><button class="rounded-full theme-color-1 text-white mt-12  py-5  px-9 text-xl">{{ $t('product_button_text')}}</button></nuxt-link>
                </div>

                 <div class="flex flex-col justify-center pb-24 items-center">
                    <img class="w-80" alt="Rose Gold - i-b card sa crnom koznom kutijom" src="../../../static/images/products/rose_gold_glitter/rose_gold_glitter_gift.png"/>
                    <h1 class="text-3xl font-bold pt-5">{{ $t('rose_glitter_name') }}</h1>
                    <p class="text-lg max-w-xs text-center">{{ $t('rose_glitter_description') }}</p>
                    <nuxt-link :to="localePath('/products/giftbox/rose_gold_glitter')"><button class="rounded-full theme-color-1 text-white mt-12  py-5  px-9 text-xl">{{ $t('product_button_text')}}</button></nuxt-link>
                </div>
            </div>
        </div>
        <Footer/>
    </div>
</template>

<script>


export default {

 
  
}

</script>

<style scoped>

@import url('https://fonts.googleapis.com/css0?family=Nunito+Sans:wght@300;400;600&display=swap');


* {
    font-family: 'Nunito Sans';
}

.theme-color-1 {
    background-color: #231F20;
}
.theme-color-2 {
    background-color: #F8F8F8;
}
.section-1-big {
    background-image: url('../../../static/images/giftbox_cover.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size:cover;
}
.section-1-mobile {
    background-image: url('../../../static/images/giftbox_bg_mobile.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size:cover;
}
</style>









