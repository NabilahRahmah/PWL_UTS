<style>
.about-mornies {
  background-color: #fff;
  display: flex;
  flex-direction: column;
  padding-bottom: 24px;
}

.hero-section {
  position: relative;
  min-height: 1055px;
  width: 100%;
  padding: 8px 0 33px;
}

@media (max-width: 991px) {
  .hero-section {
    max-width: 100%;
  }
}

.hero-background {
  position: absolute;
  inset: 0;
  height: 100%;
  width: 100%;
  object-fit: cover;
  object-position: center;
}

.logo {
  aspect-ratio: 2.4;
  object-fit: contain;
  object-position: center;
  width: 211px;
  align-self: center;
  z-index: 10;
  margin-left: 33px;
  max-width: 100%;
}

.header {
  position: relative;
  display: flex;
  margin-top: -96px;
  width: 100%;
  flex-direction: column;
  justify-content: start;
}

@media (max-width: 991px) {
  .header {
    max-width: 100%;
  }
}

.header-content {
  align-self: center;
  display: flex;
  width: 100%;
  align-items: start;
  gap: 40px 363px;
  justify-content: start;
  padding: 4px 0;
}

@media (max-width: 991px) {
  .header-content {
    max-width: 100%;
  }
}

.logo-placeholder {
  display: flex;
  min-height: 88px;
  width: 211px;
}

.nav-menu {
  background-color: #fff;
  display: flex;
  margin-top: 12px;
  width: 100%;
  align-items: start;
  gap: 40px 60px;
  color: #000;
  justify-content: center;
  flex-wrap: wrap;
  padding: 17px 0;
  font: 400 16px/1 Poppins, sans-serif;
}

@media (max-width: 991px) {
  .nav-menu {
    max-width: 100%;
  }
}

.nav-item-active {
  color: #8dc644;
}

.login-button {
  position: relative;
  color: #000;
  align-self: end;
  z-index: 10;
  margin: -37px 53px 0 0;
  font: 400 16px/1 Poppins, sans-serif;
}

@media (max-width: 991px) {
  .login-button {
    margin-right: 10px;
  }
}

.hero-content {
  position: relative;
  display: flex;
  width: 375px;
  max-width: 100%;
  flex-direction: column;
  font-family: Poppins, sans-serif;
  color: #000;
  text-transform: uppercase;
  margin: 336px 0 0 64px;
}

@media (max-width: 991px) {
  .hero-content {
    margin: 40px 0 0 10px;
  }
}

.hero-card {
  border-radius: 20px;
  background-color: #f5f7ca;
  display: flex;
  margin-left: 12px;
  width: 100%;
  flex-direction: column;
  overflow: hidden;
  align-items: start;
  padding: 24px 73px 24px 29px;
}

@media (max-width: 991px) {
  .hero-card {
    margin-left: 10px;
    padding: 0 20px;
  }
}

.hero-title {
  font-size: 52px;
  font-weight: 600;
  line-height: 51px;
  letter-spacing: 2.08px;
}

@media (max-width: 991px) {
  .hero-title {
    font-size: 40px;
    line-height: 43px;
  }
}

.cta-button {
  border-radius: 20px;
  display: flex;
  margin-top: 32px;
  align-items: center;
  gap: 8px;
  overflow: hidden;
  font-size: 16px;
  font-weight: 500;
  text-align: center;
  letter-spacing: 0.16px;
  justify-content: start;
  padding: 12px 33px;
  border: 1px solid #447900;
}

@media (max-width: 991px) {
  .cta-button {
    padding: 0 20px;
  }
}

.cta-text {
  align-self: stretch;
  gap: 8px;
  margin: auto 0;
}

.section-title {
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 1;
  text-overflow: ellipsis;
  font-size: 36px;
  font-weight: 600;
  line-height: 1;
  letter-spacing: 2.16px;
  align-self: start;
  margin-top: 274px;
}

@media (max-width: 991px) {
  .section-title {
    margin-top: 40px;
  }
}

.about-section {
  align-self: center;
  z-index: 10;
  display: flex;
  margin-top: -127px;
  height: 644px;
  width: 100%;
  max-width: 1376px;
  align-items: start;
  gap: 8px;
  justify-content: start;
  padding: 8px 0 0 8px;
  font: 16px Poppins, sans-serif;
}

@media (max-width: 991px) {
  .about-section {
    max-width: 100%;
  }
}

.about-content {
  border-radius: 10px;
  background-color: #fef9f9;
  display: flex;
  min-width: 240px;
  width: 1368px;
  flex-direction: column;
  padding: 119px 0 42px 26px;
}

@media (max-width: 991px) {
  .about-content {
    max-width: 100%;
    padding-top: 100px;
  }
}

.about-text {
  display: flex;
  margin-right: -31px;
  align-items: center;
  gap: 40px 51px;
  justify-content: start;
}

@media (max-width: 991px) {
  .about-text {
    max-width: 100%;
  }
}

.about-description {
  align-self: stretch;
  display: flex;
  min-width: 240px;
  width: 789px;
  flex-direction: column;
  justify-content: start;
  margin: auto 0;
}

.about-header {
  display: flex;
  height: 141px;
  width: 100%;
  flex-direction: column;
  justify-content: start;
}

@media (max-width: 991px) {
  .about-header {
    max-width: 100%;
  }
}

.about-title {
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 1;
  color: #000;
  text-overflow: ellipsis;
  font-weight: 700;
  line-height: 2;
}

@media (max-width: 991px) {
  .about-title {
    max-width: 100%;
  }
}

.about-paragraph {
  color: #000;
  font-weight: 400;
  line-height: 20px;
  margin-top: 32px;
}

@media (max-width: 991px) {
  .about-paragraph {
    max-width: 100%;
  }
}

.team-description {
  margin-top: 32px;
  width: 100%;
  color: #000;
  font-weight: 400;
  line-height: 20px;
}

@media (max-width: 991px) {
  .team-description {
    max-width: 100%;
  }
}

.order-button {
  border-radius: 20px;
  align-self: start;
  display: flex;
  align-items: center;
  gap: 8px;
  overflow: hidden;
  color: #000;
  font-weight: 500;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 0.16px;
  justify-content: start;
  margin: 78px 0 0 12px;
  padding: 12px 33px;
  border: 1px solid #447900;
}

@media (max-width: 991px) {
  .order-button {
    margin: 40px 0 0 10px;
    padding: 0 20px;
  }
}

.about-image {
  aspect-ratio: 0.94;
  object-fit: contain;
  object-position: center;
  width: 460px;
  align-self: end;
  z-index: 10;
  max-width: 100%;
  margin: -550px 92px 0 0;
}

@media (max-width: 991px) {
  .about-image {
    margin: -200px 10px 0 0;
  }
}

.awards-section {
  display: flex;
  margin-top: 136px;
  width: 100%;
  flex-direction: column;
  padding: 0 11px;
}

@media (max-width: 991px) {
  .awards-section {
    max-width: 100%;
    margin-top: 40px;
  }
}

.awards-title {
  color: #000;
  text-overflow: ellipsis;
  letter-spacing: 2.16px;
  text-transform: uppercase;
  align-self: start;
  margin-left: 29px;
  font: 600 36px/1 Poppins, sans-serif;
}

@media (max-width: 991px) {
  .awards-title {
    margin-left: 10px;
  }
}

.award-image-wrapper {
  position: relative;
  width: 100%;
}

.award-image {
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
}

.award-text-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: rgba(0, 0, 0, 0.5); /* Background transparan di atas gambar */
  color: white; /* Warna teks agar kontras dengan gambar */
  text-align: center;
  padding: 10px;
  opacity: 0; /* Untuk efek hover */
  transition: opacity 0.3s ease; /* Animasi transisi */
}

.award-image-wrapper:hover .award-text-overlay {
  opacity: 1; /* Teks muncul saat di-hover */
}

.award-title {
  font-size: 1.5rem;
  margin: 0;
}

.award-description {
  font-size: 1rem;
  margin-top: 5px;
}


.awards-content {
  align-self: center;
  margin-top: 47px;
  width: 100%;
  max-width: 1345px;
}

@media (max-width: 991px) {
  .awards-content {
    max-width: 100%;
    margin-top: 40px;
  }
}

.awards-grid {
  gap: 20px;
  display: flex;
}

@media (max-width: 991px) {
  .awards-grid {
    flex-direction: column;
    align-items: stretch;
    gap: 0px;
  }
}

.award-column {
  display: flex;
  flex-direction: column;
  line-height: normal;
  width: 33%;
  margin-left: 0px;
}

@media (max-width: 991px) {
  .award-column {
    width: 100%;
  }
}

.award-item {
  flex-grow: 1;
  color: #fffafa;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 1.4px;
  padding: 156px 0;
  font: 400 35px/51px Protest Strike, -apple-system, Roboto, Helvetica, sans-serif;
}

@media (max-width: 991px) {
  .award-item {
    margin-top: 40px;
    padding: 100px 0;
  }
}

.award-card {
  display: flex;
  flex-direction: column;
  position: relative;
  min-height: 413px;
  width: 100%;
  text-align: center;
  padding: 207px 29px 27px;
}

@media (max-width: 991px) {
  .award-card {
    max-width: 100%;
    margin-top: 40px;
    padding: 100px 20px 0;
  }
}

.footer {
  background-color: #f5f7ca;
  display: flex;
  margin-top: 154px;
  width: 100%;
  flex-direction: column;
  overflow: hidden;
  padding: 83px 62px 16px;
}

@media (max-width: 991px) {
  .footer {
    max-width: 100%;
    margin-top: 40px;
    padding: 0 20px;
  }
}

.footer-logo {
  color: #101010;
  text-align: center;
  align-self: start;
  margin-left: 10px;
  font: 400 40px Praise, sans-serif;
}

.footer-divider {
  margin-top: 47px;
  height: 5px;
  border: 3px solid #9d9f7c;
}

@media (max-width: 991px) {
  .footer-divider {
    max-width: 100%;
    margin-top: 40px;
  }
}

.footer-content {
  display: flex;
  margin-top: 74px;
  width: 100%;
  max-width: 1216px;
  align-items: start;
  gap: 40px 100px;
}

@media (max-width: 991px) {
  .footer-content {
    max-width: 100%;
    margin-top: 40px;
  }
}

.footer-column {
  display: flex;
  flex-direction: column;
  color: #0e0d0d;
  text-align: center;
  flex: 1;
  font: 400 24px Poppins, sans-serif;
}

.footer-heading {
  color: #101010;
  font-size: 36px;
  font-weight: 600;
  align-self: start;
}

.footer-link {
  margin-top: 35px;
}

@media (max-width: 991px) {
  .footer-link {
    margin-right: 2px;
  }
}

.footer-link-secondary {
  margin-top: 40px;
}

.footer-company {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: start;
  color: #0e0d0d;
  text-align: center;
  flex: 1;
  font: 400 24px Poppins, sans-serif;
}

.footer-social {
  display: flex;
  flex-direction: column;
  flex: 1;
}

.social-heading {
  color: #101010;
  text-align: center;
  font: 600 36px Poppins, sans-serif;
}

@media (max-width: 991px) {
  .social-heading {
    margin-right: 4px;
  }
}

.social-icons {
  display: flex;
  margin-top: 25px;
  align-items: start;
  gap: 32px;
  justify-content: start;
  flex-wrap: wrap;
}

.social-icon {
  aspect-ratio: 1;
  object-fit: contain;
  object-position: center;
  width: 60px;
  fill: #222305;
}

.copyright {
  align-self: center;
  display: flex;
  margin-top: 113px;
  align-items: center;
  gap: 4px;
  color: #000;
  text-align: center;
  justify-content: start;
  font: 275 13px/24px Poppins, sans-serif;
}

@media (max-width: 991px) {
  .copyright {
    margin-top: 40px;
  }
}

.copyright-icon {
  aspect-ratio: 1;
  object-fit: contain;
  object-position: center;
  width: 14px;
  align-self: stretch;
  margin: auto 0;
}

.copyright-text {
  align-self: stretch;
  margin: auto 0;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
</style>

<section class="about-mornies">
  <div class="hero-section">
    <img src="{{ asset('adminlte/dist/img/bg.jpg') }}" alt="Hero background" class="hero-background" />
    <img src="{{ asset('adminlte/dist/img/mlogo.png') }}" alt="Mornies logo" class="logo" />
    <header class="header">
      <div class="header-content">
        <div class="logo-placeholder"></div>
        <nav class="nav-menu">
          <a href="/" class="nav-item-active">Home</a>
          <a href="#">Prestasi</a>
          <a href="#">Product</a>
          <a href="#">About us</a>
          <a href="{{url('login')}}" class="login-button">Log In</a>
        </nav>
      </div>
      
    </header>
    <div class="hero-content">
      <div class="hero-card">
        <h1 class="hero-title">Tentang mornies</h1>
        <a href="#" class="cta-button">
          <span class="cta-text">cek penghargaan</span>
        </a>
      </div>
    </div>
  </div>
  <section class="about-section">
    <div class="about-content">
      <div class="about-text">
        <div class="about-description">
        <h1 class="about-description hero-title">TENTANG KAMI</h1>
          <div class="about-header">
            <p class="about-paragraph">
            <h3 class="about-title">Program Mahasiswa Wirausaha Politeknik Negeri Malang</h3>
              Program ini merupakan program pendanaan yang dinaungi oleh ETU POLINEMA untuk menumbuhkembangkan nilai-nilai kewirausahaan bagi mahasiswa untuk menghasilkan lulusan yang memiliki jiwa kewirausahaan, dan meningkatkan jumlah mahasiswa berwirausaha.
            </p>
          </div>
          <p class="team-description">
            Kami dari tim Mornies bergerak di bidang wirausaha kuliner dan berkesempatan mendapatkan pendanaan PMW pada tahun 2023. Mornies ini industri kreative kuliner yang mengusulkan ide brownies dari daun kelor untuk meminimalisir angka stunting di Malang.
            <br /><br />
            <strong>Tim Kami diantaranya:</strong>
          </p>
          <ol>
            <li>Muhammad Choirul Rosyid Irfani</li>
            <li>Aulia Nadhifatul Karimah</li>
            <li>Nabilah Rahmah Diyanah</li>
            <li>Hilda Tri Rachmawati</li>
          </ol>
        </div>
      </div>
      <a href="https://wa.me/message/HISVUOKHMWAHB1" class="order-button">
        <span class="cta-text">Order Disini</span>
      </a>
    </div>
  </section>
  <img src="{{ asset('adminlte/dist/img/aboutus.jpg') }}" alt="About illustration" class="about-image" />
  <section class="awards-section">
    <h2 class="awards-title">PENGHARGAAN</h2>
    <div class="awards-content">
      <div class="awards-grid">
        <div class="award-card">
          <div class="award-image-wrapper">
            <img src="{{ asset('adminlte/dist/img/pres1.jpg') }}" alt="Award image" class="award-image" />
            <div class="award-text-overlay">
              <h3 class="award-title">JUARA 2 POSCAST INSPIRATIF</h3>
              <p class="award-description">
                Meraih sebagai Finalis tingkat Nasional di ajang perlombaan BPC ECOLIFE oleh UNIVERSITAS JENDERAL ACHMAD YANI tahun 2023
              </p>
            </div>
          </div>
        </div>
        <div class="award-card">
          <div class="award-image-wrapper">
            <img src="{{ asset('adminlte/dist/img/pres2.jpg') }}" alt="Award image" class="award-image" />
            <div class="award-text-overlay">
              <h3 class="award-title">FINALIS BPC ECOLIFE</h3>
              <p class="award-description">
                Meraih sebagai Finalis tingkat Nasional di ajang perlombaan BPC ECOLIFE oleh UNIVERSITAS JENDERAL ACHMAD YANI tahun 2023
              </p>
            </div>
          </div>
        </div>
        <div class="award-card">
          <div class="award-image-wrapper">
            <img src="{{ asset('adminlte/dist/img/pres3.png') }}" alt="Award image" class="award-image" />
            <div class="award-text-overlay">
              <h3 class="award-title">FINALIS ESSAY IDEA</h3>
              <p class="award-description">
                Finalis ESSAY tingkat Nasional di ajang perlombaan IDEA FEST oleh UNIVERSITAS GUNUNG RINJANI tahun 2024
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  <footer class="footer">
    <h2 class="footer-logo">Mornies</h2>
    <hr class="footer-divider" />
    <div class="footer-content">
      <div class="footer-column">
        <h3 class="footer-heading">Products</h3>
        <a href="#" class="footer-link">Fudgy Brownies</a>
        <a href="#" class="footer-link-secondary">Brownies Crispy</a>
      </div>
      <div class="footer-company">
        <h3 class="footer-heading">Company</h3>
        <a href="/" class="footer-link">About us</a>
        <a href="https://www.instagram.com/mornies.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="footer-link">Contact Us</a>
        <a href="https://wa.me/message/HISVUOKHMWAHB1" class="footer-link">Mulai Order</a>
        <a href="#" class="footer-link">Penghargaan</a>
      </div>
      <div class="footer-social">
        <h3 class="social-heading">Follow us</h3>
        <div class="social-icons">
          <a href="#" aria-label="Facebook">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e2fca5fad4b5019477ae283cc2efcf33dd2ba26ac094feef88d0db66a5848e10?placeholderIfAbsent=true&apiKey=9c72b5d0876543b99407f94bd480e160" alt="Facebook icon" class="social-icon" />
          </a>
          <a href="#" aria-label="Twitter">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/bb829ce9cf67a0f6d224ddeec7a50b1d3b940031b15452889e375ca6e6e697bb?placeholderIfAbsent=true&apiKey=9c72b5d0876543b99407f94bd480e160" alt="Twitter icon" class="social-icon" />
          </a>
          <a href="//www.instagram.com/mornies.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" aria-label="Instagram">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/eb67e9aca8f9f43cd663e216b8a22573138f00fb5bc939e4468601d0ad8b4c2a?placeholderIfAbsent=true&apiKey=9c72b5d0876543b99407f94bd480e160" alt="Instagram icon" class="social-icon" />
          </a>
        </div>
      </div>
    </div>
    <div class="copyright">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d8b7324343d95025ffbd06d39269c641940f1c12c4331a3c4470ad6d7825f5f2?placeholderIfAbsent=true&apiKey=9c72b5d0876543b99407f94bd480e160" alt="Copyright icon" class="copyright-icon" />
      <span class="copyright-text">2024 mornies</span>
    </div>
  </footer>
</section>