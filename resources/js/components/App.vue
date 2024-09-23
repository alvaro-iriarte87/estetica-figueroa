<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-custom">
      <a class="navbar-brand text-light" href="#">
        <img src="/resources/assets/logo3.jpeg" alt="Logo" class="logo-image" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link class="nav-link" to="/">Home <i class="fas fa-home"></i></router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/about">Nosotros <i class="fas fa-users"></i></router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/products">Productos <i class="fas fa-box-open"></i></router-link>
          </li>
          <li  class="nav-item">
            <router-link class="nav-link" to="/treatments">Tratamientos <i class="fas fa-spa"></i></router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/contact">Contacto <i class="fas fa-phone"></i></router-link>
          </li>
        </ul>
        <!-- Dropdown align right -->
        <div class="dropdown ms-auto">
          <button class="btn btn-secondary dropdown-toggle" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6)" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ isLoggedIn ? 'Admin' : 'Iniciar Sesión' }} <i class="fas fa-key"></i>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li v-if="!isLoggedIn">
              <button class="dropdown-item" style="color:#d32f2f;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6)" type="button">
                <router-link class="nav-link" to="/login">Iniciar Sesión</router-link>
              </button>
            </li>
            <li v-if="isLoggedIn">
              <button class="dropdown-item" type="button">
                <router-link class="nav-link" to="/ProductsAdmin">Productos</router-link>
              </button>
            </li>
            <li v-if="isLoggedIn">
              <button class="dropdown-item" type="button">
                <router-link class="nav-link" to="/treatmentsAdmin">Tratamientos</router-link>
              </button>
            </li>
            <li v-if="isLoggedIn">
              <button class="dropdown-item" @click="logout">Cerrar Sesión</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="fondoApp">
      <router-view @login-success="handleLoginSuccess"></router-view>
    </div>
  </div>
</template>

<script>
import { Confirm } from 'notiflix/build/notiflix-confirm-aio';
import { useRouter } from 'vue-router';

export default {
  data() {
    return {
      isLoggedIn: false,
    };
  },
  methods: {
    handleLoginSuccess() {
      this.isLoggedIn = true; // Cambia el estado a logueado
    },
    logout() {
      this.isLoggedIn = false;
      Confirm.show(
                    'Notiflix Confirm',
                    'Estas seguro que deseas cerrar tu sesion admin ? ',
                    'Si',
                    'No',
                    () => {
                      alert(' Sesion cerrada !... ');
                    },
                    {
                    },
                  );

                  setTimeout(() => {
           router.push('/');
           }, 3000);
    }
    } 
 }
</script>

<style scoped>
.fondoApp{
  background-image: url('/resources/assets/fondoApp.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  min-height: 100vh; /* Asegúrate de cubrir toda la pantalla */
  padding: 20px;
}

.bg-custom {
  /* background-color: #f5b5b5; */
  background: rgba(12, 12, 12, 0.568); /* Overlay oscuro para mejorar el contraste */
}

.navbar-light .navbar-nav .nav-link {
  color: #e57373;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6)
}

.navbar-light .navbar-nav .nav-link.active {
  color: #d32f2f;
}

.navbar-light .navbar-nav .nav-link:hover{
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
}

.navbar-light .navbar-brand {
  color: #d32f2f;
}

.navbar-light .navbar-toggler-icon {
  background-color: #d32f2f;
}

/* Alinear el dropdown a la derecha */
.ms-auto {
  margin-left: auto;
}

.logo-image {
  margin-left: 80px;
  height: 80px; /* Ajusta la altura según sea necesario */
  margin-left: 35px; /* Espacio entre el texto y la imagen */
  vertical-align: middle; /* Alinea la imagen verticalmente con el texto */
  max-width: 120%; /* Asegúrate de que la imagen no exceda el contenedor */
  object-fit: contain; /* Mantén la relación de aspecto de la imagen */
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
}

</style>
