<?php
if(isset($_POST['email'])){
$SERVER = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($SERVER,$username,$password);
if(!$con){
    die ("connection to this database failed dur to" . mysqli_connect_error());
}
// echo "Succcessfuly";
$email = $_POST["email"];
$password = $_POST['password'];
$sql = "INSERT INTO `login`.`login` ( `email`, `password`, `dt`)
 VALUES ('$email', '$password', current_timestamp());";
echo $sql;
if($con->query($sql) == true){
    echo "SuccessFully inserted";
}
else{
    echo "Error: $sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body{
            /* background-color: blueviolet; */
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .container{
            max-width: 30%;
            background:linear-gradient(135deg,rgba(225,225,255,0.1),rgba(255,255,255,0.1));
            backdrop-filter: blur(21px);
            box-shadow: 0 8px 32px 0 rgba(0,0,0,0.36);
            border: 1px solid rgba(225,225,255,0.1);
            background-color: black;
            margin: 250px;
            padding:48px;
            background: transparent;
            -webkit-backdrop-filter: blur(21px);
        }
        .container h2 , p{
            text-align: center;
            margin-top: auto;
        }
        p{
            font-size: 23px;
        }
        input,password{
            width: 80%;
            margin: 8px 0px;
            font-size: 16px;
            padding: 5px;
            border: 4px solid black;
            border-radius: 7px;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .btn{
            border-radius: 9px;
            padding: 11px 2px;
            /* margin: 30px 17px; */
            margin-left: 40%;
            cursor: pointer;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Form</h2>
        <p>Fill all detail here</p>
        <form action="index.php" method="post">
        <input type="email" name="email" id ="email" placeholder="Enter your email">
        <input type="password" name="password" id ="password" placeholder="Enter your password">
        <button class="btn">Submit</button>
    </form>
    </div>
</body>
</html>