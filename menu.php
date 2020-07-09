<?php
    echo '
    <div class="">
            <header>
              <div class="text-center">
                 <a class="navbar-brand" href="index.php">
                    <img src="img/logo.jpg" width="100" height="100" alt="">
                 </a>
              </div>
              <hr>
                <form action="sysLogin/login.php" method="post">
                <div class="row">
                <div class="offset-9">
                  <input type="text" name="nome" size="10"  placeholder="nome">  
                  <input type="password" name="senha" size="10"  placeholder="Senha"> 
                  <button type="submit" name="entrar">Logar</button> 
                  <a href="sysLogin/logout.php">Logout</a>
                 </div> 
                 </div>
                 </form>
              
              
            <div>
            <nav class=" menu_principal row navbar navbar-expand-lg navbar-dark bg-dark  ">
                  <div class=" text-center">
                    <a class="menu" href="index.php">Home</a>
                    <a class="menu" href="chat.php">Comentarios</a>
                    <a class="menu" href="Produtos.php">Produtos</a>
                    <a class="menu" href="Acesso.php">Acesso</a>
                    <a class="menu" href="ContaCliente.php">Cadastro</a>
                    <a class="menu" href="contaAdm.php">Cadastro Funcionario</a>
                  </div>  
            </nav> 
            </header> 
            </div><br>'
           ;
