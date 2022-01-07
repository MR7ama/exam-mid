<?php
    if(isset($_POST['submit'])){
        
       
        function passwordcheck($pass)
        {
            $len=strlen($pass);
            return $len;   
        }

        
        echo "your email is:". $_POST['email'];
        echo"<br>";
        if(passwordcheck($_POST['password'])>=8 && passwordcheck($_POST['password'])<=16)
        {
            echo "your password is good";
            echo"<br>";
        }
        else {echo"your password must greater than 8 and less than 16";
                echo"<br>";
        }
        $gender1 =$_POST["gender"];
        echo "your gender is:".$gender1;
         echo"<br>";
        

        if(isset($_POST['color']))
        {
            $color=$_POST['color'];
            echo "your favorite color is:";
            foreach ($color as $c){
            echo  "   ". $c;
        						}
        }
        else{echo"no fovrite color!";}
        
echo "<br>";
echo "“Registered successfully!”.";
}

else{
    header('location: form.html');
}

?>
