<h3 class="mb-5">Administraçao de paginas</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>titulo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data['pages'] as $page) : ?>
       
        <tr>
            <td><?php echo $page['id']; ?></td>
            <td><a href="/admin/pages/<?php echo $page['id']; ?>"><?php echo $page['title']; ?></a></td>
            <td class="text-right">
                <a href="/admin/pages/<?php echo $page['id']; ?>" class="btn btn-primary btn-sm">ver</a>
            </td>
        </tr>
 <?php endforeach; ?>
    </tbody>
</table>

<a href="/admin/pages/create" class="btn btn-secondary btn-lg active">Novo</a>
<?php foreach ($data['pages'] as $page) ;