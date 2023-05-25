<h5>Eventos</h5>
<?php
            $sql = "SELECT * FROM fatos_eventos";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered shadow p-3 mb-5 bg-white rounded'>";
                    print "<tr>";
                        print "<th>Nome</th>";
                        print "<th>Data Início</th>";
                        print "<th>Data Fim</th>";
                        print "<th>Data Criação</th>";
                        print "<th>Ações</th>";
                    print "</tr>";
                while($row = $res->fetch_object()) {
                    print "<tr>";
                        print "<td>".$row->nome."</td>";
                        print "<td>".$row->data_hora_ini."</td>";
                        print "<td>".$row->data_hora_fim."</td>";
                        print "<td>".$row->data_criacao."</td>";
                        print "<td>
                        <button onclick=\"location.href='?page=editar_eventos&id=".$row->id."';\" class='btn btn-warning btn-sm'>Editar</button>
                        <button onclick=\"if(confirm('Realmente deseja excluir?')){location.href='?page=salvar_eventos&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger btn-sm'>Excluir</button>
                        <a href='?page=lista_eventos' class='btn btn-primary btn-sm'>Ver</a>
                        </td>";
                    print "<tr>";
                }
                print "</table>";
            } else {
                print "<p class='alert alert-danger'> Não encontrou resultados</p>";
            }
        ?>