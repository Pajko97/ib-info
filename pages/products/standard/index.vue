
<template>
  <div>
    <NavbarBlack />
    <ProductsStandardContent />
    <Hint />
    <Footer />
  </div>
</template>

<script lang="ts">

export default {
  
    head() {
      return {
        title: 'Proizvodi - Standard',
        meta: [
          {
            hid: 'description__products__standard',
            name: 'description',
            content: 'Pogledajte ponudu standard i-b card digitalnih biznis kartica.'
          }
        ]
      }
    }
}
</script>
