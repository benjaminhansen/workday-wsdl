<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Multi-factor_Authentication_for_Worker_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Multi-factor Authentication Information.
 * @subpackage Structs
 */
class Multi_factor_Authentication_for_Worker_DataType extends AbstractStructBase
{
    /**
     * The Multi_factor_Authentication_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Multi-factor Authentication Type Reference.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Multi_factor_Authentication_Type_Reference;
    /**
     * The Reset
     * Meta information extracted from the WSDL
     * - documentation: Set this element to true if you want to reset the user's multi-factor authentication status.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Reset;
    /**
     * Constructor method for Multi-factor_Authentication_for_Worker_DataType
     * @uses Multi_factor_Authentication_for_Worker_DataType::setMulti_factor_Authentication_Type_Reference()
     * @uses Multi_factor_Authentication_for_Worker_DataType::setReset()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $multi_factor_Authentication_Type_Reference
     * @param bool $reset
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $multi_factor_Authentication_Type_Reference = null, $reset = null)
    {
        $this
            ->setMulti_factor_Authentication_Type_Reference($multi_factor_Authentication_Type_Reference)
            ->setReset($reset);
    }
    /**
     * Get Multi_factor_Authentication_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getMulti_factor_Authentication_Type_Reference()
    {
        return $this->{'Multi-factor_Authentication_Type_Reference'};
    }
    /**
     * Set Multi_factor_Authentication_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $multi_factor_Authentication_Type_Reference
     * @return \WorkdayWsdl\\StructType\Multi_factor_Authentication_for_Worker_DataType
     */
    public function setMulti_factor_Authentication_Type_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $multi_factor_Authentication_Type_Reference = null)
    {
        $this->Multi_factor_Authentication_Type_Reference = $this->{'Multi-factor_Authentication_Type_Reference'} = $multi_factor_Authentication_Type_Reference;
        return $this;
    }
    /**
     * Get Reset value
     * @return bool|null
     */
    public function getReset()
    {
        return $this->Reset;
    }
    /**
     * Set Reset value
     * @param bool $reset
     * @return \WorkdayWsdl\\StructType\Multi_factor_Authentication_for_Worker_DataType
     */
    public function setReset($reset = null)
    {
        // validation for constraint: boolean
        if (!is_null($reset) && !is_bool($reset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reset, true), gettype($reset)), __LINE__);
        }
        $this->Reset = $reset;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Multi_factor_Authentication_for_Worker_DataType
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
