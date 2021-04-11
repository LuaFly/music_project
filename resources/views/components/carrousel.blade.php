<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
.mySlides img {
  height: 60vh;
  max-width:500px;
  object-fit: fill;
}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 6s;
  animation-name: fade;
  animation-duration: 6s;
}

@-webkit-keyframes fade {
  from {opacity: 1} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: 1} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<div class="row">
  <div class="col-12 slideshow-container">
    <div class="mySlides fade">
      <div class="row">
        <div class="col-5 ">
        <h1 class="title">Teste</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, officia tenetur cumque iure dolor sit autem eum facere itaque qui porro nobis. Itaque repellat accusantium maxime. Neque eaque sapiente similique! </p>
        </div>
        <div class="col-7 text-right">
          <img src="img/alexander-shatov-niUkImZcSP8-unsplash.jpg" style="width:100%">
          <div class="text">Photo by <a href="https://unsplash.com/@alexbemore?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Alexander Shatov</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></div>
        </div>
      </div>
      </div>
      <div class="mySlides fade">
      <div class="row">
      <div class="col-5 ">
        <h1 class="title">Teste 2</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, officia tenetur cumque iure dolor sit autem eum facere itaque qui porro nobis. Itaque repellat accusantium maxime. Neque eaque sapiente similique! </p>
      </div>
        <div class="col-7 text-right">
        <img src="img/eric-nopanen-8e0EHPUx3Mo-unsplash.jpg" style="width:100%">
        <div class="text">Photo by <a href="https://unsplash.com/@rexcuando?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Eric Nopanen</a> on <a href="https://unsplash.com/s/photos/music?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></div>
        </div>
      </div>
      </div>
      <div class="mySlides fade">
      <div class="row">
        <div class="col-5 ">
          <h1 class="title">Teste 3</h1>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, officia tenetur cumque iure dolor sit autem eum facere itaque qui porro nobis. Itaque repellat accusantium maxime. Neque eaque sapiente similique! </p>
        </div>
        <div class="col-7 text-right">
          <img src="img/clark-tibbs-oqStl2L5oxI-unsplash.jpg" style="width:100%">
          <div class="text">Photo by <a href="https://unsplash.com/@clarktibbs?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Clark Tibbs</a> on <a href="https://unsplash.com/s/photos/new-things?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></div>
        </div>
      </div>
      </div>
      <br>
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>
    </div>
  </div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 6000); // Change image every 6 seconds
}
</script>
