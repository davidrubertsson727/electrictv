<?php
  if (get_post_type() === 'etv_video') {
    dynamic_sidebar('sidebar-video');
  }
    else if (get_post_type() === 'post') {
	dynamic_sidebar('sidebar-blog');
  } 
    else {
    dynamic_sidebar('sidebar-primary');
  }
?>
