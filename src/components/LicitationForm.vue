<template>
  <div>
    <h1>Cadastrar Licitação</h1>
    <div class="container mt-3">
      <div class="row">
        <div class="">
          <form action="">
            <div class="mb-2">
              <p>Status Licitação:</p>
              <select class="form-select" aria-label="Default select example" v-model="nu_fase">
                <option selected disabled>Selecione status licitação</option>
                <option value="1">1</option>
                <option value="0">0</option>
                <option value="-1">-1</option>
              </select>
            </div>
            <div class="mb-2">
              <p>Número Edital:</p>
              <input type="text" class="form-control" placeholder="Número Edital" min="0" v-model="nu_edital">
            </div>
            <div class="mb-2">
              <p>Modalidade:</p>
              <select class="form-select" aria-label="Default select example" v-model="modalidade">
                <option selected disabled>Selecione modalidade</option>
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
              <input type="date" v-model="data_abertura">
            </div>
            <div class="mb-2">
              <p>Nome Licitador:</p>
              <input type="text" class="form-control" placeholder="Nome Licitador" v-model="nome_licitador">
            </div>
            <div class="mb-2">
              <p>CNPJ Licitador:</p>
              <input type="text" maxlength="14" class="form-control" placeholder="00.000.000/0000-00"
                v-model="cnpj_licitador" @input="validateCnpj" :class="{ 'is-invalid': !isValidCnpj }">
              <div class="invalid-feedback" v-if="!isValidCnpj && cnpj_licitador !== ''">
                <p class="text-danger">
                  CNPJ inválido! Digite apenas números.
                </p>
              </div>
            </div>
            <div class="mb-2">
              <p>Prioridade:</p>
              <input type="number" class="form-control" min="0" max="5" v-model="prioridade" @input="validatePriority"
                :class="{ 'is-valid': isValidPriority }">
              <div class="invalid-feedback" v-if="!isValidPriority && prioridade !== ''">
                <span class="text-danger">
                  Prioridade aceita de 0 à 5
                </span>
              </div>
            </div>
            <div class="mb-2">
              <p>Objeto: </p>
              <textarea cols="30" rows="10" class="form-control" maxlength="255" v-model="objeto"></textarea>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <button type="button" class="btn btn-success" @click="addLicitation" :disabled="!isValidForm">
                Cadastrar
              </button>
              <router-link to="/licitation" class="btn btn-danger" style="margin: 20px;">
                Cancelar
              </router-link>
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
      isValidCnpj: true,
      isValidPriority: true,
      nu_fase: '',
      nu_edital: '',
      modalidade: '',
      data_abertura: '',
      nome_licitador: '',
      cnpj_licitador: '',
      prioridade: '',
      objeto: '',
    }
  },
  created() {
    try {
      this.licitationList = []
    } catch (error) {
      this.errorMessage = error
    }
  },
  computed: {
    isValidForm() {
      return (
        (this.nu_fase !== '' && this.nu_edital !== '' && this.modalidade !== '' && this.data_abertura !== '' && this.prioridade !== '' && this.objeto !== '') &&
        (this.isValidPriority)
      );
    }
  },
  methods: {
    validateCnpj() {
      const cnpjRegex = /^[0-9]{14}$/;
      const onlyNumbersRegex = /^[0-9]+$/;
      this.isValidCnpj = cnpjRegex.test(this.cnpj_licitador) || onlyNumbersRegex.test(this.cnpj_licitador);
    },

    validatePriority() {
      const onlyNumbersRegex = /^[0-5]+$/;
      this.isValidPriority = onlyNumbersRegex.test(this.prioridade);
    },

    addLicitation() {
      const licitation = {
        nu_fase: this.nu_fase,
        nu_edital: this.nu_edital,
        modalidade: this.modalidade,
        data_abertura: this.data_abertura,
        nome_licitador: this.nome_licitador,
        cnpj_licitador: this.cnpj_licitador,
        prioridade: this.prioridade,
        objeto: this.objeto,
      };

      this.$http.post('/licitation/form', licitation).then((response) => {
        window.alert('Licitação criada com sucesso!');
        console.log(response);
      })

      this.licitationList.push(licitation);

      // console.log(this.licitationList);
      setTimeout(() => {
        this.$router.push('/licitation');
      }, 2000);
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
