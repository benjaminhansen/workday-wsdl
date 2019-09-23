<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Beneficiary_Designation_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the beneficiary that the coverage allocation is for and the details about the allocation.
 * @subpackage Structs
 */
class Beneficiary_Designation_DataType extends AbstractStructBase
{
    /**
     * The Beneficiary_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the beneficiary.
     * @var \StructType\BeneficiaryObjectType
     */
    public $Beneficiary_Reference;
    /**
     * The Original_Coverage_Begin_Date
     * Meta information extracted from the WSDL
     * - documentation: The original date that coverage began.
     * - maxOccurs: 1
     * @var string
     */
    public $Original_Coverage_Begin_Date;
    /**
     * The Coverage_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The end date of the coverage.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Coverage_End_Date;
    /**
     * The Beneficiary_Allocation_Data
     * @var \StructType\Beneficiary_Allocation_DataType
     */
    public $Beneficiary_Allocation_Data;
    /**
     * Constructor method for Beneficiary_Designation_DataType
     * @uses Beneficiary_Designation_DataType::setBeneficiary_Reference()
     * @uses Beneficiary_Designation_DataType::setOriginal_Coverage_Begin_Date()
     * @uses Beneficiary_Designation_DataType::setCoverage_End_Date()
     * @uses Beneficiary_Designation_DataType::setBeneficiary_Allocation_Data()
     * @param \StructType\BeneficiaryObjectType $beneficiary_Reference
     * @param string $original_Coverage_Begin_Date
     * @param string $coverage_End_Date
     * @param \StructType\Beneficiary_Allocation_DataType $beneficiary_Allocation_Data
     */
    public function __construct(\StructType\BeneficiaryObjectType $beneficiary_Reference = null, $original_Coverage_Begin_Date = null, $coverage_End_Date = null, \StructType\Beneficiary_Allocation_DataType $beneficiary_Allocation_Data = null)
    {
        $this
            ->setBeneficiary_Reference($beneficiary_Reference)
            ->setOriginal_Coverage_Begin_Date($original_Coverage_Begin_Date)
            ->setCoverage_End_Date($coverage_End_Date)
            ->setBeneficiary_Allocation_Data($beneficiary_Allocation_Data);
    }
    /**
     * Get Beneficiary_Reference value
     * @return \StructType\BeneficiaryObjectType|null
     */
    public function getBeneficiary_Reference()
    {
        return $this->Beneficiary_Reference;
    }
    /**
     * Set Beneficiary_Reference value
     * @param \StructType\BeneficiaryObjectType $beneficiary_Reference
     * @return \StructType\Beneficiary_Designation_DataType
     */
    public function setBeneficiary_Reference(\StructType\BeneficiaryObjectType $beneficiary_Reference = null)
    {
        $this->Beneficiary_Reference = $beneficiary_Reference;
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
     * @return \StructType\Beneficiary_Designation_DataType
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
     * @return \StructType\Beneficiary_Designation_DataType
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
     * Get Beneficiary_Allocation_Data value
     * @return \StructType\Beneficiary_Allocation_DataType|null
     */
    public function getBeneficiary_Allocation_Data()
    {
        return $this->Beneficiary_Allocation_Data;
    }
    /**
     * Set Beneficiary_Allocation_Data value
     * @param \StructType\Beneficiary_Allocation_DataType $beneficiary_Allocation_Data
     * @return \StructType\Beneficiary_Designation_DataType
     */
    public function setBeneficiary_Allocation_Data(\StructType\Beneficiary_Allocation_DataType $beneficiary_Allocation_Data = null)
    {
        $this->Beneficiary_Allocation_Data = $beneficiary_Allocation_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Beneficiary_Designation_DataType
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
