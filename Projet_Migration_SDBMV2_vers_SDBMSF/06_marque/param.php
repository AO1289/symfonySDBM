<?php

$migrationTables = array(
    array(
        "source" => array("marque", array("ID_MARQUE", "ID_PAYS","ID_FABRICANT",  "NOM_MARQUE")),
        "destination" => array("marque", array("id",  "pays_id","fabricant_id", "nom")),
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
