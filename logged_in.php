<?php
    if(isset($_POST['submit']))
    {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "examon";
    
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
        //connect to the server and select database
        mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"submit");

        $result = mysqli_query($conn,"SELECT * from ".$_POST['role']."s where reg_no = '".$_POST['reg']."' and password = '".$_POST['pass']."'");
        
        $row = mysqli_fetch_array($result);

        if($row['reg_no'] == $_POST['reg'] && $row['password'] == $_POST['pass'])
        {
            session_start();
            $_SESSION["user_id"] = $_POST['reg'];
    ?>

    <?php 
            if(strcasecmp($_POST['role'], 'student') == 0)
            {
                $host = "localhost";
                $dbUsername = "root";
                $dbPassword = "";
                $dbname = "examon";
            
                //create connection
                $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
            
                //connect to the server and select database
                mysqli_connect("localhost","root","");
                mysqli_select_db($conn,"submit");

                $result = mysqli_query($conn,"select * from students where 
                                reg_no ='".$_SESSION["user_id"]."'")
                                or die("Failed to query database ".mysqli_error($conn));
                $row = mysqli_fetch_array($result);
                $_SESSION["slot"]=$row['slot'];
                $_SESSION["name"]=$row['name'];
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
        <link rel = "icon" href =  "img/examon.png" type = "image/x-icon">
        <title>Examon</title>
        <style> 
            body{
                background: linear-gradient(-90deg, rgba(0, 0, 0, 0.75),#fff);
            }

            .logo{
                width: 100px;
            }

            .nav_bar{
                height: 100vh;
            }

            .content_area{
                margin-left: 250px;
            }

            .course_name{
                height: 100px;
            }

            .my_btn{
                height: 180px;
                width: 400px;
                transition: 0.7s;
                
            }
            a{
                text-decoration: none;
            }

            .b1{
                background: -webkit-linear-gradient(0deg, #00000050 50%, #0d6efd 50%);
                background-size: 800px;
                border: 1px solid #0d6efd;
            }
            .b1:hover{
                background-position: 400px;
            }

            .input-group-text{
                color: white;
                background-color: #000000;
            }

            .form-control-plaintext{
                background-color: #ffffff50;
            }
        </style>
    </head>
    <body>
    <div class="container-fluid position-sticky top-0">
        <div class="row bg-white text-black p-2 d-flex" style="margin-left: 8vw;">
            <div class="col-3 m-0 d-flex justify-content-end h5 pr-0 align-items-center">
                Registration Number :
            </div>
            <div class="col-1 m-0 d-flex justify-content-start h5 font-weight-bold align-items-center">
                <?php echo $_POST['reg']?>
            </div>
            <div class="col-1 ml-auto d-flex justify-content-start font-weight-bold">
                <a role="button" href="log_out.php" class="btn btn-primary">Log Out</a>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-start ml-4">
    <div class="nav_bar nav flex-column align-items-center nav-pills p-5 position-fixed top-0 mr-5 bg-dark" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="logo" id="v-pills-home-tab" data-toggle="pill" href="#" role="tab"><img src="img/examon_white.png" alt="" width="100%"></a>
        <a class="nav-link active mt-5 pl-5 pr-5 " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Courses</a>
        <a class="nav-link pl-5 pr-5 " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Marks</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Profile</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Messages</a>
    </div>
    <div class="tab-content content_area container" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                            <?php
                                if ($file = fopen("semester.txt", "r")) {
                                    while(!feof($file)) {
                                        $textperline1 = fgets($file);
                                        echo '<div class="col-3 m-4 d-flex justify-content-center align-items-center">
                                        <div class="row m-0 d-flex justify-content-center align-items-center btn my_btn btn-dark b1 border border-dark">
                                        <form action="quiz_rules.php" method="POST" class="col-12 m-0 course_name d-flex justify-content-center align-items-center">
                                            <button name="submit" class="h3 text-white" style="background:transparent;border:none;outline:none;" value="'
                                        .join("",array(substr($textperline1,0,strlen($textperline1)-2),$_SESSION['slot'])).'">'.$textperline1.'</button>
                                        </form>
                                        <div class="col-12 m-0 p-1 bg-primary border border-dark">';
                                $textperline2 = fgets($file);
                                echo $textperline2;
                                echo '</div>
                                </div>
                            </div>';
                                }
                                fclose($file);
                            }
                        ?>
                
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="row m-5 justify-content-center">
                <div class="col-12 text-center text-white">
                    <p class="h3">Marklist</p>
                    <p>(Marks are updated after every quiz that you attend)</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8 justify-content-center">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Course</th>
                        <th scope="col">Marks</th>
                        <th scope="col">Date/Time</th>
                        </tr>
                    </thead>
                    <tbody>
                                    
                    <?php
                            $db_host='127.0.0.1';
                            $db_user='root';
                            $db_pass='';
                            $db_name='examon';

                            $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
                            if(!$conn )
                            {
                                die('Failed to connect mysql database'.mysqli_connect_error());
                            }

                            // echo "YOYO";

                            $sql='SELECT * from '.$_SESSION['user_id'].'marklist';
                            $query = mysqli_query($conn,$sql);

                            if(!$query)
                            {
                                die('error found'.mysqli_error($conn));
                            }

                            // echo 'heyyyy';

                            while($row=mysqli_fetch_array($query))
                            {
                                echo'<tr>
                                <td>'.$row['course'].'</td>
                                <td>'.$row['marks'].'</td>
                                <td>'.$row['datetime'].'</td>
                                </tr>';
                            }

                            ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>


        <?php
                $db_host='127.0.0.1';
                $db_user='root';
                $db_pass='';
                $db_name='examon';

                $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
                if(!$conn )
                {
                    die('Failed to connect mysql database'.mysqli_connect_error());
                }

                // echo "YOYO";

                $sql='SELECT * from students where reg_no="'.$_SESSION['user_id'].'"';
                $query = mysqli_query($conn,$sql);

                if(!$query)
                {
                    die('error found'.mysqli_error($conn));
                }

                // echo 'heyyyy';

                $row=mysqli_fetch_array($query);
        ?>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        <div class="row">
            <div class="col-12">
                <div class="row p-4">
                <div class="row h4 mt-2 border-bottom border-dark d-inline-block">Personal Information</div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Registration Number</div>
                        <div class="form-control-plaintext h6 text-black border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['reg_no']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Name</div>
                        <div class="form-control-plaintext h6 text-black border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['name']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">D.O.B</div>
                        <div class="form-control-plaintext h6 border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['dob']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Age</div>
                        <div class="form-control-plaintext h6 border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['age']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Gender</div>
                        <div class="form-control-plaintext h6 border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['gen']?></div>
                    </div>
                </div>

                <div class="row mt-5 h4 border-bottom border-dark d-inline-block">Academic Information</div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Program</div>
                        <div class="form-control-plaintext h6 text-black border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['program']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Branch</div>
                        <div class="form-control-plaintext h6 border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['branch']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">School</div>
                        <div class="form-control-plaintext h6 border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['school']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Slot</div>
                        <div class="form-control-plaintext h6 border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php if($row['slot']==1)
                        {
                            echo 'Morning';
                        }
                        else{
                            echo 'Afternoon';
                        }?></div>
                    </div>
                </div>
                    
            </div>
        </div>
        </div>
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="container">
                    <div class="row justify-content-center m-4">
                        <div class="col-6 justify-content-center">
                        <button type="button" class="btn btn-block btn-primary mb-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Post your query</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form  action="send_message.php" method="POST">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="recipient">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text" name="message"></textarea>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="send_message" class="btn btn-primary">Send message</button>
                            </div>
                            </div>
                        </div>
                        </form>
                        </div>
                        </div>


                        <div class="col-12 p-5">
                            <p class="text-white h4 text-center mb-5">Messages</p>
                            <div class="row">
                            <?php
                            $db_host='127.0.0.1';
                            $db_user='root';
                            $db_pass='';
                            $db_name='examon';

                            $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
                            if(!$conn )
                            {
                                die('Failed to connect mysql database'.mysqli_connect_error());
                            }

                            // echo "YOYO";

                            $sql='SELECT * from '.$_SESSION['user_id'].'messages';
                            $query = mysqli_query($conn,$sql);

                            if(!$query)
                            {
                                die('error found'.mysqli_error($conn));
                            }

                            // echo 'heyyyy';

                            while($row=mysqli_fetch_array($query))
                            {
                                if($row['reg_no']==$_SESSION['user_id'])
                                {
                                ?>
                                <div class="col-8 border-top border-primary m-2" style="background: #0d6efd75;">
                                    <p class="mb-2" style="font-size: 12px;">To: <?php echo $row['msg_to']?></p>
                                    <p class="text-white" style="font-size: 1.2em;"><?php echo $row['message'];?></p>
                                    <div class="row">
                                        <div class="col-3 ml-auto">
                                            <img src="img/clock.png" alt="" width="7%">
                                            <span class="" style="font-size: 10px;"><?php echo $row['datetime']?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                else{
                                    ?>
                                <div class="col-8 ml-auto border-top border-success m-2" style="background: #19875475;">
                                <p class="mb-2" style="font-size: 12px;">From: <?php echo $row['reg_no']?></p>
                                <p class="text-white" style="font-size: 1.2em;"><?php echo $row['message'];?></p>
                                    <div class="row">
                                        <div class="col-3 ml-auto">
                                            <img src="img/clock.png" alt="" width="7%">
                                            <span class="" style="font-size: 10px;"><?php echo $row['datetime']?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                            }?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
        

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper.js -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper.js and Bootstrap JS
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
        -->
    </body>
    </html>

            <?php $_SESSION["slot"]='';}?>
    
            
    <?php
            if(strcasecmp($_POST['role'], 'teacher') == 0)
            {   
    ?>
        <!doctype html>
        <html lang="en">
        <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
        <link rel = "icon" href =  "img/examon.png" type = "image/x-icon"> 
        <title>ExamOn</title>
        <style> 
            body{
                background: linear-gradient(-90deg, rgba(0, 0, 0, 0.75),#fff);
            }

            .logo{
                width: 100px;
            }

            .nav_bar{
                height: 100vh;
            }

            .content_area{
                margin-left: 250px;
            }

            .course_name{
                height: 100px;
            }

            .my_btn{
                height: 180px;
                width: 400px;
                transition: 0.7s;
                
            }
            a{
                text-decoration: none;
            }

            .b1{
                background: -webkit-linear-gradient(0deg, #00000050 50%, #0d6efd 50%);
                background-size: 800px;
                border: 1px solid #0d6efd;
            }
            .b1:hover{
                background-position: 400px;
            }

            .input-group-text{
                color: white;
                background-color: #000000;
            }

            .form-control-plaintext{
                background-color: #ffffff50;
            }
        </style>
    </head>
    <body oncontextmenu="return false;">
    <div class="container-fluid position-sticky top-0">
        <div class="row bg-white text-black p-2 d-flex" style="margin-left: 8vw;">
            <div class="col-3 m-0 d-flex justify-content-end h5 pr-0 align-items-center">
                Registration Number :
            </div>
            <div class="col-1 m-0 d-flex justify-content-start h5 font-weight-bold align-items-center">
                <?php echo $_POST['reg']?>
            </div>
            <div class="col-1 ml-auto d-flex justify-content-start font-weight-bold">
                <a role="button" href="log_out.php" class="btn btn-primary">Log Out</a>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-start ml-4">
    <div class="nav_bar nav flex-column align-items-center nav-pills p-5 position-fixed top-0 mr-5 bg-dark" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="logo" id="v-pills-home-tab" data-toggle="pill" href="#" role="tab"><img src="img/examon_white.png" alt="" width="100%"></a>
        <a class="nav-link active mt-5 pl-5 pr-5 " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Courses</a>
        <a class="nav-link pl-5 pr-5 " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Mark List</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Profile</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Messages</a>
    </div>
    <div class="tab-content content_area container" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                        <?php
                                if ($file = fopen("teacher1.txt", "r")) {
                                    while(!feof($file)) {
                                        $textperline1 = fgets($file);
                                        $textperline2 = fgets($file);
                                        echo '<div class="col-3 m-4 d-flex justify-content-center align-items-center">
                                        <div class="row m-0 d-flex justify-content-center align-items-center btn my_btn btn-dark b1 border border-dark">
                                        <form action="teachers_q_bank.php" method="POST" class="col-12 m-0 course_name d-flex justify-content-center align-items-center">
                                            <button name="submit" class="h3 text-white" style="background:transparent;border:none;outline:none;" value="'
                                        .join("",array(substr($textperline2,0,strlen($textperline2)-2),substr($textperline1,1,strlen($textperline1)-1))).'">'.$textperline1.'<br><span class="h6">'.$textperline2.'</span></button>
                                        </form>
                                        <div class="col-12 m-0 p-1 bg-primary border border-dark">';
                                $textperline3 = fgets($file);
                                echo $textperline3;
                                echo '</div>
                                </div>
                            </div>';
                                }
                                fclose($file);
                            }
                        ?>  
                
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                        <?php
                                if ($file = fopen("teacher1.txt", "r")) {
                                    while(!feof($file)) {
                                        $textperline1 = fgets($file);
                                        $textperline2 = fgets($file);
                                        echo '<div class="col-3 m-4 d-flex justify-content-center align-items-center">
                                        <div class="row m-0 d-flex justify-content-center align-items-center btn my_btn btn-dark b1 border border-dark">
                                        <form action="teachers_marklist.php" method="POST" class="col-12 m-0 course_name d-flex justify-content-center align-items-center">
                                            <button name="submit" class="h3 text-white" style="background:transparent;border:none;outline:none;" value="'
                                        .join("",array(substr($textperline2,0,strlen($textperline2)-2),substr($textperline1,1,strlen($textperline1)-1))).'">'.$textperline1.'<br><span class="h6">'.$textperline2.'</span></button>
                                        </form>
                                        <div class="col-12 m-0 p-1 bg-primary border border-dark">';
                                $textperline3 = fgets($file);
                                echo $textperline3;
                                echo '</div>
                                </div>
                            </div>';
                                }
                                fclose($file);
                            }
                        ?>  
                
            </div>
        </div>
        </div>


        <?php
                $db_host='127.0.0.1';
                $db_user='root';
                $db_pass='';
                $db_name='examon';

                $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
                if(!$conn )
                {
                    die('Failed to connect mysql database'.mysqli_connect_error());
                }

                // echo "YOYO";

                $sql='SELECT * from teachers where reg_no="'.$_SESSION['user_id'].'"';
                $query = mysqli_query($conn,$sql);

                if(!$query)
                {
                    die('error found'.mysqli_error($conn));
                }

                // echo 'heyyyy';

                $row=mysqli_fetch_array($query);
        ?>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        <div class="row">
            <div class="col-12">
                <div class="row p-4">
                <div class="row h4 mt-2 border-bottom border-dark d-inline-block">Personal Information</div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Registration Number</div>
                        <div class="form-control-plaintext h6 text-black border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['reg_no']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Name</div>
                        <div class="form-control-plaintext h6 text-black border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['name']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Gender</div>
                        <div class="form-control-plaintext h6 border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['gen']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Mobile Number</div>
                        <div class="form-control-plaintext h6 border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['mob_no']?></div>
                    </div>
                </div>

                <div class="row mt-5 h4 border-bottom border-dark d-inline-block">Academic Information</div>

                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Designation</div>
                        <div class="form-control-plaintext h6 text-black border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['designation']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Email ID</div>
                        <div class="form-control-plaintext h6 text-black border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['email_id']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">School</div>
                        <div class="form-control-plaintext h6 border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['school']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 m-2 d-flex">
                        <div class="input-group-text col-3" id="inputGroup-sizing-default">Cabin Number</div>
                        <div class="form-control-plaintext h6 border-dark p-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><?php echo $row['cabin']?></div>
                    </div>
                </div>
                    
            </div>
        </div>
        </div>
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="container">
                    <div class="row justify-content-center m-4">
                        <div class="col-6 justify-content-center">
                        <button type="button" class="btn btn-block btn-primary mb-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Answer a query</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form  action="send_message.php" method="POST">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="recipient">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text" name="message"></textarea>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="send_message" class="btn btn-primary">Send message</button>
                            </div>
                            </div>
                        </div>
                        </form>
                        </div>
                        </div>


                        <div class="col-12 p-5">
                            <p class="text-white h4 text-center mb-5">Messages</p>
                            <div class="row">
                            <?php
                            $db_host='127.0.0.1';
                            $db_user='root';
                            $db_pass='';
                            $db_name='examon';

                            $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
                            if(!$conn )
                            {
                                die('Failed to connect mysql database'.mysqli_connect_error());
                            }

                            // echo "YOYO";

                            $sql='SELECT * from '.$_SESSION['user_id'].'messages';
                            $query = mysqli_query($conn,$sql);

                            if(!$query)
                            {
                                die('error found'.mysqli_error($conn));
                            }

                            // echo 'heyyyy';

                            while($row=mysqli_fetch_array($query))
                            {
                                if($row['reg_no']==$_SESSION['user_id'])
                                {
                                ?>
                                <div class="col-8 border-top border-primary m-2" style="background: #0d6efd75;">
                                    <p class="mb-2" style="font-size: 12px;">To: <?php echo $row['msg_to']?></p>
                                    <p class="text-white" style="font-size: 1.2em;"><?php echo $row['message'];?></p>
                                    <div class="row">
                                        <div class="col-3 ml-auto">
                                            <img src="img/clock.png" alt="" width="7%">
                                            <span class="" style="font-size: 10px;"><?php echo $row['datetime']?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                else{
                                    ?>
                                <div class="col-8 ml-auto border-top border-success m-2" style="background: #19875475;">
                                <p class="mb-2" style="font-size: 12px;">From: <?php echo $row['reg_no']?></p>
                                <p class="text-white" style="font-size: 1.2em;"><?php echo $row['message'];?></p>
                                    <div class="row">
                                        <div class="col-3 ml-auto">
                                            <img src="img/clock.png" alt="" width="7%">
                                            <span class="" style="font-size: 10px;"><?php echo $row['datetime']?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                            }?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>

    <!-- <script>
        history.pushState(null, null, document.title);
        window.addEventListener('popstate', function () {
            history.pushState(null, null, document.URL);
        });
    </script> -->
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  </body>
</html>

        <?php }
        }
        
        else{
            header("Location: incorrect.php");
        }
    }?>
        
