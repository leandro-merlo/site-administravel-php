<h3>Edição de Página</h3>

<form method="POST">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input id="pagesTitle" name="title" type="text" class="form-control" placeholder="Digite o título da página..." required value="<?php echo $data['page']['title']?>">
    </div>
    <div class="form-group">
        <label for="pagesSlug">Slug</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>                
            </div>
            <input id="pagesSlug" name="slug" type="text" class="form-control" placeholder="Digite o slug, ou deixe em branco para página inicial..." value="<?php echo $data['page']['url']?>">
        </div>
    </div>
    <div class="form-group">
        <label for="pagesBody">Conteúdo</label>
        <input id="pagesBody" name="body" type="hidden" value="<?php echo htmlspecialchars($data['page']['body'] )?>">
        <trix-editor input="pagesBody" placeholder="Edite o conteúdo da página"></trix-editor>        
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr />

<a class="btn btn-secondary" href="/admin/pages/<?php echo $data['page']['id']?>">Voltar</a>