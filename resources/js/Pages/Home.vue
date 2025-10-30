<template>
  <Head title="Automatisierung Regensburg – Digitale Lösungen und Prozessautomatisierung für kleine Unternehmen" />
  <HeroSection />
  <FeatureSection />
  <AboutSection />
  <PricingSection />
  <ContactSection />
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import Layout from '@/Layouts/Layout.vue'
import HeroSection from '@/Components/HeroSection.vue'
import FeatureSection from '@/Components/FeatureSection.vue'
import AboutSection from '@/Components/AboutSection.vue'
import PricingSection from '@/Components/PricingSection.vue'
import ContactSection from '@/Components/ContactSection.vue'

defineOptions({ layout: Layout })
</script>
