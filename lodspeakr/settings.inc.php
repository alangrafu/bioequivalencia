<?php

$conf['endpoint']['local'] = 'http://localhost/sparql'; //tu sparql endpoint donde están alojados los datos
$conf['home'] = '/var/www/bioequivalencia/lodspeakr/'; //el path donde está alojado lodspeakr
$conf['basedir'] = 'http://misitio.com/bioequivalencia/'; //la URL donde se verá el sitio



//NO CAMBIAR NADA DEBAJO DE ESTA LINE//
$conf['debug'] = false;

# If you want to add/override a namespace, add it here
$conf['ns']['local']   = 'http://graves.cl/bioequivalencia/';
$conf['root'] = 'inicio';

$conf['mirror_external_uris'] = true;
?>
