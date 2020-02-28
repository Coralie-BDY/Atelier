<?php
require_once("../inc/init.php");
require_once("header.php");
?>

<?php
 // chercher les infos en bdd
$r = $pdo->query("SELECT id_invoice, first_name, last_name,  telephone, siret, police_number, brand_car, model_car  FROM invoices");

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

            <th> FACTURE </th>

    </tr>
  </thead>
  <tbody>

<!--    création des lignes dans le tableau -->
    <?php while($invoice = $r->fetch(PDO::FETCH_ASSOC)) { ?>
        
        <tr>
            <?php foreach ($invoice as $key => $value) { ?>
                <td> <?php echo $value; ?> </td>
            <?php } ?>

            <td> <a href="facturation.php?id_invoice=<?php echo $invoice['id_invoice'] ?>"> Télécharger</a> </td>
   

    </tr>

 <?php } ?>

   
  </tbody>
</table>



<!-- appel du footer -->
<?php require_once("footer.php"); ?>