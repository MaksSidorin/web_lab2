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
                   <conertInfo>
                      Мегаспорт. 14 ноября 2021 в 19:00
                </conertInfo>
                    
            </div>
        </section>

        <section class="buyTickets">
            <div>
            <a href="https://scriptonit-tickets.com/events/45609#widget-area"> Купить билеты </a>
            </div>
        </section>

                <section v-for="item in artistInfo" :key="item" class="artistInfo">
            <ArtistInfo :artistInfo="item"></ArtistInfo>
        </section>  

   
 </main>    
    </body>
    </div>
    </template>

<script>
import ArtistInfo from "../components/ArtistInfo.vue";
export default {
  name: 'Bandana',
  components: {ArtistInfo},
  data() {
    return {
      artistInfo: [
      {
        img_url_1: "Scrip1.jpg",
        img_url_2: "Scrip2.jpg",
        img_url_3: "Scrip3.png",
        description: "Скриптонит - рэпер с казахскими корнями приобрел известность на родине еще в юности, \
         а к 26 годам стал открытием в российской музыке \
         Будучи на вершине успеха, исполнитель решил сделать перерыв \
            в сольном творчестве, но реализовал талант в группе и коллаборациях с другими известными музыкантами. \
          Исполнитель и музыкальный продюсер, основатель лейбла Musica36."
      }
      ]
    }
  }
}
</script>

<style>
   @import '../assets/mainPage.css';
</style>
