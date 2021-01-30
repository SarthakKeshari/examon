<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <title>Examon</title>
    <style> 
        body{
            background: linear-gradient(-90deg, rgba(0, 0, 0, 0.75),#fff);
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

        .btn{
            height: 180px;
            width: 200px;
            transition: 0.7s;
            
        }
        a{
            text-decoration: none;
        }

        .b1{
            background: -webkit-linear-gradient(0deg, #00000050 50%, #0d6efd 50%);
            background-size: 400px;
            border: 1px solid #0d6efd;
        }
        .b1:hover{
            background-position: 200px;
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
    <div class="row bg-white text-black p-2 d-flex justify-content-end">
        <div class="col-3 d-flex justify-content-end h5 pr-0">
            Registration Number :
        </div>
        <div class="col-1 d-flex justify-content-start h5 font-weight-bold">
            345678
        </div>
    </div>
  </div>
  <div class="d-flex align-items-start ml-4">
  <div class="nav_bar nav flex-column align-items-center nav-pills p-5 position-fixed top-0 mr-5 bg-dark" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link active mt-5 pl-5 pr-5 " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Courses</a>
    <a class="nav-link pl-5 pr-5 " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Marks</a>
    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Profile</a>
    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
  </div>
  <div class="tab-content content_area container" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
                        <?php
                            if ($file = fopen("semester3.txt", "r")) {
                                while(!feof($file)) {
                                    echo '<div class="col-3 m-4 d-flex justify-content-center align-items-center">
                                    <div class="row m-0 d-flex justify-content-center align-items-center btn btn-dark b1 border border-dark">
                                    <div class="col-12 m-0 course_name d-flex justify-content-center align-items-center">
                                        <a href="quiz_rules.php" role="button" class="h5 text-white">';
                                    $textperline1 = fgets($file);
                                    echo $textperline1;

                                    echo '</a>
                                    </div>
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

            $sql='SELECT * from students where reg_no="17BCE1236"';
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
                
        </div>
      </div>
    </div>
    </div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
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