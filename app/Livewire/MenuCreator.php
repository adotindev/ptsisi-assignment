<?php

namespace App\Livewire;

use Livewire\Component;

class MenuCreator extends Component
{
    public $menuItems = [];
    public $newItem = '';

    public function addItem()
    {
        if (trim($this->newItem) !== '') {
            $this->menuItems[] = $this->newItem;
            $this->newItem = '';
        }
    }

    public function removeItem($index)
    {
        unset($this->menuItems[$index]);
        $this->menuItems = array_values($this->menuItems);
    }

    public function render()
    {
        return view('livewire.menu-creator');
    }
}