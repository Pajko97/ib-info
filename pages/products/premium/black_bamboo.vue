
<template>
  <div>
    <NavbarBlack />
    <div class="flex lg:flex-row flex-col justify-center pt-20 pb-20 items-center">

      <div class="flex flex-col mx-10 lg:ml-20 md:mx-0 justify-center items-center lg:mb-0 mb-20">
        <img  src="../../../static/images/products/black_bamboo/black_bamboo.png" />
        <h3  class="text-4xl pb-2 font-bold pt-5 text-center">{{ $t( 'product_bamboo_name')}}</h3>
        <p class="text-lg pb-5 text-center pl-0 pr-0 lg:pl-10 lg:pr-10">
            {{ $t('product_bamboo_description') }}
        </p>
        
        
        <p class="text-xl font-bold">FROM 540.00KN</p>
      </div>

      <div class="flex flex-col justify-center items-center mx-20">
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
        title: 'i-b cards | Black Bamboo',
        meta: [
          {
            hid: 'description__products__limited__bamboo_black',
            name: 'description',
            content: 'Our most exclusive product.Highest quality black metal. Comes in a handmade luxury brushed leather box and in a personalized black case.'
          }
        ]
      }
    }
}
</script>
