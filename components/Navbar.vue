<template>
    <div class="flex-row bg-transparent">
        <div class="flex justify-center pt-5 pb-5 items-center">
         <img class="align-self-center pt-10" src="../static/images/logo.svg"/>

        </div>
        <ul class="flex justify-center pb-5">
            <li class="pr-8 text-white text-2xl"><NuxtLink to="/products">Products</NuxtLink></li>
            <li class="pr-8 text-white text-2xl"><NuxtLink to="/compatibility">Compatibility list</NuxtLink></li>
            <li class="pr-8 text-white text-2xl"><NuxtLink to="https://www.google.com">Company portal</NuxtLink></li>
            <li class="pr-8 text-white font-normal text-2xl"><NuxtLink to="/about">About us</NuxtLink></li>
            <li class="pr-8 text-white text-2xl"><NuxtLink to="/contact">Contact</NuxtLink></li>
        </ul>
        <div class="max-w-xs">
            <nuxt-link :to="switchLocalePath('hr')"><img src="../static/images/flag_croatia.png"/></nuxt-link>
      <nuxt-link :to="switchLocalePath('es')"><img src="../static/images/flag_spain.png"/></nuxt-link>
        </div>
    </div>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');


* {
    font-family: 'Nunito Sans';
}
</style>