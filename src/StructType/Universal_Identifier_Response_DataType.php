<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Universal_Identifier_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response Data
 * @subpackage Structs
 */
class Universal_Identifier_Response_DataType extends AbstractStructBase
{
    /**
     * The Universal_Identifier
     * Meta information extracted from the WSDL
     * - documentation: Universal Identifier
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Universal_IdentifierType[]
     */
    public $Universal_Identifier;
    /**
     * Constructor method for Universal_Identifier_Response_DataType
     * @uses Universal_Identifier_Response_DataType::setUniversal_Identifier()
     * @param \StructType\Universal_IdentifierType[] $universal_Identifier
     */
    public function __construct(array $universal_Identifier = array())
    {
        $this
            ->setUniversal_Identifier($universal_Identifier);
    }
    /**
     * Get Universal_Identifier value
     * @return \StructType\Universal_IdentifierType[]|null
     */
    public function getUniversal_Identifier()
    {
        return $this->Universal_Identifier;
    }
    /**
     * This method is responsible for validating the values passed to the setUniversal_Identifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversal_Identifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUniversal_IdentifierForArrayConstraintsFromSetUniversal_Identifier(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $universal_Identifier_Response_DataTypeUniversal_IdentifierItem) {
            // validation for constraint: itemType
            if (!$universal_Identifier_Response_DataTypeUniversal_IdentifierItem instanceof \StructType\Universal_IdentifierType) {
                $invalidValues[] = is_object($universal_Identifier_Response_DataTypeUniversal_IdentifierItem) ? get_class($universal_Identifier_Response_DataTypeUniversal_IdentifierItem) : sprintf('%s(%s)', gettype($universal_Identifier_Response_DataTypeUniversal_IdentifierItem), var_export($universal_Identifier_Response_DataTypeUniversal_IdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Universal_Identifier property can only contain items of type \StructType\Universal_IdentifierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Universal_Identifier value
     * @throws \InvalidArgumentException
     * @param \StructType\Universal_IdentifierType[] $universal_Identifier
     * @return \StructType\Universal_Identifier_Response_DataType
     */
    public function setUniversal_Identifier(array $universal_Identifier = array())
    {
        // validation for constraint: array
        if ('' !== ($universal_IdentifierArrayErrorMessage = self::validateUniversal_IdentifierForArrayConstraintsFromSetUniversal_Identifier($universal_Identifier))) {
            throw new \InvalidArgumentException($universal_IdentifierArrayErrorMessage, __LINE__);
        }
        $this->Universal_Identifier = $universal_Identifier;
        return $this;
    }
    /**
     * Add item to Universal_Identifier value
     * @throws \InvalidArgumentException
     * @param \StructType\Universal_IdentifierType $item
     * @return \StructType\Universal_Identifier_Response_DataType
     */
    public function addToUniversal_Identifier(\StructType\Universal_IdentifierType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Universal_IdentifierType) {
            throw new \InvalidArgumentException(sprintf('The Universal_Identifier property can only contain items of type \StructType\Universal_IdentifierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Universal_Identifier[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Universal_Identifier_Response_DataType
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
