<?php
require_once 'database/dbconnection.php';

function add($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function getAllStudents() {
    $students = DB::run("SELECT * FROM students");
    return $students;
}

function getStudentById($studentId) {
    $student = DB::run("SELECT * from students WHERE student_id = ?", [$studentId])->fetch();
    return $student;
}

$students = getAllStudents();
echo "All Students " . "\n";
foreach ($students as $student) {
    echo "ID: " . $student['student_id'] . ", Name: " . $student['name'] . "\n";
}

echo "\n";

$student = getStudentById(1);
echo "Name: " . $student['name'] . "\n";
