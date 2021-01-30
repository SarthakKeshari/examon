<!-- General Instructions:
Total duration of JEE-Main - 40503627_BTECH 9th Jan 2020 Shift 2 is 180 min.
The clock will be set at the server. The countdown timer in the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the examination will end by itself. You will not be required to end or submit your examination.
The Questions Palette displayed on the right side of screen will show the status of each question using one of the following symbols:
 You have not visited the question yet.

 You have not answered the question.

 You have answered the question.

 You have NOT answered the question, but have marked the question for review.

 The question(s) "Answered and Marked for Review" will be considered for evalution.

You can click on the ">" arrow which apperes to the left of question palette to collapse the question palette thereby maximizing the question window. To view the question palette again, you can click on "<" which appears on the right side of question window.
You can click on your "Profile" image on top right corner of your screen to change the language during the exam for entire question paper. On clicking of Profile image you will get a drop-down to change the question content to the desired language.
You can click on  to navigate to the bottom and  to navigate to top of the question are, without scrolling.
Navigating to a Question:
To answer a question, do the following:
Click on the question number in the Question Palette at the right of your screen to go to that numbered question directly. Note that using this option does NOT save your answer to the current question.
Click on Save & Next to save your answer for the current question and then go to the next question.
Click on Mark for Review & Next to save your answer for the current question, mark it for review, and then go to the next question.
Answering a Question:
Procedure for answering a multiple choice type question:
To select you answer, click on the button of one of the options.
To deselect your chosen answer, click on the button of the chosen option again or click on the Clear Response button
To change your chosen answer, click on the button of another option
To save your answer, you MUST click on the Save & Next button.
To mark the question for review, click on the Mark for Review & Next button.
To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question.
Navigating through sections:
Sections in this question paper are displayed on the top bar of the screen. Questions in a section can be viewed by click on the section name. The section you are currently viewing is highlighted.
After click the Save & Next button on the last question for a section, you will automatically be taken to the first question of the next section.
You can shuffle between sections and questions anything during the examination as per your convenience only during the time stipulated.
Candidate can view the corresponding section summery as part of the legend that appears in every section above the question palette. -->

<?php 
    if(isset($_POST['submit']))
    {
    session_start();
    $_SESSION['examslot']=$_POST['submit'];
    
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
     <style>
         body{
        background-color: #f3f5f9;
        }

        nav{
        position: fixed;
        height: 100vh;
        width: 250px;
        margin-left: 50px;
        font-size: 15px;
        border-right: 1px solid black;
        background: linear-gradient(rgba(0, 0, 0, 0.75),#fff);
        }
        .ques_area{
        margin-left: 310px;
        background-color: #e6e6e6;
        border-left: 1px solid black;
        }
     </style>
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
                    <?php echo '<h5><b style="font-size: 15px">'.$_SESSION['user_id'].'</b></h5>';?>
                </div>
              </div>
            <div style="height: 10vh;">

            </div>

        </div>
      </nav>

      <div class="container ques_area">

        <div class="row pt-2 border-bottom d-flex justify-content-end" id="time_up">
            <div class="col-1 text-right border bg-white">
                <div class="h4 m-0">Timer</div>
            </div>
            <div class="col-1 border border-dark text-center bg-white">
                <div id="timer" class="h4 m-0"></div>
            </div>
        </div>

        
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
                                open(location, '_self').close();
                                
                            }
                        }
                    }
                    tick();
                }
                
                countdown(10);
                
            </script>

            <div class="row">
                <div class="col-12">
                    <div class="row mt-4 text-center">
                        <div class="col-12 h4 font-weight-bold">
                            Please read the instructions carefully
                        </div>
                        <div class="col-12 h6 text-danger">
                            (You are provided with 10 minutes to go through the instructions)
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 h5">
                            <u>General Instructions:</u>
                        </div>
                    </div>
                    <div class="row mt-2 ml-2">
                        <div class="col-12">
                        Total duration of TEST is <span class="text-danger">10 min</span>.<br><br>
                        1) The clock will be set at the server. The countdown timer in the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the examination will end by itself. You will not be required to end or submit your examination. <br><br>
                        2) The Questions Palette displayed on the right side of screen will show the status of each question using one of the following symbols:<br>
                        &emsp;a. You have not visited the question yet.<br>
                        &emsp;b. You have not answered the question.<br>
                        &emsp;c. You have answered the question.<br>
                        &emsp;d. You have marked the question for review.<br><br>

                        3) You can click on the ">" arrow which apperes to the left of question palette to collapse the question palette thereby maximizing the question window. To view the question palette again, you can click on "<" which appears on the right side of question window.<br><br>
                        4) You can click on your "Profile" image on top right corner of your screen to change the language during the exam for entire question paper. On clicking of Profile image you will get a drop-down to change the question content to the desired language.<br><br>
                        5) You can click on  to navigate to the bottom and  to navigate to top of the question are, without scrolling.<br><br>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 h5">
                            <u>Navigating to a Question:</u>
                        </div>
                    </div>
                    <div class="row mt-2 ml-2">
                        <div class="col-12">
                        6) To answer a question, do the following:<br>
                        &emsp;a. Click on the question number in the Question Palette at the right of your screen to go to that numbered question directly.<br>
                        &emsp;b. Click on Save & Next to save your answer for the current question and then go to the next question.<br>
                        &emsp;c. Click on Mark for Review & Next to save your answer for the current question, mark it for review, and then go to the next question.<br><br>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 h5">
                            <u>Answering a Question:</u>
                        </div>
                    </div>
                    <div class="row mt-2 ml-2">
                        <div class="col-12">
                        7) Procedure for answering a multiple choice type question:<br>
                        &emsp;a. To select you answer, click on the button of one of the options.<br>
                        &emsp;b. To deselect your chosen answer, click on the button of the chosen option again or click on the Clear Response button<br>
                        &emsp;c. To change your chosen answer, click on the button of another option.<br>
                        &emsp;d. To save your answer, you MUST click on the Save & Next button.<br>
                        &emsp;e. To mark the question for review, click on the Mark for Review & Next button.<br><br>
                        8) To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question.
                        </div>
                    </div>
                    <form class="row mt-4" action="test_page.php" method="POST">
                        <div class="col-12 p-5 mb-4 h5 d-flex justify-content-center">
                            <button type="submit" name="start" role="button" class="btn btn-success">Start the Quiz</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
      
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
            <?php }?>



