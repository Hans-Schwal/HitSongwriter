<?php
require '../models/database.php';
require '../models/savedProgressions.php';
require '../models/compositionCategory.php';

if(isset($_POST['choose'])){
  $savedProgression = new savedProgressions();
  
  $firstDegree = $_POST['firstDegree'];
  $secondDegree = $_POST['secondDegree'];
  $thirdDegree = $_POST['thirdDegree'];
  $fourthDegree = $_POST['fourthDegree'];
  $fifthDegree = $_POST['fifthDegree'];
  $sixthDegree = $_POST['sixthDegree'];
  $seventhDegree = $_POST['seventhDegree'];
  
  
  $savedProgression->firstDegree = $firstDegree;
  $savedProgression->secondDegree = $fsecondDegree;
  $savedProgression->thirdDegree = $thirdDegree;
  $savedProgression->fourthDegree = $fourthDegree;
  $savedProgression->fithDegree = $fifthDegree;
  $savedProgression->sixthDegree = $sixthDegree;
  $savedProgression->seventhDegree = $seventhDegree;
  $savedProgression->id = $id;
  
  if($savedProgression->saveProgression()){
    echo 'Progression enregistrée';
  }
}


