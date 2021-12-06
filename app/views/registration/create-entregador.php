<main class="container">
    <div id="create-container" class="col-md-6 offset-md-3">
        <h2 class="mb-3">Cadastro de Entregadores</h2>
        <form action="?i=dashboard/entregadores" method="POST" class="needs-validation" novalidate>

            <div class="form-group mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome..." required>
                <div class="invalid-feedback">
                    Este campo é de preenchimento obrigatório
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o CPF..." required>
                <div class="invalid-feedback">
                    Este campo é de preenchimento obrigatório
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <select name="bairro" id="bairro" class="form-control" required>
                    <optgroup label="A">
                        <option value="Aloísio Souto Pinto">Aloísio Souto Pinto</option>
                        <option value="Aluízio Souto Pinto">Aluízio Souto Pinto</option>
                    </optgroup>
                    <optgroup label="B">
                        <option value="Bela Vista">Bela Vista</option>
                        <option value="Aluízio Souto Pinto">Boa Vista</option>
                        <option value="Brasília">Brasília</option>
                    </optgroup>
                    <optgroup label="C">
                        <option value="Centro">Centro</option>
                        <option value="Cohab 1">Cohab 1</option>
                        <option value="Cohab 2">Cohab 2</option>
                        <option value="Cohab 3">Cohab 3</option>
                    </optgroup>
                    <optgroup label="D">
                        <option value="Dom Helder Camara">Dom Helder Camara</option>
                    </optgroup>
                    <optgroup label="F">
                        <option value="Francisco S S Figueira">Francisco S S Figueira</option>
                        <option value="Francisco Simão dos Santos Fig">Francisco Simão dos Santos Fig</option>
                    </optgroup>
                    <optgroup label="H">
                        <option value="Heliopoles">Heliopoles</option>
                        <option value="Heliopolis">Heliopolis</option>
                        <option value="Helipolis">Helipolis</option>
                    </optgroup>
                    <optgroup label="J">
                        <option value="Jardim Paulista">Jardim Paulista</option>
                        <option value="José Maria Dourado">José Maria Dourado</option>
                    </optgroup>
                    <optgroup label="L">
                        <option value="Lacerdópolis">Lacerdópolis</option>
                    </optgroup>
                    <optgroup label="M">
                        <option value="Magano">Magano</option>
                        <option value="Mandaú">Mandaú</option>
                    </optgroup>
                    <optgroup label="N">
                        <option value="Novo Heliopolis">Novo Heliopolis</option>
                    </optgroup>
                    <optgroup label="S">
                        <option value="Santo Antônio">Santo Antônio</option>
                        <option value="São José">São José</option>
                        <option value="Severiano de Moraes Filho">Severiano de Moraes Filho</option>
                        <option value="Sítio Santa Terezinha">Sítio Santa Terezinha</option>
                    </optgroup>
                    <optgroup label="V">
                        <option value="Vila Quartel">Vila Quartel</option>
                    </optgroup>
                    <optgroup label="Z">
                        <option value="Zona Rural">Zona Rural</option>
                    </optgroup>
                </select>
            </div>

            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-outline-primary mt-2" value="Criar">
            </div>
        </form>
    </div>
</main>