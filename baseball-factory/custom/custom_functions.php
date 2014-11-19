<?php 
require_once("common/constants.php");
require_once("common/handlewarnings.php");
require_once("classes/class_field.php");
require_once("classes/class_field_collection.php");
require_once("classes/class_ingredient.php");
require_once("classes/class_recipe.php");

  /*
  //Menu admin menu items/navigation
  add_action('admin_menu', 'caltort_add_admin_menus');
  function caltort_add_admin_menus() {
    //top level pages
    add_menu_page( 'Manage Menu', 'Manage Menu', 'edit_posts', 'caltort_manage_menu', 'caltort_manage_menu_call','', 39); 
  }
  function caltort_manage_menu_call() {
    //$_GET['cmd']=BOOKSHELF;
    //require_once("curriculum/controller.php");
    echo "This is the manage menu page";
  }
  */   
    
  //Register Ingredients CPT
  add_action('init', 'post_type_ingredients');
  function post_type_ingredients() {
    register_post_type(INGREDIENTSCPT, 
      array('labels' => array('name' => __( 'Ingredients' ),'singular_name' => __( 'Ingredient' ),'add_new' => _x('Add New', 'Ingredient'), 'add_new_item' => __('Add New Ingredient'), 
                              'edit_item' => __('Edit Ingredient'),'new_item' => __('New Ingredient'),'view_item' => __('View Ingredient'),),
            'public' => true, 'show_ui' => true, 'menu_icon' => null, 'supports' => array('title','editor', 'thumbnail'))
      );
  }

  add_action("admin_init", "add_menu_cpt_metaboxes");
  function add_menu_cpt_metaboxes(){
    add_meta_box("ingredients-custom-meta", "Ingredient Data", "ingredients_custom_data", INGREDIENTSCPT, "side", "default");
    add_meta_box("recipes-custom-meta", "Manage Recipe Data", "recipes_custom_data", RECIPESCPT, "normal", "high");
  }
  
  function ingredients_custom_data($post){
    require_once("metabox_ingredients.php");
  }

  function recipes_custom_data($post){
    require_once("metabox_recipes.php");
  }

  add_action('wp_insert_post', 'save_menu_cpt_data');
  function save_menu_cpt_data() {
    global $post;
    if ($_REQUEST['action'] != "editpost") { return; }   //if ($post->post_status != 'publish' && $post->post_status != 'draft') { return; }
    
    if ($post->post_type == INGREDIENTSCPT) {
      $ingredient = new Ingredient();
      $ingredient->assignRequestValues( array("post_ID" => POSTID, POSTTITLE => INGREDIENTNAME) );
      
      if ($ingredient->doesIngredientExist()){
        custom_notification_handler("Updating Ingredient CPT data, postid = ".$post->ID." posttitle = ".$post->post_title);
        $ingredient->updateIngredientData();
      } else {
        custom_notification_handler("Saving Ingredient CPT data, postid = ".$post->ID." posttitle = ".$post->post_title);  
        $ingredient->saveIngredientData();
      }
    }

    if ($post->post_type == RECIPESCPT) {
      $recipe = new Recipe();
      $recipe->assignRequestValues( array("post_ID" => POSTID, POSTTITLE => RECIPENAME) );
      
      if ($recipe->doesRecipeExist()){
        custom_notification_handler("Updating Recipe CPT data, postid = ".$post->ID." posttitle = ".$post->post_title);
        $recipe->updateRecipeData();
      } else {
        custom_notification_handler("Saving Recipe CPT data, postid = ".$post->ID." posttitle = ".$post->post_title);  
        $recipe->saveRecipeData();
      }
    }
  
  } 


  add_action ( 'delete_post', 'delete_menu_cpt_data');
  function delete_menu_cpt_data() {
    global $post,$post_del;
    
    if ($_GET['action'] = 'delete' && $_GET['_wpnonce']){
 
      if ($post->post_type == INGREDIENTSCPT || $post_del->post_type == INGREDIENTSCPT){
        if ($post->post_type == INGREDIENTSCPT){
          $msg = "Deleting Ingredient CPT data, postid = ".$post->ID;  
          $postIdToDelete = $post->ID;
        }
        //if (is_array($_GET['post'])){ custom_notification_handler("post is an array, bulk delete occurring"); } 
        //I never ran above, but if below doesn't work in the future use this to debug for another potential solution for deleting multiples
        if ($post_del->post_type == INGREDIENTSCPT){
          $msg = "Deleting Multiple Ingredient CPT data, post_del->ID = ".$post_del->ID;  
          $postIdToDelete = $post_del->ID;
        } 
        $ingredient = new Ingredient();
        $ingredient->getIngredientDataByPostId($postIdToDelete);
        custom_notification_handler($msg. ", posttitle = ".$ingredient->getValue(INGREDIENTNAME));     
        $ingredient->deleteIngredientData();
      }    

      if ($post->post_type == RECIPESCPT || $post_del->post_type == RECIPESCPT){
        if ($post->post_type == RECIPESCPT){
          $msg = "Deleting Recipe CPT data, postid = ".$post->ID;  
          $postIdToDelete = $post->ID;
        }
        //if (is_array($_GET['post'])){ custom_notification_handler("post is an array, bulk delete occurring"); } 
        //I never ran above, but if below doesn't work in the future use this to debug for another potential solution for deleting multiples
        if ($post_del->post_type == RECIPESCPT){
          $msg = "Deleting Multiple Recipe CPT data, post_del->ID = ".$post_del->ID;  
          $postIdToDelete = $post_del->ID;
        } 
        $recipe = new Recipe();
        $recipe->getRecipeDataByPostId($postIdToDelete);
        custom_notification_handler($msg. ", posttitle = ".$recipe->getValue(RECIPENAME));     
        $recipe->deleteRecipeData();
      }

    }  //end if delete
  }

 
?>