<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Entrar</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Integrantes do Grupo: Amanda Terezinha, Deivid, Gabrielly, Lucas -->
        <!-- Estilização CSS -->
        <style>
            <?php
                include 'style.css';
            ?>
        </style>

        <main class="container">
            <section id="sign-in" class="sign-box">
                <h1>Entrar</h1>
                <form action="request.php" method="POST">
                    <label>
                        <span>Usuário:</span>
                        <input type="text" name="username" required/>
                    </label> 
                    <label>
                        <span>Senha:</span>
                        <input type="password" name="password" required/>
                    </label>
                    <input type="submit" name="sign-in" value="Continuar"/>
                </form>
            </section>
            <section id="sign-up" class="sign-box">
                <h1>Cadastrar</h1>    
                <form action="request.php" method="POST">
                    <label>
                        <span>Nome:</span>
                        <input type="text" name="name" required/>
                    </label> 
                    <label>
                        <span>Sobrenome:</span>
                        <input type="text" name="surname" required/>
                    </label> 
                    <label>
                        <span>Usuário:</span>
                        <input type="text" name="username" required/>
                    </label> 
                    <label>
                        <span>Senha:</span>
                        <input type="password" name="password" required/>
                    </label> 
                    <input type="submit" name="sign-up" value="Continuar"/>
                </form>
            </section>
        </main>
    </body>
</html>