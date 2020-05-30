<h3>Detalhes de paginas</h3>

<div class="row">
    <div class="col-3">
        <dl class="row">
            <dt class="col-sm-4">Titulo</dt>
            <dd class="col-sm-8">
                <div class="alert alert-primary" role="alert" >
                    <?php echo $data['page']['title'] ?>
                </div>
            </dd>


            <dt class="col-sm-4">URL (link)</dt>
            <dd class="col-sm-8"><a href="/<?php echo $data['page']['url'] ?>" target="blank">
                    <div class="alert alert-primary" role="alert">
                    <?php echo $data['page']['url'] ?>
                    </div>
                </a></dd>


            <dt class="col-sm-4">Criado em:</dt>
            <dd class="col-sm-8">
                <div class="alert alert-primary" role="alert">
                <?php echo $data['page']['created'] ?>
                </div>
            </dd>


            <dt class="col-sm-4"><i>Atualizado em:</i></dt>
            <dd class="col-sm-8">
                <div class="alert alert-primary" role="alert">
                <?php echo $data['page']['updated'] ?>
                </div>
            </dd>
        </dl>
    </div>
    <div class="col bg-light">
        <?php echo $data['page']['body'] ?>
    </div>
</div>

<p>
    <a href="/admin/pages/<?php echo $data['page']['id'] ?>/edit" class="btn btn-primary">editar</a>
    <a href="/admin/pages/<?php echo $data['page']['id'] ?>/delete" class="btn btn-danger confirm">remover</a>
</p>

<a href="/admin/pages" class='btn btn-secondary'>Voltar</a>