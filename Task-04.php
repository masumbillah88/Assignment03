<?php
$studentGrades = [
    'student_1' => ["Math" => 33, "English" => 35, "Science" => 42],
    'student_2' => ["Math" => 89, "English" => 91, "Science" => 82],
    'student_3' => ["Math" => 78, "English" => 85, "Science" => 72]
];
function calculateGrade($average)
{
    if ($average >= 80 && $average <= 100) {
        $result = "A+";
    } else if ($average >= 70 && $average < 80) {
        $result = "A";

    } else if ($average >= 60 && $average < 70) {
        $result = "A-";
    } else if ($average >= 50 && $average < 60) {
        $result = "B";
    } else if ($average >= 40 && $average < 50) {
        $result = "C";
    } else if ($average >= 33 && $average < 40) {
        $result = "D";

    } else {
        $result = "F";

    }
    return $result;

}
function studentGrade($grades)
{
    foreach ($grades as $student => $Grade) {
        $average = array_sum($Grade) / count($Grade);
        $result = calculateGrade($average);
        echo " $student average :" . floor($average) . " & grade : $result \n";
    }
}
studentGrade($studentGrades);
?>