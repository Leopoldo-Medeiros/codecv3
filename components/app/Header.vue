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
