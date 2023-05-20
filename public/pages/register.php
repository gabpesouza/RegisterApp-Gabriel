
    <div class="col-lg-6 col-xl-6 card-wrapper">
        <form method="POST" action="?page=success">
            <div class="card-register">
                <div class="card-center">
                    <div class="card-header"><span>Registro</span></div>
                    <div class="d-flex flex-wrap align-items-center mt-2 justify-content-between w-100">
                        <div class="form-group col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                            <label class="form-label" for="nome">Nome:</label>
                            <input class="form-control" id="nome" name="nome" type="text">
                        </div>
                        <div class="col-1"></div>
                        <div class="form-group col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                            <label class="form-label" for="email">Email:</label>
                            <input class="form-control" id="email" name="email" type="text">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mt-2 justify-content-between w-100">
                        <div class="form-group col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                            <label class="form-label" for="cep">Cep:</label>
                            <input onchange="loadAdressFromApi(this.value);" class="form-control" id="cep" name="cep" type="text">
                        </div>
                        <div class="col-1"></div>
                        <div class="form-group col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                            <label class="form-label" for="tipo_logradouro">Tipo logradouro:</label>
                            <input class="form-control" id="tipo_logradouro" name="tipo_logradouro" type="text">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mt-2 justify-content-between w-100">
                        <div class="form-group col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                            <label class="form-label" for="estado">Estado:</label>
                            <input class="form-control" id="estado" name="estado" type="text">
                        </div>
                        <div class="col-1"></div>
                        <div class="form-group col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                            <label class="form-label" for="cidade">Cidade:</label>
                            <input class="form-control" id="cidade" name="cidade" type="text">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mt-2 justify-content-between w-100">
                        <div class="form-group col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                            <label class="form-label" for="logradouro">Logradouro:</label>
                            <input class="form-control" id="logradouro" name="logradouro" type="text">
                        </div>
                        <div class="col-1"></div>
                        <div class="form-group col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                            <label class="form-label" for="bairro">Bairro:</label>
                            <input class="form-control" id="bairro" name="bairro" type="text">
                        </div>
                    </div>
                    <div class="d-flex  mt-4 justify-content-center w-100">
                        <button class="btn btn-primary btn-block">Cadastrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

