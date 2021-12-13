<template>
<div>
<body>    
<main class="container">

        <section class="artistsName">
            <div>
                СКРИПТОНИТ        
            </div>
        </section>

        <section class="presentation">
            <div>
                Большой сольный концерт 
                   <concertInfo>
                      Мегаспорт. 14 ноября 2021 в 19:00
                </concertInfo>
                    
            </div>
        </section>

        <section class="buyTickets">
            <div>
            <a href="https://scriptonit-tickets.com/events/45609#widget-area"> Купить билеты </a>
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
        img_url_1: "Scrip1.jpg",
        img_url_2: "Scrip2.jpg",
        img_url_3: "Scrip3.png",
        description: null
      }
      ]
    }
  },
  created() {
    this.$http.get('/artist/3')
      .then(response => this.artist[0].description = response.data.description)   
  }
}

</script>

<style>
   @import '../assets/mainPage.css';
</style>
