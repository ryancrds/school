<h3 class="mb-5">Administração de usuários</h3>
<div class="row">
    <div class="col-3">
        <dl class="rol">
            <dt class="col-sm-12">Nome</dt>
            <dd class="col-sm-12"><?php echo $data['cliente']['nome']  . " " . $data['cliente']['sobrenome']; ?></dd>

            <dt class="col-sm-12">Endereço</dt>
            <dd class="col-sm-12"><?php echo $data['cliente']['endereco'] ?></dd>

            <dt class="col-sm-12">Numero</dt>
            <dd class="col-sm-12"><?php echo $data['cliente']['numero'] ?></dd>

            <dt class="col-sm-12">Bairro</dt>
            <dd class="col-sm-12"><?php echo $data['cliente']['bairro'] ?></dd>

            <dt class="col-sm-12">Cidade</dt>
            <dd class="col-sm-12"><?php echo $data['cliente']['cidade'] ?></dd>

            <dt class="col-sm-12">Estado</dt>
            <dd class="col-sm-12"><?php echo $data['cliente']['estado'] ?></dd>

            <dt class="col-sm-12">Telefone</dt>
            <dd class="col-sm-12"><?php echo $data['cliente']['telefone'] ?></dd>

            <dt class="col-sm-12">Criado em</dt>
            <dd class="col-sm-12"><?php echo date_format(date_create($data['cliente']['created']), "d/m/Y h:i"); ?></dd>

            <dt class="col-sm-12">Atualizado em</dt>
            <dd class="col-sm-12"><?php echo date_format(date_create($data['cliente']['updated']), 'd/m/Y h:i'); ?></dd>
        </dl>
    </div>
    <div class="col-2">
        <div><?php echo "Sua Imagem"?><img src="/<?php echo $data['cliente']['foto'] ?>" class='foto'></div>

        <div>
            <br>
            <a href="/admin/clientes/<?php echo $data['cliente']['id']; ?>/edit" class="btn btn-primary">editar</a>
            <br>
            <br>
            <a href="/admin/clientes/<?php echo $data['cliente']['id']; ?>/delete" class="btn btn-danger confirm">remover</a>
        </div>



    </div>
</div>



<a href="/admin/clientes" class="btn btn-secondary">Voltar</a>