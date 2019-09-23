<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PronounType StructType
 * Meta information extracted from the WSDL
 * - documentation: The pronoun for a worker.
 * @subpackage Structs
 */
class PronounType extends AbstractStructBase
{
    /**
     * The Pronoun_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Pronoun of the person.
     * - minOccurs: 0
     * @var \StructType\PronounObjectType
     */
    public $Pronoun_Reference;
    /**
     * The Pronoun_Data
     * Meta information extracted from the WSDL
     * - documentation: The pronoun data for a worker.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Pronoun_DataType[]
     */
    public $Pronoun_Data;
    /**
     * Constructor method for PronounType
     * @uses PronounType::setPronoun_Reference()
     * @uses PronounType::setPronoun_Data()
     * @param \StructType\PronounObjectType $pronoun_Reference
     * @param \StructType\Pronoun_DataType[] $pronoun_Data
     */
    public function __construct(\StructType\PronounObjectType $pronoun_Reference = null, array $pronoun_Data = array())
    {
        $this
            ->setPronoun_Reference($pronoun_Reference)
            ->setPronoun_Data($pronoun_Data);
    }
    /**
     * Get Pronoun_Reference value
     * @return \StructType\PronounObjectType|null
     */
    public function getPronoun_Reference()
    {
        return $this->Pronoun_Reference;
    }
    /**
     * Set Pronoun_Reference value
     * @param \StructType\PronounObjectType $pronoun_Reference
     * @return \StructType\PronounType
     */
    public function setPronoun_Reference(\StructType\PronounObjectType $pronoun_Reference = null)
    {
        $this->Pronoun_Reference = $pronoun_Reference;
        return $this;
    }
    /**
     * Get Pronoun_Data value
     * @return \StructType\Pronoun_DataType[]|null
     */
    public function getPronoun_Data()
    {
        return $this->Pronoun_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPronoun_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPronoun_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePronoun_DataForArrayConstraintsFromSetPronoun_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pronounTypePronoun_DataItem) {
            // validation for constraint: itemType
            if (!$pronounTypePronoun_DataItem instanceof \StructType\Pronoun_DataType) {
                $invalidValues[] = is_object($pronounTypePronoun_DataItem) ? get_class($pronounTypePronoun_DataItem) : sprintf('%s(%s)', gettype($pronounTypePronoun_DataItem), var_export($pronounTypePronoun_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pronoun_Data property can only contain items of type \StructType\Pronoun_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Pronoun_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Pronoun_DataType[] $pronoun_Data
     * @return \StructType\PronounType
     */
    public function setPronoun_Data(array $pronoun_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($pronoun_DataArrayErrorMessage = self::validatePronoun_DataForArrayConstraintsFromSetPronoun_Data($pronoun_Data))) {
            throw new \InvalidArgumentException($pronoun_DataArrayErrorMessage, __LINE__);
        }
        $this->Pronoun_Data = $pronoun_Data;
        return $this;
    }
    /**
     * Add item to Pronoun_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Pronoun_DataType $item
     * @return \StructType\PronounType
     */
    public function addToPronoun_Data(\StructType\Pronoun_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Pronoun_DataType) {
            throw new \InvalidArgumentException(sprintf('The Pronoun_Data property can only contain items of type \StructType\Pronoun_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pronoun_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PronounType
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
