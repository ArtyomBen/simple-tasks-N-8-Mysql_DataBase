<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'lesson-7';

$conn = mysqli_connect ($server, $username, $password, $dbName);

if (!($conn)){
    die ('error: ' . mysqli_connect_error());
}else {
    'connected success';
}


//1.

//  $sql = "SELECT Name FROM country WHERE Name LIKE 'A%A'";
//  //or  //$sql = "SELECT Name FROM country WHERE Name LIKE '%A' AND NAME LIKE 'A%'";
// $result = mysqli_query ($conn, $sql);

// if (mysqli_num_rows($result) > 0){
//     while ($row = mysqli_fetch_assoc ($result)) {
//         echo 'Name: ' . $row['Name'] . '<br>';
//     }
// }


//2.

// $sql = "SELECT departments.DEPARTMENT_NAME, employees.FIRST_NAME FROM departments INNER JOIN employees ON departments.DEPARTMENT_ID = employees.DEPARTMENT_ID WHERE departments.DEPARTMENT_NAME LIKE 'a%'";
// $result = mysqli_query ($conn, $sql);

// if (mysqli_num_rows ($result) > 0){
//     while ($row = mysqli_fetch_assoc ($result)){
//         echo $row['FIRST_NAME'] . '<br>' . $row['DEPARTMENT_NAME'] . '<br>';
//     }
// }


//3.

// sql harcumnerov mnacacnel kgrem

//SELECT AVG(employees.SALARY) as 'salary', departments.DEPARTMENT_NAME as 'department' FROM employees JOIN departments ON departments.DEPARTMENT_ID = employees.DEPARTMENT_ID GROUP BY departments.DEPARTMENT_NAME


//4

//SELECT departments.DEPARTMENT_NAME, COUNT(*) as count FROM employees JOIN departments ON departments.DEPARTMENT_ID = employees.DEPARTMENT_ID GROUP BY departments.DEPARTMENT_NAME;

//5

//SELECT MIN(HIRE_DATE) as minn, departments.DEPARTMENT_NAME FROM employees JOIN departments ON departments.DEPARTMENT_ID = employees.DEPARTMENT_ID GROUP BY departments.DEPARTMENT_NAME;


//6.

//SELECT employees.FIRST_NAME, departments.DEPARTMENT_NAME, COUNT(*)as count FROM employees JOIN departments ON departments.DEPARTMENT_ID = employees.DEPARTMENT_ID GROUP BY departments.DEPARTMENT_NAME;  
?>
