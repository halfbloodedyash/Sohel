<?php 
    $invalid = true;
    $lowerCase = false;
    $upperCase = false;
    $number = false;
    $len = false;
    $sc = false;
    $password = '';
    $cnt = 5;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = $_POST["password"];
        // echo $password;

        if(preg_match("/[A-Z]/", $password)) {
            $upperCase = true;
            $cnt = $cnt - 1;
        }
        
        if(preg_match("/[a-z]/", $password)) {
            $lowerCase = true;
            $cnt = $cnt - 1;
        }
        
        if(preg_match("/[0-9]/", $password)) {
            $number = true;
            $cnt = $cnt - 1;
        }
        
        if(preg_match('/[#$%@^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $password)) {
            $cnt = $cnt - 1;
            $sc = true;
        }
        
        if(strlen($password) > 8) {
            $cnt = $cnt - 1;
            $len = true;
        }

        if($cnt == 0) {
            $invalid = false;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>password validator</title>
    </head>
    <body>
        <form action="" method="post" id="form">
            <input type="checkbox" <?php
                    if($lowerCase)
                        echo 'checked'
                    ?> > lower case <br>
            
            <input type="checkbox" <?php
                    if($upperCase)
                        echo 'checked'
                    ?> > upper case <br>
            <input type="checkbox" <?php
                    if($number)
                        echo 'checked'
                    ?> > Number <br>
            <input type="checkbox" <?php
                    if($sc)
                        echo 'checked'
                    ?> > special character <br>
            <input type="checkbox" <?php
                    if($len)
                        echo 'checked'
                    ?> > length <br> <br>

            <input 
                onfocus="var temp_value=this.value; this.value=''; this.value=temp_value"
                value="<?php echo $password ?>" 
                autofocus 
                type="text" name="password" id="input">

            <br></br>
            <button <?php
                if($invalid)
                    echo 'disabled'?> >Submit</button>
        </form>
        <script>
            let input =document.getElementById("input");
            let form =document.getElementById("form");

            input.onkeyup = () => {
                form.submit();
            }
        </script>
    </body>
</html>