<?php
          session_start();
          $bmi = $_SESSION['bmi'];
          $name = $_SESSION['name'];
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Dashboard
    </title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" 
        crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/995dbfc1ce.js" crossorigin="anonymous"></script>
    <style>
        body{
            background: rgb(223,223,223);
background: linear-gradient(270deg, rgba(223,223,223,1) 0%, rgba(255,255,255,1) 100%);
        }
        .flip-card{
            width:400px;
            height:520px;
            cursor:pointer;
            background-color: transparent;
            perspective: 1000px;
            float:left;
            margin:50px auto;
            border-radius: 50px;
        }
        .flip-card-inner{
            position:relative;
            width:100%;
            height:100%;
            background-color: white;
            text-align: center;
            transition: transform 2s;
            transform-style:preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            border-radius: 50px;
        }
        .flip-front , .flip-back{
            position:absolute;
            width:100%;
            height:100%;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            border-radius: 50px;
        }
        .flip-back{
            transform:rotateY(180deg);
        }
        .flip-front img{
            border-radius: 50px 50px 0px 0px;
        }
        .flip-back video{
            border-radius: 50px 50px 0px 0px;
            height: 0px;
        }
        .carousel-item{
            width:100%;
            height:400px;
          }
          .carousel-item img{
            width:100%;
            height:400px;
          }
          .flip-back p{
              font-size: 15px;
              font-family: Georgia, 'Times New Roman', Times, serif;
              padding:50px 20px;
              justify-content: left;
              height: 300px;
              text-align: left;
              text-overflow: ellipsis;
          }
          .flip-front p{
              font-family: Georgia, 'Times New Roman', Times, serif;
              padding: 10px 15px 10px 15px;
              font-size: 14px;
              text-overflow: ellipsis;
          }
          h1,h2{
              text-align: center;
          }
          h2{
              color:black;
          }
          h3{
              padding-top: 15px;
          }
          @media screen and (max-width:600px) {
              .img-fluid{
                  width:100%;
                  height:300px;
              }
          }
    </style>    
</head>
<body>
    <div>
    <div id="myCarousel" class="carousel slide img-fluid" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner img-fluid">
          <div class="carousel-item active img-fluid">
            
            <a href="food.html" target="_blank">
                <img src="Images/Click hereto visit our food and dietetics Page!!.png" alt="pic1" class="img-fluid">
             </a>
          </div>
      
         <div class="carousel-item">
           
            <img src="Images/The only way to finish is to start.png" alt="pic5" class="img-fluid">
        </div>
      
          <div class="carousel-item">
            <img src="Images/No alarm clock needed. my passion wakes me up..png" alt="pic3" class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="Images/just for you.png" alt="pic4" class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="Images/You might hate doing it, but you will love finishing it.”.png" alt="pic2" class="img-fluid">
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
          
        </a>
      </div>
    
    <u><h1 style="padding-top: 20px;">Welcome <i><?php echo $name; ?>!   </i>Your BMI is: <i><?php echo $bmi; ?></i></h1></u>
    <button class="btn btn-primary" onclick="location.href='index.html'" style="margin-top: -142px; margin-left: 93%; font-size: 20px; width: 105px">Signout</button>
    <?php

    if($bmi<18.5)
    {
        echo '<u><h2 style="padding-top: 20px;">Your state of health is:<i> Underweight</i></h2></u>';
    }
    elseif ($bmi>= 18.5 && $bmi<=24.9)
    {
        echo '<u><h2 style="padding-top: 20px;">Your state of health is:<i> Normal</i></h2></u>';
    }
    elseif($bmi>=25 && $bmi<=29.9)
    {
        echo '<u><h2 style="padding-top: 20px;">Your state of health is:<i>Overweight</i></h2></u>';
    }
    else
    {
        echo '<u><h2 style="padding-top: 20px;">Your state of health is:<i> Obese</i></h2></u>';
    }
    
    ?>
    
    <div class="flip-card col-sm-6 col-md-4 col-lg-3" onclick="flip(0)">
        <div class="flip-card-inner">
            <div class="flip-front">
                <img src="Images/ glute bridge.gif" alt="gym" width="100%">
                <h3>Glute Bridge</h3>
                <p>Activate your core and posterior chain with a bridge. This is a great exercise to use as a warmup.</p>
            </div>
            <div class="flip-back">
                <video src="Videos/glute bridge.mp4" width="100%"></video>
               <p><b>Directions:</b><br>
                    1.Lie on your back with your knees bent, feet flat on the floor, and your arms extended by your sides.<br>
                    2.Pushing through your feet and bracing your core, raise your bottom off the ground until your hips are fully extended, squeezing your glutes at the top.<br>
                    3.Slowly return to the starting position and repeat.
                </p>
                <button type="button" id="btn1" class="btn btn-primary" onclick="pip(0)">Coach Cam <i class="fa fa-video-camera"></i></button>
            </div>
        </div>
    </div>
    <div class="flip-card col-sm-6 col-md-4 col-lg-3" onclick="flip(1)">
        <div class="flip-card-inner">
            <div class="flip-front">
                <img src="Images/chair squat.gif" alt="gym" width="100%">
                <h3>Chair Squat</h3>
                <p>Squat to strengthen your legs and core, which will make everyday movements easier. Starting with a chair underneath you will help you master proper form.</p>
            </div>
            <div class="flip-back">
                <video src="Videos/chair squat.mp4" width="100%"></video>
               
                <p>
                    <b>Directions:</b><br>

1.Stand in front of the chair with your feet shoulder-width apart, toes pointed slightly out.<br>
2.Hinging at your hips and bending your knees, lower back and down until your bottom touches the chair, allowing your arms to extend out in front of you.<br>
3.Push up through your heels and return to the starting position.
                </p>
                <button type="button" id="btn1" class="btn btn-primary" onclick="pip(1)">Coach Cam <i class="fa fa-video-camera"></i></button>
            </div>
        </div>
    </div>
    <div class="flip-card col-sm-6 col-md-4 col-lg-3" onclick="flip(2)">
        <div class="flip-card-inner">
            <div class="flip-front">
                <img src="Images/forearm plank.gif" alt="gym" width="100%">
                <h3>Forearm Plank </h3>
                <p>A full-body exercise that requires strength and balance, planks put the core into overdrive.</p>
            </div>
            <div class="flip-back">
                <video src="Videos/plank .mp4" width="100%"></video>
             
                <p><b>Directions:</b><br>

                    1.Assume a plank position on your forearms. Your body should form a straight line from head to feet.<br>
                    2.Ensure your lower back and hips don’t sag. Hold the position for 30 seconds to 1 minute.
                </p>
                <button type="button" id="btn1" class="btn btn-primary" onclick="pip(2)">Coach Cam <i class="fa fa-video-camera"></i></button>
            </div>
        </div>
    </div>
    <div class="flip-card col-sm-6 col-md-4 col-lg-3" onclick="flip(3)">
        <div class="flip-card-inner">
            <div class="flip-front">
                <img src="Images/bicycle crunch.gif" alt="gym" width="100%">
                <h3>Bicycle Crunches</h3>
                <p>Although you’ll work your core with almost all of these strength exercises, a targeted ab move doesn’t hurt.</p>
            </div>
            <div class="flip-back">
                <video src="Videos/bicycle crunch.mp4" width="100%"></video>
               
                <p>
                    <b>Directions:</b><br>

1.Lie on your back and bring your legs to a tabletop position. Bend your elbows, and put your hands behind your head.<br>
2.Crunch up and bring your right elbow to your left knee, straightening your right leg.<br>
3.Release the crunch slightly. Bend your right leg and straighten your left leg, then bring your left elbow to your right knee.
                </p>
                <button type="button" id="btn1" class="btn btn-primary" onclick="pip(3)">Coach Cam <i class="fa fa-video-camera"></i></button>
            </div>
        </div>
    </div>
    <div class="flip-card col-sm-6 col-md-4 col-lg-3" onclick="flip(4)">
        <div class="flip-card-inner">
            <div class="flip-front">
                <img src="Images/knee_pushup.gif" alt="gym" width="100%">
                <h3>Knee Pushup</h3>
                <p>A beginner-style pushup, this move will help you build strength before attempting a standard pushup.</p>
            </div>
            <div class="flip-back">
                <video src="Videos/knee pushup.mp4" width="100%"></video>
               
                <p>
                    <b>Directions:</b><br>

1.Get into a high plank position from your knees.<br>
2.Maintaining a straight line from your head to your knees, bend your elbows to lower yourself down to the ground. Keep your elbows at a 45-degree angle.<br>
3.Push back up to start.

                </p>
                <button type="button" id="btn1" class="btn btn-primary" onclick="pip(4)">Coach Cam <i class="fa fa-video-camera"></i></button>
            </div>
        </div>
    </div>
    <div class="flip-card col-sm-6 col-md-4 col-lg-3" onclick="flip(5)">
        <div class="flip-card-inner">
            <div class="flip-front">
                <img src="Images/plank to downward dog.gif" alt="gym" width="100%">
                <h3>Plank to Downward Dog</h3>
                <p>This move will test your upper body, especially your shoulders. Who says you need weights for a shoulder workout?</p>
            </div>
            <div class="flip-back">
                <video src="Videos/downward dog to planking.mp4" width="100%"></video>
              
                <p>
                    <b>Directions:</b><br>

1.Get into a high plank position, with your hands stacked underneath your shoulders and your feet close together.<br>
2.Keeping your core engaged and your hands and feet stationary, pike your hips up and back into the Downward Dog pose.<br>
3.Hold here for a second, then return to the plank. Repeat.
                </p>
                <button type="button" id="btn1" class="btn btn-primary" onclick="pip(5)">Coach Cam <i class="fa fa-video-camera"></i></button>
            </div>
        </div>
    </div>
    <div class="flip-card col-sm-6 col-md-4 col-lg-3" onclick="flip(6)">
        <div class="flip-card-inner">
            <div class="flip-front">
                <img src="Images/stationary_lunge.gif" alt="gym" width="100%">
                <h3>Stationary Lunge</h3>
                <p>Hit your quads, hamstrings, and glutes with a stationary lunge.</p>
            </div>
            <div class="flip-back">
                <video src="Videos/stationary lunge.mp4" width="100%"></video>
                
                <p>
                    <b>Directions:</b><br>

1.Split your stance with your right leg in front. Your right foot should be flat on the ground, and your left foot should be up on its toes.<br>
2.Bend your knees and lunge, stopping when your right thigh is parallel to the ground.<br>
3.Push up through your right foot to return to the starting position. Repeat for desired number of reps, then switch legs.
                </p>
                <button type="button" id="btn1" class="btn btn-primary" onclick="pip(6)">Coach Cam <i class="fa fa-video-camera"></i></button>
            </div>
        </div>
    </div>
    <div class="flip-card col-sm-6 col-md-4 col-lg-3" onclick="flip(7)">
        <div class="flip-card-inner">
            <div class="flip-front">
                <img src="Images/straight leg donkey kick .gif" alt="gym" width="100%">
                <h3>Stationary Leg Donkey Kick </h3>
                <p>Build those glutes with donkey kicks.</p>
            </div>
            <div class="flip-back">
                <video src="Videos/donkey kick.mp4" width="100%"></video>
               
                <p>
                    <b>Directions:</b><br>

1.Get on all fours, with your hands aligned with your shoulders and your knees aligned with your hips.<br>
2.Keeping your back straight, push your right foot out to the imaginary wall behind you while keeping your leg straight.<br>
3.Your foot should remain flexed throughout. Squeeze your buttocks at the top.
                </p>
                <button type="button" id="btn1" class="btn btn-primary" onclick="pip(7)">Coach Cam <i class="fa fa-video-camera"></i></button>
            </div>
        </div>
    </div>
    </div>
    

        
  
     <script>
        
        function flip(i) {
            var element = document.getElementsByClassName("flip-card-inner")[i];
            if(element.style.transform == "rotateY(180deg)") {
            element.style.transform = "rotateY(0deg)";
          }
          else {
            element.style.transform = "rotateY(180deg)";
          }
      }
      function pip(n) {
  
        //PIP PART
      const video = document.querySelectorAll('video')[n];
      const button = document.querySelectorAll('button')[n];
      video.requestPictureInPicture()
              .then(() => { /**/ })
              .catch(() => { /**/ });
  
  
      if (document.pictureInPictureElement) {
      document.exitPictureInPicture()
      .then(() => { /**/ })
      .catch(() => { /**/ });
      } else {
          // Request Picture-in-Picture
      }
  
      
      
  video.addEventListener('enterpictureinpicture', () => {
  button.innerHTML = 'Exit Coach Cam' + ' ' + '<i class="fa fa-sign-out"></i>';
  });
  
  video.addEventListener('leavepictureinpicture', () => {
  button.innerHTML = 'Coach Cam' + ' ' + '<i class="fa fa-video-camera"></i>';
  });
  flip(n);      
}
  
    </script>
     </body>
</html>
