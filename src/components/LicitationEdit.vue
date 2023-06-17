<template>
  <div>
    <h1>Editar Licitação</h1>
    <div class="container mt-3 border border-primary">
      <div class="row">
        <div>
          <form action="">
            <div class="mb-2">
              <p>Status Licitação:</p>
              <select class="form-select" aria-label="Default select example" v-model="licitation.nu_fase">
                <option selected disabled>Selecione status licitação</option>
                <option value="1">1</option>
                <option value="0">0</option>
                <option value="-1">-1</option>
              </select>
            </div>
            <div class="mb-2">
              <p>Número Edital:</p>
              <input type="text" class="form-control" placeholder="Número Edital" v-model="licitation.nu_edital">
            </div>
            <div class="mb-2">
              <p>Modalidade:</p>
              <select class="form-select" aria-label="Default select example" v-model="licitation.modalidade">
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
              <input type="date" v-model="licitation.data_abertura">
            </div>
            <div class="mb-2">
              <p>Nome Licitador:</p>
              <input type="text" class="form-control" placeholder="Nome Licitador" v-model="licitation.nome_licitador">
            </div>
<div class="mb-2">
      <p>CNPJ Licitador:</p>
      <input type="text" maxlength="14" class="form-control" placeholder="00.000.000/0000-00"
        v-model="licitation.cnpj_licitador" :class="{ 'is-invalid': !isValidCnpj }" @input="validateCnpj">
      <div class="invalid-feedback" v-if="!isValidCnpj && licitation.cnpj_licitador !== ''">
        <p class="text-danger">
          CNPJ inválido! Digite apenas números.
        </p>
      </div>
    </div>
           <div class="mb-2">
        <p>Prioridade:</p>
        <input type="number" class="form-control" min="0" max="5" v-model="licitation.prioridade"
          :class="{ 'is-invalid': !isValidPriority }" @input="validatePriority">
        <div class="invalid-feedback" v-if="!isValidPriority && licitation.prioridade !== ''">
          <span class="text-danger">
            Prioridade aceita de 0 à 5
          </span>
        </div>
      </div>
            <div class="mb-2">
              <p>Objeto: </p>
              <textarea name="" id="" cols="30" rows="4" class="form-control" v-model="licitation.objeto"
                maxlength="255"></textarea>
            </div>

            <div>
              <button type="button" class="btn btn-success" @click="editLicitation"
                :disabled="!isValidForm">Salvar</button>
              <router-link to="/licitation" type="router-link" class="btn btn-danger"
                style="margin: 20px;">Cancelar</router-link>
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
  data() {
    return {
      licitation: {},
      formattedDate: '',
      isValidCnpj: true,
      isValidPriority: true,
    }
  },
  mounted() {
    this.getLicitationDetails();
  },
  computed: {
    isValidForm() {
      return (
        (this.nu_fase !== '' && this.nu_edital !== '' && this.modalidade !== '' && this.data_abertura !== '' && this.prioridade !== '' && this.objeto !== '') &&
        (this.isValidCnpj && this.isValidPriority)
      );
    }
  },
  methods: {
    async getLicitationDetails() {
      try {
        const licitationId = this.$route.params.id_lic;
        this.licitation.data_abertura = this.$moment(this.licitation.data_abertura).format('YYYY-MM-DD');
        const response = await this.$http.get(`/licitation/detail/${licitationId}`);
        this.licitation = response.data;
        this.licitation.data_abertura = this.$moment(response.data.data_abertura).format('YYYY-MM-DD');
      } catch (error) {
        this.error = 'Erro ao carregar detalhes da licitação.';
      }
    },

    async editLicitation() {
      try {
        const licitationId = this.$route.params.id_lic;
        const response = await this.$http.put(`/licitation/detail/edit/${licitationId}`, this.licitation);
        console.log('response:', response);
        alert('Licitação atualizada com sucesso!');
      } catch (error) {
        this.error = 'Erro ao editar licitação.';
      }
      setTimeout(() => {
        this.$router.push('/licitation');
      }, 1000);
    },

    validateCnpj() {
      const cnpjRegex = /^[0-9]{14}$/;
      const onlyNumbersRegex = /^[0-9]+$/;
      this.isValidCnpj = cnpjRegex.test(this.licitation.cnpj_licitador) || onlyNumbersRegex.test(this.licitation.cnpj_licitador);
    },

    validatePriority() {
      const onlyNumbersRegex = /^[0-5]+$/;
      this.isValidPriority = onlyNumbersRegex.test(this.licitation.prioridade);
    },
  }
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
