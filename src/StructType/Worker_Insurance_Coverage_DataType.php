<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Insurance_Coverage_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the insurance election information for the employee.
 * @subpackage Structs
 */
class Worker_Insurance_Coverage_DataType extends AbstractStructBase
{
    /**
     * The Insurance_Coverage_Level_Data
     * @var \WorkdayWsdl\\StructType\Insurance_Coverage_Level_DataType
     */
    public $Insurance_Coverage_Level_Data;
    /**
     * The Benefit_Election_Data
     * @var \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType
     */
    public $Benefit_Election_Data;
    /**
     * The Dependent_Coverage_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Dependent_Coverage_DataType[]
     */
    public $Dependent_Coverage_Data;
    /**
     * The Beneficiary_Designation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType[]
     */
    public $Beneficiary_Designation_Data;
    /**
     * Constructor method for Worker_Insurance_Coverage_DataType
     * @uses Worker_Insurance_Coverage_DataType::setInsurance_Coverage_Level_Data()
     * @uses Worker_Insurance_Coverage_DataType::setBenefit_Election_Data()
     * @uses Worker_Insurance_Coverage_DataType::setDependent_Coverage_Data()
     * @uses Worker_Insurance_Coverage_DataType::setBeneficiary_Designation_Data()
     * @param \WorkdayWsdl\\StructType\Insurance_Coverage_Level_DataType $insurance_Coverage_Level_Data
     * @param \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data
     * @param \WorkdayWsdl\\StructType\Dependent_Coverage_DataType[] $dependent_Coverage_Data
     * @param \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType[] $beneficiary_Designation_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Insurance_Coverage_Level_DataType $insurance_Coverage_Level_Data = null, \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null, array $dependent_Coverage_Data = array(), array $beneficiary_Designation_Data = array())
    {
        $this
            ->setInsurance_Coverage_Level_Data($insurance_Coverage_Level_Data)
            ->setBenefit_Election_Data($benefit_Election_Data)
            ->setDependent_Coverage_Data($dependent_Coverage_Data)
            ->setBeneficiary_Designation_Data($beneficiary_Designation_Data);
    }
    /**
     * Get Insurance_Coverage_Level_Data value
     * @return \WorkdayWsdl\\StructType\Insurance_Coverage_Level_DataType|null
     */
    public function getInsurance_Coverage_Level_Data()
    {
        return $this->Insurance_Coverage_Level_Data;
    }
    /**
     * Set Insurance_Coverage_Level_Data value
     * @param \WorkdayWsdl\\StructType\Insurance_Coverage_Level_DataType $insurance_Coverage_Level_Data
     * @return \WorkdayWsdl\\StructType\Worker_Insurance_Coverage_DataType
     */
    public function setInsurance_Coverage_Level_Data(\WorkdayWsdl\\StructType\Insurance_Coverage_Level_DataType $insurance_Coverage_Level_Data = null)
    {
        $this->Insurance_Coverage_Level_Data = $insurance_Coverage_Level_Data;
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
     * @return \WorkdayWsdl\\StructType\Worker_Insurance_Coverage_DataType
     */
    public function setBenefit_Election_Data(\WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null)
    {
        $this->Benefit_Election_Data = $benefit_Election_Data;
        return $this;
    }
    /**
     * Get Dependent_Coverage_Data value
     * @return \WorkdayWsdl\\StructType\Dependent_Coverage_DataType[]|null
     */
    public function getDependent_Coverage_Data()
    {
        return $this->Dependent_Coverage_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setDependent_Coverage_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDependent_Coverage_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDependent_Coverage_DataForArrayConstraintsFromSetDependent_Coverage_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Insurance_Coverage_DataTypeDependent_Coverage_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Insurance_Coverage_DataTypeDependent_Coverage_DataItem instanceof \WorkdayWsdl\\StructType\Dependent_Coverage_DataType) {
                $invalidValues[] = is_object($worker_Insurance_Coverage_DataTypeDependent_Coverage_DataItem) ? get_class($worker_Insurance_Coverage_DataTypeDependent_Coverage_DataItem) : sprintf('%s(%s)', gettype($worker_Insurance_Coverage_DataTypeDependent_Coverage_DataItem), var_export($worker_Insurance_Coverage_DataTypeDependent_Coverage_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Dependent_Coverage_Data property can only contain items of type \WorkdayWsdl\\StructType\Dependent_Coverage_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Dependent_Coverage_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Dependent_Coverage_DataType[] $dependent_Coverage_Data
     * @return \WorkdayWsdl\\StructType\Worker_Insurance_Coverage_DataType
     */
    public function setDependent_Coverage_Data(array $dependent_Coverage_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($dependent_Coverage_DataArrayErrorMessage = self::validateDependent_Coverage_DataForArrayConstraintsFromSetDependent_Coverage_Data($dependent_Coverage_Data))) {
            throw new \InvalidArgumentException($dependent_Coverage_DataArrayErrorMessage, __LINE__);
        }
        $this->Dependent_Coverage_Data = $dependent_Coverage_Data;
        return $this;
    }
    /**
     * Add item to Dependent_Coverage_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Dependent_Coverage_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Insurance_Coverage_DataType
     */
    public function addToDependent_Coverage_Data(\WorkdayWsdl\\StructType\Dependent_Coverage_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Dependent_Coverage_DataType) {
            throw new \InvalidArgumentException(sprintf('The Dependent_Coverage_Data property can only contain items of type \WorkdayWsdl\\StructType\Dependent_Coverage_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Dependent_Coverage_Data[] = $item;
        return $this;
    }
    /**
     * Get Beneficiary_Designation_Data value
     * @return \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType[]|null
     */
    public function getBeneficiary_Designation_Data()
    {
        return $this->Beneficiary_Designation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setBeneficiary_Designation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBeneficiary_Designation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBeneficiary_Designation_DataForArrayConstraintsFromSetBeneficiary_Designation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Insurance_Coverage_DataTypeBeneficiary_Designation_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Insurance_Coverage_DataTypeBeneficiary_Designation_DataItem instanceof \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType) {
                $invalidValues[] = is_object($worker_Insurance_Coverage_DataTypeBeneficiary_Designation_DataItem) ? get_class($worker_Insurance_Coverage_DataTypeBeneficiary_Designation_DataItem) : sprintf('%s(%s)', gettype($worker_Insurance_Coverage_DataTypeBeneficiary_Designation_DataItem), var_export($worker_Insurance_Coverage_DataTypeBeneficiary_Designation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Beneficiary_Designation_Data property can only contain items of type \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Beneficiary_Designation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType[] $beneficiary_Designation_Data
     * @return \WorkdayWsdl\\StructType\Worker_Insurance_Coverage_DataType
     */
    public function setBeneficiary_Designation_Data(array $beneficiary_Designation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($beneficiary_Designation_DataArrayErrorMessage = self::validateBeneficiary_Designation_DataForArrayConstraintsFromSetBeneficiary_Designation_Data($beneficiary_Designation_Data))) {
            throw new \InvalidArgumentException($beneficiary_Designation_DataArrayErrorMessage, __LINE__);
        }
        $this->Beneficiary_Designation_Data = $beneficiary_Designation_Data;
        return $this;
    }
    /**
     * Add item to Beneficiary_Designation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Insurance_Coverage_DataType
     */
    public function addToBeneficiary_Designation_Data(\WorkdayWsdl\\StructType\Beneficiary_Designation_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType) {
            throw new \InvalidArgumentException(sprintf('The Beneficiary_Designation_Data property can only contain items of type \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Beneficiary_Designation_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Insurance_Coverage_DataType
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
