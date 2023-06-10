<template>
  <div class="container-search">
    <h1>Licitações</h1>
    <form>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Procurar Edital" aria-label="Recipient's username"
          aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Procurar</button>
      </div>
    </form>
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-6">
          <div class="card my-2 list-group-item-secondary shadow-lg">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-7">
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
                </div>
                <div class="col-sm-1 d-flex flex-column justify-content-center align-items-center">
                  <router-link to="/licitation/detail/:licitationId" class="btn btn-warning my-2">
                    <i class="bi bi-eye icon-black"></i>
                  </router-link>
                  <router-link to="/licitation/detail/edit/:licitationId" class="btn btn-primary my-2">
                    <i class="bi bi-pencil-square icon-black"></i>
                  </router-link>
                  <button class="btn btn-danger my-2">
                    <i class="bi bi-trash3-fill icon-black"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LicitationList',
}
</script>

<style scoped>
.container-search {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.input-group {
  text-align: c;
  display: flex;
  justify-content: center;
  margin-top: 40px;
  margin-bottom: 100px;
  width: 600px;
}

.form-container {
  display: flex;
  justify-content: center;
  margin-top: 2px;
}

.form-control {
  margin-right: 5px;
}
</style>
