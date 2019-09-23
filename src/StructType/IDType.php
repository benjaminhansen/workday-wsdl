<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IDType StructType
 * Meta information extracted from the WSDL
 * - documentation: External ID that uniquely identifies the integratable object within the context of the integration system identified by the System ID attribute.
 * @subpackage Structs
 */
class IDType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The System_ID
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Integration ID must exist for the given System ID. | Integration system identifier, part of a two part key (including the text value of the ID element) that uniquely identify integratable object.
     * @var string
     */
    public $System_ID;
    /**
     * Constructor method for IDType
     * @uses IDType::set_()
     * @uses IDType::setSystem_ID()
     * @param string $_
     * @param string $system_ID
     */
    public function __construct($_ = null, $system_ID = null)
    {
        $this
            ->set_($_)
            ->setSystem_ID($system_ID);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \WorkdayWsdl\\StructType\IDType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get System_ID value
     * @return string|null
     */
    public function getSystem_ID()
    {
        return $this->System_ID;
    }
    /**
     * Set System_ID value
     * @param string $system_ID
     * @return \WorkdayWsdl\\StructType\IDType
     */
    public function setSystem_ID($system_ID = null)
    {
        // validation for constraint: string
        if (!is_null($system_ID) && !is_string($system_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($system_ID, true), gettype($system_ID)), __LINE__);
        }
        $this->System_ID = $system_ID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\IDType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
