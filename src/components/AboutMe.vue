<template>
  <section class="container" id="about">
    <!-- Partie gauche : Présentation -->
    <div id="cont1">
      <h2>A propos</h2>
      <h3>Qui je suis :</h3>
      <p>
        Je m'appelle Clément Guerault. Rigoureux, organisé et méthodique, je suis passionné de sport, notamment de musculation, qui m’a appris discipline et persévérance, des qualités que j’applique également dans mes études et projets.
      </p><br>

      <h3>Mon parcours :</h3>
      <p>
        Après un baccalauréat, j’ai commencé une formation DEUST Métiers de la Forme que j’ai finalement interrompue pour me réorienter vers l’informatique. Je poursuis actuellement un BTS SIO, filière SLAM, à l’Institution des Chartreux, où j’ai développé des compétences solides en développement et gestion de bases de données.
      </p><br>

      <h3>Mon projet professionnel :</h3>
      <p>
        Je souhaite poursuivre mes études en filière ICS pour devenir ingénieur en cybersécurité. Mon objectif est de concevoir et sécuriser des systèmes informatiques dans un environnement technologique en constante évolution, en mettant à profit mes compétences techniques et mon sens de la rigueur.
      </p><br>
    </div>

    <!-- Partie droite : CV et animation -->
    <div id="cont2">
      <p class="cta-text">Pour en savoir plus sur moi</p>
      <svg class="arrow" viewBox="0 0 20 100">
        <line x1="10" y1="0" x2="10" y2="90" />
        <polyline points="0,80 10,100 20,80" />
      </svg>
      <button class="cv-button" @click="openCV">
        Télécharger mon CV
      </button>   
      <!-- lien LinkedIn -->
      <a 
        href="https://www.linkedin.com/in/clément-guerault-7b929233b" 
        target="_blank" 
        rel="noopener noreferrer" 
        class="contact-link"
      >
        Me contacter
      </a>
    </div>
  </section>
</template>

<script setup>
const openCV = () => {
  window.open('/CV.pdf', '_blank') 
}
</script>

<style scoped>
/* Section générale */
.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  min-height: 700px;
  padding: 5%;
  box-sizing: border-box;
  flex-wrap: wrap; 
}

/* Partie gauche */
#cont1 {
  width: 50%;
  margin-bottom: 2rem;
}

#cont1 p {
  text-align: justify;
  font-size: 1.2rem;
  line-height: 1.6;
}

/* Partie droite */
#cont2 {
  width: 50%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-bottom: 2rem;
}

.cta-text {
  font-size: 2rem;
  font-weight: bold;
  margin-bottom: 2rem;
  text-align: center;
}

/* Flèche animée */
.arrow {
  width: 40px;
  height: 150px;
  stroke: #00bcd4;
  stroke-width: 4;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 300;
  stroke-dashoffset: 300;
  animation: draw-arrow 2s ease-in-out infinite alternate;
  margin-bottom: 2rem;
}

@keyframes draw-arrow {
  0% {
    stroke-dashoffset: 300;
  }
  100% {
    stroke-dashoffset: 0;
  }
}

/* Bouton CV */
.cv-button {
  background-color: #00bcd4;
  border: none;
  color: white;
  padding: 1rem 2rem;
  font-size: 1.2rem;
  border-radius: 10px;
  cursor: pointer;
  transition: background-color 0.3s, transform 0.3s;
  margin-bottom: 1rem;
}

.cv-button:hover {
  background-color: #0097a7;
  transform: translateY(-3px);
}

/* lien LinkedIn */
.contact-link {
  color: #00bcd4;
  text-decoration: none;
  font-size: 1.1rem;
  font-weight: bold;
  transition: color 0.3s, transform 0.3s;
}

.contact-link:hover {
  color: #0097a7;
  transform: translateY(-2px);
}

/* Titres */
h2 {
  font-size: 5rem;
  margin-bottom: -15px;
  margin-top: -30px;
}

h3 {
  margin-bottom: -15px;
}

/* ===== Responsive ===== */
@media (max-width: 1200px) {
  #cont1 {
    width: 55%;
  }
  #cont2 {
    width: 45%;
  }
  #cont1 p {
    font-size: 1.1rem;
  }
  .cta-text {
    font-size: 1.8rem;
  }
  .cv-button {
    font-size: 1.1rem;
    padding: 0.8rem 1.8rem;
  }
}

@media (max-width: 768px) {
  .container {
    flex-direction: column;
    height: auto;
    padding: 3%;
    gap: 2rem;
  }
  #cont1, #cont2 {
    width: 100%;
  }
  #cont1 p {
    font-size: 1rem;
  }
  h2 {
    font-size: 3rem;
  }
  h3 {
    font-size: 1.5rem;
  }
  .cta-text {
    font-size: 1.6rem;
  }
  .cv-button {
    font-size: 1rem;
    padding: 0.7rem 1.5rem;
  }
  .arrow {
    width: 30px;
    height: 120px;
  }
}

@media (max-width: 480px) {
  h2 {
    font-size: 2.2rem;
  }
  h3 {
    font-size: 1.2rem;
  }
  #cont1 p {
    font-size: 0.95rem;
  }
  .cta-text {
    font-size: 1.4rem;
  }
  .cv-button {
    font-size: 0.9rem;
    padding: 0.6rem 1.2rem;
  }
  .arrow {
    width: 20px;
    height: 100px;
  }
}
</style>
