<h2><?php echo $title," ", $contato['nome']; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('contatos/edit/'.$contato['id']); ?>
    <div class="form-group row">
        <label for="nome" class="col-sm-1 col-form-labe">Nome:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nome" size="50" value="<?php echo $contato['nome'] ?>" />
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-1 col-form-labe">Email:</label>
        <div class="col-sm-6">
            <input type="email" name="email" class="form-control" size="50" value="<?php echo $contato['email'] ?>" />
        </div>
    </div>
    <div class="form-group row">
        <label for="numero" class="col-sm-1 col-form-labe">Numero:</label>
        <div class="col-sm-6 form-inline" >
            <input type="number" style="width: 60px" max="99" min="01" name="ddd" class="form-control" size="50" value="<?php echo $contato['ddd'] ?>" />
            <input type="number" name="numero" class="form-control" size="50" value="<?php echo $contato['numero'] ?>" />
        </div>
    </div>
    <input type="submit" name="submit" value="Salvar" class="btn btn-success" />
    <a href="/t/" class="btn btn-danger">Cancelar</a>
</form>
