<template>
  <div>
    <h1>Cadastrar Licitação</h1>
    <div class="container mt-3 border border-primary" v-for="licitation in licitationList" :key="licitation.idLic">
      <div class="row">
        <div class="col-md-4">
          <form action="">
            <div class="mb-2">
              <p>Status Licitação:</p>
              <select class="form-select" aria-label="Default select example" v-model="status">
                <option selected>Selecione status licitação</option>
                <option value="(1) - Processada">(1) - Processada</option>
                <option value="(0) - Descartada">(0) - Descartada</option>
                <option value="(-1) - Em Edição">(-1) - Em Edição</option>
              </select>
            </div>
            <div class="mb-2">
              <p>Número Edital:</p>
              <input type="text" class="form-control" placeholder="Número Edital" v-model="numeroEdital">
            </div>
            <div class="mb-2">
              <p>Modalidade:</p>
              <select class="form-select" aria-label="Default select example" v-model="modalidade">
                <option selected>Selecione modalidade</option>
                <option value="Concorrência">Concorrência</option>
                <option value="Concurso">Concurso</option>
                <option value="Convite">Convite</option>
                <option value="Diálogo Competitivo">Diálogo Competitivo</option>
                <option value="Leilão">Leilão</option>
                <option value="Pregão">Pregão</option>
                <option value="Tomada de Preços">Tomada de Preços</option>
              </select>
            </div>
            <div class="mb-2">
              <p>Data da licitação:</p>
              <input type="date" name="" id="" v-model="dataLicitacao">
            </div>
            <div class="mb-2">
              <p>Nome Licitador:</p>
              <input type="text" class="form-control" placeholder="Nome Licitador" v-model="nomeLicitador">
            </div>
            <div class="mb-2">
              <p>CNPJ Licitador:</p>
              <input type="number" name="" id="" class="form-control" placeholder="00.000.000/0000-00"
                v-model="cnpjLicitador">
            </div>
            <div class="mb-2">
              <p>Prioridade:</p>
              <input type="number" name="" id="" class="form-control" v-model="prioridade">
            </div>
            <div class="mb-2">
              <p>Objeto: </p>
              <textarea name="" id="" cols="30" rows="10" class="form-control" v-model="objeto"></textarea>
            </div>
            <div>
              <button type="button" class="btn btn-success" @click="AddLicitation">Cadastrar </button>
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
      licitationList: [],
      errorMessage: null,
      status: '',
      numeroEdital: '',
      modalidade: '',
      dataLicitacao: '',
      nomeLicitador: '',
      cnpjLicitador: '',
      prioridade: '',
      objeto: '',
    }
  },
  created() {
    try {
      let licitation = [
        {
          idLic: '',
          nuFase: '',
          nuEdital: '',
          modalidade: '',
          dataAbertura: '',
          nomeLicitador: '',
          cnpjLicitador: '',
          prioridade: '',
          objeto: '',
        }
      ]
      this.licitationList = licitation
    } catch (error) {
      this.errorMessage = error
    }
  },
  methods: {
    AddLicitation() {
      const newLicitation = {
        status: this.status,
        numeroEdital: this.numeroEdital,
        modalidade: this.modalidade,
        dataLicitacao: this.dataLicitacao,
        nomeLicitador: this.nomeLicitador,
        cnpjLicitador: this.cnpjLicitador,
        prioridade: this.prioridade,
        objeto: this.objeto,
      };

      this.licitationList.push(newLicitation);

      console.log(this.licitationList);
      this.$router.push('/licitation');
    },
  },
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
