<style>
  img {
    height: 60vh;
    max-width: 500px;
    object-fit: fill;
  }

  #login-box {
    position: relative;
    margin: 5% auto;
    width: 600px;
    height: 400px;
    background: #FFF;
    border-radius: 2px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  }

  .left {
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;
  }

  h1 {
    margin: 0 0 20px 0;
    font-weight: 300;
    font-size: 28px;
  }

  input[type="text"],
  input[type="password"] {
    display: block;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 220px;
    height: 32px;
    border: none;
    border-bottom: 1px solid #AAA;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
  }

  input[type="text"]:focus,
  input[type="password"]:focus {
    border-bottom: 2px solid #16a085;
    color: #16a085;
    transition: 0.2s ease;
  }

  input[type="submit"] {
    margin-top: 28px;
    width: 120px;
    height: 32px;
    background: #16a085;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.1s ease;
    cursor: pointer;
    background: black;
  }

  input[type="submit"]:hover,
  input[type="submit"]:focus {
    opacity: 0.8;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    transition: 0.1s ease;
  }

  input[type="submit"]:active {
    opacity: 1;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    transition: 0.1s ease;
  }

  .or {
    position: absolute;
    top: 180px;
    left: 280px;
    width: 40px;
    height: 40px;
    background: #DDD;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    line-height: 40px;
    text-align: center;
  }

  .right {
    position: absolute;
    top: 0;
    right: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;
    background: url('https://wallpaperaccess.com/full/4775444.jpg');
    background-size: cover;
    background-position: center;
    border-radius: 0 2px 2px 0;
  }

  .right .loginwith {
    display: block;
    margin-bottom: 40px;
    font-size: 28px;
    color: #FFF;
    text-align: center;
  }

  button.social-signin {
    margin-bottom: 20px;
    width: 220px;
    height: 36px;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    transition: 0.2s ease;
    cursor: pointer;
  }

  button.social-signin:hover,
  button.social-signin:focus {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    transition: 0.2s ease;
  }

  button.social-signin:active {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    transition: 0.2s ease;
  }

  button.social-signin.facebook {
    background: #32508E;
  }

  button.social-signin.twitter {
    background: #55ACEE;
  }

  button.social-signin.google {
    background: #DD4B39;
  }
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-5 ">
          <h1 class="title">Teste</h1>
          <p> Are you ready for something incredible? A community focused on lesser-known music? </p>
        </div>
        <div class="col-7 text-right">
          <img src="img/alexander-shatov-niUkImZcSP8-unsplash.jpg" style="width:100%">
          <div class="text">Photo by <a href="https://unsplash.com/@alexbemore?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Alexander Shatov</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-5 ">
          <h1 class="title">Teste 2</h1>
          <p> Know new artists and amazing music, to listen alone in the bedroom, with friends, for every moment </p>
        </div>
        <div class="col-7 text-right">
          <img src="img/eric-nopanen-8e0EHPUx3Mo-unsplash.jpg" style="width:100%">
          <div class="text">Photo by <a href="https://unsplash.com/@rexcuando?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Eric Nopanen</a> on <a href="https://unsplash.com/s/photos/music?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-5 ">
          <h1 class="title">Teste 3</h1>
          <p> You can interact, post music, and even help a local artist to be better known </p>
        </div>
        <div class="col-7 text-right">
          <img src="img/clark-tibbs-oqStl2L5oxI-unsplash.jpg" style="width:100%">
          <div class="text">Photo by <a href="https://unsplash.com/@clarktibbs?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Clark Tibbs</a> on <a href="https://unsplash.com/s/photos/new-things?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-5 ">
          <h1 class="title">Teste 4</h1>
          <p> Enjoy now with us </p>
        </div>
        <div class="col-7 text-right">
          <div id="login-box">
            <div class="left">
              <h1>Sign up</h1>

              <input type="text" name="username" placeholder="Username" />
              <input type="text" name="email" placeholder="E-mail" />
              <input type="password" name="password" placeholder="Password" />
              <input type="password" name="password2" placeholder="Retype password" />
              <input type="submit" name="signup_submit" value="Sign me up" />
            </div>

            <div class="right">
              <span class="loginwith">Sign in with<br />social network</span>

              <button class="social-signin facebook">Log in with facebook</button>
              <button class="social-signin twitter">Log in with Twitter</button>
              <button class="social-signin google">Log in with Google+</button>
            </div>
            <div class="or">OR</div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $('.carousel').carousel({
    interval: 2000,
    wrap: false
  })
</script>