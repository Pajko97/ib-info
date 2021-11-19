<template>
    <div class="theme-color-1 flex flex-col lg:flex-row justify-around pt-10 pl-10 pb-10 lg:pl-20 pr-10">
       <div class="flex flex-col justify-center items-center">
            <img class="pb-10" src="../static/images/footer_logo.png"/>
       </div>


       <div class="flex flex-col text-base lg:text-lg text-white lg:pt-5 pt-0">
           <nuxt-link :to="localePath('products')"><a class="lg:pb-8">{{ $t('footer_products') }}</a></nuxt-link>
           <nuxt-link :to="localePath('compatibility')"><a class="lg:pb-8">{{ $t('footer_compatibility') }}</a></nuxt-link>
                      
       </div>

        <div class="flex flex-col text-base lg:text-lg text-white lg:pt-5 pt-0">
           <nuxt-link :to="localePath('contact')"><a class="lg:pb-8">{{ $t('footer_contact') }}</a></nuxt-link>
          <!--  <a class="lg:pb-8">{{ $t('footer_affiliate_program') }}</a>
           <a class="lg:pb-8">{{ $t('footer_order_tracker') }}</a> -->
       </div>

        <div class="flex flex-col items-start text-base lg:text-lg text-white lg:pt-5 pt-0">
           <nuxt-link :to="localePath('privacy')"><a disabled class="lg:pb-8">{{ $t('footer_privacy') }}</a></nuxt-link>
            <nuxt-link :to="localePath('terms')"><a disabled class="lg:pb-8">{{ $t('footer_terms') }}</a></nuxt-link>

          <!--  <div class="flex flex-row items-center mt-5 justify-center">
               <img alt="Facebook icon" class="pr-2" src="../static/images/facebook_icon.png" />
               <img alt="Twitter icon" class="pr-2" src="../static/images/twitter_icon.png" />
               <img alt="Instagram icon" class="pr-2" src="../static/images/instagram_icon.png" />
               <img alt="Linkedin icon" class="pr-2" src="../static/images/ln_icon.png" />
           </div> -->
       </div>
    </div>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');


* {
    font-family: 'Nunito Sans';
}
.cr {
    position: absolute;
    bottom: 0;
    left: 0;
}
.theme-color-1 {
    background-color: #231F20;
}
</style>