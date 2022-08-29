<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
    <!-- <script src="https://kit.fontawesome.com/8557daf5de.js" crossorigin="anonymous"></script> -->
  </head>
  <body>
    <header>
      <?php include("memberheader.php"); ?>
    </header>
    <main>
      <section class="index-banner"> <!-- Similar Content -->
        <div class="vertical-center">
        <h2>Bring us to our new<br>ForeverHome</h2>
        <h1><br>Adopt a pet now! <br>Search for a variety of pets in need of a new home<br></h1>
        <div class="btn-wrap">
          <a href="login.php">Adopt now!</a>
        </div>
        </div>
      </section>

      <section class="about-us">
        <div class="box1">
          <h1>Who are we?</h1>
          <div class="img-wrap">
            <img src="Imgs/banner7.png" alt="">
          </div>
        </div>
        <div class="box2">
          <h1>We are FOREVERHOME</h1>
          <p><br>Since the beginning, we have always had one vision: Pet lots of animals. OK maybe we have two visions. That was the first one. The second one is: "Every pet deserves a loving home". That vision led to the founding of FOREVERHOME, a non profit organization dedicated to bettering the lives of pets and their owners. You may know us from our volunteer work and appearances online. If you don't know us from that, then wow we should really replace our social media team. Anyway we're quite popular among adoption centres in particular because of the mentioned volunteer work. Or at least we think so. They still won't return our calls.</p>
        </div>
      </section>

      <h2 class="header-features">Features</h2>
      <section class="features">
        <div class="feature1">
          <div class="img-wrap-features">
            <img src="Imgs/centralizedicon.png" alt="">
          </div>
          <h1>Centralized</h1>
          <p>With the miracle of technology, everything you need is in one convenient location! Here you can adopt, post, discuss, and even become a centre owner yourself!</p>
        </div>
        <div class="feature2">
          <div class="img-wrap-features">
            <img src="Imgs/forumicon4.png" alt="">
          </div>
          <h1>Forum</h1>
          <p>Want to talk to other animal lovers? Well now you can do so outside of Facebook comment sections! Talk to your heart's content on our website's forum!</p>
        </div>
        <div class="feature3">
          <div class="img-wrap-features">
            <img src="Imgs/ForeverHome Logo.png" alt="">
          </div>
          <h1>Pet Quiz</h1>
          <p>Don't know what pet would be the best for you as a person? Well we'd recommend actually researching, but you could also try out our pet quiz!</p>
        </div>
      </section>

      <section class="parallax">
      	<div class="parallax-inner">
      		<h1>Bring your furry friend home!</h1>
          <p>Adopt, not shop.</p>
          <a href="login.php">Adopt Now</a>
      	</div>
      </section>

      <section class="quiz">
        <div class="box3">
          <h1>What pet is best suited for you?</h1>
          <p><br>Take our pet quiz and find out!. Our pet quiz uses a grading algorithm to match you to your perfect friend based on the answers you have given to particularly crafted questions.</p>
          <a onclick="location.href = '/sdp/Members/Quiz/quiz.php';" >Take the pet quiz!</a>
        </div>
        <div class="box4">
          <div class="img-wrap">
            <img src="Imgs/petquiz.png" alt="">
          </div>
        </div>
      </section>
    </main>
    <footer>
      <?php include("footer.php") ?>
    </footer>
    <script type="text/javascript">
      function error() {
        alert('Please Login first!');
      }
    </script>
  </body>
</html>
