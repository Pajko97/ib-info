
<template>
  <div>
    <NavbarInverted />
    <ProductsPremiumContent/>
    <Hint />
    <Footer />
  </div>
</template>

<script lang="ts">
export default {
    head() {
      return {
        title: 'Proizvodi - Premium',
        meta: [
          {
            hid: 'description__products__premium',
            name: 'description',
            content: 'Pogledajte ponudu premium i-b card digitalnih biznis kartica.'
          }
        ]
      }
    }
}
</script>

