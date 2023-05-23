<div class="client-table p-2" id="clientTable">
    <button id="btn-new-client" class="btn btn-success btn-sm my-3">Novo Evento</button>

    <h5 id="title-client">Eventos /<a href="?page=index.php">Dashboard</a></h5>
    <div id="new-table-client">
    <?php
            $sql = "SELECT * FROM dim_salas";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered'>";
                    print "<tr>";
                        print "<th>Nome</th>";
                        print "<th>Capacidade Maxima</th>";
                        print "<th>Descrição</th>";
                        print "<th>Ações</th>";
                    print "</tr>";
                while($row = $res->fetch_object()) {
                    print "<tr>";
                        print "<td>".$row->nome."</td>";
                        print "<td>".$row->capacidade_max."</td>";
                        print "<td>".$row->descricao."</td>";
                        print "<td>
                                    <button class='btn btn-warning btn-sm'>Editar</button>
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
            <h5>CADASTRO DE EVENTOS</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">Nome:</label>
                        <input type="text" class="form-control" name="nome">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data e Hora de Início</label>
                        <input type="date" class="form-control" name="data_hora_inicio">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data Hora Fim</label>
                        <input type="date" class="form-control" name="data_hora_fim">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data Criação</label>
                        <input type="date" class="form-control" name="data_criacao">
                    </div>

                    <div class="btn-form my-5 d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm me-5">Salvar ala</button>
                        <a href="?page=index.php" class="btn btn-warning btn-sm">Voltar</a>
                    </div>

                </div>
            
            </div>
        </form>
    </div>

</div>







        