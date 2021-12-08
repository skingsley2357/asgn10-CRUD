<?php

function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_salamander_by_id($id) {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $salamander = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $salamander;
}

function insert_subject ($salamanderName, $salamanderHabitat, $salamanderDescription) {
    global $db;

    $sql = "INSERT INTO subjects ";
    $sql .= "(menu_name, position, visible) ";
    $sql .= "VALUES (";
    $sql .= "'" . $salamanderName . "',";
    $sql .= "'" . $salamanderHabitat . "',";
    $sql .= "'" . $salamanderDescription . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
  
    if($result) {
      return true; 
    } else {
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }