jQuery(document).ready(function($){

  $(".sortabletable tbody").sortable({
    update: function(event, ui) {
      var postId = this.id.substring(0,this.id.indexOf('_') );
      var elementType = this.id.substring(this.id.indexOf('_')+1 );
      var elementOrder = $(this).sortable('toArray').toString();
      $.getJSON("/wp-content/themes/bhs/custom/customAJAX.php",
        {action: 'sortelements', postId: postId, elementType: elementType, elementOrder: elementOrder, random: Math.random()},
        function(data){
          if(data.failed){ alert(data.msg); }  
          return false;
        }             
      );  //end getJSON
      console.log('sorting '+ postId + " " + elementType + " " + elementOrder);
    }
  
  }).disableSelection();

});