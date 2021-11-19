



<template>
    <div class="section-8 theme-color-2 pb-14 flex flex-col justify-center items-center">
            <h1 class="lg:text-4xl mx-14 text-xl lg:pt-20 pt-10 text-center pb-10">{{ $t('hint_h1') }}</h1>
            <p class="lg:text-2xl mx-14 pb-10 text-center text-gray-400 font-light">{{ $t('hint_p') }}</p>
            <nuxt-link :to="localePath('hint')"><button class="btn text-center theme-color-1 lg:text-2xl text-xl text-white font-semibold pl-6 pr-6 pt-3 pb-3">{{ $t('hint_button') }}</button></nuxt-link>
        </div>
</template>


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
.section-8 {
    background-image: url('../static/images/section_8_bg.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size:cover; 
}

</style>









