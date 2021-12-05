<?php
require 'data/accounts.php';
include 'template/header.php';
include 'template/layout.php';
include 'template/navbar.php';
?>

<section >
  
</section>

<main class="container-fluid index">
  
  <div class="row">
    <div class="col-12">
      <h3 id='titleIndex'>Vos comptes bancaires :</h3>
    </div>
  </div>
  
  <div class="row d-flex justify-content-evenly">
<!-- CARD -->
  <?php foreach(get_accounts() as $account) : ?>

      <div class="card col-4 my-5" style="width: 18rem;">
      
        <div class="card-body">
          <h5 class="card-title"><?php echo $account['name']; ?></h5>
          <p class="card-text"><?php echo $account['number']; ?></p>
        </div>

        <ul class="list-group list-group-flush">
          <li class="list-group-item">Propriétaire: <?php echo $account['owner']; ?></li>
          <li class="list-group-item">Solde: <?php echo $account['amount']; ?>€</li>
          <li class="list-group-item">Dernière opération: <br/><?php echo $account['last_operation']; ?></li>
        </ul>

        <div class="card-body">
          <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic outlined example">
            <?php
            echo '<a class="btn" 
            href="./compte.php?name=', urlencode($account['name']), 
            '&number=', urlencode($account['number']),
            '&owner=', urlencode($account['owner']),
            '&amount=', urlencode($account['amount']),
            '&last_operation=', urlencode($account['last_operation']),
            '" role="button">Voir</a>';
            ?>
          </div>
        </div>

      </div> 
    <?php endforeach ?>

  </div>
  
</main>
  

<?php include 'template/footer.php'?>
