<template>
  <!-- Testimonials -->
  <section id="testimonials">
    <!-- Container to heading and test blocks -->
    <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
      <!-- Heading -->
      <h2 class="text-4xl font-bold text-center hidden sm:block">
        Testimonials
      </h2>
      <!-- Testimonials Container -->
      <div class="flex flex-wrap justify-center md:space-x-6 mt-20">

        <!-- Testimonial 1 -->
        <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3">
          <nuxt-img src="img/test1.png" class="w-16 -mt-14 rounded-full" alt="" :placeholder="15" />
          <div class="my-2 space-y-1">
            <h2 class="text-xl font-semibold sm:text-1xl">Lucas Verdan</h2>
            <p class="px-5 text-sm dark:text-gray-400">IT Analyst</p>
          </div>
          <p class="text-sm text-darkGrayishBlue">
            “CodeCV ensured that the information and skills included were relevant to the IT position they were
            applying
            for, and had clear, concise, and easy-to-read content.
            We have optimized our resume with sentences to do, documenting specific achievements and
            responsibilities.
            The customization options make our resume unique.”
          </p>
        </div>

        <!-- Testimonial 3 -->
        <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3">
          <nuxt-img src="img/test2.png" class="w-16 -mt-14 rounded-full" alt="" :placeholder="15" />
          <div class="my-2 space-y-1">
            <h2 class="text-xl font-semibold sm:text-1xl">Luciana Machado</h2>
            <p class="px-5 text-sm dark:text-gray-400">Project Manager</p>
          </div>
          <p class="text-sm text-darkGrayishBlue">
            “Just what I was looking for. CODECV did exactly what you said it does. I would also like to say
            thank you to
            all your staff. It was the perfect solution for my career.”
          </p>
        </div>
        <!-- Testimonial 4 -->
        <!--            <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3">-->
        <!--                <img src="img/test1.png" class="w-16 -mt-14 rounded-full" alt=""/>-->
        <!--                <h5 class="text-lg font-bold">Richard Watts</h5>-->
        <!--                <p class="text-sm text-darkGrayishBlue">-->
        <!--                    “Manage has supercharged our team’s workflow. The ability to-->
        <!--                    maintain visibility on larger milestones at all times keeps-->
        <!--                    everyone motivated.”-->
        <!--                </p>-->
        <!--            </div>-->
      </div>
      <!-- Button -->
      <!--        <div class="my-16">-->
      <!--            <a href="#" class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">-->
      <!--                Get Started-->
      <!--            </a>-->
      <!--        </div>-->
    </div>
  </section>
</template>
<script setup lang="ts">
</script>
