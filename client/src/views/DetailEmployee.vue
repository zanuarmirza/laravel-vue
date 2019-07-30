<template>
  <div class="p-2 justify-center flex h-screen items-center">
    <EmployeeCard :data="data"/>
  </div>
</template>

<script>
import EmployeeCard from '../components/EmployeeCard'
export default {
  components: {
    'EmployeeCard': EmployeeCard
  },
  props: { data: { type: Object, default: () => { return {} } } },
  beforeMount () {
    if (!this.data) {
      this.$router.push({ name: 'create' })
    }
    console.log(this.data)
  }
}
</script>
