<template>
  <div class="bg-black flex flex-col justify-center pt-20 pb-20 lg:px-40 px-10 items-center">
    <h1 class="lg:text-4xl text-2xl text-white text-left pb-20">Premium kartice</h1>
    <div class="flex lg:flex-row flex-wrap justify-start items-center">
   

          <div
            class="
              max-w-24
              mx-5
              flex flex-col
              justify-center
              items-center
              lg:mb-5
              mb-5
            "
          >
            <img
              alt="Powerful Black | i-b card"
              class="w-80"
              src="../static/images/products/black_metal/black_metal.png"
            />
            <div class="shadow-small"></div>

            <h3 class="text-2xl text-white pb-2 text-center font-bold pt-5">
              {{ $t('product_powerful_black_name') }}
            </h3>
            <p class="text-lg text-white pb-5 text-center pl-10 pr-10 max-w-xs">
              {{ $t('product_powerful_black_description') }}
            </p>

           <nuxt-link :to="localePath('/products/premium/power_black')">
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
              </nuxt-link>
            <p class="text-xl font-bold pt-10"></p>
          </div>

          <div
            class="
              max-w-24
              mx-5
              flex flex-col
              justify-center
              items-center
              lg:mb-5
              mb-5
            "
          >
            <img
              alt="Golden Shine | i-b card"
              class="w-80"
              src="../static/images/products/gold/gold_metal.png"
            />
            <div class="shadow-small"></div>

            <h3 class="text-2xl text-white pb-2 text-center font-bold pt-5">
              {{ $t('product_golden_shine_name') }}
            </h3>
            <p class="text-lg text-white pb-5 text-center pl-10 pr-10 max-w-xs">
              {{ $t('product_golden_shine_description') }}
            </p>

              <nuxt-link :to="localePath('/products/premium/gold_shine')">
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
              </nuxt-link>
            <p class="text-xl font-bold pt-10"></p>
          </div>

          <div
            class="
              max-w-24
              mx-5
              flex flex-col
              justify-center
              items-center
              lg:mb-5
              mb-5
            "
          >
            <img
              alt="Rose Gold | i-b card"
              class="w-80"
              src="../static/images/products/rose_gold/rose_gold.png"
            />
            <div class="shadow-small"></div>

            <h3 class="text-2xl text-white pb-2 text-center font-bold pt-5">
              {{ $t('product_rose_gold_name') }}
            </h3>
            <p class="text-lg text-white pb-5 text-center pl-10 pr-10 max-w-xs">
              {{ $t('product_rose_gold_description') }}
            </p>

             <nuxt-link :to="localePath('/products/premium/rose_gold')">
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
              </nuxt-link>
            <p class="text-xl font-bold pt-10"></p>
          </div>

          <div
            class="
              max-w-24
              mx-5
              flex flex-col
              justify-center
              self-start
              items-center
              lg:mb-5
              mb-5
            "
          >
            <img
              alt="Black Bamboo | i-b card"
              class="w-80"
              src="../static/images/products/black_bamboo/black_bamboo.png"
            />
            <div class="shadow-small"></div>

            <h3 class="text-2xl text-white pb-2 text-center font-bold pt-5">
              Bamboo Black
            </h3>
            <p
              class="
                text-lg
                self-center
                description_min
                pb-5
                text-center
                pl-10
                text-white
                pr-10
                max-w-xs
              "
            >
              {{ $t('product_bamboo_description') }}
            </p>

              <nuxt-link :to="localePath('/products/premium/black_bamboo')">
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
              </nuxt-link>
            <p class="text-xl font-bold pt-10"></p>
          </div>

          <div
            class="
              max-w-24
              mx-5
              flex flex-col
              justify-center
              items-center
              lg:mb-5
              mb-5
            "
          >
            <img
              alt="Black Matte | i-b card"
              class="w-80 border-solid border-white"
              src="../static/images/products/black_pvc/black_pvc.png"
            />
            <div class="shadow-small"></div>

            <h3 class="text-2xl text-white pb-2 text-center font-bold pt-5">
              {{ $t('product_black_matte_name') }}
            </h3>
            <p class="text-lg text-white pb-5 text-center pl-10 pr-10 max-w-xs">
              {{ $t('product_black_matte_description') }}
            </p>

             <nuxt-link :to="localePath('/products/premium/black_matte')">
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
              </nuxt-link>
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

* {
  font-family: 'Nunito Sans';
}
</style>
