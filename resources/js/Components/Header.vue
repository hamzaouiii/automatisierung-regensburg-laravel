<template>
  <header :class="['navigation', { scrolled: isScrolled } , {background_white: whiteBg}]">
    <div class="nav-inner">
      <a class="brand" href="#home">
        <img src="/img/logo/logo.png" alt="Logo" />
      </a>
      <div class="nav-bar">      
        <button
        class="burger"
        :aria-expanded="menuOpen ? 'true' : 'false'"
        aria-controls="primary-nav"
        @click="openMenu()"
      >
        <span></span><span></span><span></span>
        <span class="sr-only">Menü öffnen</span>
      </button>

        <nav
          id="primary-nav"
          :class="['nav-links', { 'is-open': menuOpen }]"
          @click="openMenu()"
        >
          <a href="#feature">Leistungen</a>
          <a href="#about">Ablauf</a>
          <a href="#pricing">Preise</a>
          <a href="#contact">Kontakt</a>
        </nav>
      </div>

    </div>
  </header>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

let menuOpen = ref(false);
let isScrolled = ref(false);
let whiteBg = ref(false);

const onScroll = () => {
  isScrolled.value = window.scrollY > 260;
  if(window.scrollY < 20){
    isScrolled.value = false;
  }
};

onMounted(() => {
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
});
onUnmounted(() => window.removeEventListener('scroll', onScroll));

function openMenu(){
  console.log(whiteBg)
  menuOpen.value = !menuOpen.value
  whiteBg.value = !whiteBg.value
}
</script>

