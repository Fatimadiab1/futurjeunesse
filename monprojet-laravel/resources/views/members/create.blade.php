<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau membre</title>
</head>
<body>
    <h1>Ajouter un nouveau membre</h1>

    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age"><br><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse"><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="tel">Téléphone :</label>
        <input type="tel" id="tel" name="tel"><br><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
