<template>
  <div class="about-section">
    <div class="about-container">
      <h1 class="about-title">Sobre Nosotros</h1>
      <p class="about-description">
        En Estética Figueroa, nos dedicamos a resaltar tu belleza natural a través de tratamientos especializados en estética facial y corporal. Nuestro enfoque combina técnicas avanzadas y productos de la más alta calidad para brindarte los mejores resultados.
      </p>
      <div class="about-cards">
        <div class="card">
          <i class="fas fa-spa"></i>
          <h3>Tratamientos Faciales</h3>
          <p>Cuidamos tu piel con tratamientos personalizados para rejuvenecer y revitalizar.</p>
        </div>
        <div class="card">
          <i class="fas fa-heart"></i>
          <h3>Estética Corporal</h3>
          <p>Transforma tu cuerpo con nuestros procedimientos diseñados para mejorar tu figura.</p>
        </div>
        <div class="card">
          <i class="fas fa-users"></i>
          <h3>Equipo Experto</h3>
          <p>Nuestro equipo está compuesto por profesionales altamente capacitados en estética.</p>
        </div>
      </div>

      <div class="video-section">
        <h2 class="video-title">Un poco de lo que Hacemos</h2>
        <div class="video-cards">
          <div class="video-card">
            <video controls>
              <source src="/resources/assets/video1.mp4" type="video/mp4">
              Tu navegador no soporta el video.
            </video>
            <h3>Tratamiento Facial</h3>
          </div>
          <div class="video-card">
            <video controls>
              <source src="/resources/assets/video2.mp4" type="video/mp4">
              Tu navegador no soporta el video.
            </video>
            <h3>Procedimiento Corporal</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'About',
};
</script>

<style scoped>
.about-section {
  background-size: cover;
  padding: 16px 20px;
  display: flex;
  justify-content: center;
}

.about-container {
  max-width: 1000px;
  padding: 40px;
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
  text-align: center;
  background: rgba(0, 0, 0, 0.3); 
}

.about-title {
  color: #f7f2f2;
  font-size: 4rem;
  font-weight: 700;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.about-description {
  color: #333;
  font-size: 1.2rem;
  margin-bottom: 40px;
}

.about-cards {
  display: flex;
  justify-content: space-around;
  margin-bottom: 40px;
}

.card {
  background: rgba(240, 232, 232, 0.233);
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s ease-in-out;
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
}

.card:hover {
  transform: translateY(-10px);
}

.card i {
  font-size: 2rem;
  color: #f7f2f2;
  margin-bottom: 15px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.card h3 {
  color: #e06363;
  margin-bottom: 10px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.card p {
  color: #f7f2f2;
  font-size: 1rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.video-section {
  margin-top: 40px;
  
}

.video-title {
  color: #f7f2f2;
  font-size: 2.5rem;
  margin-bottom: 30px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.video-cards {
  display: flex;
  justify-content: space-around;
}

.video-card {
  background: rgba(240, 232, 232, 0.233);
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  width: 45%;
  transition: transform 0.3s ease-in-out;
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
}

.video-card:hover {
  transform: translateY(-10px);
}

.video-card video {
  width: 70%;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 15px;
}

.video-card h3 {
  color: #e06363;
  margin-top: 10px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}
</style>
