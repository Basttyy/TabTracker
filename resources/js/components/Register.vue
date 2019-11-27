<template>
  <div>
    <h1>Register</h1>
    
    <input type="text" placeholder="Email" v-model="email" name="email"/>
    <input type="password" placeholder="password" v-model="password" name="password"/>
    <br>
    <button @click="register">Register</button>
  </div>
</template>

<script>
import AuthenticationService from '../services/AuthenticationService'
export default {
  data () {
    return {
      email: '',
      password: ''
    }
  },
  mounted () {

  },
  methods: {
    async register () {
        await AuthenticationService.register({
        email: this.email,
        password: this.password
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component-->
<style scoped>

</style>
