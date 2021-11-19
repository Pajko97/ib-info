<template>
  <div class="flex flex-col justify-center pt-20 pb-20 items-center">
    <h1 class="lg:text-4xl text-2xl text-left pb-20">Standard cards</h1>
     <div class="flex flex-col lg:flex-row justify-around items-around">
          <div class="flex flex-col justify-center items-center lg:mb-0 mb-5">
            <img  src="../static/images/card_1.png" />
            <h3 class="text-2xl pb-2 text-center font-bold pt-5">Pure white</h3>
            <p class="text-lg pb-5 text-center pl-10 pr-10">
                fasfdsfsdafds fasd fasd fas fsd fasd fef we 22 d2 23 ger gdsf
            </p>
      
          <button
              class="
                pr-9
                pl-9
                pt-3
                pb-3
                btn
                rounded-full
                lg:text-xl
                text-lg
                theme-color-1
                text-white
              "
            >
              {{ $t('product_limited')}}
            </button>
        <p class="text-xl font-bold pt-10">{{ product.price}}</p>
      </div>

       <div class="flex flex-col justify-center items-center lg:mb-0 mb-5">
            <img  src="../static/images/products/cherry_wood/cherry.png" />
            <h3 class="text-2xl pb-2 text-center font-bold pt-5">{{ $t('product_cherry_name') }}</h3>
            <p class="text-lg pb-5 text-center pl-10 pr-10">
                {{ $t('product_cherry_description') }}
            </p>
      
          <button
              class="
                pr-9
                pl-9
                pt-3
                pb-3
                btn
                rounded-full
                lg:text-xl
                text-lg
                theme-color-1
                text-white
              "
            >
              SEE MORE
            </button>
        <p class="text-xl font-bold pt-10">FROM 899.00KN</p>
      </div>

    </div>
  </div>
</template>

<script lang="ts" >
import products from './products.json'


export default {
  data() {
      return {
          products
      }
  }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');

.theme-color-1 {
  background-color: #231f20;
}

* {
  font-family: 'Nunito Sans';
}
</style>
