<template>
  <Header />
  <section class="certifications">
    <h2>Mes Certifications</h2>
    <div class="cert-grid">
      <div v-for="(cert, index) in certifications" :key="index" class="cert-card">
        <a :href="cert.pdf" target="_blank" rel="noopener noreferrer"><h3>{{ cert.name }}</h3></a>
        <br>
        <iframe :src="cert.pdf" class="pdf-thumb" title="pdf de la certification"></iframe>
      </div>
    </div>
  </section>
  <Footer />
</template>

<script setup>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';

const certifications = [
  {
    name: "HTML W3School",
    pdf: "https://clmt-g.github.io/portfolio/certifications/HTML_W3School.pdf"
  },
  {
    name: "Python W3School",
    pdf: "https://clmt-g.github.io/portfolio/certifications/Python_W3School.pdf"
  },
  {
    name: "Python Essancial 1 NetAcad",
    pdf: "https://clmt-g.github.io/portfolio/certifications/PythonEssentials.pdf"
  },
  {
    name: "RH104 Certification Red Hat",
    pdf: "https://clmt-g.github.io/portfolio/certifications/RH104_Certification.pdf"
  },
  {
    name: "SQL W3School",
    pdf: "https://clmt-g.github.io/portfolio/certifications/SQL_W3School.pdf"
  }
]
</script>

<style scoped>
.certifications {
  padding: 5%;
  min-height: 700px;
  color: #fff;
  text-align: center;
}

h2 {
  font-size: 4rem;
  margin-bottom: 2rem;
  color: #00bcd4;
}

.cert-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  justify-items: center;
}

.cert-card {
  background: rgba(20, 20, 30, 0.85);
  padding: 1.5rem;
  border-radius: 15px;
  box-shadow: 0 0 15px rgba(0, 188, 212, 0.3);
  transition: transform 0.3s;
  width: 100%;
  max-width: 300px;
}

.cert-card:hover {
  transform: translateY(-5px);
}

.cert-card h3 {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.pdf-preview {
  width: 100%;
  height: 300px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

.cert-card a {
  color: #00bcd4;            
  text-decoration: none;     
  transition: color 0.3s, text-shadow 0.3s;
  cursor: pointer;
}

/* Au survol */
.cert-card a:hover {
  color: #0097a7;          
  text-shadow: 0 0 10px rgba(0, 188, 212, 0.7); 
}

.cert-card  a::after {
  content: '';
  display: block;
  width: 0;
  height: 2px;
  background: #00bcd4;
  transition: width 0.3s;
  margin-top: 5px;
}

.cert-card a:hover::after {
  width: 100%;
}

@media (max-width: 768px) {
  h2 {
    font-size: 3rem;
  }
  .cert-card h3 {
    font-size: 1.3rem;
  }
}

@media (max-width: 480px) {
  h2 {
    font-size: 2.5rem;
  }
  .cert-card h3 {
    font-size: 1.1rem;
  }
  .pdf-preview {
    height: 220px;
  }
}
</style>