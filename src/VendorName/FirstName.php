<?php
/**
 * @author: JuanLuis
 * @date: 14/10/14 22:43
 */

namespace VendorName;

class FirstName
{
    protected $arrayNames;

    public function __construct()
    {
        $this->arrayNames = $this->loadNames();
    }

    public function loadNames()
    {
        return $this->arrayNames = ['Juan Luis', 'Cristina', 'Carlos'];
    }

    public function random()
    {
        return rand(0, (count($this->loadNames()) -1 ));
    }

    public function getName()
    {
       return $this->arrayNames[$this->random()];
    }
}