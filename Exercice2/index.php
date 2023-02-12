<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP | Exo2W7_D2</title>
</head>
<body>
    <center>
        <h1>Exercise 2 : Print Your Age.</h1>
        <form action="#" method="post">
            <div>
                <label for="name">Nom : </label>
                <input type="text" name="name" id="name" placeholder="Votre Nom">
            </div>
            <br>
            <div>
                <label for="age">Âge : </label>
                <input type="text" name="age" id="age" placeholder="Votre age">
            </div>
            <br>
            <div>
                <button type="submit">Soumettre</button>
            </div>
        </form>
        <?php 
            if(isset($_POST['name'], $_POST['age'])){
                $name = htmlspecialchars($_POST['name']);
                $age = htmlspecialchars($_POST['age']);

                echo 'Hi ' . $name .'. You are ' . $age . ' years old';
            }
        ?>
    </center>
   
</body>
</html>