<html>
    <head>
        <meta charset='UTF-8'>
        <title>exercise</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <h1>Exercise</h1>



    <body>
        <div class='container'>    
           
           
            <h4>Please add two numbers so we can do the following:</h4>

            <ul>
                <ol> Addition: + </ol>
                <ol> Multiplication: * </ol>
                <ol> Division: / </ol>
                <ol> Rest: & </ol>
            </ul>

            <form action="" method="GET">
                <input type="number" name="number1" placeholder="Number1">
                <input type="number" name="number2" placeholder="Number2"><br>
                    <button>Submit</button>  
            </form>
            
            <?php
                // prosorino fix notice errors.
                ini_set('display_errors',0);
                function sum($a,$b){
                    return $a + $b;
                }
                $athrisma = sum($_GET['number1'],$_GET['number2']);
                if (isset($_GET['number1'])) echo "Addition: ". $athrisma. '<br>';
                
                
                function multi($a,$b){
                    return $a * $b;
                }
                $polaplasiasmos = multi($_GET['number1'],$_GET['number2']);
                if (isset($_GET['number1'])) echo "Multiplication: ". $polaplasiasmos. '<br>';
                

                function divi($a,$b){
                    return $a / $b;
                }
                $diairesi = divi($_GET['number1'],$_GET['number2']);
                if (isset($_GET['number1'])) echo "Division: ". $diairesi. '<br>';

                function rest($a,$b){
                    return $a & $b;
                }
                $ipolipo = rest($_GET['number1'],$_GET['number2']);
                if (isset($_GET['number1'])) echo "Rest: ". $ipolipo. '<br>';

                // $errors = [];
                //  if (isset($_GET['number2']) && mb_strlen($_GET['number1']) == 0) {
                //  $errors['number1'] = "To number den prepei  na είναι 0";
                
                //  }

                // echo filter_var(($_GET['number1']));

                
                
            ?>
            
        </div>
    </body>





</html>