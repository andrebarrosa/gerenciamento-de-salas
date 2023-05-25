<div class="client-table p-2" id="clientTable">
    <button id="btn-new-client" class="btn btn-success btn-sm my-3">Nova sala</button>

    <h5 id="title-client">Salas /<a href="?page=index.php">Dashboard</a></h5>
    <div id="new-table-client">
    <?php
            $sql = "SELECT * FROM dim_salas";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered shadow p-3 mb-5 bg-white rounded'>";
                    print "<tr>";
                        print "<th class='small-height'>Nome</th>";
                        print "<th class='small-height'>Capacidade Maxima</th>";
                        print "<th class='small-height'>Descrição</th>";
                        print "<th class='small-height'>Ações</th>";
                    print "</tr>";
                while($row = $res->fetch_object()) {
                    print "<tr>";
                        print "<td class='small-height'>".$row->nome."</td>";
                        print "<td class='small-height'>".$row->capacidade_max."</td>";
                        print "<td class='small-height'>".$row->descricao."</td>";
                        print "<td class='small-height'>
                                    <button onclick=\"location.href='?page=editar_salas&id=".$row->id."';\" class='btn btn-warning btn-sm'>Editar</button>
                                    <button onclick=\"if(confirm('Realmente deseja excluir?')){location.href='?page=salvar_salas&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger btn-sm'>Excluir</button>
                                    <a href='?page=lista_salas' class='btn btn-primary btn-sm'>Ver</a>
                                </td>";
                    print "<tr>";
                }
                print "</table>";
            } else {
                print "<p class='alert alert-danger'> Não encontrou resultados</p>";
            }
        ?>
    </div>
    <div id="form-new-client" class="shadow p-3 mb-5 bg-white rounded">
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
                        <button class="btn btn-primary btn-sm me-5">Salvar sala</button>
                        <a href="?page=index.php" class="btn btn-warning btn-sm">Voltar</a>
                    </div>

                </div>
            
            </div>
        </form>
    </div>

</div>








        