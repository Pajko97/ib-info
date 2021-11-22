
<template>
  <div>
    <NavbarBlack />
    <div class="flex lg:flex-row flex-col justify-center pt-20 pb-20 items-center">

      <div class="flex max-w-sm flex-col mx-10 lg:ml-20 md:mx-0 justify-center items-center lg:mb-0 mb-20">
        <img class="w-80" src="../../../static/images/products/black_pvc/black_pvc.png" />
        <h3  class="text-4xl pb-2 font-bold pt-5 text-center">Black Matte</h3>
        <p class="text-lg pb-5 text-center pl-0 pr-0 lg:pl-10 lg:pr-10">
            {{ $t('product_black_matte_description') }}
        </p>
        
        
        <p class="text-xl font-bold">360 KN + PDV</p>
      </div>

      <div class="max-w-md flex flex-col justify-center items-center mx-20">
          <h1 class="text-4xl pb-5">{{ $t('product_reach_out') }}</h1>
          <p class="px-20 text-center">{{ $t('product_explain') }}</p>
          <ContactFormRequest/>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script lang="ts">
export default {
    head() {
      return {
        title: 'i-b cards | Gift',
        meta: [
          {
            hid: 'description__products__limited__black_matte__gift',
            name: 'description',
            content: 'Our most exclusive product.Highest quality black metal. Comes in a handmade luxury brushed leather box and in a personalized black case.'
          }
        ]
      }
    }
}
</script>
