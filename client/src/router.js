import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Employee from './views/Employee.vue'
const DetailEmployee = () => import('./views/DetailEmployee.vue')

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.VUE_APP_BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/employee/create',
      name: 'create',
      component: Employee
    },
    {
      path: '/detail',
      name: 'detail',
      component: DetailEmployee,
      props: true
    }
  ]
})
