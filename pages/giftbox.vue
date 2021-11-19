<template>
  <div>
    <GiftboxContent/>
  </div>
</template>

<script lang="ts">
export default {
  head() {
      return {
        title: 'Giftbox',
        meta: [
          {
            hid: 'description__giftbox',
            name: 'description',
            content: 'Kontaktirajte nas. Zelimo da su nasi klijenti zadovoljni nasom uslugom.'
          }
        ]
      }
    }
}




</script>


<style scoped>


* {
    font-family: 'Nunito Sans';
}

.theme-color-1 {
    background-color: #231F20;
}
.theme-color-2 {
    background-color: #F8F8F8;
}
.section-1 {
    background-image: url('../static/images/giftbox_cover.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size:cover; 
}

</style>