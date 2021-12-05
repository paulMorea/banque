<?php
require 'data/accounts.php';
include 'template/header.php';
include 'template/navbar.php'
?>



<div class="container containerCompte">
    <div class="row py-5 rowCompte">
        <div class="col-12 px-5">
            <h1 id='compteTitle'><?php echo $_GET['name']; ?> :</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-8 text-center my-3">N° Compte : <?php echo $_GET['number']; ?></div>
            <div class="col-8 text-center my-3">Propriétaire : <?php echo $_GET['owner']; ?></div>
            <div class="col-8 text-center my-3">Solde : <?php echo $_GET['amount']; ?>€</div>
            <div class="col-8 text-center my-3">Opération : <?php echo $_GET['last_operation']; ?></div>
        </div>
    </div>
</div>






<?php include 'template/footer.php'?>