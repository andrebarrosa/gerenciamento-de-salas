<?php
    $sql = "SELECT * FROM dim_responsavel WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

        <form action="?page=salvar_responsavel" method="POST" class="form-boxs-clients">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php  print $row->id;?>">
            <h5>EDITAR RESPONDAVELS</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">Nome:</label>
                        <input type="text" class="form-control"value="<?php  print $row->nome;?>" name="nome">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Email</label>
                        <input type="email" class="form-control"value="<?php  print $row->email;?>" name="email">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">DDD</label>
                        <input type="text" class="form-control"value="<?php  print $row->ddd;?>" name="ddd">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control"value="<?php  print $row->telefone;?>" name="telefone">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data de Criação</label>
                        <input type="date" class="form-control" value="<?php  print $row->data_criacao;?>" name="data_criacao">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data de Edição</label>
                        <input type="date" class="form-control" value="<?php  print $row->data_edicao;?>" name="data_edicao">
                    </div>

                      <div class="mt-2 box-form">
                        <label for="">Foto</label>
                        <input type="text" class="form-control" value="<?php  print $row->foto;?>"name="foto">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Usuário</label>
                        <input type="text" class="form-control" value="<?php  print $row->usuario;?>" name="usuario">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Senha</label>
                        <input type="password" class="form-control" value="<?php  print $row->senha;?>" name="senha">
                    </div>

                    <div class="btn-form my-5 d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm me-5">Editar Responsavel</button>
                        <a href="?page=index.php" class="btn btn-warning btn-sm">Voltar</a>
                    </div>

                </div>
            
            </div>
        </form>