<template>
  <div>
    <Header />
    <slot />
    <Footer />
  </div>
</template>

<script setup lang="ts">
import Header from "~/components/app/Header.vue";
import Footer from "~/components/app/Footer.vue";
</script>
