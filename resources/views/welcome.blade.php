<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es Krim Homemade Premium</title>
    @vite(['resources/css/styles.css', 'resources/js/script.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body class="body">
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="header-logo">
                <div class="logo-image"></div>
                <span class="logo-text">EsTongTong</span>
            </div>

            <nav class="header-nav" id="mobileMenu">
                <a href="#home" class="nav-link">Beranda</a>
                <a href="#about" class="nav-link">Tentang</a>
                <a href="#flavors" class="nav-link">Varian</a>
                <a href="#location" class="nav-link">Lokasi</a>
                <a href="#packages" class="nav-link">Paket</a>
                <a href="#contact" class="nav-link">Kontak</a>
            </nav>
            <button class="menu-button" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section id="home" class="hero-section">
    <div class="hero-container">
        <div class="hero-text">
        <h1 class="hero-title">EsTongTong</h1>
        <p class="hero-text">
            <span class="hero-traditional">Es dung-dung legendaris kini hadir dalam sentuhan modern.</span><br>
            <span class="hero-digital">Rasa tradisional yang menghangatkan kenangan, kini tersedia dalam kemasan higienis untuk berbagai acara spesial.</span>
        </p>
        <div class="hero-buttons">
            <a href="#packages" class="hero-button primary">
            Pesan Paket Sekarang
            </a>
            <a href="#flavors" class="hero-button secondary">
            Lihat Varian Eceran
            </a>
        </div>
        </div>
        <div class="hero-image"></div>
    </div>
    </section>

    <!-- About Us -->
    <section id="about" class="about-section">
    <div class="about-container">
        <div class="about-content">
        <div class="about-image">
        </div>
        <div class="about-text">
            <img src="image/percikan.png" alt="Ciprat Air" class="splash-decor" />
            <h2 class="about-title">Tentang EsTongTong</h2>
            <p class="about-paragraph">
                EsTongTong adalah website informasi dan pemesanan es dung dung homemade premium yang mudah dan praktis. Sejak 2015, kami konsisten menyajikan es krim tradisional khas Indonesia yang dibuat tanpa pengawet, menggunakan bahan-bahan pilihan, dan diproses dengan penuh perhatian.

            </p>
            <p class="about-paragraph">
                Dengan layanan pengiriman khusus, kami memastikan es krim tiba dalam kondisi terbaik — dingin, segar, dan siap dinikmati oleh tamu Anda. EsTongTong hadir untuk memberikan sentuhan nostalgia dalam setiap gigitan, sekaligus menghadirkan kemudahan dalam merayakan momen istimewa Anda.
            </p>
        </div>
        </div>
    </div>
    </section>

    <!-- Flavor Section -->
    <section id="flavors" class="flavors-section">
    <div class="flavors-container">
        <h2 class="flavors-title">Varian Es Dung Dung Eceran</h2>
        <p class="flavors-description">
        Nikmati berbagai varian es krim premium kami yang tersedia untuk pembelian langsung di outlet kami.
        </p>
        <div class="flavors-promo">
        <span class="promo-text">
            Promo Eceran: Beli 8 cup gratis 1!
        </span>
        </div>

        <div class="flavors-grid">
        <!-- Flavor Card 1 -->
        <div class="flavor-card">
            <div class="flavor-card-image">
            <img src="{{ asset('image/coklat.png') }}" alt="Es krim coklat kental dalam cup dengan topping serutan coklat dan saus coklat mengalir">
            </div>
            <div class="flavor-card-content">
            <h3 class="flavor-card-title">Coklat</h3>
            <p class="flavor-card-description" style="display: none;">Rasa coklat pekat dengan keseimbangan manis yang sempurna.</p>
           <div class="flavor-card-footer" style="display: none;">
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 1.000 / cup</span>
                    <span class="flavor-volume">kecil</span>
                </div>
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 2.000 / cup</span>
                    <span class="flavor-volume">Sedang</span>
                </div>
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 3.000 / cup</span>
                    <span class="flavor-volume">Besar</span>
                </div>
            </div>
            </div>
        </div>

        <!-- Flavor Card 2 -->
        <div class="flavor-card">
            <div class="flavor-card-image">
            <img src="{{ asset('image/mangga.png') }}" alt="Es krim vanilla klasik dengan biji vanilla yang terlihat asli dan taburan kacang almond">
            </div>
            <div class="flavor-card-content">
            <h3 class="flavor-card-title">Mangga</h3>
            <p class="flavor-card-description" style="display: none;">Es krim dengan ekstrak Mangga dengan aroma yang menggoda.</p>
            <div class="flavor-card-footer" style="display: none;">
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 1.000 / cup</span>
                    <span class="flavor-volume">kecil</span>
                </div>
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 2.000 / cup</span>
                    <span class="flavor-volume">Sedang</span>
                </div>
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 3.000 / cup</span>
                    <span class="flavor-volume">Besar</span>
                </div>
            </div>
            </div>
        </div>

        <!-- Flavor Card 3 -->
        <div class="flavor-card">
            <div class="flavor-card-image">
            <img src="{{ asset('image/strawberry.png') }}" alt="Es krim strawberry merah muda">
            </div>
            <div class="flavor-card-content">
            <h3 class="flavor-card-title">Strawberry</h3>
            <p class="flavor-card-description" style="display: none;">Dibuat ekstrak strawberry dengan rasa yang menyegarkan.</p>
            <div class="flavor-card-footer" style="display: none;">
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 1.000 / cup</span>
                    <span class="flavor-volume">kecil</span>
                </div>
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 2.000 / cup</span>
                    <span class="flavor-volume">Sedang</span>
                </div>
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 3.000 / cup</span>
                    <span class="flavor-volume">Besar</span>
                </div>
            </div>
            </div>
        </div>

        <!-- Flavor Card 4 -->
        <div class="flavor-card">
            <div class="flavor-card-image">
            <img src="{{ asset('image/melon.png') }}" alt="Es krim matcha hijau dengan warna khas matcha premium dan taburan matcha powder di atasnya">
            </div>
            
            <div class="flavor-card-content">
            <h3 class="flavor-card-title">Melon</h3>
            
            <p class="flavor-card-description"style="display: none;">Menghadirkan cita rasa melon yang menyegarkan.</p>
            <div class="flavor-card-footer" style="display: none;">
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 1.000 / cup</span>
                    <span class="flavor-volume">kecil</span>
                </div>
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 2.000 / cup</span>
                    <span class="flavor-volume">Sedang</span>
                </div>
                <div class="price-volume-pair">
                    <span class="flavor-price">Rp 3.000 / cup</span>
                    <span class="flavor-volume">Besar</span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>


    <!-- Location Section -->
    <section id="location" class="location-section">
    <div class="location-container">
        <h2 class="location-title">Lokasi dan Jam Operasional</h2>
        <p class="location-description">
        Kunjungi outlet kami untuk membeli es krim eceran atau informasi lebih lanjut tentang produk kami.
        </p>

        <div class="location-content">
        <div class="location-info">
            <h3 class="location-subtitle">Alamat Outlet</h3>
            <div class="location-address">
            <i class="fas fa-map-marker-alt location-icon"></i>
            <a href="https://www.google.com/maps/place/8%C2%B027'21.3%22S+114%C2%B015'32.8%22E/@-8.4559147,114.2565244,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-8.4559147!4d114.2590993?entry=ttu&g_ep=EgoyMDI1MDcwNy4wIKXMDSoASAFQAw%3D%3D" class="contact-link">Jl. Gumuk Mangir, Kaliploso, Banyuwangi</a>
            </div>
            <div class="location-address">
            <i class="fas fa-map-marker-alt location-icon"></i>
            <a href="https://www.google.com/maps/place/8%C2%B027'21.3%22S+114%C2%B015'32.8%22E/@-8.4559147,114.2565244,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-8.4559147!4d114.2590993?entry=ttu&g_ep=EgoyMDI1MDcwNy4wIKXMDSoASAFQAw%3D%3D" class="contact-link">Jl. Diponegoro, Tampo, Banyuwangi</a>
            </div>
            <div class="location-address">
            <i class="fas fa-map-marker-alt location-icon"></i>
            <a href="https://www.google.com/maps/place/8%C2%B027'21.3%22S+114%C2%B015'32.8%22E/@-8.4559147,114.2565244,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-8.4559147!4d114.2590993?entry=ttu&g_ep=EgoyMDI1MDcwNy4wIKXMDSoASAFQAw%3D%3D" class="contact-link">Jl. Grajagan, Tampo, Banyuwangi</a>
            </div>

            <h3 class="location-subtitle">Jam Buka</h3>
            <div class="location-hours">
            <div class="hour-item">
                <span class="hour-day">Senin - Jumat</span>
                <span class="hour-time">10:00 - 20:00</span>
            </div>
            <div class="hour-item">
                <span class="hour-day">Sabtu - Minggu</span>
                <span class="hour-time">09:00 - 21:00</span>
            </div>
            </div>

            <h3 class="location-subtitle">Kontak Outlet</h3>
            <div class="location-contact">
            <i class="fas fa-phone-alt location-icon"></i>
            <a href="tel:+6282139411421" class="contact-link">082139411421</a>
            </div>
        </div>

        <div class="location-map">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1grNpW939ZGoNCfqJekJrkhfmv_bbdV4&ehbc=2E312F" width="570" height="390" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>
    </div>
    </section>


    <!-- Packages Section -->
    <section id="packages" class="packages-section">
    <div class="packages-container">
        <h2 class="packages-title">Paket Es Krim untuk Acara Anda</h2>
        <p class="packages-description">Pilih paket yang sesuai untuk kebutuhan acara spesial Anda.</p>

        <div class="packages-grid">
        <!-- Package 1 -->
        <div class="package-card">
            <div class="package-header package-header-small">
            <h3 class="package-name">Paket 1 Tong</h3>
            <p class="package-subtitle">Untuk acara kecil & keluarga</p>
            </div>
            <div class="package-body">
            <div class="package-price">Rp 500.000</div>
            <ul class="package-features">
                <li><i class="fas fa-check feature-icon"></i> Berat: 1kg</li>
                <li><i class="fas fa-check feature-icon"></i> varian rasa pilihan Anda</li>
                <li><i class="fas fa-check feature-icon"></i> Free 1 scoop es krim</li>
            </ul>
            </div>
        </div>

        <!-- Package 2 -->
        <div class="package-card package-highlight">
            <div class="package-header package-header-medium">
            <h3 class="package-name">Paket 2 Tong</h3>
            <p class="package-subtitle">Untuk pertemuan & acara kantor</p>
            <span class="package-badge">POPULER</span>
            </div>
            <div class="package-body">
            <div class="package-price">Rp 950.000</div>
            <ul class="package-features">
                <li><i class="fas fa-check feature-icon"></i> Berat: 2kg</li>
                <li><i class="fas fa-check feature-icon"></i> varian rasa pilihan Anda</li>
                <li><i class="fas fa-check feature-icon"></i> Free 0,5kg es krim bonus</li>
                <li><i class="fas fa-check feature-icon"></i> Gratis box dan sendok</li>
            </ul>
            </div>
        </div>

        <!-- Package 3 -->
        <div class="package-card">
            <div class="package-header package-header-small">
            <h3 class="package-name">Paket 3 Tong</h3>
            <p class="package-subtitle">Untuk acara besar & pernikahan</p>
            </div>
            <div class="package-body">
            <div class="package-price">Rp 1.450.000</div>
            <ul class="package-features">
                <li><i class="fas fa-check feature-icon"></i> Berat: 3kg</li>
                <li><i class="fas fa-check feature-icon"></i> varian rasa pilihan Anda</li>
                <li><i class="fas fa-check feature-icon"></i> Free 1kg es krim bonus</li>
                <li><i class="fas fa-check feature-icon"></i> Gratis box dan sendok </li>
            </ul>
            </div>
        </div>
        </div>
    <a href="#" class="package-button" id="openFormBtn">Pesan Sekarang</a>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
    <div class="testimonials-container">
        <h2 class="testimonials-title">Testimoni Pelanggan</h2>

        <div class="testimonials-grid">
        <!-- Testimonial 1 -->
        <div class="testimonial-card">
            <div class="testimonial-header">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/98c08e75-b967-4395-8ed0-28846c90260e.png" alt="Foto profil pelanggan wanita muda tersenyum dengan latar belakang acara pesta" class="testimonial-avatar">
            <div class="testimonial-info">
                <h4 class="testimonial-name">Sarah Wijaya</h4>
                <div class="testimonial-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
            </div>
            </div>
            <p class="testimonial-text">"Es krim EsTongTong menjadi favorit tamu di acara ulang tahun anak saya. Mereka sangat antusias dengan rasanya yang enak dan teksturnya yang lembut. Pelayanannya pun sangat profesional."</p>
            <div class="testimonial-event">Ulang Tahun Anak • 5 Tong</div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card">
            <div class="testimonial-header">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/5b2d9002-f4fa-4283-a9af-0ac32bc0e0a3.png" alt="Foto profil pelanggan pria dewasa dengan kemeja kantor formal" class="testimonial-avatar">
            <div class="testimonial-info">
                <h4 class="testimonial-name">Budi Santoso</h4>
                <div class="testimonial-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
            </div>
            </div>
            <p class="testimonial-text">"Kami memesan 2 tong untuk acara kantor dan hasilnya sangat memuaskan. Variasi rasanya sangat banyak dan semua karyawan menyukainya. Yang mengejutkan, es krim tidak meleleh meski acara selama 4 jam."</p>
            <div class="testimonial-event">Corporate Event • 2 Tong</div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card">
            <div class="testimonial-header">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0f0e24c0-9e60-49f3-9ec2-62a0a71e21db.png" alt="Foto profil pasangan pengantin sedang berpose di pesta pernikahan" class="testimonial-avatar">
            <div class="testimonial-info">
                <h4 class="testimonial-name">Anita & Reza</h4>
                <div class="testimonial-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
            </div>
            </div>
            <p class="testimonial-text">"Es krim EsTongTong menjadi menu penutup yang sempurna di resepsi pernikahan kami. Banyak tamu bertanya tentang es krim ini dan memuji kelezatannya. Terima kasih atas pelayanannya yang ramah!"</p>
            <div class="testimonial-event">Pernikahan • 5 Tong</div>
        </div>
        </div>
    </div>
    </section>


    <!-- FAQ Section -->
    <section class="faq-section">
    <div class="faq-container">
        <h2 class="faq-title">Pertanyaan yang Sering Diajukan</h2>

        <div class="faq-list">
        <!-- FAQ Item 1 -->
        <div class="faq-item">
            <button class="faq-question">
            Berapa minimal order untuk pesanan paket?
            <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
            <p>
                Minimal order adalah 1 tong (1kg). Namun untuk beberapa varian khusus mungkin ada ketentuan minimal order yang berbeda. Silakan hubungi kami via WhatsApp untuk info lebih detail.
            </p>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="faq-item">
            <button class="faq-question">
            Bagaimana ketahanan es krim selama pengiriman?
            <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
            <p>
                Kami menggunakan cool box khusus dengan dry ice yang dapat menjaga es krim tetap beku selama maksimal 4 jam. Pastikan penerima sudah siap menerima pesanan segera setelah tiba untuk kualitas terbaik.
            </p>
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="faq-item">
            <button class="faq-question">
            Apakah bisa memilih rasa dalam paket?
            <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
            <p>
                Tentu saja! Anda bisa memilih varian rasa sesuai selera saat memesan. Staf kami akan memberikan rekomendasi kombinasi yang baik jika Anda membutuhkannya.
            </p>
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="faq-item">
            <button class="faq-question">
            Area pengiriman meliputi mana saja?
            <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
            <p>
                Kami melayani pengiriman seluruh area Kaliploso dan sekitarnya. Untuk daerah lain, silakan hubungi kami untuk mengecek ketersediaan layanan.
            </p>
            </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="faq-item">
            <button class="faq-question">
            Apakah bisa pesan mendadak atau hari-H?
            <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
            <p>
                Untuk memastikan ketersediaan bahan dan kualitas terbaik, kami menyarankan pemesanan minimal 7 hari sebelumnya. Namun untuk pesan hari-H, silakan hubungi kami untuk mengecek stok yang tersedia.
            </p>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
    <div class="contact-container">
        <h2 class="contact-title">Hubungi Kami</h2>
        <p class="contact-description">
        Untuk informasi lebih lanjut, pertanyaan, atau pemesanan paket es krim, silakan hubungi kami melalui kontak berikut:
        </p>
        
        <div class="contact-grid">
        <!-- Contact 1 -->
        <div class="contact-card">
            <div class="contact-icon">
            <i class="fas fa-phone-alt"></i>
            </div>
            <h3 class="contact-card-title">Telepon</h3>
            <a href="tel:+622112345678" class="contact-link">(021) 1234-5678</a>
        </div>

        <!-- Contact 2 -->
        <div class="contact-card">
            <div class="contact-icon">
            <i class="fab fa-whatsapp"></i>
            </div>
            <h3 class="contact-card-title">WhatsApp</h3>
            <a href="https://wa.me/6282139411421" class="contact-link">821-3941-1421</a>
        </div>

        <!-- Contact 3 -->
        <div class="contact-card">
            <div class="contact-icon">
            <i class="fas fa-envelope"></i>
            </div>
            <h3 class="contact-card-title">Email</h3>
            <a href="mailto:info@creamygelato.com" class="contact-link">info@creamygelato.com</a>
        </div>

        <!-- Contact 4 -->
        <div class="contact-card">
            <div class="contact-icon">
            <i class="fas fa-map-marker-alt"></i>
            </div>
            <h3 class="contact-card-title">Outlet</h3>
            <p class="contact-text">Jl. Gumuk Mangir, Kaliploso</p>
        </div>
        </div>

        <div class="contact-socials">
        <a href="#" class="social-icon facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon instagram">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="social-icon twitter">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="social-icon youtube">
            <i class="fab fa-youtube"></i>
        </a>
        </div>
    </div>
    </section>

    <!-- Popup Modal -->
    <div id="price-popup" class="popup-overlay">
    <div class="popup-box">
        <span class="popup-close">&times;</span>
        <div id="popup-image"></div>
        <h3 id="popup-title"></h3>
        <p id="popup-description"></p>
        <div id="popup-prices"></div>
    </div>
    </div>


    <!-- Footer -->
    <footer class="site-footer">
    <div class="footer-container">
        <div class="footer-grid">
        <div class="footer-about">
            <h3 class="footer-title">EsTongTong</h3>
            <p class="footer-text">
            Es Dung Dung Homemade Premium dengan Rasa yang Menggugah Selera untuk Setiap Momen Spesial Anda.
            </p>
        </div>

        <div class="footer-menu">
            <h3 class="footer-title-sm">Menu</h3>
            <ul class="footer-links">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#flavors">Varian Eceran</a></li>
            <li><a href="#packages">Paket Es Krim</a></li>
            <li><a href="#location">Lokasi Outlet</a></li>
            </ul>
        </div>

        {{-- <div class="footer-policy">
            <h3 class="footer-title-sm">Kebijakan</h3>
            <ul class="footer-links">
            <li><a href="#">Syarat & Ketentuan</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Kebijakan Pengembalian</a></li>
            </ul>
        </div> --}}

        <div class="footer-policy">
            <h3 class="footer-title-sm">Jam Buka</h3>
            <ul class="footer-links">
            <li><a href="#">Senin - Jumat: 10:00 - 20:00 </a></li>
            <li><a href="#">Sabtu - Minggu: 09:00 - 21:00</a></li>
            {{-- <li><a href="#">Kebijakan Pengembalian</a></li> --}}
            </ul>
        </div>

        <div class="footer-newsletter">
            <h3 class="footer-title-sm">Newsletter</h3>
            <p class="footer-text">Dapatkan promo dan penawaran spesial langsung ke email Anda.</p>
            <div class="footer-newsletter-form">
            <input type="email" placeholder="Email Anda" class="footer-input">
            <button class="footer-button">
                <i class="fas fa-paper-plane"></i>
            </button>
            </div>
        </div>
        </div>
        <div class="footer-bottom">
        <p>© 2025 EsTongTong. All Rights Reserved.</p>
        </div>
    </div>
    </footer>
    
    
    <!-- Popup Form -->
<div id="popupForm" class="popup-overlay">
  <div class="popup-content">
    <h3>Form Pemesanan</h3>
    <form>
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="telepon">No. HP:</label>
      <input type="tel" id="telepon" name="telepon" required>

      <label for="tanggal">Tanggal Pengiriman:</label>
      <input type="date" id="tanggal" name="tanggal" required>

      <label for="paket">Paket:</label>
      <select id="paket" name="paket" required>
        <option value="">-- Pilih Paket --</option>
        <option value="1">Paket 1 Tong</option>
        <option value="2">Paket 2 Tong</option>
        <option value="3">Paket 3 Tong</option>
      </select>

      <label for="catatan">Catatan:</label>
      <textarea id="catatan" name="catatan" rows="3" placeholder="Contoh: kirim jam 3 sore..."></textarea>

      <div class="form-buttons">
        <button type="submit" class="submit-btn">Kirim</button>
        <button type="button" id="closeFormBtn" class="close-btn">Tutup</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>