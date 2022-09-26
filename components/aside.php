

<aside id="aside"class="position-relative g-col-4 text-center flex-shrink-0" style="height: 100%;width:150px;">
   
    <section id="aside-content"class="position-fixed">
        
        <div class="d-flex flex-column justify-content-center align-items-center mt-5" style="width:100%;">
            <div  class="mb-3 rounded-circle"style="background:gray;width:90px;height:90px;" ></div>
            <h5><?php
                echo $_SESSION['nome'];
            ?></h5>
        </div>
        <div class="mt-4 text-center "style="width:100%;height:100%;">
            <nav style="height: 100%;width:150px;">
                <ul classs="list-group "style="padding:0;">
                    <li class="list-group-item  p-2"><a href="../pages/areaProfessor.php" >Página inicial</a></li>
                    <li class="list-group-item  p-2"><a href="../pages/redacoes.php">Redações</a></li>
                    <li class="list-group-item  p-2"><a href="../pages/contatos.php"> Contatos</a></li>
                    <li class="list-group-item  p-2"><a href="../pages/config.php">Configurações</a></li>
                    <li class="list-group-item  p-2" id="trocarTema">Trocar Tema</li>
                    <li class="list-group-item  p-2"><a href="../index.php">Fazer Redação</a></li>
                    <a class="list-group-item "href="../pages/logout.php" id="sair">Sair</a>
                </ul>
            </nav>
            
        </div>
        
    </section>

    
</aside>