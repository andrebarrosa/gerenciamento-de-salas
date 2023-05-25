
<h5> Responsaveis</h5>
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
                        <button onclick=\"if(confirm('Realmente deseja excluir?')){location.href='?page=salvar_responsavel&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger btn-sm'>Excluir</button>
                              </td>";
                    print "<tr>";
                }
                print "</table>";
            } else {
                print "<p class='alert alert-danger'> Não encontrou resultados</p>";
            }
        ?>
        