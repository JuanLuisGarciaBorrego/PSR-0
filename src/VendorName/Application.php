<?php
/**
 * @author: JuanLuis
 * @date: 14/10/14 22:28
 */

namespace VendorName;

class Application
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function  greeting()
    {
        return "Hi ".$this->name."!";
    }
}

