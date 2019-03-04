<?php
require '../models/database.php';
require '../models/savedProgressions.php';
require '../models/compositionCategory.php';

if(COUNT($_POST)>0){
  $savedProgression = new savedProgressions();
  
  $firstDegree = $_POST['do_majeur'];
  $secondDegree = $_POST['re_mineur'];
  $thirdDegree = $_POST['mi_mineur'];
  $fourthDegree = $_POST['fa_majeur'];
  $fifthDegree = $_POST['sol_majeur'];
  $sixthDegree = $_POST['la_mineur'];
  $seventhDegree = $_POST['si_diminue'];
  
  if($firstDegree==1){
      $savedProgression->firstChosenDegree = 'do_majeur';
  }else if ($firstDegree==2) {
      $savedProgression->secondChosenDegree = 'do_majeur';
}else if ($firstDegree==3) {
      $savedProgression->thirdChosenDegree = 'do_majeur';
}else if ($firstDegree==4) {
      $savedProgression->fourthChosenDegree = 'do_majeur';
}else {
    $firstDegree==0;
}

if($secondDegree==1){
      $savedProgression->firstChosenDegree = 're_mineur';
  }else if ($secondDegree==2) {
      $savedProgression->secondChosenDegree = 're_mineur';
}else if ($secondDegree==3) {
      $savedProgression->thirdChosenDegree = 're_mineur';
}else if ($secondDegree==4) {
      $savedProgression->fourthChosenDegree = 're_mineur';
}else {
    $secondDegree==0;
}

if($thirdDegree==1){
      $savedProgression->firstChosenDegree = 'mi_mineur';
  }else if ($thirdDegree==2) {
      $savedProgression->secondChosenDegree = 'mi_mineur';
}else if ($thirdDegree==3) {
      $savedProgression->thirdChosenDegree = 'mi_mineur';
}else if ($thirdDegree==4) {
      $savedProgression->fourthChosenDegree = 'mi_mineur';
}else {
    $thirdDegree==0;
}

if($fourthDegree==1){
      $savedProgression->firstChosenDegree = 'fa_majeur';
  }else if ($fourthDegree==2) {
      $savedProgression->secondChosenDegree = 'fa_majeur';
}else if ($fourthDegree==3) {
      $savedProgression->thirdChosenDegree = 'fa_majeur';
}else if ($fourthDegree==4) {
      $savedProgression->fourthChosenDegree = 'fa_majeur';
}else {
    $fourthDegree==0;
}

if($fifthDegree==1){
      $savedProgression->firstChosenDegree = 'sol_majeur';
  }else if ($fifthDegree==2) {
      $savedProgression->secondChosenDegree = 'sol_majeur';
}else if ($fifthDegree==3) {
      $savedProgression->thirdChosenDegree = 'sol_majeur';
}else if ($fifthDegree==4) {
      $savedProgression->fourthChosenDegree = 'sol_majeur';
}else {
    $fifthDegree==0;
}

if($sixthDegree==1){
      $savedProgression->firstChosenDegree = 'la_mineur';
  }else if ($sixthDegree==2) {
      $savedProgression->secondChosenDegree = 'la_mineur';
}else if ($sixthDegree==3) {
      $savedProgression->thirdChosenDegree = 'la_mineur';
}else if ($sixthDegree==4) {
      $savedProgression->fourthChosenDegree = 'la_mineur';
}else {
    $sixthDegree==0;
}

if($seventhDegree==1){
      $savedProgression->firstChosenDegree = 'si_diminue';
  }else if ($seventhDegree==2) {
      $savedProgression->secondChosenDegree = 'si_diminue';
}else if ($seventhDegree==3) {
      $savedProgression->thirdChosenDegree = 'si_diminue';
}else if ($seventhDegree==4) {
      $savedProgression->fourthChosenDegree = 'si_diminue';
}else {
    $seventhDegree==0;
}
  
  $savedProgression->scaleName = 'do_majeur';
  $savedProgression->id_users = $_SESSION['id'];
  $savedProgression->id_compositionCategory = 1;

  
  if($savedProgression->saveProgression()){
    echo 'Progression enregistrée';
  }
}


