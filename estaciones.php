<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: *");
header("Allow: GET");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Access-Control-Allow-Origin");


$estacionesCoahuila = [
    "Torreon"=>[
        "Sicove Torreon" => ["CALZ. JUAN AGUSTIN ESPINOZA #5050 COL. AVIACION", "25.558124769153842", "-103.37380482579728"],
        "La 37" => ["CALLE. 37, Nuevo Torreón, 27060 Torreón, Coah.", "25.538815", "-103.40878"],
        "El manto" => ["BOULEVARD TORREON MATAMOROS #8775 JOSE DE LA FUENTES RDZ.", "25.534953", "-103.3275"],
        "Abastos" => ["Calz. Abastos, Magdalenas, 27010 Torreón, Coah.", "25.570723", "-103.420017"],
        "Muzquiz" => ["AV. COAH. S/N COL. CENTRO, SAN PEDRO COAH.", "25.539757", "-103.467025"],
        "Monterreal" => ["CLZ. PROL. PASEO DEL TECNOLOGICO #2525 FRACC. VILLAS DE LAS PERLAS", "25.50457", "-103.353185"],
        "Lazaro Cardenas"=> ["CALZADA LAZARO CARDENAS DEL RIO GRAL 900 FRACC. EDUARDO GUERRA", "25.52379", "-103.429548"]
    ],

    "Parras" => [
        "El Marquez" => ["CALZADA EL MARQUEZ S/N COL. JOSE G. MADERO", "25.446028398081495", "-102.16860923555201"],
    ],

    "San Pedro" => [
        "San Pedro II" => ["AV. COAH. S/N COL. CENTRO, SAN PEDRO COAH.", "25.759783", "-103.00001"]
    ],

    "Francisco I. Madero"=>[
        "Madero I" => ["CARRETERA TORREON-SAN PEDRO KM 29+7 EJIDO JABONCILLO", "25.761403", "-103.244262"]
    ],

    "Matamoros" => [
        "Matamoros II" => ["CARR. MATAMOROS - TORREON #2550 PTE", "25.535698", "-103.25092"]
    ],

    "Monclova"=>[
        "Gas real"=> ["CARRETERA 57 KM 1080 COL. OBRERA MONCLOVA COAH.", "26.87319857708537", "-101.43270756856262"],
        "Mucho gas industrial" => ["AV. INDUSTRIAL No. 1910 COL. BRAULIO FERNANDEZ MONCLOVA COAH.", "26.88547964461087", "-101.43161481405586"],
        "Gas cassa" => ["CARRETERA 57 (CASTAÑOS, POR MONKEYS) MONCLOVA COAH.","26.76656677340403", "-101.41209761497107"],
        "Gas ideal" => ["CARRETERA 57 KM 1060 ASTURIAS 25790 MONCLOVA COAH.","26.853178234146487", "-101.42658404551538"],
        "Mucho gas oriente" => ["MANUEL JOTA CELIS No.1910 COL. VETERANOS MONCLOVA COAH.","26.92434671093747", "-101.39128463963546"],
        "Gas total" => ["BLVD. PAPE COL. SANTA ISABEL","26.934476960653736", "-101.41480282331756"],
        "Mucho gas planta frontera" => ["LIB. CARLOS SALINAS KM. 16.4","31.648028046708866", "-106.33609443107423"]
    ],

    "Acuña" => [
        "Planta fifi" => ["Libramiento Emilio Mendoza Cisneros Km 1+500 ACUÑA COAH.","29.32215713", "-100.96503139"],
        "Las Americas" => ["Libramiento Emilio Mendoza Cisneros Nº 2155 ACUÑA COAH.", "29.325888936713028", "-100.97606603995943"],
        "Cedros"=> ["Boulevard Los Cedros Nº 2530 ACUÑA COAH.", "29.319200852024267", "-100.95335004344574"],
        "La Glorieta"=> ["Boulevard Guerrero Nº 2755 ACUÑA COAH.", "29.304870060077604", "-100.9244150906886"]
    ]

];

$estacionesDurango = [
    "Gomez Palacio"=>[
        "Sicove Gomez"=> ["C. EDUARDO ASTORGA #217 COL. HORTENCIAS", "25.58123", "-103.481513"],
        "La Feria"=> ["BOULEVARD EJERCITO MEXICANO - PERIFERICO # S/N FRACC LA FERIA", "25.577927", "-103.475887"],
        "Vergel"=>["CARR. GOMEZ PALACIO-CHIHUAHUA KM. 12+770 EJ. LA COMPETENCIA DGO", "25.656018", "-103.529485"],
        "Urrea"=> ["AV. MIGUEL AUZA #714 SUR COL. SANTA ROSA", "25.563329142659654", "-103.48947740241637"],
        "Rebollo"=> ["BOULEVARD JOSE REBOLLO ACOSTA #220 COL. CENTRAL ABASTOS", "25.56679", "-103.476545"],
        "Jabonoso"=> ["BOULEVARD BICENTENARIO DE LA REBOLUCION #1503 COL. MIGUEL DE LA MADRID", "25.603893", "-103.468472"],
        "Madero GP" => ["AV. FCO I MADERO #2001 COLONIA NUEVO LOS ALAMOS", "25.583990360626544", "-103.50486360856088"]
    ],

    "Lerdo"=>[
        "Lerdo I" => ["LOTE 1 MANZ 1 ZONA 9 PERIF KM 12 350 Y LIB PERIF TRN GP LDO COL CENTO LERDO", "25.553822", "-103.527233"],
        "Lerdo II" => ["CALZ GUADALUPE VICTORIA  COL. U. HAB. DE LAS 5A # 42", "25.534967", "-103.518257"]
    ],

    "Bermejillo"=>[
        "Bermejillo" => ["C. FERROCARRIL S/N BERMEJILLO DGO", "25.878825", "-103.618102"]
    ],

];

$estacionesTodas = [
    "Todos" => [
        "Sicove Torreon" => ["CALZ. JUAN AGUSTIN ESPINOZA #5050 COL. AVIACION", "25.55800166547791", "-103.39207952861469", "Sicove Torreón"],
        "La 37" => ["CALLE. 37, Nuevo Torreón, 27060 Torreón, Coah.", "25.538815", "-103.40878", "La 37"],
        "El Manto" => ["BOULEVARD TORREON MATAMOROS #8775 JOSE DE LA FUENTES RDZ.", "25.534953", "-103.3275", "El Manto"],
        "Abastos" => ["Calz. Abastos, Magdalenas, 27010 Torreón, Coah.", "25.570723", "-103.420017", "Abastos"],
        "Muzquiz" => ["AV. COAH. S/N COL. CENTRO, SAN PEDRO COAH.", "25.539757", "-103.467025", "Muzquiz"],
        "Monterreal" => ["CLZ. PROL. PASEO DEL TECNOLOGICO #2525 FRACC. VILLAS DE LAS PERLAS", "25.50457", "-103.353185", "Monterreal"],
        "Lazaro Cardenas" => ["CALZADA LAZARO CARDENAS DEL RIO GRAL 900 FRACC. EDUARDO GUERRA", "25.52379", "-103.429548", "Lazaro Cardenas"],//25.58147820911458, -103.48164991297946
        "El Marquez" => ["CALZADA EL MARQUEZ S/N COL. JOSE G. MADERO", "25.446028398081495", "-102.16860923555201", "El Marquez"],
        "San Pedro II" => ["AV. COAH. S/N COL. CENTRO, SAN PEDRO COAH.", "25.759783", "-103.00001", "San Pedro"],
        "Madero I" => ["CARRETERA TORREON-SAN PEDRO KM 29+7 EJIDO JABONCILLO", "25.761403", "-103.244262", "Madero"],
        "Matamoros II" => ["CARR. MATAMOROS - TORREON #2550 PTE", "25.535698", "-103.25092", "Matamoros"],
        "Gas real" => ["CARRETERA 57 KM 1080 COL. OBRERA MONCLOVA COAH.", "26.87319857708537", "-101.43270756856262", "Gas real"],
        "Mucho gas industrial" => ["AV. INDUSTRIAL No. 1910 COL. BRAULIO FERNANDEZ MONCLOVA COAH.", "26.88547964461087", "-101.43161481405586", "Mucho gas industrial"],
        "Gas cassa" => ["CARRETERA 57 (CASTAÑOS, POR MONKEYS) MONCLOVA COAH.", "26.76656677340403", "-101.41209761497107", "Gas cassa"],
        "Gas ideal" => ["CARRETERA 57 KM 1060 ASTURIAS 25790 MONCLOVA COAH.", "26.853178234146487", "-101.42658404551538", "Gas ideal"],
        "Mucho gas oriente" => ["MANUEL JOTA CELIS No.1910 COL. VETERANOS MONCLOVA COAH.", "26.92434671093747", "-101.39128463963546", "Mucho gas oriente"],
        "Gas total" => ["BLVD. PAPE COL. SANTA ISABEL", "26.934476960653736", "-101.41480282331756", "Gas total", "Gas total"],
        "Mucho gas planta frontera" => ["LIB. CARLOS SALINAS KM. 16.4", "31.648028046708866", "-106.33609443107423", "Mucho gas planta frontera"],
        "Planta fifi" => ["Libramiento Emilio Mendoza Cisneros Km 1+500 ACUÑA COAH.", "29.32215713", "-100.96503139", "Fifi"],
        "Las Americas" => ["Libramiento Emilio Mendoza Cisneros Nº 2155 ACUÑA COAH.", "29.325888936713028", "-100.97606603995943", "Las Americas"],
        "Cedros" => ["Boulevard Los Cedros Nº 2530 ACUÑA COAH.", "29.319200852024267", "-100.95335004344574", "Cedros"],
        "La Glorieta" => ["Boulevard Guerrero Nº 2755 ACUÑA COAH.", "29.304870060077604", "-100.9244150906886", "La Glorieta"],
        "Sicove Gomez" => ["C. EDUARDO ASTORGA #217 COL. HORTENCIAS", "25.58147820911458", "-103.48164991297946", "Sicove Gómez"],
        "La Feria" => ["BOULEVARD EJERCITO MEXICANO - PERIFERICO # S/N FRACC LA FERIA", "25.577927", "-103.475887", "La Feria"],
        "Vergel" => ["CARR. GOMEZ PALACIO-CHIHUAHUA KM. 12+770 EJ. LA COMPETENCIA DGO", "25.656018", "-103.529485", "Vergel"],
        "Urrea" => ["AV. MIGUEL AUZA #714 SUR COL. SANTA ROSA", "25.563329142659654", "-103.48947740241637", "Urrea"],
        "Rebollo" => ["BOULEVARD JOSE REBOLLO ACOSTA #220 COL. CENTRAL ABASTOS", "25.56679", "-103.476545", "Rebollo"],
        "Jabonoso" => ["BOULEVARD BICENTENARIO DE LA REBOLUCION #1503 COL. MIGUEL DE LA MADRID", "25.603893", "-103.468472", "Jabonoso"],
        "Madero GP" => ["AV. FCO I MADERO #2001 COLONIA NUEVO LOS ALAMOS", "25.583990360626544", "-103.50486360856088", "Madero GP"],
        "Lerdo I" => ["LOTE 1 MANZ 1 ZONA 9 PERIF KM 12 350 Y LIB PERIF TRN GP LDO COL CENTO LERDO", "25.553822", "-103.527233", "Lerdo I"],
        "Lerdo II" => ["CALZ GUADALUPE VICTORIA  COL. U. HAB. DE LAS 5A # 42", "25.534967", "-103.518257", "Lerdo II"],
        "Bermejillo" => ["C. FERROCARRIL S/N BERMEJILLO DGO", "25.878825", "-103.618102", "Bermejillo"],
        "Cuencame" => ["CARRETERA A FRESNILLO KM 1+900 EN CUENCAME DGO", "24.855976412795844", "-103.69609667527881", "Cuencamé"]
    ],
];

$talleresTodos = [
    "Todos" => [
        "Sicove Torreon" => ["CALZ. JUAN AGUSTIN ESPINOZA #5050 COL. AVIACION", "25.55800166547791", "-103.39207952861469", "Sicove Torreón"],
        "San Pedro" => ["Carretera Torreón - San Pedro Km. 1.5 Col. El Mirador","25.756992673062207", "-103.01164483327823", "San Pedro"],
        "Parras" => ["Carretera General Cepeda Km 2.5 Cp. 27980","25.44388333648264", "-102.14743519261769", "Parras"],
        "Sicove Gomez"=> ["C. EDUARDO ASTORGA #217 COL. HORTENCIAS", "25.58123", "-103.481513", "Sicove Gómez"],
    ]
];


if(isset($_GET['ciudad'])){
    if ($_GET['ciudad'] == 'todas') {
        echo json_encode(array_values($estacionesTodas)[0]);
    }
}
else{
    if($_GET['talleres'] == 'todos'){
        echo json_encode(array_values($talleresTodos)[0]);
    }
}



