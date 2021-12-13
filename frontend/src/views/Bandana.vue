<template>
<div>
<body>    
 <main class="container">
        <section class="artistsName">

            <div>
                BIG BABY TAPE x KIZARU      
            </div>
        </section>

        <section class="presentation">
            <div>
                ПРЕЗЕНТАЦИЯ АЛЬБОМА 
                   <albumName>
                      BANDANA
                </albumName>
                    
            </div>
        </section>

        <section class="buyTickets">
            <div>
            <a href="https://www.ticketland.ru/kluby/main-stage/big-baby-tape-kizaru/"> Купить билеты </a>
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
        img_url_1: "bbt.jpg",
        img_url_2: "Dragonborn.jpg",
        img_url_3: "tape.jpg",
        description: null
      },
      {
        img_url_1: "kzk.jpeg",
        img_url_2: "kzk2.jpeg",
        img_url_3: "kzk3.jpeg",
        description: null
      }
      ]
    }
  },
    created() {

    this.$http.get('/artist/1')
      .then(response => this.artist[0].description = response.data.description)

    this.$http.get('/artist/2')
      .then(response => this.artist[1].description = response.data.description)
    }
}
</script>

<style>
   @import '../assets/mainPage.css';
</style>
