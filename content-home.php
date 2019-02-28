<?php
	$path=$_SERVER['REQUEST_URI'];
	$URI=get_site_url().$path;

	echo "<h1><a href=\"$URI\">Blog</a></h1>\n";

	if(have_posts()) {
    	$i = 0;
    	?>
    	<div class="row">
        
        <?php
		while(have_posts()) {
			the_post();
			
			$permalink = get_permalink();
			
			if(current_user_can('edit_pages')) {
				$edit_url = get_edit_post_link();
				$edit_link = " <small><a href=\"$edit_url\" class=\"post-edit-link\">Edit Post</a></small>";
			} else {
				$edit_link = "";
			}
				
			
			echo "<article class=\"col-md-6\">";
			the_title("<h3><a href=\"$permalink\">", "</a>$edit_link</h3>");
			sherpa_excerpt();
			echo "</article>";
			
			$i++;
			if($i % 2 == 0) {
    			echo '<div class="clearfix"></div>';
			}
		}
    	?>
    	</div>
        
        <?php
		
	}
