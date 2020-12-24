<!DOCTYPE html>

<html>

    <head>
        <title>AlzheimerGame</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="game.css">
        
        <!--favicon-->
        <link rel="icon" href="panda.png" type="image/png" sizes="16x16"/>
        
        <!--font for menu-->
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 
        <!--font for header-->
        <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
        <script language="javascript" type="text/javascript">
            function windowClose() {
                window.open('','_parent','');
                window.close();
            }
        </script>
    </head>
    
    <div id="wrapper">
        <body>
        
            <!--The one where I put PandaGame-->
            <header>
              <!-- Mute, Play, Pause and stop button -->
                <h1><img src="panda2.ico">&nbsp;AlzheimerGame</h1>
            </header>
            <div class="controls">
            <a href="#" id="mutebtn"><img src="speaker.png" onclick="change();" id="sound" width="80px" onmousedown="bleep.play()"></a>
            <a href="#" class="buttonL" ><img src="pause.png" width="80px" onclick="changePic();" id="play&pause" onmousedown="bleep.play()"></a>
            <a href="#" id="myBtn" class="buttonL" ><img src="stop.png" width="80px" onClick="stopwatch.stop();" onmousedown="bleep.play()"></a> 
        </div>

                <main>
                    <!-- display score and time -->
                    <br>
                    <center><h2 class="buttonP">Score: <output id='out'>0</output>&nbsp;&nbsp;&nbsp;&nbsp;Time: <output class="stopwatch"></output></h2></center>
                    <br>
                    <!--all menu-->
                    <!-- All Questions -->
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 10</div>
                        <img src="questions/hardQ1.png" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(2); minus();" onmousedown="correct.play()"><img src="options/option27.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(2); plus();" onmousedown="correct.play()"><img src="options/option33.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(2); minus();" onmousedown="correct.play()"><img src="options/option88.png" width="150px"></button>
                    </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 10</div>
                        <img src="questions/hardQ2.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(3); minus();" onmousedown="correct.play()"><img src="options/option88.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(3); minus();" onmousedown="correct.play()"><img src="options/option30.png" width="150px"></button> 
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(3); plus();" onmousedown="correct.play()"><img src="options/option22.png" width="150px"></button>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 10</div>
                        <img src="questions/hardQ3.png" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(4); plus();" onmousedown="correct.play()"><img src="options/option45.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(4); minus();" onmousedown="correct.play()"><img src="options/option88.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(4); minus();" onmousedown="correct.play()"><img src="options/option65.png" width="150px"></button> 
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">4 / 10</div>
                        <img src="questions/hardQ4.png" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(5); plus();" onmousedown="correct.play()"><img src="options/option11b.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(5); minus();" onmousedown="correct.play()"><img src="options/option33.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(5); minus();" onmousedown="correct.play()"><img src="options/option88.png" width="150px"></button>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">5 / 10</div>
                        <img src="questions/hardQ5.png" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(6); minus();" onmousedown="correct.play()"><img src="options/option70.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(6); minus();" onmousedown="correct.play()"><img src="options/option88.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(6); plus();" onmousedown="correct.play()"><img src="options/option55.png" width="150px"></button>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">6 / 10</div>
                        <img src="questions/hardQ6.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="plus(); show();" onmousedown="correct.play()"><img src="options/option15.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="minus(); show();" onmousedown="correct.play()"><img src="options/option28.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="minus(); show();" onmousedown="correct.play()"><img src="options/option30.png" width="150px"></button>
                </div>
                <!-- Pop Up Score -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <center><h1>EXCELLENT!</h1>
        <br>
    <form action="insertHard.php" method="post">
    <h2>Score:</h2><input type="text" name="score" id="input2" style="border: none; color: black; font-family: 'Black Ops One', cursive;
    font-size: 30px; text-align: center;">
<br/>
<br>
<h2>Time: </h2><input type="text" name="timetaken" id="input3" style="border: none; color: black; font-family: 'Black Ops One', cursive;
    font-size: 30px; text-align: center;">
<br/>
<input type="text" name="username" id="username" style="border: none; color: white; opacity: 100%;">
<!-- <input type="text" name="level" id="input8" style="border: none; color: white; opacity: 100%;"> -->
<input type="text" name="time" id="input5" style="border: none; color: white; opacity: 100%;">
<input type="text" name="date" id="input6" style="border: none; color: white; opacity: 100%;">
<br>
<input type="submit" value="Save" onmousedown="bleep.play()">

</form>
  </div>
</div> 

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
                <span class="dot" onclick="currentSlide(5)"></span> 
                <span class="dot" onclick="currentSlide(6)"></span> 
            </div>
                </main>
             <script src="main.js"></script>
        </body>
        
        <footer>
            <p>Copyright &copy;PANDA 2019</p>
        
        </footer>
    </div>

</html>