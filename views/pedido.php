<?php
$conexao = mysqli_connect("localhost", "admpizza", "12345", "pizza");
$sql = "select * from sabor";
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);
?>
<h2>Faça seu pedido</h2>
<hr>
<form action="carrinho.php" method="post" onsubmit="return addToCart()">
    <label for="tamanho">Selecione o tamanho da pizza:</label>
    <select name="tamanho" id="tamanho" onchange="selectPizzaSize()">
        <option value="">---- Selecione ----</option>
        <option value="b">Broto</option>
        <option value="p">Pequena</option>
        <option value="m">Média</option>
        <option value="g">Grande</option>
        <option value="gg">Gigante</option>
    </select>
    <br>
    <br>
    <div id="opcoes_pedido">
        <p>Você selecionou <strong id="numSabores">0</strong> de <strong id="limiteSabores">0</strong> sabores</p>
        <div id="lista_sabores">
            <!-- container -->

            <?php
            while($array = mysqli_fetch_array($resultado)){ // para cada sabor
            ?>            
            <div class="sabor">
                <label>
                    <input type="checkbox" name="sabores[]" value="<?=$array['codigo']?>" onchange="updateCount()">
                    <div class="sabor_img">
                        <img src="assets/images/<?=$array['nomeImagem']?>" alt="<?=$array['nome']?>">
                    </div>
                    <div class="sabor_descricao">
                        <strong><?=$array['nome']?></strong>
                        <?=$array['ingredientes']?>
                    </div>
                </label>
            </div>
            <?php
            }
            ?>
        </div> <!-- fim container -->
        <br><br>
        <fieldset>
            <legend>Selecione a opção de borda:</legend>
            <label><input type="radio" name="borda" value="" checked>Sem borda</label><br>
            <label><input type="radio" name="borda" value="">Catupiry</label><br>
            <label><input type="radio" name="borda" value="">Cheddar</label><br>
            <label><input type="radio" name="borda" value="">Chocolate</label><br>
        </fieldset>
        <br><br>
        <input type="submit" value="Adicionar ao carrinho" name="adicionar">
    </div>
</form>