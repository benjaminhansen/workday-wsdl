<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Benefit_Provider_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the summary information about the benefit provider of the benefit plan.
 * @subpackage Structs
 */
class Benefit_Provider_Summary_DataType extends AbstractStructBase
{
    /**
     * The Benefit_Provider_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the benefit provider.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Benefit_ProviderObjectType
     */
    public $Benefit_Provider_Reference;
    /**
     * The Benefit_Provider_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the benefit provider.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Benefit_Provider_Name;
    /**
     * The Benefit_Provider_Identifier_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The name of the benefit provider.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Benefit_Provider_Identifier_TypeObjectType
     */
    public $Benefit_Provider_Identifier_Type_Reference;
    /**
     * Constructor method for Benefit_Provider_Summary_DataType
     * @uses Benefit_Provider_Summary_DataType::setBenefit_Provider_Reference()
     * @uses Benefit_Provider_Summary_DataType::setBenefit_Provider_Name()
     * @uses Benefit_Provider_Summary_DataType::setBenefit_Provider_Identifier_Type_Reference()
     * @param \WorkdayWsdl\\StructType\Benefit_ProviderObjectType $benefit_Provider_Reference
     * @param string $benefit_Provider_Name
     * @param \WorkdayWsdl\\StructType\Benefit_Provider_Identifier_TypeObjectType $benefit_Provider_Identifier_Type_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Benefit_ProviderObjectType $benefit_Provider_Reference = null, $benefit_Provider_Name = null, \WorkdayWsdl\\StructType\Benefit_Provider_Identifier_TypeObjectType $benefit_Provider_Identifier_Type_Reference = null)
    {
        $this
            ->setBenefit_Provider_Reference($benefit_Provider_Reference)
            ->setBenefit_Provider_Name($benefit_Provider_Name)
            ->setBenefit_Provider_Identifier_Type_Reference($benefit_Provider_Identifier_Type_Reference);
    }
    /**
     * Get Benefit_Provider_Reference value
     * @return \WorkdayWsdl\\StructType\Benefit_ProviderObjectType|null
     */
    public function getBenefit_Provider_Reference()
    {
        return $this->Benefit_Provider_Reference;
    }
    /**
     * Set Benefit_Provider_Reference value
     * @param \WorkdayWsdl\\StructType\Benefit_ProviderObjectType $benefit_Provider_Reference
     * @return \WorkdayWsdl\\StructType\Benefit_Provider_Summary_DataType
     */
    public function setBenefit_Provider_Reference(\WorkdayWsdl\\StructType\Benefit_ProviderObjectType $benefit_Provider_Reference = null)
    {
        $this->Benefit_Provider_Reference = $benefit_Provider_Reference;
        return $this;
    }
    /**
     * Get Benefit_Provider_Name value
     * @return string|null
     */
    public function getBenefit_Provider_Name()
    {
        return $this->Benefit_Provider_Name;
    }
    /**
     * Set Benefit_Provider_Name value
     * @param string $benefit_Provider_Name
     * @return \WorkdayWsdl\\StructType\Benefit_Provider_Summary_DataType
     */
    public function setBenefit_Provider_Name($benefit_Provider_Name = null)
    {
        // validation for constraint: string
        if (!is_null($benefit_Provider_Name) && !is_string($benefit_Provider_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($benefit_Provider_Name, true), gettype($benefit_Provider_Name)), __LINE__);
        }
        $this->Benefit_Provider_Name = $benefit_Provider_Name;
        return $this;
    }
    /**
     * Get Benefit_Provider_Identifier_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Benefit_Provider_Identifier_TypeObjectType|null
     */
    public function getBenefit_Provider_Identifier_Type_Reference()
    {
        return $this->Benefit_Provider_Identifier_Type_Reference;
    }
    /**
     * Set Benefit_Provider_Identifier_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Benefit_Provider_Identifier_TypeObjectType $benefit_Provider_Identifier_Type_Reference
     * @return \WorkdayWsdl\\StructType\Benefit_Provider_Summary_DataType
     */
    public function setBenefit_Provider_Identifier_Type_Reference(\WorkdayWsdl\\StructType\Benefit_Provider_Identifier_TypeObjectType $benefit_Provider_Identifier_Type_Reference = null)
    {
        $this->Benefit_Provider_Identifier_Type_Reference = $benefit_Provider_Identifier_Type_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Benefit_Provider_Summary_DataType
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
