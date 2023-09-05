<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
 
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}
.bgimg:before {
    content: "";
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
	right:0;
	bottom:0;
    background: #7579ff;
    background: -webkit-linear-gradient(top,#b224ef,#7579ff);
    background: -o-linear-gradient(top,#b224ef,#7579ff);
    background: -moz-linear-gradient(top,#b224ef,#7579ff);
    background: linear-gradient(top,#b224ef,#7579ff);
    opacity: .8;
}

.topleft {
    position: absolute;
    top: 0;
    display: block;
    background: #fff;
    left: 0;
    right: 0;
    padding: 0 10%;
}
.topleft p{margin: 0;}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg" class="bg-img1 size1 overlay1 p-b-35 p-l-15 p-r-15" style="background-image: url('images/flying-airplane.jpg');">
  <div class="topleft">
    <p><img src="images/logo.png" /></p>
  </div>
  <div class="middle">
    <h1>We are getting ready to launch new Website!</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <div class="bottomleft">
    <p>Our website is currently Under Construction. We Should be back shortly.</p>
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 15, 2023 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "We Are Almost Ready for Launch";
  }
}, 1000);
</script>

</body>
</html>
