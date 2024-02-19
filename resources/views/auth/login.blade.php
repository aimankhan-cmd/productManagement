<!DOCTYPE html>
<html>
 <head>
  <title>Product Management System</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .container {
       display: flex;
       justify-content: center;
       align-items: center;
       height: 100vh;
   }
   h3 {
       color: #333;
       font-family: Arial, sans-serif;
       text-transform: uppercase;
       letter-spacing: 2px;
       margin-bottom: 30px;
   }
   .form-group {
    margin: 20px; 
    }
    .form-group.button {
        text-align: center;
    }
    .form-control {
        text-align: left; 
        direction: ltr; 
    }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <div class="box">
    <h3 align="center">Product Management System Login</h3><br />

    @if(isset(Auth::user()->email))
     <script>window.location="/";</script>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <strong>{{ $message }}</strong>
    </div>
    @endif

    @if (count($errors) > 0)
     <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
      </ul>
     </div>
    @endif

    <form method="post" action="{{ route('checklogin') }}">
     {{ csrf_field() }}
     <div class="form-group">
      <label>Enter Email</label>
      <input type="email" name="email" class="form-control left-align" />
     </div>
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="password" class="form-control left-align" />
     </div>
     <div class="form-group button">
        <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </div>

    </form>
   </div>
  </div>
 </body>
</html>
