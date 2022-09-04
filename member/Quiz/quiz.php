 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--So that the browser will render the width of the page at the width of its own screen-->
     <link rel="stylesheet" href="../../CSS/reset.css?v=<?php echo time(); ?>">
     <link rel="stylesheet" href="../../CSS/quizstyle.css?v=<?php echo time(); ?>">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <title>Pet Quiz!</title>
   </head>
   <body>

     <header>
       <?php
       include("../../header.php");
       include("../../session.php");
       ?>
     </header>
       <!-- <div class="page-wrap"> -->
       <div class="h1-wrap">
         <h1 class="index-headline">What Pet Should I Get?<br> Take Our Quiz and Find Out!</h1>
       </div>

  	<form action="grade.php" method="post" id="quiz">
              <ul id="test-questions">
                <img src="../../Imgs/quizimg1.jpg" alt="">
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>Why do you want a pet?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required />
                          <label for="question-1-answers-A">  I'm longing to care for a pint-sized companion</label>
                      </div>
                      <div>
                          <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B"  required />
                          <label for="question-1-answers-B">  I'd like a pet just like me: chirpy and quirky.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C"  required />
                          <label for="question-1-answers-C">  I'm looking for a BFF to share outdoor adventures and movie nights.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D"  required />
                          <label for="question-1-answers-D">  I'd like to come home to some low-key company after a long day.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-1-answers" id="question-1-answers-E" value="E" required />
                          <label for="question-1-answers-E">  I'm searching for the perfect roommate: fun, clean and a good listener.</label>
                      </div>
                      <p class="quiz-progress">1 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>How much time are you able to devote to your new friend?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/>
                          <label for="question-2-answers-A">  Not a lot. My calendar is often packed full.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" required/>
                          <label for="question-2-answers-B">  Plenty. I'm a homebody and I know a great pet sitter to back me up.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" required/>
                          <label for="question-2-answers-C">  I have very little time available for daily care or interaction.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" required/>
                          <label for="question-2-answers-D">  Tons! I have a flexible schedule and plan to hire help as needed.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-2-answers" id="question-2-answers-E" value="E" required/>
                          <label for="question-2-answers-E">  Sometimes my life gets busy, but I can find an extra hour or two each day.</label>
                      </div>
                      <p class="quiz-progress">2 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                       <h3>What's your home like?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/>
                          <label for="question-3-answers-A">  I have plenty of space in my home, plus a backyard.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" required/>
                          <label for="question-3-answers-B">  It's perfect for me, and I'm positive I don't want a pet roaming around.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" required/>
                          <label for="question-3-answers-C">  It's perfect for me, but I'm not so sure I want a pet roaming around...</label>
                      </div>
                      <div>
                          <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" required/>
                          <label for="question-3-answers-D">  Pretty fly, with plenty of perches.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-3-answers" id="question-3-answers-E" value="E" required/>
                          <label for="question-3-answers-E">  Cozy, with an abundance of sunny windowsills.</label>
                      </div>
                      <p class="quiz-progress">3 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>How much training are you willing to do?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/>
                          <label for="question-4-answers-A">  I’d prefer a pet that doesn’t require any training.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" required/>
                          <label for="question-4-answers-B">  A good amount. I’m prepared for the basics, and anything else that might benefit my pet.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" required/>
                          <label for="question-4-answers-C">  A little bit. Tricks sound especially fun!</label>
                      </div>
                      <div>
                          <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" required/>
                          <label for="question-4-answers-D">  As much as it takes. I plan to work with a trainer and am looking forward to learning along with my pet.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-4-answers" id="question-4-answers-E" value="E" required/>
                          <label for="question-4-answers-E">  I’m not against training, but I wasn’t planning on it.</label>
                      </div>
                      <p class="quiz-progress">4 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>What does your pet budget look like?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/>
                          <label for="question-5-answers-A">  Pretty good, but I’d like to avoid any major expenses.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" required/>
                          <label for="question-5-answers-B">  Generous. In addition to budgeting for the basics, I plan to have an emergency fund set aside.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" required/>
                          <label for="question-5-answers-C">  Healthy. I can afford both routine and unexpected costs, if necessary.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" required/>
                          <label for="question-5-answers-D">  Basic. I can afford start-up supplies and inexpensive recurring costs.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-5-answers" id="question-5-answers-E" value="E" required/>
                          <label for="question-5-answers-E">  After the initial costs for a habitat and supplies, I’d like to spend very little.</label>
                      </div>
                      <p class="quiz-progress">5 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>How much cleaning are you willing to do?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required/>
                          <label for="question-6-answers-A">  Habitat maintenance is fine, but anything beyond that is a deal breaker.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" required/>
                          <label for="question-6-answers-B">  I’m OK with muddy paws and the occasional chewed up cushion.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" required/>
                          <label for="question-6-answers-C">  As long as most of the mess remains in a cage, I don’t mind.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" required/>
                          <label for="question-6-answers-D">  The occasional spill or shedding won’t bother me.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-6-answers" id="question-6-answers-E" value="E" required/>
                          <label for="question-6-answers-E">  I’ve been called a neat freak, and I’m looking for a similar pet.</label>
                      </div>
                      <p class="quiz-progress">6 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>What is your favorite animal movie?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required/>
                          <label for="question-7-answers-A">  “Finding Nemo” swam its way into my heart.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" required/>
                          <label for="question-7-answers-B">  “Bolt” for the win!</label>
                      </div>
                      <div>
                          <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" required/>
                          <label for="question-7-answers-C">  “Ratatouille,” oui oui!</label>
                      </div>
                      <div>
                          <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" required/>
                          <label for="question-7-answers-D">  "Angry Birds" made me LOL.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-7-answers" id="question-7-answers-E" value="E" required/>
                          <label for="question-7-answers-E">  “Puss in Boots” made my spirits soar.</label>
                      </div>
                      <p class="quiz-progress">7 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3 class="anticipate">Now it’s time to see your results...</h3>
                      <input type="submit" value="Submit Quiz" id="submit-quiz" />
                  </li>
              </ul>
  	</form>
          <div class="nomargin"></div>
      <!-- </div> -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt);
                }, 333);
              });
           }(jQuery))
    </script>

   </body>
   <script src="../../JS/main.js?v=<?php echo time(); ?>"></script>
 </html>
