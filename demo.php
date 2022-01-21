<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
  <title>Responsive Navigation Bar</title>
  
  <style type="text/css">
  	
  	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  font-family: 'Poppins';
}
.BG{
  background: url(bg1.jpeg) no-repeat;
  background-size: cover;
  background-position: center;
  width: 100%;
  height: 100vh;
}
nav{
  background: #000000;
  height: 80px;
  width: 100%;
}
/*label.logo{
  font-family: 'Poppins';
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: 500;
}
label.logo:hover{
  color: #5eb9ff;
}*/
nav ul{
  float: left;
  margin-right: 20px;
}
nav ul li {
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  font-family: 'Poppins';
  font-size: 17px;
  font-weight: 500;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
  color: white;
}
a.active,a:hover{
  color: #5eb9ff;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none ;
}
@media (max-width: 952px){
label.logo{
  font-size: 30px;
  padding-left: 50px;
}
nav ul li a{
  font-size: 16px;
}

}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 60%;
    height: 100vh;
    background: #000000c9;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  
#check:checked ~ ul{
  left: 0;
}
}



  </style>

</head>
<body>
  <div class="BG">
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <!-- <label class="logo">NICK</label> -->

      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>

  </div>
  
</body>
</html>