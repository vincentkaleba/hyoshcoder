<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $project->title }} | Hyosh Coder</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .project-hero {
            padding: 100px 0;
            background: #fafafa;
            border-bottom: 1px solid #eee;
            position: relative;
            overflow: hidden;
        }
        .project-category {
            text-transform: uppercase;
            letter-spacing: 4px;
            color: var(--accent-gold);
            font-weight: 700;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: block;
        }
        .project-title {
            font-size: 5rem;
            font-weight: 900;
            line-height: 1;
            margin-bottom: 2rem;
            text-transform: uppercase;
        }
        .project-mockup-large {
            width: 100%;
            max-width: 1000px;
            margin: 4rem auto -200px;
            border-radius: 12px;
            box-shadow: 0 50px 100px rgba(0,0,0,0.1);
            position: relative;
            z-index: 10;
        }
        .project-content {
            padding: 250px 0 100px;
            background: white;
        }
        .project-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 5rem;
        }
        .detail-item {
            margin-bottom: 3rem;
        }
        .detail-item h4 {
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 2px;
            color: #888;
            margin-bottom: 1rem;
        }
        .detail-item p {
            font-size: 1.2rem;
            line-height: 1.6;
        }
        .btn-back {
            position: fixed;
            top: 2rem;
            left: 2rem;
            z-index: 100;
            background: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-decoration: none;
            color: #000;
            transition: all 0.3s ease;
        }
        .btn-back:hover {
            transform: scale(1.1);
            background: #000;
            color: #white;
        }
        @media (max-width: 900px) {
            .project-title { font-size: 3rem; }
            .project-grid { grid-template-columns: 1fr; gap: 3rem; }
            .project-mockup-large { margin-bottom: -100px; }
            .project-content { padding-top: 150px; }
        }
    </style>
</head>
<body class="antialiased">
    <!-- Dynamic Code Background -->
    <div class="code-bg-layer" id="codeBg"></div>

    <a href="{{ route('home') }}" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <main>
        <!-- Project Hero -->
        <section class="project-hero reveal active">
            <div class="container" style="text-align: center;">
                <span class="project-category">{{ $project->category }}</span>
                <h1 class="project-title">{{ $project->title }}</h1>
                
                <div class="project-mockup-large">
                    @if($project->image)
                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" style="width: 100%; border-radius: 12px;">
                    @else
                        <img src="{{ asset('images/default-project.svg') }}" alt="Aperçu par défaut" style="width: 100%; border-radius: 12px;">
                    @endif
                </div>
            </div>
        </section>

        <!-- Project Details -->
        <section class="project-content">
            <div class="container">
                <div class="project-grid reveal">
                    <div class="project-main-info">
                        <div class="detail-item">
                            <h4>À propos du projet</h4>
                            <p>{{ $project->description }}</p>
                        </div>
                        <div class="detail-item">
                            <h4>Solution</h4>
                            <p>Nous avons mis en place une architecture robuste basée sur les dernières technologies pour garantir performance et scalabilité. Le design a été pensé pour offrir une expérience utilisateur fluide et intuitive.</p>
                        </div>
                    </div>

                    <div class="project-sidebar">
                        <div class="detail-item">
                            <h4>Client</h4>
                            <p>Hyosh Dev Studio</p>
                        </div>
                        <div class="detail-item">
                            <h4>Année</h4>
                            <p>2025</p>
                        </div>
                        <div class="detail-item">
                            <h4>Lien</h4>
                            @if($project->link)
                                <a href="{{ $project->link }}" target="_blank" style="color: #000; font-weight: bold;">Visiter le projet <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            @else
                                <p>Projet Interne</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta-section reveal">
            <div class="container">
                <h2 class="cta-title">Ce projet vous inspire ?</h2>
                <a href="{{ route('contact.create') }}" class="cta-btn">Parlons de votre idée</a>
            </div>
        </section>
    </main>

    <script>
        // Reveal Logic
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) { entry.target.classList.add('active'); }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Background Logic
        const codeBg = document.getElementById('codeBg');
        const symbols = ['{', '}', '<', '>', '/', ';', '=>', '[', ']', '(', ')', '&&', '||', '!='];
        function createSymbol() {
            if(!codeBg) return;
            const el = document.createElement('div');
            el.className = 'floating-symbol';
            el.innerText = symbols[Math.floor(Math.random() * symbols.length)];
            const startX = Math.random() * 100;
            const duration = 15 + Math.random() * 15;
            const size = 0.8 + Math.random() * 1.5;
            el.style.left = `${startX}%`;
            el.style.animationDuration = `${duration}s`;
            el.style.fontSize = `${size}rem`;
            el.style.opacity = Math.random() * 0.5 + 0.2;
            codeBg.appendChild(el);
            setTimeout(() => { el.remove(); }, duration * 1000);
        }
        setInterval(createSymbol, 800);
        for(let i=0; i<15; i++) createSymbol();
    </script>
</body>
</html>
