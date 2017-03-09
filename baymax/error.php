

<html>
<head></head>
<body>
<style>@import url(http://fonts.googleapis.com/css?family=Raleway:700);
*, *:before, *:after {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  background-color: #2c3e50;
  
  font-family: 'Raleway', sans-serif;
  
  height: 100%;
}

.text-wrapper {
  height: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;

}
@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}

.title {
  font-size: 6em;
  font-weight: 700;
  color: #EE4B5E;
}

.subtitle {
  font-size: 40px;
  font-weight: 700;
  color: #1FA9D6;
}

.buttons {
  margin: 30px;
}
.buttons a.button {
  font-weight: 700;
  border: 2px solid #EE4B5E;
  text-decoration: none;
  padding: 15px;
  text-transform: uppercase;
  color: #EE4B5E;
  border-radius: 26px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.buttons a.button:hover {
  background-color: #EE4B5E;
  color: white;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
</style>
<div class="text-wrapper">
    
    <div class="subtitle">
        <?php
session_start();
if(isset($_SESSION['e']))
{
$x=$_SESSION['e'];
echo $x;
unset($_SESSION['e']);
}
else
{
echo "The link you are seeking is broken  :( ";
}

?>
    </div>

    <div class="buttons">
        <a class="button" href="./login.php>Go to Login</a>
    </div>
</div>
</body>
</html>