<?php

namespace Foggyline\Office\Model\ResourceModel;

use Magento\Eav\Model\Entity\AbstractEntity;

class Employee extends AbstractEntity
{
    protected function _construct()
    {
        $this->_read = 'foggyline_office_employee_read';
        $this->_write = 'foggyline_office_emplyoee_write';
    }

    public function getEntityType()
    {
        if (empty($this->_type)) {
            $this->setType(\Foggyline\Office\Model\Employee::ENTITY);
        }
        return parent::getEntityType();
    }
}
