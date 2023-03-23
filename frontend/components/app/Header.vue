<template>
  <!-- Navbar-->
  <nav class="relative container mx-auto p-6">
    <!-- Flex container -->
    <div class="flex flex-auto items-center justify-between">
      <!-- Logo -->
      <NuxtLink to="/" class="logo">
        <div class="pt-2">
          <span class="text-3xl font-bold text-gray-600">code</span>
          <span class="text-3xl font-bold text-orange-600">CV</span>
        </div>
      </NuxtLink>
      <!-- Menu Items -->
      <div class="hidden space-x-6 md:flex">
        <NuxtLink to="/" class="hover:text-darkGrayishBlue">Home</NuxtLink>
        <NuxtLink to="/pricing" class="hover:text-darkGrayishBlue">Pricing</NuxtLink>
        <NuxtLink to="/contact" class="hover:text-darkGrayishBlue">Contact</NuxtLink>
        <NuxtLink to="/about-us" class="hover:text-darkGrayishBlue">About Us</NuxtLink>
        <NuxtLink to="/careers" class="hover:text-darkGrayishBlue">Careers</NuxtLink>
        <NuxtLink to="/community" class="hover:text-darkGrayishBlue">Community</NuxtLink>
          <!-- Login dropdown -->
          <Menu as="div" class="relative ml-3"  v-if="!auth.loggedIn">
            <div>
              <MenuButton class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="sr-only">Login</span>
                <img class="h-8 w-8 rounded-full" src="https://source.unsplash.com/2LowviVHZ-E/256x256?ixlib=rb-1.2.1&ixid=2LowviVHZ-E&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
              </MenuButton>
            </div>
            <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
              <MenuItems class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                <NuxtLink class="block px-4 py-2 text-sm text-gray-700" to="/login">
                  Login
                </NuxtLink>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" @click.prevent="logout">Logout</a>
              </MenuItems>
            </transition>
          </Menu>

          <!-- Profile dropdown -->
          <Menu as="div" class="relative ml-3" v-else>
            <div>
              <MenuButton class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
              </MenuButton>
            </div>
            <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
              <MenuItems class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                <div class="block px-4 py-2 text-sm text-gray-700" >
                  Hello {{ auth.user.data.name }}
                </div>
                <NuxtLink class="block px-4 py-2 text-sm text-gray-700" to="/account">
                  Your Profile
                </NuxtLink>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" @click.prevent="logout">Logout</a>
              </MenuItems>
            </transition>
          </Menu>
      </div>
      <!-- Button -->
      <!--        <a href="#"-->
      <!--           class="hidden p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block">-->
      <!--            Get Started-->
      <!--        </a>-->
    </div>

    <!-- Hamburger Icon-->
    <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
      <span class="hamburger-top"></span>
      <span class="hamburger-middle"></span>
      <span class="hamburger-bottom"></span>
    </button>

    <!-- Mobile Menu -->
    <div class="md:hidden">
      <div id="menu"
           class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
        <NuxtLink to="/" class="hover:text-darkGrayishBlue">Home</NuxtLink>
        <NuxtLink to="/pricing" class="hover:text-darkGrayishBlue">Pricing</NuxtLink>
        <NuxtLink to="/contact" class="hover:text-darkGrayishBlue">Contact</NuxtLink>
        <NuxtLink to="/about-us" class="hover:text-darkGrayishBlue">About Us</NuxtLink>
        <NuxtLink to="/careers" class="hover:text-darkGrayishBlue">Careers</NuxtLink>
        <NuxtLink to="/community" class="hover:text-darkGrayishBlue">Community</NuxtLink>
      </div>
    </div>
  </nav>
</template>

<script setup lang="ts">
import { useState, ref, computed, onMounted, useNuxtApp } from '#imports'
import { Menu, MenuButton, MenuItems } from '@headlessui/vue'

const { $sanctumAuth } = useNuxtApp()
const loading = ref(true)
const auth = computed(() => useState('auth').value) // return auth state

const logout = async () => {
  await $sanctumAuth.logout(
    // optional callback function
    (data) => {
      console.log(data)
      router.push('/account')
    }
  )
}

onMounted(async () => {
  await $sanctumAuth.getUser() // fetch and set user data
  loading.value = false
})
</script>
