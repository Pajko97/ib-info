<template>
  <div :class="menu_open ? 'pt-0 overlay' : 'pt-10' " class="transition flex lg:flex-col flex-row items-center justify-center">
    <NuxtLink v-if="!menu_open" to="/" ><img src="../static/images/logo_new_black.png"/></NuxtLink>

    <nav :class="menu_open ? 'h-screen bg-black' : ''" class="bg-transparent">
  <div class="max-w-6xl mx-auto lg:px-4 px-0" >
    <div :class="menu_open ? 'bg-black' : '' "  class="flex lg:justify-between justify-center">

      <div class="flex space-x-4">
        <!-- logo -->
       

        <!-- primary nav -->
        <div class="hidden md:flex items-center space-x-1">
            <nuxt-link :to="localePath('/')"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">{{ $t('nav_home') }}</p></nuxt-link>
            <nuxt-link :to="localePath('products')"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">{{ $t('nav_products') }}</p></nuxt-link>
            <nuxt-link :to="localePath('/products/giftbox')"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">{{ $t('nav_gift') }}</p></nuxt-link>
            <nuxt-link :to="localePath('compatibility')"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">{{ $t('nav_compatibility') }}</p></nuxt-link>
            <nuxt-link :to="localePath('about')"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">{{ $t('nav_about') }}</p></nuxt-link>
            <nuxt-link :to="localePath('contact')"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">{{ $t('nav_contact') }}</p></nuxt-link>

        </div>
      </div>

      <!-- secondary nav -->
     

      <!-- mobile button goes here -->
      <div class="md:hidden z-40 flex items-center">
        <button @click="mobileMenu" class="mobile-menu-button">
          <img class="animate-spin mt-10 mb-5" v-if="menu_open" src="../static/images/cancel.png"/>
          <svg v-else :class="menu_open ? 'my-5' : '' " class="w-8 h-8 lg:ml-0 ml-20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="black">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- mobile menu -->
  <div class="mobile-menu w-screen h-screen bg-black md:hidden z-70" :class="menu_open ? '' : 'hidden'">
    
            <nuxt-link :to="localePath('/')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_home')}}</p></nuxt-link>
            <nuxt-link :to="localePath('products')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_products')}}</p></nuxt-link>
            <nuxt-link :to="localePath('/products/giftbox')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_gift')}}</p></nuxt-link>
            <nuxt-link :to="localePath('compatibility')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_compatibility')}}</p></nuxt-link>
            <nuxt-link :to="localePath('about')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_about')}}</p></nuxt-link>
            <nuxt-link :to="localePath('contact')"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">{{ $t('nav_contact')}}</p></nuxt-link>


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
  /*   computed: {
        check_menu: () => {
            return this.data['data.menu_open'] ? 'otvoren' : '';
        }
    }, */
    
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
.overlay {
    position: fixed;
    left: 0;
    top: 0;
    background: rgba(51,51,51,0.7);
    z-index: 10;
}
</style>