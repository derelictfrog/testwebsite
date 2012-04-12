<?php
$path = $_SERVER['PHP_SELF'];
$page = basename($path);
$page = basename($path, '.php');
?>

<div id="nav" role="navigation">
<ul>
<li><a<?php if($page == 'index'): ?> class="active" <?php endif ?> href="index.php">Home</a></li>
<li><a<?php if($page == 'news'): ?> class="active" <?php endif ?> href="news.php">News</a></li>
<li><a<?php if($page == 'contact'): ?> class="active" <?php endif ?> href="#">Contact</a></li>
<li><a<?php if($page == 'about'): ?> class="active" <?php endif ?> href="#">About</a></li>
</ul> 
</div>