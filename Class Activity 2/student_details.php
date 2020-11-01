<?php include("student_lib.php"); ?>
<?php

    $newReg = new Student("NULL", 0000000000, 0, "00/00/0000", "NULL", 0, 0, 0, 0000000000, 0000000000, "NULL"); // Instantiation
    
    $newReg->setName($_POST['name']); // From HTML form
    $name = $newReg->getName(); 

    $newReg->setMatricNo($_POST['matricNo']); // From HTML form
    $matricNo = $newReg->getMatricNo(); 

    $newReg->setGender($_POST['gender']); // From HTML form
    $gender = $newReg->getGender(); 

    $newReg->setDateOfBirth($_POST['dateOfBirth']); // From HTML form
    $dateOfBirth = $newReg->getDateOfBirth(); 

    $newReg->setCitizenship($_POST['citizenship']); // From HTML form
    $citizenship = $newReg->getCitizenship();
    
    $newReg->setMaritalStatus($_POST['maritalStatus']); // From HTML form
    $maritalStatus = $newReg->getMaritalStatus(); 

    $newReg->setReligion($_POST['religion']); // From HTML form
    $religion = $newReg->getReligion(); 

    $newReg->setActivityStatus($_POST['activityStatus']); // From HTML form
    $activityStatus = $newReg->getActivityStatus(); 

    $newReg->setCurrentYear($_POST['currentYear']); // From HTML form
    $currentYear = $newReg->getCurrentYear(); 
    
    $newReg->setIdNo($_POST['idNo']); // From HTML form
    $idNo = $newReg->getIdNo(); 

    $newReg->setEmail($_POST['email']); // From HTML form
    $email = $newReg->getEmail(); 
    
    var_dump($newReg); // return object(Student)
?>














