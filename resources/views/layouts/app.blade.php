<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomorrowland App</title>
    <!-- Incluindo Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Faz com que o corpo ocupe toda a altura da tela */
        }
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .container {
            flex: 1; /* Permite que a área de conteúdo expanda para ocupar o espaço disponível */
            margin-top: 20px;
        }
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Adicionando uma barra de navegação com um estilo melhorado -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Tomorrowland App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/musicas">Músicas</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-info" href="#"><i class="fas fa-user-circle"></i> Perfil</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- O conteúdo dinâmico será inserido aqui -->
        @yield('content')
    </div>

    <footer class="footer mt-auto">
        <div class="container">
            <span>&copy; 2024 Tomorrowland App. Todos os direitos reservados.</span>
        </div>
    </footer>

    <!-- Incluindo scripts do Bootstrap e jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
