<template>
  <div class="mx-20 my-14 flex flex-col justify-center items-center">
   <!-- This shows a success message if the form was submitted correctly. -->
    <div v-if="success" class="absolute z-30 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded border-solid border-black bg-white text-black text-lg p-4">
      {{ $t('form_success_message')}}
    </div>
    <form
      class="lg:w-2/5 w-96 px-14 flex flex-col"
      @submit="sendMail"
    >
      <!-- Here an error is displayed if something goes wrong -->
      <div v-if="errored" class="rounded bg-red-200 text-lg p-4">
        Your message didnt go through, please try again in couple minutes.
      </div>
      <div>
        <label for="full_name" class="sr-only">Full name*</label>
        <div class="relative rounded-md shadow-sm">
          <input
            v-model="name"
            required
            name="name"
            id="full_name"
            class="mb-5 border-solid border-2 form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
            :placeholder="$t('form_placeholder_name')"
          />
        </div>
      </div>
      <div>
        <label for="email" class="sr-only">Email*</label>
        <div class="relative rounded-md shadow-sm">
          <input
            required
            v-model="email"
            name="email"
            id="email"
            type="email"
            class="mb-5 border-solid border-2 form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
            :placeholder="$t('form_placeholder_email')"
          />
        </div>
      </div>
      <div>
        <label for="phone" class="sr-only">Phone*</label>
        <div class="relative rounded-md shadow-sm">
          <input
            v-model="phone"
            name="phone"
            id="phone"
            class="mb-5 border-solid border-2 form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
            :placeholder="$t('form_placeholder_phone')"
          />
        </div>
      </div>
      <div>
        <label for="message" class="sr-only">Message</label>
        <div class="relative rounded-md shadow-sm">
          <textarea
            required
            v-model="message"
            name="message"
            id="message"
            rows="4"
            class="mb-5 border-solid border-2 form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
            :placeholder="$t('form_placeholder_message')"
          ></textarea>
        </div>
      </div>
      <div class="flex flex-row items-center justify-center ">
        <span class="inline-flex rounded-md shadow-sm">
          <button
            type="submit"
            class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium text-white theme-color-1 hover:bg-white focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
          >
            {{ loading ? "Sending Message..." : "POŠALJI" }}
          </button>
        </span>
      </div>
    </form>
  </div>
</template>

<script >

export default {
  data() {
    return {
      loading: false,
      success: false,
      errored: false,
      name: "",
      email: "",
      phone: "",
      message: "",
    }
  },
  methods : {
  
    sendMail(e) {
      e.preventDefault()

      const extracted_url = this.$nuxt.$route.fullPath;
      
      this.$axios.post('https://stormy-thicket-17355.herokuapp.com/api/request', {
          name:  e.target.elements.name.value, 
          email: e.target.elements.email.value,
          phone: e.target.elements.phone.value,
          message : e.target.elements.message.value,
          link : extracted_url
      })
      .then(response => {
          this.success = true
          this.errored =false
        })
        .catch(error => {
          console.error(error)
          this.errored = true
        })
        .finally(() => {
          this.loading = false
        });

    }
    
  }
}

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap');


* {
    font-family: 'Nunito Sans';
}
.theme-color-1 {
    background-color: #231F20;
}
</style>

