<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyDompet | {{$title}}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      max-width: 800px;
      margin-top: 50px;
      text-align: center;
      margin-bottom: 2rem;
    }
    .form-group {
      margin-bottom: 20px;
      margin-top: 90px;
    }
    .form-group-addon {
      margin-top: 20px;
      flex-direction: column;
    }

    .btn-primary {
      background-color: #28a745;
      border-color: #28a745;
    }
     .form-control {
      background-color: #E6F0EB;
    }
    .register-image {
      width: 390px;
      height: auto;
    }
  </style>
</head>
<body>
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <h1 class="mb-4">Register Your Account</h1>
         <img src="{{URL::asset('img/ImageRegister.png')}}" class="register-image" alt="Illustration">
       </div>
       <div class="col-md-6">
         <div class="form-group">
           <input type="text" class="form-control" placeholder="Name">
           <div class="form-group-addon">
            <input type="text" class="form-control" placeholder="Phone Number">
           </div>
           <div class="form-group-addon">
            <input type="email" class="form-control" placeholder="Email">
           </div>
           <div class="form-group-addon">
            <input type="password" class="form-control" placeholder="Password">
           </div>
         </div>
         <button class="btn btn-primary btn-lg btn-block">Create Account</button>
         <div class="text-center mt-3">
           Already have account? <a href="/login">Login</a>
         </div>
       </div>
     </div>
   </div>
 </body>
 </html>