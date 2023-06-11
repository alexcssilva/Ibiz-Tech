<template>
  <div id="app">
    <nav>
      <router-link to="/licitation">Licitações</router-link> |
      <router-link to="/licitation/form">Cadastrar</router-link>
    </nav>
    <router-view />
  </div>
</template>

<script>
export default {

  created() {
    this.$http.get('/licitation').then((response) => {
      console.log(response);
    } )
  }
}

</script>

<style>

</style>
