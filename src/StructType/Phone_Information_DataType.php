<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Phone_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Phone ID field is for updating the value of the Phone Reference. It cannot be the same as another existing phone. | Either 'Country ISO Code' or 'International Phone Code' must be included on internal element 'Phone Information
 * Data' | Element Content 'Phone Device Type Reference' is required, on internal element 'Phone Information Data' | When Do Not Replace All is False for all phone elements, you can't pass a Phone Reference. | Primary Phone can't be deleted when there
 * are additional phones with the same Usage Type or the phone reference does not belong to the processing record. | Invalid Phone Reference or the phone number with this Phone Reference has been deleted. | When Do Not Replace All is False for all phone
 * elements, Delete can't be True. | You can't change the Usage Type of an existing phone. | Phone Number is required unless you are deleting a phone number. | You can't change a primary phone to an additional phone or an additional phone to a primary
 * phone. | Phone Reference is required when you delete a phone number. | Usage Data is required unless you are deleting a phone number. | Invalid Usage Type and Use For combination for Phone. | Phone Information
 * @subpackage Structs
 */
class Phone_Information_DataType extends AbstractStructBase
{
    /**
     * The Country_ISO_Code
     * Meta information extracted from the WSDL
     * - documentation: Country ISO code. If the Country ISO code is specified, then this ISO code will be used to determine the Country Phone Code for (eliminate space between f and o) the phone. Pass this ISO code to distinguish between multiple countries
     * sharing the same Country Phone Code. (For example, 1 is the Country Phone Code that is shared by USA, Canada, Dominican Republic, Bermuda, Jamaica, and Puerto Rico.)
     * - base: xsd:string
     * - maxLength: 3
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Country_ISO_Code;
    /**
     * The International_Phone_Code
     * Meta information extracted from the WSDL
     * - documentation: International phone code number.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $International_Phone_Code;
    /**
     * The Phone_Number
     * Meta information extracted from the WSDL
     * - documentation: Full phone number.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Phone_Number;
    /**
     * The Phone_Extension
     * Meta information extracted from the WSDL
     * - documentation: Phone extension.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Phone_Extension;
    /**
     * The Phone_Device_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for Phone Device Type.
     * - minOccurs: 0
     * @var \StructType\Phone_Device_TypeObjectType
     */
    public $Phone_Device_Type_Reference;
    /**
     * The Usage_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all Communication Method Usage data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Communication_Method_Usage_Information_DataType[]
     */
    public $Usage_Data;
    /**
     * The Phone_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Phone Reference ID.
     * - minOccurs: 0
     * @var \StructType\Phone_ReferenceObjectType
     */
    public $Phone_Reference;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: New ID value used in phone updates. The ID cannot already be in use by another phone.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Area_Code
     * Meta information extracted from the WSDL
     * - documentation: Area code number.
     * @var string
     */
    public $Area_Code;
    /**
     * The Tenant_Formatted_Phone
     * Meta information extracted from the WSDL
     * - documentation: The Phone Number formatted according to tenant setup. This data is not used in inbound requests. Any data provided for this attribute will be ignored.
     * @var string
     */
    public $Tenant_Formatted_Phone;
    /**
     * The International_Formatted_Phone
     * Meta information extracted from the WSDL
     * - documentation: The formatted International Phone number with Extension. This data is not used in inbound requests. Any data provided for this attribute will be ignored.
     * @var string
     */
    public $International_Formatted_Phone;
    /**
     * The Phone_Number_Without_Area_Code
     * Meta information extracted from the WSDL
     * - documentation: The Phone number. This data is not used in inbound requests.
     * @var string
     */
    public $Phone_Number_Without_Area_Code;
    /**
     * The National_Formatted_Phone
     * Meta information extracted from the WSDL
     * - documentation: The formatted National Phone number with Extension. This data is not used in inbound requests.
     * @var string
     */
    public $National_Formatted_Phone;
    /**
     * The E164_Formatted_Phone
     * Meta information extracted from the WSDL
     * - documentation: The formatted E164 Phone number with Extension. This data is not used in inbound requests.
     * @var string
     */
    public $E164_Formatted_Phone;
    /**
     * The Workday_Traditional_Formatted_Phone
     * Meta information extracted from the WSDL
     * - documentation: The formatted Workday Traditional Phone number with Extension. This data is not used in inbound requests.
     * @var string
     */
    public $Workday_Traditional_Formatted_Phone;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Set this flag to true in order to delete the referenced communication method. If this flag is set, the Reference ID field becomes required, and all other communication method fields that would otherwise be required will be optional
     * and meaningless.
     * @var bool
     */
    public $Delete;
    /**
     * The Do_Not_Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not existing non-primary phone data will be replaced. A value of true means only the referenced phone will be updated, or created if it does not exist or no reference was provided. This behavior is used
     * if the flag is set to true for ANY email address in the request.
     * @var bool
     */
    public $Do_Not_Replace_All;
    /**
     * Constructor method for Phone_Information_DataType
     * @uses Phone_Information_DataType::setCountry_ISO_Code()
     * @uses Phone_Information_DataType::setInternational_Phone_Code()
     * @uses Phone_Information_DataType::setPhone_Number()
     * @uses Phone_Information_DataType::setPhone_Extension()
     * @uses Phone_Information_DataType::setPhone_Device_Type_Reference()
     * @uses Phone_Information_DataType::setUsage_Data()
     * @uses Phone_Information_DataType::setPhone_Reference()
     * @uses Phone_Information_DataType::setID()
     * @uses Phone_Information_DataType::setArea_Code()
     * @uses Phone_Information_DataType::setTenant_Formatted_Phone()
     * @uses Phone_Information_DataType::setInternational_Formatted_Phone()
     * @uses Phone_Information_DataType::setPhone_Number_Without_Area_Code()
     * @uses Phone_Information_DataType::setNational_Formatted_Phone()
     * @uses Phone_Information_DataType::setE164_Formatted_Phone()
     * @uses Phone_Information_DataType::setWorkday_Traditional_Formatted_Phone()
     * @uses Phone_Information_DataType::setDelete()
     * @uses Phone_Information_DataType::setDo_Not_Replace_All()
     * @param string $country_ISO_Code
     * @param string $international_Phone_Code
     * @param string $phone_Number
     * @param string $phone_Extension
     * @param \StructType\Phone_Device_TypeObjectType $phone_Device_Type_Reference
     * @param \StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @param \StructType\Phone_ReferenceObjectType $phone_Reference
     * @param string $iD
     * @param string $area_Code
     * @param string $tenant_Formatted_Phone
     * @param string $international_Formatted_Phone
     * @param string $phone_Number_Without_Area_Code
     * @param string $national_Formatted_Phone
     * @param string $e164_Formatted_Phone
     * @param string $workday_Traditional_Formatted_Phone
     * @param bool $delete
     * @param bool $do_Not_Replace_All
     */
    public function __construct($country_ISO_Code = null, $international_Phone_Code = null, $phone_Number = null, $phone_Extension = null, \StructType\Phone_Device_TypeObjectType $phone_Device_Type_Reference = null, array $usage_Data = array(), \StructType\Phone_ReferenceObjectType $phone_Reference = null, $iD = null, $area_Code = null, $tenant_Formatted_Phone = null, $international_Formatted_Phone = null, $phone_Number_Without_Area_Code = null, $national_Formatted_Phone = null, $e164_Formatted_Phone = null, $workday_Traditional_Formatted_Phone = null, $delete = null, $do_Not_Replace_All = null)
    {
        $this
            ->setCountry_ISO_Code($country_ISO_Code)
            ->setInternational_Phone_Code($international_Phone_Code)
            ->setPhone_Number($phone_Number)
            ->setPhone_Extension($phone_Extension)
            ->setPhone_Device_Type_Reference($phone_Device_Type_Reference)
            ->setUsage_Data($usage_Data)
            ->setPhone_Reference($phone_Reference)
            ->setID($iD)
            ->setArea_Code($area_Code)
            ->setTenant_Formatted_Phone($tenant_Formatted_Phone)
            ->setInternational_Formatted_Phone($international_Formatted_Phone)
            ->setPhone_Number_Without_Area_Code($phone_Number_Without_Area_Code)
            ->setNational_Formatted_Phone($national_Formatted_Phone)
            ->setE164_Formatted_Phone($e164_Formatted_Phone)
            ->setWorkday_Traditional_Formatted_Phone($workday_Traditional_Formatted_Phone)
            ->setDelete($delete)
            ->setDo_Not_Replace_All($do_Not_Replace_All);
    }
    /**
     * Get Country_ISO_Code value
     * @return string|null
     */
    public function getCountry_ISO_Code()
    {
        return $this->Country_ISO_Code;
    }
    /**
     * Set Country_ISO_Code value
     * @param string $country_ISO_Code
     * @return \StructType\Phone_Information_DataType
     */
    public function setCountry_ISO_Code($country_ISO_Code = null)
    {
        // validation for constraint: string
        if (!is_null($country_ISO_Code) && !is_string($country_ISO_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_ISO_Code, true), gettype($country_ISO_Code)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($country_ISO_Code) && mb_strlen($country_ISO_Code) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($country_ISO_Code)), __LINE__);
        }
        $this->Country_ISO_Code = $country_ISO_Code;
        return $this;
    }
    /**
     * Get International_Phone_Code value
     * @return string|null
     */
    public function getInternational_Phone_Code()
    {
        return $this->International_Phone_Code;
    }
    /**
     * Set International_Phone_Code value
     * @param string $international_Phone_Code
     * @return \StructType\Phone_Information_DataType
     */
    public function setInternational_Phone_Code($international_Phone_Code = null)
    {
        // validation for constraint: string
        if (!is_null($international_Phone_Code) && !is_string($international_Phone_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($international_Phone_Code, true), gettype($international_Phone_Code)), __LINE__);
        }
        $this->International_Phone_Code = $international_Phone_Code;
        return $this;
    }
    /**
     * Get Phone_Number value
     * @return string|null
     */
    public function getPhone_Number()
    {
        return $this->Phone_Number;
    }
    /**
     * Set Phone_Number value
     * @param string $phone_Number
     * @return \StructType\Phone_Information_DataType
     */
    public function setPhone_Number($phone_Number = null)
    {
        // validation for constraint: string
        if (!is_null($phone_Number) && !is_string($phone_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone_Number, true), gettype($phone_Number)), __LINE__);
        }
        $this->Phone_Number = $phone_Number;
        return $this;
    }
    /**
     * Get Phone_Extension value
     * @return string|null
     */
    public function getPhone_Extension()
    {
        return $this->Phone_Extension;
    }
    /**
     * Set Phone_Extension value
     * @param string $phone_Extension
     * @return \StructType\Phone_Information_DataType
     */
    public function setPhone_Extension($phone_Extension = null)
    {
        // validation for constraint: string
        if (!is_null($phone_Extension) && !is_string($phone_Extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone_Extension, true), gettype($phone_Extension)), __LINE__);
        }
        $this->Phone_Extension = $phone_Extension;
        return $this;
    }
    /**
     * Get Phone_Device_Type_Reference value
     * @return \StructType\Phone_Device_TypeObjectType|null
     */
    public function getPhone_Device_Type_Reference()
    {
        return $this->Phone_Device_Type_Reference;
    }
    /**
     * Set Phone_Device_Type_Reference value
     * @param \StructType\Phone_Device_TypeObjectType $phone_Device_Type_Reference
     * @return \StructType\Phone_Information_DataType
     */
    public function setPhone_Device_Type_Reference(\StructType\Phone_Device_TypeObjectType $phone_Device_Type_Reference = null)
    {
        $this->Phone_Device_Type_Reference = $phone_Device_Type_Reference;
        return $this;
    }
    /**
     * Get Usage_Data value
     * @return \StructType\Communication_Method_Usage_Information_DataType[]|null
     */
    public function getUsage_Data()
    {
        return $this->Usage_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUsage_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsage_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUsage_DataForArrayConstraintsFromSetUsage_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $phone_Information_DataTypeUsage_DataItem) {
            // validation for constraint: itemType
            if (!$phone_Information_DataTypeUsage_DataItem instanceof \StructType\Communication_Method_Usage_Information_DataType) {
                $invalidValues[] = is_object($phone_Information_DataTypeUsage_DataItem) ? get_class($phone_Information_DataTypeUsage_DataItem) : sprintf('%s(%s)', gettype($phone_Information_DataTypeUsage_DataItem), var_export($phone_Information_DataTypeUsage_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Usage_Data property can only contain items of type \StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Usage_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @return \StructType\Phone_Information_DataType
     */
    public function setUsage_Data(array $usage_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($usage_DataArrayErrorMessage = self::validateUsage_DataForArrayConstraintsFromSetUsage_Data($usage_Data))) {
            throw new \InvalidArgumentException($usage_DataArrayErrorMessage, __LINE__);
        }
        $this->Usage_Data = $usage_Data;
        return $this;
    }
    /**
     * Add item to Usage_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Method_Usage_Information_DataType $item
     * @return \StructType\Phone_Information_DataType
     */
    public function addToUsage_Data(\StructType\Communication_Method_Usage_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Communication_Method_Usage_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Usage_Data property can only contain items of type \StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Usage_Data[] = $item;
        return $this;
    }
    /**
     * Get Phone_Reference value
     * @return \StructType\Phone_ReferenceObjectType|null
     */
    public function getPhone_Reference()
    {
        return $this->Phone_Reference;
    }
    /**
     * Set Phone_Reference value
     * @param \StructType\Phone_ReferenceObjectType $phone_Reference
     * @return \StructType\Phone_Information_DataType
     */
    public function setPhone_Reference(\StructType\Phone_ReferenceObjectType $phone_Reference = null)
    {
        $this->Phone_Reference = $phone_Reference;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\Phone_Information_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Area_Code value
     * @return string|null
     */
    public function getArea_Code()
    {
        return $this->Area_Code;
    }
    /**
     * Set Area_Code value
     * @param string $area_Code
     * @return \StructType\Phone_Information_DataType
     */
    public function setArea_Code($area_Code = null)
    {
        // validation for constraint: string
        if (!is_null($area_Code) && !is_string($area_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($area_Code, true), gettype($area_Code)), __LINE__);
        }
        $this->Area_Code = $area_Code;
        return $this;
    }
    /**
     * Get Tenant_Formatted_Phone value
     * @return string|null
     */
    public function getTenant_Formatted_Phone()
    {
        return $this->Tenant_Formatted_Phone;
    }
    /**
     * Set Tenant_Formatted_Phone value
     * @param string $tenant_Formatted_Phone
     * @return \StructType\Phone_Information_DataType
     */
    public function setTenant_Formatted_Phone($tenant_Formatted_Phone = null)
    {
        // validation for constraint: string
        if (!is_null($tenant_Formatted_Phone) && !is_string($tenant_Formatted_Phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tenant_Formatted_Phone, true), gettype($tenant_Formatted_Phone)), __LINE__);
        }
        $this->Tenant_Formatted_Phone = $tenant_Formatted_Phone;
        return $this;
    }
    /**
     * Get International_Formatted_Phone value
     * @return string|null
     */
    public function getInternational_Formatted_Phone()
    {
        return $this->International_Formatted_Phone;
    }
    /**
     * Set International_Formatted_Phone value
     * @param string $international_Formatted_Phone
     * @return \StructType\Phone_Information_DataType
     */
    public function setInternational_Formatted_Phone($international_Formatted_Phone = null)
    {
        // validation for constraint: string
        if (!is_null($international_Formatted_Phone) && !is_string($international_Formatted_Phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($international_Formatted_Phone, true), gettype($international_Formatted_Phone)), __LINE__);
        }
        $this->International_Formatted_Phone = $international_Formatted_Phone;
        return $this;
    }
    /**
     * Get Phone_Number_Without_Area_Code value
     * @return string|null
     */
    public function getPhone_Number_Without_Area_Code()
    {
        return $this->Phone_Number_Without_Area_Code;
    }
    /**
     * Set Phone_Number_Without_Area_Code value
     * @param string $phone_Number_Without_Area_Code
     * @return \StructType\Phone_Information_DataType
     */
    public function setPhone_Number_Without_Area_Code($phone_Number_Without_Area_Code = null)
    {
        // validation for constraint: string
        if (!is_null($phone_Number_Without_Area_Code) && !is_string($phone_Number_Without_Area_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone_Number_Without_Area_Code, true), gettype($phone_Number_Without_Area_Code)), __LINE__);
        }
        $this->Phone_Number_Without_Area_Code = $phone_Number_Without_Area_Code;
        return $this;
    }
    /**
     * Get National_Formatted_Phone value
     * @return string|null
     */
    public function getNational_Formatted_Phone()
    {
        return $this->National_Formatted_Phone;
    }
    /**
     * Set National_Formatted_Phone value
     * @param string $national_Formatted_Phone
     * @return \StructType\Phone_Information_DataType
     */
    public function setNational_Formatted_Phone($national_Formatted_Phone = null)
    {
        // validation for constraint: string
        if (!is_null($national_Formatted_Phone) && !is_string($national_Formatted_Phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($national_Formatted_Phone, true), gettype($national_Formatted_Phone)), __LINE__);
        }
        $this->National_Formatted_Phone = $national_Formatted_Phone;
        return $this;
    }
    /**
     * Get E164_Formatted_Phone value
     * @return string|null
     */
    public function getE164_Formatted_Phone()
    {
        return $this->E164_Formatted_Phone;
    }
    /**
     * Set E164_Formatted_Phone value
     * @param string $e164_Formatted_Phone
     * @return \StructType\Phone_Information_DataType
     */
    public function setE164_Formatted_Phone($e164_Formatted_Phone = null)
    {
        // validation for constraint: string
        if (!is_null($e164_Formatted_Phone) && !is_string($e164_Formatted_Phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($e164_Formatted_Phone, true), gettype($e164_Formatted_Phone)), __LINE__);
        }
        $this->E164_Formatted_Phone = $e164_Formatted_Phone;
        return $this;
    }
    /**
     * Get Workday_Traditional_Formatted_Phone value
     * @return string|null
     */
    public function getWorkday_Traditional_Formatted_Phone()
    {
        return $this->Workday_Traditional_Formatted_Phone;
    }
    /**
     * Set Workday_Traditional_Formatted_Phone value
     * @param string $workday_Traditional_Formatted_Phone
     * @return \StructType\Phone_Information_DataType
     */
    public function setWorkday_Traditional_Formatted_Phone($workday_Traditional_Formatted_Phone = null)
    {
        // validation for constraint: string
        if (!is_null($workday_Traditional_Formatted_Phone) && !is_string($workday_Traditional_Formatted_Phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workday_Traditional_Formatted_Phone, true), gettype($workday_Traditional_Formatted_Phone)), __LINE__);
        }
        $this->Workday_Traditional_Formatted_Phone = $workday_Traditional_Formatted_Phone;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\Phone_Information_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get Do_Not_Replace_All value
     * @return bool|null
     */
    public function getDo_Not_Replace_All()
    {
        return $this->Do_Not_Replace_All;
    }
    /**
     * Set Do_Not_Replace_All value
     * @param bool $do_Not_Replace_All
     * @return \StructType\Phone_Information_DataType
     */
    public function setDo_Not_Replace_All($do_Not_Replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($do_Not_Replace_All) && !is_bool($do_Not_Replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($do_Not_Replace_All, true), gettype($do_Not_Replace_All)), __LINE__);
        }
        $this->Do_Not_Replace_All = $do_Not_Replace_All;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Phone_Information_DataType
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
