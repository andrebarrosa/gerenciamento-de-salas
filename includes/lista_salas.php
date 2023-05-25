<h5>Salas</h5>
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
                              </td>";
                    print "<tr>";
                }
                print "</table>";
            } else {
                print "<p class='alert alert-danger'> Não encontrou resultados</p>";
            }
        ?>