<?php


if(is_active_sidebar('sidebar')):
  echo "<div class=\"col-sm-3\"><div class=\"tweaked-margin content1 sideBar\"><div class=\"row\"><div class=\"col-sm-12\">";
  dynamic_sidebar('sidebar');
  echo "</div></div></div></div>";
endif;












?>
