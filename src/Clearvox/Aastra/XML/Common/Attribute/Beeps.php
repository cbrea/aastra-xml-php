<?php
namespace Clearvox\Aastra\XML\Common\Attribute;

/**
 * Beeps Trait
 *
 * The XML object can Beep!
 *
 * @category Clearvox
 * @package Aastra
 * @package XML\Common\Attribute
 * @author Leon Rowland <leon@rowland.nl>
 */
trait Beeps
{
    /**
     * @var bool
     */
    protected $beep;

    /**
     * Specifies that a notification beep will be generated by
     * the phone.
     *
     * @return $this
     */
    public function beep()
    {
        $this->beep = true;
        return $this;
    }
}