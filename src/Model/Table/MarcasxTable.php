<?php
// src/Model/Table/MarcasTable.php

namespace App\Model\Table;

use Cake\ORM\Table;

class MarcasxTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }
}