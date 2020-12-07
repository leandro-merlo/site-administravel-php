<h3>Administração de Páginas</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input id="pagesTitle" name="title" type="text" class="form-control" placeholder="Digite o título da página..." required>
    </div>
    <div class="form-group">
        <label for="pagesSlug">Slug</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>                
            </div>
            <input id="pagesSlug" name="slug" type="text" class="form-control" placeholder="Digite o slug, ou deixe em branco para página inicial..." required>
        </div>
    </div>
    <div class="form-group">
        <label for="pagesBody">Conteúdo</label>
        <input id="pagesBody" name="body" value="Edite o conteúdo da página" type="hidden">
        <trix-editor input="pagesBody"></trix-editor>        
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr />

<a class="btn btn-secondary" href="/admin">Voltar</a>