<template>
<div>
   <main class="container">
 
        <section class="concertHeader">
            <div>
                Вы можете посетить: 
             </div>
        </section> 
       
        <section class="concertName">
            
            <scripWidth>   
            <div>
               <router-link :to="{name: 'Scrip'}">Скриптонит - Большой сольный концерт 14.11.2021</router-link>
            </div>
            </scripWidth>
            
            <padding>
            </padding>

            <bandanaWidth>
            <div>
                <router-link :to="{name: 'Bandana'}">BIG BABY TAPE x KIZARU - BANDANA 22.11.2021</router-link>
            </div>
            </bandanaWidth>

            <padding>
            </padding>

            <korzhWidth>
            <div>
               <router-link :to="{name: 'Korzh'}"> Макс Корж - Большой сольный концерт  03.09.2022 </router-link>
            </div>
            </korzhWidth>

        </section>    
        
    </main>
</div>
</template>

<style>

@import '../assets/mainPage.css';

</style>
