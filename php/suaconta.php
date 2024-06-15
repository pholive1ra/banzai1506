
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua conta</title>
    <script src="js/suaconta.js"></script>
    <link rel="stylesheet" href="css/suaconta.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Minha Conta</h1>
            <!--<button onclick="window.location.href='index.php'">Voltar para a Página Inicial</button>-->
        </div>
        <div class="nav">
            <a href="#orders">Meus Pedidos</a>
            <a href="#addresses">Endereços</a>
            <a href="#personal-data">Dados Pessoais</a>
            <a href="#wishlist">Lista de Desejos</a>
        </div>
        <div class="content">
            <h2>Bem-vindo à sua conta!</h2>
            <p>Aqui você pode gerenciar todas as informações da sua conta, incluindo pedidos, endereços e dados pessoais.</p>
        </div>
        <div id="personal-data" class="content">
            <!-- Dados pessoais serão carregados aqui -->
        </div>
    </div>
</body>
</html>
