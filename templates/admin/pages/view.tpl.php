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
            <dd class="col-sm-8"><a href="/" target="blank">
                    <div class="alert alert-primary" role="alert">
                        Abrir
                    </div>
                </a></dd>


            <dt class="col-sm-4">Criado em:</dt>
            <dd class="col-sm-8">
                <div class="alert alert-primary" role="alert">
                    Não definido!
                </div>
            </dd>


            <dt class="col-sm-4"><i>Atualizado em:</i></dt>
            <dd class="col-sm-8">
                <div class="alert alert-primary" role="alert">
                    Em criaçao 3 or 54
                </div>
            </dd>
        </dl>
    </div>
    <div class="col bg-light">
        <h3>Pagina Inicial</h3>
        <p>Está é a pagina Inicial</p>
    </div>
</div>

<p>
    <a href="/admin/pages/1/edit" class="btn btn-primary">editar</a>
    <a href="/admin/pages/1/delete" class="btn btn-danger">remover</a>
</p>

<a href="/admin/pages" class='btn btn-secondary'>Voltar</a>