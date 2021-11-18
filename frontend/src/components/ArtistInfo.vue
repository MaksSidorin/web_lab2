
<template>
  <div>
        <section class="artistImage">
            <img :src="require(`@/assets/images/${artistInfo.img_url_1}`)" alt="artist_img_1">
            <img :src="require(`@/assets/images/${artistInfo.img_url_2}`)" alt="artist_img_2">
            <img :src="require(`@/assets/images/${artistInfo.img_url_3}`)" alt="artist_img_3">
        </section>

          <section class="artistInfo">
            {{artistInfo.description}}

          </section>
  </div>
</template>

<script>
export default {
  name: 'AtristInfo',
  props: ['artistInfo'],
}
</script>

<style>
   @import '../assets/mainPage.css';
</style>