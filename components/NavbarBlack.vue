<template>
  <div :class="this.menu_open ? 'pt-0 overlay' : 'pt-10' " class="transition flex lg:flex-col flex-row items-center justify-center">
    <NuxtLink v-if="!this.menu_open" to="/" ><h1 class="text-6xl">i-b card</h1></NuxtLink>

    <nav :class="this.menu_open ? 'h-screen bg-black' : ''" class="bg-transparent">
  <div class="max-w-6xl mx-auto lg:px-4 px-0" >
    <div :class="this.menu_open ? 'bg-black' : '' "  class="flex lg:justify-between justify-center">

      <div class="flex space-x-4">
        <!-- logo -->
       

        <!-- primary nav -->
        <div class="hidden md:flex items-center space-x-1">
            <NuxtLink to="/"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">Home</p></NuxtLink>
            <NuxtLink to="/products"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">Products</p></NuxtLink>
            <NuxtLink to="/compatibility"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">Compatibility list</p></NuxtLink>
            <NuxtLink to="/about"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">About us</p></NuxtLink>
            <NuxtLink to="/contact"><p href="#" class="py-5 px-3 text-2xl hover:text-gray-900 hover:border-solid border-black">Contact</p></NuxtLink>

        </div>
      </div>

      <!-- secondary nav -->
     

      <!-- mobile button goes here -->
      <div class="md:hidden z-40 flex items-center">
        <button @click="mobileMenu" class="mobile-menu-button">
          <img class="animate-spin mt-10 mb-5" v-if="this.menu_open" src="../static/images/cancel.png"/>
          <svg v-else :class="this.menu_open ? 'my-5' : '' " class="w-8 h-8 lg:ml-0 ml-20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="black">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- mobile menu -->
  <div class="mobile-menu w-screen bg-black md:hidden" :class="this.menu_open ? '' : 'hidden'">
        <NuxtLink to="/"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">Home</p></NuxtLink>
        <NuxtLink to="/products"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">Products</p></NuxtLink>
        <NuxtLink to="/compatibility"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">Compatibility list</p></NuxtLink>
        <NuxtLink to="/about"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">About us</p></NuxtLink>
        <NuxtLink to="/contact"><p href="#" class="text-center text-xl py-5 px-3 text-white hover:border-solid border-black">Contact</p></NuxtLink>
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

        },
        beforeRouteEnter(from, next) {
            next(() => {
                this.previous = from
            })
    },
 
}
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
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: rgba(51,51,51,0.7);
    z-index: 10;
}
</style>