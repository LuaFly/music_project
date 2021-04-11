<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <title>Document</title>
  <style>
    body {
        background: #eafbf4;
        width:100%;
        height:100%;
    }
    #particles-container{
      position: fixed;
      width:100vw;
      height:100vh;
      margin-top:-50px;
    }
   
  </style>
</head>
<body>
<div id="particles-container"></div>
  <div class="box container">
    <div class="d-flex justify-content-end">
      <div class="light-blue col-11 ">
        @include('components/menu')
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          @include('components/carrousel')
        </div>
      </div>
    </div>
  </div>
 
<script>
  particlesJS.load('particles-container', 'particlesjs-config.json');
</script>
</body>
</html>