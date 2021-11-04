<template>
  <div class="mx-20 my-20 flex flex-col justify-center items-center">
   <!-- This shows a success message if the form was submitted correctly. -->
    <div v-if="success" class="rounded bg-indigo-500 text-white text-lg p-4">
      Great! Your message has been sent successfully. I will try to respond
      quickly.
    </div>
    <form
      v-else
      v-on:submit.prevent="sendMessage"
      class="w-96 flex flex-col"
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
            placeholder="Full name*"
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
            placeholder="Email*"
          />
        </div>
      </div>
      <div>
        <label for="phone" class="sr-only">Phone</label>
        <div class="relative rounded-md shadow-sm">
          <input
            v-model="phone"
            name="phone"
            id="phone"
            class="mb-5 border-solid border-2 form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
            placeholder="Phone"
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
            placeholder="Message*"
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

<script lang="ts">
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
    };
  },
  methods: { 
  sendMessage() {
    // This works here.
    this.loading = true;
    // The view model.
    this.$axios
        .post("https://api.contact.com/messages", {
          name: this.name,
          email: this.email,
          phone: this.phone,
          message: this.message,
        }).then(response => {
            console.log(response)
          this.success = true
          this.errored =false
        })
        .catch(error => {
            console.log(error)
          this.errored = true
        })
        .finally(() => {
          this.loading = false
        });

    
  }
}}

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