<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Change_Home_Contact_Information_Request_CriteriaType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Allows retrieving home contact information based on request criteria. Request Criteria is only used when Request References is not provided.
 * @subpackage Structs
 */
class Get_Change_Home_Contact_Information_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Person_Type_Criteria_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Person_Type_CriteriaType
     */
    public $Person_Type_Criteria_Data;
    /**
     * Constructor method for Get_Change_Home_Contact_Information_Request_CriteriaType
     * @uses Get_Change_Home_Contact_Information_Request_CriteriaType::setPerson_Type_Criteria_Data()
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
     * @return \StructType\Get_Change_Home_Contact_Information_Request_CriteriaType
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
     * @return \StructType\Get_Change_Home_Contact_Information_Request_CriteriaType
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
