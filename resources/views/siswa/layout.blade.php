<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 CRUD Application - ItSolutionStuff.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<style>
  ul {
  list-style-type: none;
  margin-left: 125px;
  margin-right: 125px;
  margin-top: 10px;
  padding:;
  overflow: hidden;
  background-color: #333;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}

li {
  border-right: 3px solid #bbb;
   float: left;
}

li:last-child {
  border-right: none;
}

.active {
  background-color: red;
}

body {
  background-color: #46de4b;
}

</style>

</head>
<body>
  <div>
    <ul>
      <li><a href="http://localhost:8000/barang">barang</a></li>
      <li><a href="http://localhost:8000/distributor">distributor</a></li>
      <li><a href="http://localhost:8000/siswa">siswa</a></li>
      <li style="float:right"><a class="active" href="http://localhost:8000/login">Logout</a></li>
    </ul>
  </div>

		<div class="container">
    	@yield('content')
    </div>

   
</body>
</html>