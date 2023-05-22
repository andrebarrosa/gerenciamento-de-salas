<div class="client-table p-2" id="clientTable">
    <button id="btn-new-client" class="btn btn-success btn-sm my-3">Novo Evento</button>

    <h5 id="title-client">Eventos / <a href="?page=index.php">Dashboard</a></h5>
    <div id="new-table-client">
   
    </div>
    <div id="form-new-client">
        <form action="?page=salvar_cliente" method="POST" class="form-boxs-clients">
            <input type="hidden" name="acao" value="cadastrar">
            <h5>CADASTRO DE EVENTOS</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">CPF / CNPJ:</label>
                        <input type="text" class="form-control" name="cpf">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Nome / Razão social:</label>
                        <input type="text" class="form-control" name="nome">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone comercial:</label>
                        <input type="text" class="form-control" name="telefone_comercial">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone residêncial:</label>
                        <input type="text" class="form-control" name="telefone_residencial">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone / WhatsApp:</label>
                        <input type="text" class="form-control" name="telefone_whatsapp">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Email:</label>
                        <input type="text" class="form-control" name="email">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Tipo de cliente:</label>
                        <input type="text" class="form-control" name="tipo_cliente">
                    </div>

                </div>
                <div class="form-right col-6">

                    <div class="mt-2 box-form">
                        <label for="">Cep:</label>
                        <input type="text" class="form-control" name="cep">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Rua:</label>
                        <input type="text" class="form-control" name="rua">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Número:</label>
                        <input type="text" class="form-control" name="numero">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Complemento:</label>
                        <input type="text" class="form-control" name="complemento">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Bairro:</label>
                        <input type="text" class="form-control" name="bairro">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Cidade:</label>
                        <input type="text" class="form-control" name="cidade">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Estado:</label>
                        <input type="text" class="form-control" name="estado">
                    </div>

                </div>
            </div>
            <div class="btn-form my-5 d-flex justify-content-center">
                <button class="btn btn-primary btn-sm me-5">Salvar eventos</button>
                <button class="btn btn-warning btn-sm">Voltar</button>
            </div>
        </form>
    </div>

</div>







        