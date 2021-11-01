<template>
  <div>
    <div class="section-1 flex flex-col items-center justify-center">
      <div class="flex flex-col items-center justify-center">
        <Navbar />
        <div class="flex flex-col justify-space-around">
          <h1
            class="text-center text-white mr-20 ml-20 text-6xl pr-5 pl-5 mt-20"
          >
            I-B CARD WAY OF NETWORKING
          </h1>
          <p class="text-white text-3xl my-5 text-center ml-48 mr-48">
            I - business cards come with integrated NFC technology, which
            enables you to transmit your contact details, socials & so much more
            into any smartphone with no app needed.
          </p>
        </div>
        <div class="flex flex-row my-10">
          <img src="../static/images/slider.png" class="mx-10" />
          <button
            class="
              btn
              text-black text-3xl
              bg-white
              rounded-full
              -pt-7
              pl-7
              pr-7
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
      <div class="flex flex-col pt-20 pl-20 pb-20 items-start justify-start">
        <h1 class="text-5xl">WE ARE PRESENTING I - BUSINESS CARD</h1>
        <h3 class="text-4xl font-bold pt-5 pb-5 text-gray-500">
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
      <img src="../static/images/video.png" />
    </div>

    <div class="section-3 flex flex-row justify-center items-center">
      <p class="text-2xl text-gray-600 font-bold mr-20">
        Join the 100+ companies using I-B CARD.
      </p>
      <img src="../static/images/companies.png" />
    </div>

    <div
      class="section-4 pl-40 flex flex-col h-screen justify-center items-start"
    >
      <p class="text-6xl text-white font-semibold">Choose your</p>
      <p class="text-6xl text-white font-semibold">Premium</p>
      <p class="text-6xl text-white font-semibold">CARD4LIFE</p>
      <button
        class="
          btn
          pt-2
          pb-2
          pl-5
          pr-5
          mt-3
          bg-transparent
          text-4xl text-white
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
      <h1 class="text-6xl mt-20 mb-20">
        Go contactless in <span class="underline">three simple steps!</span>
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
          <h1 class="text-5xl">Purchase your card</h1>
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
          <h1 class="text-5xl">Create your profile</h1>
          <p class="text-gray-600 text-xl text-center">
            Here you can add, edit & enable what you would like to share with
            your contactless card.
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
            3
          </div>
          <h1 class="text-5xl">Tap, Share & Go</h1>
          <p class="text-gray-600 text-xl text-center">
            It's that simple! Share who you are and what you do with with one
            quick tap.
          </p>
        </div>
      </div>

      <div class="flex flex-row mt-20 mt-20 mb-20 items-center">
        <iframe
          width="1020"
          height="415"
          src="https://www.youtube.com/embed/tgbNymZ7vqY"
        ></iframe>
        <img class="mr-14 ml-14" src="../static/images/pointer.png" />
        <h1 class="text-7xl mr-12 ml-12 text-grey-600">
          How to SET UP and use card in 4 easy steps!
        </h1>
      </div>
    </div>

    <div
      class="section-6 flex flex-col items-center justify-center mr-20 ml-20"
    >
      <h1 class="text-6xl mt-20 mb-20">
        <span class="underline">See how our customer</span> are using the i-b
        cards.
      </h1>
      <div class="flex flex-row">
        <div class="flex flex-col justify-center items-center ml-12 mr-12">
          <img height="200" src="../static/images/iphone_mockup.png" />
          <h3 class="text-3xl font-bold text-center">Digital business card</h3>
          <p class="text-xl text-center">
            Sharing their contact details, addresses, websites & emails easily.
          </p>
        </div>
        <div class="flex flex-col justify-center items-center ml-12 mr-12">
          <img height="200" src="../static/images/iphone_mockup.png" />
          <h3 class="text-3xl font-bold text-center">Profile hub</h3>
          <p class="text-xl text-center">
            Sharing their contact details, addresses, websites & emails easily.
          </p>
        </div>
        <div class="flex flex-col justify-center items-center ml-12 mr-12">
          <img height="200" src="../static/images/iphone_mockup.png" />
          <h3 class="text-3xl font-bold text-center">Lead generation tool</h3>
          <p class="text-xl text-center">
            Sharing their contact details, addresses, websites & emails easily.
          </p>
        </div>
        <div class="flex flex-col justify-center items-center ml-12 mr-12">
          <img height="200" src="../static/images/iphone_mockup.png" />
          <h3 class="text-3xl font-bold text-center">Link to any URL</h3>
          <p class="text-xl text-center">
            Sharing their contact details, addresses, websites & emails easily.
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
          <div class="rounded-full bg-black mr-5">
            <img
              class="rounded-full bg-black pt-2 pb-2 pl-5 pr-5"
              src="../static/images/star.png"
            />
          </div>
          <div class="flex flex-col">
            <h3 class="text-2xl pt-5">Jihene Ben Abderjazavac</h3>
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
          <div class="rounded-full bg-black mr-5">
            <img
              class="rounded-full bg-black pt-2 pb-2 pl-5 pr-5"
              src="../static/images/star.png"
            />
          </div>
          <div class="flex flex-col">
            <h3 class="text-2xl pt-5">Jihene Ben Abderjazavac</h3>
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
          <div class="rounded-full bg-black mr-5">
            <img
              class="rounded-full bg-black pt-2 pb-2 pl-5 pr-5"
              src="../static/images/star.png"
            />
          </div>
          <div class="flex flex-col">
            <h3 class="text-2xl pt-5">Jihene Ben Abderjazavac</h3>
            <p class="text-gray-600">Verified customer</p>
          </div>
        </div>
      </div>
    </div>

    <Hint />

    <Footer />
  </div>
</template>

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

.theme-color-1 {
  background-color: #231f20;
}

@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');

* {
  font-family: 'Nunito Sans';
  text-wrap: text-wrap;
}
</style>

<script lang="ts">
</script>