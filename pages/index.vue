<template>
  <hero-section />
  <features-section />
  <testimonials />
  <main class="mx-4 my-16">
    <div class="text-center">
      <h1 class="text-5xl">
        <span>Choose</span>
        <span class="text-orange-600 tracking-wide">a plan</span>
      </h1>
      <p class="pt-6 text-xl text-gray-400 font-normal w-full px-8 md:full">
        Choose a plan that works best for you and your career.
      </p>
    </div>

    <!-- Pricing cards section-->
    <div
      class="flex flex-col items-center justify-center mt-16 space-y-8 lg:flex-row lg:items-stretch lg:space-x-8 lg:space-y-0"
    >
      <!-- Basic Card-->
      <div class="w-96 p-8 bg-white text-center rounded-3xl pr-16 shadow-xl">
        <h1 class="text-black font-semibold text-2xl">Basic</h1>
        <p class="pt-2 tracking-wide">
          <span class="text-lg line-through dark:text-red-300">&nbsp;79€&nbsp;</span>
          <span class="text-5xl font-bold">49</span>
          <span class="text-gray-400 align-top">€</span>
        </p>
        <hr class="mt-4 border-1"/>
        <div class="pt-8">
          <ul class="self-stretch flex-1 space-y-2">
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" class="w-6 h-6 dark:text-green-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
              </svg>
              <span>CV Writing</span>
            </li>
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="red" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <span>Cover Letter</span>
            </li>
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="red" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <span>LinkedIn Profile Optimization</span>
            </li>
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="red" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <span>Interview Preparation</span>
            </li>
          </ul>
          <span class="text-orange-600 font-bold hover:text-blue-700 flex justify-left mt-12 ml-1">
                        <NuxtLink to="/pricing">See more &rarr;</NuxtLink>
                    </span>
        </div>
      </div>

      <!-- Standard -->
      <div
        class="relative w-96 p-8 bg-gray-900 text-center rounded-3xl text-white pr-16 shadow-xl lg:w-80 lg:transform lg:scale-125">
        <h1 class="text-white font-semibold text-2xl">Standard</h1>
        <p class="pt-2 tracking-wide">
          <span class="text-lg line-through dark:text-red-300">&nbsp;149€&nbsp;</span>
          <span class="text-5xl font-bold">99</span>
          <span class="text-gray-400 align-top">€</span>
        </p>
        <div class="absolute top-4 right-4">
          <p class="bg-blue-700 font-semibold px-4 py-1 rounded-full uppercase text-xs">
            Popular
          </p>
        </div>
        <hr class="mt-4 border-1"/>
        <div class="pt-8">
          <ul class="self-stretch flex-1 space-y-2">
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" class="w-6 h-6 dark:text-green-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
              </svg>
              <span>CV Writing</span>
            </li>
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" class="w-6 h-6 dark:text-green-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
              </svg>
              <span>Cover Letter</span>
            </li>
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="red" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <span>LinkedIn Profile Optimization</span>
            </li>
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="red" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <span>Interview Preparation</span>
            </li>
          </ul>
          <span class="text-white font-bold hover:text-blue-300 flex justify-left mt-12 ml-1">
                        <NuxtLink to="/pricing">See more &rarr;</NuxtLink>
                    </span>
        </div>
      </div>

      <!-- Premium -->
      <div class="w-96 p-8 bg-white text-center rounded-3xl pr-16 shadow-xl">
        <h1 class="text-black font-semibold text-2xl">Premium</h1>
        <p class="pt-2 tracking-wide">
          <span class="text-lg line-through dark:text-red-300">&nbsp;199€&nbsp;</span>
          <span class="text-5xl font-bold">149</span>
          <span class="text-gray-400 align-top">€</span>
        </p>
        <hr class="mt-4 border-1"/>
        <div class="pt-8">
          <ul class="self-stretch flex-1 space-y-2">
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" class="w-6 h-6 dark:text-green-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
              </svg>
              <span>CV Writing</span>
            </li>
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" class="w-6 h-6 dark:text-green-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
              </svg>
              <span>Cover Letter</span>
            </li>
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" class="w-6 h-6 dark:text-green-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
              </svg>
              <span>LinkedIn Profile Optimization</span>
            </li>
            <li class="flex justify-left space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" class="w-6 h-6 dark:text-green-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
              </svg>
              <span>Interview Preparation</span>
            </li>
          </ul>
          <span class="text-orange-600 font-bold hover:text-blue-700 flex justify-left mt-12 ml-1">
                        <NuxtLink to="/pricing">See more &rarr;</NuxtLink>
                    </span>
        </div>
      </div>
    </div>
  </main>
</template>
<script setup lang="ts">
import FeaturesSection from "~/components/app/FeaturesSection.vue";
import Testimonials from "~/components/app/Testimonials.vue";
import HeroSection from "~/components/app/HeroSection.vue";

useHead({
  title: 'CODE CV',
  meta: [
    { name: 'description',
      content: 'CODE CV is a consulting company focused on the career of IT professionals.\n' +
        'The key focus is to support the preparation of a professional CV, building a LinkedIn profile, and\n' +
        'training for the interview processes.\n' +
        'Our team is made up of IT professionals with experience in the market.' }
  ],
})

</script>
