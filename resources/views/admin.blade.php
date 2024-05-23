<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .message-container {
            text-align: center;
            animation: fadeInOut 3s forwards;
        }
        .message {
            font-size: 2em;
            color: #4caf50;
        }
        @keyframes fadeInOut {
            0% { opacity: 0; }
            25% { opacity: 1; }
            75% { opacity: 1; }
            100% { opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="message-container">
        <div class="message">Login Berhasil!</div>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = '/prestasiadmin';
        }, 3000);
    </script>
</body>
</html>
