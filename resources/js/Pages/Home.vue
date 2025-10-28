<template>
  <div>
    <Header />

    <main>
      <HeroSection />
      <FeatureSection />
      <AboutSection />
      <PricingSection />
      <ContactSection />
    </main>

    <Footer />
  </div>
</template>

<script setup>
import Header from '@/Components/Header.vue'
import HeroSection from '@/Components/HeroSection.vue'
import FeatureSection from '@/Components/FeatureSection.vue'
import AboutSection from '@/Components/AboutSection.vue'
import PricingSection from '@/Components/PricingSection.vue'
import ContactSection from '@/Components/ContactSection.vue'
import Footer from '@/Components/Footer.vue'
</script>
