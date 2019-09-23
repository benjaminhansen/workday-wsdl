<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Qualified_Domestic_Relations_Order_Replacement_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Court Order Details. NOTE: You must pass in the entire set of court orders. Any existing court orders that are not submitted will be removed.
 * @subpackage Structs
 */
class Qualified_Domestic_Relations_Order_Replacement_DataType extends AbstractStructBase
{
    /**
     * The Benefit_Coverage_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Enforce court order for this benefit coverage type.
     * @var \WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType
     */
    public $Benefit_Coverage_Type_Reference;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Enforce court order starting on this date.
     * - maxOccurs: 1
     * @var string
     */
    public $Start_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: Stop enforcing court order on this date.
     * - maxOccurs: 1
     * @var string
     */
    public $End_Date;
    /**
     * Constructor method for Qualified_Domestic_Relations_Order_Replacement_DataType
     * @uses Qualified_Domestic_Relations_Order_Replacement_DataType::setBenefit_Coverage_Type_Reference()
     * @uses Qualified_Domestic_Relations_Order_Replacement_DataType::setStart_Date()
     * @uses Qualified_Domestic_Relations_Order_Replacement_DataType::setEnd_Date()
     * @param \WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType $benefit_Coverage_Type_Reference
     * @param string $start_Date
     * @param string $end_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType $benefit_Coverage_Type_Reference = null, $start_Date = null, $end_Date = null)
    {
        $this
            ->setBenefit_Coverage_Type_Reference($benefit_Coverage_Type_Reference)
            ->setStart_Date($start_Date)
            ->setEnd_Date($end_Date);
    }
    /**
     * Get Benefit_Coverage_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType|null
     */
    public function getBenefit_Coverage_Type_Reference()
    {
        return $this->Benefit_Coverage_Type_Reference;
    }
    /**
     * Set Benefit_Coverage_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType $benefit_Coverage_Type_Reference
     * @return \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType
     */
    public function setBenefit_Coverage_Type_Reference(\WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType $benefit_Coverage_Type_Reference = null)
    {
        $this->Benefit_Coverage_Type_Reference = $benefit_Coverage_Type_Reference;
        return $this;
    }
    /**
     * Get Start_Date value
     * @return string|null
     */
    public function getStart_Date()
    {
        return $this->Start_Date;
    }
    /**
     * Set Start_Date value
     * @param string $start_Date
     * @return \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType
     */
    public function setStart_Date($start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($start_Date) && !is_string($start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_Date, true), gettype($start_Date)), __LINE__);
        }
        $this->Start_Date = $start_Date;
        return $this;
    }
    /**
     * Get End_Date value
     * @return string|null
     */
    public function getEnd_Date()
    {
        return $this->End_Date;
    }
    /**
     * Set End_Date value
     * @param string $end_Date
     * @return \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType
     */
    public function setEnd_Date($end_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Date) && !is_string($end_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Date, true), gettype($end_Date)), __LINE__);
        }
        $this->End_Date = $end_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType
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
