<?php

namespace ZendTest\Form\TestAsset;

use Zend\Form\Form;

/**
 * A Form for basic User registration details
 *
 * @category   Hobzy
 * @package    HobzyUser
 * @subpackage Form
 */
class FormWithInit extends Form
{
    /**
     *
     */
    public function init()
    {
        $this->add(array(
                'name' => 'init_element',
                'type' => 'ZendTest\Form\TestAsset\ElementWithFilter',
        ));
    }
}
