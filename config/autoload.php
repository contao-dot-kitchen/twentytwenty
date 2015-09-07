<?php

ClassLoader::addNamespaces(array
(
	'Contao',
));

ClassLoader::addClasses(array
(
	'Contao\ContentTwentyTwenty'		=> 'system/modules/twentytwenty/elements/ContentTwentyTwenty.php'
));

TemplateLoader::addFiles(array
(
	'ce_twentytwenty'			=> 'system/modules/twentytwenty/templates/elements'
));