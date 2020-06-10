<h3 class="mb-5">Edição de página</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle">Titulo</label>
        <input name="title" id="pagesTitle" type="text" class="form-control" placeholder="Aqui vai o título da página..." required value="<?php echo $data['page']['title'] ?>">
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="URL amigável, deixe em branco para informar a página inicial..." required value="<?php echo $data['page']['url'] ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="pagesTitle">Icon</label>
        <input name="icon" id="icon" type="text" class="form-control" placeholder="Icone Font Awesome" required value="<?php echo htmlentities($data['page']['icon']) ?>">
    </div>

   
      <textarea name="body" id="mytextarea"> <?php echo $data['page']['body'] ?> </textarea>
   



    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr>

<a href="/admin/pages/" class="btn btn-secondary">Voltar</a>