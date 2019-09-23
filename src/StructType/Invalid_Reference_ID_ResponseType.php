<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Invalid_Reference_ID_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Invalid Reference ID Response
 * @subpackage Structs
 */
class Invalid_Reference_ID_ResponseType extends AbstractStructBase
{
    /**
     * The Invalid_Reference
     * Meta information extracted from the WSDL
     * - documentation: Invalid Reference ID Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Invalid_Reference_ID_DataType[]
     */
    public $Invalid_Reference;
    /**
     * Constructor method for Invalid_Reference_ID_ResponseType
     * @uses Invalid_Reference_ID_ResponseType::setInvalid_Reference()
     * @param \StructType\Invalid_Reference_ID_DataType[] $invalid_Reference
     */
    public function __construct(array $invalid_Reference = array())
    {
        $this
            ->setInvalid_Reference($invalid_Reference);
    }
    /**
     * Get Invalid_Reference value
     * @return \StructType\Invalid_Reference_ID_DataType[]|null
     */
    public function getInvalid_Reference()
    {
        return $this->Invalid_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setInvalid_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvalid_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvalid_ReferenceForArrayConstraintsFromSetInvalid_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $invalid_Reference_ID_ResponseTypeInvalid_ReferenceItem) {
            // validation for constraint: itemType
            if (!$invalid_Reference_ID_ResponseTypeInvalid_ReferenceItem instanceof \StructType\Invalid_Reference_ID_DataType) {
                $invalidValues[] = is_object($invalid_Reference_ID_ResponseTypeInvalid_ReferenceItem) ? get_class($invalid_Reference_ID_ResponseTypeInvalid_ReferenceItem) : sprintf('%s(%s)', gettype($invalid_Reference_ID_ResponseTypeInvalid_ReferenceItem), var_export($invalid_Reference_ID_ResponseTypeInvalid_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Invalid_Reference property can only contain items of type \StructType\Invalid_Reference_ID_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Invalid_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Invalid_Reference_ID_DataType[] $invalid_Reference
     * @return \StructType\Invalid_Reference_ID_ResponseType
     */
    public function setInvalid_Reference(array $invalid_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($invalid_ReferenceArrayErrorMessage = self::validateInvalid_ReferenceForArrayConstraintsFromSetInvalid_Reference($invalid_Reference))) {
            throw new \InvalidArgumentException($invalid_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Invalid_Reference = $invalid_Reference;
        return $this;
    }
    /**
     * Add item to Invalid_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Invalid_Reference_ID_DataType $item
     * @return \StructType\Invalid_Reference_ID_ResponseType
     */
    public function addToInvalid_Reference(\StructType\Invalid_Reference_ID_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Invalid_Reference_ID_DataType) {
            throw new \InvalidArgumentException(sprintf('The Invalid_Reference property can only contain items of type \StructType\Invalid_Reference_ID_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Invalid_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Invalid_Reference_ID_ResponseType
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
