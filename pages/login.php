<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/main.css">
    <title>Login</title>
</head>
<body>

    <main>
        <section id="form-content">
            <h1>Olá Professor</h1>
            <form action="./areaProfessor.php" method="post">
                <div>
                    <input type="text" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div>
                    <input type="password" id="senha" name="senha" placeholder="Senha" required>
                </div>
                <input id="submit"type="submit" placeholder="Entrar">
            </form>
            <a href="#">Não tenho conta</a>
        </section>
    </main>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>   
</body>
</html>