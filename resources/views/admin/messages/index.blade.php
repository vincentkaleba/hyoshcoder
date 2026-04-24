<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie | Admin</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { padding: 2rem; background: #f8f9fa; font-family: 'Outfit', sans-serif; }
        .admin-card { background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); padding: 1.5rem; }
        .admin-table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        .admin-table th, .admin-table td { padding: 1rem; text-align: left; border-bottom: 1px solid #eee; }
        .admin-table th { background: #fafafa; font-weight: bold; color: #555; }
        .admin-table tr:hover { background: #fcfcfc; }
        .btn { padding: 0.5rem 1rem; border-radius: 4px; text-decoration: none; display: inline-block; font-size: 0.9rem; }
        .btn-view { background: #007bff; color: white; }
        .pagination-container { margin-top: 2rem; display: flex; justify-content: center; }
        .pagination-container nav svg { width: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h1><i class="fa-solid fa-envelope"></i> Messagerie</h1>
            <div style="display: flex; align-items: center; gap: 1.5rem;">
                <a href="{{ route('projects.index') }}" style="text-decoration: none; color: #666;">Gestion Projets</a>
                <a href="{{ route('home') }}" style="text-decoration: none; color: #666;">Retour Site</a>
                <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" style="background: #dc3545; color: white; border: none; padding: 0.5rem 1rem; border-radius: 4px; cursor: pointer;">Déconnexion</button>
                </form>
            </div>
        </div>

        <div class="admin-card">
            @if($messages->isEmpty())
                <p style="text-align: center; color: #888; padding: 2rem;">Aucun message reçu.</p>
            @else
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Expéditeur</th>
                            <th>Sujet</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <strong>{{ $message->name }}</strong><br>
                                <span style="font-size: 0.8rem; color: #888;">{{ $message->email }}</span>
                            </td>
                            <td>{{ $message->subject ?? 'Sans sujet' }}</td>
                            <td>
                                <a href="{{ route('admin.messages.show', $message) }}" class="btn btn-view">Lire</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination-container">
                    {{ $messages->links() }}
                </div>
            @endif
        </div>
    </div>
</body>
</html>
