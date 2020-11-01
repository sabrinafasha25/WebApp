<?php
$name = $_POST['name'];
$matricNo = $_POST['matricNo'];
$gender = $_POST['gender'];
$dateofBirth = $_POST['dateOfBirth'];
$citizenship = $_POST['citizenship'];
$maritalStatus = $_POST['maritalStatus'];
$religion = $_POST['religion'];
$active = $_POST['name'];
$currentYear = $_POST['currentYear'];
$idNo = $_POST['idNo'];
$email = $_POST['email'];
$bool = 1;


echo "$name<br>";

echo "$matricNo<br>";

if ($gender == 1) {
    echo "Male<br>";
} else {
    echo "Female<br>";
}

echo "$dateofBirth<br>";

echo "$citizenship<br>";

if ($maritalStatus == 1) {
    echo "Single<br>";
} else {
    echo "Married<br>";
}

if ($religion == 1) {
    echo "Islam<br>";
} elseif ($religion == 2) {
    echo "Christ<br>";
} elseif ($religion == 3) {
    echo "Buddha<br>";
} elseif ($religion == 4) {
    echo "Hindu<br>";
} else {
    echo "None<br>";
}


if ($active == 1) {
    echo "Active<br>";
} else {
    echo "Inactive<br>";
}
echo "$currentYear<br>";
echo "$idNo<br>";
echo "$email<br>";

?>
