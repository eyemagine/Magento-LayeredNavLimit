<?php
/**
 * EYEMAGINE - The leading Magento Solution Partner
 *
 * Layered Nav Limit
 *
 * @author    EYEMAGINE <magento@eyemaginetech.com>
 * @category  Eyemagine
 * @package   Eyemagine_LayeredNavLimit
 * @copyright Copyright (c) 2014 EYEMAGINE Technology, LLC (http://www.eyemaginetech.com)
 * @license   http://www.eyemaginetech.com/license.txt
 */
class Eyemagine_LayeredNavLimit_Block_Catalog_Layer_Filter_Attribute
    extends Mage_Catalog_Block_Layer_Filter_Attribute
{
    /**
     * @var Eyemagine_LayeredNavLimit_Helper_Data
     */
    protected $_layeredNavLimitHelper;
    public function __construct()
    {
        parent::__construct();
        if ($this->getLayeredNavLimitHelper()->getLimit()) {
            $this->setTemplate('eyemagine/layerednavlimit/catalog/layer/filter.phtml');
        }
    }
    /**
     * Helper getter
     * 
     * @return Eyemagine_LayeredNavLimit_Helper_Data
     */
    public function getLayeredNavLimitHelper()
    {
        if (is_null($this->_layeredNavLimitHelper)) {
            $this->_layeredNavLimitHelper = $this->helper('layerednavlimit');
        }
        return $this->_layeredNavLimitHelper;
    }
}
