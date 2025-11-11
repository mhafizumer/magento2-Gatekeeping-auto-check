<?php

namespace Tilemountain\CICD\Model;

use \Magento\Framework\Model\AbstractModel;

class CICD extends AbstractModel
{


    /**
     * Initialize resource model
     * @return void
     */
    public function _construct()
    {
        $this->_init('Tilemountain\CICD\Model\ResourceModel\CICD');
    }


}

