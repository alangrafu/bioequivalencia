<?php

$conf['endpoint']['local'] = 'http://graves.cl/bioequivalencia/db/sparql.php';
$conf['home'] = '/home/alangrafu/graves.cl/bioequivalencia/lodspeakr/';
$conf['basedir'] = 'http://graves.cl/bioequivalencia/';
$conf['debug'] = false;

/*ATTENTION: By default this application is available to
 * be exported and copied (its configuration)
 * by others. If you do not want that, 
 * turn the next option as false
 */ 

# If you want to add/override a namespace, add it here
$conf['ns']['local']   = 'http://graves.cl/bioequivalencia/';
$conf['root'] = 'inicio';

$conf['mirror_external_uris'] = false;
?>
