<template>
  <div class="flex flex-col justify-center lg:mx-40 mx-10 pt-20 pb-20 items-center">
    <h1 class="lg:text-4xl text-2xl text-left">{{ $t('products_headline ')}}</h1>
     <div class="flex flex-col justify-around items-around">
       
       <div class="flex flex-col">
         <h1 class="text-3xl my-20 text-center theme-color-1 font-bold md:text-center lg:text-center py-5 text-white">Premium cards</h1>

         <div class="flex flex-row flex-wrap lg:justify-center justify-center items-center">
          <div class="max-w-24 mx-5 flex flex-col justify-center items-center lg:mb-5 mb-5">
        <img class="w-80" src="../static/images/products/black_metal/black_metal.png" />
        <h3 class="text-2xl pb-2 text-center font-bold pt-5">{{ $t('product_powerful_black_name') }}</h3>
        <p class="text-lg pb-5 text-center pl-10 pr-10 max-w-xs">
            {{ $t('product_powerful_black_description') }}
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
        <p class="text-xl font-bold pt-10"></p>
      </div>

         <div class="max-w-24 mx-5 flex flex-col justify-center items-center lg:mb-5 mb-5">
        <img class="w-80" src="../static/images/products/gold/gold_metal.png" />
        <h3 class="text-2xl pb-2 text-center font-bold pt-5">{{ $t('product_golden_shine_name') }}</h3>
        <p class="text-lg pb-5 text-center pl-10 pr-10 max-w-xs">
            {{ $t('product_golden_shine_description') }}
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
        <p class="text-xl font-bold pt-10"></p>
      </div>

         <div class="max-w-24 mx-5 flex flex-col justify-center items-center lg:mb-5 mb-5">
        <img class="w-80" src="../static/images/products/rose_gold/rose_gold.png" />
        <h3 class="text-2xl pb-2 text-center font-bold pt-5">{{ $t('product_rose_gold_name') }}</h3>
        <p class="text-lg pb-5 text-center pl-10 pr-10 max-w-xs">
            {{ $t('product_rose_gold_description') }}
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
        <p class="text-xl font-bold pt-10"></p>
      </div>

         <div class="max-w-24 mx-5 flex flex-col justify-center self-start items-center lg:mb-5 mb-5">
        <img class="w-80" src="../static/images/products/black_bamboo/black_bamboo.png" />
        <h3 class="text-2xl pb-2 text-center font-bold pt-5">{{ $t('product_bamboo_name') }}</h3>
        <p class="text-lg self-center description_min pb-5 text-center pl-10 pr-10 max-w-xs">
            {{ $t('product_bamboo_description') }}
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
        <p class="text-xl font-bold pt-10"></p>
      </div>

         <div class="max-w-24 mx-5 flex flex-col justify-center items-center lg:mb-5 mb-5">
        <img class="w-80" src="../static/images/products/black_pvc/black_pvc.png" />
        <h3 class="text-2xl pb-2 text-center font-bold pt-5">{{ $t('product_black_matte_name') }}</h3>
        <p class="text-lg pb-5 text-center pl-10 pr-10 max-w-xs">
            {{ $t('product_black_matte_description') }}
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
        <p class="text-xl font-bold pt-10"></p>
      </div>


         </div>
       </div>

       <div class="flex flex-col">
         <h1 class="text-3xl my-20 text-center theme-color-1 font-bold md:text-center lg:text-center py-5 text-white">Limited cards</h1>
            <div class="flex flex-col lg:flex-row flex-wrap justify-center items-center">
              
               <div class="flex mx-5 flex-col max-w-sm justify-center items-center">
          <img  height="250"  src="../static/images/products/gold_glitter/gold_glitter.png" />
          <h3 class="text-2xl pb-2 text-center font-bold pt-5">{{ $t('product_glitter_yellow_name')}}</h3>
          <p class="text-lg description_min pb-5 text-center pl-10 pr-10">
            {{ $t('product_glitter_yellow_description')}}
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
        <p class="text-xl font-bold pt-10"></p>
      </div>

       <div class="flex flex-col mx-5 max-w-sm justify-center items-center">
          <img height="250" src="../static/images/products/rose_gold_glitter/rose_gold_glitter.png" />
          <h3 class="text-2xl pb-2 text-center font-bold pt-5">{{ $t('product_glitter_pink_name')}}</h3>
          <p class="text-lg description_min pb-5 text-center pl-10 pr-10">
            {{ $t('product_glitter_pink_description')}}
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
        <p class="text-xl font-bold pt-10"></p>
      </div>


         </div>
       </div>

       <div class="flex flex-col">
         <h1 class="text-3xl my-20 text-center bg-black font-bold md:text-center lg:text-center py-5 text-white">Standard cards</h1>
         <div class="flex lg:flex-row flex-col justify-between items-between">
            <div class="flex flex-col lg:flex-row justify-between flex-wrap items-between">
          <div class="flex mx-5 flex-col max-w-sm justify-center items-center lg:mb-0 mb-5">
        <img class="w-80" src="../static/images/products/pure_white/pure_white.png" />
        <h3 class="text-2xl pb-2 text-center font-bold pt-5">{{ $t('product_pure_white_name')}}</h3>
        <p class="text-lg pb-5 text-center pl-10 pr-10">
            {{ $t('product_pure_white_description')}}
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
        <p class="text-xl font-bold pt-10"></p>
      </div>


    </div>

            <div class="flex mx-5 flex-col max-w-sm justify-center items-center lg:mb-0 mb-5">
        <img class="w-80" src="../static/images/products/cherry_wood/cherry.png" />
        <h3 class="text-2xl pb-2 text-center font-bold pt-5">Cherry wood</h3>
        <p class="text-lg pb-5 text-center pl-10 pr-10 description_min">
            {{ $t('product_cherry_description')}}
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
        <p class="text-xl font-bold pt-10"></p>
      </div>


    </div>
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
.line {
  height :2px;
  background-color:black;
  width: 100%;
}
.description_min {
  min-height:150px;
}
* {
  font-family: 'Nunito Sans';
}
</style>
