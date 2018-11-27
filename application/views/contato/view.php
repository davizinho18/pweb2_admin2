<h2><?php echo $contato['nome'] ?></h2>
<hr>
<p>Nome: <?php echo $contato['nome'] ?></p>
<p>Email: <?php echo $contato['email'] ?></p>
<p>Telefone: (<?php echo $contato['ddd'] ?>) <?php echo $contato['numero'] ?></p>
<a href="/t" class="btn btn-danger btn-sm" style="color:white">Voltar</a> |
<a href="<?php echo site_url('contatos/edit/'.$contato['id']); ?>" class="btn btn-primary btn-sm" style="color:white">Editar</a> 