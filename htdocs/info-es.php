<?php
include_once('paths.php');
include_once(INCLUDES_PATH.'/page.php');

register_style('css/info.css');
page_start('Ayuda: dar la bienvenida a los nuevos colaboradores', 'info.php');

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
			<p>OJO, esto no está revisado. Si alguien lo revisa que me escriba a openstreetmap algarroba flanera.net</p>
			<h3>Terminología que usa iD</h3>
			<p>iD usa otras palabras para referirse a los tipos de elementos primordiales. <span class='term-osm'>terminología OSM normal</span> <span class='term-id'>terminología iD</span>.</p>
			<ul>
				<li>un <span class='term-osm'>nodo</span> que es parte de una <span class='term-osm'>vía</span> se denomina <span class='term-id'>nodo</span></li>
				<li>un <span class='term-osm'>nodo</span> singular se denomina <span class='term-id'>punto</span></li>
				<li>una <span class='term-osm'>vía</span> que representa un área, se denomina <span class='term-id'>polígono</span></li>
				<li>una <span class='term-osm'>vía</span> que no representa un área, se donomina <span class='term-id'>línea</span></li>
				<li>los <span class='term-osm'>multipolígonos</span> se crean automáticamente y son enumerados como polígono <span class='term-id'>polígono</span>en el contribudor (el elemento superior), el o ella (usuario) no sabe que lo que ha hecho una <span class='term-osm'>relación</span></li>
			</ul>

			<p>Si escribes a nuevos colaboradores que usen iD, puedes tener esto en cuenta</p>
		</section>
	</article>

<?php
page_end();
?>
