<?php
include 'base2.php';
$Username=$_POST['a'];
$Email=$_POST['b'];
$Phone=$_POST['c'];


$sql="INSERT INTO db VALUES('$Username','$Email','$Phone')";
$db->exec($sql);
 


?>



  



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="text/css" href="weightlifter.png">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,500;0,700;1,100;1,300;1,400;1,600&display=swap" rel="stylesheet"> 
	<title>Sbiya3eSport</title>
	<title></title>
</head>

<style type="text/css">
	
	*{
	padding: 0;
	box-sizing:border-box;
	margin: 0;
}
html{
	font-family: 'Josefin Sans', sans-serif;
	font-size: 16px;

}
	.home{
	width: 100%;
	height: 100vh;
	background-color: #171a1c;
    display: flex;
    flex-direction: column;
   
	}
	h1{
font-size: 40px;
padding-left: 350px;
padding-top: 230px;
letter-spacing: 0.12rem;
		
	}
	h2{
		height: 0px;
	color: #ffffffff;
	width: 30px;
font-size: 2.2rem;
letter-spacing: 0.12rem;
cursor: pointer;
padding-top: 49px;
padding-left: 100px;
}


.button {
left:800px ;
 --color: red;
 padding: 0.9em 1.0em;
 background-color: transparent;
 border-radius: .3em;
 position: relative;
 overflow: hidden;
 transition: .3s;
 font-weight: 450;
 font-size: 14px;
 border: 0px solid;
 font-family: inherit;
 text-transform: uppercase;
 color: #ffff;
 z-index: 2;
}

.button::before, .button::after {
 content: '';
 display: block;
 width: 30px;
 height: 30px;
 transform: translate(-50%, -50%);
 position: absolute;
 border-radius: 50%;
 z-index: -1;
 background-color: var(--color);
 transition: 2s ease;
}

.button::before {
 top: -1em;
 left: -1em;
}

.button::after {
 left: calc(100% + 3em);
 top: calc(100% + 1em);
}

.button:hover::before, .button:hover::after {
 height: 410px;
 width: 410px;

}

.button:hover {
 color: rgb(10, 25, 30);
}

.button:active {
 filter: brightness(.8);
}


span{
	color: red;
}
	h1,h2{
 color: white;
	}

</style>











<body>	
	<section class="home">

	<nav>

	<h2>Sbiya3e<span>Sport</span></h2>
	
 	<button class="button" ><a>Home</a></button>
<button class="button"><a>About ME</a></button>

<button class="button"><a>Services</a></button>
<button class="button"><a>Contact Me</a></button>

 </nav>



<form class="sth1">
 <h1 >You are registered, <span> champ...</span></h1>
 
</form>
</section>

</body>
</html>