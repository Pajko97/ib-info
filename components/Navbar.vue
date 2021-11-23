

<template>
  <div :class="menu_open ? 'pt-0 overlay z-50' : 'pt-10' " class="transition flex lg:flex-col flex-row items-center justify-center">

    <img v-if="!menu_open" src="../static/images/logo_new_white.png"/>
    <nav :class="menu_open ? 'h-screen bg-black' : ''" class="bg-transparent">
  <div class="max-w-6xl mx-auto lg:px-4 px-0">
    <div :class="menu_open ? 'bg-black' : '' "  class="flex lg:justify-between justify-center">
   
      <div class="flex space-x-4">
        <!-- logo -->
        

        <!-- primary nav -->
        <div class="hidden md:flex items-center space-x-1">
          <nuxt-link :to="localePath('products')"><p href="#" class="py-5 px-3 text-white text-2xl hover:text-gray-900 hover:border-solid border-black">{{ $t('nav_products') }}</p></nuxt-link>
          <nuxt-link :to="localePath('compatibility')"><p href="#" class="py-5 px-3 text-white text-2xl hover:text-gray-900 hover:border-solid border-black">{{ $t('nav_compatibility') }}</p></nuxt-link>
          <nuxt-link :to="localePath('/products/giftbox')"><p href="#" class="py-5 px-3 text-white text-2xl hover:text-gray-900">Gift box</p></nuxt-link>
          <nuxt-link :to="localePath('about')"><p href="#" class="py-5 px-3 text-white text-2xl hover:text-gray-900 hover:border-solid border-black">{{ $t('nav_about') }}</p></nuxt-link>
          <nuxt-link :to="localePath('contact')"><p href="#" class="py-5 px-3 text-white text-2xl hover:text-gray-900 hover:border-solid border-black">{{ $t('nav_contact') }}</p></nuxt-link>
        </div>
      </div>

      <!-- secondary nav -->
     

      <!-- mobile button goes here -->
      <div class="md:hidden flex items-center">
        <button class="mobile-menu-button">
          <NuxtLink to="/menu"><svg class="my-5 w-8 h-8 ml-20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg></NuxtLink>
        </button>
      </div>

    </div>
  </div>

  <!-- mobile menu -->
  <div class="mobile-menu fixed bg-black" :class="menu_open ? 'visible z-50' : 'invisible'">
      <NuxtLink :to="localePath('/products')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_products') }}</p></NuxtLink>
          <nuxt-link :to="localePath('compatibility')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_compatibility') }}</p></nuxt-link>
          <nuxt-link :to="localePath('/products/giftbox')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">Gift box</p></nuxt-link>
          <nuxt-link :to="localePath('about')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_about') }}</p></nuxt-link>
          <nuxt-link :to="localePath('contact')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_contact') }}</p></nuxt-link>

        <div class="mt-10 flex flex-row items-center justify-center">
              <nuxt-link class="theme-color-1 text-white mr-2 text-sm px-2 py-2" :to="switchLocalePath('en')"><img width="40" height="40"  src="../static/images/flag_uk.png"/></nuxt-link>
              <nuxt-link class="theme-color-1 text-white text-sm px-2 py-2" :to="switchLocalePath('hr')"><img width="40"  height="40"  src="../static/images/croatia_flag.png"/></nuxt-link>
            </div>
  </div>
</nav>
  </div>
</template>

<script>
export default {
    data() {
        return {
            menu_open : false,
            previous : ''
        }
    },

    
    methods: {
        mobileMenu() {
            this.menu_open = !this.menu_open
        }
        
    },
 
}


</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');

* {
  font-family: 'Nunito Sans';
}


.full {
    height : 100vh;

}

.nuxt-link-active {
  background-color : black!important;
  color:white!important;
}
.menus {
  height: 100%;
  width:100%;
}


.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: rgba(51,51,51,0.7);
}
</style>