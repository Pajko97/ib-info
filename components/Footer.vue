<template>
    <div class="theme-color-1 flex flex-col lg:flex-row justify-around pt-10 pl-10 pb-10 lg:pl-20 pr-10">
       <div class="flex flex-col justify-center items-center">
            <p class="px-10 mx-10 lg:px-0 text-white lg:mb-0 mb-5 text-6xl text-center" >i-b cards</p>
            <p class="px-10 mx-10 lg:px-0 text-white lg:mb-0 mb-5 text-2xl text-center" >CARD4LIFE</p>
       </div>
       <div class="flex flex-col text-base lg:text-lg text-white lg:pt-5 pt-0">
           <a class="lg:pb-8">{{ $t('footer_products') }}</a>
           <a class="lg:pb-8">{{ $t('footer_compatibility') }}</a>
           <a class="lg:pb-8">{{ $t('footer_happy') }}</a>
           <a class="lg:pb-8">{{ $t('footer_login') }}</a>
       </div>

        <div class="flex flex-col text-base lg:text-lg text-white lg:pt-5 pt-0">
           <a class="lg:pb-8">{{ $t('footer_faq') }}</a>
           <a class="lg:pb-8">{{ $t('footer_contact') }}</a>
          <!--  <a class="lg:pb-8">{{ $t('footer_affiliate_program') }}</a>
           <a class="lg:pb-8">{{ $t('footer_order_tracker') }}</a> -->
       </div>

        <div class="flex flex-col items-start text-base lg:text-lg text-white lg:pt-5 pt-0">
           <a class="lg:pb-8">{{ $t('footer_refund_and_shipping') }}</a>
           <a class="lg:pb-8">{{ $t('footer_privacy') }}</a>
           <div class="flex flex-row items-center mt-5 justify-center">
               <img alt="Facebook icon" class="pr-2" src="../static/images/facebook_icon.png" />
               <img alt="Twitter icon" class="pr-2" src="../static/images/twitter_icon.png" />
               <img alt="Instagram icon" class="pr-2" src="../static/images/instagram_icon.png" />
               <img alt="Linkedin icon" class="pr-2" src="../static/images/ln_icon.png" />
           </div>
       </div>

    </div>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');


* {
    font-family: 'Nunito Sans';
}
.theme-color-1 {
    background-color: #231F20;
}
</style>