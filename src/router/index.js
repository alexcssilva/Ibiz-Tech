import Vue from 'vue'
import VueRouter from 'vue-router'
import LicitationView from "../views/LicitationView.vue";
import FormView from "../views/FormView.vue"
import LicitationDetail from "../components/LicitationDetail.vue";
import LicitationEdit from "../components/LicitationEdit.vue";
import PageNotFound from "../views/PageNotFound.vue"

Vue.use(VueRouter)

const routes = [
  {
    path: "/",
    name: "Home",
    redirect: "/licitation",
  },
  {
    path: "/licitation",
    name: "Licitation",
    component: LicitationView,
  },
  {
    path: "/licitation/form",
    name: "FormLicitation",
    component: FormView,
  },
  {
    path: "/licitation/detail/:id_lic",
    name: "LicitationDetail",
    component: LicitationDetail,
  },
  {
    path: "/licitation/detail/edit/:id_lic",
    name: "LicitationEdit",
    component: LicitationEdit,
  },
  {
    path: "/**",
    name: "PageNotFound",
    component: PageNotFound,
  },
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
