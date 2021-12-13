import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Auth from '../views/Auth.vue'
import Scrip from '../views/Scrip.vue'
import Bandana from '../views/Bandana.vue'
import Korzh from '../views/Korzh.vue'
import NotFound from '../views/NotFound.vue'

Vue.use(VueRouter)

const routes = [

  {
    path: '/',
    name: 'Auth',
    component: Auth
  },
  {
    path: '/home',
    name: "Home",
    component: Home
  },
  {
    path: '/not_found',
    name: "NotFound",
    component: NotFound
  },
   {
    path: '/scrip',
    name: "Scrip",
    component: Scrip
  },
  {
    path: '/bandana',
    name: "Bandana",
    component: Bandana
  },
  {
    path: '/korzh',
    name: "Korzh",
    component: Korzh
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
