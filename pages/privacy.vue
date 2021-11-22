
<template>
  <div>
    <NavbarBlack/>
    <PrivacyContent/>
    <Footer/>
  </div>
</template>

<script lang="ts">

export default {
  head() {
      return {
        title: 'Privacy Policy',
        meta: [
          {
            hid: 'description__privacy',
            name: 'description',
            content: 'Saznajte sve o nama i kako su nastale digitalne biznis kartice sa NFC tehnologijom.'
          }
        ]
      }
    }
}
</script>
