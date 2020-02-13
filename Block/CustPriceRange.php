<?php
namespace Msquared\CustPriceRange\Block;
class CustPriceRange extends \Magento\Framework\View\Element\Template
   /*{    
    protected $_productCollectionFactory;
        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,        
        array $data = []
    )
    {    
        $this->_productCollectionFactory = $productCollectionFactory;    
        parent::__construct($context, $data);
    }
    
    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->setPageSize(10); // fetching only 3 products
        return $collection;
    }
}*/

{    
   protected $_productCollectionFactory;

   public function __construct(
     \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productFactory
       ) {
           $this->_productCollectionFactory = $productFactory;
       }
       public function getProductCollection()
       {
         $productCollection = $this->_productCollectionFactory->create();
         $maxPrice = $productCollection>getMaxPrice();
         $minPrice = $productCollection>getMinPrice();
         $collection->addAttributeToSelect('*');
         $collection->setPageSize(10); 
          
         if ($sortbyprice == 'D') {
             $collection->getCollection()->setOrder('price', 'desc');
         } elseif ($sortbyprice == 'A') {
             $collection->getCollection()->setOrder('price', 'asc');
         }
          
       return $collection;

       }
   
   public function getFormAction()
   {
     return '/custpricerange/customer/index';
   }
   
}
?>
