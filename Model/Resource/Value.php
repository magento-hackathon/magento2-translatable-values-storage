<?php

namespace Hackathon\Translationstorage\Model\Resource;

class Value extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
    * Define main table
    */
    protected function _construct()
    {
        $this->_init('hackathon_strings', 'string_id');
    }
}