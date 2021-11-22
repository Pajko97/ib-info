
<template>
  <div class="h-screen">
    <NavbarBlack/>
    <h1 class="lg:mx-40 mx-14 my-14 text-4xl text-center">{{$t('contact_headline')}}</h1>
    <ContactFormContact/>
    <ContactContent/>
    <Footer/>
  </div>
</template>

<script>
export default {
  head() {
      return {
        title: 'Kontakt',
        meta: [
          {
            hid: 'description__contact',
            name: 'description',
            content: 'Kontaktirajte nas. Zelimo da su nasi klijenti zadovoljni nasom uslugom.'
          }
        ]
      }
    }
}


</script>
