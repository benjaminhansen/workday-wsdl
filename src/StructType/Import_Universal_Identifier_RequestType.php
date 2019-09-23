<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Import_Universal_Identifier_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Import Universal Identifier Request.
 * @subpackage Structs
 */
class Import_Universal_Identifier_RequestType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: ID for Universal Identifier Data Load
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Universal_Identifier_Data_HV
     * Meta information extracted from the WSDL
     * - documentation: Universal Identifier High Volume
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Universal_Identifier_Data_HVType[]
     */
    public $Universal_Identifier_Data_HV;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Import_Universal_Identifier_RequestType
     * @uses Import_Universal_Identifier_RequestType::setID()
     * @uses Import_Universal_Identifier_RequestType::setUniversal_Identifier_Data_HV()
     * @uses Import_Universal_Identifier_RequestType::setVersion()
     * @param string $iD
     * @param \WorkdayWsdl\\StructType\Universal_Identifier_Data_HVType[] $universal_Identifier_Data_HV
     * @param string $version
     */
    public function __construct($iD = null, array $universal_Identifier_Data_HV = array(), $version = null)
    {
        $this
            ->setID($iD)
            ->setUniversal_Identifier_Data_HV($universal_Identifier_Data_HV)
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
     * @return \WorkdayWsdl\\StructType\Import_Universal_Identifier_RequestType
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
     * Get Universal_Identifier_Data_HV value
     * @return \WorkdayWsdl\\StructType\Universal_Identifier_Data_HVType[]|null
     */
    public function getUniversal_Identifier_Data_HV()
    {
        return $this->Universal_Identifier_Data_HV;
    }
    /**
     * This method is responsible for validating the values passed to the setUniversal_Identifier_Data_HV method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversal_Identifier_Data_HV method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUniversal_Identifier_Data_HVForArrayConstraintsFromSetUniversal_Identifier_Data_HV(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $import_Universal_Identifier_RequestTypeUniversal_Identifier_Data_HVItem) {
            // validation for constraint: itemType
            if (!$import_Universal_Identifier_RequestTypeUniversal_Identifier_Data_HVItem instanceof \WorkdayWsdl\\StructType\Universal_Identifier_Data_HVType) {
                $invalidValues[] = is_object($import_Universal_Identifier_RequestTypeUniversal_Identifier_Data_HVItem) ? get_class($import_Universal_Identifier_RequestTypeUniversal_Identifier_Data_HVItem) : sprintf('%s(%s)', gettype($import_Universal_Identifier_RequestTypeUniversal_Identifier_Data_HVItem), var_export($import_Universal_Identifier_RequestTypeUniversal_Identifier_Data_HVItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Universal_Identifier_Data_HV property can only contain items of type \WorkdayWsdl\\StructType\Universal_Identifier_Data_HVType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Universal_Identifier_Data_HV value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Universal_Identifier_Data_HVType[] $universal_Identifier_Data_HV
     * @return \WorkdayWsdl\\StructType\Import_Universal_Identifier_RequestType
     */
    public function setUniversal_Identifier_Data_HV(array $universal_Identifier_Data_HV = array())
    {
        // validation for constraint: array
        if ('' !== ($universal_Identifier_Data_HVArrayErrorMessage = self::validateUniversal_Identifier_Data_HVForArrayConstraintsFromSetUniversal_Identifier_Data_HV($universal_Identifier_Data_HV))) {
            throw new \InvalidArgumentException($universal_Identifier_Data_HVArrayErrorMessage, __LINE__);
        }
        $this->Universal_Identifier_Data_HV = $universal_Identifier_Data_HV;
        return $this;
    }
    /**
     * Add item to Universal_Identifier_Data_HV value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Universal_Identifier_Data_HVType $item
     * @return \WorkdayWsdl\\StructType\Import_Universal_Identifier_RequestType
     */
    public function addToUniversal_Identifier_Data_HV(\WorkdayWsdl\\StructType\Universal_Identifier_Data_HVType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Universal_Identifier_Data_HVType) {
            throw new \InvalidArgumentException(sprintf('The Universal_Identifier_Data_HV property can only contain items of type \WorkdayWsdl\\StructType\Universal_Identifier_Data_HVType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Universal_Identifier_Data_HV[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Import_Universal_Identifier_RequestType
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
     * @return \WorkdayWsdl\\StructType\Import_Universal_Identifier_RequestType
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
