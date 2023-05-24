<div class='card-box d-flex justify-content-between'>
     <div onclick="window.location.href='?page=salas'" class='card-item shadow p-3 mb-5 bg-white rounded d-flex justify-content-around align-items-center'>
          <div class="title">
               <h5>Salas</h5>
               <?php
               $sql = "SELECT COUNT(*) AS count FROM dim_salas";
               $res = $conn->query($sql);
               $row = $res->fetch_assoc();
               $qtd = $row['count'];

               echo "<p class='event-count'>" . $qtd . "</p>";
          ?>
          </div>
          <div class="icon">
               <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
               </svg>
          </div>
     </div>
     <div onclick="window.location.href='?page=eventos'" class='card-item shadow p-3 mb-5 bg-white rounded d-flex justify-content-around align-items-center'>
          <div class="title">
               <h5>Eventos</h5>
               <?php
               $sql = "SELECT COUNT(*) AS count FROM fatos_eventos";
               $res = $conn->query($sql);
               $row = $res->fetch_assoc();
               $qtd = $row['count'];

               echo "<p class='event-count'>" . $qtd . "</p>";
          ?>
          </div>
          <div class="icon">
               <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
               </svg>
          </div>
     </div>
     <div onclick="window.location.href='?page=responsavel'" class='card-item shadow p-3 mb-5 bg-white rounded d-flex justify-content-around align-items-center'>
          <div class="title">
               <h5>Responsavel</h5>
               <?php
               $sql = "SELECT COUNT(*) AS count FROM dim_responsavel";
               $res = $conn->query($sql);
               $row = $res->fetch_assoc();
               $qtd = $row['count'];

               echo "<p class='event-count'>" . $qtd . "</p>";
          ?>
          </div>
          <div class="icon">
               <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
               </svg>
          </div>
     </div>
     <div onclick="window.location.href='?page=usuarios'" class='card-item d-flex shadow p-3 mb-5 bg-white rounded justify-content-around align-items-center'>
          <div class="title">
               <h5>Usuário</h5>
               <p class="text-center">6</p>
          </div>
          <div class="icon">
               <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
               </svg>
          </div>
     </div>

     <div onclick="window.location.href='#'" class='card-item shadow p-3 mb-5 bg-white rounded d-flex justify-content-around align-items-center'>
          <div class="title">
               <h5>Relatórios</h5>
               <p class="text-center">0</p>
          </div>
          <div class="icon">
               <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
               </svg>
          </div>
     </div>
    
</div>
<div class='card-box shadow p-3 mb-5 bg-white rounded'>
     <div class='card-table'>
         <div class="detalhes-salas">
         <h5>Salas</h5>
         <?php
            $sql = "SELECT * FROM dim_salas";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered shadow p-3 mb-5 bg-white rounded'>";
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
                                    <button onclick=\"location.href='?page=editar_salas&id".$row->id."';\" class='btn btn-warning btn-sm'>Editar</button>
                                    <button class='btn btn-danger btn-sm'>Excluir</button>
                              </td>";
                    print "<tr>";
                }
                print "</table>";
            } else {
                print "<p class='alert alert-danger'> Não encontrou resultados</p>";
            }
        ?>
        <h5>Eventos</h5>

<?php
            $sql = "SELECT * FROM fatos_eventos";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered shadow p-3 mb-5 bg-white rounded'>";
                    print "<tr>";
                        print "<th>Nome</th>";
                        print "<th>Capacidade Maxima</th>";
                        print "<th>Descrição</th>";
                        print "<th>Ações</th>";
                    print "</tr>";
                while($row = $res->fetch_object()) {
                    print "<tr>";
                        print "<td>".$row->nome."</td>";
                        print "<td>".$row->data_hora_ini."</td>";
                        print "<td>".$row->data_hora_fim."</td>";
                        print "<td>".$row->data_criacao."</td>";
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
        <h5>Responsaveis</h5>

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
         <div class="detalhes-eventos">

         </div>
     </div>
</div>


</div>
</div>