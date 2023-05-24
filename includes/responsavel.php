<div class="client-table p-2" id="clientTable">
    <button id="btn-new-client" class="btn btn-success btn-sm my-3">Nov Responsavel</button>

    <h5 id="title-client">Responsavel /<a href="?page=index.php">Dashboard</a></h5>
    <div id="new-table-client">
    <?php
            $sql = "SELECT * FROM dim_responsavel";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered shadow p-3 mb-5 bg-white rounded'>";
                    print "<tr>";
                        print "<th>Nome</th>";
                        print "<th>Email</th>";
                        print "<th>DDD</th>";
                        print "<th>Telefone</th>";
                        print "<th>Data de Criação</th>";
                        print "<th>Data de Edição</th>";
                        print "<th>Foto</th>";
                        print "<th>Usuário</th>";
                        print "<th>Senha</th>";
                        print "<th>Ações</th>";
                    print "</tr>";
                while($row = $res->fetch_object()) {
                    print "<tr>";
                        print "<td>".$row->nome."</td>";
                        print "<td>".$row->email."</td>";
                        print "<td>".$row->ddd."</td>";
                        print "<td>".$row->telefone."</td>";
                        print "<td>".$row->data_criacao."</td>";
                        print "<td>".$row->data_edicao."</td>";
                        print "<td>".$row->foto."</td>";
                        print "<td>".$row->usuario."</td>";
                        print "<td>".$row->senha."</td>";
                        print "<td>
                                    <button onclick=\"location.href='?page=editar_responsavel&id=".$row->id."';\" class='btn btn-warning btn-sm'>Editar</button>
                                    <button class='btn btn-danger btn-sm'>Excluir</button>
                              </td>";
                    print "<tr>";
                }
                print "</table>";
            } else {
                print "<p class='alert alert-danger'> Não encontrou resultados</p>";
            }
        ?>
    </div>
    <div id="form-new-client">
        <form action="?page=salvar_salas" method="POST" class="form-boxs-clients">
            <input type="hidden" name="acao" value="cadastrar">
            <h5>CADASTRO DE RESPONDAVELS</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">Nome:</label>
                        <input type="text" class="form-control" name="nome">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">DDD</label>
                        <input type="text" class="form-control" name="ddd">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control" name="telefone">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data de Criação</label>
                        <input type="date" class="form-control" name="data_criacao">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data de Edição</label>
                        <input type="date" class="form-control" name="data_edicao">
                    </div>

                      <div class="mt-2 box-form">
                        <label for="">Foto</label>
                        <input type="text" class="form-control" name="foto">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Usuário</label>
                        <input type="text" class="form-control" name="usuario">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Senha</label>
                        <input type="password" class="form-control" name="senha">
                    </div>

                    <div class="btn-form my-5 d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm me-5">Salvar Responsavel</button>
                        <a href="?page=index.php" class="btn btn-warning btn-sm">Voltar</a>
                    </div>

                </div>
            
            </div>
        </form>
    </div>

</div>







        