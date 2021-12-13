<template>
 <div>
  <body>
    <header class="container">
    </header>
    <main class="container">
    
            <section class="authorization">
                <label for="fname">Ваш логин:</label>
                <input ref="name" >
            </section>

            <section class="authorization">
            <label for="lname">Почта:</label>
           <input ref="email" >
            </section>
           
            <section class="authorization">
            <button v-on:click="auth()">Продолжить</button>
            </section>

    </main>
</body>
 </div>
</template>

<script>
export default {
  name: 'Auth',
  data() {
    return {
      inputs: [
        {
            hint: "Имя"
        },
        {
            hint: "почта"
        }
      ],
      name: null,
      email: null,
    }
  },
  methods: {
    auth() {
      this.name = this.$refs.name.value
      this.email = this.$refs.email.value
      const request = {
        name: this.name,
        email: this.email
      }
      let self = this
      this.$http.post('/auth', request)
        .then(function(response) {
           self.$router.push({name: 'Home'} )
        },
        function(response) {
          self.$router.push( {name: 'NotFound'} )
        })
    },
  }
}
</script>

<style>

@import '../assets/mainPage.css';
@import '../assets/app.css';

</style>