<template>
  <div
    class="flex flex-col justify-center lg:mx-40 mx-10 pt-20 pb-20 items-center"
  >
    <h1 class="lg:text-4xl text-2xl text-left">
      {{ $t('products_headline ') }}
    </h1>
    <div class="flex flex-col justify-around items-around">
      <div class="flex flex-col">
        <h1
          class="
            text-3xl
            my-20
            text-center
            font-bold
            md:text-center
            border-solid border-b-4
            lg:text-center
            py-5
            text-gray-800
          "
        >
          Premium cards
        </h1>

        <div
          class="
            flex flex-row flex-wrap
            lg:justify-start
            justify-start
            items-center
          "
        >
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

            <h3 class="text-2xl pb-2 text-center font-bold pt-5">
              {{ $t('product_powerful_black_name') }}
            </h3>
            <p class="text-lg pb-5 text-center pl-10 pr-10 max-w-xs">
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

            <h3 class="text-2xl pb-2 text-center font-bold pt-5">
              {{ $t('product_golden_shine_name') }}
            </h3>
            <p class="text-lg pb-5 text-center pl-10 pr-10 max-w-xs">
              {{ $t('product_golden_shine_description') }}
            </p>

              <nuxt-link :to="localePath('/products/premium/gold')">
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

            <h3 class="text-2xl pb-2 text-center font-bold pt-5">
              {{ $t('product_rose_gold_name') }}
            </h3>
            <p class="text-lg pb-5 text-center pl-10 pr-10 max-w-xs">
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

            <h3 class="text-2xl pb-2 text-center font-bold pt-5">
              {{ $t('product_bamboo_name') }}
            </h3>
            <p
              class="
                text-lg
                self-center
                description_min
                pb-5
                text-center
                pl-10
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
              class="w-80"
              src="../static/images/products/black_pvc/black_pvc.png"
            />
            <div class="shadow-small"></div>

            <h3 class="text-2xl pb-2 text-center font-bold pt-5">
              {{ $t('product_black_matte_name') }}
            </h3>
            <p class="text-lg pb-5 text-center pl-10 pr-10 max-w-xs">
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

      <div class="flex flex-col">
        <h1
          class="
            text-3xl
            my-20
            text-center
            font-bold
            md:text-center
            lg:text-center
            py-5
            border-solid border-b-4
            text-gray-800
          "
        >
          Limited cards
        </h1>
        <div
          class="flex flex-col lg:flex-row flex-wrap justify-start items-center"
        >
          <div class="flex mx-5 flex-col max-w-sm justify-center items-center">
            <img
              alt="Gold Glitter | i-b card"
              class="w-80"
              src="../static/images/products/gold_glitter/gold_glitter.png"
            />
            <div class="shadow-small"></div>

            <h3 class="text-2xl pb-2 text-center font-bold pt-5">
              {{ $t('product_glitter_yellow_name') }}
            </h3>
            <p class="text-lg description_min pb-5 text-center pl-10 pr-10">
              {{ $t('product_glitter_yellow_description') }}
            </p>

              <nuxt-link :to="localePath('/products/limited/gold_glitter')">
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

          <div class="flex flex-col mx-5 max-w-sm justify-center items-center">
            <img
              alt="Gold Glitter | i-b card"
              class="w-80"
              src="../static/images/products/rose_gold_glitter/rose_gold_glitter.png"
            />
            <div class="shadow-small"></div>

            <h3 class="text-2xl pb-2 text-center font-bold pt-5">
              {{ $t('product_glitter_pink_name') }}
            </h3>
            <p class="text-lg description_min pb-5 text-center pl-10 pr-10">
              {{ $t('product_glitter_pink_description') }}
            </p>

            <nuxt-link :to="localePath('/products/limited/pink_glitter')">
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

      <div class="flex flex-col">
        <h1
          class="
            text-3xl
            my-20
            text-center
            font-bold
            md:text-center
            lg:text-center
            py-5
            text-gray-800
            border-solid border-b-4
          "
        >
          Standard cards
        </h1>
        <div class="flex lg:flex-row flex-col justify-start items-center">
          <div
            class="
              flex flex-col
              lg:flex-row
              justify-start
              flex-wrap
              items-center
            "
          >
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
                alt="Pure white | i-b card"
                class="w-80"
                src="../static/images/products/pure_white/pure_white.png"
              />
              <div class="shadow-small"></div>

              <h3 class="text-2xl pb-2 text-center font-bold pt-5">
                Pure white
              </h3>
              <p class="text-lg pb-5 text-center pl-10 pr-10">
                {{ $t('product_pure_white_description') }}
              </p>

              <nuxt-link :to="localePath('/products/standard/pure_white')">
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
                alt="White Wood | i-b card"
                class="w-80"
                src="../static/images/products/white_wood/wood_white.png"
              />
              <div class="shadow-small"></div>

              <h3 class="text-2xl pb-2 text-center font-bold pt-5">
                {{ $t('product_white_wood_name') }}
              </h3>
              <p class="text-lg pb-5 text-center pl-10 pr-10">
                {{ $t('product_white_wood_description') }}
              </p>

                <nuxt-link :to="localePath('/products/standard/white_wood')">
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
                alt="Cherry Wood | i-b card"
                class="w-80"
                src="../static/images/products/cherry_wood/cherry.png"
              />
              <div class="shadow-small"></div>

              <h3 class="text-2xl pb-2 text-center font-bold pt-5">
                {{ $t('product_cherry_name') }}
              </h3>
              <p class="text-lg pb-5 text-center pl-10 pr-10">
                {{ $t('product_cherry_description') }}
              </p>

                <nuxt-link :to="localePath('/products/standard/cherry_wood')">
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
      </div>
    </div>
  </div>
</template>

<script lang="ts" >
import products from './products.json'

export default {
  data() {
    return {
      products,
    }
  },
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');

.theme-color-1 {
  background-color: #231f20;
}
.line {
  height: 2px;
  background-color: black;
  width: 100%;
}
.description_min {
  min-height: 150px;
}

.shadow-small {
  box-shadow: 0px 11px 11px -1px rgba(0, 0, 0, 0.88);
  -webkit-box-shadow: 0px 11px 11px -1px rgba(0, 0, 0, 0.88);
  -moz-box-shadow: 0px 11px 11px -1px rgba(0, 0, 0, 0.88);
  height: 5px;
  width: 60%;
  margin-top: -10px;
}

* {
  font-family: 'Nunito Sans';
}
</style>
