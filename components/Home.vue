<template>
  <div>
    <div class="section-1 h-screen flex flex-col items-center justify-center">
      <div class="flex flex-col items-center justify-center">
        <Navbar />
        <div class="flex flex-col justify-space-around">
          <h1
            class="text-center text-white text-6xl pr-5 pl-5 mt-20"
          >
            UNLEASH POWER OF NETWORKING
          </h1>
          <p class="text-white text-5xl my-5 text-center ml-48 mr-48">
            Share information with just a tap
          </p>
        </div>
        <div class="flex flex-row my-10">
          <button
            class="
              btn
              text-black text-3xl
              bg-white
              rounded-full
              pl-10
              pt-3
              pb-3
              pr-10
            "
          >
            See Products
          </button>
        </div>
        <div class="flex justify-center items-center mb-20">
          <p class="text-white text-2xl">No apps needed</p>
        </div>
      </div>
      <div class="overlay"></div>
    </div>

    <div class="section-2 flex flex-row bg-white">
      <div class="flex flex-col items-start pt-20 pl-20 pb-20">
        <h1 class="text-8xl">CARD4LIFE</h1>
        <h1 class="text-5xl text-gray-400">I - BUSINESS CARD</h1>
        <h3 class="text-4xl font-bold pt-5 pb-5 text-gray-400">
          Instantly transfer any information.
        </h3>
        <p class="text-3xl">
          Using NFC technology, the I-B card can share all of your information
          when tapped against a smartphone. No more messing around with old
          paper business cards, put all the information right where people spend
          most of their time - their phone!
        </p>
        <button
          class="
            text-white text-2xl
            btn
            theme-color-1
            pt-5
            pb-5
            pl-7
            pr-7
            mt-5
            mb-5
          "
        >
          SEE ALL PRODUCTS
        </button>
      </div>
     <img src="../static/images/video_2.png"/>
    </div>

    <div class="section-3 flex flex-row justify-evenly items-center">
      <p class="text-2xl text-gray-600 font-bold ml-20 mr-20">
        Join the 100+ companies using I-B CARD.
      </p>
      <img src="../static/images/companies_2.png"/>
    </div>

    <div
      class="section-4 pl-40 flex flex-col h-screen justify-center items-start"
    >
      <p class="text-4xl text-white font-semibold">Choose your</p>
      <p class="text-4xl text-white font-semibold">Premium</p>
      <p class="text-4xl text-white font-semibold">CARD4LIFE</p>
      <button
        class="
          btn
          pt-2
          pb-2
          pl-5
          pr-5
          mt-3
          -ml-3
          bg-transparent
          text-3xl text-white
          border-2 border-white
          rounded-full
        "
      >
        See products
      </button>
    </div>
    <div
      class="section-5 flex flex-col items-center justify-center mr-20 ml-20"
    >
      <h1 class="text-5xl pb-3 mt-20 mb-20 flex-col font-semibold">
        Go contactless in three simple steps!
        <div class="flex flex-row">
          <hr class="bg-black solid w-full" />
        </div>
      </h1>
      <div class="flex flex-row justify-center mt-20 mb-20 items-space-around">
        <div class="as flex flex-col items-center justify-center ml-5 mr-5">
          <div
            class="
              rounded-full
              text-6xl text-white
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
          <h1 class="text-4xl text-center mr-5 ml-5">Purchase your card</h1>
          <p class="text-gray-600 text-xl text-center">
            After placing your order, you will receive instructions on how to
            provide us with your logo or design for on the card.
          </p>
        </div>

        <div class="as flex flex-col items-center justify-center ml-5 mr-5">
          <div
            class="
              rounded-full
              text-6xl text-white
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
          <h1 class="text-4xl text-center">Create your profile</h1>
          <p class="text-gray-600 text-xl text-center">
            Here you can add, edit & enable what you would like to share with
            your contactless card.
          </p>
        </div>

        <div class="as flex flex-col items-center justify-center ml-20 mr-20">
          <div
            class="
              rounded-full
              text-6xl text-white
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
          <h1 class="text-4xl text-center">Tap, Share & Go</h1>
          <p class="text-gray-600 text-xl text-center">
            It's that simple! Share who you are and what you do with with one
            quick tap.
          </p>
        </div>
      </div>

      <div class="flex items-center flex-row-reverse">
          <iframe
            height="350"
            width="600"
            className="absolute top-0 left-0 w-full"
            src="https://www.youtube.com/embed/zihoyz0u_cs"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowFullScreen
          ></iframe>
        <img class="mr-14 ml-14" src="../static/images/pointer.png" />
        <h1 class="text-5xl text-grey-600">
          How to SET UP and use card in 4 easy steps!
        </h1>
      </div>
    </div>

    <div
      class="section-6 flex flex-col items-center justify-center mr-20 ml-20"
    >
      <h1 class="text-6xl mt-20 mb-20">
        <span class="pt-5 mt-5 underline">See how our customer</span> are using the i-b
        cards.
      </h1>
      <div class="flex flex-row">
        <div class="flex flex-col justify-start items-center mx-14">
          <img src="../static/images/iphone_mockup.png" />
          <h3 class="text-2xl font-semibold text-center py-5">Digital business card</h3>
          <p class="text-base text-center">
            Sharing their contact details, addresses, websites & emails easily.
          </p>
        </div>
        <div class="flex flex-col justify-start items-center mx-14">
          <img  src="../static/images/iphone_mockup.png" />
          <h3 class="text-2xl font-bold text-center py-5">Profile hub</h3>
          <p class="text-base text-center">
            Sharing everything about who you are and what you do.
          </p>
        </div>

       <div class="flex flex-col justify-start items-center mx-14">
          <img src="../static/images/iphone_mockup.png" />
          <h3 class="text-2xl font-bold text-center py-5">Lead tool</h3>
          <p class="text-base text-center">
              More leads and appointments there and then.
          </p>
        </div>

        <div class="flex flex-col justify-start items-center mx-14">
          <img src="../static/images/iphone_mockup.png" />
          <h3 class="text-2xl font-bold text-center py-5">Link to any URL</h3>
          <p class="text-base text-center">
            Linking to any digital presence.
            Apps, Videos, E-menus & PDFs.
          </p>
        </div>
      </div>
    </div>

    <div
      class="
        section-7
        flex flex-row
        items-center
        justify-center
        mr-20
        ml-20
        mt-20
        mb-20
      "
    >
      <div class="ml-5 mr-5 flex flex-col items-center justify-evenly">
        <div class="flex flex-row items-space-around mb-5">
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
        </div>
        <p class="text-2xl font-bold text-center">
          "Love this card, everyone I show this to is amazed by how innovative it is!"
        </p>
           <div class="flex flex-row justify-center items-center">
            <img
              class="rounded-full max-w-xs max-h-12 mr-5"
              src="../static/images/review_image.png"
            />
         
          <div class="flex flex-col">
            <p class="text-2xl pt-5">Jihene Ben Abderjazavac</p>
            <p class="text-gray-600">Verified customer</p>
          </div>
        </div>
       
      </div>

    <div class="ml-5 mr-5 flex flex-col items-center justify-center">
        <div class="flex flex-row items-space-around mb-5">
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
        </div>
        <p class="text-2xl font-bold text-center">
          "Love the physical product."
        </p>
        <div class="flex flex-row justify-center items-center">
            <img
              class="rounded-full max-w-xs max-h-12 mr-5"
              src="../static/images/review_image.png"
            />
         
          <div class="flex flex-col">
            <p class="text-2xl pt-5">Jihene Ben Abderjazavac</p>
            <p class="text-gray-600">Verified customer</p>
          </div>
        </div>
      </div>

      <div class="ml-5 mr-5 flex flex-col items-center justify-center">
        <div class="flex flex-row items-space-around mb-5">
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
          <img class="pl-1 pr-1" src="../static/images/star.png" />
        </div>
        <p class="text-2xl font-bold text-center">
          "I love these cards, and i love Sandro Hamzic because he has such a
          big dick."
        </p>
        <div class="flex flex-row justify-center items-center">
            <img
              class="rounded-full max-w-xs max-h-12 mr-5"
              src="../static/images/review_image.png"
            />
         
          <div class="flex flex-col">
            <p class="text-2xl pt-5">Jihene Ben Abderjazavac</p>
            <p class="text-gray-600">Verified customer</p>
          </div>
        </div>
      </div>
    </div>

    <Hint />

    <Footer />
  </div>
</template>
<script lang="ts">
require('nuxt-video-player/src/assets/css/main.css')


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

.video_1 {
  width: 500px!important;
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



