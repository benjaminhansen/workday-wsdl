<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Import_Person_Photo_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Top-level Import Person Photo request data element
 * @subpackage Structs
 */
class Import_Person_Photo_RequestType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the import person photo change event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Person_Photo_HV_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Person_Photo_HV_DataType[]
     */
    public $Person_Photo_HV_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Import_Person_Photo_RequestType
     * @uses Import_Person_Photo_RequestType::setID()
     * @uses Import_Person_Photo_RequestType::setPerson_Photo_HV_Data()
     * @uses Import_Person_Photo_RequestType::setVersion()
     * @param string $iD
     * @param \WorkdayWsdl\\StructType\Change_Person_Photo_HV_DataType[] $person_Photo_HV_Data
     * @param string $version
     */
    public function __construct($iD = null, array $person_Photo_HV_Data = array(), $version = null)
    {
        $this
            ->setID($iD)
            ->setPerson_Photo_HV_Data($person_Photo_HV_Data)
            ->setVersion($version);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \WorkdayWsdl\\StructType\Import_Person_Photo_RequestType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Person_Photo_HV_Data value
     * @return \WorkdayWsdl\\StructType\Change_Person_Photo_HV_DataType[]|null
     */
    public function getPerson_Photo_HV_Data()
    {
        return $this->Person_Photo_HV_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPerson_Photo_HV_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson_Photo_HV_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePerson_Photo_HV_DataForArrayConstraintsFromSetPerson_Photo_HV_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $import_Person_Photo_RequestTypePerson_Photo_HV_DataItem) {
            // validation for constraint: itemType
            if (!$import_Person_Photo_RequestTypePerson_Photo_HV_DataItem instanceof \WorkdayWsdl\\StructType\Change_Person_Photo_HV_DataType) {
                $invalidValues[] = is_object($import_Person_Photo_RequestTypePerson_Photo_HV_DataItem) ? get_class($import_Person_Photo_RequestTypePerson_Photo_HV_DataItem) : sprintf('%s(%s)', gettype($import_Person_Photo_RequestTypePerson_Photo_HV_DataItem), var_export($import_Person_Photo_RequestTypePerson_Photo_HV_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Person_Photo_HV_Data property can only contain items of type \WorkdayWsdl\\StructType\Change_Person_Photo_HV_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Person_Photo_HV_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Person_Photo_HV_DataType[] $person_Photo_HV_Data
     * @return \WorkdayWsdl\\StructType\Import_Person_Photo_RequestType
     */
    public function setPerson_Photo_HV_Data(array $person_Photo_HV_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($person_Photo_HV_DataArrayErrorMessage = self::validatePerson_Photo_HV_DataForArrayConstraintsFromSetPerson_Photo_HV_Data($person_Photo_HV_Data))) {
            throw new \InvalidArgumentException($person_Photo_HV_DataArrayErrorMessage, __LINE__);
        }
        $this->Person_Photo_HV_Data = $person_Photo_HV_Data;
        return $this;
    }
    /**
     * Add item to Person_Photo_HV_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Person_Photo_HV_DataType $item
     * @return \WorkdayWsdl\\StructType\Import_Person_Photo_RequestType
     */
    public function addToPerson_Photo_HV_Data(\WorkdayWsdl\\StructType\Change_Person_Photo_HV_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Change_Person_Photo_HV_DataType) {
            throw new \InvalidArgumentException(sprintf('The Person_Photo_HV_Data property can only contain items of type \WorkdayWsdl\\StructType\Change_Person_Photo_HV_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Person_Photo_HV_Data[] = $item;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Import_Person_Photo_RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Import_Person_Photo_RequestType
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
