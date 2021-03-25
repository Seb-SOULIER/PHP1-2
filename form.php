<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">

    <title>Challenge PHP Form</title>
</head>
<body>

<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name" required>
    </div>
    <div>
        <label  for="prenom">Prénom :</label>
        <input  type="text"  id="prenom"  name="user_firstname" required>
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
    </div>
    <div>
        <label  for="telephone">Téléphone :</label>
        <input  type="tel"  id="telephone"  name="user_phone" required>
    </div>
    <div>
        <label for="sujet">Thématique :</label>
        <select id="sujet" name="user_topic" required>
            <option value="information">Information</option>
            <option value="reclamation">Réclamation</option>
            <option value="autres">Autres</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>

</body>
</html>

