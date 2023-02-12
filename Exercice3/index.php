<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP | Exo3_W7_D2</title>
</head>
<body>
    <center>
        <h1>Exercice 3 : Entier Valide.</h1>
        <?php
            function myFonction($number){
                try 
                {
                    if (filter_var($number, FILTER_VALIDATE_INT) === false)
                    {
                        throw new Exception("The value is not valid integer");
                    } 
                    else
                    {
                        echo  " validation complete";
                    }
                }
                catch (Exception $e)
                {
                    echo  "Erro "  .$e->getMessage();
                }
                finally {

                }
            }
            
            
            myFonction(3);
        ?>
    </center>
</body>
</html>