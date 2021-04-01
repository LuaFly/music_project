<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Document</title>
  <style>
  body{
    background: #EAFBFE;
  }
    .box {
      margin-top:3rem;
      background: #FCFFFF;
      overflow-y: auto;
      overflow-x: hidden;
      border-radius:10px;
      box-shadow: 4px 3px 13px 1px rgba(47,105,222,0.56);
      -webkit-box-shadow: 4px 3px 13px 1px rgba(47,105,222,0.56);
      -moz-box-shadow: 4px 3px 13px 1px rgba(47,105,222,0.56);
    }
        
  </style>
</head>
<body>
<div class="col-12">
  <div class="row d-flex justify-content-center">
    <div class="light-blue box col-11 ">
      @include('components/menu')
    </div>
  </div>
</div>
</body>
</html>