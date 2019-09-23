<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_PhotoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Submit Person Photo Data element.
 * @subpackage Structs
 */
class Person_PhotoType extends AbstractStructBase
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
     * The Person_Photo_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Person_Photo_DataType
     */
    public $Person_Photo_Data;
    /**
     * Constructor method for Person_PhotoType
     * @uses Person_PhotoType::setPerson_Reference()
     * @uses Person_PhotoType::setPerson_Photo_Data()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @param \WorkdayWsdl\\StructType\Change_Person_Photo_DataType $person_Photo_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null, \WorkdayWsdl\\StructType\Change_Person_Photo_DataType $person_Photo_Data = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setPerson_Photo_Data($person_Photo_Data);
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
     * @return \WorkdayWsdl\\StructType\Person_PhotoType
     */
    public function setPerson_Reference(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Person_Photo_Data value
     * @return \WorkdayWsdl\\StructType\Change_Person_Photo_DataType|null
     */
    public function getPerson_Photo_Data()
    {
        return $this->Person_Photo_Data;
    }
    /**
     * Set Person_Photo_Data value
     * @param \WorkdayWsdl\\StructType\Change_Person_Photo_DataType $person_Photo_Data
     * @return \WorkdayWsdl\\StructType\Person_PhotoType
     */
    public function setPerson_Photo_Data(\WorkdayWsdl\\StructType\Change_Person_Photo_DataType $person_Photo_Data = null)
    {
        $this->Person_Photo_Data = $person_Photo_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Person_PhotoType
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
