<template>
  <div class="login-wrapper">
    <div class="login-container">
      <h1 class="title">Inicio de Sesión</h1>
      <br>
      <form @submit.prevent="login">
        <div class="form-group">
          <label for="email"><b>Email:</b></label>
          <input type="email" class="InputLogin" v-model="email" required>
        </div>
        <div class="form-group">
          <label for="password"><b>Password:</b></label>
          <input type="password" class="InputLogin" v-model="password" required>
        </div>
        <br>
        <button type="submit" class="btnLogin">Login</button>
        <button class="btnCancelar" @click="Cancel">Cancelar</button>
      </form>
      <p v-if="error">{{ error }}</p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import { Notify } from 'notiflix/build/notiflix-notify-aio';

export default {
  setup(props, { emit }) {
    const email = ref('');
    const password = ref('');
    const error = ref('');
    const router = useRouter();

    const login = async () => {
      try {
        const response = await axios.get('/test-login', {
          params: {
            email: email.value,
            password: password.value
          }
        });

        // Validar si la respuesta indica éxito en el inicio de sesión
        if (response.data.success) { 
          emit('login-success', { name: response.data.name });
          Notify.success('Inicio de sesión exitoso');
          setTimeout(() => {
            router.push('/');
          }, 3000);
        } else {
          // error.value = 'Tus credenciales son incorrectas.';
          Notify.failure('Tus credenciales son incorrectas');
        }
      } catch (err) {
        // error.value = 'Ocurrió un error al intentar iniciar sesión.';
        Notify.failure('Error en el servidor o en la red.');
      }
    };
    // Devolver las propiedades que el template necesita
    return {
      email,
      password,
      error,
      login,
    };
  }
};
</script>

<style scoped>
/* Envuelve toda la pantalla con un fondo */
.login-wrapper {
  min-height: 85vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: url('/path/to/your/background-image.jpg') no-repeat center center;
  background-size: cover;
}

/* Contenedor de login centrado */
.login-container {
  max-width: 600px;
  width: 100%;
  padding: 70px;
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
  background: rgba(0, 0, 0, 0.3);
}

/* Título de login */
.title {
  color: #f7f2f2;
  font-size: 4rem;
  font-weight: 550;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

/* Estilos de los inputs */
.InputLogin {
  width: 70%;
  padding: 8px;
  margin-bottom: 20px;
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
}

/* Botón de login */
.btnLogin {
  background: #e06363;
  box-shadow: 0px 0px 10px #e57373;
  border-radius: 25px;
  padding: 10px 20px;
  color: #fff;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  margin-right: 10px;
}

.btnLogin:hover {
  background: #d9534f;
  box-shadow: 0px 0px 15px #f44336;
  transform: scale(1.05);
}

/* Botón de cancelar */
.btnCancelar {
  background: #868585;
  box-shadow: 0px 0px 10px #444242;
  border-radius: 25px;
  padding: 10px 20px;
  color: #fff;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.btnCancelar:hover {
  background: #a8a6a6;
  box-shadow: 0px 0px 15px #535151;
  transform: scale(1.05);
}
</style>
