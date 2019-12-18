<!DOCTYPE html>
<html>
<head>
<title>Login</title>
 
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
  body {
    background-color: #46de4b;
  }

  .kotak_login{
    width: 350px;
  background: rgba(0,0,0,5);
  /*meletakkan form ke tengah*/
  margin: 80px auto; 
  padding: 30px 20px;
  }

  .tombol_login{
  background: #46de4b;
  color: white;
  font-size: 11pt;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
}

  .form-control {
    /*membuat lebar form penuh*/
  box-sizing : border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;

  }

  .tulisan_login{
    text-align: center;
  /*membuat semua huruf menjadi kapital*/
  text-transform: uppercase;
  color: white;
}
.email {
    color: white;
}
.password {
    color: white;
  }
.jika {
  color: white;
}
</style>

</head>
<body>
          <div class="kotak_login">
            <p class="tulisan_login">Silahkan login</p>
               <form action="{{url('post-login')}}" method="POST" id="logForm">
 
                 {{ csrf_field() }}
      
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                  <label for="inputEmail" class="email">Email address</label>
 
                  @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif    
                </div> 
 
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  <label for="inputPassword" class="password">Password</label>
                   
                  @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif  
                </div>
              
 
                <input type="submit" class="tombol_login" name="login" value="SIGN-IN">
                <div class="jika">If you have an account?<a class="small" href="{{url('registration')}}">Sign Up</a></div>
              </form>
              </div>
</body>
</html>