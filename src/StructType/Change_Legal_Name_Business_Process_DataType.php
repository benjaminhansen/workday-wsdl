<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Legal_Name_Business_Process_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Legal Name Change business process web service.
 * @subpackage Structs
 */
class Change_Legal_Name_Business_Process_DataType extends AbstractStructBase
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
     * The Universal_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Universal ID Reference for the Person that the Legal Name will be applied to.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Universal_IdentifierObjectType
     */
    public $Universal_ID_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the snapshot becomes effective.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Name_Data
     * @var \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public $Name_Data;
    /**
     * Constructor method for Change_Legal_Name_Business_Process_DataType
     * @uses Change_Legal_Name_Business_Process_DataType::setPerson_Reference()
     * @uses Change_Legal_Name_Business_Process_DataType::setUniversal_ID_Reference()
     * @uses Change_Legal_Name_Business_Process_DataType::setEffective_Date()
     * @uses Change_Legal_Name_Business_Process_DataType::setName_Data()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @param \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference
     * @param string $effective_Date
     * @param \WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null, \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference = null, $effective_Date = null, \WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Data = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setUniversal_ID_Reference($universal_ID_Reference)
            ->setEffective_Date($effective_Date)
            ->setName_Data($name_Data);
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
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType
     */
    public function setPerson_Reference(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Universal_ID_Reference value
     * @return \WorkdayWsdl\\StructType\Universal_IdentifierObjectType|null
     */
    public function getUniversal_ID_Reference()
    {
        return $this->Universal_ID_Reference;
    }
    /**
     * Set Universal_ID_Reference value
     * @param \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType
     */
    public function setUniversal_ID_Reference(\WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference = null)
    {
        $this->Universal_ID_Reference = $universal_ID_Reference;
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Name_Data value
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType|null
     */
    public function getName_Data()
    {
        return $this->Name_Data;
    }
    /**
     * Set Name_Data value
     * @param \WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Data
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType
     */
    public function setName_Data(\WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Data = null)
    {
        $this->Name_Data = $name_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Business_Process_DataType
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
