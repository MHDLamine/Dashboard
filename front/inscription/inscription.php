<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/inscription_style.css">
    <title>inscription</title>
</head>
<body>

    <div class="container larg">
        <h3>Page d'inscription</h3>
        </br>
            <form action="" class="row g-2 " id="form">
                <div  class="col-md-6" class="form-floating">
                <label for="prenom" class="form-label">Prénom <span class="rqr">*</span> </label>
                <input type="text"  onkeyup="prenomf();" class="form-control" name="prenom" id="prenom" >
                </br>
                </div>
                <div class="col-md-6">
                <label for="nom" class="form-label">Nom<span class="rqr">*</span> </label>
                <input type="text" class="form-control" id="nom" name="nom" onkeyup="nomf();">
                </br>
                </div>
                <div class="col-md-6">
                <label for="email" class="form-label">Email<span class="rqr">*</span></label>
                <input type="text" class="form-control" name="email" id="email"  onkeyup="emailf();">
                </br>
                </div>
                <div class="col-md-6">
                <label for="role" class="form-label">Role<span class="rqr">*</span></label>
                <select class="form-select" name="role" id="role"  onclick="rolef();">
                <option selected>selectionner</option>
                <option value="administrateur">Administrateur</option>
                <option value="utilisateur">Utilisateur</option>
                </select>
                </br>
                </div>
                <div class="col-md-6">
                <label for="mdp" class="form-label">Mot de passe <span class="rqr">*</span></label>
                <input type="password" class="form-control" name="mdp" id="mdp"   onkeyup="mdpf();">
                </br>
                </div>
                <div class="col-md-6">
                <label for="confirm_mdp" class="form-label">confirmer le mot de passe <span class="rqr">*</span></label>
                <input type="password" class="form-control" name="confirm_mdp" id="confirm_mdp"   onkeyup="confirm_mdpf();">
                </br>
                </div>
                <div class="col-md-6">
                 <label class="form-label">Upload</label>
                 <input type="file" class="form-control" name="file" onkeyup="filef();" id="file">
                 </br>
                 </div>
                <div class="col-md-12">
                <input type="submit" id="submit" class="form-control" disabled>
                </div>
            </form>
  
    </div>

<script src="script.js"></script>
</body>
</html>