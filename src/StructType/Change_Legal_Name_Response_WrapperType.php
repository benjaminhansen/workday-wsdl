<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Legal_Name_Response_WrapperType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Change Legal Name Business Process Data element. This is the element that contains data to load.
 * @subpackage Structs
 */
class Change_Legal_Name_Response_WrapperType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the ID of the person through one of its active person types, such as worker, student, affiliate, external committee member, and so on. The ID consists of a type attribute, which should be set to one of either
     * "Employee_ID", "Contingent_Worker_ID", "Student_ID", etc, and a value attribute, such as "04345".
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\RoleObjectType
     */
    public $Person_Reference;
    /**
     * The Change_Legal_Name_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType
     */
    public $Change_Legal_Name_Data;
    /**
     * Constructor method for Change_Legal_Name_Response_WrapperType
     * @uses Change_Legal_Name_Response_WrapperType::setPerson_Reference()
     * @uses Change_Legal_Name_Response_WrapperType::setChange_Legal_Name_Data()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @param \WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType $change_Legal_Name_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null, \WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType $change_Legal_Name_Data = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setChange_Legal_Name_Data($change_Legal_Name_Data);
    }
    /**
     * Get Person_Reference value
     * @return \WorkdayWsdl\\StructType\RoleObjectType|null
     */
    public function getPerson_Reference()
    {
        return $this->Person_Reference;
    }
    /**
     * Set Person_Reference value
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType
     */
    public function setPerson_Reference(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Change_Legal_Name_Data value
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType|null
     */
    public function getChange_Legal_Name_Data()
    {
        return $this->Change_Legal_Name_Data;
    }
    /**
     * Set Change_Legal_Name_Data value
     * @param \WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType $change_Legal_Name_Data
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType
     */
    public function setChange_Legal_Name_Data(\WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType $change_Legal_Name_Data = null)
    {
        $this->Change_Legal_Name_Data = $change_Legal_Name_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType
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
