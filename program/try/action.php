<!doctype html>

<html>

<head>

<title>はじめてのスライダー</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!-- bxSlider Javascript file -->

<script src="js/jquery.bxslider.min.js"></script>

<!-- bxSlider CSS file -->

<link href="lib/jquery.bxslider.css" rel="stylesheet" />

</head>

<body>

<h1>はじめてのスライダー</h1>

<ul class="bxslider">

<li><img src="images/pic1.jpg" /></li>

<li><img src="images/pic2.jpg" /></li>

<li><img src="images/pic3.jpg" /></li>

</ul>

<script>

$(document).ready(function(){

$('.bxslider').bxSlider();

});

</script>

</body>

</html>