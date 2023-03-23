<template>
  <slot />
</template>

<script setup lang="ts">
useHead({
  bodyAttrs: {
    class: 'h-full'
  },
  htmlAttrs: {
    class: 'h-full bg-gray-50'
  }
})
</script>
