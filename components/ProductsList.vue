<template>
  <div class="flex flex-col justify-center pt-20 pb-20 items-center">
    <h1 class="lg:text-4xl text-2xl text-left pb-20">{{ $t('products_headline')}}</h1>

    <div class="flex lg:flex-row flex-col justify-evenly items-center ml-14 mr-14 lg:ml-40 lg:mr-40 ">
      <div class="flex flex-col justify-center items-center lg:mb-0 mb-5">
        <img  src="../static/images/card_1.png" />
        <h3 class="text-2xl pb-2 text-center font-bold pt-5">{{ $t('products_h1_1')}}</h3>
        <p class="text-lg pb-5 text-center pl-10 pr-10">
          {{ $t('products_p_1')}}
        </p>
  
       <button
          class="
            pr-9
            pl-9
            lg:pt-6
            lg:pt-6
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
          {{ $t('products_button')}}
        </button>
        <p class="text-xl font-bold pt-10">{{ $t('products_price_1')}}</p>
      </div>

    <div class="flex flex-col justify-center items-center lg:mb-0 mb-5">
        <img src="../static/images/card_2.png" />
        <h3 class="text-2xl pb-2 font-bold pt-5 text-center">{{ $t('products_h1_2')}}</h3>
        <p class="text-lg pb-5 text-center lg:pl-10 lg:pr-10">
          {{ $t('products_p_2')}}
        </p>
         <button
          class="
            pr-9
            pl-9
            lg:pt-6
            lg:pt-6
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
          {{ $t('products_button')}}
        </button>
        <p class="text-xl font-bold pt-10">{{ $t('products_price_2')}}</p>
      </div>

      <div class="flex flex-col justify-center items-center lg:mb-0 mb-5">
        <img src="../static/images/card_3.png" />
        <h3 class="text-2xl pb-2 font-bold pt-5 text-center">PVC Plastic</h3>
        <p class="text-lg pb-5 text-center pl-0 pr-0 lg:pl-10 lg:pr-10">
          Our most budget friendly card for contactless networking.
        </p>
            <button
          class="
            pr-9
            pl-9
            lg:pt-6
            lg:pt-6
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
          {{ $t('products_button')}}
        </button>
        <p class="text-xl font-bold pt-10">{{ $t('products_price_3')}}</p>
      </div>
    </div>
  </div>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');

.theme-color-1 {
  background-color: #231f20;
}

* {
  font-family: 'Nunito Sans';
}
</style>
