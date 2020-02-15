<?php
namespace Msquared\CustPriceRange\Block;
class CustPriceRange extends \Magento\Framework\View\Element\Template

{    
   protected $_productCollectionFactory;
   
    public function __construct(
       \Magento\Backend\Block\Template\Context $context,
       \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
       \Magento\Catalog\Model\Product\Attribute\Source\Status $productStatus,
       \Magento\Catalog\Model\Product\Visibility $productVisibility,
       \Magento\Framework\Registry $registry,
       array $data = []
     )
     {
       $this->_productCollectionFactory = $productCollectionFactory;
       parent::__construct($context, $data);
     }
   
     public function getProductCollection()
     {
       try {

         $collection = $this->_productCollectionFactory->create();
         $collection->addAttributeToSelect('*')
             ->addPriceDataFieldFilter('%s >= %s', ['final_price', $price_from])
             ->addPriceDataFieldFilter('%s <= %s', ['final_price', $price_to])
             ->addFinalPrice()
             ->setPageSize(10);

         if ($sortbyprice == 'D') {
            $collection->getSelect()->order('price_index.final_price DSC');
         } elseif ($sortbyprice == 'A') {
             $collection->getSelect()->order('price_index.final_price ASC');
         }

         return $collection;

       } catch (\Exception $e) {

         var_dump($e->getMessage());
       }
     }
   
}
?>
