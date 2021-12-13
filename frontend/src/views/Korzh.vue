<template>
<div>
<body>    
    <main class="container">

        <section class="artistsName">
            <div>
                Макс Корж       
            </div>
        </section>

        <section class="presentation">
            <div>
                Большой сольный концерт 
                   <conertInfo>
                      Газпром Арена. Санкт-Петербург. 3 сентября 2022
                </conertInfo>
                    
            </div>
        </section>

        <section class="buyTickets">
            <div>
            <a href="https://afisha.yandex.ru/saint-petersburg/concert/maks-korzh-2022-spb?utm_source=music&utm_medium=artist"> Купить билеты </a>
            </div>
        </section>

                <section v-for="item in artist" :key="item" class="artistInfo">
            <Artist :artist="item"></Artist>
        </section>  

   
 </main>    
    </body>
    </div>
    </template>

<script>
import Artist from "../components/ArtistInfo.vue";
export default {
  name: 'Bandana',
  components: {Artist},
  data() {
    return {
      artist: [
      {
        img_url_1: "Korzh1.jpg",
        img_url_2: "Korzh2.jpg",
        img_url_3: "Korzh3.jpg",
        description: null
      }
      ]
    }
  },
  created() {
    this.$http.get('/artist/4')
      .then(response => this.artist[0].description = response.data.description)   
  }
}
</script>

<style>
   @import '../assets/mainPage.css';
</style>
