<?php
include 'template/header.php';
include 'template/navbar.php';
?>
<div class="container-fluid formulaireCompte">
    <div class="row">
        <div class="col-6 d-flex justify-content-center containerInput">
            <form action="formulaireCompte.php" method="post"> 
                <div class='col-12 my-2 textDeco'>Entrez votre prénom :</div>
                    <input type="text" name="firstName" size="20" required />
                <div class='col-12 my-2 textDeco'>Entrez votre nom :</div>
                    <input type="text" name="lastName" size="20" required />
                <div class='col-12 my-2 textDeco'>Type de compte :</div>
                <div class='col-12'>
                    <input type="radio" name="compte" value="Compte courant" checked class="text-center"/>Compte courant<br />
                    <input type="radio" name="compte" value="Livret A" />Livret A<br />
                    <input type="radio" name="compte" value="PEL" />PEL<br />
                </div>
                <div class="col-12 d-flex justify-content-center my-4">
                    <input type="submit" value="Envoyer" id="boutonForm"/>
                </div>
            </form>
        </div>
        <div class="col-6">
            <?php 
            if(!empty($_POST) && isset($_POST['firstName'])&& isset($_POST['lastName'])&& isset($_POST['compte'])){
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $compte = $_POST['compte'];
            }else{
                $error = 'Merci de remplir le formulaire pour créer votre compte';
            }
            ?>
            <h1 id="formTitle">Votre compte :</h1>
            <div class="col-12">
                <?php if(isset($error)): ?>
                    <?php echo $error?>
                <?php else: ?>
                    <div class="col-12 px-2">Prénom : <?php echo $firstName?></div>
                    <div class="col-12 px-2">Nom : <?php echo $lastName?></div>
                    <div class="col-12 px-2">Compte : <?php echo $compte?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php'; ?>