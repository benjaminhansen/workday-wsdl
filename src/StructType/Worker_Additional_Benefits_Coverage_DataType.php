<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Additional_Benefits_Coverage_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the additional benefits coverage information (elections) for an employee.
 * @subpackage Structs
 */
class Worker_Additional_Benefits_Coverage_DataType extends AbstractStructBase
{
    /**
     * The Additional_Benefits_Coverage_Target_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the coverage target elected.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Additional_Benefits_Coverage_TargetObjectType
     */
    public $Additional_Benefits_Coverage_Target_Reference;
    /**
     * The Original_Coverage_Begin_Date_for_Coverage_Target
     * Meta information extracted from the WSDL
     * - documentation: The first date that coverage began for this type of coverage.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Original_Coverage_Begin_Date_for_Coverage_Target;
    /**
     * The Benefit_Election_Data
     * Meta information extracted from the WSDL
     * - documentation: The election information for the coverage.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType
     */
    public $Benefit_Election_Data;
    /**
     * The Percent_Contribution_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType
     */
    public $Percent_Contribution_Data;
    /**
     * The Amount_Contribution_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType[]
     */
    public $Amount_Contribution_Data;
    /**
     * Constructor method for Worker_Additional_Benefits_Coverage_DataType
     * @uses Worker_Additional_Benefits_Coverage_DataType::setAdditional_Benefits_Coverage_Target_Reference()
     * @uses Worker_Additional_Benefits_Coverage_DataType::setOriginal_Coverage_Begin_Date_for_Coverage_Target()
     * @uses Worker_Additional_Benefits_Coverage_DataType::setBenefit_Election_Data()
     * @uses Worker_Additional_Benefits_Coverage_DataType::setPercent_Contribution_Data()
     * @uses Worker_Additional_Benefits_Coverage_DataType::setAmount_Contribution_Data()
     * @param \WorkdayWsdl\\StructType\Additional_Benefits_Coverage_TargetObjectType $additional_Benefits_Coverage_Target_Reference
     * @param string $original_Coverage_Begin_Date_for_Coverage_Target
     * @param \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType $percent_Contribution_Data
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType[] $amount_Contribution_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Additional_Benefits_Coverage_TargetObjectType $additional_Benefits_Coverage_Target_Reference = null, $original_Coverage_Begin_Date_for_Coverage_Target = null, \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null, \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType $percent_Contribution_Data = null, array $amount_Contribution_Data = array())
    {
        $this
            ->setAdditional_Benefits_Coverage_Target_Reference($additional_Benefits_Coverage_Target_Reference)
            ->setOriginal_Coverage_Begin_Date_for_Coverage_Target($original_Coverage_Begin_Date_for_Coverage_Target)
            ->setBenefit_Election_Data($benefit_Election_Data)
            ->setPercent_Contribution_Data($percent_Contribution_Data)
            ->setAmount_Contribution_Data($amount_Contribution_Data);
    }
    /**
     * Get Additional_Benefits_Coverage_Target_Reference value
     * @return \WorkdayWsdl\\StructType\Additional_Benefits_Coverage_TargetObjectType|null
     */
    public function getAdditional_Benefits_Coverage_Target_Reference()
    {
        return $this->Additional_Benefits_Coverage_Target_Reference;
    }
    /**
     * Set Additional_Benefits_Coverage_Target_Reference value
     * @param \WorkdayWsdl\\StructType\Additional_Benefits_Coverage_TargetObjectType $additional_Benefits_Coverage_Target_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Coverage_DataType
     */
    public function setAdditional_Benefits_Coverage_Target_Reference(\WorkdayWsdl\\StructType\Additional_Benefits_Coverage_TargetObjectType $additional_Benefits_Coverage_Target_Reference = null)
    {
        $this->Additional_Benefits_Coverage_Target_Reference = $additional_Benefits_Coverage_Target_Reference;
        return $this;
    }
    /**
     * Get Original_Coverage_Begin_Date_for_Coverage_Target value
     * @return string|null
     */
    public function getOriginal_Coverage_Begin_Date_for_Coverage_Target()
    {
        return $this->Original_Coverage_Begin_Date_for_Coverage_Target;
    }
    /**
     * Set Original_Coverage_Begin_Date_for_Coverage_Target value
     * @param string $original_Coverage_Begin_Date_for_Coverage_Target
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Coverage_DataType
     */
    public function setOriginal_Coverage_Begin_Date_for_Coverage_Target($original_Coverage_Begin_Date_for_Coverage_Target = null)
    {
        // validation for constraint: string
        if (!is_null($original_Coverage_Begin_Date_for_Coverage_Target) && !is_string($original_Coverage_Begin_Date_for_Coverage_Target)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_Coverage_Begin_Date_for_Coverage_Target, true), gettype($original_Coverage_Begin_Date_for_Coverage_Target)), __LINE__);
        }
        $this->Original_Coverage_Begin_Date_for_Coverage_Target = $original_Coverage_Begin_Date_for_Coverage_Target;
        return $this;
    }
    /**
     * Get Benefit_Election_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType|null
     */
    public function getBenefit_Election_Data()
    {
        return $this->Benefit_Election_Data;
    }
    /**
     * Set Benefit_Election_Data value
     * @param \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Coverage_DataType
     */
    public function setBenefit_Election_Data(\WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null)
    {
        $this->Benefit_Election_Data = $benefit_Election_Data;
        return $this;
    }
    /**
     * Get Percent_Contribution_Data value
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType|null
     */
    public function getPercent_Contribution_Data()
    {
        return $this->Percent_Contribution_Data;
    }
    /**
     * Set Percent_Contribution_Data value
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType $percent_Contribution_Data
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Coverage_DataType
     */
    public function setPercent_Contribution_Data(\WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType $percent_Contribution_Data = null)
    {
        $this->Percent_Contribution_Data = $percent_Contribution_Data;
        return $this;
    }
    /**
     * Get Amount_Contribution_Data value
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType[]|null
     */
    public function getAmount_Contribution_Data()
    {
        return $this->Amount_Contribution_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAmount_Contribution_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAmount_Contribution_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAmount_Contribution_DataForArrayConstraintsFromSetAmount_Contribution_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Additional_Benefits_Coverage_DataTypeAmount_Contribution_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Additional_Benefits_Coverage_DataTypeAmount_Contribution_DataItem instanceof \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType) {
                $invalidValues[] = is_object($worker_Additional_Benefits_Coverage_DataTypeAmount_Contribution_DataItem) ? get_class($worker_Additional_Benefits_Coverage_DataTypeAmount_Contribution_DataItem) : sprintf('%s(%s)', gettype($worker_Additional_Benefits_Coverage_DataTypeAmount_Contribution_DataItem), var_export($worker_Additional_Benefits_Coverage_DataTypeAmount_Contribution_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Amount_Contribution_Data property can only contain items of type \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Amount_Contribution_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType[] $amount_Contribution_Data
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Coverage_DataType
     */
    public function setAmount_Contribution_Data(array $amount_Contribution_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($amount_Contribution_DataArrayErrorMessage = self::validateAmount_Contribution_DataForArrayConstraintsFromSetAmount_Contribution_Data($amount_Contribution_Data))) {
            throw new \InvalidArgumentException($amount_Contribution_DataArrayErrorMessage, __LINE__);
        }
        $this->Amount_Contribution_Data = $amount_Contribution_Data;
        return $this;
    }
    /**
     * Add item to Amount_Contribution_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Coverage_DataType
     */
    public function addToAmount_Contribution_Data(\WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType) {
            throw new \InvalidArgumentException(sprintf('The Amount_Contribution_Data property can only contain items of type \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Amount_Contribution_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Coverage_DataType
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
