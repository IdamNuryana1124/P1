
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portofolio | Web Developer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/portofolio.css') }}">
</head>
<body>

    <header class="navbar">
        <a href="#home" class="logo">port<span>folio.</span></a>

        <button class="menu-toggle" id="menuToggle"
                aria-label="Buka menu" aria-expanded="false">
            ☰
        </button>

        <nav id="navMenu">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang</a>
            <a href="#skills">Keahlian</a>
            <a href="#projects">Proyek</a>
            <a href="#contact" class="nav-contact">Kontak ↗</a>
        </nav>
    </header>

    <main>
        <section class="hero section" id="home">
            <div class="hero-content">
                <span class="pill">✦ MAHASISWA & WEB DEVELOPER</span>

                <h1>
                    Halo, saya seorang
                    <span class="gradient-text">Web Developer.</span>
                </h1>

                <p>
                    Saya belajar, bereksperimen, dan membangun website
                    kreatif untuk mengubah ide menjadi pengalaman digital
                    yang menarik dan bermanfaat.
                </p>

                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">
                        Lihat Proyek ↗
                    </a>
                    <a href="#about" class="btn btn-secondary">
                        Tentang Saya
                    </a>
                </div>

                <div class="hero-note">
                    <span class="status-dot"></span>
                    Terbuka untuk belajar dan berkolaborasi
                </div>
            </div>

            <div class="hero-visual">
                <div class="blob blob-one"></div>
                <div class="blob blob-two"></div>

                <div class="code-card">
                    <div class="code-header">
                        <div class="window-dots">
                            <i></i><i></i><i></i>
                        </div>
                        <span>hello-world.php</span>
                    </div>

                    <div class="code-body">
                        <p><span class="purple">&lt;?php</span></p>
                        <p><span class="pink">$nama</span> = <span class="green">"Developer"</span>;</p>
                        <p><span class="pink">$semangat</span> = <span class="orange">100</span>;</p>
                        <br>
                        <p><span class="purple">echo</span> <span class="green">"Hello, dunia!"</span>;</p>
                        <p><span class="comment">// Terus belajar 🚀</span></p>
                    </div>

                    <div class="code-footer">
                        <span>● Laravel</span>
                        <span>PHP · HTML · CSS</span>
                    </div>
                </div>

                <div class="floating-badge badge-top">✦ Creative</div>
                <div class="floating-badge badge-bottom">{"</>" } Coding</div>
            </div>
        </section>

        <section class="about section" id="about">
            <div class="section-heading">
                <span class="eyebrow">KENALI SAYA</span>
                <h2>Ide kreatif, kode yang bermakna.</h2>
                <p>Sedikit cerita tentang perjalanan saya di dunia teknologi.</p>
            </div>

            <div class="about-card">
                <div class="about-icon">👩‍💻</div>
                <div>
                    <h3>Mahasiswa yang suka membangun sesuatu</h3>
                    <p>
                        Saya adalah mahasiswa yang tertarik pada pengembangan
                        website. Melalui tugas kuliah dan proyek pribadi,
                        saya terus mengembangkan kemampuan desain antarmuka,
                        pemrograman web, dan pemecahan masalah.
                    </p>
                    <p>
                        Tujuan saya adalah membuat website yang tidak hanya
                        menarik secara visual, tetapi juga mudah digunakan.
                    </p>
                </div>
            </div>
        </section>

        <section class="skills section" id="skills">
            <div class="section-heading">
                <span class="eyebrow">YANG SAYA PELAJARI</span>
                <h2>Keahlian & teknologi.</h2>
                <p>Teknologi yang saya gunakan untuk membuat proyek web.</p>
            </div>

            <div class="skills-grid">
                <article class="skill-card skill-pink">
                    <span class="skill-icon">🌐</span>
                    <h3>HTML</h3>
                    <p>Menyusun struktur halaman web.</p>
                </article>

                <article class="skill-card skill-yellow">
                    <span class="skill-icon">🎨</span>
                    <h3>CSS</h3>
                    <p>Mendesain tampilan yang menarik dan responsif.</p>
                </article>

                <article class="skill-card skill-blue">
                    <span class="skill-icon">⚡</span>
                    <h3>JavaScript</h3>
                    <p>Membuat halaman lebih interaktif.</p>
                </article>

                <article class="skill-card skill-purple">
                    <span class="skill-icon">🐘</span>
                    <h3>PHP & Laravel</h3>
                    <p>Membangun aplikasi web dengan backend.</p>
                </article>
            </div>
        </section>

        <section class="projects section" id="projects">
            <div class="section-heading">
                <span class="eyebrow">KARYA PILIHAN</span>
                <h2>Proyek yang saya buat.</h2>
                <p>Contoh proyek kuliah dan latihan yang bisa kamu sesuaikan.</p>
            </div>

            <div class="project-grid">
                <article class="project-card">
                    <div class="project-art art-one">
                        <span>🛍️</span>
                        <small>01 / WEB DESIGN</small>
                    </div>
                    <div class="project-info">
                        <span class="project-type">HTML · CSS · JS</span>
                        <h3>Website Toko Online</h3>
                        <p>
                            Konsep toko online dengan tampilan produk,
                            katalog, dan desain yang ramah pengguna.
                        </p>
                        <a href="#contact" class="project-link">
                            Diskusikan proyek ↗
                        </a>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-art art-two">
                        <span>📚</span>
                        <small>02 / WEB APPLICATION</small>
                    </div>
                    <div class="project-info">
                        <span class="project-type">PHP · LARAVEL</span>
                        <h3>Sistem Informasi Mahasiswa</h3>
                        <p>
                            Konsep aplikasi untuk mengelola informasi
                            mahasiswa dan data akademik.
                        </p>
                        <a href="#contact" class="project-link">
                            Diskusikan proyek ↗
                        </a>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-art art-three">
                        <span>📊</span>
                        <small>03 / DASHBOARD</small>
                    </div>
                    <div class="project-info">
                        <span class="project-type">UI · UX · WEB</span>
                        <h3>Dashboard Admin</h3>
                        <p>
                            Rancangan dashboard dengan navigasi,
                            ringkasan informasi, dan kartu statistik.
                        </p>
                        <a href="#contact" class="project-link">
                            Diskusikan proyek ↗
                        </a>
                    </div>
                </article>
            </div>

            <p class="project-disclaimer">
                Catatan: ketiga proyek di atas adalah contoh konsep.
                Ganti dengan proyek yang benar-benar pernah kamu buat.
            </p>
        </section>

        <section class="contact section" id="contact">
            <div class="contact-card">
                <span class="eyebrow">PUNYA IDE MENARIK?</span>
                <h2>Mari buat sesuatu yang <span>keren!</span></h2>
                <p>
                    Saya senang belajar hal baru, berdiskusi, dan
                    berkolaborasi dalam proyek web.
                </p>

                <a class="btn btn-light"
                   href="mailto:emailkamu@example.com">
                    ✉ Hubungi Saya
                </a>

                <div class="social-links">
                    <a href="https://github.com/" target="_blank"
                       rel="noopener noreferrer">GitHub ↗</a>
                    <a href="https://www.linkedin.com/" target="_blank"
                       rel="noopener noreferrer">LinkedIn ↗</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <a href="#home" class="logo">port<span>folio.</span></a>
        <p>© {{ date('Y') }} Portofolio Web Developer. Dibuat dengan Laravel.</p>
    </footer>

    <script src="{{ asset('js/portofolio.js') }}"></script>
</body>
</html>
