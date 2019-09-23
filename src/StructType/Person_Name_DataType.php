<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Name_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the legal, preferred, and additional names for a person.
 * @subpackage Structs
 */
class Person_Name_DataType extends AbstractStructBase
{
    /**
     * The Legal_Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the legal name for a person. A person must name one and only one legal name.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Legal_Name_DataType
     */
    public $Legal_Name_Data;
    /**
     * The Preferred_Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the preferred name for a person. If no preferred name is returned then the legal name is assumed to be the preferred name. If a preferred name is not provided in a request then the legal name is assumed to be the preferred
     * name.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Preferred_Name_DataType
     */
    public $Preferred_Name_Data;
    /**
     * The Additional_Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the additional names for a person, other than their legal and preferred names. Additional names are not valid for applicants.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Additional_Name_DataType[]
     */
    public $Additional_Name_Data;
    /**
     * Constructor method for Person_Name_DataType
     * @uses Person_Name_DataType::setLegal_Name_Data()
     * @uses Person_Name_DataType::setPreferred_Name_Data()
     * @uses Person_Name_DataType::setAdditional_Name_Data()
     * @param \WorkdayWsdl\\StructType\Legal_Name_DataType $legal_Name_Data
     * @param \WorkdayWsdl\\StructType\Preferred_Name_DataType $preferred_Name_Data
     * @param \WorkdayWsdl\\StructType\Additional_Name_DataType[] $additional_Name_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Legal_Name_DataType $legal_Name_Data = null, \WorkdayWsdl\\StructType\Preferred_Name_DataType $preferred_Name_Data = null, array $additional_Name_Data = array())
    {
        $this
            ->setLegal_Name_Data($legal_Name_Data)
            ->setPreferred_Name_Data($preferred_Name_Data)
            ->setAdditional_Name_Data($additional_Name_Data);
    }
    /**
     * Get Legal_Name_Data value
     * @return \WorkdayWsdl\\StructType\Legal_Name_DataType|null
     */
    public function getLegal_Name_Data()
    {
        return $this->Legal_Name_Data;
    }
    /**
     * Set Legal_Name_Data value
     * @param \WorkdayWsdl\\StructType\Legal_Name_DataType $legal_Name_Data
     * @return \WorkdayWsdl\\StructType\Person_Name_DataType
     */
    public function setLegal_Name_Data(\WorkdayWsdl\\StructType\Legal_Name_DataType $legal_Name_Data = null)
    {
        $this->Legal_Name_Data = $legal_Name_Data;
        return $this;
    }
    /**
     * Get Preferred_Name_Data value
     * @return \WorkdayWsdl\\StructType\Preferred_Name_DataType|null
     */
    public function getPreferred_Name_Data()
    {
        return $this->Preferred_Name_Data;
    }
    /**
     * Set Preferred_Name_Data value
     * @param \WorkdayWsdl\\StructType\Preferred_Name_DataType $preferred_Name_Data
     * @return \WorkdayWsdl\\StructType\Person_Name_DataType
     */
    public function setPreferred_Name_Data(\WorkdayWsdl\\StructType\Preferred_Name_DataType $preferred_Name_Data = null)
    {
        $this->Preferred_Name_Data = $preferred_Name_Data;
        return $this;
    }
    /**
     * Get Additional_Name_Data value
     * @return \WorkdayWsdl\\StructType\Additional_Name_DataType[]|null
     */
    public function getAdditional_Name_Data()
    {
        return $this->Additional_Name_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditional_Name_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditional_Name_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditional_Name_DataForArrayConstraintsFromSetAdditional_Name_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Name_DataTypeAdditional_Name_DataItem) {
            // validation for constraint: itemType
            if (!$person_Name_DataTypeAdditional_Name_DataItem instanceof \WorkdayWsdl\\StructType\Additional_Name_DataType) {
                $invalidValues[] = is_object($person_Name_DataTypeAdditional_Name_DataItem) ? get_class($person_Name_DataTypeAdditional_Name_DataItem) : sprintf('%s(%s)', gettype($person_Name_DataTypeAdditional_Name_DataItem), var_export($person_Name_DataTypeAdditional_Name_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Additional_Name_Data property can only contain items of type \WorkdayWsdl\\StructType\Additional_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Additional_Name_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Additional_Name_DataType[] $additional_Name_Data
     * @return \WorkdayWsdl\\StructType\Person_Name_DataType
     */
    public function setAdditional_Name_Data(array $additional_Name_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($additional_Name_DataArrayErrorMessage = self::validateAdditional_Name_DataForArrayConstraintsFromSetAdditional_Name_Data($additional_Name_Data))) {
            throw new \InvalidArgumentException($additional_Name_DataArrayErrorMessage, __LINE__);
        }
        $this->Additional_Name_Data = $additional_Name_Data;
        return $this;
    }
    /**
     * Add item to Additional_Name_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Additional_Name_DataType $item
     * @return \WorkdayWsdl\\StructType\Person_Name_DataType
     */
    public function addToAdditional_Name_Data(\WorkdayWsdl\\StructType\Additional_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Additional_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Additional_Name_Data property can only contain items of type \WorkdayWsdl\\StructType\Additional_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Additional_Name_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Person_Name_DataType
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
