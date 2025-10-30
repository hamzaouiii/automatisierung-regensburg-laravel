<template>
  <div>
    <Header></Header>
    <main>
      <slot></slot>
    </main>
    <Footer></Footer>
  </div>
</template>

<script setup>
import Header from '@/Components/Header.vue'
import Footer from '@/Components/Footer.vue'
</script>
