<?php
    $id = $_GET['id_carro'];
    echo "esse é o carro de N° $id";

    $sql="SELECT * FROM carros WHERE id_carro = {$id}";
    $query = mysqli_query($conect,$sql) or die("Erro ao executar a consulta".mysqli_error($conect));
    $dados = mysqli_fetch_assoc($query);
?>

    <h2>EDITAR AUTOMÓVEL</h2>

<form action="index.php?menu=atualizarCarro" method="post">
<div class="form-group">
        <label for="id_carro">N°</label>
        <input value="<?=$id?>" type="text" id="id_carro" name="id_carro">
    </div>
    <div class="form-group">
        <label for="modelo">Modelo</label>
        <input value="<?=$dados['modelo']?>" type="text" id="modelo" name="modelo">
    </div>
    <div class="form-group">
        <label for="marca">Marca</label>
        <input value="<?=$dados['marca']?>" type="text" id="marca" name="marca">
    </div>
    <div class="form-group">
        <label for="Valor">Valor</label>
        <input value="<?=$dados['valor']?>" type="number" id="valor" name="valor">
    </div>
    <div class="form-group">
        <label for="Ano">Ano</label>
        <input value="<?=$dados['ano']?>"type="date" id="ano" name="ano">
    </div>
    <div class="form-group">
        <label for="cor">Cor</label>
        <input value="<?=$dados['cor']?>" type="text" id="cor" name="cor">
    </div>
    <button type="submit">Editar</button>
</form>