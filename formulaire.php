<?php
include 'template/header.php';
include 'template/navbar.php'
?>

<header class="d-flex justify-content-center mt-5 titleBanque">
  <h1>BANQUE</h1>
</header>

<main class="container-fluid">
    <h3 class='titleh3'>FORMULAIRE :</h3>
<!-- FORMULAIRE-->

  <form name="contactForm" class="container">
    <div class="row">
  <!-- object -->
  <div class="col-6">
  <select class="form-select" aria-label="Default select example" id="mySelect" onchange="typeCompte()">
      <option selected>Création de compte :</option>
      <option value="Compte courant" id="cc">Compte courant</option>
      <option value="Livret A">Livret A</option>
      <option value="LEP">LEP</option>
    </select>
    <!-- ??????? -->
      <div class="col-6 mt-3">
        <input type="text" class="form-control" placeholder="depot" id="depot" aria-label="depot">
        <p id="texteInput"></p>
        <button>Valider montant</button>
      </div>
      <div class="col-6 mt-3">
        <input type="text" class="form-control" placeholder="Test" id="lastName" aria-label="Last name">
      </div>
      <div class="col-6" ><p id="firstNameTxt"></p></div>
      <div class="col-6" ><p id="lastNameTxt"></p></div>
      <!-- ???? -->
      <div class="col-12">
        <label for="formGroupExampleInput" class="form-label">TEST :</label>
        <input type="text" class="form-control" id="phone"  placeholder="TEST">
      </div>
      <div class="col-12" ><p id="phoneError"></p></div>
      
      
      <!-- message -->
      <div class="form-floating">
        <textarea class="form-control" id="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
        <label for="floatingTextarea2">Message</label>
      </div>
      <div class="col-12" ><p id="messageCount"></p></div>

    </div>
  </form>
      <div class="col-6" id="new"></div> 
  </div>
</main>

 <?php include 'template/footer.php' ?>