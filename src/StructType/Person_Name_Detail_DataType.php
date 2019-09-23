<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Name_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Secondary Last Name (or Local Secondary Last Name) is required for this country. | If one western script is submitted, all required western script name fields must be submitted. | You must enter a Local Secondary Last Name for this
 * country. | You must enter a First Name for this country. | You must enter a Social Suffix for this country. | You must enter a Local Secondary Last Name 2 for this country. | You must enter a Local Last Name 2 for this country. | You must enter a
 * Secondary Last Name for this country. | You must enter a Local Middle Name 2 for this country. | You must enter a Full Name for this country. | You must enter a Middle Name for this country. | You must enter a Local First Name 2 for this country. |
 * You must enter a Hereditary Suffix for this country. | You must enter a Professional Suffix for this country. | You must enter an Academic Suffix for this country. | You must enter a Local Last Name for this country. | You must enter a Salutation for
 * this country. | The First Name field accepts only Western script. | You must enter an Honorary Suffix for this country. | Last Name (or Local Last Name if configured) is required for this country. | You must enter a Royal Suffix for this country. |
 * The Last Name field accepts only Western script. | You must enter a Local First Name for this country. | You must enter a Religious Suffix for this country. | You must enter a Last Name for this country. | Full Name is not set up for this country. |
 * Secondary Last Name can only be set for countries that accept it. | You must enter a Local Middle Name for this country. | Middle Name can only be set for countries that accept it. | You must enter a Tertiary Last Name for this country. | You must
 * enter a Title for this country. | Last Name can only be set for countries that accept it. | First Name (or Local First Name if configured) is required for this country. | Tertiary Last Name can only be set for countries that accept it. | First Name
 * can only be set for countries that accept it. | Contains the components of a name, such as the First Name and Last Name.
 * @subpackage Structs
 */
class Person_Name_Detail_DataType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Country that the name is in reference to.
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Prefix_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the prefixes for a name.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Name_Prefix_DataType
     */
    public $Prefix_Data;
    /**
     * The First_Name
     * Meta information extracted from the WSDL
     * - documentation: The First Name (Given Name) for a person.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Name;
    /**
     * The Middle_Name
     * Meta information extracted from the WSDL
     * - documentation: The Middle Name for a person.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Middle_Name;
    /**
     * The Last_Name
     * Meta information extracted from the WSDL
     * - documentation: The Last Name (Family Name) for a person.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Name;
    /**
     * The Secondary_Last_Name
     * Meta information extracted from the WSDL
     * - documentation: The Secondary Last Name (Secondary Family Name) for a person.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Secondary_Last_Name;
    /**
     * The Tertiary_Last_Name
     * Meta information extracted from the WSDL
     * - documentation: The Tertiary Last Name for a person.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Tertiary_Last_Name;
    /**
     * The Local_Name_Detail_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the name components in local script for supporting countries.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Local_Person_Name_Detail_DataType
     */
    public $Local_Name_Detail_Data;
    /**
     * The Suffix_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the suffixes for a name.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType
     */
    public $Suffix_Data;
    /**
     * The Full_Name_for_Singapore_and_Malaysia
     * Meta information extracted from the WSDL
     * - documentation: Full Person Name is used by Malaysia and Singapore. It is designed for (eliminate space between these two words) Workers in these countries to enter their Full Legal Name. It is an attribute of Global Person Name Class and is not a
     * concatenation of First and Last Names.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Full_Name_for_Singapore_and_Malaysia;
    /**
     * The Formatted_Name
     * Meta information extracted from the WSDL
     * - documentation: Contains a fully formatted name in one string that has all of its pieces in their proper place. This name is only used in a response and is not used for requests
     * @var string
     */
    public $Formatted_Name;
    /**
     * The Reporting_Name
     * Meta information extracted from the WSDL
     * - documentation: Contains a fully formatted name in one string for reporting that has all of its pieces in their proper place. This name is only used in a response and is not used for request
     * @var string
     */
    public $Reporting_Name;
    /**
     * Constructor method for Person_Name_Detail_DataType
     * @uses Person_Name_Detail_DataType::setCountry_Reference()
     * @uses Person_Name_Detail_DataType::setPrefix_Data()
     * @uses Person_Name_Detail_DataType::setFirst_Name()
     * @uses Person_Name_Detail_DataType::setMiddle_Name()
     * @uses Person_Name_Detail_DataType::setLast_Name()
     * @uses Person_Name_Detail_DataType::setSecondary_Last_Name()
     * @uses Person_Name_Detail_DataType::setTertiary_Last_Name()
     * @uses Person_Name_Detail_DataType::setLocal_Name_Detail_Data()
     * @uses Person_Name_Detail_DataType::setSuffix_Data()
     * @uses Person_Name_Detail_DataType::setFull_Name_for_Singapore_and_Malaysia()
     * @uses Person_Name_Detail_DataType::setFormatted_Name()
     * @uses Person_Name_Detail_DataType::setReporting_Name()
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @param \WorkdayWsdl\\StructType\Person_Name_Prefix_DataType $prefix_Data
     * @param string $first_Name
     * @param string $middle_Name
     * @param string $last_Name
     * @param string $secondary_Last_Name
     * @param string $tertiary_Last_Name
     * @param \WorkdayWsdl\\StructType\Local_Person_Name_Detail_DataType $local_Name_Detail_Data
     * @param \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType $suffix_Data
     * @param string $full_Name_for_Singapore_and_Malaysia
     * @param string $formatted_Name
     * @param string $reporting_Name
     */
    public function __construct(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null, \WorkdayWsdl\\StructType\Person_Name_Prefix_DataType $prefix_Data = null, $first_Name = null, $middle_Name = null, $last_Name = null, $secondary_Last_Name = null, $tertiary_Last_Name = null, \WorkdayWsdl\\StructType\Local_Person_Name_Detail_DataType $local_Name_Detail_Data = null, \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType $suffix_Data = null, $full_Name_for_Singapore_and_Malaysia = null, $formatted_Name = null, $reporting_Name = null)
    {
        $this
            ->setCountry_Reference($country_Reference)
            ->setPrefix_Data($prefix_Data)
            ->setFirst_Name($first_Name)
            ->setMiddle_Name($middle_Name)
            ->setLast_Name($last_Name)
            ->setSecondary_Last_Name($secondary_Last_Name)
            ->setTertiary_Last_Name($tertiary_Last_Name)
            ->setLocal_Name_Detail_Data($local_Name_Detail_Data)
            ->setSuffix_Data($suffix_Data)
            ->setFull_Name_for_Singapore_and_Malaysia($full_Name_for_Singapore_and_Malaysia)
            ->setFormatted_Name($formatted_Name)
            ->setReporting_Name($reporting_Name);
    }
    /**
     * Get Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Prefix_Data value
     * @return \WorkdayWsdl\\StructType\Person_Name_Prefix_DataType|null
     */
    public function getPrefix_Data()
    {
        return $this->Prefix_Data;
    }
    /**
     * Set Prefix_Data value
     * @param \WorkdayWsdl\\StructType\Person_Name_Prefix_DataType $prefix_Data
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public function setPrefix_Data(\WorkdayWsdl\\StructType\Person_Name_Prefix_DataType $prefix_Data = null)
    {
        $this->Prefix_Data = $prefix_Data;
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
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
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
     * @return string|null
     */
    public function getLast_Name()
    {
        return $this->Last_Name;
    }
    /**
     * Set Last_Name value
     * @param string $last_Name
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public function setLast_Name($last_Name = null)
    {
        // validation for constraint: string
        if (!is_null($last_Name) && !is_string($last_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Name, true), gettype($last_Name)), __LINE__);
        }
        $this->Last_Name = $last_Name;
        return $this;
    }
    /**
     * Get Secondary_Last_Name value
     * @return string|null
     */
    public function getSecondary_Last_Name()
    {
        return $this->Secondary_Last_Name;
    }
    /**
     * Set Secondary_Last_Name value
     * @param string $secondary_Last_Name
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public function setSecondary_Last_Name($secondary_Last_Name = null)
    {
        // validation for constraint: string
        if (!is_null($secondary_Last_Name) && !is_string($secondary_Last_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondary_Last_Name, true), gettype($secondary_Last_Name)), __LINE__);
        }
        $this->Secondary_Last_Name = $secondary_Last_Name;
        return $this;
    }
    /**
     * Get Tertiary_Last_Name value
     * @return string|null
     */
    public function getTertiary_Last_Name()
    {
        return $this->Tertiary_Last_Name;
    }
    /**
     * Set Tertiary_Last_Name value
     * @param string $tertiary_Last_Name
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public function setTertiary_Last_Name($tertiary_Last_Name = null)
    {
        // validation for constraint: string
        if (!is_null($tertiary_Last_Name) && !is_string($tertiary_Last_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tertiary_Last_Name, true), gettype($tertiary_Last_Name)), __LINE__);
        }
        $this->Tertiary_Last_Name = $tertiary_Last_Name;
        return $this;
    }
    /**
     * Get Local_Name_Detail_Data value
     * @return \WorkdayWsdl\\StructType\Local_Person_Name_Detail_DataType|null
     */
    public function getLocal_Name_Detail_Data()
    {
        return $this->Local_Name_Detail_Data;
    }
    /**
     * Set Local_Name_Detail_Data value
     * @param \WorkdayWsdl\\StructType\Local_Person_Name_Detail_DataType $local_Name_Detail_Data
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public function setLocal_Name_Detail_Data(\WorkdayWsdl\\StructType\Local_Person_Name_Detail_DataType $local_Name_Detail_Data = null)
    {
        $this->Local_Name_Detail_Data = $local_Name_Detail_Data;
        return $this;
    }
    /**
     * Get Suffix_Data value
     * @return \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType|null
     */
    public function getSuffix_Data()
    {
        return $this->Suffix_Data;
    }
    /**
     * Set Suffix_Data value
     * @param \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType $suffix_Data
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public function setSuffix_Data(\WorkdayWsdl\\StructType\Person_Name_Suffix_DataType $suffix_Data = null)
    {
        $this->Suffix_Data = $suffix_Data;
        return $this;
    }
    /**
     * Get Full_Name_for_Singapore_and_Malaysia value
     * @return string|null
     */
    public function getFull_Name_for_Singapore_and_Malaysia()
    {
        return $this->Full_Name_for_Singapore_and_Malaysia;
    }
    /**
     * Set Full_Name_for_Singapore_and_Malaysia value
     * @param string $full_Name_for_Singapore_and_Malaysia
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public function setFull_Name_for_Singapore_and_Malaysia($full_Name_for_Singapore_and_Malaysia = null)
    {
        // validation for constraint: string
        if (!is_null($full_Name_for_Singapore_and_Malaysia) && !is_string($full_Name_for_Singapore_and_Malaysia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($full_Name_for_Singapore_and_Malaysia, true), gettype($full_Name_for_Singapore_and_Malaysia)), __LINE__);
        }
        $this->Full_Name_for_Singapore_and_Malaysia = $full_Name_for_Singapore_and_Malaysia;
        return $this;
    }
    /**
     * Get Formatted_Name value
     * @return string|null
     */
    public function getFormatted_Name()
    {
        return $this->Formatted_Name;
    }
    /**
     * Set Formatted_Name value
     * @param string $formatted_Name
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public function setFormatted_Name($formatted_Name = null)
    {
        // validation for constraint: string
        if (!is_null($formatted_Name) && !is_string($formatted_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatted_Name, true), gettype($formatted_Name)), __LINE__);
        }
        $this->Formatted_Name = $formatted_Name;
        return $this;
    }
    /**
     * Get Reporting_Name value
     * @return string|null
     */
    public function getReporting_Name()
    {
        return $this->Reporting_Name;
    }
    /**
     * Set Reporting_Name value
     * @param string $reporting_Name
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public function setReporting_Name($reporting_Name = null)
    {
        // validation for constraint: string
        if (!is_null($reporting_Name) && !is_string($reporting_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reporting_Name, true), gettype($reporting_Name)), __LINE__);
        }
        $this->Reporting_Name = $reporting_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
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
