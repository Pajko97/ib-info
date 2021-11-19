
<template>
  <div>
    <NavbarBlack />
    <div class="flex lg:flex-row flex-col justify-center pt-20 pb-20 items-center">

      <div class="flex flex-col mx-10 lg:mx-0 md:mx-0 justify-center items-center lg:mb-0 mb-5">
        <img  src="../../../static/images/products/gold_glitter/gold_glitter.png" />
        <h3  class="text-4xl pb-2 font-bold pt-5 text-center">Gold glitter</h3>
        <p class="text-lg pb-5 text-center pl-0 pr-0 lg:pl-10 lg:pr-10">
        </p>
        
        
        <p class="text-xl font-bold">{{ $t('products_price_3')}}</p>
      </div>

      <div class="flex flex-col justify-center items-center w-96">
          <h1 class="text-4xl pb-5">Reach out to us</h1>
          <p class="text-center">{{ $t('product_explain') }}</p>
          <ContactForm/>
      </div>
    </div>
    <Hint /> 
    <Footer />
  </div>
</template>

<script lang="ts">
export default {
    head() {
      return {
        title: 'i-b cards | Gold Glitter',
        meta: [
          {
            hid: 'description__products__limited__gold_glitter',
            name: 'description',
            content: 'Do you want to be part of the chosen society and be the owner of a 100 limited edition card? The card comes in special black box and personalized black case.'
          }
        ]
      }
    }
}
</script>
