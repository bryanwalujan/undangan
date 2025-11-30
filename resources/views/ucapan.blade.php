<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan HUT & Baptisan - Deana & Keren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Playfair+Display:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #FF9EAA;
            --secondary: #8EC5FC;
            --accent: #FFD166;
            --light: #FFF9F2;
            --dark: #4A4A4A;
        }
        
        body {
            background: linear-gradient(135deg, rgba(142,197,252,0.8) 0%, rgba(255,158,170,0.8) 100%), url('https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&auto=format&fit=crop&q=80') fixed center;
            background-size: cover;
            color: var(--dark);
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
        }
        
        .header-section {
            padding: 80px 0 40px;
            position: relative;
            overflow: hidden;
        }
        
        .header-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100" opacity="0.1"><path d="M30,30 Q50,10 70,30 T90,50 T70,70 T50,90 T30,70 T10,50 T30,30" fill="none" stroke="%23FF9EAA" stroke-width="2"/></svg>') repeat;
            z-index: -1;
        }
        
        .card { 
            background: var(--light); 
            color: var(--dark); 
            border-radius: 20px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.15); 
            border: none;
            overflow: hidden;
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border-radius: 20px 20px 0 0 !important;
            padding: 20px;
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .btn-primary { 
            background: linear-gradient(135deg, var(--primary), var(--secondary)); 
            color: white; 
            border: none; 
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .btn-primary:hover { 
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
        }
        
        .text-accent { color: var(--accent); }
        .text-primary { color: var(--primary); }
        .text-secondary { color: var(--secondary); }
        
        .countdown { 
            font-size: 2.8rem; 
            font-weight: bold; 
            color: var(--primary);
        }
        
        .countdown-item {
            background: white;
            border-radius: 15px;
            padding: 15px 10px;
            margin: 0 5px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            min-width: 100px;
        }
        
        .ucapan-item { 
            background: rgba(255,255,255,0.9); 
            border-radius: 15px; 
            padding: 18px; 
            margin-bottom: 15px; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            border-left: 5px solid var(--primary);
            transition: all 0.3s ease;
        }
        
        .ucapan-item:hover {
            transform: translateX(5px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }
        
        h1.display-2 { 
            font-family: 'Dancing Script', cursive; 
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            margin-bottom: 20px;
        }
        
        .lead {
            color: white;
            text-shadow: 0 2px 5px rgba(0,0,0,0.3);
            font-size: 1.5rem;
        }
        
        .floating-icon {
            position: absolute;
            font-size: 2rem;
            color: var(--accent);
            animation: float 3s ease-in-out infinite;
            z-index: 1;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        .bounce { animation: bounce 2s infinite; }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-10px);}
            60% {transform: translateY(-5px);}
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 30px;
            font-family: 'Dancing Script', cursive;
            color: var(--primary);
        }
        
        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 3px;
        }
        
        .event-card {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .event-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
        }
        
        .decoration {
            position: absolute;
            width: 100px;
            height: 100px;
            opacity: 0.1;
            z-index: 0;
        }
        
        .decoration-1 {
            top: 10%;
            left: 5%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="%23FF9EAA"/></svg>') no-repeat;
        }
        
        .decoration-2 {
            bottom: 10%;
            right: 5%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><polygon points="50,10 90,90 10,90" fill="%238EC5FC"/></svg>') no-repeat;
        }
        
        .photo-frame {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            margin: 20px 0;
            border: 8px solid white;
        }
        
        .photo-frame img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        @media (max-width: 576px) { 
            .countdown { font-size: 2rem; } 
            .countdown-item {
                min-width: 70px;
                padding: 10px 5px;
                margin: 0 2px;
            }
            .header-section {
                padding: 60px 0 30px;
            }
        }
        
        .confetti {
            position: fixed;
            width: 10px;
            height: 10px;
            background-color: var(--accent);
            opacity: 0.7;
            animation: confetti-fall 5s linear infinite;
            z-index: 1000;
        }
        
        @keyframes confetti-fall {
            0% { transform: translateY(-100px) rotate(0deg); }
            100% { transform: translateY(100vh) rotate(360deg); }
        }
        
        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(255, 158, 170, 0.25);
        }
        
        footer {
            background: rgba(0,0,0,0.1);
            color: white;
            padding: 20px 0;
            margin-top: 50px;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Floating Icons -->
<div class="floating-icon" style="top: 10%; left: 5%;"><i class="fas fa-birthday-cake"></i></div>
<div class="floating-icon" style="top: 15%; right: 8%;"><i class="fas fa-gift"></i></div>
<div class="floating-icon" style="bottom: 20%; left: 7%;"><i class="fas fa-heart"></i></div>
<div class="floating-icon" style="bottom: 15%; right: 5%;"><i class="fas fa-star"></i></div>

<!-- Header Section -->
<div class="header-section text-center py-5" data-aos="fade-down">
    <div class="container">
        <h1 class="display-2 mb-3 text-gold" style="font-family: 'Dancing Script', cursive;">
            Deana & Keren
        </h1>
        <p class="lead fs-3 mb-5">Dengan sukacita kami mengundang Anda dalam acara istimewa</p>

        <!-- Foto Deana & Keren -->
        <div class="mt-4">
            <div class="photo-frame mx-auto" style="max-width: 320px; border-radius: 50%; overflow: hidden; border: 8px solid rgba(255,255,255,0.9); box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
                <img src="{{ asset('img/gambar.jpeg') }}" 
                     alt="Deana Calie & Keren Kanaya Walujan" 
                     class="w-100 h-auto"
                     style="object-fit: cover;">
            </div>
            <p class="mt-3 text-light">Deana Calie & Keren Kanaya Walujan</p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <!-- Countdown Timer -->
            <div class="card p-5 mb-5 text-center event-card" data-aos="zoom-in">
                <div class="card-header">
                    <i class="fas fa-clock me-2"></i> Menuju Acara Pembaptisan
                </div>
                <div class="card-body">
                    <div class="row countdown justify-content-center mt-3">
                        <div class="col-auto"><div class="countdown-item"><div id="days">00</div><small>Hari</small></div></div>
                        <div class="col-auto"><div class="countdown-item"><div id="hours">00</div><small>Jam</small></div></div>
                        <div class="col-auto"><div class="countdown-item"><div id="minutes">00</div><small>Menit</small></div></div>
                        <div class="col-auto"><div class="countdown-item"><div id="seconds">00</div><small>Detik</small></div></div>
                    </div>
                    <p class="mt-4 fw-bold text-primary">Minggu, 7 Desember 2025 pukul 13:00</p>
                </div>
                <div class="decoration decoration-1"></div>
                <div class="decoration decoration-2"></div>
            </div>

            <!-- Ulang Tahun Deana -->
            <div class="card p-5 mb-4 event-card" data-aos="fade-up">
                <div class="card-header">
                    <i class="fas fa-birthday-cake me-2"></i> Ultah ke-1
                </div>
                <div class="card-body text-center">
                    <h3 class="fw-bold text-secondary">Deana Calie Walujan</h3>
                    <p class="fs-4 text-primary">Sabtu, 6 Desember 2025</p>
                    <div class="mt-3">
                        <i class="fas fa-cake-candles fa-2x text-accent bounce"></i>
                    </div>
                </div>
            </div>

            <!-- Baptisan Keren -->
            <div class="card p-5 mb-5 event-card" data-aos="fade-up">
                <div class="card-header">
                    <i class="fas fa-dove me-2"></i> Hari Pembaptisan
                </div>
                <div class="card-body text-center">
                    <h3 class="fw-bold text-secondary">Keren Kanaya Walujan</h3>
                    <p class="fs-4">
                        Minggu, <strong class="text-primary">7 Desember 2025</strong><br>
                        <i class="fas fa-clock text-secondary"></i> Jam 13.00 – Selesai<br>
                        <i class="fas fa-map-marker-alt text-secondary"></i> Rumah Keluarga Walujan - Runtuwene<br>
                        <small class="text-muted">Puncak Laoban, Manado</small>
                    </p>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="my-5" data-aos="zoom-in">
                <h3 class="section-title text-center mb-4"><i class="fas fa-map-marked-alt me-2"></i> Lokasi Acara</h3>
                <div style="height:420px; border-radius:18px; overflow:hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                    <iframe width="100%" height="100%" style="border:0;" loading="lazy" allowfullscreen
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.981135481952!2d124.8548126!3d1.3167538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32876d000215c059%3A0x58547a62a1dd2320!2sPuncak%20Laoban!5e0!3m2!1sid!2sid!4v1735660000000">
                    </iframe>
                </div>
                <div class="text-center mt-4">
                    <a href="https://maps.google.com/maps?q=1.3167538,124.8548126" target="_blank" class="btn btn-primary btn-lg px-5">
                        <i class="fas fa-map-marked-alt me-2"></i> Buka di Google Maps / Waze
                    </a>
                </div>
            </div>

            <!-- Form Kirim Ucapan -->
            <div class="card p-5 mb-5 event-card" data-aos="fade-up">
                <div class="card-header">
                    <i class="fas fa-envelope me-2"></i> Kirim Ucapan Selamat
                </div>
                <div class="card-body">
                    <form id="formUcapan">
                        @csrf
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Anda" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-comment-dots"></i></span>
                                <textarea class="form-control" rows="4" name="ucapan" placeholder="Tulis ucapan selamat Anda..." required></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="fas fa-paper-plane me-2"></i> Kirim Ucapan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Daftar Ucapan -->
            <div class="card p-5 event-card" data-aos="fade-up">
                <div class="card-header">
                    <i class="fas fa-comments me-2"></i> Ucapan dari Tamu
                </div>
                <div class="card-body">
                    <div id="daftarUcapan">
                        @forelse($ucapans as $u)
                            <div class="ucapan-item">
                                <strong><i class="fas fa-user-circle me-2 text-primary"></i>{{ $u->nama }}</strong>
                                <p class="mb-1 mt-2">{{ $u->ucapan }}</p>
                                <small class="text-muted"><i class="far fa-clock me-1"></i>{{ $u->created_at->diffForHumans() }}</small>
                            </div>
                        @empty
                            <p class="text-center text-muted py-3"><i class="fas fa-inbox me-2"></i>Belum ada ucapan. Jadilah yang pertama!</p>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<footer>
    <div class="container">
        <p>Dibuat dengan <i class="fas fa-heart text-danger"></i> untuk Deana & Keren</p>
        <p class="small">© 2025 - Keluarga Walujan</p>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    AOS.init({ duration: 1000, once: true });

    // Create confetti
    function createConfetti() {
        const colors = ['#FF9EAA', '#8EC5FC', '#FFD166', '#A0E7E5', '#B5EAD7'];
        for (let i = 0; i < 50; i++) {
            const confetti = document.createElement('div');
            confetti.className = 'confetti';
            confetti.style.left = Math.random() * 100 + 'vw';
            confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
            confetti.style.animationDuration = (Math.random() * 3 + 2) + 's';
            confetti.style.width = (Math.random() * 10 + 5) + 'px';
            confetti.style.height = (Math.random() * 10 + 5) + 'px';
            document.body.appendChild(confetti);
            
            setTimeout(() => {
                confetti.remove();
            }, 5000);
        }
    }
    
    // Trigger confetti on load
    window.addEventListener('load', () => {
        setTimeout(createConfetti, 1000);
    });

    // COUNTDOWN
    const countDownDate = new Date("2025-12-07T13:00:00").getTime();
    const countdown = setInterval(() => {
        const now = new Date().getTime();
        const distance = countDownDate - now;

        const days    = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours   = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerText    = days.toString().padStart(2, '0');
        document.getElementById("hours").innerText   = hours.toString().padStart(2, '0');
        document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
        document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');

        if (distance < 0) {
            clearInterval(countdown);
            document.querySelector(".countdown").innerHTML = "<div class='text-success fs-3'>Acara Sedang Berlangsung!</div>";
        }
    }, 1000);

    // KIRIM UCAPAN
    document.getElementById('formUcapan').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch("{{ route('ucapan.store') }}", {
            method: "POST",
            body: formData,
            headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" }
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                this.reset();
                Swal.fire({
                    title: 'Terima kasih!',
                    text: 'Ucapan Anda telah terkirim',
                    icon: 'success',
                    confirmButtonColor: '#FF9EAA'
                });
                createConfetti();
                loadUcapan();
            }
        })
        .catch(() => Swal.fire({
            title: 'Error',
            text: 'Gagal mengirim ucapan',
            icon: 'error',
            confirmButtonColor: '#FF9EAA'
        }));
    });

    // LOAD UCAPAN (live)
    function loadUcapan() {
        fetch("{{ route('ucapan.latest') }}")
            .then(res => res.json())
            .then(data => {
                let html = '';
                if (data.length === 0) {
                    html = '<p class="text-center text-muted py-3"><i class="fas fa-inbox me-2"></i>Belum ada ucapan.</p>';
                } else {
                    data.forEach(u => {
                        const waktu = new Date(u.created_at).toLocaleString('id-ID');
                        html += `
                            <div class="ucapan-item">
                                <strong><i class="fas fa-user-circle me-2 text-primary"></i>${u.nama}</strong>
                                <p class="mb-1 mt-2">${u.ucapan}</p>
                                <small class="text-muted"><i class="far fa-clock me-1"></i>${waktu}</small>
                            </div>`;
                    });
                }
                document.getElementById('daftarUcapan').innerHTML = html;
            });
    }

    // Pertama kali + refresh tiap 8 detik
    loadUcapan();
    setInterval(loadUcapan, 8000);
</script>
</body>
</html>