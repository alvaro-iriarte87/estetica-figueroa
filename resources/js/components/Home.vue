<template>
  <div class="hero-section">
    <div class="hero-inner-content">
      <h1>Bienvenido a Estética Figueroa</h1>
      <p>Transforma tu belleza con nuestro enfoque único en estética y cuidado personal.</p>
      <div class="image-container">
        <img src="/resources/assets/logo.jpeg" alt="Presentación Estética" class="dynamic-image"/>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Home',
};
</script>

<style scoped>
.hero-section {
  position: relative;
  background-size: cover;
  height: 92vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;
  overflow: hidden;
}

.hero-inner-content {
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
  padding: 30px; 
  background: rgba(0, 0, 0, 0.3);
  position: relative;
  z-index: 2;
}

.hero-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background: rgba(0, 0, 0, 0.4); 
  backdrop-filter: blur(6px);
  z-index: 1;
  border-radius: 10px;
}

.hero-inner-content h1 {
  font-size: 4rem;
  font-weight: 700;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.hero-inner-content p {
  font-size: 1.5rem;
  margin-bottom: 30px;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
  color: #141414;
}

.image-container {
  perspective: 1000px;
}

.dynamic-image {
  width: 300px;
  height: auto;
  border-radius: 10px;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
}

.dynamic-image:hover {
  transform: rotateY(360deg);
  box-shadow: 0px 0px 10px #e57373;
  transition: transform 1s ease-in-out;
}
</style>
