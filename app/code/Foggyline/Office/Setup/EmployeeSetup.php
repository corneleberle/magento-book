<?php

namespace Foggyline\Office\Setup;

use Foggyline\Office\Model\Employee;
use Magento\Eav\Setup\EavSetup;

class EmployeeSetup extends EavSetup
{
    public function getDefaultEntities()
    {
        $employeeEntity = Employee::ENTITY;

        $entities = [
            $employeeEntity => [
                'entity_model' => 'Foggyline\Office\Model\ResourceModel\Employee',
                'table' => $employeeEntity . '_entity',
                'attributes' => [
                    'department_id' => [
                        'type' => 'static',
                    ],
                    'email' => [
                        'type' => 'static',
                    ],
                    'first_name' => [
                        'type' => 'static',
                    ],
                    'last_name' => [
                        'type' => 'static'
                    ]
                ]
            ]
        ];
        return $entities;
    }

}
