<?php  

/*
 * ©2013 Croce Rossa Italiana
 */

paginaAdmin();

$c = $_GET['id'];
$c = new Comitato($c);

$l = $c->locale();

if ( $x = $l->principale() ) {
  $x->principale = 0;
}

$c->principale = 1;

redirect('admin.comitati');