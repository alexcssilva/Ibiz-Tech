<template>
  <div>
    <h1>Editar Licitação</h1>
    <div class="container mt-3 border border-primary">
      <div class="row">
        <div class="col-md-4">
          <form action="">
            <div class="mb-2">
              <p>Status Licitação:</p>
              <select class="form-select" aria-label="Default select example">
                <option selected>Selecione status licitação</option>
                <option value="">(1) - Processada</option>
                <option value="">(0) - Descartada</option>
                <option value="">(-1) - Em Edição</option>
              </select>
            </div>
            <div class="mb-2">
              <p>Número Edital:</p>
              <input type="text" class="form-control" placeholder="Número Edital">
            </div>
            <div class="mb-2">
              <p>Modalidade:</p>
              <select class="form-select" aria-label="Default select example">
                <option selected>Selecione modalidade</option>
                <option value="">Concorrência</option>
                <option value="">Concurso</option>
                <option value="">Convite</option>
                <option value="">Diálogo Competitivo</option>
                <option value="">Leilão</option>
                <option value="">Pregão</option>
                <option value="">Tomada de Preços</option>
              </select>
            </div>
            <div class="mb-2">
              <p>Data da licitação:</p>
              <input type="date" name="" id="">
            </div>
            <div class="mb-2">
              <p>Nome Licitador:</p>
              <input type="text" class="form-control" placeholder="Nome Licitador">
            </div>
            <div class="mb-2">
              <p>CNPJ Licitador:</p>
              <input type="number" name="" id="" class="form-control" placeholder="00.000.000/0000-00">
            </div>
            <div class="mb-2">
              <p>Prioridade:</p>
              <input type="number" name="" id="" class="form-control">
            </div>
            <div class="mb-2">
              <p>Objeto: </p>
              <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div>
              <button type="button" class="btn btn-success">Salvar </button>
              <router-link to="/licitation" type="router-link" class="btn btn-danger">Cancelar</router-link>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LicitationEdit',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
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
