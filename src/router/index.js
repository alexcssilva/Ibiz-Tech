import Vue from 'vue'
import VueRouter from 'vue-router'
import LicitationView from "../views/LicitationView.vue";
import FormView from "../views/FormView.vue"
import DetailView from "../views/DetailView.vue"
import EditItemView from "../views/EditItemView.vue"
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
    path: "/licitation/detail/:licitationId",
    name: "DetailLicitation",
    component: DetailView,
  },
  {
    path: "/licitation/detail/edit/:licitationId",
    name: "DetailLicitationId",
    component: EditItemView,
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
