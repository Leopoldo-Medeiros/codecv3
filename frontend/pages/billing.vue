<template>
  <!-- Billing section -->
  <section class="dark:bg-currentColor dark:text-gray-100 mt-24 sm:mb-36 ml-2 sm:ml-60 mr-2 sm:mr-60">
    <!--    <div class="container grid grid-cols-1 sm:grid-cols-2 mx-auto mt-20 mb-5">-->
    <!--        <div class="w-full h-64 sm:h-auto"-->
    <!--             style="background-image: url('https://source.unsplash.com/random/640x480'); background-position: center center; background-size: cover;"></div>-->
    <!--        <div class="flex flex-col w-full p-6 lg:p-12 justify-center items-center sm:ml-4">-->
    <!--            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"-->
    <!--                 class="w-8 h-8 mb-8 dark:text-blue-400">-->
    <!--                <path fill-rule="evenodd"-->
    <!--                      d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"-->
    <!--                      clip-rule="evenodd"></path>-->
    <!--            </svg>-->
    <!--            <h2 class="text-3xl font-semibold leading-none mb-4 ml-1">Bank Account details</h2>-->
    <!--            <p class="mt-4 mb-1 text-lg ml-1">Username: @leopoldom</p>-->
    <!--            <p class="mt-1 mb-1 text-lg ml-1">IBAN: LT59 3250 0066 6941 9665</p>-->
    <!--            <p class="mt-1 mb-1 text-lg ml-1">BIC: REVOLT21</p>-->
    <!--        </div>-->
    <!--    </div>-->

    <!-- component -->
    <div class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"
         style="background-image: url(https://images.unsplash.com/photo-1623600989906-6aae5aa131d4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1582&q=80);"
         id="modal-id">
      <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
      <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
        <!--content-->
        <div class="">
          <!--body-->
          <div class="text-center p-5 flex-auto justify-center">
            <div style="display: flex; justify-content: center;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="52" height="52">
                <path d="M5.00488 9.00293C5.55717 9.00293 6.00488 9.45064 6.00488 10.0029C7.63965 10.0029 9.14352 10.5633 10.3349 11.5025L12.5049 11.5029C13.8375 11.5029 15.0348 12.0822 15.8588 13.0027L19.0049 13.0029C20.9972 13.0029 22.7173 14.1682 23.521 15.8543C21.1562 18.975 17.3268 21.0029 13.0049 21.0029C10.2142 21.0029 7.85466 20.3997 5.944 19.345C5.80557 19.7285 5.43727 20.0029 5.00488 20.0029H2.00488C1.4526 20.0029 1.00488 19.5552 1.00488 19.0029V10.0029C1.00488 9.45064 1.4526 9.00293 2.00488 9.00293H5.00488ZM6.00589 12.0029L6.00488 17.0249L6.05024 17.0574C7.84406 18.3178 10.183 19.0029 13.0049 19.0029C16.0089 19.0029 18.8035 17.8473 20.84 15.8735L20.9729 15.7399L20.8537 15.6395C20.3897 15.2765 19.8205 15.0513 19.2099 15.0099L19.0049 15.0029L16.8934 15.003C16.9664 15.3246 17.0049 15.6593 17.0049 16.0029V17.0029H8.00488V15.0029L14.7949 15.0019L14.7605 14.9235C14.38 14.1299 13.593 13.5682 12.6693 13.5082L12.5049 13.5029L9.57547 13.5028C8.66823 12.5774 7.40412 12.0032 6.00589 12.0029ZM4.00488 11.0029H3.00488V18.0029H4.00488V11.0029ZM18.0049 5.00293C19.6617 5.00293 21.0049 6.34608 21.0049 8.00293C21.0049 9.65978 19.6617 11.0029 18.0049 11.0029C16.348 11.0029 15.0049 9.65978 15.0049 8.00293C15.0049 6.34608 16.348 5.00293 18.0049 5.00293ZM18.0049 7.00293C17.4526 7.00293 17.0049 7.45064 17.0049 8.00293C17.0049 8.55521 17.4526 9.00293 18.0049 9.00293C18.5572 9.00293 19.0049 8.55521 19.0049 8.00293C19.0049 7.45064 18.5572 7.00293 18.0049 7.00293ZM11.0049 2.00293C12.6617 2.00293 14.0049 3.34608 14.0049 5.00293C14.0049 6.65978 12.6617 8.00293 11.0049 8.00293C9.34803 8.00293 8.00488 6.65978 8.00488 5.00293C8.00488 3.34608 9.34803 2.00293 11.0049 2.00293ZM11.0049 4.00293C10.4526 4.00293 10.0049 4.45064 10.0049 5.00293C10.0049 5.55521 10.4526 6.00293 11.0049 6.00293C11.5572 6.00293 12.0049 5.55521 12.0049 5.00293C12.0049 4.45064 11.5572 4.00293 11.0049 4.00293Z"
                      fill="rgba(242,0,0,1)"></path>
              </svg>
            </div>
            <h2 class="text-3xl font-bold py-4 dark:text-blue-700">Bank Account Details</h2>
              <p class="text-xl text-gray-500 px-8 font-semibold">
                Username: @leopoldom
              </p>
              <p class="text-xl text-gray-500 px-8 font-semibold">
                IBAN: LT59 3250 0066 6941 9665
              </p>
              <p class="text-xl text-gray-500 px-8 font-semibold">
                BIC: REVOLT21
              </p>
          </div>
          <nuxt-img src="img/revolut.png" alt="Revolut" class="w-40 h-auto mx-auto" :placeholder="15" />
          <div class="flex flex-col max-w-md gap-2 items-center rounded-md p-1 shadow-md dark:bg-gray-900  dark:text-gray-100 ml-3 mb-2 mt-8">
            <h2 class="flex items-center gap-2 text-sm font-semibold leading-tight tracking-wide">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                   class="w-6 h-6 fill-current shrink-0 dark:text-violet-400">
                <path d="M451.671,348.569,408,267.945V184c0-83.813-68.187-152-152-152S104,100.187,104,184v83.945L60.329,348.568A24,24,0,0,0,81.432,384h86.944c-.241,2.636-.376,5.3-.376,8a88,88,0,0,0,176,0c0-2.7-.135-5.364-.376-8h86.944a24,24,0,0,0,21.1-35.431ZM312,392a56,56,0,1,1-111.418-8H311.418A55.85,55.85,0,0,1,312,392ZM94.863,352,136,276.055V184a120,120,0,0,1,240,0v92.055L417.137,352Z"></path>
                <rect width="32" height="136" x="240" y="112"></rect>
                <rect width="32" height="32" x="240" y="280"></rect>
              </svg>
              <span class="hidden sm:inline">Payment confirmation required.</span>
              <span class="inline sm:hidden">Payment confirmation required.</span>
            </h2>

          </div>
        </div>
      </div>
    </div>


  </section>
</template>
<script setup lang="ts">

useHead({
  title: 'CODE CV - Billing',
  meta: [
    { name: 'description',
      content: 'CODE CV is a consulting company focused on the career of IT professionals.\n' +
        'The key focus is to support the preparation of a professional CV, building a LinkedIn profile, and\n' +
        'training for the interview processes.\n' +
        'Our team is made up of IT professionals with experience in the market.' }
  ],
})

</script>
