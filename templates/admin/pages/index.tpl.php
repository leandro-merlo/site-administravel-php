<h3 class="mb-5">Administração de Páginas</h3>

<table class="table table-hover table-stripped">
    <thead>
        <tr>
            <th>#</th>
            <th>Título</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data['pages'] as $page): ?>
        <tr>
            <?php $id = $page['id'] ?>
            <td><?= $id; ?></td>
            <td><a href="/admin/pages/<?= $id; ?>"><?= $page['title']; ?></a></td>
            <td class="text-right"><a href="/admin/pages/<?= $id; ?>" class="btn btn-primary btn-sm">ver</a></td>
        </tr>
        <?php endforeach; ?>
        <?php if (isset($data['users']) and count($data['users']) <= 0) :?>
            <tr class="text-center">
                <td colspan='2'>Nenhum registro encontrado!</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


<a class="btn btn-secondary" href="/admin/pages/create">Novo</a>