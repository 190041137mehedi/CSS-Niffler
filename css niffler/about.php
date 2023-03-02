<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<title>CSS Niffler</title>
</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
     
		<?php include("include/header.php");?>
       
        <div class="full-row">
            <div class="container">

<div class="containerabout">
  <div class="card">
    <div class="box">
      <div class="content">
        <h2>Niffler</h2>
        <h3 style="color: black;">Card One</h3>
        <p style="color: black;">Play for fun</p>
        <a href="#">Read More</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
        <h2>Niffler</h2>
        <h3 style="color: black;">Card Two</h3>
        <p style="color: black;">Learn CSS properties</p>
        <a href="#">Read More</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
        <h2>Niffler</h2>
        <h3 style="color: black;">Card Three</h3>
        <p style="color: black;">CSS learning platform</p>
        <a href="#">Read More</a>
      </div>
    </div>
  </div>
</div>


    <div class="containerProfile">
      <div class="card">
        <img src="https://lh3.googleusercontent.com/ytP9VP86DItizVX2YNA-xTYzV09IS7rh4WexVp7eilIcfHmm74B7odbcwD5DTXmL0PF42i2wnRKSFPBHlmSjCblWHDCD2oD1oaM1CGFcSd48VBKJfsCi4bS170PKxGwji8CPmehwPw=w200-h247-no" alt="Person" class="card__image">
        <p class="card__name">Rifa</p>
        <div class="grid-container">

          <div class="grid-child-posts">
            IUT,CSE
          </div>


        </div>
        
        <button class="btn draw-border">Details</button>
        

      </div>
      <div class="card">
        <img src="https://lh3.googleusercontent.com/oUUiPB9sq3ACq4bUaRmo8pgvC4FUpRRrQKcGIBSOsafawZfRpF1vruFeYt6uCfL6wGDQyvOi6Ez9Bpf1Fb7APKjIyVsft7FLGR6QqdRFTiceNQBm1In9aZyrXp33cZi9pUNqjHASdA=s170-no" alt="Person" class="card__image">
        <p class="card__name">Mehedi</p>
        <div class="grid-container">

          <div class="grid-child-posts">
          IUT,CSE
          </div>

        

        </div>
        
        <button class="btn draw-border">Details</button>
        
      </div>
      <div class="card">
        <img src="https://lh3.googleusercontent.com/pZwZJ5HIL5iKbA91UGMUIPR0VJWa3K0vOGzDZmY6wU3EJBUdfsby3VEyxU162XxTyOyP3D154tjkr-4Jgcx8lygYUR8eB-jVmld4dsHi1c-mE_A8jKccseAG7bdEwVrcuuk6ciNtSw=s170-no" alt="Person" class="card__image">
        <p class="card__name">Eleen</p>
        <div class="grid-container">

          <div class="grid-child-posts">
          IUT,CSE
          </div>


        </div>
        <ul class="social-icons">
        
        <button class="btn draw-border">Details</button>
        
      </div>
      <div class="card">
        <img src="https://lh3.googleusercontent.com/pZwZJ5HIL5iKbA91UGMUIPR0VJWa3K0vOGzDZmY6wU3EJBUdfsby3VEyxU162XxTyOyP3D154tjkr-4Jgcx8lygYUR8eB-jVmld4dsHi1c-mE_A8jKccseAG7bdEwVrcuuk6ciNtSw=s170-no" alt="Person" class="card__image">
        <p class="card__name">Lamia</p>
        <div class="grid-container">

          <div class="grid-child-posts">
          IUT,CSE
          </div>

        </div>
        
        <button class="btn draw-border">Details</button>
      
      </div>
    </div>
 
   
            </div>
            
        </div>
   
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>

</body>

</html>