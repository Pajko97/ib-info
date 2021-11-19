
<template>
  <div>
    <NavbarBlack />
    <ProductsList />
    <Hint />
    <Footer />
  </div>
</template>

<script lang="ts">

export default {
    head() {
      return {
        title: 'Proizvodi',
        meta: [
          {
            hid: 'description__products',
            name: 'description',
            content: 'Proizvode koje mozete naruciti: Premium, Standard, Limited, personalizirane i poklon digitalne kartice.'
          }
        ]
      }
    }
}
</script>
