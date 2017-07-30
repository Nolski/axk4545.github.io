<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Aidan's Unofficial Chicago Site - Grading</title>
  <link rel="stylesheet" type="text/css" href="assets/style.css"/>
  <meta name="viewport" content="width=device-width, minimumscale=1.0, maximum-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta charset="utf-8"/>
  <script src="assets/nav.js"></script>
</head>
<body>
  <nav>
    <button id="menu" onclick="drop()">&#9776; Menu</button>
    <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="history.php">History</a></li>
        <li><a href="government.php">Government</a></li>
        <li><a href="geography.php">Geography</a></li>
        <li><a href="climate.php">Climate</a></li>
        <li><a href="landmarks.php">Landmarks</a></li>
        <li><a href="residents.php">Famous Residents</a></li>
        <li><a href="food.php">Food</a></li>
        <li><a href="facts.php">Interesting Facts</a></li>
        <li><a href="resources.php">External sites</a></li>
        <li><a href="bibliography.php">Bibliography</a></li>
    </ul>
</nav>
 
  <h1>Site Creation Resources</h1>
  <p>
  The twelve pages of this site were written by me using some info from the resources listed on the bibliography page.
  The facts are my own knowledge fleshed out with info from the references. Below is a list of some elements of my 
  site that you may be interested in:
  </p>
  <ul>
    <li>CSS contained in file assets/style.css and commented with functions</li>
    <li>Navigation pulled in with php include().</li>
    <li>Site is optimized for small mobile displays.</li>
    <li>Fully valid HTML and CSS.</li>
    <li>Javascript used to modify nav class to indicate current page.</li>
    <li>Javascript used to modify css and show dropdown on click.</li>
    <li>Custom graphic to link back to WM2 homepage<./li>
    <li>Site does not use any frameworks and is created entirely in HTML, CSS, javascript and php.</li>
    <li>All images are public domain or creative commons excluding the image of Kurt Summers used with permission from his office.</li>
  </ul>
  <footer>&copy; Aidan Kahrs 2016
<p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="//jigsaw.w3.org/css-validator/images/vcss-blue"
            alt="Valid CSS!" />
    </a>
</p>
<p><a id="grade" href="grade.php">Grading Page</a></p>
<p>
    <a id="home" href="../index.html"><img title="Homepage" src="assets/kahrs-2.png" alt="Web 2 Homepage"/></a>
</p>
</footer>
 
  <script>setCurrent();</script>
</body>
</html>
