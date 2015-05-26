<?php

// Custom functions


function brl_youtube_import()
{
	return; # kill switch

	// http://gdata.youtube.com/feeds/api/videos?alt=json&author=ElectricTVonline&start-index=41&max-results=40&v=2
	$json1 = json_decode(file_get_contents('/var/www/electrictv.net/luke/import/videos1.json'), true);
	$json2 = json_decode(file_get_contents('/var/www/electrictv.net/luke/import/videos2.json'), true);
	$entries = array_merge($json1['feed']['entry'], $json2['feed']['entry']);

	foreach($entries as $e)
	{
		$link = $e['link'][0]['href'];
		$link = str_replace('&feature=youtube_gdata', '', $link);
	
		#echo $e['title']['$t']."\n".$link."\n\n";
		
		$post = array(
			'post_title' => $e['title']['$t'],
			'post_date' => date('Y-m-d H:i:s', strtotime($e['published']['$t'])),
			'post_author' => 1,
			'post_content' => '',
			'post_type' => 'etv_video',
			'post_status' => 'publish',
		);

		if(!@empty($e['media$group']['media$description']['$t']))
			$post['post_content'] = $e['media$group']['media$description']['$t'];
			
		$post_id = wp_insert_post($post);
		
		if(empty($post_id))
		{
			echo "<br>\nERROR! <pre>".print_r($post,1).print_r($e,1)."</pre><br>\n";
		}
		else
		{
			if(!add_post_meta($post_id, 'etv_youtube_url', $link))
				echo "<br>\nERROR! <pre>".print_r($post_id,1).print_r($link,1)."</pre><br>\n";
		}
		
		#break;
	}
	#die("\n\n\nComplete!");
}
#if(isset($_GET['do_youtube_import'])) brl_youtube_import();
