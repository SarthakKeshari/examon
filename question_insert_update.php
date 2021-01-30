<?php
    session_start();

    
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='examon';

    $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    if(!$conn )
    {
        die('Failed to connect mysql database'.mysqli_connect_error());
    }

    if(isset($_POST['insert_question']))
    {
        $question = $_POST['question'];
        $opta = $_POST['opta'];
        $optb = $_POST['optb'];
        $optc = $_POST['optc'];
        $optd = $_POST['optd'];
        $answer = $_POST['answer'];

        $sql1="INSERT INTO ".$_SESSION['examslot']."(question,opta,optb,optc,optd,answer) VALUES ('$question','$opta','$optb','$optc','$optd','$answer')";
        $query1 = mysqli_query($conn,$sql1);
    }

    if(isset($_POST['update_question']))
    {
        $sql2="SELECT * from ".$_SESSION['examslot']." where id = ".$_POST['id'];
        $query2 = mysqli_query($conn,$sql2);

        $row=mysqli_fetch_array($query2);

        $id = $row['id'];
        $question = $row['question'];
        $opta = $row['opta'];
        $optb = $row['optb'];
        $optc = $row['optc'];
        $optd = $row['optd'];
        $answer = $row['answer'];


        if($_POST['question']!='')
        {
            $question = $_POST['question'];
        }

        if($_POST['opta']!='')
        {
            $opta = $_POST['opta'];
        }

        if($_POST['optb']!='')
        {
            $optb = $_POST['optb'];
        }

        if($_POST['optc']!='')
        {
            $optc = $_POST['optc'];
        }

        if($_POST['optd']!='')
        {
            $optd = $_POST['optd'];
        }
        
        if($_POST['answer']!='Z')
        {
            $answer = $_POST['answer'];
        }

        $sql3="UPDATE ".$_SESSION['examslot']." SET question = '".$question."', opta = '".$opta."', optb = '".$optb."', optc = '".$optc."', optd = '".$optd."', answer = '".$answer."' WHERE id = ".$id;
        $query3 = mysqli_query($conn,$sql3);

        if(!$query3)
        {
            die('error found'.mysqli_error($conn));
        }
    }
    echo '<script>
        var myVar;

        myVar = setTimeout(alertFunc, 2000);

        function alertFunc() {
            window.history.back();
        }
        
        </script>';  
        
        
    if(isset($_POST['delete_question']))
    {
        $sql2="DELETE from ".$_SESSION['examslot']." where id = ".$_POST['id'];
        $query2 = mysqli_query($conn,$sql2);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-primary bg-gradient">
    <h1 class="text-center text-white m-5">Database has been successfully updated.</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  </body>
</html>
