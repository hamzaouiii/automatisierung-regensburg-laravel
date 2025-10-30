<template>
  <Head title="Datenschutz – Automatisierung Regensburg" />
    <section class="privacy-content">
      <div class="figure">
        <img :src="pageFigure">
      </div>
      <div class="text">
            <h1>Datenschutzerklärung</h1>
      <div class="privacy-content-par">
        <h2>1. Verantwortlicher</h2>
        <p><strong>Mohammed Hamzaoui</strong><br>
        Ahornstr. 11<br>
        93087 Alteglofsheim<br>
        Deutschland<br>
        Telefon: 01523 1783593<br>
        E-Mail: <a href="mailto:kontakt@automatisierung-regensburg.de">kontakt@automatisierung-regensburg.de</a></p>
      </div>
      <div class="privacy-content-par">
        <h2>2. Allgemeine Hinweise</h2>
        <p>Der Schutz Ihrer persönlichen Daten ist mir ein besonderes Anliegen...</p>
      </div>
      <div class="privacy-content-par">
        <h2>3. Server-Log-Dateien</h2>
        <p>Der Provider der Seiten erhebt und speichert automatisch Informationen in sogenannten Server-Log-Dateien...</p>
      </div>
      <div class="privacy-content-par">
        <h2>4. Kontaktformular / E-Mail-Kontakt</h2>
        <p>Wenn Sie mir per Kontaktformular oder E-Mail Anfragen zukommen lassen...</p>
        </div>
      <div class="privacy-content-par">
        <h2>5. Cookies</h2>
        <p>Diese Website verwendet in der Regel keine Cookies...</p>
      </div>
      <div class="privacy-content-par">
        <h2>6. Analyse-Tools</h2>
        <p>Es werden keine Tracking- oder Analyse-Tools eingesetzt.</p>
      </div>
      <div class="privacy-content-par">
        <h2>7. Ihre Rechte</h2>
        <p>Sie haben jederzeit das Recht auf unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten...</p>
      </div>
      <div class="privacy-content-par">      
        <h2>8. SSL- bzw. TLS-Verschlüsselung</h2>
        <p>Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte...</p>
      </div>
      <div class="privacy-content-par">
        <h2>9. Widerspruch gegen Werbe-E-Mails</h2>
        <p>Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten zur Übersendung von nicht ausdrücklich angeforderter Werbung wird widersprochen.</p>
      </div>
      </div>

    
    </section>

</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import Layout from '@/Layouts/Layout.vue'
import pageFigure from '@img/legal/schutz.svg'      
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
