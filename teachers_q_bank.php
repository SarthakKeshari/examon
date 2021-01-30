<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <title>ExamOn</title>

    <style>
        .db_btn{
            width: 400px;
        }
    </style>
  </head>
  <body class="bg-dark">
  
    <?php
        if(isset($_POST['submit']))
        {
            session_start();
            $_SESSION['examslot'] = $_POST['submit'];
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
            ?>
        <div class="row bg-white">
            <div class="col-1 ml-auto text-right m-2">
                <a href="logged_in.php"><img src="img/home.svg" alt="" style="fill: #ffffff; width: 25%;"></a>
            </div>
        </div>

        <div class="row text-center position-sticky top-0 bg-primary text-white">
            <div class="col-12 h3">
                Question Bank - <?php echo substr($_POST['submit'],0,strlen($_POST['submit'])-3).' - ';
                // echo substr($_POST['submit'],strlen($_POST['submit'])-3,1);
                if(substr($_POST['submit'],strlen($_POST['submit'])-3,1)==1)
                {
                    echo 'Morning Slot';
                } 
                else{
                    echo 'Afternoon Slot';
                }?>
            </div>
        </div>

        <div class="row justify-content-center m-4">

                    <div class="col-3 d-flex justify-content-center">
                    <button type="button" class="btn db_btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Update Question</button>

                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form  action="question_insert_update.php" method="POST">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Question</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 d-flex col-4">
                                <label for="recipient-name" class="col-form-label col-8">Question ID</label>
                                <input type="text" class="form-control" id="message-text" name="id" required>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Question</label>
                                <textarea class="form-control" id="message-text" name="question"></textarea>
                            </div>
                            <div class="mb-3 d-flex">
                                <label for="recipient-name" class="col-form-label col-2">Option A</label>
                                <input type="text" class="form-control" id="recipient-name" name="opta">
                            </div>
                            <div class="mb-3 d-flex">
                                <label for="recipient-name" class="col-form-label col-2">Option B</label>
                                <input type="text" class="form-control" id="recipient-name" name="optb">
                            </div>
                            <div class="mb-3 d-flex">
                                <label for="recipient-name" class="col-form-label col-2">Option C</label>
                                <input type="text" class="form-control" id="recipient-name" name="optc">
                            </div>
                            <div class="mb-3 d-flex">
                                <label for="recipient-name" class="col-form-label col-2">Option D</label>
                                <input type="text" class="form-control" id="recipient-name" name="optd">
                            </div>
                            <div class="mb-3 col-2 m-0 form-check-inline">
                                <label class="form-check-label">Answer</label>
                            </div>
                            <div class="mb-3 col-2 m-0 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer" id="student" value="A">
                                <label class="form-check-label" for="student">A</label>
                            </div>
                            <div class="mb-3 col-2 m-0 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer" id="teacher" value="B">
                                <label class="form-check-label" for="teacher">B</label>
                            </div>
                            <div class="mb-3 col-2 m-0 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer" id="student" value="C">
                                <label class="form-check-label" for="student">C</label>
                            </div>
                            <div class="mb-3 col-2 m-0 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer" id="teacher" value="D">
                                <label class="form-check-label" for="teacher">D</label>
                            </div>
                            <div class="mb-3 col-2 m-0 form-check form-check-inline" style="display: none;">
                                <input class="form-check-input" type="radio" name="answer" id="teacher" value="Z" checked>
                                <label class="form-check-label" for="teacher"></label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="update_question" class="btn btn-primary">Update</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            

            <div class="col-3 d-flex justify-content-center">
                    <button type="button" class="btn db_btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Insert Question</button>

                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form  action="question_insert_update.php" method="POST">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Insert Question</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Question</label>
                                <textarea class="form-control" id="message-text" name="question" required></textarea>
                            </div>
                            <div class="mb-3 d-flex">
                                <label for="recipient-name" class="col-form-label col-2">Option A</label>
                                <input type="text" class="form-control" id="recipient-name" name="opta" required>
                            </div>
                            <div class="mb-3 d-flex">
                                <label for="recipient-name" class="col-form-label col-2">Option B</label>
                                <input type="text" class="form-control" id="recipient-name" name="optb" required>
                            </div>
                            <div class="mb-3 d-flex">
                                <label for="recipient-name" class="col-form-label col-2">Option C</label>
                                <input type="text" class="form-control" id="recipient-name" name="optc" required>
                            </div>
                            <div class="mb-3 d-flex">
                                <label for="recipient-name" class="col-form-label col-2">Option D</label>
                                <input type="text" class="form-control" id="recipient-name" name="optd" required>
                            </div>
                            <div class="mb-3 col-2 m-0 form-check-inline">
                                <label class="form-check-label">Answer </label>
                            </div>
                            <div class="mb-3 col-2 m-0 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer" id="student" value="A" required>
                                <label class="form-check-label" for="student">A</label>
                            </div>
                            <div class="mb-3 col-2 m-0 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer" id="teacher" value="B" required>
                                <label class="form-check-label" for="teacher">B</label>
                            </div>
                            <div class="mb-3 col-2 m-0 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer" id="student" value="C" required>
                                <label class="form-check-label" for="student">C</label>
                            </div>
                            <div class="mb-3 col-2 m-0 form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer" id="teacher" value="D" required>
                                <label class="form-check-label" for="teacher">D</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="insert_question" class="btn btn-primary">Insert</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <div class="col-3 d-flex justify-content-center">
                    <button type="button" class="btn db_btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">Delete Question</button>

                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form  action="question_insert_update.php" method="POST">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Question</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 d-flex col-4">
                                <label for="recipient-name" class="col-form-label col-8">Question ID</label>
                                <input type="text" class="form-control" id="message-text" name="id" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="delete_question" class="btn btn-primary">Delete</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col-11 justify-content-center">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                    <th class="col-1" scope="col">Ques ID</th>
                    <th class="col-4" scope="col">Question</th>
                    <th class="col-1" scope="col">Option A</th>
                    <th class="col-1" scope="col">Option B</th>
                    <th class="col-1" scope="col">Option C</th>
                    <th class="col-1" scope="col">Option D</th>
                    <th class="col-1" scope="col">Answer</th>
                    </tr>
                </thead>
                <tbody>
            <?php

            $sql='SELECT * from '.$_POST['submit'];
            $query = mysqli_query($conn,$sql);

            if(!$query)
            {
                die('error found'.mysqli_error($conn));
            }

            // echo 'heyyyy';

                while($row=mysqli_fetch_array($query))
                {
                echo'<tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['question'].'</td>
                    <td>'.$row['opta'].'</td>
                    <td>'.$row['optb'].'</td>
                    <td>'.$row['optc'].'</td>
                    <td>'.$row['optd'].'</td>
                    <td>'.$row['answer'].'</td>
                    </tr>';
                }

                ?>
                </tbody>
                </table>
            </div>
        </div>
       <?php }

        ?>

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