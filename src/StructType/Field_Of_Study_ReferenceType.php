<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Field_Of_Study_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A unique identifier used to reference a Field Of Study.
 * @subpackage Structs
 */
class Field_Of_Study_ReferenceType extends AbstractStructBase
{
    /**
     * The Field_Of_Study_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Field Of Study must exist for the given value of Field Of Study Name. | Unique attribute name/description identifying a valid instance of Field Of Study.
     * - maxOccurs: 1
     * @var string
     */
    public $Field_Of_Study_Name;
    /**
     * Constructor method for Field_Of_Study_ReferenceType
     * @uses Field_Of_Study_ReferenceType::setField_Of_Study_Name()
     * @param string $field_Of_Study_Name
     */
    public function __construct($field_Of_Study_Name = null)
    {
        $this
            ->setField_Of_Study_Name($field_Of_Study_Name);
    }
    /**
     * Get Field_Of_Study_Name value
     * @return string|null
     */
    public function getField_Of_Study_Name()
    {
        return $this->Field_Of_Study_Name;
    }
    /**
     * Set Field_Of_Study_Name value
     * @param string $field_Of_Study_Name
     * @return \StructType\Field_Of_Study_ReferenceType
     */
    public function setField_Of_Study_Name($field_Of_Study_Name = null)
    {
        // validation for constraint: string
        if (!is_null($field_Of_Study_Name) && !is_string($field_Of_Study_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field_Of_Study_Name, true), gettype($field_Of_Study_Name)), __LINE__);
        }
        $this->Field_Of_Study_Name = $field_Of_Study_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Field_Of_Study_ReferenceType
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
