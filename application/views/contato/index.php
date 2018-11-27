<h1><?php echo $title; ?></h1> <a href="<?php echo site_url('contatos/create/'); ?>" class="btn btn-success" style="color:white">Novo Contato</a>
<hr>
<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">email</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contatos as $contato): ?>
            <tr>
                <td scope="row"><?php echo $contato['id']; ?></td>
                <td><?php echo $contato['nome']; ?></td>
                <td>
                    (<?php echo $contato['ddd']; ?>)
                    <?php echo $contato['numero']; ?>
                </td>
                <td><?php echo $contato['email']; ?></td>
                <td>
                    <a href="<?php echo site_url('contatos/'.$contato['id']); ?>" class="btn btn-primary btn-sm">Visualizar</a> | 
                    <a href="<?php echo site_url('contatos/edit/'.$contato['id']); ?>" class="btn btn-warning btn-sm" style="color:white">Editar</a> | 
                    <a href="<?php echo site_url('contatos/delete/'.$contato['id']); ?>" onClick="return confirm('Você tem certeza que deseja apagar esse contato?')" class="btn btn-danger btn-sm">Apagar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



