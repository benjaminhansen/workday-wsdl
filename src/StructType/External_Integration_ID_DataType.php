<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Integration_ID_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Integration ID Help Text
 * @subpackage Structs
 */
class External_Integration_ID_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\IDType[]
     */
    public $ID;
    /**
     * Constructor method for External_Integration_ID_DataType
     * @uses External_Integration_ID_DataType::setID()
     * @param \StructType\IDType[] $iD
     */
    public function __construct(array $iD = array())
    {
        $this
            ->setID($iD);
    }
    /**
     * Get ID value
     * @return \StructType\IDType[]|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * This method is responsible for validating the values passed to the setID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIDForArrayConstraintsFromSetID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $external_Integration_ID_DataTypeIDItem) {
            // validation for constraint: itemType
            if (!$external_Integration_ID_DataTypeIDItem instanceof \StructType\IDType) {
                $invalidValues[] = is_object($external_Integration_ID_DataTypeIDItem) ? get_class($external_Integration_ID_DataTypeIDItem) : sprintf('%s(%s)', gettype($external_Integration_ID_DataTypeIDItem), var_export($external_Integration_ID_DataTypeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ID property can only contain items of type \StructType\IDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ID value
     * @throws \InvalidArgumentException
     * @param \StructType\IDType[] $iD
     * @return \StructType\External_Integration_ID_DataType
     */
    public function setID(array $iD = array())
    {
        // validation for constraint: array
        if ('' !== ($iDArrayErrorMessage = self::validateIDForArrayConstraintsFromSetID($iD))) {
            throw new \InvalidArgumentException($iDArrayErrorMessage, __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Add item to ID value
     * @throws \InvalidArgumentException
     * @param \StructType\IDType $item
     * @return \StructType\External_Integration_ID_DataType
     */
    public function addToID(\StructType\IDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\IDType) {
            throw new \InvalidArgumentException(sprintf('The ID property can only contain items of type \StructType\IDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_Integration_ID_DataType
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
