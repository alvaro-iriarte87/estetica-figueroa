import { createRouter, createWebHistory } from 'vue-router';
import Home from './components/Home.vue';
import About from './components/About.vue';
import Contact from './components/Contact.vue';
import Products from './components/Products.vue';
import Treatments from './components/Treatments.vue';
import Login from './components/Login.vue';
import ProductsAdmin from './components/ProductsAdmin.vue'; 
import TreatmentsAdmin from './components/TreatmentsAdmin.vue'; 

const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
  { path: '/contact', component: Contact },
  { path: '/products', component: Products },
  { path: '/treatments', component: Treatments },
  { path: '/login', component: Login },
 { path: '/ProductsAdmin', component: ProductsAdmin },
 { path: '/treatmentsAdmin', component: TreatmentsAdmin }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});


export default router;
