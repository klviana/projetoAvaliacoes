<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
    
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Login - PHP + MySQL</title>
    <link rel="stylesheet" href="assets\styles\style_form.css" />

</head>
 
<body>
    <div class="header">
        
        <a href="#default" ><img src="./assets/img/img_logo.jfif" alt="logo" /></a>
        <div class="header-right">
        <a class="active" href="#home">Inicio</a>
        <a href="#contact">Contato</a>
        <a href="#about">Sobre</a>
        <a href="#help">Ajuda</a>
        </div>
    </div>
        <main class="container">
            <section class="hero is-success is-fullheight">
                <div class="hero-body">
                    <div class="container has-text-centered">
                  
                        <h3 class="title has-text-grey">Login</h3>
                        <?php
                        if(isset($_SESSION['nao_autenticado'])):
                        ?>
                        <div class="notification is-danger">
                        <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>
                        <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                        ?>
                        <div class="box">
                            <form action="index.php" method="POST">
                                <div class="input-field">
                                    <div class="control">
                                        <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                    </div>
                                </div>
    
                                <div class="input-field">
                                    <div class="control">
                                        <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                    </div>
                                </div>
                                <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                            </form>
                        </div>
                     
                    </div>
                </div>
            </section>
        </main>
</body>
 
</html>