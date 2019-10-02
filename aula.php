<table style="width:100%; border: 1px solid black">
  <tr style=" border: 1px solid black; ">
    <th style="border: 1px solid black"><?php echo 'Nome: '.$_GET["nome"];?></th>
    <th style="border: 1px solid black"><?php echo 'Idade: '.$_GET["idade"]; ?></th>
    <th style="border: 1px solid black">Filhos: </th>
  </tr>
  <tr id="trHide" style=" border: 1px solid black; ">
    <th style="border: 1px solid black"><?php echo 'Nome: '.$_GET["nomef"];?></th>
    <th style="border: 1px solid black"><?php echo 'Idade: '.$_GET["idadef"]; ?></th>
    <th style="border: 1px solid black">filhos</th>
  </tr>
  <tr id="trHide" style=" border: 1px solid black; ">
    <th style="border: 1px solid black"><?php echo 'Nome: '.$_GET["nome1"];?></th>
    <th style="border: 1px solid black"><?php echo 'Idade: '.$_GET["idade1"]; ?></th>
    <th style="border: 1px solid black">filhos</th>
  </tr>
  
  <?php
 if(isset($_GET["childn"])){
   echo '<br> '.$_GET["nome"].' não possui filhos.';
  echo '<script> document.getElementsById("trHide").style.display = "none";</script>';
 }
    ?>

  <?php
/*
    $formulario = $_GET;
    foreach($formulario as $key=>$value) {
      echo "<table>";
      echo '<tr style="border: 1px solid black">';
        echo '<th style="border: 1px solid black">'.$key.' '.$value.'</th>';
        echo '</tr>';
        echo '</table>';
        }
*/
  ?>