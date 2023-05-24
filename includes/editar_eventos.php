<?php
    $sql = "SELECT * FROM fatos_eventos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar_eventos" method="POST" class="form-boxs-clients">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php  print $row->id;?>">
            <h5>CADASTRO DE EVENTOS</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">Nome:</label>
                        <input type="text" class="form-control" value="<?php print $row->nome; ?>" name="nome">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data e Hora de Início</label>
                        <input type="date" class="form-control" value="<?php print $row->data_hora_ini; ?>"  name="data_hora_ini">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data Hora Fim</label>
                        <input type="date" class="form-control" value="<?php print $row->data_hora_fim; ?>"  name="data_hora_fim">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data Criação</label>
                        <input type="date" class="form-control" value="<?php print $row->data_criacao; ?>" name="data_criacao">
                    </div>

                    <div class="btn-form my-5 d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm me-5">Editar Evento</button>
                        <a href="?page=index.php" class="btn btn-warning btn-sm">Voltar</a>
                    </div>

                </div>
            
            </div>
        </form>