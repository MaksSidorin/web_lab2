
<template>
  <div>
        <section class="artistImage">
            <img :src="require(`@/assets/images/${artist.img_url_1}`)" alt="artist_img_1">
            <img :src="require(`@/assets/images/${artist.img_url_2}`)" alt="artist_img_2">
            <img :src="require(`@/assets/images/${artist.img_url_3}`)" alt="artist_img_3">
        </section>

          <section class="artistInfo">
            {{artist.description}}

          </section>
  </div>
</template>

<script>
export default {
  name: 'Artist',
  props: ['artist'],
}
</script>

<style>
   @import '../assets/mainPage.css';
</style>