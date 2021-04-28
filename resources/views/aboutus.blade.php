<!doctype html>
<html>

<head>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="{{ asset('lib/turn.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <style type="text/css">
    body {
      background: #eafbf4;
      width: 90%;
      height: 90%;
    }

    #particles-container {
      position: fixed;
      width: 100vw;
      height: 100vh;
      margin-top: -50px;
    }

    #magazine {
      width: 90vw;
      height: 75vh;
    }

    img {
      height: 60vh;
      max-width: 500px;
      object-fit: fill;
      margin-top: 3rem;
    }

    #magazine .turn-page {
      background-color: #ccc;
      background-size: 100% 100%;
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

          <div id="magazine">
            <div> <img src="https://i.pinimg.com/originals/a8/54/14/a85414f02f824b3e28b52fa7fffdd01b.jpg" /> </div>
            <div> <img src="https://zenitemarcas.com.br/wp-content/uploads/2018/05/como-registrar-uma-m%C3%BAsica.jpg" /> </div>
            <div> <img src="https://i.pinimg.com/originals/a8/54/14/a85414f02f824b3e28b52fa7fffdd01b.jpg" /> </div>
            <div> <img src="https://i.pinimg.com/originals/a8/54/14/a85414f02f824b3e28b52fa7fffdd01b.jpg" /> </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(window).ready(function() {
      $('#magazine').turn({
        display: 'double',
        acceleration: true,
        gradients: !$.isTouch,
        elevation: 50,
        when: {
          turned: function(e, page) {
            /*console.log('Current view: ', $(this).turn('view'));*/
          }
        }
      });
    });


    $(window).bind('keydown', function(e) {

      if (e.keyCode == 37)
        $('#magazine').turn('previous');
      else if (e.keyCode == 39)
        $('#magazine').turn('next');

    });
  </script>

</body>

</html>