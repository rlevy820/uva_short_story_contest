<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h2>Uploaded PDF's</h2><br>
    <table class="table">
      <thead class="table-light">
        <tr>
          <th scope="col">ID #</th>
          <th scope="col">Title</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr>
          
          
        <?php

          session_start();
          require "includes/connection.inc.php";
          require "includes/functions.inc.php";

          $id = $_SESSION['id'];

          $row_data = getData($conn, $id);

          $file_name_arr = array();

          $counter = 0;

          foreach($row_data as $data) {
              $file_content = $data[0];
              $file_name = $data[1];
              $id = $data[2];
              $title = $data[3];
              $fname = $data[4];
              $lname = $data[5];

              


              $counter++;

              //echo '<a href="data:application/pdf;base64,' . base64_encode($file_content) . '" target="_blank" download="' . $file_name . '">' . $id . ": " . $title . '</a>';
              //echo "<a href='data:appliaction/pdf;base64," . base64_encode($file_content) . " target='_blank' download='" . $file_name . "'>" . $title . "</a>";
              //echo "<br><br>";

              echo "
              <tr>
                <th scope='row'>" . $id . ", " . $fname . " " . $lname . "</th>";
                echo '<td><a href="data:application/pdf;base64,' . base64_encode($file_content) . '" target="_blank" download="' . $file_name . '">' . $title . '</a></td>';
                echo "
                <td></td>
              </tr>";
              
          }


        ?>
        </tr>
      </tbody>
    </table>
    <small style="padding: 10px;" class="form-text text-muted"><?php echo $counter; ?> Total Submission(s)</small>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


<?php

// session_start();
// require "includes/connection.inc.php";
// require "includes/functions.inc.php";

// $id = $_SESSION['id'];

// $row_data = getData($conn, $id);

// $file_name_arr = array();

// foreach($row_data as $data) {
//     $file_content = $data[0];
//     $file_name = $data[1];
//     $id = $data[2];
//     $title = $data[3];

//     echo '<a href="data:application/pdf;base64,' . base64_encode($file_content) . '" target="_blank" download="' . $file_name . '">' . $id . ": " . $title . '</a>';
//     echo "<br><br>";
// }


?>

<style>

h2 {
  padding: 20px;
}

a {
  outline: none;
  text-decoration: none;
  padding: 2px 1px 0;
}

a:link {
  color: #5DACF5;
}

a:focus {
  border-bottom: 1px solid;
  background: #EDC697;
}

a:hover {
  border-bottom: 1px solid;
  background: #F6E3CB;
}
</style>

