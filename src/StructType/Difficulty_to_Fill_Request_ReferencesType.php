<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Difficulty_to_Fill_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: References to Difficulty to Fill
 * @subpackage Structs
 */
class Difficulty_to_Fill_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Difficulty_to_Fill_Reference
     * Meta information extracted from the WSDL
     * - documentation: References to Difficulty to Fill
     * - maxOccurs: unbounded
     * @var \StructType\Difficulty_to_FillObjectType[]
     */
    public $Difficulty_to_Fill_Reference;
    /**
     * Constructor method for Difficulty_to_Fill_Request_ReferencesType
     * @uses Difficulty_to_Fill_Request_ReferencesType::setDifficulty_to_Fill_Reference()
     * @param \StructType\Difficulty_to_FillObjectType[] $difficulty_to_Fill_Reference
     */
    public function __construct(array $difficulty_to_Fill_Reference = array())
    {
        $this
            ->setDifficulty_to_Fill_Reference($difficulty_to_Fill_Reference);
    }
    /**
     * Get Difficulty_to_Fill_Reference value
     * @return \StructType\Difficulty_to_FillObjectType[]|null
     */
    public function getDifficulty_to_Fill_Reference()
    {
        return $this->Difficulty_to_Fill_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setDifficulty_to_Fill_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDifficulty_to_Fill_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDifficulty_to_Fill_ReferenceForArrayConstraintsFromSetDifficulty_to_Fill_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $difficulty_to_Fill_Request_ReferencesTypeDifficulty_to_Fill_ReferenceItem) {
            // validation for constraint: itemType
            if (!$difficulty_to_Fill_Request_ReferencesTypeDifficulty_to_Fill_ReferenceItem instanceof \StructType\Difficulty_to_FillObjectType) {
                $invalidValues[] = is_object($difficulty_to_Fill_Request_ReferencesTypeDifficulty_to_Fill_ReferenceItem) ? get_class($difficulty_to_Fill_Request_ReferencesTypeDifficulty_to_Fill_ReferenceItem) : sprintf('%s(%s)', gettype($difficulty_to_Fill_Request_ReferencesTypeDifficulty_to_Fill_ReferenceItem), var_export($difficulty_to_Fill_Request_ReferencesTypeDifficulty_to_Fill_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Difficulty_to_Fill_Reference property can only contain items of type \StructType\Difficulty_to_FillObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Difficulty_to_Fill_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Difficulty_to_FillObjectType[] $difficulty_to_Fill_Reference
     * @return \StructType\Difficulty_to_Fill_Request_ReferencesType
     */
    public function setDifficulty_to_Fill_Reference(array $difficulty_to_Fill_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($difficulty_to_Fill_ReferenceArrayErrorMessage = self::validateDifficulty_to_Fill_ReferenceForArrayConstraintsFromSetDifficulty_to_Fill_Reference($difficulty_to_Fill_Reference))) {
            throw new \InvalidArgumentException($difficulty_to_Fill_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Difficulty_to_Fill_Reference = $difficulty_to_Fill_Reference;
        return $this;
    }
    /**
     * Add item to Difficulty_to_Fill_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Difficulty_to_FillObjectType $item
     * @return \StructType\Difficulty_to_Fill_Request_ReferencesType
     */
    public function addToDifficulty_to_Fill_Reference(\StructType\Difficulty_to_FillObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Difficulty_to_FillObjectType) {
            throw new \InvalidArgumentException(sprintf('The Difficulty_to_Fill_Reference property can only contain items of type \StructType\Difficulty_to_FillObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Difficulty_to_Fill_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Difficulty_to_Fill_Request_ReferencesType
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
