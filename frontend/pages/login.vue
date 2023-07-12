<template>
  <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <NuxtLink to="/" class="logo">
        <div class="mt-6 text-center">
          <span class="text-3xl font-bold text-gray-600">code</span>
          <span class="text-3xl font-bold text-orange-600">CV</span>
        </div>
      </NuxtLink>
      <h2 class="mt-6 text-center text-3xl font-bold text-gray-600">Sign in to your account</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        Or
        {{ ' ' }}
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Register here</a>
      </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <form class="space-y-6" @submit.prevent="login">
          <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" required="" v-model="form.email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
            </div>
          </div>

          <div>
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="current-password" v-model="form.password" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
            </div>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember-me" name="remember-me" type="checkbox" v-model="form.remember"  class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
            </div>

            <div class="text-sm">
              <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
            </div>
          </div>

          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
          </div>
          <div v-if="error" class="text-sm text-red-500">
            {{ error }}
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script setup lang="ts">
import { ref } from 'vue'
import { definePageMeta, useNuxtApp } from '#imports'

definePageMeta({
  middleware: ['guest'],
  layout: 'fullscreen',
})

useHead({
  title: 'CODE CV - Login',
  meta: [
    { name: 'description',
      content: 'CODE CV is a consulting company focused on the career of IT professionals.\n' +
        'The key focus is to support the preparation of a professional CV, building a LinkedIn profile, and\n' +
        'training for the interview processes.\n' +
        'Our team is made up of IT professionals with experience in the market.' }
  ]
})

const form = ref({
  name: '',
  email: '',
  message: ''
})

const error = ref('')
const { $sanctumAuth } = useNuxtApp()
const login = async () => {
  try {
    await $sanctumAuth.login(form.value)
  } catch (e: any) {
    console.log(e?.message)
    error.value = e?.message
  }
}

</script>
