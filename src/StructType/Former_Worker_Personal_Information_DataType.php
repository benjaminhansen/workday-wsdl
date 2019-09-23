<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_Worker_Personal_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Personal data for the former worker.
 * @subpackage Structs
 */
class Former_Worker_Personal_Information_DataType extends AbstractStructBase
{
    /**
     * The Name_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Person_Name_DataType
     */
    public $Name_Data;
    /**
     * The Birth_Date
     * Meta information extracted from the WSDL
     * - documentation: A person's birth date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Birth_Date;
    /**
     * The Ethnicity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates the ethnicities that a person has.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EthnicityObjectType[]
     */
    public $Ethnicity_Reference;
    /**
     * The Hispanic_or_Latino
     * Meta information extracted from the WSDL
     * - documentation: Returns a true if the person's ethnicity is Hispanic or Latino.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Hispanic_or_Latino;
    /**
     * The Contact_Information_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Contact_Information_DataType
     */
    public $Contact_Information_Data;
    /**
     * The National_Identifier_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\National_IDType[]
     */
    public $National_Identifier_Data;
    /**
     * Constructor method for Former_Worker_Personal_Information_DataType
     * @uses Former_Worker_Personal_Information_DataType::setName_Data()
     * @uses Former_Worker_Personal_Information_DataType::setBirth_Date()
     * @uses Former_Worker_Personal_Information_DataType::setEthnicity_Reference()
     * @uses Former_Worker_Personal_Information_DataType::setHispanic_or_Latino()
     * @uses Former_Worker_Personal_Information_DataType::setContact_Information_Data()
     * @uses Former_Worker_Personal_Information_DataType::setNational_Identifier_Data()
     * @param \StructType\Person_Name_DataType $name_Data
     * @param string $birth_Date
     * @param \StructType\EthnicityObjectType[] $ethnicity_Reference
     * @param bool $hispanic_or_Latino
     * @param \StructType\Contact_Information_DataType $contact_Information_Data
     * @param \StructType\National_IDType[] $national_Identifier_Data
     */
    public function __construct(\StructType\Person_Name_DataType $name_Data = null, $birth_Date = null, array $ethnicity_Reference = array(), $hispanic_or_Latino = null, \StructType\Contact_Information_DataType $contact_Information_Data = null, array $national_Identifier_Data = array())
    {
        $this
            ->setName_Data($name_Data)
            ->setBirth_Date($birth_Date)
            ->setEthnicity_Reference($ethnicity_Reference)
            ->setHispanic_or_Latino($hispanic_or_Latino)
            ->setContact_Information_Data($contact_Information_Data)
            ->setNational_Identifier_Data($national_Identifier_Data);
    }
    /**
     * Get Name_Data value
     * @return \StructType\Person_Name_DataType|null
     */
    public function getName_Data()
    {
        return $this->Name_Data;
    }
    /**
     * Set Name_Data value
     * @param \StructType\Person_Name_DataType $name_Data
     * @return \StructType\Former_Worker_Personal_Information_DataType
     */
    public function setName_Data(\StructType\Person_Name_DataType $name_Data = null)
    {
        $this->Name_Data = $name_Data;
        return $this;
    }
    /**
     * Get Birth_Date value
     * @return string|null
     */
    public function getBirth_Date()
    {
        return $this->Birth_Date;
    }
    /**
     * Set Birth_Date value
     * @param string $birth_Date
     * @return \StructType\Former_Worker_Personal_Information_DataType
     */
    public function setBirth_Date($birth_Date = null)
    {
        // validation for constraint: string
        if (!is_null($birth_Date) && !is_string($birth_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birth_Date, true), gettype($birth_Date)), __LINE__);
        }
        $this->Birth_Date = $birth_Date;
        return $this;
    }
    /**
     * Get Ethnicity_Reference value
     * @return \StructType\EthnicityObjectType[]|null
     */
    public function getEthnicity_Reference()
    {
        return $this->Ethnicity_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEthnicity_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEthnicity_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEthnicity_ReferenceForArrayConstraintsFromSetEthnicity_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $former_Worker_Personal_Information_DataTypeEthnicity_ReferenceItem) {
            // validation for constraint: itemType
            if (!$former_Worker_Personal_Information_DataTypeEthnicity_ReferenceItem instanceof \StructType\EthnicityObjectType) {
                $invalidValues[] = is_object($former_Worker_Personal_Information_DataTypeEthnicity_ReferenceItem) ? get_class($former_Worker_Personal_Information_DataTypeEthnicity_ReferenceItem) : sprintf('%s(%s)', gettype($former_Worker_Personal_Information_DataTypeEthnicity_ReferenceItem), var_export($former_Worker_Personal_Information_DataTypeEthnicity_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Ethnicity_Reference property can only contain items of type \StructType\EthnicityObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Ethnicity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\EthnicityObjectType[] $ethnicity_Reference
     * @return \StructType\Former_Worker_Personal_Information_DataType
     */
    public function setEthnicity_Reference(array $ethnicity_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($ethnicity_ReferenceArrayErrorMessage = self::validateEthnicity_ReferenceForArrayConstraintsFromSetEthnicity_Reference($ethnicity_Reference))) {
            throw new \InvalidArgumentException($ethnicity_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Ethnicity_Reference = $ethnicity_Reference;
        return $this;
    }
    /**
     * Add item to Ethnicity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\EthnicityObjectType $item
     * @return \StructType\Former_Worker_Personal_Information_DataType
     */
    public function addToEthnicity_Reference(\StructType\EthnicityObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EthnicityObjectType) {
            throw new \InvalidArgumentException(sprintf('The Ethnicity_Reference property can only contain items of type \StructType\EthnicityObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Ethnicity_Reference[] = $item;
        return $this;
    }
    /**
     * Get Hispanic_or_Latino value
     * @return bool|null
     */
    public function getHispanic_or_Latino()
    {
        return $this->Hispanic_or_Latino;
    }
    /**
     * Set Hispanic_or_Latino value
     * @param bool $hispanic_or_Latino
     * @return \StructType\Former_Worker_Personal_Information_DataType
     */
    public function setHispanic_or_Latino($hispanic_or_Latino = null)
    {
        // validation for constraint: boolean
        if (!is_null($hispanic_or_Latino) && !is_bool($hispanic_or_Latino)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hispanic_or_Latino, true), gettype($hispanic_or_Latino)), __LINE__);
        }
        $this->Hispanic_or_Latino = $hispanic_or_Latino;
        return $this;
    }
    /**
     * Get Contact_Information_Data value
     * @return \StructType\Contact_Information_DataType|null
     */
    public function getContact_Information_Data()
    {
        return $this->Contact_Information_Data;
    }
    /**
     * Set Contact_Information_Data value
     * @param \StructType\Contact_Information_DataType $contact_Information_Data
     * @return \StructType\Former_Worker_Personal_Information_DataType
     */
    public function setContact_Information_Data(\StructType\Contact_Information_DataType $contact_Information_Data = null)
    {
        $this->Contact_Information_Data = $contact_Information_Data;
        return $this;
    }
    /**
     * Get National_Identifier_Data value
     * @return \StructType\National_IDType[]|null
     */
    public function getNational_Identifier_Data()
    {
        return $this->National_Identifier_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setNational_Identifier_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNational_Identifier_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNational_Identifier_DataForArrayConstraintsFromSetNational_Identifier_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $former_Worker_Personal_Information_DataTypeNational_Identifier_DataItem) {
            // validation for constraint: itemType
            if (!$former_Worker_Personal_Information_DataTypeNational_Identifier_DataItem instanceof \StructType\National_IDType) {
                $invalidValues[] = is_object($former_Worker_Personal_Information_DataTypeNational_Identifier_DataItem) ? get_class($former_Worker_Personal_Information_DataTypeNational_Identifier_DataItem) : sprintf('%s(%s)', gettype($former_Worker_Personal_Information_DataTypeNational_Identifier_DataItem), var_export($former_Worker_Personal_Information_DataTypeNational_Identifier_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The National_Identifier_Data property can only contain items of type \StructType\National_IDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set National_Identifier_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\National_IDType[] $national_Identifier_Data
     * @return \StructType\Former_Worker_Personal_Information_DataType
     */
    public function setNational_Identifier_Data(array $national_Identifier_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($national_Identifier_DataArrayErrorMessage = self::validateNational_Identifier_DataForArrayConstraintsFromSetNational_Identifier_Data($national_Identifier_Data))) {
            throw new \InvalidArgumentException($national_Identifier_DataArrayErrorMessage, __LINE__);
        }
        $this->National_Identifier_Data = $national_Identifier_Data;
        return $this;
    }
    /**
     * Add item to National_Identifier_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\National_IDType $item
     * @return \StructType\Former_Worker_Personal_Information_DataType
     */
    public function addToNational_Identifier_Data(\StructType\National_IDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\National_IDType) {
            throw new \InvalidArgumentException(sprintf('The National_Identifier_Data property can only contain items of type \StructType\National_IDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->National_Identifier_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Former_Worker_Personal_Information_DataType
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
