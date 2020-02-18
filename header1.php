  <!DOCTYPE html>
<html>
<head>
  <title></title>

<style type="text/css">

.nav ul {
  list-style: none;
  background-color: gray;
  text-align: center;
  padding: 0;
  margin: 0px;
  border: 8px solid #F39C12;



}

.nav li {
  font-family: 'Oswald', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  text-align: center;
  

}
.nav li:hover{
	background-color: skyblue;
}

.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  padding-left: 15px;

  transition: .3s background-color;
}

.nav a:hover {
  background-color: #005f5f;

}

.nav a.active {
  background-color: #aaa;
  color: #444;
  cursor: default;
}

/* Sub Menus */
.nav li li {
  font-size: .8em;

 
}



@media screen and (min-width: 650px) {
  .nav li {
    width: 130px;
    
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
    display: inline-block;
    margin-right: -4px;
  }

  .nav a {
    border-bottom: none;
  }

  .nav > ul > li {
    text-align: center;

  }

  .nav > ul > li > a {
    padding-left: 0;

  }

  /* Sub Menus */
  .nav li ul {
    position: absolute;
    margin-left: -5px;
    display: none;
    width: 130px;
    border:3px solid #F39C12;
   
    
    background-color: skyblue;
  }

  .nav li:hover ul {
    display: block;
  }

  .nav li ul li {
    display: block;
    border-bottom:3px solid #F39C12; 
    
  }
  </style>
  </head>
<body>
	<nav class="nav">
	<ul>    <li  style="background-color: #800080">             
				Contact Us</li>    <li  style="background-color: #8080c0">             
				Services<ul>    <li  style="background-color: #8080c0">             
				Service1</li></ul></li>    <li  style="background-color: #ff8000">             
				About US</li>    <li  style="background-color: #008000">             
				Produce<ul>    <li  style="background-color: #ff8040">             
				Branch 1</li></ul></li>    <li  style="background-color: #008080">             
				My Blog</li>    <li  style="background-color: #c0c0c0">             
				Contact Us</li>    <li  style="background-color: #ff8040">             
				Products<ul>    <li  style="background-color: #008080">             
				Product1</li></ul></li></ul> 	</nav>
</body>
</html>