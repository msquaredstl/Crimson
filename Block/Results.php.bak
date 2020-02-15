<?php

namespace Msquared\CustPriceRange\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;

class Results extends Template
{

    public function __construct(Context $context,      
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {        
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getBaseUrl()
    {
        return $this->_storeManager->getStore()->getBaseUrl();
    }

    public function getMaxPriceData()
    {
        return $this->getMaxPrice();
    }

    public function getMinPriceData()
    {
        return $this->getMinPrice();
    }

    public function getSortByPriceData()
    {
        return $this->getSortByPrice();
    }

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
   
}
