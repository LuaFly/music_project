<style>
  .header_menu {
    text-align: end;
    margin-right: 5%;
  }

  .header_menu ul li {
    display: inline-block;
    margin-left: 25px;
    margin-top: 20px;
  }

  .header_menu ul li a {
    color: #0378A6;
    font-weight: bold;
    letter-spacing: 0.1em;
    font-size: 16px;
    line-height: 20px;
    padding: 10px 0;
    text-decoration: none;
    font-family: "Open Sans", sans-serif;
  }

  .header_menu ul li a:hover {
    color: #023E73;
  }

  .header_menu li.active a {
    color: #023E73;
  }

  .signin {
    border: 1px solid #04C4D9;
    padding: 5px
  }
</style>
<header class="header">
  <div class="container">
    <nav class="header_menu ">

      <ul>
        <li class="{{ Request::routeIs('home') ? 'active' : '' }}">
          <a href="/"> Home</a>
        </li>
        <li>
          <a href="#"> Map</a>
        </li>
        <li class="{{ Request::routeIs('aboutus') ? 'active' : '' }}">
          <a href="/aboutus"> About us</a>
        </li>
        <li>
          <a href="#"> <span class="signin"> Sign in <span></a>
        </li>
      </ul>
    </nav>
    <!-- <div class="img">
        <a href="#" >
					<img src="img/logo.png" width="150px" alt="logo-bikcraft">
				</a>
        </div> -->
  </div>
</header>