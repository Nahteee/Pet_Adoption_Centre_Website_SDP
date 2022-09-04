<?php //include("../../header.php"); ?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>What pet should I get? Quiz Results</title>

	<link rel="stylesheet" href="../../CSS/reset.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="../../CSS/quizstyle.css?v=<?php echo time(); ?>">
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
</head>

<body>

	<div id="page-wrap">

		<h1 class="transparent index-headline" >Here&#8217;s what pet you should get.</h1>

        <?php

           /**
            * Make a new variable for each question, so we can grab the answers from them.
            * If you have more than five questions, add answer variables as appropriate.
            */

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
						$answer6 = $_POST['question-6-answers'];
						$answer7 = $_POST['question-7-answers'];

            /**
            * Now, make outcome variables, and set those values to zero.
            * These variables represent our four outcome screens.
            * Whatever outcome variable has the most points at the end, "wins".
            */

            $totalA = 0; //DOG
            $totalB = 0; //CAT
            $totalC = 0; //FISH
            $totalD = 0; //BIRD
						$totalE = 0; //HAMSTER

            /**
            * For each question, look at the answers, and add points to the outcome variables as indicated.
            * You may ask, "Why aren't we giving one point to A, one point to B, etc?".
            * Good question. It has to do with tie breakers.
            * In a five question test, what if someone "votes" twice each for A and B, and once for C?
            * How do you determine what wins between A and B in that scenario?
            * There has to be at least one unevenly weighted question to break ties, but you can have more than one.
            * For this quiz, I also wanted to add give points to different outcomes for certain answers.
            *
            */

            if ($answer1 == "A") { $totalA = $totalA + 0.53; $totalB = $totalB + 0.75; $totalD = $totalD + 1.13; $totalE = $totalE + 1.33; }
            if ($answer1 == "B") { $totalA = $totalA + 0.63; $totalE = $totalE + 1.55; }
            if ($answer1 == "C") { $totalA = $totalA + 1.13; $totalB = $totalB + 1.03; }
            if ($answer1 == "D") { $totalC = $totalC + 1.46; $totalB = $totalB + 1.28; }
						if ($answer1 == "E") { $totalB = $totalB + 1.11; $totalC = $totalC + 1.07; }

            if ($answer2 == "A") { $totalC = $totalC + 1.03; $totalE = $totalE + 0.53; $totalD = $totalD + 0.73; }
            if ($answer2 == "B") { $totalB = $totalB + 1.05; $totalA = $totalA + 1.05; }
            if ($answer2 == "C") { $totalC = $totalC + 1.03; $totalE = $totalE + 0.73; }
            if ($answer2 == "D") { $totalA = $totalA + 1.27; $totalB = $totalB + 1.17; }
						if ($answer2 == "E") { $totalA = $totalA + 1.16; $totalB = $totalB + 1.24; }

            if ($answer3 == "A") { $totalA = $totalA + 1.27; $totalB = $totalB + 1.12; }
            if ($answer3 == "B") { $totalC = $totalC + 1.05; $totalE = $totalE + 1.03; }
            if ($answer3 == "C") { $totalC = $totalC + 0.63; $totalD = $totalD + 0.63; $totalD = $totalD + 0.63; }
            if ($answer3 == "D") { $totalD = $totalD + 1.36; $totalB = $totalB + 1.07; }
						if ($answer3 == "E") { $totalB = $totalB + 1.26; $totalA = $totalA + 1.26; }

            if ($answer4 == "A") { $totalE = $totalE + 1.07; $totalC = $totalC + 1.17; }
            if ($answer4 == "B") { $totalB = $totalB + 1.05; $totalA = $totalA + 1.27; $totalD = $totalD + 1.27; }
            if ($answer4 == "C") { $totalB = $totalB + 1.13; $totalA = $totalA + 1.05; $totalD = $totalD + 1.05; }
            if ($answer4 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + 1.04; $totalA = $totalA + 1.12; }
						if ($answer4 == "E") { $totalB = $totalB + 1.16; $totalD = $totalD + 1.11; }

            if ($answer5 == "A") { $totalB = $totalB + 1.17; $totalE = $totalE + 1.18; }
            if ($answer5 == "B") { $totalB = $totalB + 1.15; $totalA = $totalA + 1.27; }
            if ($answer5 == "C") { $totalA = $totalA + 1.14; $totalB = $totalB + 1.11; $totalD = $totalD + 1.08; }
            if ($answer5 == "D") { $totalA = $totalA + 1.04; $totalB = $totalB + 1.01; $totalD = $totalD + 1.08; $totalC = $totalC + 1.08; $totalE = $totalE + 1.08;}
						if ($answer5 == "E") { $totalE = $totalE + 1.16; $totalC = $totalC + 1.07; }

						if ($answer6 == "A") { $totalE = $totalE + 1.03; $totalC = $totalC + 1.08; }
            if ($answer6 == "B") { $totalA = $totalA + 1.15; }
            if ($answer6 == "C") { $totalE = $totalE + 1.13; }
            if ($answer6 == "D") { $totalB = $totalB + 1.16; }
						if ($answer6 == "E") { $totalC = $totalC + 1.16; }

						if ($answer7 == "A") { $totalC = $totalC + 1.23; }
            if ($answer7 == "B") { $totalA = $totalA + 1.15; }
            if ($answer7 == "C") { $totalE = $totalE + 1.13; }
            if ($answer7 == "D") { $totalD = $totalD + 1.16; }
						if ($answer7 == "E") { $totalB = $totalB + 1.16; $totalA = $totalA + .07; }

            ?>

            <div class="results-overlay">

            <?php
            /**
             * Now we compare our outcome variables.
             * I used AND (&&) in the if statements. You can also use OR (||).
             */
            ?>

            <?php
						//CAT DOG FISH BIRD HAMSTER
            if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD && $totalA > $totalE) {
							    echo '<div class="results-text"><p class="you-chose">You Scored:</p><img src="dog.jpeg" alt="a dog" class="results-img" /><div class="results test-results2"><p class="score">DOG</p><p class="score-details" style="color: black; font-size: 16px;">Dogs are the best known pet, and for a reason! Man\'s best friend can be extremely intelligent and are very capable of being trained. However, prepare to devote a lot of your time into raising and caring for this furry friend, as sometimes they can be...personable. It\'s well worth it in the end though, as you\'ll end up with a friend for a lifetime! (until it dies maybe)</p><a id="replay" class="take-quiz-btn" href="quiz.php">Play Again?</a></div><a id="replay" class="take-quiz-btn" href="../../index.php">Back</a></div></center>';

            }
            elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD && $totalB > $totalE) {
      						echo '<div class="results-text"><p class="you-chose">You Scored:</p><img src="cat.jpg" alt="a cat" class="results-img" /><div class="results test-results2"><p class="score">CAT</p><p class="score-details" style="color: black; font-size: 16px;">Cats are known for their flexible bodies, superior reflexes and adorable appearance. Despite how they look, they also possess claws for hunting small animals, so make sure to get a scratching post to spare your furniture!</p><a id="replay" class="take-quiz-btn" href="quiz.php">Play Again?</a></div><a id="replay" class="take-quiz-btn" href="../../index.php">Back</a></div>';
            }
            elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD && $totalC > $totalE) {
                  echo '<div class="results-text"><p class="you-chose">You Scored:</p><img src="fish.jpg" alt="a fish" class="results-img" /><div class="results test-results2"><p class="score">FISH</p><p class="score-details" style="color: black; font-size: 16px;">Despite what many people may think, fish are not boring pets, and they certainly require more care than you think! In fact, a lot of fish show signs of intelligence, and some can even be trained! However, if you prefer not to do that, then a pet fish can flourish on its own, given a proper tank (that\'s right, tank. Don\'t you dare try putting a fish in a bowl) and a bit of care and affection, like all pets do.<p></p><a id="replay" class="take-quiz-btn" href="quiz.php">Play Again</a></div> <a id="replay" class="take-quiz-btn" href="../../index.php">Back</a></div>';
            }
            elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC && $totalD > $totalE) {
                  echo '<div class="results-text"><p class="you-chose">You Scored:</p><img src="bird.jpg" alt="a bird" class="results-img" /><div class="results test-results2"><p class="score">BIRD</p><p class="score-details" style="color: black; font-size: 16px;">A pet bird is friendly, gentle, and have been treated as companions for hundreds of years! They can also vary in size so make sure you pick one that\'s right for your situation. Birds are more trainable than other pets, and you may need to spend more for their cages. Also make sure to bring them out frequently, you would be bored too if you were kept in a cage all day, no matter how expensive it was!</p><a id="replay" class="take-quiz-btn" href="quiz.php">Play Again</a></div><a id="replay" class="take-quiz-btn" href="../../index.php">Back</a></div>';
            }
						elseif ($totalE > $totalA && $totalE > $totalB && $totalE > $totalC && $totalE > $totalD) {
                  echo '<div class="results-text"><p class="you-chose">You Scored:</p><img src="hamster.jpg" alt="a hampter" class="results-img" /><div class="results test-results2"><p class="score">HAMSTER</p><p class="score-details" style="color: black; font-size: 16px;">Hamsters are adorable balls of fun that love scurrying around. They are quite friendly towards humans, but thrive when kept with other hamsters. Just make sure to get one of a different gender though, unless you\'re prepared for the horrors of hamster birth. Don\'t let their size fool you, hamsters need quite a big and clean cage! They love exploring their surroundings as well, so take them out once in a while.</p><a id="replay" class="take-quiz-btn" href="quiz.php">Play Again</a></div><a id="replay" class="take-quiz-btn" href="../../index.php">Back</a></div>';
            }

        ?>
                </div>
            </div>

           <?php
           /**
            * Modal window, in case people wan to share your quiz.
            * Virality!!!
            */
           ?>
   
	</div>

  <script type="text/javascript">
      function modalshow(){

        modalbg = document.getElementById("modalbg");
        modalbg.style.display = "block";
        modalwindow = document.getElementById("modalwindow");
        modalwindow.style.display = "block";
      }
      function modalhide(){
        document.getElementById("modalbg").style.display = "none";
        document.getElementById("modalwindow").style.display = "none";
      }
  </script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-000000000-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
