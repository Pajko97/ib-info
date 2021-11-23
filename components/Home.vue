<template>
  <div>
    <div class="section-1 h-screen flex flex-col lg:items-center lg:justify-center">
      
      <div class="absolute z-10 lg:block hidden">
                 <video
              id="myvideo"
              loop
              autoplay
              muted
              class="w-full h-full"
            ><source
            src="../static/videos/landing_bg_video.mp4"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video> 
      </div>

       <div class="absolute z-10 lg:hidden visible">
                 <video
              id="myvideo"
              loop
              autoplay
              muted
              class="w-full h-full"
            ><source
            src="../static/videos/landing_bg_mobile.mp4"
            type="video/mp4"
            
          />
          Your browser does not support the video tag.
        </video> 
      </div>


      <div class="flex flex-col lg:block hidden absolute top-0 right-0 lg:mr-5 lg:mt-5 items-center text-center justify-center z-20">
            <p class="text-base text-white pb-2">Language</p>
            <div class="flex flex-row">
              <nuxt-link class="text-white mr-2 text-sm px-2 py-2" :to="switchLocalePath('en')"><img width="40" height="40"  src="../static/images/flag_uk.png"/></nuxt-link>
              <nuxt-link class="text-white text-sm px-2 py-2" :to="switchLocalePath('hr')"><img width="40"  height="40"  src="../static/images/croatia_flag.png"/></nuxt-link>
            </div>
        </div>
      <div class="flex flex-col items-center justify-centers z-40">
        
        <NavbarBlack />
        <div class="flex flex-col justify-space-around ">
    
          
          <h1
            class="text-center text-white lg:text-6xl text-3xl pr-5 pl-5 mt-32"
          >
            {{ $t('home_h1') }}
          </h1>
          <p class="text-white lg:text-5xl text-xl my-5 text-center lg:ml-48 lg:mr-48">
            {{ $t('home_h2')}}
          </p>
        </div>
        <div class="flex flex-row my-10">
         <NuxtLink to="/products">
          <button
            class="
              btn
              text-black lg:text-3xl
              text-2xl
              bg-white
              rounded-full
              pl-7
              pr-7
            "
          >
            {{ $t('section_4_button') }}
          </button></NuxtLink>
        </div>
        <div class="flex justify-center items-center mb-20">
          <p class="text-white text-2xl">{{ $t('home_app_not_needed') }}</p>
        </div>
      </div>
  
    </div>

    <div class="section-2 flex flex-col p-5 lg:flex-row bg-white">
      <div class="mr-20 mb-5 flex flex-col items-start lg:pt-20 lg:pl-20 lg:pb-20">
        <h3 class="lg:text-4xl text-xl font-bold text-gray-400">
          {{ $t('home_section_2_h3') }}
        </h3>
        <h4 class="lg:text-3xl text-xl font-bold lg:pt-5 lg:pb-5 text-black">{{ $t('home_section_2_h4')}}</h4>

        <p class="lg:text-3xl">
         {{ $t('home_section_2_description')}}
        </p>
        <button
          class="
            text-white lg:text-2xl
            btn
            theme-color-1
            pt-2
            pb-2
            px-4
            mt-5
            md:pt-5
            md:pb-5
            md:pl-7
            md:pr-7
            md:mt-5
            md:mb-5
          "
        >
          {{ $t('home_section_2_button')}}
        </button>
      </div>
      <div class="flex flex-col justify-center items-center">
        <img class="" alt="i-b card - novi nacin povezivanja" src="../static/images/proba5gif.gif" /> 

      <!-- Ako ne posalje ostavi ovako -->
      </div>
 </div>

    <!-- <div class="section-3 flex flex-col md:flex-row justify-evenly items-center">
      <p class="lg:text-2xl text-lg text-gray-600 text-center mr-3 ml-3 mt-3 font-bold lg:ml-20 lg:mr-20">
        {{ $t('home_section_3_text')}}
      </p>
      <img src="../static/images/companies_2.png"/>
    </div> -->
        <div
      class="section-4 lg:pl-40 flex pr-3 pl-3 flex-col h-screen justify-center items-center lg:items-start"
    >
      <p class="text-4xl text-white text-center font-semibold">{{ $t('section_4_1')}}</p>
      <p class="text-4xl text-white text-center font-semibold">{{ $t('section_4_2')}}</p>
      <p class="text-4xl text-white text-center font-semibold">{{ $t('section_4_3')}}</p>
      <button
        class="
          btn
          pt-2
          pb-2
          pl-5
          pr-5
          mt-3
          lg:-ml-3
          bg-transparent
          text-4xl text-white
          border-2 border-white
          rounded-full
        "
      >
        {{ $t('home_button') }}
      </button>
    </div>
    <!-- Proizvodi -->
            <h1 class="text-4xl text-center pt-10">Svi proizvodi</h1>

       <div class="section-products flex flex-col justify-between items-center lg:flex-row lg:mx-40 lg:my-20">

      <div class="flex flex-col justify-center items-center lg:mb-0 mb-10">
        <img alt="white PVC i-b card" width="300" src="../static/images/products/pure_white/pure_white.png" />
         <div class="shadow-small"></div>
        <h3 class="text-2xl pb-2 font-bold pt-5 text-center">{{ $t('products_h1_standard')}}</h3>
       
        
        <nuxt-link :to="localePath('/products/standard')">
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
          {{ $t('products_button_limited')}}
        </button></nuxt-link>
<!--         <p class="text-xl font-bold pt-10">{{ $t('products_price_2')}}</p>
 -->      </div>

      <div class="flex flex-col justify-center items-center lg:mb-0 mb-10">
        <img alt="golden brushed metal i-b card" width="300" src="../static/images/products/gold/gold_metal.png" />
        <div class="shadow-small"></div>
        <h3 class="text-2xl pb-2 font-bold pt-5 text-center">{{ $t('products_h1_limited')}}</h3>
       
        
        <nuxt-link :to="localePath('/products/limited')"> <button
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
          {{ $t('products_button_limited')}}
        </button></nuxt-link>

<!--         <p class="text-xl font-bold pt-10">{{ $t('products_price_2')}}</p>
 -->      </div>

  <div class="flex flex-col justify-center items-center lg:mb-0 mb-5">
        <img alt="custom i-b card" width="300" src="../static/images/products/black_metal/black_metal.png" />
        <div class="shadow-small"></div>
        <h3 class="text-2xl pb-2 font-bold pt-5 text-center">{{ $t('products_h1_custom')}}</h3>
     
     
        <nuxt-link :to="localePath('/products/premium')"><button
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
          {{ $t('products_button_limited')}}
        </button></nuxt-link>

<!--         <p class="text-xl font-bold pt-10">{{ $t('products_price_2')}}</p>
 -->      </div>
    </div>
 
      <h1 class="lg:text-5xl text-center text-2xl lg:my-5 mx-14 my-5 pb-3 lg:mt-20 lg:mb-20 flex-col font-semibold">
        {{ $t('section_5_h1')}}
      </h1>

               <video
              id="myvideo"
              loop
              poster="/images/video_placeholder.png"
              controls
              class="block w-full h-full px-5 pb-5 lg:hidden"
            ><source
            src="../static/videos/explainer_mobile.mp4"
            type="video/mp4"
          />
               </video>
    <div
      class="section-5 flex-col items-center justify-center hidden lg:block md:block lg:mr-20 lg:ml-20"
    >
    
      <div class="flex flex-row items-center justify-center" >
        <div class="as flex flex-col items-center justify-center my-5 mx-14 lg:my-5 lg:mx-5">
          <div
            class="
              rounded-full
              text-2xl
              lg:text-4xl text-white
              bg-black
              flex
              justify-center
              items-center
              broj
              mb-5
            "
          >
            1
          </div>
          <h1 class="lg:text-2xl text-2xl text-center mr-5 ml-5">{{ $t('section_5_h1_2')}}</h1>
          <div class="flex flex-col justify-center items-center">
                <img alt="android/iphone mockup usecase" width="600" src="../static/images/explainer_image.png"/>
                <div class="flex flex-row justify-between items-center">
                  <p class="text-center pt-10 px-10">{{ $t('android_step_description')}}</p>
                  <p class="text-center pt-10 px-10">{{ $t('iphone_step_description')}}</p>
                </div>
          </div>
        </div>
      </div>
        
      <div class="flex flex-col lg:flex-row justify-center lg:mt-20 lg:mb-20 my-10 items-space-around">
        

        <div class="as flex flex-col items-center justify-center my-5 mx-14 lg:my-5 lg:mx-5">
          <div
            class="
              rounded-full
              text-2xl
              lg:text-4xl text-white
              bg-black
              flex
              justify-center
              items-center
              broj
              mb-5
            "
          >
            2
          </div>
          <h1 class="lg:text-2xl text-2xl text-center">{{ $t('section_5_h1_3')}}</h1>
          <img alt="i-b card app screen 1" src="../static/images/screen__guide_1.png"/>

        </div>

        <div class="as flex flex-col items-center justify-center my-5 mx-14 lg:my-5 lg:mx-5">
          <div
            class="
              rounded-full
              text-2xl
              lg:text-4xl text-white
              bg-black
              flex
              justify-center
              items-center
              broj
              mb-5
            "
          >
            3
          </div>
          <h1 class="lg:text-2xl text-2xl text-center">{{ $t('section_5_h1_4')}}</h1>
            <img alt="i-b card app screen 2" src="../static/images/screen_guide_2.png"/>

        </div>

         <div class="as flex flex-col items-center justify-center my-5 mx-14 lg:my-5 lg:mx-5">
            <img alt="i-b card logo" class="mb-5 animate-pulse" height="60" width="60" src="../static/images/logo_white_on_black.png"/>

          <h1 class="lg:text-2xl text-2xl text-center">{{ $t('section_5_h1_5')}}</h1>
            <img alt="i-b card app screen 3" src="../static/images/screen_guide_3.png"/>
        </div>
      </div>

     
    </div>


    <Hint />

    <Footer />
  </div>
</template>
<script lang="ts">
import '../static/main.css'


export default {
  
  head () {
    return {
      
      title: 'i-b cards',
      meta: [
        { hid: 'description__home', name: 'description', content: 'Opis stranice' }
      ]
    }
  }
}

</script>

<style scoped>
.section-1 {
  background-image: url('../static/images/home_bg.png');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

.section-3 {
  background-color: rgba(242, 242, 242, 1);
}

.section-4 {
  background-image: url('../static/images/section_4_bg.png');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.section-8 {
  background-image: url('../static/images/section_8_bg.png');
  background-repeat: no-repeat;
  background-position: 0px -200px;
  background-size: cover;
}
.shadow-small {
 box-shadow: 0px 11px 11px -1px rgba(0,0,0,0.88);
-webkit-box-shadow: 0px 11px 11px -1px rgba(0,0,0,0.88);
-moz-box-shadow: 0px 11px 11px -1px rgba(0,0,0,0.88);
height: 5px;
width:60%;
margin-top:-10px;
}

.theme-color-1 {
  background-color: #231f20;
}
.font-theme-1 {
    color: #231f20;
}
.theme-color-2 {
  background-color : #646464;
}



.video_1 {
  width: 500px!important;
}
.show {
  display:flex;
}

.hide {
  display: none;
}



.overlay {
   position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 4; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer;
}
hr.solid {
  
  border-top: 3px solid #000000;
}
.hide-video {
  display:none;
}
.show-video {
  display:block;
}
#myVideo {
  position: absolute;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
.broj {
  width:60px;
  height:60px;
}

@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');

* {
  font-family: 'Nunito Sans';
}
</style>

<script lang="ts">
</script>