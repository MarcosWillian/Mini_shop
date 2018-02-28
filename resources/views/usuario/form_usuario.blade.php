
{{ csrf_field() }}

<div class="form-group">
	<label for="nome">Nome:</label>
	<input type="text" class="form-control" id="nome" name="nome" required>
</div>
<div class="form-group">
	<label for="email">Email:</label>
	<input type="email" class="form-control" id="email" name="email" required>
</div>
<div class="form-group">
	<label for="endereco">Endereço:</label>
	<input type="text" class="form-control" id="endereco" name="endereco" required>
</div>
<div class="form-group">
	<label for="imagem">Foto: </label>
    <input type="file" id="imagem" name="imagem">
    <p class="help-block">Foto é opcional</p>
</div>