<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login form</title>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
      <form  action="main.php" method="post" enctype="multipart/form-data">
            <h1>Login</h1>
            <div class="name fname">
                  <label for="fname">First name</label>
                  <input type="text" name="fname" id="fname" placeholder="Enter First Nmae" required autocomplete="on"/>
            </div>
            <div class="name lname">
                  <label for="lname">Last name</label>
                  <input type="text" name="lname" id="lname" placeholder="Enter Last Nmae" required autocomplete="on" />
            </div>
            <div class="email">
                  <label for="email">E-mail</label>
                  <input type="text" name="email" id="email" placeholder="Enter email" required autocomplete="on" />
            </div>
            <div class="batch">
                  <label for="batch">Batch</label>
                  <input type="text" name="batch" id="batch" placeholder="Enter your batch" required autocomplete="on" />
            </div>
            <div class="password">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" placeholder="password" required autocomplete="off" />
            </div>
            <div class="file">
                  <label>Upload your Image</label>
                  <input type="file" name="img" id="uploadImage" required>
            </div>
            <div class="button">
                  <input type="submit" value="Submit">
            </div>
      </form>
</body>
</html>