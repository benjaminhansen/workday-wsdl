<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Health_Care_Coverage_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the health care coverage information (elections) for an employee.
 * @subpackage Structs
 */
class Worker_Health_Care_Coverage_DataType extends AbstractStructBase
{
    /**
     * The Health_Care_Coverage_Target_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the level of coverage elected.
     * - minOccurs: 0
     * @var \StructType\Health_Care_Coverage_TargetObjectType
     */
    public $Health_Care_Coverage_Target_Reference;
    /**
     * The Original_Coverage_Begin_Date_for_Coverage_Target
     * Meta information extracted from the WSDL
     * - documentation: The first date that coverage began for this type of coverage level.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Original_Coverage_Begin_Date_for_Coverage_Target;
    /**
     * The Provider_ID
     * Meta information extracted from the WSDL
     * - documentation: The Provider ID of the Primary Care Physician for the employee.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Provider_ID;
    /**
     * The Benefit_Election_Data
     * Meta information extracted from the WSDL
     * - documentation: The election information for the coverage.
     * - minOccurs: 0
     * @var \StructType\Worker_Benefit_Election_DataType
     */
    public $Benefit_Election_Data;
    /**
     * The Dependent_Coverage_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the dependents covered for the election.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Dependent_Coverage_DataType[]
     */
    public $Dependent_Coverage_Data;
    /**
     * Constructor method for Worker_Health_Care_Coverage_DataType
     * @uses Worker_Health_Care_Coverage_DataType::setHealth_Care_Coverage_Target_Reference()
     * @uses Worker_Health_Care_Coverage_DataType::setOriginal_Coverage_Begin_Date_for_Coverage_Target()
     * @uses Worker_Health_Care_Coverage_DataType::setProvider_ID()
     * @uses Worker_Health_Care_Coverage_DataType::setBenefit_Election_Data()
     * @uses Worker_Health_Care_Coverage_DataType::setDependent_Coverage_Data()
     * @param \StructType\Health_Care_Coverage_TargetObjectType $health_Care_Coverage_Target_Reference
     * @param string $original_Coverage_Begin_Date_for_Coverage_Target
     * @param string $provider_ID
     * @param \StructType\Worker_Benefit_Election_DataType $benefit_Election_Data
     * @param \StructType\Dependent_Coverage_DataType[] $dependent_Coverage_Data
     */
    public function __construct(\StructType\Health_Care_Coverage_TargetObjectType $health_Care_Coverage_Target_Reference = null, $original_Coverage_Begin_Date_for_Coverage_Target = null, $provider_ID = null, \StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null, array $dependent_Coverage_Data = array())
    {
        $this
            ->setHealth_Care_Coverage_Target_Reference($health_Care_Coverage_Target_Reference)
            ->setOriginal_Coverage_Begin_Date_for_Coverage_Target($original_Coverage_Begin_Date_for_Coverage_Target)
            ->setProvider_ID($provider_ID)
            ->setBenefit_Election_Data($benefit_Election_Data)
            ->setDependent_Coverage_Data($dependent_Coverage_Data);
    }
    /**
     * Get Health_Care_Coverage_Target_Reference value
     * @return \StructType\Health_Care_Coverage_TargetObjectType|null
     */
    public function getHealth_Care_Coverage_Target_Reference()
    {
        return $this->Health_Care_Coverage_Target_Reference;
    }
    /**
     * Set Health_Care_Coverage_Target_Reference value
     * @param \StructType\Health_Care_Coverage_TargetObjectType $health_Care_Coverage_Target_Reference
     * @return \StructType\Worker_Health_Care_Coverage_DataType
     */
    public function setHealth_Care_Coverage_Target_Reference(\StructType\Health_Care_Coverage_TargetObjectType $health_Care_Coverage_Target_Reference = null)
    {
        $this->Health_Care_Coverage_Target_Reference = $health_Care_Coverage_Target_Reference;
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
     * @return \StructType\Worker_Health_Care_Coverage_DataType
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
     * Get Provider_ID value
     * @return string|null
     */
    public function getProvider_ID()
    {
        return $this->Provider_ID;
    }
    /**
     * Set Provider_ID value
     * @param string $provider_ID
     * @return \StructType\Worker_Health_Care_Coverage_DataType
     */
    public function setProvider_ID($provider_ID = null)
    {
        // validation for constraint: string
        if (!is_null($provider_ID) && !is_string($provider_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provider_ID, true), gettype($provider_ID)), __LINE__);
        }
        $this->Provider_ID = $provider_ID;
        return $this;
    }
    /**
     * Get Benefit_Election_Data value
     * @return \StructType\Worker_Benefit_Election_DataType|null
     */
    public function getBenefit_Election_Data()
    {
        return $this->Benefit_Election_Data;
    }
    /**
     * Set Benefit_Election_Data value
     * @param \StructType\Worker_Benefit_Election_DataType $benefit_Election_Data
     * @return \StructType\Worker_Health_Care_Coverage_DataType
     */
    public function setBenefit_Election_Data(\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null)
    {
        $this->Benefit_Election_Data = $benefit_Election_Data;
        return $this;
    }
    /**
     * Get Dependent_Coverage_Data value
     * @return \StructType\Dependent_Coverage_DataType[]|null
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
        foreach ($values as $worker_Health_Care_Coverage_DataTypeDependent_Coverage_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Health_Care_Coverage_DataTypeDependent_Coverage_DataItem instanceof \StructType\Dependent_Coverage_DataType) {
                $invalidValues[] = is_object($worker_Health_Care_Coverage_DataTypeDependent_Coverage_DataItem) ? get_class($worker_Health_Care_Coverage_DataTypeDependent_Coverage_DataItem) : sprintf('%s(%s)', gettype($worker_Health_Care_Coverage_DataTypeDependent_Coverage_DataItem), var_export($worker_Health_Care_Coverage_DataTypeDependent_Coverage_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Dependent_Coverage_Data property can only contain items of type \StructType\Dependent_Coverage_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Dependent_Coverage_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Dependent_Coverage_DataType[] $dependent_Coverage_Data
     * @return \StructType\Worker_Health_Care_Coverage_DataType
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
     * @param \StructType\Dependent_Coverage_DataType $item
     * @return \StructType\Worker_Health_Care_Coverage_DataType
     */
    public function addToDependent_Coverage_Data(\StructType\Dependent_Coverage_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Dependent_Coverage_DataType) {
            throw new \InvalidArgumentException(sprintf('The Dependent_Coverage_Data property can only contain items of type \StructType\Dependent_Coverage_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Dependent_Coverage_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Health_Care_Coverage_DataType
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
