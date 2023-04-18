<template>
  <div class="bg-white rounded-lg shadow-lg p-8 max-w-lg mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Thank you for your email!</h1>
    <p class="text-gray-700 leading-7">We have received your message and will get back to you as soon as possible.</p>
    <NuxtLink to="/" class="text-blue-500 hover:text-blue-700 block mt-8">Return to Homepage</NuxtLink>
  </div>
</template>

<script setup lang="ts">

useHead({
  title: 'CODE CV - Thank you',
  meta: [
    { name: 'description',
      content: 'CODE CV is a consulting company focused on the career of IT professionals.\n' +
        'The key focus is to support the preparation of a professional CV, building a LinkedIn profile, and\n' +
        'training for the interview processes.\n' +
        'Our team is made up of IT professionals with experience in the market.' }
  ],
})

</script>
