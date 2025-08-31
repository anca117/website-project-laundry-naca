<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dipo Laundry - Laundry Cepat dan Terpercaya di Kota Anda</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <i class="fas fa-washing-machine fa-2x me-3" style="color: var(--primary-color);"></i>
                <span class="brand-text">Dipo Laundry</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a href="login.php" style="text-decoration: none;">
                            <div aria-label="User Login Button" tabindex="0" role="button" class="user-profile">
                                <div class="user-profile-inner">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g data-name="Layer 2" id="Layer_2">
                                            <path d="m15.626 11.769a6 6 0 1 0 -7.252 0 9.008 9.008 0 0 0 -5.374 8.231 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 9.008 9.008 0 0 0 -5.374-8.231zm-7.626-4.769a4 4 0 1 1 4 4 4 4 0 0 1 -4-4zm10 14h-12a1 1 0 0 1 -1-1 7 7 0 0 1 14 0 1 1 0 0 1 -1 1z"></path>
                                        </g>
                                    </svg>
                                    <p>Masuk</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="register.php" style="text-decoration: none;">
                             <div aria-label="User Register Button" tabindex="0" role="button" class="user-profile register-btn">
                                <div class="user-profile-inner">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                         <g data-name="Layer 2" id="Layer_2_Register">
                                            <path d="m15.626 11.769a6 6 0 1 0 -7.252 0 9.008 9.008 0 0 0 -5.374 8.231 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 9.008 9.008 0 0 0 -5.374-8.231zm-7.626-4.769a4 4 0 1 1 4 4 4 4 0 0 1 -4-4zm10 14h-12a1 1 0 0 1 -1-1 7 7 0 0 1 14 0 1 1 0 0 1 -1 1z"></path>
                                        </g>
                                    </svg>
                                    <p>Daftar</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="hero-section">
         <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-text">
                    <h1 class="mb-4">Laundry Express <br>Andalan <span class="highlight">Keluarga Anda.</span></h1>
                    <p class="mb-5">Bersih, cepat, dan terpercaya. Kami siap mengambil dan mengantar cucian Anda dengan layanan terbaik.</p>
                    
                    <div class="info-pills d-flex flex-column flex-md-row gap-3">
                        <div class="pill">
                            <i class="fas fa-truck fa-lg"></i>
                            <span>Pickup Cepat</span>
                        </div>
                        <div class="pill">
                            <i class="fas fa-tags fa-lg"></i>
                            <span>Harga Terjangkau</span>
                        </div>
                         <div class="pill">
                            <i class="fas fa-bolt fa-lg"></i>
                            <span>Express Selesai</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-block hero-illustration">
                    <div class="bubbles-container">
                    <div class="bubble"><div class="dot"></div></div>
                    <div class="bubble"><div class="dot"></div></div>
                    <div class="bubble"><div class="dot"></div></div>
                    <div class="bubble"><div class="dot"></div></div>
                    <div class="bubble"><div class="dot"></div></div>
                    <div class="bubble"><div class="dot"></div></div>
                    <div class="bubble"><div class="dot"></div></div>
                    <div class="bubble"><div class="dot"></div></div>
                    <div class="bubble"><div class="dot"></div></div>
                    <div class="bubble"><div class="dot"></div></div>
                    </div>

                    <div class="loader"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section id="tentang-kami">
        <div class="container">
            <div class="section-title">
                <h2>Tentang <span class="font-pacifico">Dipo Laundry</span></h2>
            </div>

            <div class="about-content">
                <div class="about-image">
                    <img src="assets/img/toko_dipo_aundry.png" alt="Interior Usaha Dipo Laundry">
                </div>
                <div class="about-text">
                    <h3>Pakaian Bersih, Hidup Lebih Mudah.</h3>
                    <p>
                        Kami adalah penyedia jasa laundry profesional yang berdedikasi untuk memberikan hasil cucian terbaik bagi setiap pelanggan. Dengan pengalaman bertahun-tahun, kami memahami betapa berharganya waktu dan pakaian Anda.
                    </p>
                    <p>
                        Kami menggunakan mesin cuci dan pengering modern serta deterjen berkualitas tinggi yang ramah lingkungan untuk memastikan pakaian Anda tidak hanya bersih, tetapi juga awet dan wangi. Kepuasan Anda adalah prioritas utama kami.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="section-title">
                <p class="sub-heading">KEUNGGULAN KAMI</p>
                <h2>Mengapa Harus <span class="font-pacifico">Dipo Laundry</span>?</h2>
            </div>
            <div class="row g-4 justify-content-center">
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <span class="badge-best">Best</span>
                        <div class="feature-icon icon-terpercaya">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <h4>Merk Terpercaya</h4>
                        <p>Sudah dipercaya oleh ribuan pelanggan di kota Bandung dan Jakarta, kami bangga menjaga kualitas laundry terbaik.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon icon-profesional">
                            <i class="fas fa-users-gear"></i>
                        </div>
                        <h4>Tim Profesional</h4>
                        <p>Layanan terbaik hanya dapat diberikan oleh tim yang profesional. Tim kami terdiri dari tenaga ahli yang terlatih.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon icon-express">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4>Layanan Express 3 Jam</h4>
                        <p>Bagi Anda yang membutuhkan layanan cepat dan efisien, kami hadir dengan layanan express yang menjamin cucian selesai.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon icon-pembayaran">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h4>Pembayaran Mudah</h4>
                        <p>Nikmati kemudahan pembayaran dengan berbagai metode, mulai dari transfer, member, hingga QRIS dan dompet elektronik.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="container">
            <div class="section-header">
                <h2>Apa Kata Pelanggan Setia Kami?</h2>
                <p>Lihat apa kata mereka tentang layanan kami yang luar biasa.</p>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="slide-content-grid">
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p class="testimonial-text">"Pakaian jadi wangi banget dan tahan lama! Prosesnya juga cepat, cocok buat saya yang sibuk. Dipo Laundry benar-benar penyelamat."</p>
                                <div class="customer-profile">
                                    <img src="https://i.pravatar.cc/100?img=11" alt="Foto Rina Amelia">
                                    <div class="customer-details">
                                        <h4>Rina Amelia</h4>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p class="testimonial-text">"Hasil setrikanya rapi banget, kemeja kerja jadi licin sempurna. Harganya juga ramah di kantong. Sangat direkomendasikan!"</p>
                                <div class="customer-profile">
                                    <img src="https://i.pravatar.cc/100?img=32" alt="Foto Bima Nugraha">
                                    <div class="customer-details">
                                        <h4>Bima Nugraha</h4>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p class="testimonial-text">"Pelayanannya super ramah dan informatif. Cucian sepatu saya jadi bersih seperti baru lagi. Nggak nyesel pilih Dipo Laundry."</p>
                                <div class="customer-profile">
                                    <img src="https://i.pravatar.cc/100?img=31" alt="Foto Santi Dewi">
                                    <div class="customer-details">
                                        <h4>Santi Dewi</h4>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-content-grid">
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p class="testimonial-text">"Laundry kiloan di sini terbaik! Pakaian dipisah sesuai warna, jadi nggak takut kelunturan. Hasilnya bersih dan wangi. Mantap!"</p>
                                <div class="customer-profile">
                                    <img src="https://i.pravatar.cc/100?img=14" alt="Foto Agus Setiawan">
                                    <div class="customer-details">
                                        <h4>Agus Setiawan</h4>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p class="testimonial-text">"Bed cover dan selimut saya jadi bersih total dan wanginya enak banget. Tidur jadi lebih nyenyak. Terima kasih Dipo Laundry!"</p>
                                <div class="customer-profile">
                                    <img src="https://i.pravatar.cc/100?img=40" alt="Foto Fitriani">
                                    <div class="customer-details">
                                        <h4>Fitriani</h4>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p class="testimonial-text">"Ada layanan antar-jemputnya, sangat membantu di tengah kesibukan. Komunikasi lancar dan pengerjaan selalu tepat waktu."</p>
                                <div class="customer-profile">
                                    <img src="https://i.pravatar.cc/100?img=52" alt="Foto Doni Firmansyah">
                                    <div class="customer-details">
                                        <h4>Doni Firmansyah</h4>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-content-grid">
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p class="testimonial-text">"Saya suka banget sama detailnya, lipatan bajunya rapi dan dikemas dengan baik. Terlihat sangat profesional dan higienis."</p>
                                <div class="customer-profile">
                                    <img src="https://i.pravatar.cc/100?img=47" alt="Foto Maya Sari">
                                    <div class="customer-details">
                                        <h4>Maya Sari</h4>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p class="testimonial-text">"Noda membandel di jaket saya hilang bersih! Kaget banget bisa sebersih ini. Dipo Laundry memang ahlinya mengatasi noda."</p>
                                <div class="customer-profile">
                                    <img src="https://i.pravatar.cc/100?img=60" alt="Foto Hendra Wijaya">
                                    <div class="customer-details">
                                        <h4>Hendra Wijaya</h4>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <p class="testimonial-text">"Sudah jadi langganan tetap. Kualitasnya konsisten, tidak pernah mengecewakan. Selalu jadi pilihan utama untuk urusan cuci-mencuci."</p>
                                <div class="customer-profile">
                                    <img src="https://i.pravatar.cc/100?img=36" alt="Foto Lia Kartika">
                                    <div class="customer-details">
                                        <h4>Lia Kartika</h4>
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-column about">
                    <h2 class="footer-logo">Dipo Laundry</h2>
                    <p class="footer-about-text">
                        adalah layanan laundry kiloan dan satuan. Kami adalah tim profesional yang selalu mengutamakan kualitas cucian & pelayanan dengan prinsip bersih, rapi, wangi, higienis & tepat waktu. 
                    </p>
                    <div class="social-icons-footer">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-column links">
                    <h3>Lokasi Kami</h3>
                    <div class="location-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Jl. Karya Setuju No. 123,<br>Medan Barat, Kota Medan,<br>Sumatera Utara 20235</p>
                    </div>
                </div>

                <div class="footer-column contact">
                    <h3>Kontak</h3>
                    <ul class="contact-list">
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:0821-64111-1866">0821-6411-1866</a>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <a href="https://wa.me/6282164111866">0821-6411-1866</a>
                        </li>
                         <li>
                            <i class="fas fa-envelope"></i>
                            <a href="info@dipolaundry.id">info@dipolaundry.id</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                 <p class="mb-0">
                    &copy; <?php echo date("Y"); ?> <span class="font-pacifico">Dipo Laundry</span>. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>
    <button class="chat-bubble-btn" id="chat-bubble">
        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" fill-rule="evenodd"/>
        </svg>
    </button>
    
    <div class="chat-popup" id="chat-popup">
        <div class="chat-header">
            <button type="button" class="close-btn" id="close-chat">&times;</button>
            <div class="profile-pic">
                <img src="assets/img/1.png" alt="Foto Admin Dipo Laundry">
            </div>
            <div class="agent-info">
                <span class="title">Admin Dipo Laundry</span>
                <span class="status">online</span>
            </div>
        </div>
        <div class="chat-body">
            <div class="chat-message-admin">
            <div class="sender">Admin Dipo Laundry</div>
            <div class="message-content">
                <span id="greeting-message"></span>
                <span class="message-status">
                <span class="checkmarks">✔✔</span>
                <span class="time" id="message-time"></span>
                </span>
            </div>
            </div>
        </div>
        <div class="chat-form">
            <textarea id="user-message" placeholder="Type your message here..."></textarea>
            <button class="send-button" id="send-chat-btn">Mulai chat</button>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="assets/js/index.js"></script>
</body>
</html>