<?php

$migrationTables = array(
    array(
        "source" => array("pays", array("ID_PAYS", "NOM_PAYS","ID_CONTINENT")),
        "destination" => array("pays", array("id", "nom","continent_id")),
    ),
    // array(
    //     "source" => array("pays", array("ID_PAYS", "ID_CONTINENT", "NOM_PAYS")),
    //     "destination" => array("paysbis", array("ID", "IDCONTINENT", "NOM")),
    // ),
    // array(
    //     "source" => array("couleur", array("ID_COULEUR", "NOM_COULEUR")),
    //     "destination" => array("couleurbis", array("ID", "NOM")),
    // ),
);
