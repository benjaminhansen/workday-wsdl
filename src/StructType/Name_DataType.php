<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Name_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Secondary Last Name can only be set for countries that accept it. | Last Name can only be set for countries that accept it. | Tertiary Last Name can only be set for countries that accept it. | Royal Suffix is required for certain
 * Countries. | Religious Suffix is required for certain Countries. | If one western script is submitted, all required western script name fields must be submitted. | Title is required for certain Countries. | First Name can only be set for countries
 * that accept it. | You must enter a Middle Name for this country. | You must enter a Local Middle Name for this country. | Last Name (or Local Last Name if configured) is required for this country. | Social Suffix is required for certain Countries. |
 * Secondary Last Name (or Local Secondary Last Name) is required for this country. | Last Name is required for certain Countries. | Middle Name can only be set for countries that accept it. | You must enter a Local Secondary Last Name for this country.
 * | Salutation is required for certain Countries. | Last Name - Tertiary is required for certain Countries. | You must enter a Local Last Name for this country. | First Name (or Local First Name if configured) is required for this country. | You must
 * enter a Local First Name for this country. | Honorary Suffix is required for certain Countries. | You must enter a First Name for this country. | Secondary Last Name is required for certain Countries. | Hereditary Suffix is required for certain
 * Countries. | Academic Suffix is required for certain Countries. | Professional Suffix is required for certain Countries. | Encapsulating element for all of the name data such as first and last name
 * @subpackage Structs
 */
class Name_DataType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * @var \StructType\Country_ReferenceType
     */
    public $Country_Reference;
    /**
     * The Additional_Name_Type
     * Meta information extracted from the WSDL
     * - documentation: Defining the type of name. Typical uses include using to capture Preferred or Maiden names.
     * - minOccurs: 0
     * @var string
     */
    public $Additional_Name_Type;
    /**
     * The Prefix
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Prefix_Name_DataType[]
     */
    public $Prefix;
    /**
     * The First_Name
     * Meta information extracted from the WSDL
     * - documentation: Person first name.This field will only have a value if mapped to a name component for the country (identified by the ISO code above) within the workday application.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Name;
    /**
     * The Middle_Name
     * Meta information extracted from the WSDL
     * - documentation: Person middle name.This field will only have a value if mapped to a name component for the country (identified by the ISO code above) within the workday application.
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
     * @var \StructType\Last_Name_DataType[]
     */
    public $Last_Name;
    /**
     * The Local_Name_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Local_Name_DataType
     */
    public $Local_Name_Data;
    /**
     * The Suffix
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Suffix_Name_DataType[]
     */
    public $Suffix;
    /**
     * The Is_Legal
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute indicating whether this is the Default name.
     * @var bool
     */
    public $Is_Legal;
    /**
     * The Is_Preferred
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute indicating whether this is the Preferred name
     * @var bool
     */
    public $Is_Preferred;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date of Name.
     * @var string
     */
    public $Effective_Date;
    /**
     * The Last_Modified
     * Meta information extracted from the WSDL
     * - documentation: Date of last change to Name.
     * @var string
     */
    public $Last_Modified;
    /**
     * Constructor method for Name_DataType
     * @uses Name_DataType::setCountry_Reference()
     * @uses Name_DataType::setAdditional_Name_Type()
     * @uses Name_DataType::setPrefix()
     * @uses Name_DataType::setFirst_Name()
     * @uses Name_DataType::setMiddle_Name()
     * @uses Name_DataType::setLast_Name()
     * @uses Name_DataType::setLocal_Name_Data()
     * @uses Name_DataType::setSuffix()
     * @uses Name_DataType::setIs_Legal()
     * @uses Name_DataType::setIs_Preferred()
     * @uses Name_DataType::setEffective_Date()
     * @uses Name_DataType::setLast_Modified()
     * @param \StructType\Country_ReferenceType $country_Reference
     * @param string $additional_Name_Type
     * @param \StructType\Prefix_Name_DataType[] $prefix
     * @param string $first_Name
     * @param string $middle_Name
     * @param \StructType\Last_Name_DataType[] $last_Name
     * @param \StructType\Local_Name_DataType $local_Name_Data
     * @param \StructType\Suffix_Name_DataType[] $suffix
     * @param bool $is_Legal
     * @param bool $is_Preferred
     * @param string $effective_Date
     * @param string $last_Modified
     */
    public function __construct(\StructType\Country_ReferenceType $country_Reference = null, $additional_Name_Type = null, array $prefix = array(), $first_Name = null, $middle_Name = null, array $last_Name = array(), \StructType\Local_Name_DataType $local_Name_Data = null, array $suffix = array(), $is_Legal = null, $is_Preferred = null, $effective_Date = null, $last_Modified = null)
    {
        $this
            ->setCountry_Reference($country_Reference)
            ->setAdditional_Name_Type($additional_Name_Type)
            ->setPrefix($prefix)
            ->setFirst_Name($first_Name)
            ->setMiddle_Name($middle_Name)
            ->setLast_Name($last_Name)
            ->setLocal_Name_Data($local_Name_Data)
            ->setSuffix($suffix)
            ->setIs_Legal($is_Legal)
            ->setIs_Preferred($is_Preferred)
            ->setEffective_Date($effective_Date)
            ->setLast_Modified($last_Modified);
    }
    /**
     * Get Country_Reference value
     * @return \StructType\Country_ReferenceType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \StructType\Country_ReferenceType $country_Reference
     * @return \StructType\Name_DataType
     */
    public function setCountry_Reference(\StructType\Country_ReferenceType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Additional_Name_Type value
     * @return string|null
     */
    public function getAdditional_Name_Type()
    {
        return $this->Additional_Name_Type;
    }
    /**
     * Set Additional_Name_Type value
     * @param string $additional_Name_Type
     * @return \StructType\Name_DataType
     */
    public function setAdditional_Name_Type($additional_Name_Type = null)
    {
        // validation for constraint: string
        if (!is_null($additional_Name_Type) && !is_string($additional_Name_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additional_Name_Type, true), gettype($additional_Name_Type)), __LINE__);
        }
        $this->Additional_Name_Type = $additional_Name_Type;
        return $this;
    }
    /**
     * Get Prefix value
     * @return \StructType\Prefix_Name_DataType[]|null
     */
    public function getPrefix()
    {
        return $this->Prefix;
    }
    /**
     * This method is responsible for validating the values passed to the setPrefix method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrefix method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrefixForArrayConstraintsFromSetPrefix(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $name_DataTypePrefixItem) {
            // validation for constraint: itemType
            if (!$name_DataTypePrefixItem instanceof \StructType\Prefix_Name_DataType) {
                $invalidValues[] = is_object($name_DataTypePrefixItem) ? get_class($name_DataTypePrefixItem) : sprintf('%s(%s)', gettype($name_DataTypePrefixItem), var_export($name_DataTypePrefixItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Prefix property can only contain items of type \StructType\Prefix_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Prefix value
     * @throws \InvalidArgumentException
     * @param \StructType\Prefix_Name_DataType[] $prefix
     * @return \StructType\Name_DataType
     */
    public function setPrefix(array $prefix = array())
    {
        // validation for constraint: array
        if ('' !== ($prefixArrayErrorMessage = self::validatePrefixForArrayConstraintsFromSetPrefix($prefix))) {
            throw new \InvalidArgumentException($prefixArrayErrorMessage, __LINE__);
        }
        $this->Prefix = $prefix;
        return $this;
    }
    /**
     * Add item to Prefix value
     * @throws \InvalidArgumentException
     * @param \StructType\Prefix_Name_DataType $item
     * @return \StructType\Name_DataType
     */
    public function addToPrefix(\StructType\Prefix_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Prefix_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Prefix property can only contain items of type \StructType\Prefix_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Prefix[] = $item;
        return $this;
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
     * @return \StructType\Name_DataType
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
     * @return \StructType\Name_DataType
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
     * @return \StructType\Last_Name_DataType[]|null
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
        foreach ($values as $name_DataTypeLast_NameItem) {
            // validation for constraint: itemType
            if (!$name_DataTypeLast_NameItem instanceof \StructType\Last_Name_DataType) {
                $invalidValues[] = is_object($name_DataTypeLast_NameItem) ? get_class($name_DataTypeLast_NameItem) : sprintf('%s(%s)', gettype($name_DataTypeLast_NameItem), var_export($name_DataTypeLast_NameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Last_Name property can only contain items of type \StructType\Last_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Last_Name value
     * @throws \InvalidArgumentException
     * @param \StructType\Last_Name_DataType[] $last_Name
     * @return \StructType\Name_DataType
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
     * @param \StructType\Last_Name_DataType $item
     * @return \StructType\Name_DataType
     */
    public function addToLast_Name(\StructType\Last_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Last_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Last_Name property can only contain items of type \StructType\Last_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Last_Name[] = $item;
        return $this;
    }
    /**
     * Get Local_Name_Data value
     * @return \StructType\Local_Name_DataType|null
     */
    public function getLocal_Name_Data()
    {
        return $this->Local_Name_Data;
    }
    /**
     * Set Local_Name_Data value
     * @param \StructType\Local_Name_DataType $local_Name_Data
     * @return \StructType\Name_DataType
     */
    public function setLocal_Name_Data(\StructType\Local_Name_DataType $local_Name_Data = null)
    {
        $this->Local_Name_Data = $local_Name_Data;
        return $this;
    }
    /**
     * Get Suffix value
     * @return \StructType\Suffix_Name_DataType[]|null
     */
    public function getSuffix()
    {
        return $this->Suffix;
    }
    /**
     * This method is responsible for validating the values passed to the setSuffix method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuffix method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuffixForArrayConstraintsFromSetSuffix(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $name_DataTypeSuffixItem) {
            // validation for constraint: itemType
            if (!$name_DataTypeSuffixItem instanceof \StructType\Suffix_Name_DataType) {
                $invalidValues[] = is_object($name_DataTypeSuffixItem) ? get_class($name_DataTypeSuffixItem) : sprintf('%s(%s)', gettype($name_DataTypeSuffixItem), var_export($name_DataTypeSuffixItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Suffix property can only contain items of type \StructType\Suffix_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Suffix value
     * @throws \InvalidArgumentException
     * @param \StructType\Suffix_Name_DataType[] $suffix
     * @return \StructType\Name_DataType
     */
    public function setSuffix(array $suffix = array())
    {
        // validation for constraint: array
        if ('' !== ($suffixArrayErrorMessage = self::validateSuffixForArrayConstraintsFromSetSuffix($suffix))) {
            throw new \InvalidArgumentException($suffixArrayErrorMessage, __LINE__);
        }
        $this->Suffix = $suffix;
        return $this;
    }
    /**
     * Add item to Suffix value
     * @throws \InvalidArgumentException
     * @param \StructType\Suffix_Name_DataType $item
     * @return \StructType\Name_DataType
     */
    public function addToSuffix(\StructType\Suffix_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Suffix_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Suffix property can only contain items of type \StructType\Suffix_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Suffix[] = $item;
        return $this;
    }
    /**
     * Get Is_Legal value
     * @return bool|null
     */
    public function getIs_Legal()
    {
        return $this->Is_Legal;
    }
    /**
     * Set Is_Legal value
     * @param bool $is_Legal
     * @return \StructType\Name_DataType
     */
    public function setIs_Legal($is_Legal = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_Legal) && !is_bool($is_Legal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_Legal, true), gettype($is_Legal)), __LINE__);
        }
        $this->Is_Legal = $is_Legal;
        return $this;
    }
    /**
     * Get Is_Preferred value
     * @return bool|null
     */
    public function getIs_Preferred()
    {
        return $this->Is_Preferred;
    }
    /**
     * Set Is_Preferred value
     * @param bool $is_Preferred
     * @return \StructType\Name_DataType
     */
    public function setIs_Preferred($is_Preferred = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_Preferred) && !is_bool($is_Preferred)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_Preferred, true), gettype($is_Preferred)), __LINE__);
        }
        $this->Is_Preferred = $is_Preferred;
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Name_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Last_Modified value
     * @return string|null
     */
    public function getLast_Modified()
    {
        return $this->Last_Modified;
    }
    /**
     * Set Last_Modified value
     * @param string $last_Modified
     * @return \StructType\Name_DataType
     */
    public function setLast_Modified($last_Modified = null)
    {
        // validation for constraint: string
        if (!is_null($last_Modified) && !is_string($last_Modified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Modified, true), gettype($last_Modified)), __LINE__);
        }
        $this->Last_Modified = $last_Modified;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Name_DataType
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
