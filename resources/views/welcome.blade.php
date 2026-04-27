<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hyosh Coder | CV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="code-bg-layer" id="codeBg"></div>
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-title-wrapper">
                    <!-- Stylized SVG Typography -->
                    <svg class="portfolio-svg" viewBox="0 0 800 400" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>
                                .text-path { font-family: 'Bowlby One SC', 'Impact', sans-serif; font-weight: 900; fill: #000; }
                            </style>
                        </defs>
                        <!-- Row 1: POR + -->
                        <text x="50" y="150" class="text-path" font-size="190" transform="rotate(-6, 100, 150)">P</text>
                        <text x="180" y="175" class="text-path" font-size="175" transform="rotate(8, 230, 175)">O</text>
                        <text x="320" y="145" class="text-path" font-size="195" transform="rotate(-4, 370, 145)">R</text>

                        <g transform="translate(520, 20) rotate(5, 75, 75)">
                            <path d="M50 0 H100 V50 H150 V100 H100 V160 H50 V100 H0 V50 H50 Z" fill="#000" />
                        </g>

                        <!-- Row 2: FOLIO -->
                        <text x="130" y="340" class="text-path" font-size="190" transform="rotate(-5, 170, 340)">F</text>
                        <text x="260" y="360" class="text-path" font-size="175" transform="rotate(6, 300, 360)">O</text>
                        <text x="410" y="320" class="text-path" font-size="195" transform="rotate(-8, 440, 320)">L</text>
                        <text x="530" y="350" class="text-path" font-size="185" transform="rotate(4, 550, 350)">I</text>
                        <text x="600" y="325" class="text-path" font-size="185" transform="rotate(-6, 640, 325)">O</text>
                    </svg>
                    <span class="hero-year-tag">'4</span>
                </div>

                <img src="{{ asset('images/hero.png') }}" alt="Hyosh Coder" class="hero-image-large">
                <p class="hero-sub-name">Hyosh Coder</p>
            </div>
        </section>

        <!-- Bio & Experience Section -->
        <section class="bio-section reveal">
            <div class="container">
                <div class="bio-grid">
                    <div class="badge-container">
                        <div class="badge-lanyard-string"></div>
                        <div class="badge-holder">
                            <div class="badge-clip"></div>
                            <img src="{{ asset('images/me.jpeg') }}" alt="Badge Photo">
                        </div>
                    </div>

                    <div class="bio-text-area">
                        <h2>SALUT, Je suis <span>Vincent</span></h2>
                        <p class="bio-desc">Je suis un ingénieur logiciel créatif qui aime résoudre des problèmes complexes et rendre les produits numériques intuitifs. Je ne me contente pas de créer des applications ; je conçois des expériences fluides, performantes et visuellement époustouflantes.</p>

                        <div class="bio-details-grid">
                            <div class="bio-col">
                                <h3>Expérience</h3>
                                <div class="bio-item">
                                    <h4>Développeur Senior</h4>
                                    <p>Omnicom • 2024 - Now</p>
                                </div>
                                <div class="bio-item">
                                    <h4>Ingénieur Backend</h4>
                                    <p>Omnicom • 2022 - Now</p>
                                </div>
                                <div class="bio-item">
                                    <h4>CI - CD</h4>
                                    <p>Omnicom • 2022 - Now</p>
                                </div>
                            </div>

                            <div class="bio-col">
                                <h3>Languages and Stack</h3>
                            <div class="soft-icons-grid">
                                <img src="https://skillicons.dev/icons?i=html" alt="HTML">
                                <img src="https://skillicons.dev/icons?i=css" alt="CSS">
                                <img src="https://skillicons.dev/icons?i=js" alt="JS">
                                <img src="https://skillicons.dev/icons?i=react" alt="React">
                                <img src="https://skillicons.dev/icons?i=python" alt="Python">
                                <img src="https://skillicons.dev/icons?i=go" alt="Go">
                                <img src="https://skillicons.dev/icons?i=laravel" alt="Laravel">
                                <img src="https://skillicons.dev/icons?i=postgres" alt="Postgres">
                                <img src="https://skillicons.dev/icons?i=vite" alt="Vite">
                                <img src="https://skillicons.dev/icons?i=tailwind" alt="Tailwind">
                            </div>
                            </div>

                            <div class="bio-col">
                                <h3>Contact</h3>
                                <div class="bio-item">
                                    <h4>Email</h4>
                                    <p><a href="mailto:vincentkaleba@gmail.com" style="color: inherit; text-decoration: none;">vincentkaleba@gmail.com</a></p>
                                </div>
                                <div class="bio-item">
                                    <h4>Social</h4>
                                    <p>
                                        <a href="https://x.com/vincentkaleba" target="_blank" style="color: inherit; text-decoration: none;">X</a> /
                                        <a href="https://github.com/vincentkaleba" target="_blank" style="color: inherit; text-decoration: none;">GitHub</a> /
                                        <a href="https://linkedin.com/in/vincentkaleba" target="_blank" style="color: inherit; text-decoration: none;">LinkedIn</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="projects-section reveal">
            <div class="container">
                <div class="content-bg-header">
                    <h2 class="content-outline-text">PROJETS</h2>
                    <div class="content-mini-nums">
                        @foreach($projects as $index => $project)
                            <span>0{{ $index + 1 }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="projects-columns-container">
                    @foreach($projects as $index => $project)
                    <!-- Col {{ $index + 1 }} -->
                    <a href="{{ route('projects.show', $project) }}" class="col-p col-p-{{ ($index % 5) + 1 }}" style="text-decoration: none; color: inherit;">
                        <div class="col-mockup-wrapper">
                            @if($project->image)
                                <img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                            @else
                                <img src="{{ asset('images/default-project.svg') }}" alt="Aperçu du projet par défaut">
                            @endif
                        </div>
                        <span class="col-num-large">{{ $index + 1 }}</span>
                        <div class="col-info-text">
                            <h4>{{ $project->title }}</h4>
                            <p>{{ $project->description }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="cta-section reveal">
            <div class="container">
                <h2 class="cta-title">Prêt à donner vie à vos projets ?</h2>
                <a href="{{ route('contact.create') }}" class="cta-btn">Travaillons ensemble</a>
            </div>
        </section>
    </main>

    <script>
        // Scroll Reveal Animation
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });

        // Floating Code Symbols Generation
        const codeBg = document.getElementById('codeBg');
        const symbols = ['{', '}', '<', '>', '/', ';', '=>', '[', ']', '(', ')', '&&', '||', '!='];

        function createSymbol() {
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

            setTimeout(() => {
                el.remove();
            }, duration * 1000);
        }

        setInterval(createSymbol, 800);
        // Create initial batch
        for(let i=0; i<15; i++) createSymbol();
    </script>

    <footer style="padding: 100px 0; text-align: center; color: #888;">
        <p>&copy; 2025 Hyosh Coder. Tous droits réservés. Développé et maintenue Vincent Kaleba.</p>
    </footer>
</body>
</html>
