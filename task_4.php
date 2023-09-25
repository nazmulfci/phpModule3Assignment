<?php
$studentGrades = array(
    array('Math' => 85, 'English' => 78, 'Science' => 92),
    array('Math' => 92, 'English' => 88, 'Science' => 95),
    array('Math' => 78, 'English' => 85, 'Science' => 90),
);

function calculate($gradesArray) {
    foreach ($gradesArray as $student) {
        $totalGrades = array_sum($student);
        $numSubjects = count($student);
        $averageGrade = $totalGrades / $numSubjects;
        
        echo "Average grade : $averageGrade</br>";
    }
}
 
calculate($studentGrades);
