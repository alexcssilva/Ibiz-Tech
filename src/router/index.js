import Vue from 'vue'
import VueRouter from 'vue-router'
import LicitationView from "../views/LicitationView.vue";
import FormView from "../views/FormView.vue"
import DetailView from "../views/DetailView.vue"

Vue.use(VueRouter)

const routes = [
  {
    path: "/",
    name: "licitation",
    component: LicitationView,
  },
  {
    path: "/form",
    name: "form",
    component: FormView,
  },
  {
    path: "/detail",
    name: "detail",
    component: DetailView,
  },
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
