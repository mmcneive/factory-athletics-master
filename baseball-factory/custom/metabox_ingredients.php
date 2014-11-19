<?php
  if ($post->post_status == 'auto-draft') {  
    echo "<p>Please save initial Ingredient information before creating ingredient deatils</p>";    
    return;
  }
  $ingredient = new Ingredient();
  $ingredient->getIngredientDataByPostId($post->ID);
  $allAllergens = $ingredient->getAllergenData();
?>

  <script type="text/javascript">
    jQuery(document).ready(function($){

    });
  </script>
  
  <div>
    <form id="ingredientform" action="" method="post">
      <label for="<?php echo CALORIES?>"><?php echo $ingredient->getLabel(CALORIES)?>:</label>
      <input type="text" id="<?php echo CALORIES?>" name="<?php echo CALORIES?>" class="" value="<?php echo $ingredient->getValue(CALORIES)?>" />
      </br>
      <label for="<?php echo PROTEIN?>"><?php echo $ingredient->getLabel(PROTEIN)?>:</label>
      <input type="text" id="<?php echo PROTEIN?>" name="<?php echo PROTEIN?>" class="" value="<?php echo $ingredient->getValue(PROTEIN)?>" />g
      </br>
      <label for="<?php echo CARBS?>"><?php echo $ingredient->getLabel(CARBS)?>:</label>
      <input type="text" id="<?php echo CARBS?>" name="<?php echo CARBS?>" class="" value="<?php echo $ingredient->getValue(CARBS)?>" />g
      </br>
      <label for="<?php echo FAT?>"><?php echo $ingredient->getLabel(FAT)?>:</label>
      <input type="text" id="<?php echo FAT?>" name="<?php echo FAT?>" class="" value="<?php echo $ingredient->getValue(FAT)?>" />g
      </br>
      <label for="<?php echo SATURATEDFAT?>"><?php echo $ingredient->getLabel(SATURATEDFAT)?>:</label>
      <input type="text" id="<?php echo SATURATEDFAT?>" name="<?php echo SATURATEDFAT?>" class="" value="<?php echo $ingredient->getValue(SATURATEDFAT)?>" />g
      </br>
      <label for="<?php echo CHOLESTEROL?>"><?php echo $ingredient->getLabel(CHOLESTEROL)?>:</label>
      <input type="text" id="<?php echo CHOLESTEROL?>" name="<?php echo CHOLESTEROL?>" class="" value="<?php echo $ingredient->getValue(CHOLESTEROL)?>" />mg
      </br>
      <label for="<?php echo SODIUM?>"><?php echo $ingredient->getLabel(SODIUM)?>:</label>
      <input type="text" id="<?php echo SODIUM?>" name="<?php echo SODIUM?>" class="" value="<?php echo $ingredient->getValue(SODIUM)?>" />mg
      </br>
      <label for="<?php echo CALCIUM?>"><?php echo $ingredient->getLabel(CALCIUM)?>:</label>
      <input type="text" id="<?php echo CALCIUM?>" name="<?php echo CALCIUM?>" class="" value="<?php echo $ingredient->getValue(CALCIUM)?>" />iu
      </br>
      <label for="<?php echo IRON?>"><?php echo $ingredient->getLabel(IRON)?>:</label>
      <input type="text" id="<?php echo IRON?>" name="<?php echo IRON?>" class="" value="<?php echo $ingredient->getValue(IRON)?>" />mg
      </br>
      <label for="<?php echo DIETARYFIBER?>"><?php echo $ingredient->getLabel(DIETARYFIBER)?>:</label>
      <input type="text" id="<?php echo DIETARYFIBER?>" name="<?php echo DIETARYFIBER?>" class="" value="<?php echo $ingredient->getValue(DIETARYFIBER)?>" />g
      </br>
      <label for="<?php echo VITAMINA?>"><?php echo $ingredient->getLabel(VITAMINA)?>:</label>
      <input type="text" id="<?php echo VITAMINA?>" name="<?php echo VITAMINA?>" class="" value="<?php echo $ingredient->getValue(VITAMINA)?>" />g
      </br>
      <label for="<?php echo VITAMINC?>"><?php echo $ingredient->getLabel(VITAMINC)?>:</label>
      <input type="text" id="<?php echo VITAMINC?>" name="<?php echo VITAMINC?>" class="" value="<?php echo $ingredient->getValue(VITAMINC)?>" />g
      </br>
      <label for="<?php echo SUGAR?>"><?php echo $ingredient->getLabel(SUGAR)?>:</label>
      <input type="text" id="<?php echo SUGAR?>" name="<?php echo SUGAR?>" class="" value="<?php echo $ingredient->getValue(SUGAR)?>" />g
      </br>
      <label for="<?php echo DRESSING?>"><?php echo $ingredient->getLabel(DRESSING)?>:</label>
      <input type="text" id="<?php echo DRESSING?>" name="<?php echo DRESSING?>" class="" value="<?php echo $ingredient->getValue(DRESSING)?>" />
      </br>
      <label for="<?php echo DEFAULTQUANTITY?>"><?php echo $ingredient->getLabel(DEFAULTQUANTITY)?>:</label>
      <input type="text" id="<?php echo DEFAULTQUANTITY?>" name="<?php echo DEFAULTQUANTITY?>" class="" value="<?php echo $ingredient->getValue(DEFAULTQUANTITY)?>" />
      <p>Allergens:</p>
      <?php 
        $allergenArray = explode(",", $ingredient->getValue(ALLERGENS) );
        foreach($allAllergens as $allergen){ ?>
        <input type="checkbox" name="<?php echo ALLERGENS?>[]" value="<?php echo $allergen->{ALLERGENID}?>"  <?php echo in_array($allergen->{ALLERGENID}, $allergenArray) ? "CHECKED" : "";?> /><?php echo $allergen->{ALLERGENNAME}?></br>
      <?php } ?>
    </form>
  </div>