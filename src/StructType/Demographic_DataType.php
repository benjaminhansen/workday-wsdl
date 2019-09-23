<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Demographic_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Demographic data (e.g. Marital Status, Ethnicity, etc.) associated with a person.
 * @subpackage Structs
 */
class Demographic_DataType extends AbstractStructBase
{
    /**
     * The Marital_Status_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Marital_Status_ReferenceType
     */
    public $Marital_Status_Reference;
    /**
     * The Hispanic_or_Latino
     * Meta information extracted from the WSDL
     * - documentation: A flag indicating Hispanic or Latino for EEO purposes.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Hispanic_or_Latino;
    /**
     * The Ethnicity_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Ethnicity_ReferenceType[]
     */
    public $Ethnicity_Reference;
    /**
     * The Citizenship_Status_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Citizenship_Status_ReferenceType[]
     */
    public $Citizenship_Status_Reference;
    /**
     * The Nationality_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for the person's Country of Nationality
     * - minOccurs: 0
     * @var \StructType\CountryObjectType
     */
    public $Nationality_Reference;
    /**
     * The Hukou_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country Region on the Hukou of the person. This field is only available for the country China and the person with citizenship status of China.
     * - minOccurs: 0
     * @var \StructType\Country_RegionObjectType
     */
    public $Hukou_Region_Reference;
    /**
     * The Hukou_Subregion_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country Subregion on the Hukou of the person. This field is only available for the country China and the person with citizenship status of China.
     * - minOccurs: 0
     * @var \StructType\Country_SubregionObjectType
     */
    public $Hukou_Subregion_Reference;
    /**
     * The Hukou_Locality
     * Meta information extracted from the WSDL
     * - documentation: Locality on the Hukou of the person. This field is only available for the country China and the person with citizenship status of China.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Hukou_Locality;
    /**
     * The Hukou_Postal_Code
     * Meta information extracted from the WSDL
     * - documentation: Hukou postal code for the person. This field is only available for the country China and the person with citizenship status of China.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Hukou_Postal_Code;
    /**
     * The Hukou_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Hukou type on the Hukou of the person. This field is only available for the country China and the person with citizenship status of China.
     * - minOccurs: 0
     * @var \StructType\Hukou_TypeObjectType
     */
    public $Hukou_Type_Reference;
    /**
     * The Native_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Native Region for the person.
     * - minOccurs: 0
     * @var \StructType\Country_RegionObjectType
     */
    public $Native_Region_Reference;
    /**
     * The Personnel_File_Agency
     * Meta information extracted from the WSDL
     * - documentation: Personnel File Agency is used in China to indicate where workers have their personnel file stored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Personnel_File_Agency;
    /**
     * The Military_Service_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Military_Service_DataType[]
     */
    public $Military_Service_Data;
    /**
     * Constructor method for Demographic_DataType
     * @uses Demographic_DataType::setMarital_Status_Reference()
     * @uses Demographic_DataType::setHispanic_or_Latino()
     * @uses Demographic_DataType::setEthnicity_Reference()
     * @uses Demographic_DataType::setCitizenship_Status_Reference()
     * @uses Demographic_DataType::setNationality_Reference()
     * @uses Demographic_DataType::setHukou_Region_Reference()
     * @uses Demographic_DataType::setHukou_Subregion_Reference()
     * @uses Demographic_DataType::setHukou_Locality()
     * @uses Demographic_DataType::setHukou_Postal_Code()
     * @uses Demographic_DataType::setHukou_Type_Reference()
     * @uses Demographic_DataType::setNative_Region_Reference()
     * @uses Demographic_DataType::setPersonnel_File_Agency()
     * @uses Demographic_DataType::setMilitary_Service_Data()
     * @param \StructType\Marital_Status_ReferenceType $marital_Status_Reference
     * @param bool $hispanic_or_Latino
     * @param \StructType\Ethnicity_ReferenceType[] $ethnicity_Reference
     * @param \StructType\Citizenship_Status_ReferenceType[] $citizenship_Status_Reference
     * @param \StructType\CountryObjectType $nationality_Reference
     * @param \StructType\Country_RegionObjectType $hukou_Region_Reference
     * @param \StructType\Country_SubregionObjectType $hukou_Subregion_Reference
     * @param string $hukou_Locality
     * @param string $hukou_Postal_Code
     * @param \StructType\Hukou_TypeObjectType $hukou_Type_Reference
     * @param \StructType\Country_RegionObjectType $native_Region_Reference
     * @param string $personnel_File_Agency
     * @param \StructType\Military_Service_DataType[] $military_Service_Data
     */
    public function __construct(\StructType\Marital_Status_ReferenceType $marital_Status_Reference = null, $hispanic_or_Latino = null, array $ethnicity_Reference = array(), array $citizenship_Status_Reference = array(), \StructType\CountryObjectType $nationality_Reference = null, \StructType\Country_RegionObjectType $hukou_Region_Reference = null, \StructType\Country_SubregionObjectType $hukou_Subregion_Reference = null, $hukou_Locality = null, $hukou_Postal_Code = null, \StructType\Hukou_TypeObjectType $hukou_Type_Reference = null, \StructType\Country_RegionObjectType $native_Region_Reference = null, $personnel_File_Agency = null, array $military_Service_Data = array())
    {
        $this
            ->setMarital_Status_Reference($marital_Status_Reference)
            ->setHispanic_or_Latino($hispanic_or_Latino)
            ->setEthnicity_Reference($ethnicity_Reference)
            ->setCitizenship_Status_Reference($citizenship_Status_Reference)
            ->setNationality_Reference($nationality_Reference)
            ->setHukou_Region_Reference($hukou_Region_Reference)
            ->setHukou_Subregion_Reference($hukou_Subregion_Reference)
            ->setHukou_Locality($hukou_Locality)
            ->setHukou_Postal_Code($hukou_Postal_Code)
            ->setHukou_Type_Reference($hukou_Type_Reference)
            ->setNative_Region_Reference($native_Region_Reference)
            ->setPersonnel_File_Agency($personnel_File_Agency)
            ->setMilitary_Service_Data($military_Service_Data);
    }
    /**
     * Get Marital_Status_Reference value
     * @return \StructType\Marital_Status_ReferenceType|null
     */
    public function getMarital_Status_Reference()
    {
        return $this->Marital_Status_Reference;
    }
    /**
     * Set Marital_Status_Reference value
     * @param \StructType\Marital_Status_ReferenceType $marital_Status_Reference
     * @return \StructType\Demographic_DataType
     */
    public function setMarital_Status_Reference(\StructType\Marital_Status_ReferenceType $marital_Status_Reference = null)
    {
        $this->Marital_Status_Reference = $marital_Status_Reference;
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
     * @return \StructType\Demographic_DataType
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
     * Get Ethnicity_Reference value
     * @return \StructType\Ethnicity_ReferenceType[]|null
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
        foreach ($values as $demographic_DataTypeEthnicity_ReferenceItem) {
            // validation for constraint: itemType
            if (!$demographic_DataTypeEthnicity_ReferenceItem instanceof \StructType\Ethnicity_ReferenceType) {
                $invalidValues[] = is_object($demographic_DataTypeEthnicity_ReferenceItem) ? get_class($demographic_DataTypeEthnicity_ReferenceItem) : sprintf('%s(%s)', gettype($demographic_DataTypeEthnicity_ReferenceItem), var_export($demographic_DataTypeEthnicity_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Ethnicity_Reference property can only contain items of type \StructType\Ethnicity_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Ethnicity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Ethnicity_ReferenceType[] $ethnicity_Reference
     * @return \StructType\Demographic_DataType
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
     * @param \StructType\Ethnicity_ReferenceType $item
     * @return \StructType\Demographic_DataType
     */
    public function addToEthnicity_Reference(\StructType\Ethnicity_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Ethnicity_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Ethnicity_Reference property can only contain items of type \StructType\Ethnicity_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Ethnicity_Reference[] = $item;
        return $this;
    }
    /**
     * Get Citizenship_Status_Reference value
     * @return \StructType\Citizenship_Status_ReferenceType[]|null
     */
    public function getCitizenship_Status_Reference()
    {
        return $this->Citizenship_Status_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCitizenship_Status_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCitizenship_Status_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCitizenship_Status_ReferenceForArrayConstraintsFromSetCitizenship_Status_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $demographic_DataTypeCitizenship_Status_ReferenceItem) {
            // validation for constraint: itemType
            if (!$demographic_DataTypeCitizenship_Status_ReferenceItem instanceof \StructType\Citizenship_Status_ReferenceType) {
                $invalidValues[] = is_object($demographic_DataTypeCitizenship_Status_ReferenceItem) ? get_class($demographic_DataTypeCitizenship_Status_ReferenceItem) : sprintf('%s(%s)', gettype($demographic_DataTypeCitizenship_Status_ReferenceItem), var_export($demographic_DataTypeCitizenship_Status_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Citizenship_Status_Reference property can only contain items of type \StructType\Citizenship_Status_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Citizenship_Status_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Citizenship_Status_ReferenceType[] $citizenship_Status_Reference
     * @return \StructType\Demographic_DataType
     */
    public function setCitizenship_Status_Reference(array $citizenship_Status_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($citizenship_Status_ReferenceArrayErrorMessage = self::validateCitizenship_Status_ReferenceForArrayConstraintsFromSetCitizenship_Status_Reference($citizenship_Status_Reference))) {
            throw new \InvalidArgumentException($citizenship_Status_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Citizenship_Status_Reference = $citizenship_Status_Reference;
        return $this;
    }
    /**
     * Add item to Citizenship_Status_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Citizenship_Status_ReferenceType $item
     * @return \StructType\Demographic_DataType
     */
    public function addToCitizenship_Status_Reference(\StructType\Citizenship_Status_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Citizenship_Status_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Citizenship_Status_Reference property can only contain items of type \StructType\Citizenship_Status_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Citizenship_Status_Reference[] = $item;
        return $this;
    }
    /**
     * Get Nationality_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getNationality_Reference()
    {
        return $this->Nationality_Reference;
    }
    /**
     * Set Nationality_Reference value
     * @param \StructType\CountryObjectType $nationality_Reference
     * @return \StructType\Demographic_DataType
     */
    public function setNationality_Reference(\StructType\CountryObjectType $nationality_Reference = null)
    {
        $this->Nationality_Reference = $nationality_Reference;
        return $this;
    }
    /**
     * Get Hukou_Region_Reference value
     * @return \StructType\Country_RegionObjectType|null
     */
    public function getHukou_Region_Reference()
    {
        return $this->Hukou_Region_Reference;
    }
    /**
     * Set Hukou_Region_Reference value
     * @param \StructType\Country_RegionObjectType $hukou_Region_Reference
     * @return \StructType\Demographic_DataType
     */
    public function setHukou_Region_Reference(\StructType\Country_RegionObjectType $hukou_Region_Reference = null)
    {
        $this->Hukou_Region_Reference = $hukou_Region_Reference;
        return $this;
    }
    /**
     * Get Hukou_Subregion_Reference value
     * @return \StructType\Country_SubregionObjectType|null
     */
    public function getHukou_Subregion_Reference()
    {
        return $this->Hukou_Subregion_Reference;
    }
    /**
     * Set Hukou_Subregion_Reference value
     * @param \StructType\Country_SubregionObjectType $hukou_Subregion_Reference
     * @return \StructType\Demographic_DataType
     */
    public function setHukou_Subregion_Reference(\StructType\Country_SubregionObjectType $hukou_Subregion_Reference = null)
    {
        $this->Hukou_Subregion_Reference = $hukou_Subregion_Reference;
        return $this;
    }
    /**
     * Get Hukou_Locality value
     * @return string|null
     */
    public function getHukou_Locality()
    {
        return $this->Hukou_Locality;
    }
    /**
     * Set Hukou_Locality value
     * @param string $hukou_Locality
     * @return \StructType\Demographic_DataType
     */
    public function setHukou_Locality($hukou_Locality = null)
    {
        // validation for constraint: string
        if (!is_null($hukou_Locality) && !is_string($hukou_Locality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hukou_Locality, true), gettype($hukou_Locality)), __LINE__);
        }
        $this->Hukou_Locality = $hukou_Locality;
        return $this;
    }
    /**
     * Get Hukou_Postal_Code value
     * @return string|null
     */
    public function getHukou_Postal_Code()
    {
        return $this->Hukou_Postal_Code;
    }
    /**
     * Set Hukou_Postal_Code value
     * @param string $hukou_Postal_Code
     * @return \StructType\Demographic_DataType
     */
    public function setHukou_Postal_Code($hukou_Postal_Code = null)
    {
        // validation for constraint: string
        if (!is_null($hukou_Postal_Code) && !is_string($hukou_Postal_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hukou_Postal_Code, true), gettype($hukou_Postal_Code)), __LINE__);
        }
        $this->Hukou_Postal_Code = $hukou_Postal_Code;
        return $this;
    }
    /**
     * Get Hukou_Type_Reference value
     * @return \StructType\Hukou_TypeObjectType|null
     */
    public function getHukou_Type_Reference()
    {
        return $this->Hukou_Type_Reference;
    }
    /**
     * Set Hukou_Type_Reference value
     * @param \StructType\Hukou_TypeObjectType $hukou_Type_Reference
     * @return \StructType\Demographic_DataType
     */
    public function setHukou_Type_Reference(\StructType\Hukou_TypeObjectType $hukou_Type_Reference = null)
    {
        $this->Hukou_Type_Reference = $hukou_Type_Reference;
        return $this;
    }
    /**
     * Get Native_Region_Reference value
     * @return \StructType\Country_RegionObjectType|null
     */
    public function getNative_Region_Reference()
    {
        return $this->Native_Region_Reference;
    }
    /**
     * Set Native_Region_Reference value
     * @param \StructType\Country_RegionObjectType $native_Region_Reference
     * @return \StructType\Demographic_DataType
     */
    public function setNative_Region_Reference(\StructType\Country_RegionObjectType $native_Region_Reference = null)
    {
        $this->Native_Region_Reference = $native_Region_Reference;
        return $this;
    }
    /**
     * Get Personnel_File_Agency value
     * @return string|null
     */
    public function getPersonnel_File_Agency()
    {
        return $this->Personnel_File_Agency;
    }
    /**
     * Set Personnel_File_Agency value
     * @param string $personnel_File_Agency
     * @return \StructType\Demographic_DataType
     */
    public function setPersonnel_File_Agency($personnel_File_Agency = null)
    {
        // validation for constraint: string
        if (!is_null($personnel_File_Agency) && !is_string($personnel_File_Agency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personnel_File_Agency, true), gettype($personnel_File_Agency)), __LINE__);
        }
        $this->Personnel_File_Agency = $personnel_File_Agency;
        return $this;
    }
    /**
     * Get Military_Service_Data value
     * @return \StructType\Military_Service_DataType[]|null
     */
    public function getMilitary_Service_Data()
    {
        return $this->Military_Service_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setMilitary_Service_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMilitary_Service_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMilitary_Service_DataForArrayConstraintsFromSetMilitary_Service_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $demographic_DataTypeMilitary_Service_DataItem) {
            // validation for constraint: itemType
            if (!$demographic_DataTypeMilitary_Service_DataItem instanceof \StructType\Military_Service_DataType) {
                $invalidValues[] = is_object($demographic_DataTypeMilitary_Service_DataItem) ? get_class($demographic_DataTypeMilitary_Service_DataItem) : sprintf('%s(%s)', gettype($demographic_DataTypeMilitary_Service_DataItem), var_export($demographic_DataTypeMilitary_Service_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Military_Service_Data property can only contain items of type \StructType\Military_Service_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Military_Service_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Military_Service_DataType[] $military_Service_Data
     * @return \StructType\Demographic_DataType
     */
    public function setMilitary_Service_Data(array $military_Service_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($military_Service_DataArrayErrorMessage = self::validateMilitary_Service_DataForArrayConstraintsFromSetMilitary_Service_Data($military_Service_Data))) {
            throw new \InvalidArgumentException($military_Service_DataArrayErrorMessage, __LINE__);
        }
        $this->Military_Service_Data = $military_Service_Data;
        return $this;
    }
    /**
     * Add item to Military_Service_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Military_Service_DataType $item
     * @return \StructType\Demographic_DataType
     */
    public function addToMilitary_Service_Data(\StructType\Military_Service_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Military_Service_DataType) {
            throw new \InvalidArgumentException(sprintf('The Military_Service_Data property can only contain items of type \StructType\Military_Service_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Military_Service_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Demographic_DataType
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
