<template>
  <Header />

  <section class="projects">
    <h2>Mes Projets et Compétences</h2>

    <!-- générer l'html pour toutes les compétences -->
    <div class="project-grid">
      <div 
        v-for="(proj, index) in projects" 
        :key="index" 
        class="project-card"
      >
        <a :href="proj.pdf" target="_blank" rel="noopener noreferrer"><h3>{{ proj.name }}</h3></a>
        <ul>
          <li v-for="(sub, idx) in proj.subSkills" :key="idx">{{ sub }}</li>
        </ul>
        <iframe :src="proj.pdf" class="pdf-thumb" title="ifram qui affiche le pdf"></iframe>
      </div>
    </div>
  </section>

  <Footer />
</template>

<script setup>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';

// constante qui stocke mes compétences et le chemin des pdf
const projects = [
  {
    name: "1. Gérer le patrimoine informatique",
    subSkills: ["Recenser et identifier les ressources numériques"],
    pdf: "/projects/preuve1.pdf"
  },
  {
    name: "2. Répondre aux incidents et aux demandes d’assistance et d’évolution",
    subSkills: ["Traiter des demandes concernant les services réseau et système, applicatifs"],
    pdf: "/projects/preuve2.pdf"
  },
  {
    name: "3. Participer à la valorisation de l’image de l’organisation sur les médias numériques",
    subSkills: ["Référencer les services en ligne de l’organisation et mesurer leur visibilité"],
    pdf: "/projects/preuve3.pdf"
  },
  {
    name: "4. Analyser les objectifs et les modalités d'organisation d'un projet",
    subSkills: ["Planifier les activités"],
    pdf: "/projects/preuve4.pdf"
  },
  {
    name: "5. Réaliser les tests d'intégration et d'acceptation d'un service",
    subSkills: ["Déployer un service"],
    pdf: "/projects/preuve5.pdf"
  },
  {
    name: "6. Mettre en place son environnement d’apprentissage personnel",
    subSkills: ["Gérer son identité professionnelle"],
    pdf: "/projects/preuve6.pdf"
  }
];
</script>

<style scoped>
.projects {
  padding: 5%;
  color: #fff;
  min-height: 700px;
  text-align: center;
}

h2 {
  font-size: 4rem;
  margin-bottom: 2rem;
  color: #00bcd4;
}

.project-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2rem;
  justify-items: stretch;
}

.project-card {
  width: 90%;
  background: rgba(20, 20, 30, 0.85);
  padding: 1.5rem;
  border-radius: 15px;
  box-shadow: 0 0 15px rgba(0, 188, 212, 0.3);
  transition: transform 0.3s;
  justify-items: center;
}

.project-card:hover {
  transform: translateY(-5px);
}

.project-card h3 {
  font-size: 1.5rem;
  margin-bottom: 1rem;
  color: #00bcd4;
}

.project-card ul {
  text-align: left;
  margin-bottom: 1rem;
  padding-left: 1.5rem;
}

.project-card li {
  margin-bottom: 0.5rem;
}

.pdf-thumb {
  width: 100%;
  max-width: 250px;
  height: 300px;
  border-radius: 10px;
  cursor: pointer;
  transition: transform 0.3s, box-shadow 0.3s;
}

.pdf-thumb:hover {
  transform: scale(1.05);
  box-shadow: 0 0 15px rgba(0, 188, 212, 0.6);
}

.project-card a {
  color: #00bcd4;            
  text-decoration: none;     
  transition: color 0.3s, text-shadow 0.3s;
  cursor: pointer;
}

/* Au survol */
.project-card a:hover {
  color: #0097a7;          
  text-shadow: 0 0 10px rgba(0, 188, 212, 0.7); 
}

.project-card  a::after {
  content: '';
  display: block;
  width: 0;
  height: 2px;
  background: #00bcd4;
  transition: width 0.3s;
  margin-top: 5px;
}

.project-card a:hover::after {
  width: 100%;
}

/* Responsive */
@media (max-width: 768px) {
  h2 {
    font-size: 3rem;
  }
  .project-card h3 {
    font-size: 1.3rem;
  }
  .project-grid {
    grid-template-columns: 1fr; 
  }
}

@media (max-width: 480px) {
  h2 {
    font-size: 2.5rem;
  }
  .project-card h3 {
    font-size: 1.1rem;
  }
  .pdf-thumb {
    height: 200px;
  }
  .project-grid {
    grid-template-columns: 1fr;
  }
}
</style>
