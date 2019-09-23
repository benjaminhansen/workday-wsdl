<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Biographic_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Biographical data (e.g. DOB, Gender, etc.) associated with a person.
 * @subpackage Structs
 */
class Biographic_DataType extends AbstractStructBase
{
    /**
     * The Country_Of_Birth_Reference
     * Meta information extracted from the WSDL
     * - documentation: ISO Code identifying the country where the naming rules for this name are defined. Workday enables you to specify an ISO Code at the country level. Each customer can also define various rules around names, required fields for names,
     * and labels for name fields at the Country level. http://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     * - minOccurs: 0
     * @var \StructType\Country_Of_Birth_ReferenceType
     */
    public $Country_Of_Birth_Reference;
    /**
     * The Place_Of_Birth
     * Meta information extracted from the WSDL
     * - documentation: City or Place of Birth.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Place_Of_Birth;
    /**
     * The Date_Of_Birth
     * Meta information extracted from the WSDL
     * - documentation: Date of Birth.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_Of_Birth;
    /**
     * The Gender_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique attribute name and description that identifies a valid instance of gender.
     * - minOccurs: 0
     * @var \StructType\Gender_ReferenceType
     */
    public $Gender_Reference;
    /**
     * The Disability_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Disability_ReferenceType[]
     */
    public $Disability_Reference;
    /**
     * The Uses_Tobacco
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether employee uses tobacco.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Uses_Tobacco;
    /**
     * Constructor method for Biographic_DataType
     * @uses Biographic_DataType::setCountry_Of_Birth_Reference()
     * @uses Biographic_DataType::setPlace_Of_Birth()
     * @uses Biographic_DataType::setDate_Of_Birth()
     * @uses Biographic_DataType::setGender_Reference()
     * @uses Biographic_DataType::setDisability_Reference()
     * @uses Biographic_DataType::setUses_Tobacco()
     * @param \StructType\Country_Of_Birth_ReferenceType $country_Of_Birth_Reference
     * @param string $place_Of_Birth
     * @param string $date_Of_Birth
     * @param \StructType\Gender_ReferenceType $gender_Reference
     * @param \StructType\Disability_ReferenceType[] $disability_Reference
     * @param bool $uses_Tobacco
     */
    public function __construct(\StructType\Country_Of_Birth_ReferenceType $country_Of_Birth_Reference = null, $place_Of_Birth = null, $date_Of_Birth = null, \StructType\Gender_ReferenceType $gender_Reference = null, array $disability_Reference = array(), $uses_Tobacco = null)
    {
        $this
            ->setCountry_Of_Birth_Reference($country_Of_Birth_Reference)
            ->setPlace_Of_Birth($place_Of_Birth)
            ->setDate_Of_Birth($date_Of_Birth)
            ->setGender_Reference($gender_Reference)
            ->setDisability_Reference($disability_Reference)
            ->setUses_Tobacco($uses_Tobacco);
    }
    /**
     * Get Country_Of_Birth_Reference value
     * @return \StructType\Country_Of_Birth_ReferenceType|null
     */
    public function getCountry_Of_Birth_Reference()
    {
        return $this->Country_Of_Birth_Reference;
    }
    /**
     * Set Country_Of_Birth_Reference value
     * @param \StructType\Country_Of_Birth_ReferenceType $country_Of_Birth_Reference
     * @return \StructType\Biographic_DataType
     */
    public function setCountry_Of_Birth_Reference(\StructType\Country_Of_Birth_ReferenceType $country_Of_Birth_Reference = null)
    {
        $this->Country_Of_Birth_Reference = $country_Of_Birth_Reference;
        return $this;
    }
    /**
     * Get Place_Of_Birth value
     * @return string|null
     */
    public function getPlace_Of_Birth()
    {
        return $this->Place_Of_Birth;
    }
    /**
     * Set Place_Of_Birth value
     * @param string $place_Of_Birth
     * @return \StructType\Biographic_DataType
     */
    public function setPlace_Of_Birth($place_Of_Birth = null)
    {
        // validation for constraint: string
        if (!is_null($place_Of_Birth) && !is_string($place_Of_Birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($place_Of_Birth, true), gettype($place_Of_Birth)), __LINE__);
        }
        $this->Place_Of_Birth = $place_Of_Birth;
        return $this;
    }
    /**
     * Get Date_Of_Birth value
     * @return string|null
     */
    public function getDate_Of_Birth()
    {
        return $this->Date_Of_Birth;
    }
    /**
     * Set Date_Of_Birth value
     * @param string $date_Of_Birth
     * @return \StructType\Biographic_DataType
     */
    public function setDate_Of_Birth($date_Of_Birth = null)
    {
        // validation for constraint: string
        if (!is_null($date_Of_Birth) && !is_string($date_Of_Birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_Of_Birth, true), gettype($date_Of_Birth)), __LINE__);
        }
        $this->Date_Of_Birth = $date_Of_Birth;
        return $this;
    }
    /**
     * Get Gender_Reference value
     * @return \StructType\Gender_ReferenceType|null
     */
    public function getGender_Reference()
    {
        return $this->Gender_Reference;
    }
    /**
     * Set Gender_Reference value
     * @param \StructType\Gender_ReferenceType $gender_Reference
     * @return \StructType\Biographic_DataType
     */
    public function setGender_Reference(\StructType\Gender_ReferenceType $gender_Reference = null)
    {
        $this->Gender_Reference = $gender_Reference;
        return $this;
    }
    /**
     * Get Disability_Reference value
     * @return \StructType\Disability_ReferenceType[]|null
     */
    public function getDisability_Reference()
    {
        return $this->Disability_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setDisability_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisability_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisability_ReferenceForArrayConstraintsFromSetDisability_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $biographic_DataTypeDisability_ReferenceItem) {
            // validation for constraint: itemType
            if (!$biographic_DataTypeDisability_ReferenceItem instanceof \StructType\Disability_ReferenceType) {
                $invalidValues[] = is_object($biographic_DataTypeDisability_ReferenceItem) ? get_class($biographic_DataTypeDisability_ReferenceItem) : sprintf('%s(%s)', gettype($biographic_DataTypeDisability_ReferenceItem), var_export($biographic_DataTypeDisability_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Disability_Reference property can only contain items of type \StructType\Disability_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Disability_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Disability_ReferenceType[] $disability_Reference
     * @return \StructType\Biographic_DataType
     */
    public function setDisability_Reference(array $disability_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($disability_ReferenceArrayErrorMessage = self::validateDisability_ReferenceForArrayConstraintsFromSetDisability_Reference($disability_Reference))) {
            throw new \InvalidArgumentException($disability_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Disability_Reference = $disability_Reference;
        return $this;
    }
    /**
     * Add item to Disability_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Disability_ReferenceType $item
     * @return \StructType\Biographic_DataType
     */
    public function addToDisability_Reference(\StructType\Disability_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Disability_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Disability_Reference property can only contain items of type \StructType\Disability_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Disability_Reference[] = $item;
        return $this;
    }
    /**
     * Get Uses_Tobacco value
     * @return bool|null
     */
    public function getUses_Tobacco()
    {
        return $this->Uses_Tobacco;
    }
    /**
     * Set Uses_Tobacco value
     * @param bool $uses_Tobacco
     * @return \StructType\Biographic_DataType
     */
    public function setUses_Tobacco($uses_Tobacco = null)
    {
        // validation for constraint: boolean
        if (!is_null($uses_Tobacco) && !is_bool($uses_Tobacco)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($uses_Tobacco, true), gettype($uses_Tobacco)), __LINE__);
        }
        $this->Uses_Tobacco = $uses_Tobacco;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Biographic_DataType
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
