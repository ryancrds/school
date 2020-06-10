<h3 class="mb-5">Administração de clientes</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome Completo</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['clientes'] as $cliente): ?>
        <tr>
            <td><?php echo $cliente['id']; ?></td>
            <td><?php echo $cliente['nome'] . " " . $cliente['sobrenome']; ?></td>
            <td><?php echo $cliente['endereco']?></td>
            <td><?php echo $cliente['bairro']?></td>
            <td><?php echo $cliente['cidade']?></td>
            <td><?php echo $cliente['foto'] ?></td>
            
            <td class="text-right">
                <a href="/admin/clientes/<?php echo $cliente['id']; ?>" class="btn btn-primary btn-sm">ver</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="/admin/clientes/create" class="btn btn-secondary">Novo</a>