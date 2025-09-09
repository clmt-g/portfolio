<template>
  <footer>
    <div class="container">
      <p>© 2025 Clément - Tous droits réservés</p>
    </div>
  </footer>
</template>

<style scoped>
footer {
  width: 100%;  
  background-color: rgba(20, 20, 30, 0.85); 
  color: #ffffff;
  padding: 1.2rem 0;
  border-top: 1px solid rgba(0, 188, 212, 0.3); 
  text-align: center;
  backdrop-filter: blur(5px);
  position: relative;
  z-index: 2;
  font-size: 0.95rem;
}

footer .container {
  width: 100%;
  margin: 0 auto;
  padding: 0 1rem;
}

footer a {
  color: #00bcd4;
  text-decoration: none;
  margin: 0 0.5rem;
  transition: color 0.3s, transform 0.3s;
}

footer a:hover {
  color: #ffffff;
  transform: translateY(-2px);
}
</style>

