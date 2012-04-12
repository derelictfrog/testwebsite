<?php
function getHeader( $title = "default title such as name of site" ) {
$header = 
'
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<html>

<head>
<title>'.$title.'</title>
<meta name="description" content="Latest stuff n more">
<meta name="keywords" content="jarrod blog stuff">
<link rel="stylesheet" type="text/css" href="test1.css" />
</head>

<body>

<div id="container">

<div id="header">
<h1>Jarrods Test Website</h1>
</div>

<div id="menu" role="navigation">
<ul>
<li><a href="#">Email<em><img src="msn.png" alt="email"></em></a></li>
<li><a href="#">FB<em><img src="facebook.png" alt="facebook"></em></a></li>
<li><a href="#">Twitter<em><img src="twitter.png" alt="twitter"></em></a></li>
<li><a href="#">Youtube<img src="youtube.png" alt="youtube"></a></li>
</ul> 
</div>
';
return $header;
}



function getFooter() {
$footer =
'
<div id="footer">
Copyright &copy; '. date ('Y') . ' Jarrod Doyle
</div>

</div>

</body>
</html>
';
return $footer;
}
?>