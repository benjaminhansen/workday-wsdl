<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Superior_Academic_Unit_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Superior Academic Unit Data
 * @subpackage Structs
 */
class Superior_Academic_Unit_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Superior Academic Unit as of this effective date
     * - maxOccurs: 1
     * @var string
     */
    public $Effective_Date;
    /**
     * The Superior_Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: Superior Academic Unit Reference
     * - minOccurs: 0
     * @var \StructType\Academic_UnitObjectType
     */
    public $Superior_Academic_Unit_Reference;
    /**
     * Constructor method for Superior_Academic_Unit_DataType
     * @uses Superior_Academic_Unit_DataType::setEffective_Date()
     * @uses Superior_Academic_Unit_DataType::setSuperior_Academic_Unit_Reference()
     * @param string $effective_Date
     * @param \StructType\Academic_UnitObjectType $superior_Academic_Unit_Reference
     */
    public function __construct($effective_Date = null, \StructType\Academic_UnitObjectType $superior_Academic_Unit_Reference = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setSuperior_Academic_Unit_Reference($superior_Academic_Unit_Reference);
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Superior_Academic_Unit_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Superior_Academic_Unit_Reference value
     * @return \StructType\Academic_UnitObjectType|null
     */
    public function getSuperior_Academic_Unit_Reference()
    {
        return $this->Superior_Academic_Unit_Reference;
    }
    /**
     * Set Superior_Academic_Unit_Reference value
     * @param \StructType\Academic_UnitObjectType $superior_Academic_Unit_Reference
     * @return \StructType\Superior_Academic_Unit_DataType
     */
    public function setSuperior_Academic_Unit_Reference(\StructType\Academic_UnitObjectType $superior_Academic_Unit_Reference = null)
    {
        $this->Superior_Academic_Unit_Reference = $superior_Academic_Unit_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Superior_Academic_Unit_DataType
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
