<template>
  <div class="mx-20 my-14 flex flex-col justify-center items-center">
   <!-- This shows a success message if the form was submitted correctly. -->
    <div v-if="success" class="rounded bg-indigo-500 text-white text-lg p-4">
      Great! Your message has been sent successfully. I will try to respond
      quickly.
    </div>
    <form
      class="w-96 px-14 flex flex-col"
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
            {{ loading ? "Sending Message..." : "SUBMIT" }}
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
      errors : [],
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
      
      this.$axios.post('https://stormy-thicket-17355.herokuapp.com/api/contact', {
          name:  e.target.elements.name.value, 
          email: e.target.elements.email.value,
          phone: e.target.elements.phone.value,
          message : e.target.elements.message.value
      })
      .then(function (response) {
          console.log(response);
      })
      .catch(function (error) {
          console.log(error);
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

