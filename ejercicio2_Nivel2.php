<?php
/*
Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).
A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.
*/

$notasAlumnos = [
    'Pedro' => [4.6, 7, 5, 4.2, 6],
    'Joana' => [3.6, 5, 8, 2, 3],
    'David' => [7, 6, 5.2, 8, 5.5],
    'Matías' => [3.4, 5, 7, 8, 6]  
];

//función que muestre la nota media de cada alumno 
function notaMediaAlumno(array $notasAlumnos)
{
    $globalNotadeAlumno = [];
    $notaGlobalGeneral = 0;
    $notaMediaGlobal = 0;
    $totalAlumno = 0;
    foreach($notasAlumnos as $alumno => $notas){
        //echo sizeof($notas).PHP_EOL;
        $totalAlumno = array_sum($notas)/sizeof($notas);
        $globalNotadeAlumno[$alumno] = $totalAlumno;
        echo "Nota del alumno ". $alumno . " es ". $totalAlumno.PHP_EOL;
    }
    foreach ($globalNotadeAlumno as $alumno => $nota){
        $notaGlobalGeneral += $nota;
        $notaMediaGlobal = $notaGlobalGeneral / sizeof($globalNotadeAlumno);
    }
    

    return "Nota media global todo el alumnado = " . $notaMediaGlobal;

}

print_r (notaMediaAlumno($notasAlumnos));

