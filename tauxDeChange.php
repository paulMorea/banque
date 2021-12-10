<?php
include 'template/header.php';
include 'template/navbar.php'
?>
<main class="container-fluid containerTaux">
  <div class="d-flex justify-content-center mt-5 titleBanque">
    <h1>BANQUE</h1>
  </div>
  <div class="col-12">
    <h3 class='titleh3'>TAUX DE CHANGE :</h3>
  </div>
  <!-- TABLEAU -->
  <div class="row">
    <table class="table table-bordered tauxTable">
      <tbody class="taux">
        <tr id="devise">
        <tr id="taux"> 
        </tr>
      </tbody>
    </table>
  </div>
</main>

<?php include 'template/footer.php' ?>