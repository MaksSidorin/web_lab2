<template>
 <div>
  <body>
    <header class="container">
    </header>
    <main class="container">
        <form action="/action_page.php">
           
            <section class="authorization">
                <label for="fname">Ваш логин:</label>
                <input type="text" id="fname" name="fname"><br><br>
            </section>

            <section class="authorization">
            <label for="lname">Пароль:</label>
            <input type="text" id="lname" name="lname"><br><br>
            </section>
           

            <section class="authorization">
            <input type="submit" value="Ввойти">
            </section>

          </form>

    </main>
</body>
 </div>
</template>

<style>

@import '../assets/mainPage.css';
@import '../assets/app.css';

</style>