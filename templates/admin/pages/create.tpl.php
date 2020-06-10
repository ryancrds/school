<h3>Nova paginas</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="PagesTitle">Title</label>
        <input name="title" id="pagesTitle" type="text" class="form-control" placeholder="Aqui vai o titulo da pagina...">
    </div>

    <div class="form-group">
        <label for="pagesUrl">Url</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="URL Amigavel,Deixe em branco para deixar a pagina inicial...">
        </div>

        <div class="form-group">
        <label for="pagesTitle">Icon</label>
        <input name="icon" id="icon" type="text" class="form-control" placeholder="Icone Font Awesome">
    </div>

    </div>

    <!-- <br> -->

    

    <form method="post">
      <textarea id="mytextarea"></textarea>
    </form>



    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="/admin" class="btn btn-secondary btn-home">Ir para home</a>
</form>

