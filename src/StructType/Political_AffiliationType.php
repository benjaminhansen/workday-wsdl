<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Political_AffiliationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the response elements for the Get Political Affiliation and Put Political Affiliation service requests.
 * @subpackage Structs
 */
class Political_AffiliationType extends AbstractStructBase
{
    /**
     * The Political_Affiliation_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Political Affiliation
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Political_AffiliationObjectType
     */
    public $Political_Affiliation_Reference;
    /**
     * The Political_Affiliation_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Political_Affiliation_DataType
     */
    public $Political_Affiliation_Data;
    /**
     * Constructor method for Political_AffiliationType
     * @uses Political_AffiliationType::setPolitical_Affiliation_Reference()
     * @uses Political_AffiliationType::setPolitical_Affiliation_Data()
     * @param \WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @param \WorkdayWsdl\\StructType\Political_Affiliation_DataType $political_Affiliation_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null, \WorkdayWsdl\\StructType\Political_Affiliation_DataType $political_Affiliation_Data = null)
    {
        $this
            ->setPolitical_Affiliation_Reference($political_Affiliation_Reference)
            ->setPolitical_Affiliation_Data($political_Affiliation_Data);
    }
    /**
     * Get Political_Affiliation_Reference value
     * @return \WorkdayWsdl\\StructType\Political_AffiliationObjectType|null
     */
    public function getPolitical_Affiliation_Reference()
    {
        return $this->Political_Affiliation_Reference;
    }
    /**
     * Set Political_Affiliation_Reference value
     * @param \WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @return \WorkdayWsdl\\StructType\Political_AffiliationType
     */
    public function setPolitical_Affiliation_Reference(\WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null)
    {
        $this->Political_Affiliation_Reference = $political_Affiliation_Reference;
        return $this;
    }
    /**
     * Get Political_Affiliation_Data value
     * @return \WorkdayWsdl\\StructType\Political_Affiliation_DataType|null
     */
    public function getPolitical_Affiliation_Data()
    {
        return $this->Political_Affiliation_Data;
    }
    /**
     * Set Political_Affiliation_Data value
     * @param \WorkdayWsdl\\StructType\Political_Affiliation_DataType $political_Affiliation_Data
     * @return \WorkdayWsdl\\StructType\Political_AffiliationType
     */
    public function setPolitical_Affiliation_Data(\WorkdayWsdl\\StructType\Political_Affiliation_DataType $political_Affiliation_Data = null)
    {
        $this->Political_Affiliation_Data = $political_Affiliation_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Political_AffiliationType
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
