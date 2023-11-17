<?php

namespace App\Traits\ExtendBackpack;

trait ColumnTrait
{
    // 1-N BelongsTo relationship
    public function columnBelongsTo($name, $type = 'select')
    {
        $this->crud->removeColumn($name);

        return $this->crud->addColumn([
            "name"=> $name,
            "type"=> $type,
        ]);
    }
}
