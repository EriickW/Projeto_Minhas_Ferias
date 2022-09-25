

<aside class="g-col-4 text-center" style="height: 100vh;width:500px;background:black;">


    <section class="d-flex flex-column justify-content-center align-items-center" style="width:100%;">
        <div style="background:gray;width:100px;height:100px;" ></div>
        <h4><?php
            echo $_SESSION['nome'];
        ?></h4>        
    </section>
            <section style="width:100%;padding:0;">
                <nav>
                    <ul classs="list-group "style="padding:0;">
                        <li class="list-group-item  p-2"><a href="../pages/areaProfessor.php" >Página inicial</a></li>
                        <li class="list-group-item  p-2"><a href="../pages/redacoes.php">Redações</a></li>
                        <li class="list-group-item  p-2"><a href="../pages/contatos.php"> Contatos</a></li>
                        <li class="list-group-item  p-2"><a href="../pages/config.php">Configurações</a></li>
                        <li class="list-group-item  p-2" id="trocarTema">Trocar Tema</li>
                        <li class="list-group-item  p-2"><a href="../index.php">Fazer Redação</a></li>
                    </ul>
                </nav>
                <a class="text-center"href="../pages/logout.php" id="sair">Sair</a>
            </section>
            

        
</aside>