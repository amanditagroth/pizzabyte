<?php
include_once("views/layout/topo.php");
?>   
    <main>
    <?php
    if(isset($_GET['acao'])){
        include_once("views/{$_GET['acao']}.php");
    }
    else{
        include_once("views/inicio.php");
    }
    ?>
    </main>
<?php
include_once("views/layout/rodape.php");
?>  