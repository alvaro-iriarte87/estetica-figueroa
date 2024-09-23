import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import Notiflix from 'notiflix';

import { createApp } from 'vue';
import App from './components/App.vue';
import router from './router';


const app = createApp(App);
app.use(router);
app.mount('#app');

Notiflix.Notify.init({
    width: '280px',
    position: 'right-bottom',  // Puedes cambiar la posición
    distance: '10px',
    opacity: 1,
    borderRadius: '10px',
    timeout: 3000,  // Tiempo que la notificación se muestra (ms)
    cssAnimationStyle: 'zoom',  // Estilo de animación
  });
