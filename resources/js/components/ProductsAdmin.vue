<template>
  <div class="admin-products-wrapper">
    <div class="admin-products-container">
      <h1 class="title">Agregar Producto</h1>
      <form @submit.prevent="submitProduct">
        <div class="form-group">
          <label for="title"><b>Título:</b></label>
          <input type="text" v-model="title" class="InputAdmin" required>
        </div>
        <div class="form-group">
          <label for="description"><b>Descripción:</b></label>
          <textarea v-model="description" class="InputAdmin" required></textarea>
        </div>
        <div class="form-group">
          <label for="originalPrice"><b>Precio Original:</b></label>
          <input type="number" v-model="originalPrice" class="InputAdmin" required>
        </div>
        <div class="form-group">
          <label for="discountedPrice"><b>Precio con Descuento:</b></label>
          <input type="number" v-model="discountedPrice" class="InputAdmin" required>
        </div>
        <div class="form-group">
          <label for="images"><b>Imágenes:</b></label>
          <input type="file" @change="handleFileUpload" multiple>
        </div>
        <br>
        <button type="submit" class="btnSubmit">Guardar Producto</button>
      </form>
      <p v-if="error">{{ error }}</p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import { ref } from 'vue';

export default {
  setup() {
    const title = ref('');
    const description = ref('');
    const originalPrice = ref('');
    const discountedPrice = ref('');
    const images = ref([]);
    const error = ref('');

    const submitProduct = async () => {
      const formData = new FormData();
      formData.append('title', title.value);
      formData.append('description', description.value);
      formData.append('originalPrice', originalPrice.value);
      formData.append('discountedPrice', discountedPrice.value);

      images.value.forEach((image, index) => {
        formData.append(`images[${index}]`, image);
      });

      // Mostrar los datos del FormData en la consola
      for (const [key, value] of formData.entries()) {
        if (value instanceof File) {
          console.log(`${key}: ${value.name}`);
        } else {
          console.log(`${key}: ${value}`);
        }
      }

      try {
        const response = await axios.post('/products', formData, {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        });
        console.log('Respuesta del servidor:', response.data);
      } catch (err) {
        console.error('Error en la solicitud:', err.response ? err.response.data : err.message);
        error.value = err.response && err.response.data ? err.response.data.message : 'Ocurrió un error al agregar el producto.';
      }
    };

    const handleFileUpload = (event) => {
      images.value = Array.from(event.target.files);
    };

    return {
      title,
      description,
      originalPrice,
      discountedPrice,
      images,
      error,
      submitProduct,
      handleFileUpload
    };
  }
};
</script>

<style scoped>
.admin-products-wrapper {
  min-height: 85vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: url('/path/to/your/background-image.jpg') no-repeat center center;
  background-size: cover;
}

.admin-products-container {
  max-width: 600px;
  width: 100%;
  padding: 70px;
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
  background: rgba(0, 0, 0, 0.3);
}

.title {
  color: #f7f2f2;
  font-size: 4rem;
  font-weight: 550;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.InputAdmin {
  width: 100%;
  padding: 8px;
  margin-bottom: 20px;
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
}

.btnSubmit {
  background: #e06363;
  box-shadow: 0px 0px 10px #e57373;
  border-radius: 25px;
  padding: 10px 20px;
  color: #fff;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.btnSubmit:hover {
  background: #d9534f;
  box-shadow: 0px 0px 15px #f44336;
  transform: scale(1.05);
}
</style>
