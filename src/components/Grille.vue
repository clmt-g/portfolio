<template>
    <Header />
    <Hero />
    <AboutMe />
    <section id="grille">
        <div class="container">
            <h2>Grille d'évaluation</h2>
            <table>
                <tr class="upper-header">
                    <th></th>
                    <th>Gérer le patrimoine informatique</th>
                    <th>Répondre aux incidents et aux demandes d'assistances et d'évolution</th>
                    <th>Développer la présence en ligne de l'organisation</th>
                    <th>Travailler en mode projet</th>
                    <th>Mettre à disposition des utilisateurs un service informatique</th>
                    <th>Organiser son développement professionnel</th>
                </tr>
                <tr>
                    <th class="lower-header">Réalisation en cours de formation</th>
                    <td></td>
                    <td></td>
                    <td @click="openPDF('/projects/preuve3.pdf')" class="clickable">✗</td>
                    <td></td>
                    <td @click="openPDF('/projects/preuve5.pdf')" class="clickable">✗</td>
                    <td @click="openPDF('/projects/preuve6.pdf')" class="clickable">✗</td>
                </tr>
                <tr>
                    <th class="lower-header">Réalisation en millieu professionnel en cours de première année</th>
                    <td @click="openPDF('/projects/preuve1.pdf')" class="clickable">✗</td>
                    <td @click="openPDF('/projects/preuve2.pdf')" class="clickable">✗</td>
                    <td></td>
                    <td @click="openPDF('/projects/preuve4.pdf')" class="clickable">✗</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th class="lower-header">Réalisation en millieu professionnel en cours de seconde année</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="lien">
            <a href="/grille_evaluation.pdf" target="_blank">
            Consulter la grille d'évaluation
            </a>
        </div>
    </section>
    <Footer />
</template>

<script setup>
// fonction pour ouvir le lien de la grille d'évaluation
const openPDF = (path) => {
  window.open(path, '_blank');
}
</script>

<style scoped>
/* tableau */
#grille {
  color: #fff;
  padding: 5%;
  padding-bottom: 5%;
  min-height: 700px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2rem;
}

.container {
  width: 100%;
  overflow-x: auto; 
}

h2 {
  font-size: 4rem;
  text-align: center;
  margin-bottom: 2rem;
}

table {
  width: 100%;
  border-collapse: collapse;
  text-align: center;
}

th, td {
  border: 1px solid #444;
  padding: 1rem;
}

.upper-header {
  background-color: #222;
  color: #00bcd4;
  font-weight: bold;
}

.lower-header {
  background-color: #333;
  color: #fff;
  font-weight: bold;
  text-align: left;
  padding-left: 1rem;
}

td {
  background-color: rgba(20, 20, 30, 0.8);
}

td:hover {
  background-color: rgba(0, 188, 212, 0.1);
}

/* croix cliquable */
table td.clickable {
  cursor: pointer;
  font-size: 2rem; 
  color: #00bcd4;
  text-align: center;
  vertical-align: middle;
  transition: transform 0.2s, color 0.2s;
}

table td.clickable:hover {
  transform: scale(1.3);
  color: #0097a7;
}

/* lien pour le PDF */
.lien {
  margin-top: 2rem;
  text-align: center;
}

.lien a {
  display: inline-block;
  padding: 0.8rem 1.5rem;
  background-color: #00bcd4;
  color: #fff;
  border-radius: 8px;
  text-decoration: none;
  font-weight: bold;
  transition: background-color 0.3s, transform 0.3s;
}

.lien a:hover {
  background-color: #0097a7;
  transform: translateY(-2px);
}

/* ===== Responsive ===== */
@media (max-width: 1024px) {
  h2 {
    font-size: 3.5rem;
  }
  th, td {
    padding: 0.8rem;
    font-size: 0.95rem;
  }
  table td.clickable {
    font-size: 1.8rem;
  }
  .lien a {
    padding: 0.7rem 1.3rem;
    font-size: 0.95rem;
  }
}

@media (max-width: 768px) {
  h2 {
    font-size: 3rem;
  }
  th, td {
    padding: 0.6rem;
    font-size: 0.85rem;
  }
  table td.clickable {
    font-size: 1.5rem;
  }
  .lien a {
    padding: 0.6rem 1.2rem;
    font-size: 0.9rem;
  }
}

@media (max-width: 480px) {
  h2 {
    font-size: 2.2rem;
  }
  th, td {
    padding: 0.4rem;
    font-size: 0.75rem;
  }
  table td.clickable {
    font-size: 1.2rem;
  }
  .lien a {
    padding: 0.5rem 1rem;
    font-size: 0.8rem;
  }
}
</style>

