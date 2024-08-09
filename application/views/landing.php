<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/landing.css" />
    <title>MedisCare</title>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="main-container">
            <div class="nav">
                <div class="label">
                    <h1>MedisCare</h1>
                </div>

                <nav>
                    <ul id="navbar">
                        <li><a href="#home" class="nav-link">Home</a></li>
                        <li><a href="#services" class="nav-link">Services</a></li>
                        <li><a href="#about-us" class="nav-link">About Us</a></li>
						<li><a href="<?= base_url('auth'); ?>" class="nav-link login-btn">Login</a></li>
                    </ul>
                </nav>

                <div class="burger">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>
            </div>

            <section id="hero" class="hero-section">
                <div class="hero-left">
                    <img src="assets/svg/herosection.svg" alt="hero" />
                </div>
                <div class="hero-right">
                    <h1 class="hero-name">Kami peduli <span><br />tentang kesehatan Anda</span></h1>
                    <p>
                        Kesehatan yang baik adalah keadaan kesejahteraan mental, fisik, dan sosial serta tidak hanya berarti tidak adanya penyakit
                    </p>
                </div>
            </section>
        </div>
    </header>
    <!-- End Header -->
    
    <!-- Services -->
    <section id="services" class="service-section">
        <div class="main-container">
            <h2>Layanan Medis Kami</h2>
            <p>Kami berdedikasi untuk memberikan layanan medis terbaik kepada Anda</p>
            <div class="grid-6">
                <div class="service" style="grid-area: a;">
                    <div class="service-icon">
                        <img src="assets/svg/carbon-report.svg" alt="Manajemen data pasien">
                    </div>
                    <h4>Manajemen data pasien</h4>
                </div>
                <div class="service" style="grid-area: b;">
                    <div class="service-icon">
                        <img src="assets/svg/drugs.svg" alt="Data obat">
                    </div>
                    <h4>Manajemen data obat</h4>
                </div>
                <div class="service" style="grid-area: c;">
                    <div class="service-icon">
                        <img src="assets/svg/medical-record.svg" alt="Rekam medis">
                    </div>
                    <h4>Rekam medis</h4>
                </div>
                <div class="service" style="grid-area: d;">
                    <div class="service-icon">
                        <img src="assets/svg/doctor.svg" alt="Laporan dokter">
                    </div>
                    <h4>Laporan dokter</h4>
                </div>
                <div class="service" style="grid-area: e;">
                    <div class="service-icon">
                        <img src="assets/svg/table-report.svg" alt="Laporan kunjungan">
                    </div>
                    <h4>Laporan kunjungan</h4>
                </div>
                <div class="service" style="grid-area: f;">
                    <div class="service-icon">
                        <img src="assets/svg/fluent-patient.svg" alt="Laporan pasien">
                    </div>
                    <h4>Laporan pasien</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- About Us -->
    <section id="about-us" class="about-us">
        <div class="main-container">
            <div class="container">
                <div class="about-content">
                    <h2 class="title">Tentang kami</h2>
                    <p class="description">Selamat datang di Klinik Mediscare! <br> <br> Kami adalah klinik kesehatan yang berdedikasi untuk memberikan pelayanan medis berkualitas tinggi kepada seluruh masyarakat. Klinik Mediscare berdiri dengan tujuan untuk menjadi mitra kesehatan yang dapat diandalkan, memberikan pelayanan yang ramah, profesional, dan penuh empati kepada setiap pasien.</p>
                    <h2 class="title">Tim kami</h2>
                    <p class="description">Tim medis kami terdiri dari dokter-dokter berpengalaman dan tenaga medis profesional yang siap memberikan perawatan terbaik. Setiap anggota tim kami berkomitmen untuk terus meningkatkan kompetensi dan memberikan pelayanan yang berorientasi pada pasien.</p>
                </div>
                <div class="image-container">
                    <img src="assets/svg/aboutus.svg" alt="Mediscare Image">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <footer class="mediscare">
		<div class="main-container footer-wrapper">
            <div class="footer-content">
			    <h2 class="mediscare-title">Mediscare</h2>
			    <p class="mediscare-description">Kesehatan Anda, Prioritas Kami</p>
			    <p class="mediscare-thank">Terima kasih telah mempercayakan kesehatan Anda kepada Klinik Mediscare. <br> Kami berharap dapat terus menjadi mitra kesehatan yang dapat Anda andalkan.</p>
            </div>
			<div class="footer-social">
                <p>Follow Us</p>
                <div class="social-icons">
                    <a href="#"><img src="assets/svg/fb.svg" alt="Facebook"></a>
                    <a href="#"><img src="assets/svg/twitter.svg" alt="Twitter"></a>
                    <a href="#"><img src="assets/svg/ig.svg" alt="Instagram"></a>
                </div>
            </div>
		</div>
	</footer>
    <script src="assets/js/landing.js"></script>
</body>
</html>
