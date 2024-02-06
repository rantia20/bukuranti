<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

      * {
    margin:0; 
    padding:0;
  }
 
  nav {
    margin:auto;
    text-align: center;
    width: 100%;
    font-family: arial;
  } 
  
  nav ul {
    background:#37988e;
    padding: 0 20px;
    list-style: none;
    position: relative;
    display: inline-table;
    width: 100%;
   }

  nav ul li{
    float:left;
  }

  nav ul li:hover{
    background:#d68d9a;
  }

  nav ul li:hover a{
    color:#000;
  }

  nav ul li a{
    display: block;
    padding: 25px;
    color: #fff;
    text-decoration: none;
  }

    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin: 10px 0 5px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<nav>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Gallery</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</nav>


<div class="container">
  <h2>Login</h2>
  <form action="proses_login.php" method="post">
    <label for="username">username:</label>
    <input type="username" id="username" name="username" required>

    <label for="password">password:</label>
    <input type="password" id="password" name="password" required>


    <button type="submit">Login</button>
  </form>
</div>

</body>
</html>