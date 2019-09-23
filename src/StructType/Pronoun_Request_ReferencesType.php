<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pronoun_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference to the Pronoun of the person.
 * @subpackage Structs
 */
class Pronoun_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Pronoun_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Pronoun of the person.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\PronounObjectType[]
     */
    public $Pronoun_Reference;
    /**
     * Constructor method for Pronoun_Request_ReferencesType
     * @uses Pronoun_Request_ReferencesType::setPronoun_Reference()
     * @param \WorkdayWsdl\\StructType\PronounObjectType[] $pronoun_Reference
     */
    public function __construct(array $pronoun_Reference = array())
    {
        $this
            ->setPronoun_Reference($pronoun_Reference);
    }
    /**
     * Get Pronoun_Reference value
     * @return \WorkdayWsdl\\StructType\PronounObjectType[]|null
     */
    public function getPronoun_Reference()
    {
        return $this->Pronoun_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPronoun_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPronoun_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePronoun_ReferenceForArrayConstraintsFromSetPronoun_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pronoun_Request_ReferencesTypePronoun_ReferenceItem) {
            // validation for constraint: itemType
            if (!$pronoun_Request_ReferencesTypePronoun_ReferenceItem instanceof \WorkdayWsdl\\StructType\PronounObjectType) {
                $invalidValues[] = is_object($pronoun_Request_ReferencesTypePronoun_ReferenceItem) ? get_class($pronoun_Request_ReferencesTypePronoun_ReferenceItem) : sprintf('%s(%s)', gettype($pronoun_Request_ReferencesTypePronoun_ReferenceItem), var_export($pronoun_Request_ReferencesTypePronoun_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pronoun_Reference property can only contain items of type \WorkdayWsdl\\StructType\PronounObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Pronoun_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\PronounObjectType[] $pronoun_Reference
     * @return \WorkdayWsdl\\StructType\Pronoun_Request_ReferencesType
     */
    public function setPronoun_Reference(array $pronoun_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($pronoun_ReferenceArrayErrorMessage = self::validatePronoun_ReferenceForArrayConstraintsFromSetPronoun_Reference($pronoun_Reference))) {
            throw new \InvalidArgumentException($pronoun_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Pronoun_Reference = $pronoun_Reference;
        return $this;
    }
    /**
     * Add item to Pronoun_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\PronounObjectType $item
     * @return \WorkdayWsdl\\StructType\Pronoun_Request_ReferencesType
     */
    public function addToPronoun_Reference(\WorkdayWsdl\\StructType\PronounObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\PronounObjectType) {
            throw new \InvalidArgumentException(sprintf('The Pronoun_Reference property can only contain items of type \WorkdayWsdl\\StructType\PronounObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pronoun_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Pronoun_Request_ReferencesType
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
