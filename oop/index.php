<?php include_once 'Student.php'; ?>

<?php
    $student = new Student();
    $student->setName("Chamara");
    echo $student->getName();
?>

<?php include_once 'view/index.html'; ?>