<template>
  <div>
    <h1>Detalhes Licitação</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item list-group-item">ID: <span class="fw-bold">Name</span> </li>
            <li class="list-group-item list-group-item">Fase: <span class="fw-bold">Name</span> </li>
            <li class="list-group-item list-group-item">Número Edital: <span class="fw-bold">Name</span> </li>
            <li class="list-group-item list-group-item">Data Abertura: <span class="fw-bold">Name</span> </li>
            <li class="list-group-item list-group-item">Nome Licitador: <span class="fw-bold">Name</span> </li>
            <li class="list-group-item list-group-item">CNPJ Licitador: <span class="fw-bold">Name</span> </li>
            <li class="list-group-item list-group-item">Prioridade: <span class="fw-bold">Name</span> </li>
            <li class="list-group-item list-group-item">Objeto: <span class="fw-bold">Name</span> </li>
            <li class="list-group-item list-group-item">Data de Criação: <span class="fw-bold">Name</span> </li>
            <li class="list-group-item list-group-item">Data de Modificação: <span class="fw-bold">Name</span>
            </li>
          </ul>
          <div class="col-sm-1 d-flex flex-column justify-content-center align-items-center">
            <router-link to="/licitation/detail/edit/:licitationId" class="btn btn-primary my-2">
              <i class="bi bi-pencil-square icon-black"></i>
            </router-link>
            <button class="btn btn-danger my-2">
              <i class="bi bi-trash3-fill icon-black"></i>
            </button>
                        <div>
                <router-link to="/licitation" type="router-link" class="btn btn-success">Voltar</router-link>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LicitationDetail',
}
</script>

<style scoped>
.form-container {
  display: flex;
  justify-content: center;
  margin-top: 2px;
}

.form-control {
  margin-right: 5px;
}
</style>
