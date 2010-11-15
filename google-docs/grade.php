<pre>
<?php
if(!isset($_POST['submit'])) { die('You did not take the quiz.'); }
?>


===Quiz Responses===

<?php
/*Correct answer is "Click the "Documents" link in the upper left corner of my inbox".*/
if($access=="Incorrect") {
print "Wrong. Click the Documents link.";
}
else {
print "That is correct!";
}

/*Correct answer is Edit an image*/
if($cantdo=="Incorrect") { 
  print "Nope, Google docs can do that. What it can't do is edit images (yet!).";
}
/*Incorrect answers are everything else*/
else {
	print "That's right! Google docs can't edit images (yet!).";
}
?>
<pre>
