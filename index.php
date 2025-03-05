<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div class="main-container">
            <div class="login-container">
                <form class="login-form" action="login.php" method="POST">
                    <h2>Login</h2>
                    <label for="username">Nome:</label>
                    <input type="text" id="username" name="usuario" required>

                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="senha" required>
                    
                    <button type="submit">Logar</button>
                </form>
            </div>
            <div class="container-dicas">
                <h2>Dicas:</h2>
                    <a>O Usuário seria um diminutivo<br><br>
                    Agora a senha seria algo que você acha que eu sou pórem é só ilusão sua (🪙)
                    </a>
            </div>
        </div>
    </body>
</html>
