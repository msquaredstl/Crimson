<?php 
namespace Msquared\CustPriceRange\Controller\Customer;  

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\Result\JsonFactory;

class Index extends \Magento\Framework\App\Action\Action { 
   

    public function execute() { 

        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            $lowrange     = $post['lowrange'];
            $highrange    = $post['highrange'];
            $sortbyprice  = $post['sortbyprice'];

            $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);

            return $resultJson;
        }
 
        $this->_view->loadLayout();
        $this->_view->renderLayout(); 
    
    } 
} 

?>
