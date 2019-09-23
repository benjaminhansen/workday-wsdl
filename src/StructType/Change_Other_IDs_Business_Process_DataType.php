<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Other_IDs_Business_Process_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Other Identifier Data.
 * @subpackage Structs
 */
class Change_Other_IDs_Business_Process_DataType extends AbstractStructBase
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
     * The Universal_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Universal ID Reference for the Person that the Passport and Visa will be applied to.
     * - minOccurs: 0
     * @var \StructType\Universal_IdentifierObjectType
     */
    public $Universal_ID_Reference;
    /**
     * The Custom_Identification_Data
     * @var \StructType\Custom_Identification_DataType
     */
    public $Custom_Identification_Data;
    /**
     * Constructor method for Change_Other_IDs_Business_Process_DataType
     * @uses Change_Other_IDs_Business_Process_DataType::setPerson_Reference()
     * @uses Change_Other_IDs_Business_Process_DataType::setUniversal_ID_Reference()
     * @uses Change_Other_IDs_Business_Process_DataType::setCustom_Identification_Data()
     * @param \StructType\RoleObjectType $person_Reference
     * @param \StructType\Universal_IdentifierObjectType $universal_ID_Reference
     * @param \StructType\Custom_Identification_DataType $custom_Identification_Data
     */
    public function __construct(\StructType\RoleObjectType $person_Reference = null, \StructType\Universal_IdentifierObjectType $universal_ID_Reference = null, \StructType\Custom_Identification_DataType $custom_Identification_Data = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setUniversal_ID_Reference($universal_ID_Reference)
            ->setCustom_Identification_Data($custom_Identification_Data);
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
     * @return \StructType\Change_Other_IDs_Business_Process_DataType
     */
    public function setPerson_Reference(\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Universal_ID_Reference value
     * @return \StructType\Universal_IdentifierObjectType|null
     */
    public function getUniversal_ID_Reference()
    {
        return $this->Universal_ID_Reference;
    }
    /**
     * Set Universal_ID_Reference value
     * @param \StructType\Universal_IdentifierObjectType $universal_ID_Reference
     * @return \StructType\Change_Other_IDs_Business_Process_DataType
     */
    public function setUniversal_ID_Reference(\StructType\Universal_IdentifierObjectType $universal_ID_Reference = null)
    {
        $this->Universal_ID_Reference = $universal_ID_Reference;
        return $this;
    }
    /**
     * Get Custom_Identification_Data value
     * @return \StructType\Custom_Identification_DataType|null
     */
    public function getCustom_Identification_Data()
    {
        return $this->Custom_Identification_Data;
    }
    /**
     * Set Custom_Identification_Data value
     * @param \StructType\Custom_Identification_DataType $custom_Identification_Data
     * @return \StructType\Change_Other_IDs_Business_Process_DataType
     */
    public function setCustom_Identification_Data(\StructType\Custom_Identification_DataType $custom_Identification_Data = null)
    {
        $this->Custom_Identification_Data = $custom_Identification_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Other_IDs_Business_Process_DataType
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
