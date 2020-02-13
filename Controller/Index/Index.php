<?php

namespace Msquared\CustPriceRange\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Msquared\CustPriceRange\Model\CustPriceRange;

class Index extends Action
{
    protected $_modelCustPriceRangeFactory;

    public function __construct(
        Context $context, 
        CustPriceRange Factory $modelCustPriceRangeFactory
    ) {
        parent::__construct($context);
        $this->_modelCustPriceRangeFactory = $modelCustPriceRangeFactory;
    }

    public function execute()
    {

        $resultPage = $this->_modelCustPriceRangeFactory->create();
        $collection = $resultPage->getCollection();
        var_dump($collection->getData());
        exit;

    }


    /**
    * @var PageFactory
    */
    protected $resultPageFactory;


    /**
    * Result constructor.
    * @param Context $context
    * @param PageFactory $pageFactory
    */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->resultPageFactory = $pageFactory;
        parent::__construct($context);
    }


    /**
    * The controller action
    *
    * @return \Magento\Framework\View\Result\Page
    */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}