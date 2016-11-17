<?php

include_once('paths.php');
include_once(INCLUDES_PATH.'/page.php');
include_once(INCLUDES_PATH.'/contributor_list_filter.php');
include_once(INCLUDES_PATH.'/format_duration.php');
include_once(INCLUDES_PATH.'/files/print_list_of_contributors.php');
include_once(INCLUDES_PATH.'/files/get_list_last_updated.php');

register_style('css/list.css');
register_style('css/filter.css');
page_start('List');
?>

	<article>
		<section>
			<p>Bienvenido a la herramienta de bienvenida a los nuevos usuarios de OSM en <i> España</i>. Debajo está la lista con los últimos usuarios. Haz click en uno para ver su ficha.</p>
		</section>
		
		<section class="filtercontrols">
			<?php print_filter_controls(); ?>
		</section>
		
		<section class="tablecontainer">
			<div>
				<?php print_list_of_contributors(); ?>
			</div>
		</section>
		
		<section>
			<p>Last updated: <?php
$lastupdated = time()-get_list_last_updated();
if ($lastupdated < 60) {
	echo 'just now';
} else {
	echo format_duration( time()-get_list_last_updated() );
	echo ' ago';
}
			?></p>
		</section>
	</article>

<?php
page_end();
?>
