<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>

    <!-- Core  Stylesheet -->
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/style.css" />

</head>
<body>

<div class="login-container">
    <h2 class="login-title">Bem-vindo de volta! Acesse sua conta</h2>

    <form action="<?= $base; ?>/login" method="post" id="loginForm" autocomplete="off">
        <?php if(!empty($flash)): ?>
            <div class="error-message" id="error-message" style="display: none;"><?= $flash; ?></div>
        <?php endif; ?>
        <div class="form">
            <input type="text" name="username"  id="username" required aria-labelledby="username">
            <label for="username" class="label-name">
                <span class="content-name">Usuário</span>
            </label>
        </div>
        
        <div class="form">
            <input type="password" name="password"  id="password" required aria-labelledby="password">
            <label for="password" class="label-name">
                <span class="content-name">Senha</span>
            </label>
        </div>
        
        <button type="submit">Entrar</button>
    </form>
</div>

<!-- Core  Javascript -->
<script src="<?= $base; ?>/assets/js/script.js"></script>

</body>
</html>
