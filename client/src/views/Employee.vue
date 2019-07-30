<template>
  <div class="flex content-start flex-wrap p-12 bg-gray-200 h-screen justify-center ">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label
            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
            for="grid-first-name"
          >First Name</label>
          <input
            v-model="firstName"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-first-name"
            type="text"
            placeholder="Jane"
          />
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label
            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
            for="grid-last-name"
          >Last Name</label>
          <input
            v-model="lastName"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-last-name"
            type="text"
            placeholder="Doe"
          />
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label
            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
            for="grid-job"
          >Job</label>
          <input
            v-model="job"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-job"
            type="text"
          />
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label
            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
            for="grid-address"
          >Address</label>
          <input
            v-model="address"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-address"
            type="text"
          />
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label
            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
            for="grid-education"
          >Education</label>
          <input
            v-model="education"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-education"
            type="text"
          />
        </div>
      </div>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" @click="create">
        Create
      </button>
    </form>
  </div>
</template>

<script>
import axios from 'axios'
import api from '../constant/api'
export default {
  data () {
    return {
      firstName: '',
      lastName: '',
      job: '',
      address: '',
      education: ''
    }
  },
  computed: {
    valid () {
      return !!(this.firstName && this.lastName && this.job && this.address && this.education)
    }
  },
  methods: {
    create () {
      if (this.valid) {
        axios.post(`${api.root}employee`, {
          'firstName': this.firstName,
          'lastName': this.lastname,
          'job': this.job,
          'address': this.address,
          'education': this.education
        })
          .then((response) => {
            // handle success
            console.log(response)
            this.$router.push({ name: 'detail', params: { data: response.data } })
          })
          .catch((error) => {
            // handle error
            console.log(error)
          })
      } else {
        alert('Data belum lengkap')
      }
    }
  }
}
</script>
