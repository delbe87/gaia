<?php

/*
 * ©2013 Croce Rossa Italiana
 */

paginaApp([APP_OBIETTIVO , APP_PRESIDENTE]);
$d = $me->dominiDelegazioni(APP_OBIETTIVO);

foreach ( $d as $_d ){
    if ( $_d == 1 ){
        $uno = true;
    }
    if ( $_d == 2 ){
        $due = true;
    }
    if ( $_d == 3 ){
        $tre = true;
    }
    if ( $_d == 4 ){
        $quattro = true;
    }
    if ( $_d == 5 ){
        $cinque = true;
    }
    if ( $_d == 6 ){
        $sei = true;
    }
}
if ( $me->admin() || $me->presidenziante() ){
        $uno=$due=$tre=$quattro=$cinque=$sei=true;
 }
?>

<div class="row-fluid">
    <div class="span3">
        <?php menuVolontario(); ?>
    </div>
    <div class="span9">
        <div class="row-fluid">
            <div class="span12">
                <h3>Delegato d'Area </h3>
                <?php if (isset($_GET['err'])) { ?>
                    <div class="alert alert-block alert-error">
                        <h4><i class="icon-warning-sign"></i> <strong>Qualcosa non ha funzionato</strong>.</h4>
                        <p>L'operazione che stavi tentando di eseguire non è andata a buon fine. Per favore riprova.</p>
                    </div> 
                <?php } ?>
            </div>
        </div>
                    
        <div class="row-fluid">
            <div class="span3">
                
            </div>
            
            <div class="span6 allinea-centro">
                <img src="https://upload.wikimedia.org/wikipedia/it/thumb/4/4a/Emblema_CRI.svg/75px-Emblema_CRI.svg.png" />
            </div>

            <div class="span3">
                <table class="table table-striped table-condensed">
                </table>
            </div>
        </div>
        <hr />
        
        <div class="span12">
            <div class="span6">
                <div class="btn-group btn-group-vertical span12">
                    <a href="?p=presidente.titoli.ricerca" class="btn btn-block">
                        <i class="icon-search"></i>
                        Ricerca per titoli
                    </a>
               </div>
            </div>
            <div class="span6">
                <div class="btn-group btn-group-vertical span12">
            <?php if ( $cinque == true ){ ?>
                    <a href="?p=presidente.utenti.giovani" class="btn btn-block btn-info">
                        <i class="icon-list"></i>
                        Volontari giovani
                    </a>
            <?php } ?>
            <?php if ( $tre == true ){ ?>
                    <a href="?p=co.reperibilita" class="btn btn-block">
                        <i class="icon-thumbs-up"></i>
                        Volontari reperibili
                    </a>
                    <<a href="?p=obiettivo.report.reperibilita" class="btn btn-block">
                        <i class="icon-time"></i>
                        Report reperibilità
                    </a>
            <?php } ?>
                </div>
            </div>
        </div>
   </div>
    <hr/>
</div>
            
