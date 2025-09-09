<template>
  <header class="header">
    <div class="container">
      <nav>
        <div class="left">
          <router-link to="/">Clément</router-link>
        </div>
        <div class="right">
          <router-link to="/projects" class="lien">Projets </router-link>
          <router-link to="/certifications" class="lien">Certifications </router-link>
        </div>
      </nav>
    </div>
  </header>
</template>

<style scoped>
.header {
  width: 100%;
  background-color: rgba(20, 20, 30, 0.85); 
  color: white;
  padding: 1rem 0;  
  backdrop-filter: blur(5px); 
  border-bottom: 1px solid rgba(0, 188, 212, 0.3); 
  position: fixed;
  top: 0;
  z-index: 2;
}

.container {
  margin: 5px 5%;
  padding: 0 1rem;
}

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap; 
}

/* lien gauche */
.left a {
  font-weight: bold;
  font-size: 1.8rem;
  color: #ffffff;
  text-decoration: none;
  letter-spacing: 1px;
  transition: color 0.3s, transform 0.3s;
}

.left a:hover {
  color: #00bcd4;
  transform: translateY(-2px);
}

/* Liens à droite */
.right a {
  color: #ffffff;
  text-decoration: none;
  margin-left: 3rem;
  transition: color 0.3s, transform 0.3s;
  font-size: 1.2rem;
}

.right a:hover {
  color: #00bcd4;
  transform: translateY(-2px);
}

/* ===== Responsive ===== */
@media (max-width: 1024px) {
  .left a {
    font-size: 1.5rem;
  }
  .right a {
    font-size: 1rem;
    margin-left: 2rem;
  }
}

@media (max-width: 768px) {
  nav {
    flex-direction: column; 
    align-items: flex-start;
    gap: 0.5rem;
  }
  .left a {
    font-size: 1.4rem;
  }
  .right a {
    font-size: 0.95rem;
    margin-left: 0;
  }
}
</style>
