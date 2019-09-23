<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BeneficiaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Beneficiary data.
 * @subpackage Structs
 */
class BeneficiaryType extends AbstractStructBase
{
    /**
     * The Beneficiary_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the beneficiary.
     * @var \StructType\BeneficiaryObjectType
     */
    public $Beneficiary_Reference;
    /**
     * The Beneficiary_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the details about the beneficiary.
     * @var \StructType\Beneficiary_DataType
     */
    public $Beneficiary_Data;
    /**
     * Constructor method for BeneficiaryType
     * @uses BeneficiaryType::setBeneficiary_Reference()
     * @uses BeneficiaryType::setBeneficiary_Data()
     * @param \StructType\BeneficiaryObjectType $beneficiary_Reference
     * @param \StructType\Beneficiary_DataType $beneficiary_Data
     */
    public function __construct(\StructType\BeneficiaryObjectType $beneficiary_Reference = null, \StructType\Beneficiary_DataType $beneficiary_Data = null)
    {
        $this
            ->setBeneficiary_Reference($beneficiary_Reference)
            ->setBeneficiary_Data($beneficiary_Data);
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
     * @return \StructType\BeneficiaryType
     */
    public function setBeneficiary_Reference(\StructType\BeneficiaryObjectType $beneficiary_Reference = null)
    {
        $this->Beneficiary_Reference = $beneficiary_Reference;
        return $this;
    }
    /**
     * Get Beneficiary_Data value
     * @return \StructType\Beneficiary_DataType|null
     */
    public function getBeneficiary_Data()
    {
        return $this->Beneficiary_Data;
    }
    /**
     * Set Beneficiary_Data value
     * @param \StructType\Beneficiary_DataType $beneficiary_Data
     * @return \StructType\BeneficiaryType
     */
    public function setBeneficiary_Data(\StructType\Beneficiary_DataType $beneficiary_Data = null)
    {
        $this->Beneficiary_Data = $beneficiary_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BeneficiaryType
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
