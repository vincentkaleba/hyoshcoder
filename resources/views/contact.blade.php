<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact | Hyosh Coder</title>
    @vite(['resources/css/app.css'])
</head>
<body class="antialiased">
    <!-- Dynamic Code Background -->
    <div class="code-bg-layer" id="codeBg"></div>

    <main>
        <section class="bio-section" style="padding-top: 100px; min-height: 100vh;">
            <div class="container">
                <a href="{{ route('home') }}" style="display: inline-block; margin-bottom: 3rem; text-decoration: none; color: #666; font-weight: 500;">
                    &larr; Retour à l'accueil
                </a>

                <div style="max-width: 800px; margin: 0 auto;" class="reveal active">
                    <h2 style="text-align: center; margin-bottom: 1rem; font-size: 3rem;">Contactez-<span>Moi</span></h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem;">Une idée de projet ? N'hésitez pas à m'envoyer un message.</p>
                    
                    @if(session('success'))
                        <div style="background: #d4edda; color: #155724; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem; border-left: 5px solid #28a745;">
                            <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" style="display: grid; gap: 1.5rem;">
                        @csrf
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                            <div class="form-group">
                                <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Nom complet</label>
                                <input type="text" name="name" placeholder="Votre Nom" required style="width: 100%; padding: 1.2rem; border: 1px solid #eee; border-radius: 8px; font-family: inherit; background: #fafafa;">
                            </div>
                            <div class="form-group">
                                <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Email</label>
                                <input type="email" name="email" placeholder="votre@email.com" required style="width: 100%; padding: 1.2rem; border: 1px solid #eee; border-radius: 8px; font-family: inherit; background: #fafafa;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Sujet</label>
                            <input type="text" name="subject" placeholder="De quoi s'agit-il ?" style="width: 100%; padding: 1.2rem; border: 1px solid #eee; border-radius: 8px; font-family: inherit; background: #fafafa;">
                        </div>
                        <div class="form-group">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Message</label>
                            <textarea name="message" placeholder="Parlez-moi de votre projet..." required style="width: 100%; padding: 1.2rem; border: 1px solid #eee; border-radius: 8px; font-family: inherit; background: #fafafa; min-height: 200px; resize: vertical;"></textarea>
                        </div>
                        <button type="submit" class="cta-btn" style="border: none; cursor: pointer; width: 100%; margin-top: 1rem;">Envoyer le Message</button>
                    </form>

                    <div style="margin-top: 5rem; display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; text-align: center;">
                        <div>
                            <h4 style="margin-bottom: 0.5rem; color: var(--accent-gold);">Email</h4>
                            <p style="font-size: 0.9rem;">vincentkaleba@gmail.com</p>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem; color: var(--accent-gold);">Réseaux</h4>
                            <p style="font-size: 0.9rem;">@vincentkaleba</p>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem; color: var(--accent-gold);">Disponibilité</h4>
                            <p style="font-size: 0.9rem;">Lundi - Vendredi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Floating Code Symbols Generation
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
