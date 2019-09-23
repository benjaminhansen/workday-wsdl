<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Degree_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A unique identifier used to reference a Degree.
 * @subpackage Structs
 */
class Degree_ReferenceType extends AbstractStructBase
{
    /**
     * The Degree_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Degree must exist for the given value of Degree Name. | Unique attribute name/description identifying a valid instance of Degree.
     * - maxOccurs: 1
     * @var string
     */
    public $Degree_Name;
    /**
     * Constructor method for Degree_ReferenceType
     * @uses Degree_ReferenceType::setDegree_Name()
     * @param string $degree_Name
     */
    public function __construct($degree_Name = null)
    {
        $this
            ->setDegree_Name($degree_Name);
    }
    /**
     * Get Degree_Name value
     * @return string|null
     */
    public function getDegree_Name()
    {
        return $this->Degree_Name;
    }
    /**
     * Set Degree_Name value
     * @param string $degree_Name
     * @return \StructType\Degree_ReferenceType
     */
    public function setDegree_Name($degree_Name = null)
    {
        // validation for constraint: string
        if (!is_null($degree_Name) && !is_string($degree_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($degree_Name, true), gettype($degree_Name)), __LINE__);
        }
        $this->Degree_Name = $degree_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Degree_ReferenceType
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
