<?php
include_once('paths.php');
include_once(INCLUDES_PATH.'/page.php');

register_style('css/info.css');
page_start('Ajuda: donar la benvinguda als nous col·laboradors', 'info.php');

function markdown_link ($text, $url) {
	echo '<span class="invisible">[</span><a href="';
	echo $url;
	echo '">';
	echo $text;
	echo '</a><span class="invisible">](';
	echo $url;
	echo ')</span>';
}
?>

	<article>
		<section id="terms">
			<h3>Terminologia que utilitza iD</h3>
			<p>iD fa servir altres paraules per referir-se als tipus d'elements primordials.<span class='term-osm'>terminologia OSM normal</span> <span class='term-id'>terminologia iD</span>.</p>
			<ul>
				<li>un <span class='term-osm'>node</span> que és part d'una <span class='term-osm'>via</span> s'anomena <span class='term-id'>node</span></li>
				<li>un <span class='term-osm'>node</span> singulier s'appelle un <span class='term-id'>punto</span></li>
				<li>una <span class='term-osm'>via</span> que representa un área, se denomina <span class='term-id'>polígono</span></li>
				<li>una <span class='term-osm'>via</span> qui no representa un área, se donomina <span class='term-id'>línea</span></li>
				<li>los <span class='term-osm'>multipolígonos</span> se crean automáticamente y sont créés automatiquement et sont également indiqués comme <span class='term-id'>polígono</span> au contributeur, il ou elle ne sait pas qu'on a fait une <span class='term-osm'>relación</span></li>
			</ul>

			<p>Si escribes a nuevos colaboradores que usen iD, puedes tener esto en cuenta</p>
		</section>
	</article>

<?php
page_end();
?>
