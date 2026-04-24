<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lire Message | Admin</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { padding: 2rem; background: #f8f9fa; font-family: 'Outfit', sans-serif; }
        .message-view { background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); overflow: hidden; max-width: 900px; margin: 0 auto; }
        .message-header { padding: 2rem; border-bottom: 1px solid #eee; background: #fafafa; }
        .message-body { padding: 2rem; line-height: 1.8; color: #333; font-size: 1.1rem; min-height: 300px; white-space: pre-wrap; }
        .meta-info { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1.5rem; }
        .sender-box { display: flex; align-items: center; gap: 1rem; }
        .sender-avatar { width: 48px; height: 48px; background: #c4a484; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 1.2rem; }
        .subject-line { font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem; color: #000; }
        .btn-back { display: inline-block; margin-bottom: 1.5rem; text-decoration: none; color: #666; font-weight: 500; }
        .btn-back:hover { color: #000; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('admin.messages') }}" class="btn-back"><i class="fa-solid fa-arrow-left"></i> Retour à la messagerie</a>

        <div class="message-view">
            <div class="message-header">
                <div class="subject-line">{{ $message->subject ?? 'Sans sujet' }}</div>
                
                <div class="meta-info">
                    <div class="sender-box">
                        <div class="sender-avatar">{{ strtoupper(substr($message->name, 0, 1)) }}</div>
                        <div>
                            <strong>{{ $message->name }}</strong><br>
                            <span style="color: #666;">&lt;{{ $message->email }}&gt;</span>
                        </div>
                    </div>
                    <div style="text-align: right; color: #888;">
                        {{ $message->created_at->format('d F Y') }}<br>
                        {{ $message->created_at->format('H:i') }}
                    </div>
                </div>
            </div>

            <div class="message-body">{{ $message->message }}</div>

            <div style="padding: 1.5rem; background: #fafafa; border-top: 1px solid #eee; text-align: right;">
                <a href="mailto:{{ $message->email }}" class="cta-btn" style="font-size: 0.9rem; padding: 0.8rem 2rem;">Répondre par Email</a>
            </div>
        </div>
    </div>
</body>
</html>
