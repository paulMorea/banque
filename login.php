<?php
session_start();
$_SESSION['user'] = '';
require 'data/connexion.php';
foreach ($users as $user) {
    if (isset($_POST['pwd_name']) &&  isset($_POST['pwd'])) {
        if (
            $user['pwd_name'] === $_POST['pwd_name'] &&
            $user['pwd'] === $_POST['pwd']
        ) {
            $loggedUser = [
                'pwd_name' => $user['pwd_name'],
            ]; 
            $_SESSION['user'] = $user['pwd_name'];
            header('Location: index.php');
    exit();
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['pwd_name'],
                $_POST['pwd']
            );
        }
    }
}
    include 'template/header.php';
?>

    <div class="container-fluid login">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <?php if(isset($errorMessage)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errorMessage; ?>
                        </div>
                <?php endif; ?>
            </div>
        </div>   
        <div class="row my-5">
            <div class="col d-flex justify-content-center">
                <form action="" method="post">
                    <label for='pwd_name' class='col-12 my-2 textDeco text-center'>Entrez votre pseudo :</label>
                        <input type="text" name="pwd_name" size="20" class='d-flex justify-content-center' required />
                    <label for="pwd" class='col-12 my-2 textDeco text-center'>Entrez votre mot de passe :</label>
                        <input type="password" name="pwd" size="20" class='d-flex justify-content-center'required />
                    <div class="col-12 d-flex justify-content-center my-4">
                        <input type="submit" value="Envoyer" id="boutonForm"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
        


