<template>
  <div class="container-search">
    <h1 style="margin-bottom: 50px;">Licitações</h1>
    <div class="container mt-3">
      <div class="justify-content-center">
        <div class="col-md-6" v-for="licitation in licitationList" :key="licitation.id_lic">
          <div class="card my-2 list-group-item-secondary shadow-lg mx-auto">
            <div class="card-body">
              <div class="align-items-center">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item">ID: <span class="fw-bold">{{ licitation.id_lic }}</span>
                    </li>
                    <li class="list-group-item list-group-item">Fase: <span class="fw-bold">{{ licitation.nu_fase
                    }}</span> </li>
                    <li class="list-group-item list-group-item">Número Edital: <span class="fw-bold">{{
                      licitation.nu_edital }}</span> </li>
                    <li class="list-group-item list-group-item">Modalidade: <span class="fw-bold">{{
                      licitation.modalidade }}</span> </li>
                    <li class="list-group-item list-group-item">Data Abertura: <span class="fw-bold">{{ formattedDate
                    }}</span> </li>
                    <li class="list-group-item list-group-item">Nome Licitador: <span class="fw-bold">{{
                      licitation.nome_licitador }}</span> </li>
                    <li class="list-group-item list-group-item">CNPJ Licitador: <span class="fw-bold">{{
                      licitation.cnpj_licitador }}</span> </li>
                    <li class="list-group-item list-group-item">Prioridade: <span class="fw-bold">{{ licitation.prioridade
                    }}</span> </li>
                    <li class="list-group-item list-group-item" style="word-wrap: break-word;">Objeto: <span
                        class="fw-bold">{{ licitation.objeto
                        }}</span> </li>
                  </ul>
                </div>
                <div>
                  <router-link :to="`/licitation/detail/${licitation.id_lic}`" class="btn btn-warning my-2"
                    style="margin:0px 10px 50px 0px;">
                    <i class="bi bi-eye icon-black"></i>
                  </router-link>
                  <router-link :to="`/licitation/detail/edit/${licitation.id_lic}`" class="btn btn-primary my-2"
                    style="margin:0px 10px 50px 0px;">
                    <i class="bi bi-pencil-square icon-black"></i>
                  </router-link>
                  <button class="btn btn-danger my-2" style="margin-bottom: 50px;"
                    @click="deleteLicitation(licitation.id_lic)">
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
  data() {
    return {
      licitationList: {},
      formattedDate: '',
    }
  },
  created() {
    this.getAllLicitation();
  },
  methods: {
    async getAllLicitation() {
      try {
        const response = await this.$http.get('/licitation');
        this.licitationList = response.data.licitations;
        this.formattedDate = this.$moment(response.data.data_abertura).format('DD/MM/YYYY');
      } catch (error) {
        console.log(error);
        this.error = 'Ocorreu um erro ao carregar as licitações.'
      }
    },

    async deleteLicitation(id_lic) {
      try {
        const licitationId = await this.$http.delete(`/licitation/detail/${id_lic}`);
        if (licitationId.status === 200) {
          this.getAllLicitation();
          this.deleted = true;
          alert('Licitação excluída com sucesso!');
          setTimeout(() => {
            this.deleted = false;
          }, 2000);
        }
      } catch (error) {
        this.error = 'Erro ao deletar licitação.';
      }
    },
  },
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
