<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulaire</title>
</head>

<body>
  <h1>Contact</h1>
  <form action="contact2.php" method="POST">
    <fieldset>
      <label for="">Nom : </label>
      <input type="text" name="Nom" placeholder="Nom" /> <br />
      <label for="">Prénom : </label>
      <input type="text" name="Prénom" placeholder="Prénom" /> <br />
      <label for="">Ville : </label>
      <div>
        <input type="radio" name="genre" value="femme" id="femme">
        <label for="genre">Femme</label>
      </div>
      <div>
        <input type="radio" name="genre" value="homme" id="homme">
        <label for="">Homme</label>
      </div>
      <div>
        <input type="radio" name="genre" value="enfant" id="">
        <label for="">enfant</label>
      </div>
      <select name="ville[]" id="">
        <optgroup id="ville" name="ville">
          <option value="paris">Ville</option>
          <option value="paris">Paris</option>
          <option value="bordeaux">Bordeaux</option>
          <option value="marseille">Marseille</option>
          <option value="lyon">Lyon</option>
        </optgroup>
      </select> <label for="">Message : </label> <br />
      <textarea placeholder="message" name="Message" id="message" cols="30" rows="10"></textarea>
    </fieldset>
    <input type="submit">Envoyer</input>
  </form>
</body>

</html>