require([
    'jquery',
    'mage/mage'
], function($){
 
   var dataForm = $('#pricerange');
   dataForm.mage('validation', {});
   
   var lowrange = dataForm.("lowrange");
   var highrange = dataForm.("highrange");
   
   if (highrange >= lowrange) || (highrange <= (lowrange * 5)) {
      return true;
   } else {
      return false;
   };
 
});