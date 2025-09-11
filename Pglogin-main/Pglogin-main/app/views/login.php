<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
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
    <form action="../app/controllers/LoginController.php" method="POST">
        <h2>Login</h2>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <input type="submit" value="Entrar" formaction="home.html">
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