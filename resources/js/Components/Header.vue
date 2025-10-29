<template>
  <header :class="['navbar', { scrolled: isScrolled }]">
    <div class="nav-inner">
      <a class="brand" href="/">
        <img src="/img/logo/logo.png" alt="Logo" />
      </a>

      <button
        class="burger"
        :aria-expanded="menuOpen ? 'true' : 'false'"
        aria-controls="primary-nav"
        @click="menuOpen = !menuOpen"
      >
        <span></span><span></span><span></span>
        <span class="sr-only">Menü öffnen</span>
      </button>

      <!-- Links -->
      <nav
        id="primary-nav"
        :class="['nav-links', { 'is-open': menuOpen }]"
        @click="menuOpen = false"
      >
        <a href="#feature">Leistungen</a>
        <a href="#about">Ablauf</a>
        <a href="#pricing">Preise</a>
        <a href="#contact">Kontakt</a>
      </nav>
    </div>
  </header>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const menuOpen = ref(false);
const isScrolled = ref(false);

const onScroll = () => {
  isScrolled.value = window.scrollY > 8;
};

onMounted(() => {
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
});
onUnmounted(() => window.removeEventListener('scroll', onScroll));
</script>

