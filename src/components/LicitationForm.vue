<template>
  <div>
    <h1>Cadastrar Licitação</h1>
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
              <button type="button" class="btn btn-success">Cadastrar</button>
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
  name: 'LicitationForm',
  data() {
    return {
      licitationList: []
    }
  },
  methods: {
    AddLicitation() {

    },
  },
  created() {
    let licitation = [
      {
        idLic: 1,
        nu_fase: 1,
        nuEdital: "BR2222",
        modalidade: "Leilão",
        dataAbertura: "2023-06-22",
        nomeLicitador: "",
        cnpjLicitador: "",
        prioridade: 1,
        objeto: "Objeto de licitação"
      }
    ]
    this.licitationList = licitation
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}
</style>
