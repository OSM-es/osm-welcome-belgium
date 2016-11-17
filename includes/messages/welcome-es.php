<?php

$language = 'es';
$welcome[$language] = array();

// Traducido por Santiago Crespo

$welcome[$language]['language_name'] = 'Castellano';

$welcome[$language]['hi'] = 'Hola %1$s';

$welcome[$language]['bravo'] = 'He visto que has hecho tu primera edición en OpenStreetMap. ¡Enhorabuena y gracias! Ahora eres un miembro de la comunidad OSM.';

$welcome[$language]['reality'] = 'Nos puedes encontrar '.markdown_link('online', 'http://openstreetmap.es/').' y '.markdown_link('offline', 'https://wiki.openstreetmap.org/wiki/Current_events').'.';

$welcome[$language]['questions'] = 'Si tienes alguna pregunta, podemos ayudarte: si crees que has roto algo, no estás seguro de cómo mapear algo, o simplemente quieres saber más sobre OpenStreetMap, puedes contactar con nosotros.';

$welcome[$language]['helpintro'] = 'Aquí tienes algo de ayuda para empezar:';

$welcome[$language]['info_wiki'] = 'Puedes encontrar un montón de información sobre cómo mapear en '.markdown_link('la wiki', 'https://wiki.openstreetmap.org/wiki/WikiProject_Spain').' y en '.markdown_link('learnosm.org', 'http://learnosm.org/es/').'.';

// Customized info for the mapper's editor
$welcome[$language]['info_iD'] = 'Si quieres mapear algo con iD y no encuentras la etiqueta a usar, la solución más rápida puede que sea '; // Followed by info_solution
$welcome[$language]['info_Potlatch'] = 'Si quieres mapear algo con Potlatch y no encuentras la etiqueta a usar, la solución más rápida puede que sea '; // Followed by info_solution
$welcome[$language]['info_JOSM'] = 'Si quieres mapear algo con JOSM y no encuentras la etiqueta a usar, la solución más rápida puede que sea '; // Followed by info_solution
$welcome[$language]['info_other'] = 'Si no encuentras la etiqueta a usar, la solución más rápida puede que sea '; // Followed by info_solution

$welcome[$language]['info_solution'] = 'buscar “site:wiki.openstreetmap.org [lo que quieras mapear]” usando tu motor de búsqueda preferido. Además puedes navegar por las preguntas en '.markdown_link('el sitio de ayuda', 'https://help.openstreetmap.org').' preguntar una tú mismo o preguntar en el canal '.markdown_link('#osm-es-etiquetado', 'https://riot.im/app/#/room/#osm-es-etiquetado:matrix.org').'.';

$welcome[$language]['news'] = 'Si quieres estar al tanto de lo que ocurre en la comunidad española, suscríbete a la '.markdown_link('lista de correo talk-es', 'https://lists.openstreetmap.org/listinfo/talk-es').'. Además puedes seguir a '.markdown_link(' @openstreetmapes', 'https://twitter.com/openstreetmapes').' en Twitter y unirte a la conversación en '.markdown_link('#openstreetmap-es', 'https://riot.im/app/#/room/#openstreetmap-es:matrix.org').'.';

$welcome[$language]['resultmaps'] = 'Para ver a los mapeadores activos en tu barrio o para ver lo que has contribuido, mira los mapas y estadísticas en '.markdown_link('resultmaps.neis-one.org', 'http://resultmaps.neis-one.org/').'.';

$welcome[$language]['weeklyosm'] = 'Además hay un '.markdown_link('boletín semanal con todo lo que ocurre en OSM en el mundo', 'http://www.weeklyosm.eu/').' al que te puedes suscribir. (Tiene un RSS para los fans.)';

$welcome[$language]['endingsentence'] = '¡Feliz Mapeo!';

$welcome[$language]['osm-be'] = 'OpenStreetMap España';

$welcome[$language]['multiple_langs'] = 'Este mensaje se envía en varios idiomas, ya que no hemos podido detectar el tuyo.';
