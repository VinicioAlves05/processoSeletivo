<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="nav-brand">
                <img src="estgLog1.png" alt="">
            </div>
            <nav class="nav-menu">
                <a href="home.html">Início</a>
                <a href="#">Testes</a>
                <a href="#">Currículo</a>
            </nav>
            <div class="nav-auth">
                <a href="login.php" class="btn-secondary">Entrar</a>
                <a href="cadastro.php" class="btn-primary">Cadastrar</a>
            </div>
        </div>
    </header>

    <div class="container02">
         <form action="../app/controllers/CadastroController.php" method="POST">
        <h2>Cadastre-se</h2>
        
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="tipo_usuario">Eu sou:</label><br>
        <select id="tipo_usuario" name="tipo_usuario" required>
            <option value="candidato">Candidato</option>
            <option value="empresa">Empresa</option>
            <option value="admin">Administrador</option>
        </select><br><br>

        <input type="submit" value="Cadastrar" formaction="login.php">
    </form>
    </div>

     <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <img src="estgLog1.png" alt="">
                    <p>Conectando talentos com oportunidades</p>
                </div>
                <div class="footer-section">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><a href="#">Curriculo</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="#">Testes</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 PS. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
   
</body>
</html>