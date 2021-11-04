<template>
    <div class="flex-row bg-transparent">
        <div class="flex justify-center pt-5 pb-5 items-center">
            <NuxtLink to="/"><img class="w-20 h-full pt-10" src="../static/images/logo_black.png"/></NuxtLink>
        </div>
        <ul class="flex justify-center pb-5">
            <li class="pr-8 text-black text-2xl"><NuxtLink to="/products">Products</NuxtLink></li>
            <li class="pr-8 text-black text-2xl"><NuxtLink to="/compatibility">Compatibility list</NuxtLink></li>
            <li class="pr-8 text-black text-2xl"><NuxtLink to="/company">Company portal</NuxtLink></li>
            <li class="pr-8 text-black font-normal text-2xl"><NuxtLink to="/about">About us</NuxtLink></li>
            <li class="pr-8 text-black text-2xl"><NuxtLink to="/contact">Contact</NuxtLink></li>
        </ul>
    </div>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');


* {
    font-family: 'Nunito Sans';
}
</style>