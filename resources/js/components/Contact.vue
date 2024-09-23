<template>
  <div class="contact">
    
    <div class="qr-box">
      <h1 class="title">Contactate</h1>
      <div class="qr-section">
        <p><b>Escanea el código QR para contactarme en WhatsApp:</b></p>
        <img :src="qrCodeUrl" alt="Código QR para WhatsApp" />
        <br>
        <br>
        <p><b>Si no te resulto el codigo QR proba de contactarme con los siguientes enlaces a mis redes </b></p>
      </div>
    </div>
    <br>
    <div class="social-icons">
      <!-- <a href="https://www.linkedin.com/in/alvaro-iriarte-7237b8308" target="_blank"><i class="fab fa-linkedin"></i></a>
      <a href="https://github.com/alvaro-iriarte87?tab=repositories" target="_blank"><i class="fab fa-github"></i></a>
      <a href="URL_DE_TU_FACEBOOK" target="_blank"><i class="fab fa-facebook"></i></a> -->
      <a href="URL_DE_TU_INSTAGRAM" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="URL_DE_TU_WHATSAPP" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>
  </div>
</template>

<script>
import QRCode from 'qrcode';

export default {
  name: 'Contact',
  data() {
    return {
      qrCodeUrl: ''
    };
  },
  mounted() {
    this.generateQRCode();
  },
  methods: {
    generateQRCode() {
      const phoneNumber = '3815654330'; // Reemplaza con tu número de teléfono sin el símbolo "+"
      const message = 'Hola, me gustaría contactarte'; // Mensaje opcional
      const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

      QRCode.toDataURL(whatsappUrl, { width: 200 }, (err, url) => {
        if (err) {
          console.error('Error generando el código QR:', err);
        } else {
          this.qrCodeUrl = url;
        }
      });
    }
  }
};
</script>

<style scoped>
.contact {
  text-align: center;
  padding: 1rem;
  margin-left: 0px;
  margin-right: auto;
  width: 100%;
}

.title {
  color: #f7f2f2;
  font-size: 4rem;
  font-weight: 700;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.qr-box {
  max-width: 1000px;
  margin: 0 auto;
  padding: 3rem;
  background: rgba(0, 0, 0, 0.3); /* Fondo oscuro para mejorar el contraste */
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
}

.qr-section {
  text-align: center;
}

.qr-section img {
  width: 200px;
  height: 200px;
  margin-top: 1rem;
  border: 2px solid #e06363;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #e57373;
}

.social-icons {
  display: flex;
  justify-content: center;
  margin-top: 1rem;
  
}

.social-icons a {
  color:#db4646;
  font-size: 2rem;
  margin: 0 1rem;
}

.social-icons a:hover {
  color: #e97878;
}

/* Reglas de medios para dispositivos móviles */
@media (max-width: 768px) {
  .contact {
    text-align: center;
    padding: 2rem;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
  }
  .qr-box {
    max-width: 100%;
  }
}
</style>