<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body { text-align: center; font-family: Arial, Helvetica, sans-serif;}
form {text-align: center;}
<div class="bg-image"></div>
input[type=text], input[type=password] {
  width: 50%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  color:#ccc);
  box-sizing: border-box;
  text-align: center;
  background-color: rgb(226, 226, 226);
}

button.Login {
  background-color: orange;
  border-color: orange;
  border-width: 2cm;
  color: white;
  border: 2cm;
  cursor: pointer;
  width: 20%;
  height: 50px;
  text-align: center;
  
}

button:hover {
  opacity: 0.8;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Concept Login scherm per 17/11</h2>



  
  <label>
    <input style="vertical-align: middle" type="checkbox" checked="checked" name="remember"> Onthoud mij
  </label>
</div>
    <br>
    <br>
    <br>
    <div>   
    <button class="Login" type="submit">Login</button>
    

  <div class="container">
    <span class="psw">Wachtwoord <a href="#">vergeten?</a></span>
  </div>
</form>

</body>
</html>
