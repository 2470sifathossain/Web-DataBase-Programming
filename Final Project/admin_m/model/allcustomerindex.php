<?php ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Second</title>
<style>

#logo{
   height: 150px;
   width:20%;
   background-color:#2DB567;
   left:0px;
   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;	
	
}

#banner{
   height: 150px;
   width:80%;
   background-color:white;
   right:0px;

   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#menu{
   height: 50px;
   width:100%;
   background-color:#28A7AF;
   left:0px;
   top:150px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#leftbar{
        top: 200px;
        left: 0px;
        height: 600px;
        width: 20%;
        
        background-image:m2.jpg;
        
        position: absolute;
        border: FFFFFF solid 2px;
		text-align:center;
}
#rightbar{
        top: 200px;
        right: 0px;
        height: 600px;
        width: 20%;
        
        position: absolute;
        border: FFFFFF solid 2px;
text-align:center;
}

#cont{
        top: 200px;
        left: 20%;
	right:20%;
        height:600px;
        width: 60%;
        background-color : #FFFFFF;
        position: absolute;
        border: FFFFFF solid 2px;
}
#contlt{
        top: 0px;
        left: 0px;
        height:50px;
        width: 50%;
        background-color : #FFFFFF;
        position: absolute;
        border: FFFFFF solid 2px;
}

#contrt{
        top: 0px;
        right: 0px;
        height:50px;
        width: 50%;
        background-color : #FFFFFF;
        position: absolute;
        border: FFFFFF solid 2px;
}
#contld{
        top: 200px;
        left: 0px;
        height:50px;
        width: 50%;
        background-color : #FFFFFF;
        position: absolute;
        border: FFFFFF solid 2px;
}
#contrd{
        top: 200px;
        right: 0px;
        height:50px;
        width: 50%;
        background-color : #FFFFFF;
        position: absolute;
        border: FFFFFF solid 2px;
}

#footer{
    height:50px;
   width:100%;
   
   left:0px;
   top:750px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#footercont{
    height: 50px;
   width:70%;
   
   left:0px;
   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;
}
#icon{
    height: 50px;
   width:30%;
   
   right:0px;
   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#icon img{ height:50px; width:32%;	border-radius:70%;
}



ul{ list-style:none; text-align:center;

}
ul li { display:inline; text-align:center; margin-left:50px;}

/* unvisited link */
a:link {
  color: red;
  text-decoration:none;
  transition: linear 0.3s;
  
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: hotpink;
  background-color:#0C3;
  border-radius:50%;
}

/* selected link */
a:active {
  color: blue;
}
/* CSS Document */
</style>


</head>


<body>
<div id="logo">
<img src="img/logo.jpg" height="150px" width="100%" />
</div>

<div id="banner"><img src="img/im3.png" height="150px" width="100%" />
</div>

<div id="menu"> 
<ul>
<li><a href="../mymobile.php">Home|</a></li>

</ul>
</div>

<div id = "leftbar"> 
<p><a href="../mymobile.php">Home</a></P>
<p><a href="../contact.php">Contact</a></p>
<p> About </p>
<p> Call </p> 
</div>

<div id = "rightbar"> 
<p><u><big> Mobile List </big></u></p>
<P><a href="#">IPHONE</a></P>
<P><a href="#">SAMSUNG</a></P>
<P><a href="#">MI</a></P>
<P><a href="#">LAVA</a></P>
<P> <a href="#">HTC</a></P>
</div>



<div id = "cont">
<?php
include("../view/allcustomer.php");
?>
</div>

<div id ="footer">
<div id ="footercont"><p> Design By @SifatIt </p> </div>

<div id ="icon">
<img src="img/f1.png" height="50px" width="33%"/>
<img src="img/sky1.jpg" height="50px" width="30%" />
<img src="img/in1.png" height="50px" width="30%" />
</div>




</body>
</html>
