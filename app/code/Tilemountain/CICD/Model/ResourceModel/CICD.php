<?php

namespace Tilemountain\CICD\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CICD extends AbstractDb
{


    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('pipleline', 'id');
    }


}

