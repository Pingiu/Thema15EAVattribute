<?php
namespace Perspective\Thema15exercise2\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Perspective\Thema15exercise2\Helper\Data;

class Thema15exercise2 implements ArgumentInterface
{
    /**
     * @var \Magento\Framework\Registry 
     */
    private $_registry;
    protected $helper;

    public function __construct(
        \Magento\Framework\Registry  $registry,
        Data $helper  
    )
    {
        $this->_registry = $registry;
        $this->helper = $helper;
        
    }

    public function getCurrentProduct()
    {
        return $this->_registry->registry('current_product');
    }

    public function isEnabled()
    {
        return $this->helper->isEnabled();
    }

    public function getWeightX()
    {
        return $this->helper->getWeightX();
    }

    public function getPriceY()
    {
        return $this->helper->getPriceY();
    }


}
