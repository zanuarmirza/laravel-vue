<template>
  <div class="flex content-start flex-wrap p-12 bg-gray-200 h-screen">
    <EmployeeCard :key="employee.id" v-for="employee in employees" :data="employee"/>
  </div>
</template>
<script>
import axios from 'axios'
import api from '../constant/api'
import EmployeeCard from '../components/EmployeeCard'
export default {
  components: {
    'EmployeeCard': EmployeeCard
  },
  data () {
    return {
      employees: []
    }
  },
  mounted () {
    console.log(this.data)
    axios.get(`${api.root}employee`)
      .then((response) => {
        // handle success
        console.log(response)
        this.employees = response.data.data
      })
      .catch((error) => {
        // handle error
        console.log(error)
      })
  }
}
</script>
