<template>
  <div class="flex flex-col justify-center pt-20 pb-20 lg:mx-40 mx-10 items-center">
    <h1 class="lg:text-4xl text-2xl text-left pb-20">Limited cards</h1>
    <div class="flex flex-col lg:flex-row justify-around items-around">
          <div class="flex flex-col justify-center items-center lg:mb-0 mb-5">
         <img src="../static/images/products/gold_glitter/gold_glitter.png" />
<!--         <img src="../static/images/amazon_logo.png" />
 -->            

 <h3 class="text-2xl pb-2 text-center font-bold pt-5">Gold glitter</h3>
        <p class="text-lg pb-5 text-center pl-10 pr-10">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, aperiam. Veniam fugiat deleniti tempore ipsam est eius, rerum perspiciatis fugit.
        </p>
  
       <nuxt-link to="/products/limited/gold_glitter">
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
        </button></nuxt-link>
        <p class="text-xl font-bold pt-10">FROM 988.00KN</p>
      </div>

        <div class="flex flex-col justify-center items-center lg:mb-0 mb-5">
         <img src="../static/images/products/rose_gold_glitter/rose_gold_glitter.png" />
<!--         <img src="../static/images/amazon_logo.png" />
 -->            
 <h3 class="text-2xl pb-2 text-center font-bold pt-5">Pink glitter</h3>
        <p class="text-lg pb-5 text-center pl-10 pr-10">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, aperiam. Veniam fugiat deleniti tempore ipsam est eius, rerum perspiciatis fugit.
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
        <p class="text-xl font-bold pt-10">FROM 988.00KN</p>
      </div>


    </div>
  </div>

</template>

<script lang="ts" >


export default {
  
  data() {
      return {
        product : {},
          products : {
  premium: [
    {
      name: "Powerful black",
      material: "Metal ib card",
      description: "Our most exclusive product.Highest quality black metal. Comes in a handmade luxury brushed leather box and in a personalized black case.",
      card_image_url: "../static/images/powerful_black.png",
      card_case_url: "../static/images/powerful_black_case.png",
      card_gift_url: "images/products/black_metal/black_metal",
      id: "black_metal"
    },
    {
      name: "Golden shine",
      material: "Metal ib card",
      description: "Our most exclusive product. Highest quality gold metal. Comes in a handmade luxury brushed leather box and in a  personalized black case.",
      card_image_url: "~/static/images/golden_shine.png",
      card_case_url: "~/static/images/golden_shine_case.png",
      id: "gold_shine"
    },
    {
      name: "Rose gold",
      material: "Metal ib card",
      description: "Our most exclusive product. Highest quality rose gold metal. Comes in a handmade luxury brushed leather box and in a personalized black case.",
      card_image_url: "~/static/images/products/rose_gold/rose_gold_case.png",
      card_case_url: "~/static/images/rose_gold_case.png",
      card_gift_url: "../static/images/products/rose_gold/rose_gold_gift.png",
      id: "rose_gold"
    },
    {
      name: "Black texture",
      material: "Wooden ib card",
      description: "The card is made of black bamboo and is an inspiration for anyone who wants to show their artistic soul. Comes in a handmade luxury box and in a personalized black case.",
      card_image_url: "~/static/images/black_texture.png",
      card_case_url: "~/static/images/black_texture_case.png",
      id: "wood_black"
    },
    {
      name: "Black matte",
      material: "PVC ib card",
      description: "A black matte card with a special effect. Powerfull look. Comes in a handmade luxury box and in a  personalized black case.",
      card_image_url: "~/static/images/black_matte.png",
      card_case_url: "~/static/images/black_matte_case.png",
      id: "black_matte"
    }
  ],
  standard: [
    {
      name: "Pure white",
      material: "PVC ib card",
      description: "The card comes in a personalized case.",
      card_image_url: "~/static/images/pure_white.png",
      card_case_url: "~/static/images/pure_white_case.png",
      id: "pure_white"
    },
    {
      name: "Bamboo",
      material: "Cherry wood ib card",
      description: "The card comes in a personalized case.",
      card_image_url: "~/static/images/bamboo.png",
      card_case_url: "~/static/images/bamboo_case.png",
      id: "bamboo"
    }
  ],
  limited: [
    {
      name: "Gold glitter",
      material: "PVC ib card",
      description: "Do you want to be part of the chosen society and be the owner of a 100 limited edition card? The card comes in special black box and personalized black case.",
      card_image_url: "~/static/images/products/gold_glitter/gold_glitter.png",
      card_case_url: "~/static/images/gold_glitter_yellow_case.png",
      id: "gold_glitter"
    },
    {
      name: "Gold glitter Pink",
      material: "PVC ib card",
      description: "Do you want to be part of the chosen society and be the owner of a 100 limited edition card?",
      card_image_url: "~/static/images/gold_glitter_pink_case.png",
      card_case_url: "~/static/images/gold_glitter_pink_case.png",
      id: "rose_gold_glitter"
    }
  ]
}
      }
  },
  
  computed : {
    
     
  },


  beforeMount() {
    const prods = [...this.products.premium, ...this.products.standard, ...this.products.limited]
    this.product = prods.filter(item => item.id === 'black_metal')
  },

  methods : {
      getImage(val:any) {
        const image = require(`@/static/images/products/${val.id}/${val.id}.png`);
          return image
      },
  },
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
