<?php
    $sql = "SELECT * FROM dim_salas WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = res->fetch_object();
    
?>
       <div id="form-new-client">
        <form action="?page=salvar_salas" method="POST" class="form-boxs-clients">
            <input type="hidden" name="acao" value="cadastrar">
            <h5>CADASTRO DE SALAS</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">Nome:</label>
                        <input type="text" class="form-control" name="nome">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Capacidade Maxima</label>
                        <input type="int" class="form-control" name="capacidade_max">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Descrição</label>
                        <input type="text" class="form-control" name="descricao">
                    </div>

                    <div class="btn-form my-5 d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm me-5">Editar sala</button>
                        <a href="?page=index.php" class="btn btn-warning btn-sm">Voltar</a>
                    </div>

                </div>
            
            </div>
        </form>
    </div>