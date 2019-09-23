<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Communication_Usage_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Invalid Communication Usage Type | Reference element representing a unique instance of Communication Usage Type.
 * @subpackage Structs
 */
class Communication_Usage_Type_ReferenceType extends \WorkdayWsdl\\EnumType\Communication_Usage_TypeEnumeration
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Primary
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the Communcation Usage Type is Primary.
     * @var bool
     */
    public $Primary;
    /**
     * Constructor method for Communication_Usage_Type_ReferenceType
     * @uses Communication_Usage_Type_ReferenceType::set_()
     * @uses Communication_Usage_Type_ReferenceType::setPrimary()
     * @param string $_
     * @param bool $primary
     */
    public function __construct($_ = null, $primary = null)
    {
        $this
            ->set_($_)
            ->setPrimary($primary);
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
     * @uses \WorkdayWsdl\\EnumType\Communication_Usage_TypeEnumeration::valueIsValid()
     * @uses \WorkdayWsdl\\EnumType\Communication_Usage_TypeEnumeration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $_
     * @return \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType
     */
    public function set_($_ = null)
    {
        // validation for constraint: enumeration
        if (!\WorkdayWsdl\\EnumType\Communication_Usage_TypeEnumeration::valueIsValid($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WorkdayWsdl\\EnumType\Communication_Usage_TypeEnumeration', is_array($_) ? implode(', ', $_) : var_export($_, true), implode(', ', \WorkdayWsdl\\EnumType\Communication_Usage_TypeEnumeration::getValidValues())), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Primary value
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param bool $primary
     * @return \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType
     */
    public function setPrimary($primary = null)
    {
        // validation for constraint: boolean
        if (!is_null($primary) && !is_bool($primary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($primary, true), gettype($primary)), __LINE__);
        }
        $this->Primary = $primary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType
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
