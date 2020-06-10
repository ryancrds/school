<h3 class="mb-5">Administração de clientes</h3>

<form method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="clientenome">Nome</label>
        <input id="clientenome" type="name" name="nome" class="form-control" placeholder="Seu nome..." value="<?php echo $data['cliente']['nome']; ?>">
    </div>
    <div class="form-group">
        <label for="clientesobrenome">Sobrenome</label>
        <input id="clientesobrenome" type="name" name="sobrenome" class="form-control" placeholder="Seu sobrenome..." value="<?php echo $data['cliente']['sobrenome']; ?>">
    </div>
    <div class="form-group">
        <label for="clientenumber">telefone</label>
        <input id="clientenumber" type="text" name="numero" class="form-control" placeholder="Seu Numero de telefone..." value="<?php echo $data['cliente']['telefone']; ?>">
    </div>
    <div class="form-group">
        <label for="clienteendereco">Endereço</label>
        <input id="clienteendereco" type="text" name="endereco" class="form-control" placeholder="Seu Endereço.." value="<?php echo $data['cliente']['endereco']; ?>">
    </div>
    <div class="form-group">
        <label for="clientenumero">Numero</label>
        <input id="clientenumero" type="text" name="numero" class="form-control" placeholder="Numero da casa..." value="<?php echo $data['cliente']['numero']; ?>">
    </div>
    <div class="form-group">
        <label for="clientecidade">Cidade</label>
        <input id="clientecidade" type="text" name="cidade" class="form-control" placeholder="Sua cidade..." value="<?php echo $data['cliente']['cidade']; ?>">
    </div>
    <div class="form-group">
        <label for="clientebairro">Bairro</label>
        <input id="clientebairro" type="text" name="bairro" class="form-control" placeholder="Seu Bairro..." value="<?php echo $data['cliente']['bairro']; ?>">
    </div>
    <div class="form-group">
        <label for="cliente">Estado</label>
        <select name="estado" id="cliente" class="form-control" value="<?php echo $data['cliente']['estado']; ?>">
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
    </div> -->
 </div>
    <div class="form-group">
        <label for="imagem">Sua foto</label>
        <input id="foto" type="file" name="foto" class="form-control" placeholder="Sua foto...">
        <img src="/<?php echo $data['cliente']['foto']; ?>" class="foto">
    </div>
       
   


<button type="submit" class="btn btn-primary">Salvar</button>

</form>

<hr>


<a href="/admin/clientes/<?php echo $data['cliente']['id']; ?>" class="btn btn-secondary">Voltar</a>