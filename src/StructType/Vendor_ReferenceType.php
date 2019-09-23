<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vendor_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Vendor.
 * @subpackage Structs
 */
class Vendor_ReferenceType extends AbstractStructBase
{
    /**
     * The Vendor_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Vendor (Business Entity) must exist for the given value of Vendor Name. | Unique attribute name/description identifying a valid instance of Vendor (Business Entity).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Vendor_Name;
    /**
     * Constructor method for Vendor_ReferenceType
     * @uses Vendor_ReferenceType::setVendor_Name()
     * @param string $vendor_Name
     */
    public function __construct($vendor_Name = null)
    {
        $this
            ->setVendor_Name($vendor_Name);
    }
    /**
     * Get Vendor_Name value
     * @return string|null
     */
    public function getVendor_Name()
    {
        return $this->Vendor_Name;
    }
    /**
     * Set Vendor_Name value
     * @param string $vendor_Name
     * @return \StructType\Vendor_ReferenceType
     */
    public function setVendor_Name($vendor_Name = null)
    {
        // validation for constraint: string
        if (!is_null($vendor_Name) && !is_string($vendor_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendor_Name, true), gettype($vendor_Name)), __LINE__);
        }
        $this->Vendor_Name = $vendor_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Vendor_ReferenceType
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
