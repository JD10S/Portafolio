<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje desde tu portafolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2563eb;
        }

        .info {
            margin: 15px 0;
        }

        .label {
            font-weight: bold;
            color: #1f2937;
        }

        .message {
            background: #f3f4f6;
            padding: 15px;
            border-radius: 8px;
            white-space: pre-wrap;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Nuevo mensaje desde tu portafolio</h2>

        <div class="info">
            <span class="label">Nombre:</span> {{ $data['name'] }}
        </div>

        <div class="info">
            <span class="label">Email:</span> {{ $data['email'] }}
        </div>

        <div class="info">
            <span class="label">Mensaje:</span>
        </div>

        <div class="message">
            {{ nl2br(e($data['message'])) }}
        </div>

        <div class="footer">
            Enviado el {{ now()->format('d/m/Y \a \l\a\s H:i') }}
        </div>
    </div>

</body>

</html>