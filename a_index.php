<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">
    <link rel = "icon" href =  "img/examon.png" type = "image/x-icon"> 
    <title></title>

  </head>
<body>
    <div class="logo">
      <img src="img/examon.png" alt="" width="22%"><span class="h3" style="margin-left: -10vh;">Admin</span>
    </div>
    <div id="content_space">
        <div id="content_head_login" class="h1 font-weight-bolder">
            Let's Do It!!
        </div>
        <div id="content_login" class="h4 font-weight-bold">
            We help millions of people,<br>&emsp;&emsp;&emsp;&emsp;&emsp; to learn and improve their skills.
        </div>
    </div>
    <div class="form_box">
        <nav class="d-flex justify-content-center">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active text-success h5" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" onclick="logininfo()"><b>Login</b></a>
                <a class="nav-link text-success h5" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="registerinfo()"><b>Register</b></a>
            </div>
        </nav>
          <div class="container p-4 col-12 full-page text-light">
          <div class="tab-content border-top border-black-50" id="nav-tabContent">
              <br>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <form class="row" action="logged_in.php" method="POST">
                    <div class="mb-3 col-12">
                        <label for="exampleInputLast" class="form-label">Registration Number</label>
                        <input type="text" class="form-control" id="exampleInputLast" aria-describedby="emailHelp" name="reg">
                      </div>
                      <div class="mb-3 col-12">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3 col-12">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-success btn-gradient" name="submit">Register</button>
                  </form>
            </div>
            <div class="tab-pane fade show active d-flex justify-content-center" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form class="row" action="logged_in.php" method="POST">
                    <div class="mb-3 col-12">
                        <label for="exampleInputLast" class="form-label">Admin ID</label>
                        <input type="text" class="form-control" id="exampleInputLast" aria-describedby="emailHelp" name="reg">
                      </div>
                    <div class="mb-3 col-12">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Dive In</button>
                    <!-- <a href="menu.html" class="btn btn-success" type="submit" role="button">Login</a> -->
                  </form>
                </div>
           
          </div>

      </div>
    </div> 
    
    
    <script>
        function logininfo()
        {
            document.getElementById("content_space").innerHTML = '<div id="content_head_login" class="h1 font-weight-bolder">Let\'s Do It!!</div><div id="content_login" class="h4 font-weight-bold">We help millions of people,<br>&emsp;&emsp;&emsp;&emsp;&emsp; to learn and improve their skills.</div>';
        }

        function registerinfo()
        {
            document.getElementById("content_space").innerHTML = '<div id="content_register" class="h4 font-weight-bold">Exams are perfect occasions for<br>&emsp;&emsp;&emsp;&emsp;&emsp;  showcasing your talent and determination.</div><div id="content_head_register" class="h1 font-weight-bolder">Start Doing Your Best!!</div>';
        }
    </script> 


<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
</body>
</html>