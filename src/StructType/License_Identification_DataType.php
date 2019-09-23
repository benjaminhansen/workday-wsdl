<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for License_Identification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for License Identification Data. Includes License Identifiers.
 * @subpackage Structs
 */
class License_Identification_DataType extends AbstractStructBase
{
    /**
     * The License_ID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\License_IDType[]
     */
    public $License_ID;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: If Replace All is set to True, a full sync is performed after you submit the web service. Set to False if you want to preserve the existing data and only add, edit, or remove specific reference ids. Note: If you leave this boolean
     * value blank it defaults to True to preserve the existing Replace All functionality in older versions of this web service for web service users depending on the default behavior.
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for License_Identification_DataType
     * @uses License_Identification_DataType::setLicense_ID()
     * @uses License_Identification_DataType::setReplace_All()
     * @param \WorkdayWsdl\\StructType\License_IDType[] $license_ID
     * @param bool $replace_All
     */
    public function __construct(array $license_ID = array(), $replace_All = null)
    {
        $this
            ->setLicense_ID($license_ID)
            ->setReplace_All($replace_All);
    }
    /**
     * Get License_ID value
     * @return \WorkdayWsdl\\StructType\License_IDType[]|null
     */
    public function getLicense_ID()
    {
        return $this->License_ID;
    }
    /**
     * This method is responsible for validating the values passed to the setLicense_ID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLicense_ID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLicense_IDForArrayConstraintsFromSetLicense_ID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $license_Identification_DataTypeLicense_IDItem) {
            // validation for constraint: itemType
            if (!$license_Identification_DataTypeLicense_IDItem instanceof \WorkdayWsdl\\StructType\License_IDType) {
                $invalidValues[] = is_object($license_Identification_DataTypeLicense_IDItem) ? get_class($license_Identification_DataTypeLicense_IDItem) : sprintf('%s(%s)', gettype($license_Identification_DataTypeLicense_IDItem), var_export($license_Identification_DataTypeLicense_IDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The License_ID property can only contain items of type \WorkdayWsdl\\StructType\License_IDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set License_ID value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\License_IDType[] $license_ID
     * @return \WorkdayWsdl\\StructType\License_Identification_DataType
     */
    public function setLicense_ID(array $license_ID = array())
    {
        // validation for constraint: array
        if ('' !== ($license_IDArrayErrorMessage = self::validateLicense_IDForArrayConstraintsFromSetLicense_ID($license_ID))) {
            throw new \InvalidArgumentException($license_IDArrayErrorMessage, __LINE__);
        }
        $this->License_ID = $license_ID;
        return $this;
    }
    /**
     * Add item to License_ID value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\License_IDType $item
     * @return \WorkdayWsdl\\StructType\License_Identification_DataType
     */
    public function addToLicense_ID(\WorkdayWsdl\\StructType\License_IDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\License_IDType) {
            throw new \InvalidArgumentException(sprintf('The License_ID property can only contain items of type \WorkdayWsdl\\StructType\License_IDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->License_ID[] = $item;
        return $this;
    }
    /**
     * Get Replace_All value
     * @return bool|null
     */
    public function getReplace_All()
    {
        return $this->Replace_All;
    }
    /**
     * Set Replace_All value
     * @param bool $replace_All
     * @return \WorkdayWsdl\\StructType\License_Identification_DataType
     */
    public function setReplace_All($replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($replace_All) && !is_bool($replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replace_All, true), gettype($replace_All)), __LINE__);
        }
        $this->Replace_All = $replace_All;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\License_Identification_DataType
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
