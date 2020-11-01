<?php
 //class Name
 class Student {
    //Properties 
    public $name;
    private $matricNo;
    private $gender;
    private $dateOfBirth;
    private $citizenship;
    private $maritalStatus;
    private $religion;
    private $activityStatus;
    private $currentYear;
    private $idNo;
    private $email;

    //Methods

    public function __construct($name, $matricNo,
    $gender, $dateOfBirth, $citizenship, $maritalStatus,
    $religion, $activityStatus, $currentYear, $idNo, $email)
    {
      $this->name = $name;
      $this->matricNo = $matricNo;
      $this->gender = $gender;
      $this->dateOfBirth = $dateOfBirth;
      $this->citizenship = $citizenship;
      $this->maritalStatus = $maritalStatus;
      $this->religion = $religion;
      $this->activityStatus = $activityStatus;
      $this->currentYear = $currentYear;
      $this->idNo = $idNo;
      $this->email = $email;
    }

    public function setName($name){
        $this->name = $name; 
    }

    public function getName() {
        return $this->name;
    }

    public function setMatricNo($matricNo){
        $this->matric = $matricNo;
    }

    public function getMatricNo() {
        return $this->matricNo;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function setCitizenship($citizenship){
        $this->citizenship = $citizenship;
    }

    public function getCitizenship() {
        return $this->citizenship;
    }

    public function setMaritalStatus($maritalStatus){
        $this->maritalStatus = $maritalStatus;
    }

    public function getMaritalStatus() {
        return $this->maritalStatus;
    }

    public function setReligion($religion){
        $this->religion = $religion;
    }

    public function getReligion() {
        return $this->religion;
    }

    public function setActivityStatus($activityStatus){
        $this->activityStatus = $activityStatus;
    }

    public function getActivityStatus() {
        return $this->name;
    }

    public function setCurrentYear($currentYear){
        $this->currentYear = $currentYear;
    }

    public function getCurrentYear() {
        return $this->currentYear;
    }

    public function setIdNo($idNo){
        $this->idNo = $idNo;
    }

    public function getIdNo() {
        return $this->idNo;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

 }
?>

