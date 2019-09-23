<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Person_Photo_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains data for adding or updating a person's photo.
 * @subpackage Structs
 */
class Change_Person_Photo_DataType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique person reference for the person whose photo is being updated.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\RoleObjectType
     */
    public $Person_Reference;
    /**
     * The Universal_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique universal identifier reference for the person whose photo is being updated.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Universal_IdentifierObjectType
     */
    public $Universal_ID_Reference;
    /**
     * The Photo_Data
     * @var \WorkdayWsdl\\StructType\Person_Photo_DataType
     */
    public $Photo_Data;
    /**
     * Constructor method for Change_Person_Photo_DataType
     * @uses Change_Person_Photo_DataType::setPerson_Reference()
     * @uses Change_Person_Photo_DataType::setUniversal_ID_Reference()
     * @uses Change_Person_Photo_DataType::setPhoto_Data()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @param \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference
     * @param \WorkdayWsdl\\StructType\Person_Photo_DataType $photo_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null, \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference = null, \WorkdayWsdl\\StructType\Person_Photo_DataType $photo_Data = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setUniversal_ID_Reference($universal_ID_Reference)
            ->setPhoto_Data($photo_Data);
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
     * @return \WorkdayWsdl\\StructType\Change_Person_Photo_DataType
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
     * @return \WorkdayWsdl\\StructType\Change_Person_Photo_DataType
     */
    public function setUniversal_ID_Reference(\WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference = null)
    {
        $this->Universal_ID_Reference = $universal_ID_Reference;
        return $this;
    }
    /**
     * Get Photo_Data value
     * @return \WorkdayWsdl\\StructType\Person_Photo_DataType|null
     */
    public function getPhoto_Data()
    {
        return $this->Photo_Data;
    }
    /**
     * Set Photo_Data value
     * @param \WorkdayWsdl\\StructType\Person_Photo_DataType $photo_Data
     * @return \WorkdayWsdl\\StructType\Change_Person_Photo_DataType
     */
    public function setPhoto_Data(\WorkdayWsdl\\StructType\Person_Photo_DataType $photo_Data = null)
    {
        $this->Photo_Data = $photo_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Person_Photo_DataType
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
