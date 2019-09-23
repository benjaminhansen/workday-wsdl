<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Pay_Group_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of External Pay Group.
 * @subpackage Structs
 */
class External_Pay_Group_ReferenceType extends AbstractStructBase
{
    /**
     * The Pay_Group_ID
     * Meta information extracted from the WSDL
     * - documentation: Unique attribute name/description identifying a valid instance of External Pay Group.
     * - maxOccurs: 1
     * @var string
     */
    public $Pay_Group_ID;
    /**
     * Constructor method for External_Pay_Group_ReferenceType
     * @uses External_Pay_Group_ReferenceType::setPay_Group_ID()
     * @param string $pay_Group_ID
     */
    public function __construct($pay_Group_ID = null)
    {
        $this
            ->setPay_Group_ID($pay_Group_ID);
    }
    /**
     * Get Pay_Group_ID value
     * @return string|null
     */
    public function getPay_Group_ID()
    {
        return $this->Pay_Group_ID;
    }
    /**
     * Set Pay_Group_ID value
     * @param string $pay_Group_ID
     * @return \StructType\External_Pay_Group_ReferenceType
     */
    public function setPay_Group_ID($pay_Group_ID = null)
    {
        // validation for constraint: string
        if (!is_null($pay_Group_ID) && !is_string($pay_Group_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pay_Group_ID, true), gettype($pay_Group_ID)), __LINE__);
        }
        $this->Pay_Group_ID = $pay_Group_ID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_Pay_Group_ReferenceType
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
