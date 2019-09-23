<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Photo_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the person data for the Get Person Photos response.
 * @subpackage Structs
 */
class Person_Photo_Response_DataType extends AbstractStructBase
{
    /**
     * The Person_Photo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Person_PhotoType[]
     */
    public $Person_Photo;
    /**
     * Constructor method for Person_Photo_Response_DataType
     * @uses Person_Photo_Response_DataType::setPerson_Photo()
     * @param \StructType\Person_PhotoType[] $person_Photo
     */
    public function __construct(array $person_Photo = array())
    {
        $this
            ->setPerson_Photo($person_Photo);
    }
    /**
     * Get Person_Photo value
     * @return \StructType\Person_PhotoType[]|null
     */
    public function getPerson_Photo()
    {
        return $this->Person_Photo;
    }
    /**
     * This method is responsible for validating the values passed to the setPerson_Photo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson_Photo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePerson_PhotoForArrayConstraintsFromSetPerson_Photo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Photo_Response_DataTypePerson_PhotoItem) {
            // validation for constraint: itemType
            if (!$person_Photo_Response_DataTypePerson_PhotoItem instanceof \StructType\Person_PhotoType) {
                $invalidValues[] = is_object($person_Photo_Response_DataTypePerson_PhotoItem) ? get_class($person_Photo_Response_DataTypePerson_PhotoItem) : sprintf('%s(%s)', gettype($person_Photo_Response_DataTypePerson_PhotoItem), var_export($person_Photo_Response_DataTypePerson_PhotoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Person_Photo property can only contain items of type \StructType\Person_PhotoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Person_Photo value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_PhotoType[] $person_Photo
     * @return \StructType\Person_Photo_Response_DataType
     */
    public function setPerson_Photo(array $person_Photo = array())
    {
        // validation for constraint: array
        if ('' !== ($person_PhotoArrayErrorMessage = self::validatePerson_PhotoForArrayConstraintsFromSetPerson_Photo($person_Photo))) {
            throw new \InvalidArgumentException($person_PhotoArrayErrorMessage, __LINE__);
        }
        $this->Person_Photo = $person_Photo;
        return $this;
    }
    /**
     * Add item to Person_Photo value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_PhotoType $item
     * @return \StructType\Person_Photo_Response_DataType
     */
    public function addToPerson_Photo(\StructType\Person_PhotoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Person_PhotoType) {
            throw new \InvalidArgumentException(sprintf('The Person_Photo property can only contain items of type \StructType\Person_PhotoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Person_Photo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person_Photo_Response_DataType
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
