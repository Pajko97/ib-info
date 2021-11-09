
<template>
  <div>
    <NavbarBlack />
    <div class="flex-flex-col absolute top-0 right-0 z-50 lg:mr-5 lg:mt-5 items-center text-center justify-center">
            <p class="text-base text-white pb-2">{{ $t('nav_language')}}</p>
            <div class="flex flex-row">
              <nuxt-link class="theme-color-1 text-white mr-2 text-sm px-2 py-2" :to="switchLocalePath('en')">English</nuxt-link>
              <nuxt-link class="theme-color-1 text-white text-sm px-2 py-2" :to="switchLocalePath('hr')">Hrvatski</nuxt-link>
            </div>
          </div>
    <ProductsList />
    <Hint />
    <Footer />
  </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({})
</script>
