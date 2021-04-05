<?php 
      
      $password = $_REQUEST['password'];

      if (!empty($password)) {
            
            echo " <div class='alert success' >
                        <h2>Login Succesful</h2>
                        </div>";

      } else {
            echo "<div class='alert faild' id='alert>
                        <h2>Login Failed !</h2>
                        </div>";
      }

      
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welcome To Home</title>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
      
      <div class="container">
            
            <div class="profile-card">
                  <div class="card-head">
                        
                        <?php 
                              $img = $_FILES['img'];
                              $name = $img['name'];
                              $type = $img['type'];
                              $tmp_name = $img['tmp_name'];

                              if (!empty($name)) {
                                    # IMG LOCATIN...
                                    $location = 'image/';

                                    if (move_uploaded_file($tmp_name, $location.$name)) {
                                          
                                          $path = $location.$name;
                                          echo "<img src='$path' alt='Porfile Image'>";
                                    } else {
                                          echo "Faild, Try Agin";
                                    }

                              } else {
                                    echo "File Not Found";
                              }
                        ?>
                        
                  </div>
                  <div class="card-body">
                        <h1>user information</h1>
                        <div class="user-meta">
                              <h3>Name : <span>
                                    <?php 
                                          $firstNmae = $_REQUEST['fname'];
                                          $lastNmae = $_REQUEST['lname'];
                                          
                                          echo $firstNmae. " " .$lastNmae;
                                    ?>
                              
                              </span></h3>
                              <h3>ID : <span id="userId"></span></h3>
                              <h3>E-mail : <span>
                                    
                                    <?php
                                          $email = $_REQUEST['email'];
                                          echo $email;
                                    
                                    ?>
                              </span></h3>
                              <h3>Batch No : <span id="bacthNo">
                                    <?php 
                                          $batch = $_REQUEST['batch'];
                                          echo $batch;
                                    ?>
                                    <sup id="sup">nd</sup></span></h3>
                        </div>
                  </div>
            </div>
      </div>
      <script src="js/main.js"></script>
      <script>
            setTimeout(()=> {
            let alertwindow = document.querySelector(".alert");
            
            alertwindow.style.display= "none";
      }, 4*1000);

      let batch = document.querySelector("#batch").value;

      let toInt = Number(batch);

      switch (toInt) {
            case "1":
                  console.log(`st`);
                  break;

            default:
                  break;
      }
      </script>
</body>
</html>