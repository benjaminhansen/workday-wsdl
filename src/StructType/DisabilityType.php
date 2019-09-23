<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisabilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the response elements for the Get Disabilities and Put Disability service requests.
 * @subpackage Structs
 */
class DisabilityType extends AbstractStructBase
{
    /**
     * The Disability_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an Disability.
     * - minOccurs: 0
     * @var \StructType\DisabilityObjectType
     */
    public $Disability_Reference;
    /**
     * The Disability_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Disability data.
     * - minOccurs: 0
     * @var \StructType\Disability_DataType
     */
    public $Disability_Data;
    /**
     * Constructor method for DisabilityType
     * @uses DisabilityType::setDisability_Reference()
     * @uses DisabilityType::setDisability_Data()
     * @param \StructType\DisabilityObjectType $disability_Reference
     * @param \StructType\Disability_DataType $disability_Data
     */
    public function __construct(\StructType\DisabilityObjectType $disability_Reference = null, \StructType\Disability_DataType $disability_Data = null)
    {
        $this
            ->setDisability_Reference($disability_Reference)
            ->setDisability_Data($disability_Data);
    }
    /**
     * Get Disability_Reference value
     * @return \StructType\DisabilityObjectType|null
     */
    public function getDisability_Reference()
    {
        return $this->Disability_Reference;
    }
    /**
     * Set Disability_Reference value
     * @param \StructType\DisabilityObjectType $disability_Reference
     * @return \StructType\DisabilityType
     */
    public function setDisability_Reference(\StructType\DisabilityObjectType $disability_Reference = null)
    {
        $this->Disability_Reference = $disability_Reference;
        return $this;
    }
    /**
     * Get Disability_Data value
     * @return \StructType\Disability_DataType|null
     */
    public function getDisability_Data()
    {
        return $this->Disability_Data;
    }
    /**
     * Set Disability_Data value
     * @param \StructType\Disability_DataType $disability_Data
     * @return \StructType\DisabilityType
     */
    public function setDisability_Data(\StructType\Disability_DataType $disability_Data = null)
    {
        $this->Disability_Data = $disability_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DisabilityType
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
