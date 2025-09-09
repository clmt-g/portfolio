<template>
  <div id="app">
    <!-- Conteneur pour les météores -->
    <div id="meteors-container"></div>

    <!-- Contenu principal -->
    <router-view />
  </div>
</template>

<script setup>
import { onMounted } from 'vue'

onMounted(() => {
  const container = document.getElementById('meteors-container')

  function createMeteor() {
    const meteor = document.createElement('div')
    meteor.classList.add('meteor')
    meteor.style.top = Math.random() * window.innerHeight + 'px'
    meteor.style.left = Math.random() * window.innerWidth + 'px'

    container.appendChild(meteor)

    const duration = 2 + Math.random() * 3
    const xEnd = parseFloat(meteor.style.left) + 200 + Math.random() * 200
    const yEnd = parseFloat(meteor.style.top) + 100 + Math.random() * 200

    meteor.animate([
      { transform: `translate(0,0) rotate(${Math.random()*60-30}deg)`, opacity: 0.7 },
      { transform: `translate(${xEnd}px,${yEnd}px) rotate(${Math.random()*60-30}deg)`, opacity: 0 }
    ], {
      duration: duration * 1000,
      easing: 'ease-out',
      iterations: 1
    }).onfinish = () => meteor.remove()
  }

  setInterval(createMeteor, 100 + Math.random() * 100)
})
</script>

<style>
/* z-index = 0 */
body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.6;
  color: #fff;
  background: linear-gradient(135deg, #121212, #1e1e2f, #0d3a66);
  position: relative;
  z-index: 0;
}
/* Conteneur pour les météores derrière le contenu */
#meteors-container {
  position: fixed; 
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none; 
  z-index: 0;
  overflow: hidden; 
}
/* Style des météores */
.meteor {
  position: absolute;
  width: 2px;
  height: 100px;
  background: linear-gradient(white, #00bcd4);
  border-radius: 50%;
  opacity: 0.7;
  transform: rotate(45deg);
}

/* z-index = 1 */
#app {
  position: relative;
  z-index: 1;
  width: 100%;
  margin: 0 auto;
  padding: 0;
}

/* z-index = 2 */
/* Header et footer toujours affiché */
header, footer {
  position: relative;
  z-index: 2;
}
</style>
