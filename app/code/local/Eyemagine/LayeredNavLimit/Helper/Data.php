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

class Eyemagine_LayeredNavLimit_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XPATH_SYSTEM_CONFIG_LIMIT  = 'catalog/layered_navigation/limit';
    /**
     * Get limit
     * 
     * @return integer
     */
    public function getLimit()
    {
        return (int)Mage::getStoreConfig(self::XPATH_SYSTEM_CONFIG_LIMIT);
    }
}