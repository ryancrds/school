<h3 class="mb-5">Administração de clientes</h3>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="cliente">Nome</label>
        <input id="nome" type="name" name="nome" class="form-control" placeholder="Seu nome...">
    </div>
    <div class="form-group">
        <label for="cliente">Sobrenome</label>
        <input id="sobrenome" type="name" name="sobrenome" class="form-control" placeholder="Seu sobrenome...">
    </div>
    <div class="form-group">
        <label for="cliente">Telefone</label>
        <input id="telefone" type="text" name="telefone" class="form-control" placeholder="Seu Numero de telefone...">
    </div>
    <div class="form-group">
        <label for="cliente">Endereço</label>
        <input id="endereco" type="text" name="endereco" class="form-control" placeholder="Seu Endereço..">
    </div>
    <div class="form-group">
        <label for="cliente">Numero</label>
        <input id="numero" type="text" name="numero" class="form-control" placeholder="Numero da casa...">
    </div>
    <div class="form-group">
        <label for="cliente">Cidade</label>
        <input id="cidade" type="text" name="cidade" class="form-control" placeholder="Sua cidade...">
    </div>
    <div class="form-group">
        <label for="cliente">Bairro</label>
        <input id="bairro" type="text" name="bairro" class="form-control" placeholder="Seu Bairro...">
    </div>
    <div class="form-group">
        <label for="cliente">Estado</label>
        <select name="estado" id="cliente" class="form-control">
            <option selected>Selecione*</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá </option>
            <option value="AM">Amazonas </option>
            <option value="BA">Bahia </option>
            <option value="CE">Ceará </option>
            <option value="DF">Distrito Federal </option>
            <option value="ES">Espírito Santo </option>
            <option value="GO">Goiás </option>
            <option value="MA">Maranhão </option>
            <option value="MT">Mato Grosso </option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais </option>
            <option value="PA">Pará </option>
            <option value="PB">Paraíba </option>
            <option value="PR">Paraná </option>
            <option value="PE">Pernambuco </option>
            <option value="PI">Piauí </option>
            <option value="RJ">Rio de Janeiro </option>
            <option value="RN">Rio Grande do Norte </option>
            <option value="RS">Rio Grande do Sul </option>
            <option value="RO">Rondônia </option>
            <option value="RR">Roraima </option>
            <option value="SC">Santa Catarina </option>
            <option value="SP">São Paulo </option>
            <option value="SE">Sergipe </option>
            <option value="TO">Tocantins </option>
        </select>
    </div>
</div>

    <div class="form-group">
        <label for="imagem">Sua foto</label>
        <input id="foto" type="file" name="foto" class="form-control" placeholder="Sua foto...">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<hr>
<a href="/admin/clientes/" class="btn btn-secondary">Voltar</a>