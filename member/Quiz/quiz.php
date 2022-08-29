<?php
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--So that the browser will render the width of the page at the width of its own screen-->
     <link rel="stylesheet" href="../../CSS/reset.css?v=<?php echo time(); ?>">
     <link rel="stylesheet" href="../../CSS/style.css?v=<?php echo time(); ?>">
     <title></title>
   </head>
   <body>
       <div id="page-wrap">
          <h1 class="index-headline">What Pet Should I Get?<br> Take Our Quiz and Find Out!</h1>
  	<form action="grade.php" method="post" id="quiz">
              <ul id="test-questions">
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>Why do you want a pet?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                          <label for="question-1-answers-A">a.  I'm longing to care for a pint-sized companion</label>
                      </div>
                      <div>
                          <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                          <label for="question-1-answers-B">b.  I'd like a pet just like me: chirpy and quirky.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                          <label for="question-1-answers-C">c.  I'm looking for a BFF to share outdoor adventures and movie nights.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                          <label for="question-1-answers-D">d.  I'd like to come home to some low-key company after a long day.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-1-answers" id="question-1-answers-E" value="E" />
                          <label for="question-1-answers-E">d.  I'm searching for the perfect roommate: fun, clean and a good listener.</label>
                      </div>
                      <p class="quiz-progress">1 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>How much time are you able to devote to your new friend?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                          <label for="question-2-answers-A">a.  Not a lot. My calendar is often packed full.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                          <label for="question-2-answers-B">b.  Plenty. I'm a homebody and I know a great pet sitter to back me up.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                          <label for="question-2-answers-C">c.  I have very little time available for daily care or interaction.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                          <label for="question-2-answers-D">d.  Tons! I have a flexible schedule and plan to hire help as needed.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-2-answers" id="question-2-answers-E" value="E" />
                          <label for="question-2-answers-E">e.  Sometimes my life gets busy, but I can find an extra hour or two each day.</label>
                      </div>
                      <p class="quiz-progress">2 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                       <h3>What's your home like?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                          <label for="question-3-answers-A">a.  I have plenty of space in my home, plus a backyard.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                          <label for="question-3-answers-B">b.  It's perfect for me, and I'm positive I don't want a pet roaming around.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                          <label for="question-3-answers-C">c.  It's perfect for me, but I'm not so sure I want a pet roaming around...</label>
                      </div>
                      <div>
                          <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                          <label for="question-3-answers-D">d.  Pretty fly, with plenty of perches.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-3-answers" id="question-3-answers-E" value="E" />
                          <label for="question-3-answers-E">e.  Cozy, with an abundance of sunny windowsills.</label>
                      </div>
                      <p class="quiz-progress">3 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>How much training are you willing to do?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                          <label for="question-4-answers-A">a.  I’d prefer a pet that doesn’t require any training.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                          <label for="question-4-answers-B">b.  A good amount. I’m prepared for the basics, and anything else that might benefit my pet.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                          <label for="question-4-answers-C">c.  A little bit. Tricks sound especially fun!</label>
                      </div>
                      <div>
                          <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                          <label for="question-4-answers-D">d.  As much as it takes. I plan to work with a trainer and am looking forward to learning along with my pet.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-4-answers" id="question-4-answers-E" value="E" />
                          <label for="question-4-answers-E">e.  I’m not against training, but I wasn’t planning on it.</label>
                      </div>
                      <p class="quiz-progress">4 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>What does your pet budget look like?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                          <label for="question-5-answers-A">a.  Pretty good, but I’d like to avoid any major expenses.</label>
                      <div>
                          <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                          <label for="question-5-answers-B">b.  Generous. In addition to budgeting for the basics, I plan to have an emergency fund set aside.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                          <label for="question-5-answers-C">c.  Healthy. I can afford both routine and unexpected costs, if necessary.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                          <label for="question-5-answers-D">d.  Basic. I can afford start-up supplies and inexpensive recurring costs.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-5-answers" id="question-5-answers-E" value="E" />
                          <label for="question-5-answers-E">e.  After the initial costs for a habitat and supplies, I’d like to spend very little.</label>
                      </div>
                      <p class="quiz-progress">5 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>How much cleaning are you willing to do?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                          <label for="question-6-answers-A">a.  Habitat maintenance is fine, but anything beyond that is a deal breaker.</label>
                      <div>
                          <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                          <label for="question-6-answers-B">b.  I’m OK with muddy paws and the occasional chewed up cushion.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                          <label for="question-6-answers-C">c.  As long as most of the mess remains in a cage, I don’t mind.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                          <label for="question-6-answers-D">d.  The occasional spill or shedding won’t bother me.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-6-answers" id="question-6-answers-E" value="E" />
                          <label for="question-6-answers-E">e.  I’ve been called a neat freak, and I’m looking for a similar pet.</label>
                      </div>
                      <p class="quiz-progress">6 of 7</p>
                  </li>
                  <li>
                      <div class="quiz-overlay"></div>
                      <h3>What is your favorite animal movie?</h3>
                      <div class="mtm">
                          <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                          <label for="question-7-answers-A">a.  “Finding Nemo” swam its way into my heart.</label>
                      <div>
                          <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                          <label for="question-7-answers-B">b.  “Bolt” for the win!</label>
                      </div>
                      <div>
                          <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                          <label for="question-7-answers-C">c.  “Ratatouille,” oui oui!</label>
                      </div>
                      <div>
                          <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                          <label for="question-7-answers-D">d.  "Angry Birds" made me LOL.</label>
                      </div>
                      <div>
                          <input type="radio" name="question-7-answers" id="question-7-answers-E" value="E" />
                          <label for="question-7-answers-E">e.  “Puss in Boots” made my spirits soar.</label>
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
      </div>
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
 </html>
