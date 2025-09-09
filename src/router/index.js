import { createRouter, createWebHistory } from 'vue-router'
import HomePage from '../pages/HomePage.vue'
import Projects from '../pages/Projects.vue'
import Certification from '../pages/Certifications.vue'

const routes = [
  { path: '/', name: 'Home', component: HomePage },
  { path: '/projects', name: 'Projects', component: Projects },
    { path: '/certifications', name: 'Certification', component: Certification }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router