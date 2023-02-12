<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP | W7_D2</title>
</head>
<body>
    <h1> Exercise 1 : Accept The User Name</h1>
    <form action="#" method="post">
        <div>
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" placeholder="Votre nom">
            <button type="submit">Soumettre</button>
        </div>
    </form>
    <?php 
        if(isset($_POST['name'])){
            
            $name = $_POST['name'];

            echo  $name;
        }
    ?>
</body>
</html>