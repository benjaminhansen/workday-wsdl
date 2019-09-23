<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payroll_Reporting_Code__All_ObjectIDType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a unique identifier for an instance of an object.
 * @subpackage Structs
 */
class Payroll_Reporting_Code__All_ObjectIDType extends AbstractStructBase
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
     * The parent_id
     * Meta information extracted from the WSDL
     * - documentation: Contains a unique identifier for an instance of a parent object
     * @var string
     */
    public $parent_id;
    /**
     * The parent_type
     * @var string
     */
    public $parent_type;
    /**
     * Constructor method for Payroll_Reporting_Code__All_ObjectIDType
     * @uses Payroll_Reporting_Code__All_ObjectIDType::setType()
     * @uses Payroll_Reporting_Code__All_ObjectIDType::set_()
     * @uses Payroll_Reporting_Code__All_ObjectIDType::setParent_id()
     * @uses Payroll_Reporting_Code__All_ObjectIDType::setParent_type()
     * @param string $type
     * @param string $_
     * @param string $parent_id
     * @param string $parent_type
     */
    public function __construct($type = null, $_ = null, $parent_id = null, $parent_type = null)
    {
        $this
            ->setType($type)
            ->set_($_)
            ->setParent_id($parent_id)
            ->setParent_type($parent_type);
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
     * @uses \EnumType\Payroll_Reporting_Code__All_ReferenceEnumeration::valueIsValid()
     * @uses \EnumType\Payroll_Reporting_Code__All_ReferenceEnumeration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\Payroll_Reporting_Code__All_ObjectIDType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Payroll_Reporting_Code__All_ReferenceEnumeration::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Payroll_Reporting_Code__All_ReferenceEnumeration', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\Payroll_Reporting_Code__All_ReferenceEnumeration::getValidValues())), __LINE__);
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
     * @return \StructType\Payroll_Reporting_Code__All_ObjectIDType
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
     * Get parent_id value
     * @return string|null
     */
    public function getParent_id()
    {
        return $this->parent_id;
    }
    /**
     * Set parent_id value
     * @param string $parent_id
     * @return \StructType\Payroll_Reporting_Code__All_ObjectIDType
     */
    public function setParent_id($parent_id = null)
    {
        // validation for constraint: string
        if (!is_null($parent_id) && !is_string($parent_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parent_id, true), gettype($parent_id)), __LINE__);
        }
        $this->parent_id = $parent_id;
        return $this;
    }
    /**
     * Get parent_type value
     * @return string|null
     */
    public function getParent_type()
    {
        return $this->parent_type;
    }
    /**
     * Set parent_type value
     * @param string $parent_type
     * @return \StructType\Payroll_Reporting_Code__All_ObjectIDType
     */
    public function setParent_type($parent_type = null)
    {
        // validation for constraint: string
        if (!is_null($parent_type) && !is_string($parent_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parent_type, true), gettype($parent_type)), __LINE__);
        }
        $this->parent_type = $parent_type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Payroll_Reporting_Code__All_ObjectIDType
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
