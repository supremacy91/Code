<?php

class Web4pro_Ddcdistribution_Model_Resource_Ddcdistribution extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Initialize resource model
     *
     */
    protected function _construct()
    {
        $this->_init('ddcdistribution/ddcdistribution', 'ItemNo');
    }
}