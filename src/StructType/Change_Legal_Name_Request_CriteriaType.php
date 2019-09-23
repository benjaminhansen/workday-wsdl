<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Legal_Name_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Invalid request filter provided. Include at least one person type in the request | Allows retrieving Legal Name based on request criteria.
 * @subpackage Structs
 */
class Change_Legal_Name_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Person_Type_Criteria_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Type_CriteriaType
     */
    public $Person_Type_Criteria_Data;
    /**
     * Constructor method for Change_Legal_Name_Request_CriteriaType
     * @uses Change_Legal_Name_Request_CriteriaType::setPerson_Type_Criteria_Data()
     * @param \WorkdayWsdl\\StructType\Person_Type_CriteriaType $person_Type_Criteria_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Person_Type_CriteriaType $person_Type_Criteria_Data = null)
    {
        $this
            ->setPerson_Type_Criteria_Data($person_Type_Criteria_Data);
    }
    /**
     * Get Person_Type_Criteria_Data value
     * @return \WorkdayWsdl\\StructType\Person_Type_CriteriaType|null
     */
    public function getPerson_Type_Criteria_Data()
    {
        return $this->Person_Type_Criteria_Data;
    }
    /**
     * Set Person_Type_Criteria_Data value
     * @param \WorkdayWsdl\\StructType\Person_Type_CriteriaType $person_Type_Criteria_Data
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Request_CriteriaType
     */
    public function setPerson_Type_Criteria_Data(\WorkdayWsdl\\StructType\Person_Type_CriteriaType $person_Type_Criteria_Data = null)
    {
        $this->Person_Type_Criteria_Data = $person_Type_Criteria_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Request_CriteriaType
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
