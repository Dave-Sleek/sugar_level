<!DOCTYPE html>
<html>
<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8918616047230546"
     crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/dist/icons/favicon.png"/>
  <style type="text/css">
    body{
      color: black;
      transition: color 1500ms, background-color 1500ms;
    }

    .dark-mode{
      background-color: #0d6efd;
      color: white;
      transition: color 1500ms, background-color 1500ms;
    }
  </style>
  <title>BLOOD SUGAR CONVERTER</title>
  <!-- CSS BOOTSTRAP -->
<link rel="stylesheet" type="text/css" href="assets/dist/css/preloader.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/toggle.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/font-awesome-animation.css">
<script type="text/javascript" src="assets/dist/js/bootstrap.bundle.min.js"></script>
</head>
<script type="text/javascript">
  function sugarlevel() {
    let mgdL = document.forms["convert"]["mgdL"].value;
    const mmolL = 18;
    var result;
    var result = mgdL/mmolL;

    document.getElementById("display").innerHTML = "<h3 style='color: black;'>Result In mmol/L: " + result.toFixed((1)) + " "+ ("<i class='fa fa-heartbeat faa-pulse animated faa-slow' style='color: red;''> </i></h3>");
  }
  sugarlevel();
</script>

<script type="text/javascript">
  function sugar() {
    let mmolL = document.forms["convert"]["mmolL"].value;
    const mgdL = 18;
    var ans;
    var ans = mgdL*mmolL;

    document.getElementById("show").innerHTML = "<h3 style='color: black;'>Result In mg/dL: " + ans.toFixed((1)) + " "+ ("<i class='fa fa-heartbeat faa-pulse animated faa-slow' style='color: red;''> </i></h3>");
  }
  sugar();
</script>

<body>

<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-primary border-bottom shadow-sm fixed-top">
  <p class="h5 my-0 me-md-auto fw-normal"><a class="navbar-brand" href="app.php" style="color: white;"><i class="fa fa-thermometer-3"> </i><strong> BLOOD SUGAR CONVERTER</strong></a></p>
  <nav class="my-2 my-md-0 me-md-3">

 <!--
    <a class="p-2 text-dark" href="#">Enterprise</a>
    <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a>
  -->
  </nav>
<!--
  <button type="button" style="float: left; color: white;" onclick="myFunction()"  class="btn btn-default"><h3><i class="fa fa-toggle-on faa-fade animated faa-slow"></i></h3></button>
-->
  <!-- Rounded switch -->
<label class="switch">
<input type="checkbox" onclick="myFunction()" >
<span class="slider round"></span>
</label>

<!--
  <a class="btn btn-outline-primary" href="#">Sign up</a>
-->
</header>
 <br><br><br><br>
<!--
<button type="button" style="float: left;" onclick="myFunction()"  class="btn btn-default"><h3><i class="fa fa-toggle-on faa-fade animated faa-slow"></i></h3></button>
-->
<div class="container">
<br>
<h5 class="h5 mb-3 fw-normal" align="center"><strong>BLOOD SUGAR <i class="fa fa-heartbeat faa-pulse animated faa-slow" style="color: red;"> </i> CONVERTER</strong></h5>
<h1 class="h5 mb-3 fw-normal" align="center"> Convert blood sugar/glucose from mmol/L (UK standard) to <br>  mg/dL (US standard) an vice versa using blood sugar converter.</h1>
<br>
<img src="assets/img/img.jpeg" class="img-fluid mx-auto d-block">

<br>
<center>
<span class="card-text" id="otime"></span> &nbsp;
<span class="card-text" id="days" align="center"></span> -&nbsp;
<span class="card-text" id="dat"> </span> -&nbsp;
<span class="card-text" id="mont"> </span> -&nbsp;
<span class="card-text" id="mont"> <?php echo date("Y"); ?> </span> 
<span class="card-text" style="text-align: center;"><script src="assets/dist/js/greetings.js"></script></span>
</center>
<hr><br>

<form name="convert" id="convert" method="post">
  <h1 class="h3 mb-3 fw-normal" align="center"> Enter mg/dL or mmol/L value for conversion </h1>
  <br>
     <div class="form-control">
      <!--<span class="input-group-text" id="inputGroup-sizing-lg bg-danger">Enter mg/dL</span>-->
      <input type="text" class="form-control" name="mgdL" id="mgdL" placeholder="Enter mg/dL" onkeyup="return sugarlevel();">
    <br> <br> <br>
      <input type="text" class="form-control" name="mmolL" id="mmolL" placeholder="mmol/L" onkeyup="sugar();">
      <!--<span class="input-group-text" id="inputGroup-sizing-lg bg-danger" >Enter mmol/L</span>-->

    </div>
<br><br>
<!--
      <button class="w-100 btn btn-lg btn-default" id="display" id="show" name="submit" type="button"></button> 
   
      <button class="w-100 btn btn-lg btn-default" id="show" type="button"></button> 
 -->
       <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 shadow-sm">
      <div class="card-header bg-primary shadow-ms" style="color: white;">
        <h4 class="my-0 fw-normal">Results</h4>
      </div>
     
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      <div class="card-header shadow-ms bg-primary" style="color: white;">
        <h4 class="my-0 fw-normal">From mg/dL To mmol/L</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title" id="display" style="color: black;"><small class="text-muted">/ mmol/L</small></h1>
        
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      <div class="card-header bg-primary" style="color: white;">
        <h4 class="my-0 fw-normal">From  mmol/L To mg/dL</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title" id="show"><small class="text-muted">/ mg/dL</small></h1>
        
      </div>
    </div>
    </div>
  </div>
   <p class="card-text"><strong><h4>Read more on how to</h4></strong></p>
<hr>
</form>
<br><br>
<!-- <center><button type="button" onclick="myFunction()"  class="btn btn-default"><h3>Switch to dark mode <i class="fa fa-toggle-on faa-fade animated faa-slow"></i></h3></button></center> -->
<script type="text/javascript">
  function myFunction(){
    var element = document.body;
    element.classList.toggle("dark-mode");
  }
</script>

<!--
<img src="assets/img/sg.jpg" class="rounded" style="margin-right:25px;">&nbsp;&nbsp;&nbsp;<img src="assets/img/bd.jpg" class="rounded" style="margin-left:25px;">
&nbsp;&nbsp;<img src="assets/img/sg1.jpg" class="rounded" style=" margin-left:25px;"> 
-->
<div class="row" data-masonry='{"percentPosition": true }'>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card">
        <img src="assets/img/sg.jpg" class="rounded">

        <div class="card-body" align="justify">
          <h5 class="card-title" style="color: black;"><strong>HOW TO USE BLOOD GLUCOSE METER (Glucometers)</strong> </h5>
          <p class="card-text" style="color: black;">Oftentimes, unless you have met with a certified diabetes educator, your doctor may have given you a prescription for a glucometer without explicitly telling you how to use it.
          </p>
          <p style="color: black;">
          And while most instruction manuals are user-friendly, this task can seem daunting if you are new to testing or not that technologically savvy. Follow these guidelines for safe and easy testing.
          </p>
<center>            
            <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Read more
</button>
</center>
  <!-- Modal -->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header bg-primary">
<h5 class="modal-title" id="staticBackdropLabel" style="color: white;"><strong>What You Need to Use a Glucometer (GlucoMeters)</strong></h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body" style="color: black;" align="justify">
<ul>
<li>Alcohol prep pad (or soap and water if you have access to a sink)</li>
<li>Lancet</li>
<li>Test strip</li>
<li>Glucometer</li>
<li>A notebook to record results</li>
</ul>
<strong>STEPS ON HOW TO USE BLOOD GLUCOSE METER (Glucometers)</strong>
<ol>
  <p>
<li>First, set out your glucometer, a test strip, a lancet, and an alcohol prep pad.</li>
</p>
<li>Wash your hands to prevent infection. If you are not by a sink, it's okay to just use the alcohol swab. If you are by a sink and wash your hands thoroughly, you do not have to use an alcohol swab.</li>
<p>
<li>Sometimes it helps to warm your hands first to make the blood flow easier. You can rub your hands together briskly or run them under warm water—just be sure to dry them well as wet hands can dilute the blood sample, resulting in a lower number.</li> 
</p>
<li>Turn on the glucometer and place a test strip in the machine when the machine is ready. Watch the indicator for placing the blood on the strip.</li>
<p>
<li>Make sure your hand is dry and wipe the area you've selected with an alcohol prep pad and wait until the alcohol evaporates.
Pierce your fingertip on the side of your finger, between the bottom of your fingernail to the tip of your nail (avoid the pads as this can pinch more). The type of drop of blood required is determined by the type of strip you are using (some use a "hanging drop" of blood versus a small drop for strips that draw blood in with a capillary action).</li>
</p>
<li>Place the drop of blood on or at the side of the strip.</li>
<p>
<li>The glucometer will take a few moments to calculate the blood sugar reading. Follow your doctor's orders for whatever blood sugar reading you get.</li>
</p>
<p>
<li>You may use the alcohol prep pad to blot the site where you drew the blood if it is still bleeding.</li>
</p>
<li>Write down your results. Keeping a record makes it easier for you and your doctor to establish a good treatment plan.</li>
<p>
<li> Some glucometers can store your results in a memory, for easier record keeping.</li>
</p>
</ol>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
<!--<button type="button" class="btn btn-primary">Understood</button>-->
</div>
</div>
</div>
</div>

          </p>
        </div>
      </div>
    </div>
<div class="col-sm-6 col-lg-4 mb-4">
      <div class="card">
        <img src="assets/img/sg1.jpg" class="rounded">

        <div class="card-body" align="justify">
          <h5 class="card-title" style="color: black;"><strong>HOW TO CONTROL YOUR BLOOD SUGAR LEVEL NATURALLY</strong></h5>
          <p class="card-text" style="color: black;">This Article Was Written by Arlene Semeco, MS, RD — Medically reviewed by Katherine Marengo LDN, R.D. — Updated on December 21, 2020
Bonnin Studio/Stocksy United
<p style="color: black;">
High blood sugar occurs when your body doesn’t make enough or effectively use insulin, a hormone that regulates blood glucose and helps it enter your cells for energy.
</p>

                    <center>            
            <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Read more
</button>
</center>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header bg-primary">
<h5 class="modal-title" id="exampleModalLabel" style="color: white;"><strong>15 Easy Ways to Lower Blood Sugar Levels Naturally</strong></h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body" style="color: black;" align="justify">
<p>
 High blood sugar (hyperglycemia) is associated with diabetes.
The Centers for Disease Control and Prevention (CDC) reports that 13% of U.S. adults live with diabetes, and 34.5% have prediabetes (1Trusted Source).</p>
<p>
This means close to 50% of all U.S. adults have diabetes or prediabetes.
</p>
Here are 15 easy ways to lower blood sugar levels naturally:
<ol> 

<p>
<li> Exercise regularly</li>
Regular exercise can help you get to and maintain a moderate weight and increase insulin sensitivity.

Increased insulin sensitivity means your cells are better able to use the available sugar in your bloodstream.
<p>
Exercise also helps your muscles use blood sugar for energy and muscle contraction.</p>
<p>
If you have problems with blood sugar management, you should routinely check your levels. This will help you learn how you respond to different activities and keep your blood sugar levels from getting either too high or too low (2).</p>
<p>
Useful forms of exercise include weightlifting, brisk walking, running, biking, dancing, hiking, swimming, and more.</p>
<p>
<strong>SUMMARY</strong><br>
Exercise increases insulin sensitivity and helps your muscles use glucose effectively. This can lead to reduced blood sugar levels.</p>
<p>
<li> Manage your carb intake</li>
Your body breaks carbs down into sugars (mostly glucose), and then insulin helps your body use and store sugar for energy.</p>
<p>
When you eat too many carbs or have insulin-function problems, this process fails, and blood glucose levels can rise.</p>
<p>
However, there are several things you can do about this.</p>
<p>
The American Diabetes Association (ADA) recommends managing carb intake by counting carbs and being aware of how many you need (3).</p>
<p>
Some studies find that these methods can also help you plan your meals appropriately, further improving blood sugar management (4Trusted Source, 5Trusted Source).</p>
<p>
Many studies also show that a low carb diet helps reduce blood sugar levels and prevent blood sugar spikes (6Trusted Source, 7, 8Trusted Source, 9Trusted Source).</p>
<p>
What’s more, a low carb diet can help manage blood sugar levels in the long run (10Trusted Source).</p>
<p>
You can read more in this article on healthy low carb eating with diabetes.</p>
<p>
<strong>SUMMARY</strong><br>
Carbs are broken down into glucose, which raises blood sugar levels. Reducing carbohydrate intake can help with blood sugar control.
<p>

<li>Increase your fiber intake</li>
Fiber slows carb digestion and sugar absorption. For these reasons, it promotes a more gradual rise in blood sugar levels.</p>
<p>
Furthermore, the type of fiber you eat may play a role.</p>
<p>
There are two kinds of fiber:</p>
<ul>
<li>insoluble</li>
<li>soluble</li>
<li>While both are important, soluble fiber has explicitly been shown to improve blood sugar management (11Trusted Source, 12Trusted Source, 13Trusted Source).</li>
</ul>
<p>
Additionally, a high fiber diet can help better manage type 1 diabetes by improving the body’s ability to regulate blood sugar and reducing blood sugar lows (13, 14Trusted Source).</p>
<p>
Foods that are high in fiber include:</p>
<p>
  <ul>
<li>vegetables</li>
<li>fruits</li>
<li>legumes</li>
<li>whole grains</li>
</ul>
The recommended daily intake of fiber is about 25 grams for women and 38 grams for men. That’s about 14 grams for every 1,000 calories (15).</p>
<p>
<strong>SUMMARY</strong><br>
Eating plenty of fiber can help with blood sugar management. Soluble dietary fiber is the most effective.
<p>
powered by Rubicon Project
<li> Drink water and stay hydrated</li>
Drinking enough water may help you keep your blood sugar levels within healthy limits.</p>
<p>
In addition to preventing dehydration, it helps your kidneys flush out the excess sugar through urine.</p>
<p>
One observational study showed that those who drank more water had a lower risk for developing high blood sugar levels (16Trusted Source).</p>
<p>
Drinking water regularly helps rehydrate the blood, lowers blood sugar levels, and could reduce diabetes risk (16Trusted Source, 17Trusted Source, 18Trusted Source, 19Trusted Source).</p>
<p>
Keep in mind that water and other non-caloric beverages are best. Sugar-sweetened drinks raise blood glucose, drive weight gain, and increase diabetes risk (20Trusted Source, 21Trusted Source).</p>
<p>
<strong>SUMMARY</strong><br>
Staying hydrated can reduce blood sugar levels and diabetes risk. Water is the best choice.</p>
<p>

<li>Implement portion control</li>
Portion control helps regulate calorie intake and can help maintain a moderate weight (22Trusted Source, 23Trusted Source, 24Trusted Source).
<p>
Consequently, weight management promotes healthy blood sugar levels and has been shown to reduce the risk of developing type 2 diabetes (25Trusted Source, 26Trusted Source, 27Trusted Source, 28Trusted Source, 29Trusted Source, 30Trusted Source).</p>
<p>
Monitoring your serving sizes also helps reduce calorie intake and subsequent blood sugar spikes (31Trusted Source).</p>
<p>
Here are some helpful tips for managing portion sizes:</p>
<p>
<ul>
<li>Measure and weigh portions.</li>
<li>Use smaller plates.</li>
<li>Avoid all-you-can-eat restaurants.</li>
<li>Read food labels and check the serving sizes.</li>
<li>Keep a food journal.</li>
<li>Eat slowly.</li>
</ul>
</p>
<strong>SUMMARY</strong><br>
Focusing on your portion sizes can help you better manage your blood sugar levels.
<p>
<li>Choose foods with a low glycemic index</li>
The glycemic index measures how we absorb or digest foods, which affects the rate at which blood sugar levels rise (32Trusted Source).</p>
<p>
Both the amount and type of carbs determine how a food affects blood sugar levels (33Trusted Source, 34Trusted Source).</p>
<p>
Eating low-glycemic-index foods has been shown to reduce blood sugar levels in those with diabetes (35Trusted Source).</p>
<p>
Although the glycemic index of foods is important, the amount of carbs consumed also matters (33Trusted Source).</p>
<p>
Foods with a low to moderate glycemic index include:</p>
<p>
<ul>
<li>bulgur</li>
<li>barley</li>
<li>yogurt</li>
<li>oats</li>
<li>beans</li>
<li>lentils</li>
<li>legumes</li>
<li>wheat pasta</li>
<li>non-starchy vegetables</li>
</ul>
<strong>SUMMARY</strong><br>
It’s essential to choose foods with a low glycemic index and monitor your overall carb intake.
<p>

<li>Manage stress levels</li>
Stress can affect your blood sugar levels (36).</p>
<p>
Hormones such as glucagon and cortisol are secreted during stress. These hormones cause blood sugar levels to go up (36, 37Trusted Source).</p>
<p>
One study showed that exercise, relaxation, and meditation significantly reduced stress and lowered blood sugar levels for students (38Trusted Source).</p>
<p>
Exercises and relaxation methods like yoga and mindfulness-based stress reduction may also help correct insulin secretion problems in chronic diabetes (38Trusted Source, 39Trusted Source, 40Trusted Source, 41Trusted Source).</p>
<p>
<strong>SUMMARY</strong><br>
Managing stress levels through exercise or relaxation methods, such as yoga, may help you better regulate blood sugar levels.</p>

<li> Monitor your blood sugar levels</li>
<p>
“What gets measured gets managed.”</p>
<p>
Measuring and monitoring blood glucose levels can also help you better manage your levels.</p>
<p>
For example, keeping track helps you determine whether you need to make adjustments in meals or medications (31Trusted Source).</p>
<p>
It will also help you find out how your body reacts to certain foods (42, 43Trusted Source).</p>
<p>
Try measuring your levels every day and keeping track of the numbers in a log.</p>

<strong>SUMMARY</strong><br>
<p>
Checking your blood glucose and maintaining a log every day will help you adjust foods and medications when necessary to help decrease your blood sugar levels.</p>
<p>
<li> Get enough quality sleep</li>
Getting enough sleep feels excellent and is necessary for good health (44Trusted Source).</p>
<p>
Poor sleeping habits and a lack of rest can also affect blood sugar levels and insulin sensitivity. They can increase appetite and promote weight gain (45Trusted Source, 46Trusted Source).</p>
<p>
Sleep deprivation decreases the release of growth hormones and increases cortisol levels. Both of these play an essential role in blood sugar management (44Trusted Source, 45Trusted Source, 46Trusted Source).</p>
<p>
Furthermore, adequate sleep is about both quantity and quality. It’s best to get a sufficient amount of high quality sleep every night (47Trusted Source).</p>

<strong>SUMMARY</strong><br>
Good sleep helps maintain your blood sugar levels and promote a healthy weight. Poor sleep can disrupt critical metabolic hormones.
<p>
<li>Eat foods rich in chromium and magnesium</li>
High blood sugar levels and diabetes have also been linked to micronutrient deficiencies (48, 49, 56Trusted Source).</p>
<p>
Examples include deficiencies in the minerals chromium and magnesium.</p>
<p>
Chromium is involved in carb and fat metabolism. It also helps regulate blood sugar levels. A lack of chromium may predispose you to carb intolerance (48, 49, 50Trusted Source).</p>
<p>
However, the mechanisms behind this are not entirely known. Studies also report mixed findings.</p>
<p>
Some studies of people with diabetes showed that chromium had benefits for long-term blood sugar management. However, the alternate has also been found (51Trusted Source, 52Trusted Source, 53Trusted Source, 54Trusted Source).</p>
<p>
Chromium-rich foods include:
<ul>
<li>meats</li>
<li>whole grain products</li>
<li>fruit</li>
<li>vegetables</li>
<li>nuts</li>
</ul>
Magnesium has also been shown to benefit blood sugar levels, while magnesium deficiency has been linked to a higher risk of developing diabetes (48, 55Trusted Source, 56Trusted Source).</p>
<p>
Studies have linked individuals with the highest magnesium intake with up to a 47% lower risk for developing type 2 diabetes (57).</p>
<p>
However, if you already eat plenty of magnesium-rich foods, you probably will not benefit from supplements (58Trusted Source).</p>
<p>
Magnesium-rich foods include:
<ul>
<li>dark leafy greens</li>
<li>squash and pumpkin seeds</li>
<li>tuna</li>
<li>whole grains</li>
<li>dark chocolate</li>
<li>bananas</li>
<li>avocados</li>
<li>beans</li>
</ul>
<p>
<strong>SUMMARY</strong><br>
Eating foods rich in chromium and magnesium regularly can help prevent deficiencies and reduce the risk of blood sugar problems.</p>
<p>
<li>Try apple cider vinegar</li>
Apple cider vinegar has many health benefits.</p>
<p>
It promotes lower fasting blood sugar levels, possibly decreasing its production by the liver or increasing its use by cells (59Trusted Source, 60Trusted Source, 61).</p>
<p>
Furthermore, studies show that vinegar significantly influences your body’s response to sugars and can help improve insulin sensitivity (61, 62Trusted Source, 63Trusted Source, 64Trusted Source, 65Trusted Source, 66Trusted Source).</p>
<p>
It may be mixed in a few ounces of water that you can drink before a high carb meal or be mixed in salad dressing (67, 68Trusted Source).</p>
<p>
However, it’s essential to talk with your doctor before taking apple cider vinegar if you’re already taking medications that lower blood sugar.</p>
<strong>SUMMARY</strong><br>
Adding apple cider vinegar to your diet can help your body in many ways, including reducing blood sugar levels.</p>

<p>
<li>Experiment with cinnamon extract</li>
Cinnamon is known to have many health benefits.</p>
<p>
It’s been shown to improve insulin sensitivity by decreasing insulin resistance at the cellular level (69Trusted Source, 70Trusted Source).</p>
<p>
Studies show cinnamon can also lower blood sugar levels by up to 29% (71Trusted Source, 72Trusted Source, 73Trusted Source).</p>
<p>
It slows the breakdown of carbs in the digestive tract, which moderates the rise in blood sugar after a meal (74Trusted Source, 75Trusted Source).</p>
<p>
However, there are risks involved if you take too much cinnamon.</p>
<p>
<strong>SUMMARY</strong><br>
Cinnamon has been shown to help reduce fasting blood sugar levels and may help improve insulin sensitivity.</p>

<li>Try berberine</li>
Berberine is the active component of an herb used in traditional Chinese medicine, including treating diabetes (76Trusted Source).
<p>
Berberine has been shown to help lower blood sugar and enhance carb breakdown for energy (77Trusted Source, 78Trusted Source, 79Trusted Source).</p>
<p>
What’s more, berberine may be as effective as some blood-sugar-lowering drugs. This makes it one of the most effective supplements for those with diabetes or prediabetes (77Trusted Source, 80Trusted Source).</p>
<p>
However, many of the mechanisms behind its effects are still unknown (79Trusted Source, 81Trusted Source). More high-quality studies are needed to determine its safety and effectiveness.</p>

Additionally, it may have some side effects, such as:
<ul>
<li>diarrhea</li>
<li>constipation</li>
<li>flatulence</li>
<li>abdominal pain</li>
<li>Speak with your healthcare provider first if you’re considering using berberine.</li>
</ul>
<p>
<strong>SUMMARY</strong><br>
Berberine can help lower blood sugar levels and manage diabetes. However, it may have some digestive side effects.</p>

<li> Eat fenugreek seeds</li>
<p>
Fenugreek seeds are a great source of soluble fiber, which can help manage blood sugar levels.</p>
<p>
Many studies have shown that fenugreek can effectively lower blood sugar in people with diabetes. It also helps reduce fasting glucose and improve glucose tolerance (82Trusted Source, 83Trusted Source, 84Trusted Source, 85Trusted Source).</p>
<p>
Although not that popular, fenugreek can be added to baked goods to help treat diabetes (86Trusted Source).</p>
<p>
The recommended dose of fenugreek seeds is 2–5 grams per day, although this varies from study to study.</p>
<p>
<strong>SUMMARY</strong><br>
Fenugreek seeds are easy to add to your diet and can help regulate blood glucose levels.
</p>
<p>
<li>Maintain a Moderate Weight</li>
It’s a no-brainer that maintaining a moderate weight will help improve your health and may help prevent future health problems.</p>
<p>
Weight management also promotes healthy blood sugar levels and has been shown to help reduce your risk for developing diabetes.</p>
<p>
Even a 7% reduction in body weight can decrease your risk for developing diabetes by up to 58%, and it seems to work even better than a common diabetes medication (87Trusted Source).</p>
<p>
What’s more, these decreased risks can be sustained long term (88Trusted Source, 89Trusted Source, 90Trusted Source).</p>
<p>
It’s important to monitor your waistline, as it’s perhaps the most crucial weight-related factor for estimating your diabetes risk.</p>
<p>
A measurement of more than 35 inches (88.9 cm) for women and more than 40 inches (101.6 cm) for men is associated with an increased risk of developing insulin resistance, high blood sugar levels, and type 2 diabetes (91).</p>
<p>
Having a healthy waist measurement may even be more important than your overall weight (91).</p>
<p>
<strong>SUMMARY</strong><br>
Keeping a moderate weight and waistline will help you maintain normal blood sugar levels and decrease your risk for developing diabetes.</p>
<p>
The bottom line
Be sure to talk with your healthcare provider before making lifestyle changes or trying new supplements.</p>
<p>
This is particularly important if you have problems with blood sugar management or if you’re taking medications to lower blood glucose levels.</p>
<p>
If you have diabetes or have blood sugar management problems, it’s important to work with your healthcare provider to create and start a treatment plan as soon as possible.</p>




</ol>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
<!--<button type="button" class="btn btn-primary">Understood</button>-->
</div>
</div>
</div>
</div>

          </p>
        </div>
      </div>
    </div>
   <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card">
        <img src="assets/img/bd.jpg" class="rounded">

        <div class="card-body" align="justify">
          <h5 class="card-title" style="color: black;"><strong>LEARN MORE ABOUT SUGAR LEVEL</strong></h5>
          <p class="card-text" style="color: black;">Regulation of glucose in the body is done autonomically and constantly throughout each minute of the day. Normal BG levels should be between 60 and 140 mg/dL in order to supply cells of the body with its required energy. 
          <p class="card-text" style="color: black;">
          Brain cells don’t require insulin to drive glucose into neurons; however, there must still be normal amounts available. </p>


            <center>            
            <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Continue reading...
</button>
</center>
<!-- Modal -->

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header bg-primary">
<h5 class="modal-title" id="exampleModalLabel1" style="color: white;"><strong>LEARN MORE ABOUT SUGAR LEVEL</strong></h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body" style="color: black;" align="justify">
<p class="card-text">
Too little glucose, called hypoglycemia, starves cells, and too much glucose (hyperglycemia) creates a sticky, paralyzing effect on cells. Euglycemia, or blood sugar within the normal range, is naturally ideal for the body’s functions. A delicate balance between hormones of the pancreas, intestines, brain, and even adrenals is required to maintain normal BG levels.</p>

<h5><strong>Fuels of the Body</strong></h5>
<p>
To appreciate the pathology of diabetes, it is important to understand how the body normally uses food for energy. Glucose, fats, and proteins are the foods that fuel the body. Knowing how the pancreatic, digestive, and intestinal hormones are involved in food metabolism can help you understand normal physiology and how problems develop with diabetes.</p>
<p>
Throughout the body, cells use glucose as a source of immediate energy. To keep the body running smoothly, a continuous concentration of 60 to 100 mg/dL of glucose in blood plasma is needed. During exercise or stress the body needs a higher concentration because muscles require glucose for energy (Basu et al., 2009). Of the three fuels for the body, glucose is preferred because it produces both energy and water through the Krebs cycle and aerobic metabolism. The body can also use protein and fat; however, their breakdown creates ketoacids, making the body acidic, which is not its optimal state. Excess of ketoacids can produce metabolic acidosis.</p>
<p>
Functioning body tissues continuously absorb glucose from the bloodstream. For people who do not have diabetes, a meal of carbohydrates replenishes the circulating blood glucose about 10 minutes after eating and continues until about 2 hours after eating. A first-phase release of insulin occurs about 5 minutes after a meal and a second phase begins at about 20 minutes. Because the duration of insulin’s effect is only about 2 hours, taking a 2-hour postprandial (after meal) BG shows how well insulin was released and used by the body. The food is broken down into small components including glucose and is then absorbed through the intestines into the bloodstream. Glucose (potential energy) that is not immediately used is stored by the body as glycogen in the muscles, liver, and fat.</p>
<p>
Your body is designed to survive and so it stores energy efficiently, as fat. Most Americans have excess fat because they replenish the glucose stores by eating before any fat needs to be broken down.</p>
<p>
When blood glucose levels fall after 2 hours, the liver replenishes the circulating blood glucose by releasing glycogen (stored glucose). Glycogen is a polysaccharide, made and stored primarily in the cells of the liver. Glycogen provides an energy reserve that can be quickly mobilized to meet a sudden need for glucose.</p>

<h5><strong>Hormones of the Pancreas</strong></h5>
<p>
Regulation of blood glucose is largely done through the endocrine hormones of the pancreas, a beautiful balance of hormones achieved through a negative feedback loop. The main hormones of the pancreas that affect blood glucose include insulin, glucagon, somatostatin, and amylin.</p>
<p>
Insulin (formed in pancreatic beta cells) lowers BG levels, whereas glucagon (from pancreatic alpha cells) elevates BG levels.</p>
<p>
Somatostatin is formed in the delta cells of the pancreas and acts as the “pancreatic policeman,” balancing insulin and glucagon. It helps the pancreas alternate in turning on or turning off each opposing hormone.</p>
<p>
Amylin is a hormone, made in a 1:100 ratio with insulin, that helps increase satiety, or satisfaction and state of fullness from a meal, to prevent overeating. It also helps slow the stomach contents from emptying too quickly, to avoid a quick spike in BG levels.</p>
<p>
As a meal containing carbohydrates is eaten and digested, BG levels rise, and the pancreas turns on insulin production and turns off glucagon production. Glucose from the bloodstream enters liver cells, stimulating the action of several enzymes that convert the glucose to chains of glycogen—so long as both insulin and glucose remain plentiful. In this postprandial or “fed” state, the liver takes in more glucose from the blood than it releases. After a meal has been digested and BG levels begin to fall, insulin secretion drops and glycogen synthesis stops. When it is needed for energy, the liver breaks down glycogen and converts it to glucose for easy transport through the bloodstream to the cells of the body (Wikipedia, 2012a).</p>
<p>
In a healthy liver, up to 10% of its total volume is used for glycogen stores. Skeletal muscle cells store about 1% of glycogen. The liver converts glycogen back to glucose when it is needed for energy and regulates the amount of glucose circulating between meals. Your liver is amazing in that it knows how much to store and keep, or break down and release, to maintain ideal plasma glucose levels. Imitation of this process is the goal of insulin therapy when glucose levels are managed externally. Basal–bolus dosing is used as clinicians attempt to replicate this normal cycle.</p>
<p>
<h4>While a healthy body requires a minimum concentration of circulating glucose (60–100 mg/dl), high chronic concentrations cause health problems and are toxic:</h4></p>
<p>
  <ul>
<li><strong>Acutely:</strong> Hyperglycemia of >300 mg/dl causes polyuria, resulting in dehydration. Profound hyperglycemia (>500 mg/dl) leads to confusion, cerebral edema, coma, and, eventually, death (Ferrante, 2007).</li></p>
<p>
<li><strong>Chronically:</strong> Hyperglycemia that averages more than 120 to 130 mg/dl gradually damages tissues throughout the body and makes a person more susceptible to infections. The glucose becomes syrupy in the bloodstream, intoxicating cells and competing with life-giving oxygen.</li></p>
<p>
</ul>
The concentration of glucose in the blood is determined by the balance between the rate of glucose entering and the rate of glucose leaving the circulation. These signals are delivered throughout the body by two pancreatic hormones, insulin and glucagon (Maitra, 2009). Optimal health requires that:</p>
<p>
<ul>
<li>When blood glucose concentrations are low, the liver is signaled to add glucose to the circulation.</li></p>
<p>
<li>When blood glucose concentrations are high, the liver and the skeletal muscles are signaled to remove glucose from the circulation.</li></p>
</ul>
<p>
<h5><strong>The Role of Insulin</strong></h5></p>
<p>
Insulin is a peptide hormone made in the beta cells of the pancreas that is central to regulating carbohydrate metabolism in the body (Wikipedia, 2016). After a meal, insulin is secreted into the bloodstream. When it reaches insulin-sensitive cells—liver cells, fat cells, and striated muscle—insulin stimulates them to take up and metabolize glucose. Insulin synthesis and release from beta cells is stimulated by rising concentrations of blood glucose. Insulin has a range of effects that can be categorized as anabolic, or growth-promoting.</p>

<h5><strong>The Role of Glucagon</strong></h5>
<p>
Glucagon, a peptide hormone secreted by the pancreas, raises blood glucose levels. Its effect is opposite to insulin, which lowers blood glucose levels. When it reaches the liver, glucagon stimulates glycolysis, the breakdown of glycogen, and the export of glucose into the circulation. In these ways, the effects of glucagon are catabolic, breaking down cells—the opposite of insulin’s anabolic effects (Drucker, 2008). </p>
<p>
The pancreas releases glucagon when glucose levels fall too low. Glucagon causes the liver to convert stored glycogen into glucose, which is released into the bloodstream. High BG levels stimulate the release of insulin. Insulin allows glucose to be taken up and used by insulin-dependent tissues, such as muscle cells. Glucagon and insulin work together automatically as a negative feedback system to keeps BG levels stable. </p>
<p>
Glucagon is a powerful regulator of BG levels, and glucagon injections can be used to correct severe hypoglycemia. Glucose taken orally or parenterally can elevate plasma glucose levels within minutes, but exogenous glucagon injections are not glucose; a glucagon injection takes approximately 10 to 20 minutes to be absorbed by muscle cells into the bloodstream and circulated to the liver, there to trigger the breakdown of stored glycogen. </p>
<p>
People with type 2 diabetes have excess glucagon secretion, which is a contributor to the chronic hyperglycemia of type 2 diabetes. The amazing balance of these two opposing hormones of glucagon and insulin is maintained by another pancreatic hormone called somatostatin, created in the delta cells. It truly is the great pancreatic policeman as it works to keep them balanced. </p>
<img src="assets/img/bd.jpg" class="rounded">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
<!--<button type="button" class="btn btn-primary">Understood</button>-->
</div>
</div>
</div>
</div>


          </p>
        </div>
      </div>
    </div>
  </div>
<p class="card-text"><strong><h5>Read more about blood sugar</h5></strong></p>
<details>
  <summary><h5><strong>WHAT BLOOD SUGAR LEVEL IS ALL ABOUT</strong></h5></summary>
<p class="card-text" align="justify">
The blood sugar level, blood sugar concentration, or blood glucose level is the measure of concentration of glucose present in the blood of humans or other animals. Approximately 4 grams of glucose, a simple sugar, is present in the blood of a 70 kg (154 lb) human at all times. The body tightly regulates blood glucose levels as a part of metabolic homeostasis. Glucose is stored in skeletal muscle and liver cells in the form of glycogen; in fasting individuals, blood glucose is maintained at a constant level at the expense of glycogen stores in the liver and skeletal muscle.
</p>
<p class="card-text" align="justify">
The fluctuation of blood sugar (red) and the sugar-lowering hormone insulin (blue) in humans during the course of a day with three meal. One of the effects of a sugar-rich vs a starch-rich meal is highlighted.
</p>
<p class="card-text" align="justify">
In humans, a blood glucose level of 4 grams, or about a teaspoon, is critical for normal function in a number of tissues, and the human brain consumes approximately 60% of blood glucose in fasting, sedentary individuals. A persistent elevation in blood glucose leads to glucose toxicity, which contributes to cell dysfunction and the pathology grouped together as complications of diabetes. Glucose can be transported from the intestines or liver to other tissues in the body via the bloodstream. Cellular glucose uptake is primarily regulated by insulin, a hormone produced in the pancreas.
</p>
<p class="card-text" align="justify">
Glucose levels are usually lowest in the morning, before the first meal of the day, and rise after meals for an hour or two by a few millimoles. Blood sugar levels outside the normal range may be an indicator of a medical condition. A persistently high level is referred to as hyperglycemia; low levels are referred to as hypoglycemia. Diabetes mellitus is characterized by persistent hyperglycemia from any of several causes, and it is the most prominent disease related to the failure of blood sugar regulation. There are different methods of testing and measuring blood sugar levels.
</p>
<br>
The intake of alcohol causes an initial surge in blood sugar and later tends to cause levels to fall. Also, certain drugs can increase or decrease glucose levels.

</details>
<br>
<details>
<summary> <h5><strong>THE DIFFERENCE BETWEEN mmol/L and mg/dL</strong></h5> </summary>
<br><br>
  <h5 class="card-text" align="justify"><strong>Whats the difference between mmol/L and mg/dL?</strong></h5>
<p class="card-text" align="justify">
Both sets of units are used to measure blood sugar levels and both give a measurement of the concentration of glucose in the blood, albeit in slightly different ways.
</p>
<p class="card-text" align="justify">
mmol/L gives the molarity, which is the number of molecules of a substance within a specified volumen, in this case within 1 litre. mg/dL gives the concentration by the ratio of weight to volumen, in this case milligrams per decilitre.
</p>
<p class="card-text" align="justify">
mmol/L is the most common measurement used in the UK with mg/dL predominantly used in the USA and continental Europe. mmol/L International standard unit for measuring the concentration of glucose in the blood – also known as millimolar (mM). This unit is used in the UK. : Millimoles per litre<br><br>
mg/dL Unit for measuring concentration of glucose in the blood in the USA – milligrams per decilitre. : Milligrams per 100 millilitres
Blood glucose typically varies from 4 mmol/L to 6 mmol/L for people without diabetes.
</p>
<p class="card-text" align="justify">
Blood sugar (also called blood glucose) needs to be tightly controlled in the human body to minimise the risk of complications developing.

<br>
<b>Formula to calculate mmol/l from mg/dl</b>: mmol/l = mg/dl / 18<br>
<b>Formula to calculate mg/dl from mmol/l</b>: mg/dl = 18 × mmol/l
<br><br>
</p>
<p class="card-text" align="justify">
<img src="assets/img/sg.jpg" class="rounded">
</p>
<br>
<h5><strong>Can I change the units given by my blood glucose meter?</strong></h5>
<p class="card-text" align="justify">
This can depend on <i class="rounded" style="color: green;"><b>which blood glucose meter</b> </i> you have. Some meters allow you to change the units from mg/dL to mmol/L and vice versa whether some meters are only set up to display one set of units.

Check the meter’s manual for whether it is possible to change the units. If you don’t have or cannot find the manual, contact the manufacturer.
</p>
<br><br>
<p class="card-text" align="justify">
  <img src="assets/img/sg1.jpg" class="rounded"><br>
</p>
  <h5><strong>Why are blood sugar levels important?</strong></h5>
<p class="card-text" align="justify">
Measuring blood sugar levels and understanding what your glucose levels should be is an essential part of diabetes treatment for many people with diabetes.
</p>
<p class="card-text" align="justify">
Blood sugar level refers to the total amount of glucose circulating in the blood. In different parts of the world, different units for measuring blood glucose are standard.
</p>
</details>


<br>
<details>
  <summary><h5><strong>WHY USE AN ONLINE BLOOD SUGAR CONVERTER?</strong></h5></summary>
  <p class="card-text" align="justify">
  With the help of <strong> BLOOD SUGAR CONVERTER</strong>, you will be able to Convert your blood sugar/glucose from mmol/L (UK standard) to
mg/dL (US standard) an vice versa using blood sugar converter.<br><br><br> There are no payment or login restrictions. It’s totally free.
</p>

</details>
<br><br><br><br><br>
<p class="card-text"><strong><h5>Credits</h5></strong></p>
<hr>
<p class="card-text" align="justify">
  <strong>Image Credits: </strong> Atrain Education (<a style="color: navy;" href="https://atrainceu.com" target="_blank">Atrain Education</a>), <i>Regulation of Blood Glucose</i>
  <br>
  <strong>Image Credits: </strong> Narayana Health (<a style="color: navy;" href="https://narayanahealth.org" target="_blank">Narayana Health</a>), <i>Control blood sugar & lower the risk of diabetes</i>
  <br>
  <strong>Image Credits: </strong> Diabetes UK (<a style="color: navy;" href="https://diabetes.co.uk" target="_blank">Diabetes UK </a>), <i>Blood Sugar Converter for Diabetes</i>
</p>
<br><a href="#" class="btn btn-primary" style="float: right; color: white;"><h3><i class="fa fa-chevron-up faa-rising animated faa-slow"> </i> </h3></a><br><br>
<p class="float-end mb-1"></p>


    <br><br>

<footer class="footer mt-auto py-3 bg-dark">
  <div class="container">
     <h5><p class="card-text" align="center"><a href="https://facebook.com/dave.enyi.7" target="_blank"><i class="fa fa-facebook"></i></a>  <a href="https://instagram.com/i_am_dave_sleek" target="_blank"><i class="fa fa-instagram" target="_blank"></i></a> <a href="https://twitter.com/davey_sleek" target="_blank"><i class="fa fa-twitter" target="_blank"></i></a> <a href="https://linkedin.com/in/dave-enyi-631aa2109" target="_blank"><i class="fa fa-linkedin" target="_blank"></i></a> <a href="https://github.com/Dave-Sleek" target="_blank"><i class="fa fa-github" target="_blank"></i></a></p></h5>
     <span>
    <h5 align="center"> <a class="btn btn-outline-default text-white shadow-ms" href="tel:+2347045574466"> <i class="fa fa-phone"></i> 07045576644</a>&nbsp;<a class="btn btn-outline-default text-white" href="https://wa.me/2348138809708?text=Hi%20I'm%20Dave,%20thanks%20for%20contacting%20me!%20Please%20let%20 me%20know%20how%20i%20can%20help%20you."> <i class="fa fa-whatsapp"></i> Send a message</a></h5></span>
   <center> <span class="text-muted">BLOOD SUGAR CONVERTER</span></center>
   <center><span class="text-muted"> GetBusyCoding &copy; <?php echo date("Y"); ?></span></center>
   
  </div>
</footer>

  </body>
  <script>
   var month = new Date();
   document.getElementById("mont").innerHTML = month.getMonth() + 1;
    // Returns 27
</script>
  <script>
    var today = new Date();
    var date = today.getDate();
    document.getElementById("dat").innerHTML = " " + date;
    // Returns 27
    //document.write(date);
</script>
  <script>
var myVar = setInterval(myTimer, 1000);
function myTimer() {
var d = new Date();
document.getElementById("otime").innerHTML = d.toLocaleTimeString(); 
  
}
</script>
  <script>
    var day;
    switch (new Date().getDay()) {
        case 0:
            day = "Sunday";
            break;
        case 1:
            day = "Monday";
            break;
        case 2:
            day = "Tuesday";
            break;
        case 3:
            day = "Wednesday";
            break;
        case 4:
            day = "Thursday";
            break;
        case 5:
            day = "Friday";
            break;
        case  6:
            day = "Saturday";
    }
    document.getElementById("days").innerHTML = " " + day;
    </script>
  <script type="text/javascript" src="assets/dist/js/preloader.js"></script>
</html>
