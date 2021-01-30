<?php 
    if(isset($_POST['start']))
    {
        session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel = "icon" href =  "img/examon.png" type = "image/x-icon"> 
      <link rel="stylesheet" href="nav_style.css">
</head>
<body>
      <nav>
          <div class="container">
                <div class="row logo">
                    <div class="col-12 text-center p-2">
                        <img src="img/examon_white.png" alt="" width="50%">
                    </div>
                </div>
              <div class="row mt-4 reg_number bg-dark">
                <div class="col-12 d-flex text-white justify-content-center">
                    <?php echo '<h5 class="m-1">Registration Number</h5>';?>
                </div>
                <div class="col-12 d-flex text-light justify-content-center">
                    <?php echo "<h5><b style=\"font-size: 15px\">".$_SESSION['user_id']."</b></h5>";?>
                </div>
              </div>
            <div style="height: 10vh;">

            </div>


            <div class="row button_area">
                <?php
                    for($x=1;$x<=10;$x++)
                    {
                        echo '<div class="col-3 p-0 mb-2 d-flex justify-content-center">
                            <button type="button" id="questionnumber'.$x.'" class="btn btn-dark border border-dark rounded-circle ques_num" style="width:50px;height:50px;" onclick="reach('.$x.')">'.$x.'</button>
                        </div>';
                    }
                ?>
                
                <!-- <div class="col-3 p-0 m-2">
                    <button type="button" id="2" class="btn btn-dark w-100" onclick="reach(2)">2</button>
                </div>
                <div class="col-3 p-0 m-2">
                    <button type="button" id="3" class="btn btn-dark w-100" onclick="reach(3)">3</button>
                </div>
                <div class="col-3 p-0 m-2">
                    <button type="button" id="4" class="btn btn-dark w-100" onclick="reach(4)">4</button>
                </div>
                <div class="col-3 p-0 m-2">
                    <button type="button" id="5" class="btn btn-dark w-100" onclick="reach(5)">5</button>
                </div>
                <div class="col-3 p-0 m-2">
                    <button type="button" id="6" class="btn btn-dark w-100" onclick="reach(6)">6</button>
                </div>
                <div class="col-3 p-0 m-2">
                    <button type="button" id="7" class="btn btn-dark w-100" onclick="reach(7)">7</button>
                </div>
                <div class="col-3 p-0 m-2">
                    <button type="button" id="8" class="btn btn-dark w-100" onclick="reach(8)">8</button>
                </div> -->
            </div>


            <hr class="bg-dark">

            <div class="row p-3 d-flex align-items-center">
                <div class="bg-dark border border-dark rounded-circle mb-2" style="height:40px; width:40px;">
                </div>
                <div class="col-9 mb-2 pt-0 h6">
                    Not Visited
                </div>
                <div class="bg-danger border border-dark rounded-circle mb-2" style="height:40px; width:40px;">
                </div>
                <div class="col-9 mb-2 pt-0 h6">
                    Not Answered
                </div>
                <div class="bg-success border border-dark rounded-circle mb-2" style="height:40px; width:40px;">
                </div>
                <div class="col-9 mb-2 pt-0 h6">
                    Answered
                </div>
                <div class="bg-primary border border-dark rounded-circle mb-2" style="height:40px; width:40px;">
                </div>
                <div class="col-9 mb-2 pt-0 h6">
                    Marked for review
                </div>
            </div>

        </div>
      </nav>

      <div class="container ques_area">
      <!-- <h2>Attempt Question - User Side</h2>
    <form action="test_page.php" method="POST">
        <input type="text" name="reg">
        <input type="submit" value="Submit" name="submit">
    </form> -->
        <div class="row pt-2 border-bottom d-flex justify-content-end" id="time_up">
            <div class="col-1 text-right border bg-white">
                <div class="h4 m-0">Timer</div>
            </div>
            <div class="col-1 border border-dark text-center bg-white">
                <div id="timer" class="h4 m-0"></div>
            </div>
        </div>

        
        


    <form id="myForm" name="myForm" action="quiz_submitted.php" method="POST">

    <?php

            $no_of_questions = 10;
            $registration_number = $_SESSION['user_id'];
            $reg = $registration_number[strlen($registration_number)-1];

            $mul_fact = pow(7,$reg%10);

            // for($x=1;$x<=$no_of_questions;$x++){
            //     echo "Question number : ".((((($mul_fact*$x+$reg)%$no_of_questions))%$no_of_questions+1))."<br>";
            // }

            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbname = "examon";
        
            //create connection
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        
            //connect to the server and select database
            mysqli_connect("localhost","root","");
            mysqli_select_db($conn,"submit");
        
            //Query the database for user
            for($x=1;$x<=$no_of_questions;$x++){
                $question = ((((($mul_fact*$x+$reg)%$no_of_questions))%$no_of_questions+1));
                $result = mysqli_query($conn,"select * from ".$_SESSION['examslot']." where 
                            id ='$question'")
                            or die("Failed to query database ".mysqli_error($conn));
                $row = mysqli_fetch_array($result);
                echo '<div class="question p-2 pt-5 border border-light" id="question'.$x.'">';
                echo '<div class="row justify-content-end pr-4">
                <div name="" id="" class="btn btn-primary" onclick="review('.$x.')">Mark for Review</div><br>
                </div>';
                echo "<p class=\"text-success h6 mb-4\">Question number : ".$x."&emsp;&emsp;&emsp;&emsp;&emsp; Original Question number : ".$row['id']."</p>";
                echo "<hr><h5>".$row['question']."</h5>";
                echo '<div class="mt-4 p-4 border border-dark h5">';
                echo '<input class="m-3" type="radio" name="option'.$x.'" id="opta" value="A" onclick="answered('.$x.')">'.$row['opta'].'<br>';
                echo '<input class="m-3" type="radio" name="option'.$x.'" id="optb" value="B" onclick="answered('.$x.')">'.$row['optb'].'<br>';
                echo '<input class="m-3" type="radio" name="option'.$x.'" id="optc" value="C" onclick="answered('.$x.')">'.$row['optc'].'<br>';
                echo '<input class="m-3" type="radio" name="option'.$x.'" id="optd" value="D" onclick="answered('.$x.')">'.$row['optd'].'<br>';
                echo '<input class="m-3" type="radio" name="option'.$x.'" id="optz" value="Z" checked style="display:none">';
                echo '</div>';
                echo '</div>';

            }

            echo '    <div class="row submit_button">
                <div class="col-3 d-flex justify-content-center">
                        <input type="submit" name="submit" id="" class="btn btn-success" value="Submit Quiz"><br>
                    </div>
                </div>';


            // if($row['admin_id'] == $Admin_id && $row['PIN'] == $PIN)
            // {
            //     header("Location: a_choice_page.php"); 
            //     exit;
            // }
            // else
            // {
            //     echo "<script>alert('Incorrect Admin_id or PIN');
            //     window.location.href = 'a_login_page.php';
            //     </script>";
            // }
    ?>

</form>


<script type="text/javascript">
                var timeoutHandle;
                function countdown(minutes) {
                    var seconds = 60;
                    var mins = minutes
                    function tick() {
                        var counter = document.getElementById("timer");
                        var current_minutes = mins-1
                        seconds--;
                        counter.innerHTML =
                        current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
                        if(seconds <= 30 && current_minutes==0){
                            counter.style="color:red;";
                        }
                        if( seconds > 0 ) {
                            timeoutHandle=setTimeout(tick, 1000);
                        } else {
                
                            if(mins > 1){
                
                            // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
                            setTimeout(function () { countdown(mins - 1); }, 1000);
                
                            }

                            else{
                                document.getElementById("time_up").innerHTML = "Time's Up";
                                document.getElementById("time_up").style="background-color: red; color: white; font-size:22px; font-weight: 500";
                                // var auto = setTimeout(function(){ autoRefresh(); }, 100);

                                // function submitform(){
                                // alert('test');
                                // document.forms["myForm"].submit();
                                // }

                                // function autoRefresh(){
                                // clearTimeout(auto);
                                // auto = setTimeout(function(){ submitform(); autoRefresh(); }, 1000);
                                // }
                                setTimeout(function(){
                                    window.location.href = 'quiz_submitted.php';
                                }, 2000);
                                // // open(location, '_self').close();
                                
                            }
                        }
                    }
                    tick();
                }
                
                countdown(10);
                
            </script>

    
<div class="row prev_next">
        <div class="col-4">
            <button class="btn btn-dark" onclick="prev()"><- Prev</button>
        </div>
        
        <div class="col-4 ml-auto">
            <button class="btn btn-dark" onclick="next()">Next -></button>
        </div>
    </div>

    <script>
        document.getElementById("questionnumber1").style.backgroundColor="#dc3545";

        var counter = 1;
        var novisit_set=new Set();
        for (var i = 1; i <= 10; i++) 
        {
            novisit_set.add(i);
        }
        var visit_set=new Set();
        visit_set.add(1);
        var answer_set=new Set();
        var review_array=[];
        for (var i = 1; i <= 10; i++) 
        {
            review_array.push(0);
        }
        

        function review(num)
        {

            var y = document.getElementsByClassName("ques_num");
            
            console.log(review_array);
            review_array[num-1]+=1;
            if(review_array[num-1]==1)
            {
                y[num-1].style.backgroundColor= "#0d6efd";
            }
            else
            {
                review_array[num-1]=0;
                if(answer_set.has(num))
                {
                    y[num-1].style.backgroundColor= "#198754";
                }
                else if(visit_set.has(num))
                {
                    y[num-1].style.backgroundColor= "#dc3545";
                }
            }
        }

        function answered(num)
        {
            var y = document.getElementsByClassName("ques_num");
            
            
            if (visit_set.has(num))
            {
                answer_set.add(num);
                if(review_array[num-1]==0)
                {
                    for (i = 0; i < answer_set.size; i++) {
                        y[num-1].style.backgroundColor= "#198754";
                    }
                }
                visit_set.delete(num);
            }
        }
        
        function reach(num)
        {
            var x = document.getElementsByClassName("question");
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].style.display= "none";
            }

            counter = num;
            
            var a="question"+num;
            document.getElementById(a).style.display = "block";

            var y = document.getElementsByClassName("ques_num");
            
            if (novisit_set.has(num))
            {
                visit_set.add(num);
                if(review_array[num-1]==0)
                {
                    for (i = 0; i < visit_set.size; i++) {
                        y[num-1].style.backgroundColor= "#dc3545";
                    }
                }
                novisit_set.delete(num);

            }

            console.log(novisit_set);


            // var i;
            // for (i = 0; i < y.length; i++) {
            //     if(i+1==num){
            //         y[i].style.backgroundColor= "#dc3545";
            //     }
            //     else{
            //         y[i].style.backgroundColor= "#343a40";
            //     }
            // }

            
        }

        function next()
        {
            counter = (counter%10)+1;
            var x = document.getElementsByClassName("question");
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].style.display= "none";
            }
            
            var a="question"+counter;
            document.getElementById(a).style.display = "block";

            var y = document.getElementsByClassName("ques_num");
            
            if (novisit_set.has(counter))
            {
                visit_set.add(counter);
                for (i = 0; i < visit_set.size; i++) {
                    y[counter-1].style.backgroundColor= "#dc3545";
                }
                novisit_set.delete(counter);

            }

            console.log(counter);
        }

        function prev()
        {
            counter = counter-1;
            if(counter<1)
            {
                counter=10;
            }
            var x = document.getElementsByClassName("question");
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].style.display= "none";
            }
            
            var a="question"+counter;
            document.getElementById(a).style.display = "block";

            var y = document.getElementsByClassName("ques_num");
            
            if (novisit_set.has(counter))
            {
                visit_set.add(counter);
                for (i = 0; i < visit_set.size; i++) {
                    y[counter-1].style.backgroundColor= "#dc3545";
                }
                novisit_set.delete(counter);

            }

            console.log(counter);
            console.log(counter);
        }
    </script>

    </div>
      
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>

    <!-- <?php }?> -->