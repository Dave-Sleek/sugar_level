<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    body{
      color: black;
    }
    .dark-mode{
      background-color: #2a4e6c;
      color: white;
    }
    
  </style>
  <title>SUGAR LEVEL CONVERTER</title>
</head>
<script type="text/javascript">
  function sugarlevel() {
    let mgdL = document.forms["convert"]["mgdL"].value;
    const mmolL = 18;
    var result;
    var result = mgdL/mmolL;

    document.getElementById("display").innerHTML = "<h3>Result In mmol/L: " + result.toFixed((1)) + " "+ ("<i class='fa fa-heartbeat faa-pulse animated faa-slow' style='color: red;''> </i></h3>");
  }
  sugarlevel();
</script>

<script type="text/javascript">
  function sugar() {
    let mmolL = document.forms["convert"]["mmolL"].value;
    const mgdL = 18;
    var ans;
    var ans = mgdL*mmolL;

    document.getElementById("show").innerHTML = "<h3>Result In mg/dL: " + ans.toFixed((1)) + " "+ ("<i class='fa fa-heartbeat faa-pulse animated faa-slow' style='color: red;''> </i></h3>");
  }
  sugar();
</script>

<!-- CSS BOOTSTRAP -->
<link rel="stylesheet" type="text/css" href="assets/dist/css/preloader.css">

<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/font-awesome-animation.css">
<script type="text/javascript" src="assets/dist/js/bootstrap.bundle.min.js"></script>
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="app.php">BLOOD SUGARL CONVERTER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

<div class="container">
<br><br><br><br><br>
<br>
<h1 class="h1 mb-3 fw-normal" align="center" style="color: red;">BLOOD SUGAR <i class="fa fa-heartbeat faa-pulse animated faa-slow" style="color: red;"> </i> CONVERTER</h1>
<h1 class="h3 mb-3 fw-normal" align="center"> Convert blood sugar/glucose from mmol/L (UK standard) to mg/dL (US standard) an vice versa using blood sugar onverter.</h1>
<br>
<form name="convert" id="convert" method="post">
  <h1 class="h3 mb-3 fw-normal text-muted" align="center" style="color: red;"> Enter mg/dL or mmol/L value for conversion </h1>
  <br><br>
     <div class="input-group">
      <span class="input-group-text" id="inputGroup-sizing-lg" style="background-color: red; color: white;">Enter mg/dL</span>
      <input type="text" class="form-control" name="mgdL" id="mgdL" placeholder="Enter mg/dL" aria-label="Large" aria-describedby="inputGroup-sizing-sm" onkeyup="return sugarlevel();">
    
      &nbsp; OR &nbsp;
      <input type="text" class="form-control" name="mmolL" id="mmolL" placeholder="mmol/L" aria-label="Large" aria-describedby="inputGroup-sizing-sm" onkeyup="sugar();">
      <span class="input-group-text" id="inputGroup-sizing-lg" style="background-color: red; color: white;" >Enter mmol/L</span>

    </div>
<br><br>
      <button class="w-100 btn btn-lg btn-default" id="display" id="show" name="submit" type="button"></button> 
      <button class="w-100 btn btn-lg btn-default" id="show" type="button"></button> 
</form>
<br><br>
<center><button type="button" onclick="myFunction()"  class="btn btn-default"><h3>Switch to dark mode <i class="fa fa-toggle-on faa-fade animated faa-slow"></i></h3></button></center>
<script type="text/javascript">
  function myFunction(){
    var element = document.body;
    element.classList.toggle("dark-mode");
  }
</script>
<summary>
  <details>
  <b><h3>Whats the difference between mmol/L and mg/dL?</h3></b><p>
Both sets of units are used to measure blood sugar levels and both give a measurement of the concentration of glucose in the blood, albeit in slightly different ways.
<p>
mmol/L gives the molarity, which is the number of molecules of a substance within a specified volumen, in this case within 1 litre. mg/dL gives the concentration by the ratio of weight to volumen, in this case milligrams per decilitre.

mmol/L is the most common measurement used in the UK with mg/dL predominantly used in the USA and continental Europe.
<p>
mmol/L International standard unit for measuring the concentration of glucose in the blood – also known as millimolar (mM). This unit is used in the UK. : Millimoles per litre<br><br>
mg/dL Unit for measuring concentration of glucose in the blood in the USA – milligrams per decilitre. : Milligrams per 100 millilitres
Blood glucose typically varies from 4 mmol/L to 6 mmol/L for people without diabetes.

Blood sugar (also called blood glucose) needs to be tightly controlled in the human body to minimise the risk of complications developing.
</p>

<b>Formula to calculate mmol/l from mg/dl</b>: mmol/l = mg/dl / 18<br>
<b>Formula to calculate mg/dl from mmol/l</b>: mg/dl = 18 × mmol/l
<br><br>
<b>Can I change the units given by my blood glucose meter?</b><p>
This can depend on <i class="" style="color: red;">which blood glucose meter </i> you have. Some meters allow you to change the units from mg/dL to mmol/L and vice versa whether some meters are only set up to display one set of units.

Check the meter’s manual for whether it is possible to change the units. If you don’t have or cannot find the manual, contact the manufacturer.
</p>
<b>Why are blood sugar levels important?</b>
<p>
Measuring blood sugar levels and understanding what your glucose levels should be is an essential part of diabetes treatment for many people with diabetes.

Blood sugar level refers to the total amount of glucose circulating in the blood. In different parts of the world, different units for measuring blood glucose are standard.
</p>
</details>
</summary>
<br>
<img src="assets/img/samples.jpeg" class="rounded mx-auto d-block">
<br><br>
</div>
<footer class="footer mt-auto py-3 bg-dark">
  <div class="container">
    <span class="text-muted">SUGAR LEVEL CONVERTER | Pwered By: GetBusyCoding. &copy; <?php echo date("Y"); ?> &nbsp;<p style="float: right;"><a href="https://facebook.com/dave.enyi.7"><i class="fa fa-facebook"></i></a>  <a href="https://instagram.com/i_am_dave_sleek" target="_blank"><i class="fa fa-instagram" target="_blank"></i></a> <a href="https://twitter.com/davey_sleek" target="_blank"><i class="fa fa-twitter" target="_blank"></i></a> <a href="https://linkedin.com/in/dave-enyi-631aa2109" target="_blank"><i class="fa fa-linkedin" target="_blank"></i></a> <a href="https://github.com/Dave-Sleek" target="_blank"><i class="fa fa-github" target="_blank"></i></a></p></span>
  </div>
</footer>
  </body>
  <script type="text/javascript" src="assets/dist/js/preloader.js"></script>
</html>