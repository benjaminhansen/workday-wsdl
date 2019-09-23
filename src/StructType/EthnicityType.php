<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EthnicityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Ethnicity data.
 * @subpackage Structs
 */
class EthnicityType extends AbstractStructBase
{
    /**
     * The Ethnicity_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an Ethnicity.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EthnicityObjectType
     */
    public $Ethnicity_Reference;
    /**
     * The Ethnicity_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the detailed information about an Ethnicity.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Ethnicity_DataType
     */
    public $Ethnicity_Data;
    /**
     * Constructor method for EthnicityType
     * @uses EthnicityType::setEthnicity_Reference()
     * @uses EthnicityType::setEthnicity_Data()
     * @param \WorkdayWsdl\\StructType\EthnicityObjectType $ethnicity_Reference
     * @param \WorkdayWsdl\\StructType\Ethnicity_DataType $ethnicity_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\EthnicityObjectType $ethnicity_Reference = null, \WorkdayWsdl\\StructType\Ethnicity_DataType $ethnicity_Data = null)
    {
        $this
            ->setEthnicity_Reference($ethnicity_Reference)
            ->setEthnicity_Data($ethnicity_Data);
    }
    /**
     * Get Ethnicity_Reference value
     * @return \WorkdayWsdl\\StructType\EthnicityObjectType|null
     */
    public function getEthnicity_Reference()
    {
        return $this->Ethnicity_Reference;
    }
    /**
     * Set Ethnicity_Reference value
     * @param \WorkdayWsdl\\StructType\EthnicityObjectType $ethnicity_Reference
     * @return \WorkdayWsdl\\StructType\EthnicityType
     */
    public function setEthnicity_Reference(\WorkdayWsdl\\StructType\EthnicityObjectType $ethnicity_Reference = null)
    {
        $this->Ethnicity_Reference = $ethnicity_Reference;
        return $this;
    }
    /**
     * Get Ethnicity_Data value
     * @return \WorkdayWsdl\\StructType\Ethnicity_DataType|null
     */
    public function getEthnicity_Data()
    {
        return $this->Ethnicity_Data;
    }
    /**
     * Set Ethnicity_Data value
     * @param \WorkdayWsdl\\StructType\Ethnicity_DataType $ethnicity_Data
     * @return \WorkdayWsdl\\StructType\EthnicityType
     */
    public function setEthnicity_Data(\WorkdayWsdl\\StructType\Ethnicity_DataType $ethnicity_Data = null)
    {
        $this->Ethnicity_Data = $ethnicity_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\EthnicityType
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
