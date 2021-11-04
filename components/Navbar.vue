<template>
    <div class="flex-row bg-transparent">
        <div class="flex justify-center pt-5 pb-5 items-center">
         <img class="align-self-center pt-10" src="../static/images/logo_new_white.png"/>
        </div>
        <ul class="flex justify-center pb-5">
            <li class="pr-8 text-white text-2xl"><NuxtLink to="/products">Products</NuxtLink></li>
            <li class="pr-8 text-white text-2xl"><NuxtLink to="/compatibility">Compatibility list</NuxtLink></li>
         <!--    <li class="pr-8 text-white text-2xl">
                <div class="flex-flex-col justify-center items-center">
                    <li class="pr-8 text-white text-2xl">
                        Company Portal
                    </li>
                    <p class="text-sm text-center -ml-10">Coming Soon</p>
                </div>
            </li> -->
            <li class="pr-8 text-white font-normal text-2xl"><NuxtLink to="/about">About us</NuxtLink></li>
            <li class="pr-8 text-white text-2xl"><NuxtLink to="/contact">Contact</NuxtLink></li>
        </ul>
       
    </div>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');


* {
    font-family: 'Nunito Sans';
}
</style>