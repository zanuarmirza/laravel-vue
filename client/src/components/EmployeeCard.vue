<template>
  <router-link :to="{name: 'detail',params:{data:data}}" class="w-full md:w-1/2 lg:w-1/3 p-2">
      <div
        class="border border-grey-light bg-white rounded p-4 flex flex-col justify-between leading-normal card"
      >
        <div class="text-black font-bold text-xl mb-2">{{fullname}}</div>
        <p class="text-grey-darker text-base">{{data.firstName}}</p>
        <p class="text-grey-darker text-base">{{data.job}}</p>
        <p class="text-grey-darker text-base">{{data.address}}</p>
      </div>
  </router-link>
</template>
<script>
export default {
  props: ['data'],
  computed: {
    fullname () {
      return this.data.firstName + this.data.lastname
    }
  }
}
</script>
<style scoped>
.card:hover {
  box-shadow: 0 3px 12px 0 rgba(0, 0, 0, 0.12);
  transition: all 0.3s ease-out;
}
</style>
