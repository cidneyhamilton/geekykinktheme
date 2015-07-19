<?php
  $facebook = 'https://www.facebook.com/geekykinkevents';
  $twitter = 'GeekyKink';
  $tumblr = 'thegeekykinkevent';
  $fetlife = 'https://fetlife.com/groups/34340/';

  // super hacky. check the URL to see if this is GKE:NE, otherwise point to GKE:Classic FL group
  if ($_SERVER['SERVER_NAME'] === "2015.geekykinknewengland.com") {
	  $fetlife = 'https://fetlife.com/groups/77325/';
  } 
?>

<ul class="social">
  <li><a href="<?php echo $facebook; ?>" class="fb" rel="me" target="_blank">Facebook</a></li>
  <li><a href="https://twitter.com/<?php echo $twitter; ?>" class="twitter" rel="me" target="_blank">Twitter</a></li>
  <li><a href="http://<?php echo $tumblr; ?>.tumblr.com/" class="tumblr" rel="me" target="_blank">Tumblr</a></li>
  <li><a href="<?php echo $fetlife; ?>" class="fetlife" rel="me" target="_blank">Fetlife</a></li>
</ul>