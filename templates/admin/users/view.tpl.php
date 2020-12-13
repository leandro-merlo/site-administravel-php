<h3>Detalhes do Usuário</h3>

<div class="row">
    <div class="col-3">
        <dl class="row">
            <dt class="col-sm-4">E-mail</dt>
            <dd class="col-sm-8"><?php echo $data['user']['email']?></dd>

            <dt class="col-sm-4">Criado em:</dt>
            <dd class="col-sm-8"><?php echo $data['user']['created_at']?></dd>

            <dt class="col-sm-4">Atualizado em:</dt>
            <dd class="col-sm-8"><?php echo $data['user']['updated_at']?></dd>
        </dl>
    </div>
</div>
<p>
    <a href="/admin/users/<?php echo $data['user']['id']?>/edit" class="btn btn-primary">Editar</a>
    <a href="/admin/users/<?php echo $data['user']['id']?>/delete" class="btn btn-danger confirm">Remover</a>
</p>
<a class="btn btn-secondary" href="/admin/users">Voltar</a>