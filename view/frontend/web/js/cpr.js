require([
    'jquery',
    'mage/mage'
], function($){
 
   var dataForm = $('#pricerange');
   dataForm.mage('validation', {});
   
   var lowrange = dataForm.find('input[name="lowrange"]').val();
   var highrange = dataForm.find('input[name="highrange"]').val();
   
   
   if ((highrange >= lowrange) && (highrange <= (lowrange * 5))) {
      return true;
   } else {
      return false;
   };
 
});