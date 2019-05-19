<?php

include 'session.php';
include '../../connection.php';
include 'timezone.php';

if ($_GET['q'] == 'search') {
    $cmd_search_patient = $pdo->query('
        SELECT
            fld_patientID,
            fld_patientfname,
            fld_patientmname,
            fld_patientlname,
            fld_patientaddress,
            fld_patientdob,
            fld_patientgender
        FROM
            tbl_patientpersonalrecords
        USE INDEX
            (fullname, patient_id)
        WHERE
            fld_patientID LIKE "%'.$_GET['patient'].'%"
            OR
            fld_patientfname LIKE "%'.$_GET['patient'].'%"
            OR
            fld_patientmname LIKE "%'.$_GET['patient'].'%"
            OR
            fld_patientlname LIKE "%'.$_GET['patient'].'%";
            
    ');
}
else if ($_GET['q'] == 'all') {
    $cmd_search_patient = $pdo->query('
        SELECT
            fld_patientID,
            fld_patientfname,
            fld_patientmname,
            fld_patientlname,
            fld_patientaddress,
            fld_patientdob,
            fld_patientgender
        FROM
            tbl_patientpersonalrecords;
            
    ');
}

$array_search_patient = [];

while($data=$cmd_search_patient->fetch(PDO::FETCH_BOTH)){
    $rows = [
        'fld_patientID' => $data['fld_patientID'],
        'fld_patientfname' => $data['fld_patientfname'],
        'fld_patientmname' => $data['fld_patientmname'],
        'fld_patientlname' => $data['fld_patientlname'],
        'fld_patientaddress' => $data['fld_patientaddress'],
        'fld_patientdob' => $data['fld_patientdob'],
        'fld_patientgender' => $data['fld_patientgender'],
    ];

    array_push($array_search_patient,$rows);
}

echo json_encode($array_search_patient);