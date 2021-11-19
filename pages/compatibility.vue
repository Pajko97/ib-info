
<template>
  <div>
    <NavbarBlack/>
    <CompatibilityContent/>
    <Footer/>
  </div>
</template>

<script lang="ts">

export default {
  head() {
      return {
        title: 'Kompatibilnost',
        meta: [
          {
            hid: 'description__compatibility',
            name: 'description',
            content: 'Kompatibilnost telefona koji mogu koristiti i-b card digitalnu biznis karticu.'
          }
        ]
      }
    }
}
</script>
