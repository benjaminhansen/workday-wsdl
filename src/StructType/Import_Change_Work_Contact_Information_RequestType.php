<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Import_Change_Work_Contact_Information_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Root Import Change Work Contact Information Request Element
 * @subpackage Structs
 */
class Import_Change_Work_Contact_Information_RequestType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the import work contact information event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Change_Work_Contact_Information_HV
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Work_Contact_Information_HVType[]
     */
    public $Change_Work_Contact_Information_HV;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Import_Change_Work_Contact_Information_RequestType
     * @uses Import_Change_Work_Contact_Information_RequestType::setID()
     * @uses Import_Change_Work_Contact_Information_RequestType::setChange_Work_Contact_Information_HV()
     * @uses Import_Change_Work_Contact_Information_RequestType::setVersion()
     * @param string $iD
     * @param \WorkdayWsdl\\StructType\Change_Work_Contact_Information_HVType[] $change_Work_Contact_Information_HV
     * @param string $version
     */
    public function __construct($iD = null, array $change_Work_Contact_Information_HV = array(), $version = null)
    {
        $this
            ->setID($iD)
            ->setChange_Work_Contact_Information_HV($change_Work_Contact_Information_HV)
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
     * @return \WorkdayWsdl\\StructType\Import_Change_Work_Contact_Information_RequestType
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
     * Get Change_Work_Contact_Information_HV value
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_HVType[]|null
     */
    public function getChange_Work_Contact_Information_HV()
    {
        return $this->Change_Work_Contact_Information_HV;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Work_Contact_Information_HV method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Work_Contact_Information_HV method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Work_Contact_Information_HVForArrayConstraintsFromSetChange_Work_Contact_Information_HV(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $import_Change_Work_Contact_Information_RequestTypeChange_Work_Contact_Information_HVItem) {
            // validation for constraint: itemType
            if (!$import_Change_Work_Contact_Information_RequestTypeChange_Work_Contact_Information_HVItem instanceof \WorkdayWsdl\\StructType\Change_Work_Contact_Information_HVType) {
                $invalidValues[] = is_object($import_Change_Work_Contact_Information_RequestTypeChange_Work_Contact_Information_HVItem) ? get_class($import_Change_Work_Contact_Information_RequestTypeChange_Work_Contact_Information_HVItem) : sprintf('%s(%s)', gettype($import_Change_Work_Contact_Information_RequestTypeChange_Work_Contact_Information_HVItem), var_export($import_Change_Work_Contact_Information_RequestTypeChange_Work_Contact_Information_HVItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Work_Contact_Information_HV property can only contain items of type \WorkdayWsdl\\StructType\Change_Work_Contact_Information_HVType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Work_Contact_Information_HV value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Work_Contact_Information_HVType[] $change_Work_Contact_Information_HV
     * @return \WorkdayWsdl\\StructType\Import_Change_Work_Contact_Information_RequestType
     */
    public function setChange_Work_Contact_Information_HV(array $change_Work_Contact_Information_HV = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Work_Contact_Information_HVArrayErrorMessage = self::validateChange_Work_Contact_Information_HVForArrayConstraintsFromSetChange_Work_Contact_Information_HV($change_Work_Contact_Information_HV))) {
            throw new \InvalidArgumentException($change_Work_Contact_Information_HVArrayErrorMessage, __LINE__);
        }
        $this->Change_Work_Contact_Information_HV = $change_Work_Contact_Information_HV;
        return $this;
    }
    /**
     * Add item to Change_Work_Contact_Information_HV value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Work_Contact_Information_HVType $item
     * @return \WorkdayWsdl\\StructType\Import_Change_Work_Contact_Information_RequestType
     */
    public function addToChange_Work_Contact_Information_HV(\WorkdayWsdl\\StructType\Change_Work_Contact_Information_HVType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Change_Work_Contact_Information_HVType) {
            throw new \InvalidArgumentException(sprintf('The Change_Work_Contact_Information_HV property can only contain items of type \WorkdayWsdl\\StructType\Change_Work_Contact_Information_HVType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Work_Contact_Information_HV[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Import_Change_Work_Contact_Information_RequestType
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
     * @return \WorkdayWsdl\\StructType\Import_Change_Work_Contact_Information_RequestType
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
