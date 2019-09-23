<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for School_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Educational Institution Type.
 * @subpackage Structs
 */
class School_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Institution_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: Unique attribute name/description identifying a valid instance of Educational Institution Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Institution_Type_Name;
    /**
     * Constructor method for School_Type_ReferenceType
     * @uses School_Type_ReferenceType::setInstitution_Type_Name()
     * @param string $institution_Type_Name
     */
    public function __construct($institution_Type_Name = null)
    {
        $this
            ->setInstitution_Type_Name($institution_Type_Name);
    }
    /**
     * Get Institution_Type_Name value
     * @return string|null
     */
    public function getInstitution_Type_Name()
    {
        return $this->Institution_Type_Name;
    }
    /**
     * Set Institution_Type_Name value
     * @param string $institution_Type_Name
     * @return \WorkdayWsdl\\StructType\School_Type_ReferenceType
     */
    public function setInstitution_Type_Name($institution_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($institution_Type_Name) && !is_string($institution_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($institution_Type_Name, true), gettype($institution_Type_Name)), __LINE__);
        }
        $this->Institution_Type_Name = $institution_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\School_Type_ReferenceType
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
