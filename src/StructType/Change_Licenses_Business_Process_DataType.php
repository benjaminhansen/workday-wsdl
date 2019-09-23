<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Licenses_Business_Process_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the License Identifier data.
 * @subpackage Structs
 */
class Change_Licenses_Business_Process_DataType extends AbstractStructBase
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
     * - documentation: Universal ID reference for the person that the license identifier(s) will be applied to.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Universal_IdentifierObjectType
     */
    public $Universal_ID_Reference;
    /**
     * The License_Identification_Data
     * @var \WorkdayWsdl\\StructType\License_Identification_DataType
     */
    public $License_Identification_Data;
    /**
     * Constructor method for Change_Licenses_Business_Process_DataType
     * @uses Change_Licenses_Business_Process_DataType::setPerson_Reference()
     * @uses Change_Licenses_Business_Process_DataType::setUniversal_ID_Reference()
     * @uses Change_Licenses_Business_Process_DataType::setLicense_Identification_Data()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @param \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference
     * @param \WorkdayWsdl\\StructType\License_Identification_DataType $license_Identification_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null, \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference = null, \WorkdayWsdl\\StructType\License_Identification_DataType $license_Identification_Data = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setUniversal_ID_Reference($universal_ID_Reference)
            ->setLicense_Identification_Data($license_Identification_Data);
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
     * @return \WorkdayWsdl\\StructType\Change_Licenses_Business_Process_DataType
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
     * @return \WorkdayWsdl\\StructType\Change_Licenses_Business_Process_DataType
     */
    public function setUniversal_ID_Reference(\WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference = null)
    {
        $this->Universal_ID_Reference = $universal_ID_Reference;
        return $this;
    }
    /**
     * Get License_Identification_Data value
     * @return \WorkdayWsdl\\StructType\License_Identification_DataType|null
     */
    public function getLicense_Identification_Data()
    {
        return $this->License_Identification_Data;
    }
    /**
     * Set License_Identification_Data value
     * @param \WorkdayWsdl\\StructType\License_Identification_DataType $license_Identification_Data
     * @return \WorkdayWsdl\\StructType\Change_Licenses_Business_Process_DataType
     */
    public function setLicense_Identification_Data(\WorkdayWsdl\\StructType\License_Identification_DataType $license_Identification_Data = null)
    {
        $this->License_Identification_Data = $license_Identification_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Licenses_Business_Process_DataType
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
