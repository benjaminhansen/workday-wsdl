<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Country_Predefined_Person_Name_Component_ValueObjectIDType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a unique identifier for an instance of an object.
 * @subpackage Structs
 */
class Country_Predefined_Person_Name_Component_ValueObjectIDType extends AbstractStructBase
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
     * Constructor method for
     * Country_Predefined_Person_Name_Component_ValueObjectIDType
     * @uses Country_Predefined_Person_Name_Component_ValueObjectIDType::setType()
     * @uses Country_Predefined_Person_Name_Component_ValueObjectIDType::set_()
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
     * @uses \WorkdayWsdl\\EnumType\Country_Predefined_Person_Name_Component_ValueReferenceEnumeration::valueIsValid()
     * @uses \WorkdayWsdl\\EnumType\Country_Predefined_Person_Name_Component_ValueReferenceEnumeration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectIDType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\WorkdayWsdl\\EnumType\Country_Predefined_Person_Name_Component_ValueReferenceEnumeration::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WorkdayWsdl\\EnumType\Country_Predefined_Person_Name_Component_ValueReferenceEnumeration', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \WorkdayWsdl\\EnumType\Country_Predefined_Person_Name_Component_ValueReferenceEnumeration::getValidValues())), __LINE__);
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
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectIDType
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
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectIDType
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
