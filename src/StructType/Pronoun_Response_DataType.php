<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pronoun_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The pronoun response data.
 * @subpackage Structs
 */
class Pronoun_Response_DataType extends AbstractStructBase
{
    /**
     * The Pronoun
     * Meta information extracted from the WSDL
     * - documentation: The pronoun for a worker.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\PronounType[]
     */
    public $Pronoun;
    /**
     * Constructor method for Pronoun_Response_DataType
     * @uses Pronoun_Response_DataType::setPronoun()
     * @param \WorkdayWsdl\\StructType\PronounType[] $pronoun
     */
    public function __construct(array $pronoun = array())
    {
        $this
            ->setPronoun($pronoun);
    }
    /**
     * Get Pronoun value
     * @return \WorkdayWsdl\\StructType\PronounType[]|null
     */
    public function getPronoun()
    {
        return $this->Pronoun;
    }
    /**
     * This method is responsible for validating the values passed to the setPronoun method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPronoun method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePronounForArrayConstraintsFromSetPronoun(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pronoun_Response_DataTypePronounItem) {
            // validation for constraint: itemType
            if (!$pronoun_Response_DataTypePronounItem instanceof \WorkdayWsdl\\StructType\PronounType) {
                $invalidValues[] = is_object($pronoun_Response_DataTypePronounItem) ? get_class($pronoun_Response_DataTypePronounItem) : sprintf('%s(%s)', gettype($pronoun_Response_DataTypePronounItem), var_export($pronoun_Response_DataTypePronounItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pronoun property can only contain items of type \WorkdayWsdl\\StructType\PronounType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Pronoun value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\PronounType[] $pronoun
     * @return \WorkdayWsdl\\StructType\Pronoun_Response_DataType
     */
    public function setPronoun(array $pronoun = array())
    {
        // validation for constraint: array
        if ('' !== ($pronounArrayErrorMessage = self::validatePronounForArrayConstraintsFromSetPronoun($pronoun))) {
            throw new \InvalidArgumentException($pronounArrayErrorMessage, __LINE__);
        }
        $this->Pronoun = $pronoun;
        return $this;
    }
    /**
     * Add item to Pronoun value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\PronounType $item
     * @return \WorkdayWsdl\\StructType\Pronoun_Response_DataType
     */
    public function addToPronoun(\WorkdayWsdl\\StructType\PronounType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\PronounType) {
            throw new \InvalidArgumentException(sprintf('The Pronoun property can only contain items of type \WorkdayWsdl\\StructType\PronounType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pronoun[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Pronoun_Response_DataType
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
