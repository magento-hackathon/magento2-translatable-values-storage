<?php
	 
namespace Hackathon\Translationstorage\Model\Resource\Value;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
    * Define model & resource model
    */
    protected function _construct()
    {
        $this->_init(
            'Hackathon\Translationstorage\Model\Value',
            'Hackathon\Translationstorage\Model\Resource\Value'
        );
    }
}