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
        img_url_1: "bbt.jpg",
        img_url_2: "Dragonborn.jpg",
        img_url_3: "tape.jpg",
        description: "Big Baby Tape (Биг Бэйби Тэйп) – рэп-исполнитель, саунд-продюсер. \
            Начинал свою творческую карьеру с создания минусов под ником DJ Tape. \
            В 2016 году представил первый инструментальный альбом The Further Adventures Inside The Trap. \
            В 2017-ом порадовал слушателей микстейпом Cookin Anthem, а спустя год артист презентовал релиз \
            под названием Hustle Tales. Широкую известность получил после сольника Dragonborn, \
            который был выпущен во второй половине 2018-го."
      },
      {
        img_url_1: "kzk.jpeg",
        img_url_2: "kzk2.jpeg",
        img_url_3: "kzk3.jpeg",
        description: "Олег Нечипоренко, более известный под псевдонимом KIZARU, впервые увидел \
            свет 21-го мая 1989 года в Ленинграде.И наконец после очень продолжительного ожидания 3 ноября 2017 года выходит новый альбом KIZARU «Яд», \
            в трек-лист которого входит восемнадцать композиций. Альбом который так долго ждали все поклонники Кизару, занимает первое место в топе айтюнса, \
            и приносит много шума его персоне. "
      }
      ]
    }
  }
}
</script>

<style>
   @import '../assets/mainPage.css';
</style>
