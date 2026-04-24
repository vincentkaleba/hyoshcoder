<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion | Admin</title>
    @vite(['resources/css/app.css'])
    <style>
        body { background: #f8f9fa; display: flex; align-items: center; justify-content: center; height: 100vh; font-family: 'Outfit', sans-serif; }
        .login-card { background: white; padding: 2.5rem; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        .form-group { margin-bottom: 1.5rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: 600; font-size: 0.9rem; }
        input { width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 6px; font-family: inherit; }
        .btn-login { background: #000; color: white; width: 100%; padding: 1rem; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; transition: transform 0.2s; }
        .btn-login:hover { transform: translateY(-2px); }
        .error-msg { color: #dc3545; font-size: 0.85rem; margin-top: 0.5rem; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2 style="text-align: center; margin-bottom: 2rem;">Accès Admin</h2>
        
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email') <div class="error-msg">{{ $message }}</div> @enderror
            </div>
            
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" required>
                @error('password') <div class="error-msg">{{ $message }}</div> @enderror
            </div>
            
            <button type="submit" class="btn-login">Se connecter</button>
        </form>
        
        <div style="text-align: center; margin-top: 1.5rem;">
            <a href="{{ route('home') }}" style="color: #888; text-decoration: none; font-size: 0.9rem;">&larr; Retour au site</a>
        </div>
    </div>
</body>
</html>
