<template>
  <div>
    <h1>Detalhes Licitação</h1>
    <div class="container">
      <div class="row">
        <div>
        </div>
        <div>
          <ul class="list-group">
            <li class="list-group-item list-group-item">ID: <span class="fw-bold">{{ licitation.id_lic }}</span></li>
            <li class="list-group-item list-group-item">Fase: <span class="fw-bold">{{ licitation.nu_fase }}</span></li>
            <li class="list-group-item list-group-item">Número Edital: <span class="fw-bold">{{ licitation.nu_edital
            }}</span></li>
            <li class="list-group-item list-group-item">Modalidade: <span class="fw-bold">{{ licitation.modalidade
            }}</span></li>
            <li class="list-group-item list-group-item">Data Abertura: <span class="fw-bold">{{ formattedDate }}</span>
            </li>
            <li class="list-group-item list-group-item">Nome Licitador: <span class="fw-bold">{{ licitation.nome_licitador
            }}</span></li>
            <li class="list-group-item list-group-item">CNPJ Licitador: <span class="fw-bold">{{ licitation.cnpj_licitador
            }}</span></li>
            <li class="list-group-item list-group-item">Prioridade: <span class="fw-bold">{{ licitation.prioridade
            }}</span></li>
            <li class="list-group-item list-group-item">Objeto:
              <span class="fw-bold " style="word-wrap: break-word;">{{ licitation.objeto }}</span>
            </li>
            <li class="list-group-item list-group-item">Data de Criação: <span class="fw-bold">{{ licitation.created_at
            }}</span></li>
            <li class="list-group-item list-group-item">Data de Modificação: <span class="fw-bold">{{
              licitation.updated_at }}</span></li>
          </ul>
          <div class="text-center d-flex flex-column justify-content-center align-items-center">
            <router-link to="/licitation" type="router-link" class="btn btn-success">Voltar</router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LicitationDetail',
  data() {
    return {
      licitation: {},
      loading: false,
      error: null,
      formattedDate: '',
    };
  },
  mounted() {
    this.getLicitationDetails();
  },
  methods: {
    async getLicitationDetails() {
      try {
        const licitationId = this.$route.params.id_lic;
        console.log('licitationId:', licitationId);
        const response = await this.$http.get(`/licitation/detail/${licitationId}`);
        this.licitation = response.data;
        this.formattedDate = this.$moment(response.data.data_abertura).format('DD/MM/YYYY');
      } catch (error) {
        this.error = 'Erro ao carregar detalhes da licitação.';
      }
    },
  },
};
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
