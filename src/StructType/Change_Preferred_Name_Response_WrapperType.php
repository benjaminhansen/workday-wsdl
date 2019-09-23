<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Preferred_Name_Response_WrapperType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Change Preferred Name Business Process Data element. This is the element that contains data to load.
 * @subpackage Structs
 */
class Change_Preferred_Name_Response_WrapperType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the ID of the person through one of its active person types, such as worker, student, affiliate, external committee member, and so on. The ID consists of a type attribute, which should be set to one of either
     * "Employee_ID", "Contingent_Worker_ID", "Student_ID", etc, and a value attribute, such as "04345".
     * - minOccurs: 0
     * @var \StructType\RoleObjectType
     */
    public $Person_Reference;
    /**
     * The Change_Preferred_Name_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Change_Preferred_Name_Business_Process_DataType
     */
    public $Change_Preferred_Name_Data;
    /**
     * Constructor method for Change_Preferred_Name_Response_WrapperType
     * @uses Change_Preferred_Name_Response_WrapperType::setPerson_Reference()
     * @uses Change_Preferred_Name_Response_WrapperType::setChange_Preferred_Name_Data()
     * @param \StructType\RoleObjectType $person_Reference
     * @param \StructType\Change_Preferred_Name_Business_Process_DataType $change_Preferred_Name_Data
     */
    public function __construct(\StructType\RoleObjectType $person_Reference = null, \StructType\Change_Preferred_Name_Business_Process_DataType $change_Preferred_Name_Data = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setChange_Preferred_Name_Data($change_Preferred_Name_Data);
    }
    /**
     * Get Person_Reference value
     * @return \StructType\RoleObjectType|null
     */
    public function getPerson_Reference()
    {
        return $this->Person_Reference;
    }
    /**
     * Set Person_Reference value
     * @param \StructType\RoleObjectType $person_Reference
     * @return \StructType\Change_Preferred_Name_Response_WrapperType
     */
    public function setPerson_Reference(\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Change_Preferred_Name_Data value
     * @return \StructType\Change_Preferred_Name_Business_Process_DataType|null
     */
    public function getChange_Preferred_Name_Data()
    {
        return $this->Change_Preferred_Name_Data;
    }
    /**
     * Set Change_Preferred_Name_Data value
     * @param \StructType\Change_Preferred_Name_Business_Process_DataType $change_Preferred_Name_Data
     * @return \StructType\Change_Preferred_Name_Response_WrapperType
     */
    public function setChange_Preferred_Name_Data(\StructType\Change_Preferred_Name_Business_Process_DataType $change_Preferred_Name_Data = null)
    {
        $this->Change_Preferred_Name_Data = $change_Preferred_Name_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Preferred_Name_Response_WrapperType
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
