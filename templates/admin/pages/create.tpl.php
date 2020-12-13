<h3>Criação de Página</h3>

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
            <input id="pagesSlug" name="url" type="text" class="form-control" placeholder="Digite o slug, ou deixe em branco para página inicial...">
        </div>
    </div>
    <div class="form-group">
        <label for="pagesBody">Conteúdo</label>
        <input id="pagesBody" name="body" value="" type="hidden">
        <trix-editor input="pagesBody" placeholder="Edite o conteúdo da página"></trix-editor>        
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr />

<a class="btn btn-secondary" href="/admin/pages">Voltar</a>