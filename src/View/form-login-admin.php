<?php include "view/header-admin.php" ?>

        <form class="form-horizontal" method="post" action="adm" style="padding: 20px">
                <fieldset>

                <!-- Form Name -->
                <legend>Painel de Login - Administrador</legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome:</label>  
                <div class="col-md-4">
                <input id="nome" name="nome" type="text" placeholder="Digite o seu nome" class="form-control input-md" required="">
                    
                </div>

                <div class="form-group" style="margin-top: 15px">
                <label class="col-md-4 control-label" for="senha">Senha:</label>  
                <div class="col-md-4">
                <input id="senha" name="senha" type="password" placeholder="Digite a sua Senha" class="form-control input-md" required="">
                    
                </div>


                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="login"></label>
                <div class="col-md-4">
                    <button id="login" name="login" class="btn btn-primary">Entrar</button>
                </div>
                </div>

                </fieldset>
        </form>

<?php include "view/footer-admin.php" ?>