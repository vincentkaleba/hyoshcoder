<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Projets | Admin</title>
    @vite(['resources/css/app.css'])
    <style>
        body { padding: 2rem; background: #f8f9fa; }
        .admin-table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .admin-table th, .admin-table td { padding: 1rem; text-align: left; border-bottom: 1px solid #eee; }
        .admin-table th { background: #eee; font-weight: bold; }
        .btn { padding: 0.5rem 1rem; border-radius: 4px; text-decoration: none; font-size: 0.9rem; cursor: pointer; border: none; }
        .btn-add { background: #28a745; color: white; }
        .btn-edit { background: #ffc107; color: #333; }
        .btn-delete { background: #dc3545; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h1>Gestion des Projets</h1>
            <div style="display: flex; gap: 1rem;">
                <a href="{{ route('projects.create') }}" class="btn btn-add">Ajouter un Projet</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-delete">Déconnexion</button>
                </form>
            </div>
        </div>
        
        <a href="{{ route('home') }}" style="display: inline-block; margin-bottom: 2rem;">&larr; Retour au Portfolio</a>
        | <a href="{{ route('admin.messages') }}">Voir les Messages</a>

        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 4px; margin-bottom: 2rem;">
                {{ session('success') }}
            </div>
        @endif

        <table class="admin-table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->category }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-edit">Modifier</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Supprimer ce projet ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
