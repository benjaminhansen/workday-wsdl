<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Probation_Period_ReasonObjectIDType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a unique identifier for an instance of an object.
 * @subpackage Structs
 */
class Employee_Probation_Period_ReasonObjectIDType extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier type. Each "ID" for an instance of an object contains a type and a value. A single instance of an object can have multiple "ID" but only a single "ID" per "type".
     * - use: required
     * @var string
     */
    public $type;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for Employee_Probation_Period_ReasonObjectIDType
     * @uses Employee_Probation_Period_ReasonObjectIDType::setType()
     * @uses Employee_Probation_Period_ReasonObjectIDType::set_()
     * @param string $type
     * @param string $_
     */
    public function __construct($type = null, $_ = null)
    {
        $this
            ->setType($type)
            ->set_($_);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \EnumType\Employee_Probation_Period_ReasonReferenceEnumeration::valueIsValid()
     * @uses \EnumType\Employee_Probation_Period_ReasonReferenceEnumeration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\Employee_Probation_Period_ReasonObjectIDType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Employee_Probation_Period_ReasonReferenceEnumeration::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Employee_Probation_Period_ReasonReferenceEnumeration', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\Employee_Probation_Period_ReasonReferenceEnumeration::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
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
     * @return \StructType\Employee_Probation_Period_ReasonObjectIDType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Employee_Probation_Period_ReasonObjectIDType
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
