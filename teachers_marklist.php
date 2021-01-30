<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        body{
            overflow-x: hidden;
        }
        .db_btn{
            width: 400px;
        }

        ::-webkit-scrollbar{
            display: none;
        }
    </style>
  </head>
  <body class="bg-dark">
  
    <?php
        if(isset($_POST['submit']))
        {
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
        <div class="row text-center bg-primary text-white">
            <div class="col-12 h3">
                Marklist - <?php echo substr($_POST['submit'],0,strlen($_POST['submit'])-3).' - ';
                // echo substr($_POST['submit'],strlen($_POST['submit'])-3,1);
                if(substr($_POST['submit'],strlen($_POST['submit'])-3,1)==1)
                {
                    echo 'Morning Slot';
                } 
                else{
                    echo 'Afternoon Slot';
                }
                ?>
            </div>
        </div>

            <?php
            $sql='SELECT * from '.substr($_POST['submit'],0,strlen($_POST['submit'])-2).'leader ORDER BY id DESC';
            $query1 = mysqli_query($conn,$sql);
            $query2 = mysqli_query($conn,$sql);

            if(!$query1)
            {
                die('error found'.mysqli_error($conn));
            }

            // echo 'heyyyy';
            // $row=mysqli_fetch_array($query);
            // print_r($row);

        ?>

        <div class="row mt-5">
            <div class="col-3 ml-auto bg-primary h5 p-2 text-white">
            <?php
                $marks=[];
                $variance = 0;
                $standard_deviation = 0;
                $avg = 0;
                $total = 0;
                $c=0;
                $highest = 0;
                while($row=mysqli_fetch_array($query1))
                {
                    array_push($marks,$row['marks']);
                    $total+=$row['marks'];
                    if($highest<$row['marks'])
                    {
                        $highest=$row['marks'];
                    }
                    $c++;
                }

                
                if($c!=0){
                    $avg = $total/$c;
                    echo '<p class="mt-2">Class Average - '.number_format((float)($avg), 2, '.', '').'</p>';

                    $squared_total=0;
                    for ($i = 0; $i < count($marks); $i++)  {
                        $marks[$i] = $marks[$i]-$avg;
                        $marks[$i] = $marks[$i]*$marks[$i];
                        $squared_total += $marks[$i];
                    }

                    $variance = $squared_total/(count($marks)-1);
                    $standard_deviation = sqrt($variance);

                    echo '<p>Standard Deviation - '.number_format((float)($standard_deviation), 2, '.', '').'</p>';

                }
                else
                {
                echo '<p class="mt-2">Class Average - 0.00</p>';
                echo '<p>Standard Deviation - 0.00</p>';
                }

            ?>
            </div>
        </div>
    
        <div class="row mt-5 justify-content-center">
            <div class="col-8 justify-content-center">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                    <th scope="col">Registration Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Marks</th>
                    <th scope="col">Percentile</th>
                    <th scope="col">Relative Grade</th>
                    </tr>
                </thead>
                <tbody>
                                
                <?php

                        while($row=mysqli_fetch_array($query2))
                        {
                            $percentile = ($row['marks']/$highest)*100;
                            echo'<tr>
                            <td>'.$row['reg_no'].'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['marks'].'</td>
                            <td>'.$percentile.'%</td>';


                            // 6 Answers

                            // Shubham Gupta, Undergraduate at IIT Roorkee
                            // Answered May 7, 2015 · Upvoted by Mohit Gupta, Btech from Indian Institute of Technology, Roorkee (2021)
                            // For the award of grades in a course, all component-wise evaluation shall be done in marks. The marks of different components viz., MTE, ETE, coursework sessionals and practical Sessionals would be reduced to relative weights of each component as approved by Senate.

                            // Marks so obtained shall be out of 100 and same would be converted to grades following the guidelines given below:

                            // For more than 30 students in a course, the statistical method shall be used, with marginal adjustment for natural cut-off. The mean(X) and the standard deviation(SD) of marks obtained of all the students in a course shall be calculated and grades shall be awarded to a student depending upon the marks and the standard deviation as per table given below:


                            // Lower range of marks Grade Upper range of marks
                            // A+ > X+1.5SD
                            // X+1.0SD < A <= X +1.5 SD
                            // X+0.5SD < B+ <= X+1.0SD
                            // X < B <= X+0.5SD
                            // X-0.5SD < C <= X
                            // X-1.0SD < D <= X-0.5SD
                            // X-1.5SD < F <=X -1.5SD

                            if($percentile<=40)
                            {
                                echo '<td>N</td>';
                            }
                            else if($row['marks']>=($avg+1.5*$standard_deviation))
                            {
                                echo '<td>S</td>';
                            }
                            else if($row['marks']>=($avg+1*$standard_deviation))
                            {
                                echo '<td>A</td>';
                            }
                            else if($row['marks']>=($avg+0.5*$standard_deviation))
                            {
                                echo '<td>B</td>';
                            }
                            else if($row['marks']>=($avg))
                            {
                                echo '<td>C</td>';
                            }
                            else if($row['marks']>=($avg-0.5*$standard_deviation))
                            {
                                echo '<td>D</td>';
                            }
                            else if($row['marks']>=($avg-1*$standard_deviation))
                            {
                                echo '<td>F</td>';
                            }

                            echo '</tr>';
                        }

                        ?>
                </tbody>
                </table>
            </div>
        </div>


                    <?php }?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  </body>
</html>