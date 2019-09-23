<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Preferred_Name_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Invalid request filter provided. Include at least one person type in the request | Allows retrieving Preferred Name based on request criteria
 * @subpackage Structs
 */
class Change_Preferred_Name_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Person_Type_Criteria_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Person_Type_CriteriaType
     */
    public $Person_Type_Criteria_Data;
    /**
     * Constructor method for Change_Preferred_Name_Request_CriteriaType
     * @uses Change_Preferred_Name_Request_CriteriaType::setPerson_Type_Criteria_Data()
     * @param \StructType\Person_Type_CriteriaType $person_Type_Criteria_Data
     */
    public function __construct(\StructType\Person_Type_CriteriaType $person_Type_Criteria_Data = null)
    {
        $this
            ->setPerson_Type_Criteria_Data($person_Type_Criteria_Data);
    }
    /**
     * Get Person_Type_Criteria_Data value
     * @return \StructType\Person_Type_CriteriaType|null
     */
    public function getPerson_Type_Criteria_Data()
    {
        return $this->Person_Type_Criteria_Data;
    }
    /**
     * Set Person_Type_Criteria_Data value
     * @param \StructType\Person_Type_CriteriaType $person_Type_Criteria_Data
     * @return \StructType\Change_Preferred_Name_Request_CriteriaType
     */
    public function setPerson_Type_Criteria_Data(\StructType\Person_Type_CriteriaType $person_Type_Criteria_Data = null)
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
     * @return \StructType\Change_Preferred_Name_Request_CriteriaType
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
