
<template>
  <div class="bg-black">
 
<div class="mobile-menu w-screen h-screen visible z-50 fixed bg-black" >
      <div class="flex items-center justify-center">
           <NuxtLink to="./" >
                <img class="mt-10 mb-5"  src="../static/images/cancel.png"/>
            </NuxtLink >
      </div>
      <NuxtLink to="/products"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_products') }}</p></NuxtLink>
          <nuxt-link :to="localePath('compatibility')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_compatibility') }}</p></nuxt-link>
          <nuxt-link :to="localePath('/products/giftbox')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">Gift box</p></nuxt-link>
          <nuxt-link :to="localePath('about')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_about') }}</p></nuxt-link>
          <nuxt-link :to="localePath('contact')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_contact') }}</p></nuxt-link>

        <div class="mt-10 flex flex-row items-center justify-center">
              <nuxt-link class="theme-color-1 text-white mr-2 text-sm px-2 py-2" :to="switchLocalePath('en')"><img width="40" height="40"  src="../static/images/flag_uk.png"/></nuxt-link>
              <nuxt-link class="theme-color-1 text-white text-sm px-2 py-2" :to="switchLocalePath('hr')"><img width="40"  height="40"  src="../static/images/croatia_flag.png"/></nuxt-link>
        </div>
  </div>
  </div>
</template>

<script lang="ts">

export default {

}
</script>























