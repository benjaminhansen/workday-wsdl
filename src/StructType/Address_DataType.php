<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Address Line 9 (or Address Line 9 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 8 (or Address Line 8 - Local if configured on Tenant Setup Global) is Required for this Country. | Address
 * Line 7 (or Address Line 7 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 6 (or Address Line 6 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 5 (or Address Line 5
 * - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 1 (or Address Line 1 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 9 is not Valid for this Country. | Address Line
 * 8 is not Valid for this Country. | Address Line 7 is not Valid for this Country. | Address Line 6 is not Valid for this Country. | Address Line 5 is not Valid for this Country. | Address Line 4 is not Valid for this Country. | Address Line 3 is not
 * Valid for this Country. | Address Line 2 not Valid for this Country. | Address Line 1 is not valid for this Country. | Postal Code must be valid for the Region. | Home addresses which are not additionally used as work addresses cannot be marked as
 * public. | Region is required for certain countries. | A maximum of four Address Lines are allowed in an address. | A maximum of four Subregions are allowed in an address. | A maximum of four Submunicipalities are allowed in an address. | Second
 * Submunicipality is not a valid address component for certain countries. | Submunicipality is not a valid address component for certain countries. | Second Subregion is not a valid address component for certain countries. | Subregion is not a valid
 * address component for certain countries. | Fourth Address Line is not a valid address component for certain countries. | Third Address Line is not a valid address component for certain countries. | Second Address Line is not a valid address component
 * for certain countries. | Second Submunicipality is required for certain countries. | Submunicipality (or City Subdivision - Local if configured on Tenant Setup Global) is required for certain countries. | Second Subregion is required for certain
 * countries. | Subregion is required for certain countries. | Fourth Address Line is required for certain countries. | Third Address Line is required for certain countries. | Second Address Line is required for certain countries. | Address Line is
 * required for certain countries. | Postal Code is not a valid address component for certain countries. | Municipality is not a valid address component for certain countries . | Postal Code is required for certain countries. | Municipality is required
 * for certain countries. | Region Name must be valid for the specified Country. | Usage Type and Use For combination must be valid for Address. | Encapsulating element for all Address data.
 * @subpackage Structs
 */
class Address_DataType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * @var \StructType\Country_ReferenceType
     */
    public $Country_Reference;
    /**
     * The Address_Line
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Address_Line_DataType[]
     */
    public $Address_Line;
    /**
     * The Municipality
     * Meta information extracted from the WSDL
     * - documentation: Municipality
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Municipality;
    /**
     * The Submunicipality
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all Submunicipality data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Submunicipality;
    /**
     * The Region
     * Meta information extracted from the WSDL
     * - documentation: Region (e.g. State, Province, etc.)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Region;
    /**
     * The Subregion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Subregion_DataType[]
     */
    public $Subregion;
    /**
     * The Postal_Code
     * Meta information extracted from the WSDL
     * - documentation: Postal Code
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Postal_Code;
    /**
     * The Usage_Data
     * @var \StructType\Communication_Method_Usage_DataType
     */
    public $Usage_Data;
    /**
     * The Last_Modified
     * Meta information extracted from the WSDL
     * - documentation: Date of last change to Address.
     * @var string
     */
    public $Last_Modified;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective date of address.
     * @var string
     */
    public $Effective_Date;
    /**
     * Constructor method for Address_DataType
     * @uses Address_DataType::setCountry_Reference()
     * @uses Address_DataType::setAddress_Line()
     * @uses Address_DataType::setMunicipality()
     * @uses Address_DataType::setSubmunicipality()
     * @uses Address_DataType::setRegion()
     * @uses Address_DataType::setSubregion()
     * @uses Address_DataType::setPostal_Code()
     * @uses Address_DataType::setUsage_Data()
     * @uses Address_DataType::setLast_Modified()
     * @uses Address_DataType::setEffective_Date()
     * @param \StructType\Country_ReferenceType $country_Reference
     * @param \StructType\Address_Line_DataType[] $address_Line
     * @param string $municipality
     * @param string[] $submunicipality
     * @param string $region
     * @param \StructType\Subregion_DataType[] $subregion
     * @param string $postal_Code
     * @param \StructType\Communication_Method_Usage_DataType $usage_Data
     * @param string $last_Modified
     * @param string $effective_Date
     */
    public function __construct(\StructType\Country_ReferenceType $country_Reference = null, array $address_Line = array(), $municipality = null, array $submunicipality = array(), $region = null, array $subregion = array(), $postal_Code = null, \StructType\Communication_Method_Usage_DataType $usage_Data = null, $last_Modified = null, $effective_Date = null)
    {
        $this
            ->setCountry_Reference($country_Reference)
            ->setAddress_Line($address_Line)
            ->setMunicipality($municipality)
            ->setSubmunicipality($submunicipality)
            ->setRegion($region)
            ->setSubregion($subregion)
            ->setPostal_Code($postal_Code)
            ->setUsage_Data($usage_Data)
            ->setLast_Modified($last_Modified)
            ->setEffective_Date($effective_Date);
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
     * @return \StructType\Address_DataType
     */
    public function setCountry_Reference(\StructType\Country_ReferenceType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Address_Line value
     * @return \StructType\Address_Line_DataType[]|null
     */
    public function getAddress_Line()
    {
        return $this->Address_Line;
    }
    /**
     * This method is responsible for validating the values passed to the setAddress_Line method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress_Line method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddress_LineForArrayConstraintsFromSetAddress_Line(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $address_DataTypeAddress_LineItem) {
            // validation for constraint: itemType
            if (!$address_DataTypeAddress_LineItem instanceof \StructType\Address_Line_DataType) {
                $invalidValues[] = is_object($address_DataTypeAddress_LineItem) ? get_class($address_DataTypeAddress_LineItem) : sprintf('%s(%s)', gettype($address_DataTypeAddress_LineItem), var_export($address_DataTypeAddress_LineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address_Line property can only contain items of type \StructType\Address_Line_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Address_Line value
     * @throws \InvalidArgumentException
     * @param \StructType\Address_Line_DataType[] $address_Line
     * @return \StructType\Address_DataType
     */
    public function setAddress_Line(array $address_Line = array())
    {
        // validation for constraint: array
        if ('' !== ($address_LineArrayErrorMessage = self::validateAddress_LineForArrayConstraintsFromSetAddress_Line($address_Line))) {
            throw new \InvalidArgumentException($address_LineArrayErrorMessage, __LINE__);
        }
        $this->Address_Line = $address_Line;
        return $this;
    }
    /**
     * Add item to Address_Line value
     * @throws \InvalidArgumentException
     * @param \StructType\Address_Line_DataType $item
     * @return \StructType\Address_DataType
     */
    public function addToAddress_Line(\StructType\Address_Line_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Address_Line_DataType) {
            throw new \InvalidArgumentException(sprintf('The Address_Line property can only contain items of type \StructType\Address_Line_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Address_Line[] = $item;
        return $this;
    }
    /**
     * Get Municipality value
     * @return string|null
     */
    public function getMunicipality()
    {
        return $this->Municipality;
    }
    /**
     * Set Municipality value
     * @param string $municipality
     * @return \StructType\Address_DataType
     */
    public function setMunicipality($municipality = null)
    {
        // validation for constraint: string
        if (!is_null($municipality) && !is_string($municipality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($municipality, true), gettype($municipality)), __LINE__);
        }
        $this->Municipality = $municipality;
        return $this;
    }
    /**
     * Get Submunicipality value
     * @return string[]|null
     */
    public function getSubmunicipality()
    {
        return $this->Submunicipality;
    }
    /**
     * This method is responsible for validating the values passed to the setSubmunicipality method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubmunicipality method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubmunicipalityForArrayConstraintsFromSetSubmunicipality(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $address_DataTypeSubmunicipalityItem) {
            // validation for constraint: itemType
            if (!is_string($address_DataTypeSubmunicipalityItem)) {
                $invalidValues[] = is_object($address_DataTypeSubmunicipalityItem) ? get_class($address_DataTypeSubmunicipalityItem) : sprintf('%s(%s)', gettype($address_DataTypeSubmunicipalityItem), var_export($address_DataTypeSubmunicipalityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Submunicipality property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Submunicipality value
     * @throws \InvalidArgumentException
     * @param string[] $submunicipality
     * @return \StructType\Address_DataType
     */
    public function setSubmunicipality(array $submunicipality = array())
    {
        // validation for constraint: array
        if ('' !== ($submunicipalityArrayErrorMessage = self::validateSubmunicipalityForArrayConstraintsFromSetSubmunicipality($submunicipality))) {
            throw new \InvalidArgumentException($submunicipalityArrayErrorMessage, __LINE__);
        }
        $this->Submunicipality = $submunicipality;
        return $this;
    }
    /**
     * Add item to Submunicipality value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\Address_DataType
     */
    public function addToSubmunicipality($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Submunicipality property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Submunicipality[] = $item;
        return $this;
    }
    /**
     * Get Region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param string $region
     * @return \StructType\Address_DataType
     */
    public function setRegion($region = null)
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region, true), gettype($region)), __LINE__);
        }
        $this->Region = $region;
        return $this;
    }
    /**
     * Get Subregion value
     * @return \StructType\Subregion_DataType[]|null
     */
    public function getSubregion()
    {
        return $this->Subregion;
    }
    /**
     * This method is responsible for validating the values passed to the setSubregion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubregion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubregionForArrayConstraintsFromSetSubregion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $address_DataTypeSubregionItem) {
            // validation for constraint: itemType
            if (!$address_DataTypeSubregionItem instanceof \StructType\Subregion_DataType) {
                $invalidValues[] = is_object($address_DataTypeSubregionItem) ? get_class($address_DataTypeSubregionItem) : sprintf('%s(%s)', gettype($address_DataTypeSubregionItem), var_export($address_DataTypeSubregionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Subregion property can only contain items of type \StructType\Subregion_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Subregion value
     * @throws \InvalidArgumentException
     * @param \StructType\Subregion_DataType[] $subregion
     * @return \StructType\Address_DataType
     */
    public function setSubregion(array $subregion = array())
    {
        // validation for constraint: array
        if ('' !== ($subregionArrayErrorMessage = self::validateSubregionForArrayConstraintsFromSetSubregion($subregion))) {
            throw new \InvalidArgumentException($subregionArrayErrorMessage, __LINE__);
        }
        $this->Subregion = $subregion;
        return $this;
    }
    /**
     * Add item to Subregion value
     * @throws \InvalidArgumentException
     * @param \StructType\Subregion_DataType $item
     * @return \StructType\Address_DataType
     */
    public function addToSubregion(\StructType\Subregion_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Subregion_DataType) {
            throw new \InvalidArgumentException(sprintf('The Subregion property can only contain items of type \StructType\Subregion_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Subregion[] = $item;
        return $this;
    }
    /**
     * Get Postal_Code value
     * @return string|null
     */
    public function getPostal_Code()
    {
        return $this->Postal_Code;
    }
    /**
     * Set Postal_Code value
     * @param string $postal_Code
     * @return \StructType\Address_DataType
     */
    public function setPostal_Code($postal_Code = null)
    {
        // validation for constraint: string
        if (!is_null($postal_Code) && !is_string($postal_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postal_Code, true), gettype($postal_Code)), __LINE__);
        }
        $this->Postal_Code = $postal_Code;
        return $this;
    }
    /**
     * Get Usage_Data value
     * @return \StructType\Communication_Method_Usage_DataType|null
     */
    public function getUsage_Data()
    {
        return $this->Usage_Data;
    }
    /**
     * Set Usage_Data value
     * @param \StructType\Communication_Method_Usage_DataType $usage_Data
     * @return \StructType\Address_DataType
     */
    public function setUsage_Data(\StructType\Communication_Method_Usage_DataType $usage_Data = null)
    {
        $this->Usage_Data = $usage_Data;
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
     * @return \StructType\Address_DataType
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
     * @return \StructType\Address_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Address_DataType
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
