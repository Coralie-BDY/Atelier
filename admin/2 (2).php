<?php
require_once("../inc/init.php");
require_once("header.php");
?>

<?php
 // chercher les infos en bdd
$r = $pdo->query("SELECT brand_car, model_car, motor, gearbox, cv_car,ch_car, first_registration_car, km FROM cars");

?>

<!-- création d'un tableau -->
<table class="table">
  <thead>
    <tr>
       <!--  création des colonnes en php -->
        <?php for ($i = 0; $i < $r->columnCount(); $i++) {
            $col = $r->getColumnMeta($i);
            $columns[] = $col['name']; ?>

            <th> <?php echo $columns[$i]; ?> </th>

        <?php } ?>


    </tr>
  </thead>
  <tbody>

<!--    création des lignes dans le tableau -->
    <?php while($car = $r->fetch(PDO::FETCH_ASSOC)) { ?>
        
        <tr>
            <?php foreach ($car as $key => $value) { ?>
                <td> <?php echo $value; ?> </td>
            <?php } ?>
   

    </tr>

 <?php } ?>

   
  </tbody>
</table>



<!-- appel du footer -->
<?php require_once("footer.php"); ?>