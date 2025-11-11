<?php

namespace Tilemountain\CICD\Model\ResourceModel\CICD;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Tilemountain\CICD\Model\CICD', 'Tilemountain\CICD\Model\ResourceModel\CICD');
    }
}
