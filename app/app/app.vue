<template>
  <NuxtLayout>
    <NuxtPage />
  </NuxtLayout>
</template>

<script setup lang="ts">
onBeforeMount(() => {
  const { $axios } = useNuxtApp();

  $axios.get('/sanctum/csrf-cookie');
});
</script>
