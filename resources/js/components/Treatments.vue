<template>
  <div class="treatments-section">
    <div class="treatments-container">
      <!-- Título -->
      <h1 class="about-title">Nuestros Servicios</h1>

      <!-- Video principal de presentación -->
      <div class="main-video">
        <video controls autoplay muted class="main-video-content">
          <source src="/resources/assets/video3.mp4" type="video/mp4" />
          Tu navegador no soporta la reproducción de videos.
        </video>
        <p class="main-video-description">
           Descubre nuestros tratamientos especializados en estética corporal y facial para embellecer tu cuerpo de manera profesional.
        </p>
        <img src="/resources/assets/logo2.jpeg" alt="Logo" class="logo-image" />
      </div>
      <br>
      <!-- Lista de tratamientos -->
      <h1 class="about-title">Tratamientos</h1>

      <div class="treatments-list">
        <div class="treatment-card" v-for="(treatment, index) in treatments" :key="index">
          <video controls>
            <source :src="treatment.videoSrc" type="video/mp4" />
            Tu navegador no soporta la reproducción de videos.
          </video>
          <h3>{{ treatment.title }}</h3>
          <p>{{ treatment.description }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Treatments',
  data() {
    return {
      treatments: [
        { title: 'Tratamiento 1', description: 'Descripción del tratamiento 1', videoSrc: 'video1.mp4' },
        { title: 'Tratamiento 2', description: 'Descripción del tratamiento 2', videoSrc: 'video2.mp4' },
        // Añadir más tratamientos aquí
      ],
    };
  },
};
</script>

<style scoped>
.treatments-section {
  padding: 15px;
  display: flex;
  justify-content: center;
}

.treatments-container {
  max-width: 1100px;
  padding: 40px;
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
  background: rgba(0, 0, 0, 0.3); /* Fondo oscuro */
  text-align: center;
}

.about-title {
  color: #f7f2f2;
  font-size: 4rem;
  font-weight: 700;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.logo-image {
  margin-left: 80px;
  height: 100px; /* Ajusta la altura según sea necesario */
  margin-left: 35px; /* Espacio entre el texto y la imagen */
  vertical-align: middle; /* Alinea la imagen verticalmente con el texto */
  max-width: 120%; /* Asegúrate de que la imagen no exceda el contenedor */
  object-fit: contain; /* Mantén la relación de aspecto de la imagen */
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
}

/* Estilo del contenedor del video y la descripción */
.main-video {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 40px;
  width: 100%;
  max-width: 900px;
  margin: 0 auto;
}

.main-video-content {
  width: 50%;
  height: 400px; /* Ajusta la altura del video principal */
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
}

.main-video-description {
  width: 45%;
  color: #f7f2f2;
  margin-left: 20px;
  font-size: 1.2rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

/* Lista de tratamientos */
.treatments-list {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: space-between;
}

.treatment-card {
  background: rgba(240, 232, 232, 0.233);
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0px 0px 10px #e57373;
  text-align: center;
  transition: transform 0.3s ease-in-out;
  width: 45%;
}

.treatment-card:hover {
  transform: translateY(-10px);
}

.treatment-card h3 {
  color: #e06363;
  margin-top: 10px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.treatment-card p {
  color: #f7f2f2;
  font-size: 1rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}
</style>
