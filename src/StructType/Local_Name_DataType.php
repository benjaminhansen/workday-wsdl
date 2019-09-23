<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Local_Name_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Local First Name is not set up for this country. | Local Middle Name is not set up for this country. | If one local script is submitted, all required local script name fields must be submitted. | Contains the components of a name in
 * local script, such as the First Name and Last Name, for supporting countries.
 * @subpackage Structs
 */
class Local_Name_DataType extends AbstractStructBase
{
    /**
     * The First_Name
     * Meta information extracted from the WSDL
     * - documentation: Contains First Name in local script, which is generally configured to as Given Name, for supporting Countries.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Name;
    /**
     * The Middle_Name
     * Meta information extracted from the WSDL
     * - documentation: Contains Middle Name in local script for supporting Countries.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Middle_Name;
    /**
     * The Last_Name
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Local_Last_Name_DataType[]
     */
    public $Last_Name;
    /**
     * The Local_Name
     * Meta information extracted from the WSDL
     * - documentation: Contains the formatted Local Name in local script as configured for the Country
     * @var string
     */
    public $Local_Name;
    /**
     * The Local_Script
     * Meta information extracted from the WSDL
     * - documentation: Contains the formatted Local Script Name which contains the ISO code and name.
     * @var string
     */
    public $Local_Script;
    /**
     * Constructor method for Local_Name_DataType
     * @uses Local_Name_DataType::setFirst_Name()
     * @uses Local_Name_DataType::setMiddle_Name()
     * @uses Local_Name_DataType::setLast_Name()
     * @uses Local_Name_DataType::setLocal_Name()
     * @uses Local_Name_DataType::setLocal_Script()
     * @param string $first_Name
     * @param string $middle_Name
     * @param \WorkdayWsdl\\StructType\Local_Last_Name_DataType[] $last_Name
     * @param string $local_Name
     * @param string $local_Script
     */
    public function __construct($first_Name = null, $middle_Name = null, array $last_Name = array(), $local_Name = null, $local_Script = null)
    {
        $this
            ->setFirst_Name($first_Name)
            ->setMiddle_Name($middle_Name)
            ->setLast_Name($last_Name)
            ->setLocal_Name($local_Name)
            ->setLocal_Script($local_Script);
    }
    /**
     * Get First_Name value
     * @return string|null
     */
    public function getFirst_Name()
    {
        return $this->First_Name;
    }
    /**
     * Set First_Name value
     * @param string $first_Name
     * @return \WorkdayWsdl\\StructType\Local_Name_DataType
     */
    public function setFirst_Name($first_Name = null)
    {
        // validation for constraint: string
        if (!is_null($first_Name) && !is_string($first_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Name, true), gettype($first_Name)), __LINE__);
        }
        $this->First_Name = $first_Name;
        return $this;
    }
    /**
     * Get Middle_Name value
     * @return string|null
     */
    public function getMiddle_Name()
    {
        return $this->Middle_Name;
    }
    /**
     * Set Middle_Name value
     * @param string $middle_Name
     * @return \WorkdayWsdl\\StructType\Local_Name_DataType
     */
    public function setMiddle_Name($middle_Name = null)
    {
        // validation for constraint: string
        if (!is_null($middle_Name) && !is_string($middle_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middle_Name, true), gettype($middle_Name)), __LINE__);
        }
        $this->Middle_Name = $middle_Name;
        return $this;
    }
    /**
     * Get Last_Name value
     * @return \WorkdayWsdl\\StructType\Local_Last_Name_DataType[]|null
     */
    public function getLast_Name()
    {
        return $this->Last_Name;
    }
    /**
     * This method is responsible for validating the values passed to the setLast_Name method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLast_Name method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLast_NameForArrayConstraintsFromSetLast_Name(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $local_Name_DataTypeLast_NameItem) {
            // validation for constraint: itemType
            if (!$local_Name_DataTypeLast_NameItem instanceof \WorkdayWsdl\\StructType\Local_Last_Name_DataType) {
                $invalidValues[] = is_object($local_Name_DataTypeLast_NameItem) ? get_class($local_Name_DataTypeLast_NameItem) : sprintf('%s(%s)', gettype($local_Name_DataTypeLast_NameItem), var_export($local_Name_DataTypeLast_NameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Last_Name property can only contain items of type \WorkdayWsdl\\StructType\Local_Last_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Last_Name value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Local_Last_Name_DataType[] $last_Name
     * @return \WorkdayWsdl\\StructType\Local_Name_DataType
     */
    public function setLast_Name(array $last_Name = array())
    {
        // validation for constraint: array
        if ('' !== ($last_NameArrayErrorMessage = self::validateLast_NameForArrayConstraintsFromSetLast_Name($last_Name))) {
            throw new \InvalidArgumentException($last_NameArrayErrorMessage, __LINE__);
        }
        $this->Last_Name = $last_Name;
        return $this;
    }
    /**
     * Add item to Last_Name value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Local_Last_Name_DataType $item
     * @return \WorkdayWsdl\\StructType\Local_Name_DataType
     */
    public function addToLast_Name(\WorkdayWsdl\\StructType\Local_Last_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Local_Last_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Last_Name property can only contain items of type \WorkdayWsdl\\StructType\Local_Last_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Last_Name[] = $item;
        return $this;
    }
    /**
     * Get Local_Name value
     * @return string|null
     */
    public function getLocal_Name()
    {
        return $this->Local_Name;
    }
    /**
     * Set Local_Name value
     * @param string $local_Name
     * @return \WorkdayWsdl\\StructType\Local_Name_DataType
     */
    public function setLocal_Name($local_Name = null)
    {
        // validation for constraint: string
        if (!is_null($local_Name) && !is_string($local_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($local_Name, true), gettype($local_Name)), __LINE__);
        }
        $this->Local_Name = $local_Name;
        return $this;
    }
    /**
     * Get Local_Script value
     * @return string|null
     */
    public function getLocal_Script()
    {
        return $this->Local_Script;
    }
    /**
     * Set Local_Script value
     * @param string $local_Script
     * @return \WorkdayWsdl\\StructType\Local_Name_DataType
     */
    public function setLocal_Script($local_Script = null)
    {
        // validation for constraint: string
        if (!is_null($local_Script) && !is_string($local_Script)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($local_Script, true), gettype($local_Script)), __LINE__);
        }
        $this->Local_Script = $local_Script;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Local_Name_DataType
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
