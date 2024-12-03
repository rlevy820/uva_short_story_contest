
<?php


session_start();
require "includes/connection.inc.php";
require "includes/functions.inc.php";

if(isset($_GET['good'])) {
  if($_GET["good"] == "fileuploaded") {
    echo "
  <div style='margin:0;' class='alert alert-success alert-dismissible fade show' role='alert'>
    <center>
    <h4 class='alert-heading'>File Uploaded!</h4>
    <p>Your short story has been received! Thank you for submitting</p>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </center>
  </div>";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>UVA Short Story Contest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>


  <div class="row title-row d-flex flex-row flex-column justify-content-center align-items-center">
    <div class="">
      <div class="d-flex flex-column justify-content-center">
        <div class="title-next align-items-stretch d-flex flex-row align-items-center justify-content-center">
          <div class="mccunelogo">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;</div>
        </div>
        <p class="display-3 h1"><strong>Short Story Contest</strong></p>
        <p class="display-5 h2"><strong>Congratulations to Chloe Ross!</strong></p>
        <p class="display-8 h3">Purchase a copy of a short story collection of our top 20 submissions <a href="https://www.amazon.com/Voices-Visions-Samson-McCune/dp/1958401013/ref=sr_1_3?qid=1692818484&refinements=p_27%3ASamson+McCune&s=books&sr=1-3&text=Samson+McCune">here<a></p>
      </div>
    </div>
  </div>

  <div class="row d-flex flex-row flex-column justify-content-center align-items-center">
    <blockquote class="blockquote text-center quote">
      <p class="mb-0 h4" style="color: white !important; font-family: 'times new roman', sans-serif !important;">Words have no power to impress the mind without the exquisite horror of their reality.</p>
      <p class="blockquote-footer author" style="color: #E57200 !important;"><cite title="Source Title">Edgar Allan Poe</cite></p>
    </blockquote>
  </div>

  <div class="row2 d-flex flex-row flex-column justify-content-center align-items-center">
    
      <p class="h5 text-center mission" style="word-wrap: break-word; font-family: 'times new roman', sans-serif !important;">
            <kbd> McCune Entertainment</kbd> publishing company seeks to provide voices to new writers and thinkers from UVA and wish to create an environment in which their narratives and ideas can be heard. We hope to bring your stories to a wider audience and reward you for your creativity. This contest is open to UVA students who have written a short story they are passionate about.
          </p>

          <!-- <a href="submission.php" style="margin-bottom:50px; margin-top: 10px; padding-left: 30px; padding-right: 30px;" class="submit btn btn-lg btn-primary">Rules & Submission Form</a> -->
          <a href="#" style="margin-bottom:50px; margin-top: 10px; padding-left: 30px; padding-right: 30px;" class="btn btn-lg btn-primary">Rules & Submission Form</a>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">

      
    </script>
  </body>
</html>

<style>

@media screen and (min-width: 320px) {
  .mission {
    margin: 50px;
  }
  .btn {
    margin-bottom: 450px;
  }
  .row2 {
    height: 900px;
  }
}
</style>

<?php include "footer.php"; ?>