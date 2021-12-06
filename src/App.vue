<template>
 <div>
<head>
    <meta charset="UTF-8">
    <title>Music</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="css/mainPage.css" rel="stylesheet">
   
</head>
<body>
    <header class="container">
        <div>
        </div>
        <nav>
            <ul>
                 <router-link :to="{name: 'Auth'}">Авторизация</router-link>
                <li>Каталог</li>
                <li>Контакты</li>
            </ul>
        </nav>
    </header>
  
    <router-view/>

    <footer>
        <div class="container row row-space-between">
            <div>&copy; 2021</div>
            <div>8 800 555 35 35</div>
        </div>
    </footer>

</body>
 </div> 
</template>

<style>

@import './assets/mainPage.css';

</style>
