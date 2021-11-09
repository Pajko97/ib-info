<template>
    <div class="h-screen bg-black">
        <ul class="pt-20 flex flex-col justify-center items-center pb-5">
            <li class="pb-10 text-white text-2xl"><NuxtLink to="/products">Products</NuxtLink></li>
            <li class="pb-10 text-white text-2xl"><NuxtLink to="/compatibility">Compatibility list</NuxtLink></li>
            <li class="pb-10 text-white font-normal text-2xl"><NuxtLink to="/about">About us</NuxtLink></li>
            <li class="text-white text-2xl"><NuxtLink to="/contact">Contact</NuxtLink></li>
        </ul>
        <p class="text-center text-white text-xl">BACK</p>
    </div>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');


* {
    font-family: 'Nunito Sans';
}
</style>