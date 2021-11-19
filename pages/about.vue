
<template>
  <div>
    <NavbarBlack/>
    <AboutContent/>
    <Footer/>
  </div>
</template>

<script lang="ts">

export default {
  head() {
      return {
        title: 'About',
        meta: [
          {
            hid: 'description__about',
            name: 'description',
            content: 'Saznajte sve o nama i kako su nastale digitalne biznis kartice sa NFC tehnologijom.'
          }
        ]
      }
    }
}
</script>
