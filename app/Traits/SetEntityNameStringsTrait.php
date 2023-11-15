<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SetEntityNameStringsTrait
{
    public function setEntityNameString()
    {
        $this->crud->setEntityNameStrings(
            Str::of(class_basename($this->crud->model))
                    ->camel()
                    ->replaceMatches('/([A-Z])/', ' $1')
                    ->trim()
                    ->title()
                    ->singular()
                    ->toString(),
            Str::of(class_basename($this->crud->model))
                ->camel()
                ->replaceMatches('/([A-Z])/', ' $1')
                ->trim()
                ->title()
                ->plural()
                ->toString()
        );
    }    

}
