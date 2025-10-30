<template>
  <Head title="Impressum – Automatisierung Regensburg" />
   <section class="privacy-content">

    <div class="figure">
      <img :src="pageFigure">
    </div>
    <div class="text">
      <h1>Impressum</h1>

      <div class="privacy-content-par">
        <h2>Angaben gemäß § 5 TMG</h2>
        <p><strong>Mohammed Hamzaoui</strong><br>
        Ahornstr. 11<br>
        93087 Alteglofsheim<br>
        Deutschland</p>
      </div>

      <div class="privacy-content-par">
        <h2>Kontakt</h2>
        <p>Telefon: 01523 1783593<br>
        E-Mail: <a href="mailto:kontakt@automatisierung-regensburg.de">kontakt@automatisierung-regensburg.de</a></p>
      </div>

      <div class="privacy-content-par">
        <h2>Berufsbezeichnung</h2>
        <p>Freiberufler (Webentwicklung / Automatisierungslösungen)</p>
      </div>

      <div class="privacy-content-par">
        <h2>Umsatzsteuer-ID</h2>
        <p>Nicht umsatzsteuerpflichtig gemäß § 19 UStG (Kleinunternehmerregelung)</p>
      </div>

      <div class="privacy-content-par">
        <h2>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV</h2>
        <p>Mohammed Hamzaoui<br>
        Ahornstr. 11<br>
        93087 Alteglofsheim</p>
      </div>

      <div class="privacy-content-par">
        <h2>Haftungsausschluss</h2>
        <h3>Haftung für Inhalte</h3>
        <p>Als Diensteanbieter bin ich gemäß § 7 Abs. 1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich...</p>
      </div>

      <div class="privacy-content-par">
        <h3>Haftung für Links</h3>
        <p>Mein Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte ich keinen Einfluss habe...</p>
      </div>

      <div class="privacy-content-par">
        <h3>Urheberrecht</h3>
        <p>Die durch den Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht...</p>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import Layout from '@/Layouts/Layout.vue'
import pageFigure from '@img/legal/gdpr.svg'      
import { onMounted } from 'vue'
defineOptions({ layout: Layout })
onMounted(() => {
      window.scrollTo({
      top: 0,
      left: 100,
      behavior: "smooth",
    });

  })
</script>
