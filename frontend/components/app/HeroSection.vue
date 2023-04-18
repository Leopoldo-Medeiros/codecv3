<template>
  <!-- Hero Section -->
  <section id="hero">
    <!-- Flex Container -->
    <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">
      <!-- Left item -->
      <div class="flex flex-col mb-32 space-y-12 md:mt-32 md:w-1/2">
        <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
          Bring <br/>IT Professionals together to build better careers
        </h1>
        <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
          CODE CV makes it simple for IT Professionals to plan a future.
        </p>
        <!--            <div class="flex justify-center md:justify-start">-->
        <!--                <a href="#" class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">-->
        <!--                    Get Started-->
        <!--                </a>-->
        <!--            </div>-->
      </div>
      <!-- Image -->
      <div class="md:w-1/2">
        <nuxt-img src="img/dev1.png" alt="" :placeholder="15" />
      </div>
    </div>
  </section>
</template>
