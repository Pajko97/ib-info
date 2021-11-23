<template>
  <div class="flex flex-col justify-center pt-20 pb-20 lg:mx-40 mx-10 items-center">
    <h1 class="lg:text-4xl text-2xl text-left pb-20">Standard cards</h1>
    <div class="flex flex-col lg:flex-row justify-around items-around">
         

        <div
              class="
                flex
                mx-5
                flex-col
                max-w-sm
                justify-center
                items-center
                lg:mb-0
                mb-5
              "
            >
              <img
                alt="Gold Glitter | i-b card"
                class="w-80"
                src="../static/images/products/gold_glitter/gold_glitter.png"
              />
              <div class="shadow-small"></div>

              <h3 class="text-2xl pb-2 text-center font-bold pt-5">
                Gold Glitter
              </h3>
              <p class="text-lg pb-5 text-center pl-10 pr-10">
                {{ $t('product_pure_white_description') }}
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
                {{ $t('single_button_text')}}
              </button>
              <p class="text-xl font-bold pt-10"></p>
            </div>

            <div
              class="
                flex
                mx-5
                flex-col
                max-w-sm
                justify-center
                items-center
                lg:mb-0
                mb-5
              "
            >
              <img
                alt="Pink Glitter | i-b card"
                class="w-80"
                src="../static/images/products/rose_gold_glitter/rose_gold_glitter.png"
              />
              <div class="shadow-small"></div>

              <h3 class="text-2xl pb-2 text-center font-bold pt-5">
                Pink Glitter
              </h3>
              <p class="text-lg pb-5 text-center pl-10 pr-10">
                {{ $t('product_white_wood_description') }}
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
                  {{ $t('single_button_text')}}

              </button>
              <p class="text-xl font-bold pt-10"></p>
            </div>


    </div>
  </div>

</template>

<script lang="ts" >


export default {}

</script>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');

.theme-color-1 {
  background-color: #231f20;
}
.shadow-small {
 box-shadow: 0px 11px 11px -1px rgba(0,0,0,0.88);
-webkit-box-shadow: 0px 11px 11px -1px rgba(0,0,0,0.88);
-moz-box-shadow: 0px 11px 11px -1px rgba(0,0,0,0.88);
height: 5px;
width:60%;
margin-top:-10px;
}

* {
  font-family: 'Nunito Sans';
}
</style>
