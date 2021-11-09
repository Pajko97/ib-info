<template>
  <div>
    <div class="section-1 relative h-screen flex flex-col  overflow-hidden lg:items-center lg:justify-center">
      <div class="flex-flex-col absolute top-0 right-0 z-50 lg:mr-5 lg:mt-5 items-center text-center justify-center">
            <p class="text-base text-white pb-2">{{ $t('nav_language')}}</p>
            <div class="flex flex-row">
              <nuxt-link class="theme-color-1 text-white mr-2 text-sm px-2 py-2" :to="switchLocalePath('en')">English</nuxt-link>
              <nuxt-link class="theme-color-1 text-white text-sm px-2 py-2" :to="switchLocalePath('hr')">Hrvatski</nuxt-link>
            </div>
          </div>
      <div class="w-screen h-screen absolute bg-over z-10"></div>
      <div class="flex flex-col z-20 items-center justify-centers">
        <Navbar />
        <div class="flex flex-col justify-space-around">
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
              pl-10
              pt-3
              pb-3
              pr-10
            "
          >
            {{ $t('section_4_button') }}
          </button></NuxtLink>
        </div>
        <div class="flex justify-center items-center mb-20">
          <p class="text-white text-2xl">{{ $t('home_app_not_needed') }}</p>
        </div>
      </div>
<!--             <div class="overlay overflow-hidden z-40 w-screen h-screen relative"></div>
 -->
      <video
        autoplay
        loop
        muted
        class="lg:bg-blend-darken absolute z-0 w-auto min-w-full min-h-full max-w-none"
      >
        <source
          src="../static/videos/landing_bg_video.mp4"
          type="video/mp4"
        />
        Your browser does not support the video tag.
      </video>
    </div>

    <div class="section-2 flex flex-col p-5 lg:flex-row bg-white">
      <div class="mr-20 mb-5 flex flex-col items-start lg:pt-20 lg:pl-20 lg:pb-20">
        <h1 class="lg:text-5xl text-gray-400">{{ $t('home_section_2_h1') }}</h1>
        <h3 class="lg:text-4xl text-xl font-bold lg:pt-5 lg:pb-5 text-gray-400">
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
            <video
              controls
              loop
              muted
              class="w-full h-full"
            >
        <source
          src="../static/videos/landing_bg_video.mp4"
          type="video/mp4"
        />
        Your browser does not support the video tag.
      </video>  
      </div>
 </div>

    <div class="section-3 flex flex-col md:flex-row justify-evenly items-center">
      <p class="lg:text-2xl text-lg text-gray-600 text-center mr-3 ml-3 mt-3 font-bold lg:ml-20 lg:mr-20">
        {{ $t('home_section_3_text')}}
      </p>
      <img src="../static/images/companies_2.png"/>
    </div>

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
          text-3xl text-white
          border-2 border-white
          rounded-full
        "
      >
        {{ $t('home_button') }}
      </button>
    </div>
    <div
      class="section-5 flex flex-col items-center justify-center lg:mr-20 lg:ml-20"
    >
      <h1 class="lg:text-5xl text-center text-2xl lg:my-5 mx-14 my-5 pb-3 lg:mt-20 lg:mb-20 flex-col font-semibold">
        {{ $t('section_5_h1')}}
      </h1>
      <div class="flex flex-col lg:flex-row justify-center lg:mt-20 lg:mb-20 my-10 items-space-around">
        <div class="as flex flex-col items-center justify-center my-5 mx-14 lg:my-5 lg:mx-5">
          <div
            class="
              rounded-full
              text-2xl
              lg:text-6xl text-white
              bg-black
              pt-1.5
              pb-1.5
              pr-5
              pl-5
              mb-3
            "
          >
            1
          </div>
          <h1 class="lg:text-4xl text-2xl text-center mr-5 ml-5">{{ $t('section_5_h1_2')}}</h1>
          <p class="text-gray-600 text-xl text-center">{{ $t('section_5_p_1')}}</p>
        </div>

        <div class="as flex flex-col items-center justify-center my-5 mx-14 lg:my-5 lg:mx-5">
          <div
            class="
              rounded-full
              text-2xl
              lg:text-6xl text-white
              bg-black
              pt-1.5
              pb-1.5
              pr-5
              pl-5
              mb-3
            "
          >
            2
          </div>
          <h1 class="lg:text-4xl text-2xl text-center">{{ $t('section_5_h1_3')}}</h1>
          <p class="text-gray-600 text-xl text-center">
            {{ $t('section_5_p_2')}}
          </p>
        </div>

        <div class="as flex flex-col items-center justify-center my-5 mx-14 lg:my-5 lg:mx-5">
          <div
            class="
              rounded-full
              lg:text-6xl
              text-2xl
              text-white
              bg-black
              pt-1.5
              pb-1.5
              pr-5
              pl-5
              mb-3
            "
          >
            3
          </div>
          <h1 class="lg:text-4xl text-2xl text-center">{{ $t('section_5_h1_4')}}</h1>
          <p class="text-gray-600 text-xl text-center">
            {{ $t('section_5_p_3')}}
          </p>
        </div>
      </div>

      <div class="flex items-center lg:flex-row-reverse flex-col flex-col-reverse">
    <video
        loop
        controls
        muted
        class="w-full h-full px-5 lg:px-0"
      >
        <source
          src="../static/videos/landing_bg_video.mp4"
          type="video/mp4"
        />
        Your browser does not support the video tag.
      </video>  
        <img class="py-5 lg:py-0 mr-14 ml-14 origin-center transform rotate-90 w-10" src="../static/images/pointer.png" />
        <h1 class="lg:text-5xl text-grey-600">
          {{ $t('section_5_h1_5')}}
        </h1>
      </div>
    </div>

    <div
      class="section-6 flex flex-col items-center justify-center lg:mr-20 lg:ml-20"
    >
      <h1 class="lg:text-6xl text-2xl text-center px-5 py-10 lg:mt-20 lg:mb-20">
        {{ $t('section_6_h1')}}
      </h1>
      <div class="flex lg:flex-row flex-col">
        <div class="flex flex-col justify-start items-center mx-14 my-5">
          <img src="../static/images/screen_1.png" />
          <h3 class="text-2xl font-semibold text-center lg:pt-5 lg:pb-5 pt-0">{{ $t('section_6_h3_1')}}</h3>
          <p class="text-base text-center">
            {{ $t('section_6_p_1')}}
          </p>
        </div>
        <div class="flex flex-col justify-start items-center mx-14 my-5">
          <img  src="../static/images/screen_2.png" />
          <h3 class="text-2xl font-bold text-center lg:pt-5 lg:pb-5 pt-0">{{ $t('section_6_h3_2')}}</h3>
          <p class="text-base text-center">
            {{ $t('section_6_p_2')}}
          </p>
        </div>

       <div class="flex flex-col justify-start items-center mx-14 my-5">
          <img src="../static/images/screen_3.png" />
          <h3 class="text-2xl font-bold text-center lg:pt-5 lg:pb-5 pt-0">{{ $t('section_6_h3_3')}}</h3>
          <p class="text-base text-center">
            {{ $t('section_6_p_3')}}
          </p>
        </div>

        <div class="flex flex-col justify-start items-center mx-14 my-5">
          <img src="../static/images/screen_4.png" />
          <h3 class="text-2xl font-bold text-center lg:pt-5 lg:pb-5 pt-0">{{ $t('section_6_h3_4')}}</h3>
          <p class="text-base text-center">
            {{ $t('section_6_p_4')}}
            </p>
        </div>
      </div>
    </div>

    <Hint />

    <Footer />
  </div>
</template>
<script lang="ts">

export default {
  head () {
    return {
      title: 'Home',
      meta: [
        { hid: 'description', name: 'i-b cards', content: 'About our company Nuxt.js ' }
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
  background-position: center;
  background-size: cover;
}

.theme-color-1 {
  background-color: #231f20;
}

.bg-over {
  background-color: rgba(52,52,52,0.5);
}

.video_1 {
  width: 500px!important;
}

.z-ind-middle {
  z-index : 30;
}
.z-ind {
  z-index: 999!important;
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

@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');

* {
  font-family: 'Nunito Sans';
  text-wrap: text-wrap;
}
</style>



