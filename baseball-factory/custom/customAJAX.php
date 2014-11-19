<?php
  //define( 'SHORTINIT', true );
  require_once  ("../../../../wp-load.php");
  require_once("common/constants.php");
  require_once("common/handlewarnings.php");
  require_once("classes/class_field.php");
  require_once("classes/class_field_collection.php");
  require_once("classes/class_recipe.php");
  
  if($_GET['action']) {
    $action = $_GET['action'];
    if (is_user_logged_in() && $action != "" && function_exists($action)){
      $action();
    } else {
      error_log("Custom Message: Attempt to call AJAX function that doesn't exist (".$_SERVER["REQUEST_URI"].") OR a non-loggedin user tried to call this. exit() called.");
      exit("Failed. Site Administrator has been notified.");
    } 
  }
  
  function updateRecipeIngredientQuantity(){
    $ingredientId = $_GET[INGREDIENTID];
    $quantity = $_GET[QUANTITY];
    
    $recipe = new Recipe();
    $recipe->getRecipeDataByPostId($_GET[POSTID]);
    $success = $recipe->updateIngredientQuantity($ingredientId,$quantity);

    if ($success === FALSE ) {
      $msg = "failed";
    } else {
      $msg = "sucess";
    }
    echo json_encode( array('success'=>$success, 'msg'=>$msg, INGREDIENTID=>$ingredientId,QUANTITY=>$quantity ) );         
  }

  function addRecipeIngredient(){
    $ingredientId = $_GET[INGREDIENTID];
    
    $recipe = new Recipe();
    $recipe->getRecipeDataByPostId($_GET[POSTID]);
    $success = $recipe->addIngredient($ingredientId);

    if ($success === FALSE ) {
      $msg = "failed";
    } else {
      $msg = "sucess";
    }
    echo json_encode( array('success'=>$success, 'msg'=>$msg, INGREDIENTID=>$ingredientId ) );         
  }

  
  function removeRecipeIngredient(){
    $ingredientId = $_GET[INGREDIENTID];
    
    $recipe = new Recipe();
    $recipe->getRecipeDataByPostId($_GET[POSTID]);
    $success = $recipe->removeIngredient($ingredientId);

    if ($success === FALSE ) {
      $msg = "failed";
    } else {
      $msg = "sucess";
    }
    echo json_encode( array('success'=>$success, 'msg'=>$msg, INGREDIENTID=>$ingredientId ) );         
  }
 
  function updateBowlOption(){
    $hasBowlOption = $_GET[HASBOWLOPTION];
    
    $recipe = new Recipe();
    $recipe->getRecipeDataByPostId($_GET[POSTID]);
    $success = $recipe->updateBowlOption($hasBowlOption);

    if ($success === FALSE ) {
      $msg = "failed";
    } else {
      $msg = "sucess";
    }
    echo json_encode( array('success'=>$success, 'msg'=>$msg, HASBOWLOPTION=>$hasBowlOption ) );         
  }

  function updateSmallOption(){
    $hasSmallOption = $_GET[HASSMALLOPTION];
    
    $recipe = new Recipe();
    $recipe->getRecipeDataByPostId($_GET[POSTID]);
    $success = $recipe->updateSmallOption($hasSmallOption);

    if ($success === FALSE ) {
      $msg = "failed";
    } else {
      $msg = "sucess";
    }
    echo json_encode( array('success'=>$success, 'msg'=>$msg, HASSMALLOPTION=>$hasSmallOption ) );         
  }

  function updateCupBowlOption(){
    $hasCupBowlOption = $_GET[HASCUPBOWLOPTION];
    
    $recipe = new Recipe();
    $recipe->getRecipeDataByPostId($_GET[POSTID]);
    $success = $recipe->updateCupBowlOption($hasCupBowlOption);

    if ($success === FALSE ) {
      $msg = "failed";
    } else {
      $msg = "sucess";
    }
    echo json_encode( array('success'=>$success, 'msg'=>$msg, HASCUPBOWLOPTION=>$hasCupBowlOption ) );         
  }


  function test(){
    echo "working";         
  }

?>