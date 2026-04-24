<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Projet | Admin</title>
    @vite(['resources/css/app.css'])
    <style>
        body { padding: 2rem; background: #f8f9fa; }
        .form-card { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 1.5rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
        input, textarea, select { width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; font-family: inherit; }
        .btn { padding: 0.75rem 1.5rem; border-radius: 4px; border: none; cursor: pointer; font-weight: bold; }
        .btn-submit { background: #000; color: white; width: 100%; }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center; margin-bottom: 2rem;">Modifier le Projet</h1>
        
        <div class="form-card">
            <form action="{{ route('projects.update', $project) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" name="title" value="{{ $project->title }}" required>
                </div>
                <div class="form-group">
                    <label>Catégorie</label>
                    <input type="text" name="category" value="{{ $project->category }}" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" required rows="4">{{ $project->description }}</textarea>
                </div>
                <div class="form-group">
                    <label>Chemin de l'image</label>
                    <input type="text" name="image" value="{{ $project->image }}">
                </div>
                <button type="submit" class="btn btn-submit">Mettre à jour le Projet</button>
            </form>
            <a href="{{ route('projects.index') }}" style="display: block; text-align: center; margin-top: 1.5rem; color: #666;">Annuler</a>
        </div>
    </div>
</body>
</html>
