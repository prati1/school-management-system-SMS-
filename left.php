

<HTML>

<HEAD><style type =text/css>

#nav {
    line-height:30px;
    background-color:#eeeeee
	;
    
    width:130px;
	height: 605px;
    float:left;
    padding:5px; 
}
# nav{list-style-type:none;}
#nav_wrapper ul li a,visited{ color:#ccc;
display:block;padding:15px;text-decoration:none;}


#nav ul li a:hover{
		color:#ccc;
		text-decoration:none;
	}
#nav ul li:hover ul{display:block;}
#nav ul ul {display: none;
position:absolute;}
}
</style>
</HEAD>

<body>




<div id="nav">
<a href="egg.php"target="main" >HOME </a><br><br>
<a href="admin.php?class=1"target="main" >Mainviewpage</a><br><br>
<!--
<a href="viewbyclass.php?class=02"target="main" >Two </a><br><br>
<a href="viewbyage.php?Age=21"target="main" >agetwentyone </a><br><br>
-->
<br>
<div id="nav_wrapper">
<ul> <li>one </li>
<ul>
<li><a/= href="lo.php">one </a></li>
<li><a/= href="lo.php">two</a></li>
<li><a/= href="lo.php">three</a></li>
</ul></ul>
</div>
<select><option value="null">------</option>
<option value="lo.php">Nursery</option>
  <option value="lo.php">LKG</option>
  <option value="ukg">UKG</option>
    <option value="lo.php">One</option>
  <option value="two">Two</option>
  <option value="three">Three</option>
  <option value="four">Four</option>
  <option value="five">Five</option>
  <option value="six">Six</option>
  <option value="seven">Seven</option>
  <option value="eight">Eight</option>
  <option value="ten">Ten</option>
  <option value="nine">Nine</option>
  <option value="eleven">Eleven</option>
  <option value="twelve">Twelve</option></select>
  
  

  
<form action="viewbyage.php" method="post">
	<label for='Age'>Age:</label><br>
	<select name="Age">
		<option value="NULl">------</option>
		<option value="5">Five</option>
		<option value="6">Six</option>
		<option value="7">Seven</option>
		<option value="21">Twenty One</option>
	</select><br>
	<input type="submit" name="val" value="Go" >
</form>



</BODY>



</HTML>




