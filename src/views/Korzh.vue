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
        img_url_1: "Korzh1.jpg",
        img_url_2: "Korzh2.jpg",
        img_url_3: "Korzh3.jpg",
        description: "Макс Корж — молодой, энергичный и талантливый исполнитель из Беларуси, собирающий крупнейшие концертные площадки по всему миру. \
            Его песни — это некий гибрид клубного и дворового жанров. При этом на выходе «рождаются» 100-процентные хиты. Он говорит, что музыка — это его все. \
            Популярность рэпера зашкаливает, что не мешает \
            Максу ломать стереотипы восприятия современной музыки и устраивать на сцене настоящий домашний «флэт»."
      }
      ]
    }
  }
}
</script>

<style>
   @import '../assets/mainPage.css';
</style>
