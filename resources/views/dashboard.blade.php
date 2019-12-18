<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
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

</body>
</html>