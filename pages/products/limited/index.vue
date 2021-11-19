
<template>
  <div>
    <NavbarBlack />
    <ProductsLimitedContent />
    <Hint />
    <Footer />
  </div>
</template>

<script lang="ts">
export default {
    head() {
      return {
        title: 'Proizvodi - Limited',
        meta: [
          {
            hid: 'description__products__limited',
            name: 'description',
            content: 'Pogledajte ponudu limited i-b card digitalnih biznis kartica.'
          }
        ]
      }
    }
}
</script>
