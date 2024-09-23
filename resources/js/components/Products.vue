<template>
  <div class="products-wrapper">
    <h1 class="section-title">Nuestros Productos</h1>
    <div class="products-container">
      <div class="product-card" v-for="(product, index) in products" :key="index">
        <!-- Carrusel de imágenes con animación -->
        <div class="product-gallery">
          <img 
            v-for="(image, imgIndex) in product.images" 
            :src="image" 
            :key="imgIndex" 
            class="product-image" 
            :class="{ active: currentImageIndex === imgIndex }"
          />
        </div>

        <!-- Información del producto -->
        <div class="product-info">
          <h3 class="product-title">{{ product.title }}</h3>
          <p class="product-description">{{ product.description }}</p>
          <div class="price-info">
            <span class="original-price">${{ product.originalPrice }}</span>
            <span class="discounted-price">${{ product.discountedPrice }}</span>
          </div>
          <button class="buy-button">Comprar</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Products',
  data() {
    return {
      products: [
        {
          title: 'Producto 1',
          description: 'Descripción del producto 1',
          originalPrice: 120,
          discountedPrice: 90,
          images: ['/assets/producto1.webp', '/assets/producto2.png'],
        },
        {
          title: 'Producto 2',
          description: 'Descripción del producto 2',
          originalPrice: 150,
          discountedPrice: 110,
          images: ['/assets/producto3.jpg', '/assets/producto4.jpg'],
        },
        // Añadir más productos aquí
      ],
      currentImageIndex: 0,
    };
  },
  mounted() {
    this.startImageCarousel();
  },
  methods: {
    startImageCarousel() {
      setInterval(() => {
        this.currentImageIndex = (this.currentImageIndex + 1) % this.products[0].images.length;
      }, 3000); // Cambia la imagen cada 3 segundos
    }
  }
};
</script>

<style scoped>
.products-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 40px 0;
  padding: 20px;
  background: rgba(0, 0, 0, 0.3); /* Fondo oscuro para mejorar el contraste */
  border: 2px solid #e06363;
  border-radius: 20px;
  box-shadow: 0px 0px 20px #e57373;
  max-width: 1000px; /* Puedes ajustar este valor según lo necesites */
  width: 100%; /* Asegúrate de que el recuadro ocupe el 100% del ancho disponible */
  margin-top: 15px; /* Ajusta este valor para subir el recuadro */
  position: 150px; /* Esto permite que margin-top funcione como esperamos */
  margin-left: 140px; /* Aumenta este valor para moverlo más a la derecha */
}

.section-title {
  color: #f7f2f2;
  font-size: 3.5rem;
  font-weight: 700;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
  margin-bottom: 40px;
}

.products-container {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
  max-width: 1200px;
}

.product-card {
  border-radius: 10px;
  padding: 20px;
  width: 300px;
  box-shadow: 0px 0px 10px #e57373;
  transition: transform 0.3s ease-in-out;
  text-align: center;
  background: rgba(0, 0, 0, 0.207); /* Fondo oscuro para mejorar el contraste */
}

.product-card:hover {
  transform: translateY(-10px);
}

.product-gallery {
  margin-bottom: 15px;
  position: relative;
}

.product-image {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
  position: absolute;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}

.product-image.active {
  opacity: 1;
  position: relative;
}

.product-info {
  color: #dad3d3;
}

.product-title {
  color: #d32f2f;
  margin-bottom: 10px;
}

.product-description {
  margin-bottom: 10px;
  font-size: 1rem;
}

.price-info {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
}

.original-price {
  text-decoration: line-through;
  color: #f9f4f4;
}

.discounted-price {
  color: #d32f2f;
  font-weight: bold;
}

.buy-button {
  background-color: #d32f2f;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.buy-button:hover {
  background-color: #b71c1c;
}
</style>
