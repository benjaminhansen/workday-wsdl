<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dependent_Coverage_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the dependents covered for the election.
 * @subpackage Structs
 */
class Dependent_Coverage_DataType extends AbstractStructBase
{
    /**
     * The Dependent_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the dependent.
     * - minOccurs: 0
     * @var \StructType\DependentObjectType
     */
    public $Dependent_Reference;
    /**
     * The Original_Coverage_Begin_Date
     * Meta information extracted from the WSDL
     * - documentation: The date that coverage began for this election.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Original_Coverage_Begin_Date;
    /**
     * The Coverage_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The date that coverage ended for this election.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Coverage_End_Date;
    /**
     * The Original_Coverage_Begin_Date_for_Benefit_Coverage_Type
     * Meta information extracted from the WSDL
     * - documentation: The date that coverage for the Dependent began on the Benefit Coverage Type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Original_Coverage_Begin_Date_for_Benefit_Coverage_Type;
    /**
     * The First_Date_Covered_by_Benefit_Plan
     * Meta information extracted from the WSDL
     * - documentation: The very first date that the Dependent was covered by the Benefit Plan. Any gaps in coverage are ignored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Date_Covered_by_Benefit_Plan;
    /**
     * The First_Date_Covered_by_Benefit_Provider
     * Meta information extracted from the WSDL
     * - documentation: The very first date that the Dependent was covered by the Benefit provider. Any gaps in coverage are ignored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Date_Covered_by_Benefit_Provider;
    /**
     * The Provider_ID
     * Meta information extracted from the WSDL
     * - documentation: The Provider ID of the Primary Care Physician for the dependent.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Provider_ID;
    /**
     * The COBRA_Eligibility_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains COBRA Eligibility detail for a participant. If this element is not populated then the participant is assumed to not be COBRA eligible.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\COBRA_Eligibility_DataType[]
     */
    public $COBRA_Eligibility_Data;
    /**
     * Constructor method for Dependent_Coverage_DataType
     * @uses Dependent_Coverage_DataType::setDependent_Reference()
     * @uses Dependent_Coverage_DataType::setOriginal_Coverage_Begin_Date()
     * @uses Dependent_Coverage_DataType::setCoverage_End_Date()
     * @uses Dependent_Coverage_DataType::setOriginal_Coverage_Begin_Date_for_Benefit_Coverage_Type()
     * @uses Dependent_Coverage_DataType::setFirst_Date_Covered_by_Benefit_Plan()
     * @uses Dependent_Coverage_DataType::setFirst_Date_Covered_by_Benefit_Provider()
     * @uses Dependent_Coverage_DataType::setProvider_ID()
     * @uses Dependent_Coverage_DataType::setCOBRA_Eligibility_Data()
     * @param \StructType\DependentObjectType $dependent_Reference
     * @param string $original_Coverage_Begin_Date
     * @param string $coverage_End_Date
     * @param string $original_Coverage_Begin_Date_for_Benefit_Coverage_Type
     * @param string $first_Date_Covered_by_Benefit_Plan
     * @param string $first_Date_Covered_by_Benefit_Provider
     * @param string $provider_ID
     * @param \StructType\COBRA_Eligibility_DataType[] $cOBRA_Eligibility_Data
     */
    public function __construct(\StructType\DependentObjectType $dependent_Reference = null, $original_Coverage_Begin_Date = null, $coverage_End_Date = null, $original_Coverage_Begin_Date_for_Benefit_Coverage_Type = null, $first_Date_Covered_by_Benefit_Plan = null, $first_Date_Covered_by_Benefit_Provider = null, $provider_ID = null, array $cOBRA_Eligibility_Data = array())
    {
        $this
            ->setDependent_Reference($dependent_Reference)
            ->setOriginal_Coverage_Begin_Date($original_Coverage_Begin_Date)
            ->setCoverage_End_Date($coverage_End_Date)
            ->setOriginal_Coverage_Begin_Date_for_Benefit_Coverage_Type($original_Coverage_Begin_Date_for_Benefit_Coverage_Type)
            ->setFirst_Date_Covered_by_Benefit_Plan($first_Date_Covered_by_Benefit_Plan)
            ->setFirst_Date_Covered_by_Benefit_Provider($first_Date_Covered_by_Benefit_Provider)
            ->setProvider_ID($provider_ID)
            ->setCOBRA_Eligibility_Data($cOBRA_Eligibility_Data);
    }
    /**
     * Get Dependent_Reference value
     * @return \StructType\DependentObjectType|null
     */
    public function getDependent_Reference()
    {
        return $this->Dependent_Reference;
    }
    /**
     * Set Dependent_Reference value
     * @param \StructType\DependentObjectType $dependent_Reference
     * @return \StructType\Dependent_Coverage_DataType
     */
    public function setDependent_Reference(\StructType\DependentObjectType $dependent_Reference = null)
    {
        $this->Dependent_Reference = $dependent_Reference;
        return $this;
    }
    /**
     * Get Original_Coverage_Begin_Date value
     * @return string|null
     */
    public function getOriginal_Coverage_Begin_Date()
    {
        return $this->Original_Coverage_Begin_Date;
    }
    /**
     * Set Original_Coverage_Begin_Date value
     * @param string $original_Coverage_Begin_Date
     * @return \StructType\Dependent_Coverage_DataType
     */
    public function setOriginal_Coverage_Begin_Date($original_Coverage_Begin_Date = null)
    {
        // validation for constraint: string
        if (!is_null($original_Coverage_Begin_Date) && !is_string($original_Coverage_Begin_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_Coverage_Begin_Date, true), gettype($original_Coverage_Begin_Date)), __LINE__);
        }
        $this->Original_Coverage_Begin_Date = $original_Coverage_Begin_Date;
        return $this;
    }
    /**
     * Get Coverage_End_Date value
     * @return string|null
     */
    public function getCoverage_End_Date()
    {
        return $this->Coverage_End_Date;
    }
    /**
     * Set Coverage_End_Date value
     * @param string $coverage_End_Date
     * @return \StructType\Dependent_Coverage_DataType
     */
    public function setCoverage_End_Date($coverage_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($coverage_End_Date) && !is_string($coverage_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coverage_End_Date, true), gettype($coverage_End_Date)), __LINE__);
        }
        $this->Coverage_End_Date = $coverage_End_Date;
        return $this;
    }
    /**
     * Get Original_Coverage_Begin_Date_for_Benefit_Coverage_Type value
     * @return string|null
     */
    public function getOriginal_Coverage_Begin_Date_for_Benefit_Coverage_Type()
    {
        return $this->Original_Coverage_Begin_Date_for_Benefit_Coverage_Type;
    }
    /**
     * Set Original_Coverage_Begin_Date_for_Benefit_Coverage_Type value
     * @param string $original_Coverage_Begin_Date_for_Benefit_Coverage_Type
     * @return \StructType\Dependent_Coverage_DataType
     */
    public function setOriginal_Coverage_Begin_Date_for_Benefit_Coverage_Type($original_Coverage_Begin_Date_for_Benefit_Coverage_Type = null)
    {
        // validation for constraint: string
        if (!is_null($original_Coverage_Begin_Date_for_Benefit_Coverage_Type) && !is_string($original_Coverage_Begin_Date_for_Benefit_Coverage_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_Coverage_Begin_Date_for_Benefit_Coverage_Type, true), gettype($original_Coverage_Begin_Date_for_Benefit_Coverage_Type)), __LINE__);
        }
        $this->Original_Coverage_Begin_Date_for_Benefit_Coverage_Type = $original_Coverage_Begin_Date_for_Benefit_Coverage_Type;
        return $this;
    }
    /**
     * Get First_Date_Covered_by_Benefit_Plan value
     * @return string|null
     */
    public function getFirst_Date_Covered_by_Benefit_Plan()
    {
        return $this->First_Date_Covered_by_Benefit_Plan;
    }
    /**
     * Set First_Date_Covered_by_Benefit_Plan value
     * @param string $first_Date_Covered_by_Benefit_Plan
     * @return \StructType\Dependent_Coverage_DataType
     */
    public function setFirst_Date_Covered_by_Benefit_Plan($first_Date_Covered_by_Benefit_Plan = null)
    {
        // validation for constraint: string
        if (!is_null($first_Date_Covered_by_Benefit_Plan) && !is_string($first_Date_Covered_by_Benefit_Plan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Date_Covered_by_Benefit_Plan, true), gettype($first_Date_Covered_by_Benefit_Plan)), __LINE__);
        }
        $this->First_Date_Covered_by_Benefit_Plan = $first_Date_Covered_by_Benefit_Plan;
        return $this;
    }
    /**
     * Get First_Date_Covered_by_Benefit_Provider value
     * @return string|null
     */
    public function getFirst_Date_Covered_by_Benefit_Provider()
    {
        return $this->First_Date_Covered_by_Benefit_Provider;
    }
    /**
     * Set First_Date_Covered_by_Benefit_Provider value
     * @param string $first_Date_Covered_by_Benefit_Provider
     * @return \StructType\Dependent_Coverage_DataType
     */
    public function setFirst_Date_Covered_by_Benefit_Provider($first_Date_Covered_by_Benefit_Provider = null)
    {
        // validation for constraint: string
        if (!is_null($first_Date_Covered_by_Benefit_Provider) && !is_string($first_Date_Covered_by_Benefit_Provider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Date_Covered_by_Benefit_Provider, true), gettype($first_Date_Covered_by_Benefit_Provider)), __LINE__);
        }
        $this->First_Date_Covered_by_Benefit_Provider = $first_Date_Covered_by_Benefit_Provider;
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
     * @return \StructType\Dependent_Coverage_DataType
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
     * Get COBRA_Eligibility_Data value
     * @return \StructType\COBRA_Eligibility_DataType[]|null
     */
    public function getCOBRA_Eligibility_Data()
    {
        return $this->COBRA_Eligibility_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCOBRA_Eligibility_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCOBRA_Eligibility_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCOBRA_Eligibility_DataForArrayConstraintsFromSetCOBRA_Eligibility_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dependent_Coverage_DataTypeCOBRA_Eligibility_DataItem) {
            // validation for constraint: itemType
            if (!$dependent_Coverage_DataTypeCOBRA_Eligibility_DataItem instanceof \StructType\COBRA_Eligibility_DataType) {
                $invalidValues[] = is_object($dependent_Coverage_DataTypeCOBRA_Eligibility_DataItem) ? get_class($dependent_Coverage_DataTypeCOBRA_Eligibility_DataItem) : sprintf('%s(%s)', gettype($dependent_Coverage_DataTypeCOBRA_Eligibility_DataItem), var_export($dependent_Coverage_DataTypeCOBRA_Eligibility_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The COBRA_Eligibility_Data property can only contain items of type \StructType\COBRA_Eligibility_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set COBRA_Eligibility_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\COBRA_Eligibility_DataType[] $cOBRA_Eligibility_Data
     * @return \StructType\Dependent_Coverage_DataType
     */
    public function setCOBRA_Eligibility_Data(array $cOBRA_Eligibility_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($cOBRA_Eligibility_DataArrayErrorMessage = self::validateCOBRA_Eligibility_DataForArrayConstraintsFromSetCOBRA_Eligibility_Data($cOBRA_Eligibility_Data))) {
            throw new \InvalidArgumentException($cOBRA_Eligibility_DataArrayErrorMessage, __LINE__);
        }
        $this->COBRA_Eligibility_Data = $cOBRA_Eligibility_Data;
        return $this;
    }
    /**
     * Add item to COBRA_Eligibility_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\COBRA_Eligibility_DataType $item
     * @return \StructType\Dependent_Coverage_DataType
     */
    public function addToCOBRA_Eligibility_Data(\StructType\COBRA_Eligibility_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\COBRA_Eligibility_DataType) {
            throw new \InvalidArgumentException(sprintf('The COBRA_Eligibility_Data property can only contain items of type \StructType\COBRA_Eligibility_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->COBRA_Eligibility_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Dependent_Coverage_DataType
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
