<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Global_Address_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: If one local script address field is submitted, all required local script address fields must be submitted. | Submunicipality 2 (or City Subdivision 2 - Local if configured on Tenant Setup Global) is required for certain countries. |
 * Address Line 1 - Local is not Valid for this Country. | Address Line 2 - Local is not Valid for this Country. | Address Line 3 - Local is not Valid for this Country. | Address Line 4 - Local is not Valid for this Country. | Address Line 5 - Local is
 * not Valid for this Country. | Address Line 6 - Local is not Valid for this Country. | Address Line 7 - Local is not Valid for this Country. | Address Line 8 - Local is not Valid for this Country. | Address Line 9 - Local is not Valid for this
 * Country. | City - Local is not Valid for this Country. | City Subdivision 1 - Local is not Valid for this Country. | City Subdivision 2 - Local is not Valid for this Country. | Region Subdivision 1 - Local is not Valid for this Country. | Region
 * Subdivision 2 - Local is not Valid for this Country. | Subregion is not a valid address component for certain countries. | Submunicipality is not a valid address component for certain countries. | Second Submunicipality is not a valid address
 * component for certain countries. | Second Subregion is not a valid address component for certain countries. | Subregion is required for certain countries. | Second Subregion is required for certain countries. | Address Line 9 (or Address Line 9 -
 * Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 9 is not Valid for this Country. | Region is required for certain countries. | Region Name must be valid for the specified Country. | Submunicipality (or City
 * Subdivision - Local if configured on Tenant Setup Global) is required for certain countries. | Address Line 6 (or Address Line 6 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 6 is not Valid for this
 * Country. | Address Line 7 (or Address Line 7 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 7 is not Valid for this Country. | Address Line 8 (or Address Line 8 - Local if configured on Tenant Setup Global)
 * is Required for this Country. | Address Line 8 is not Valid for this Country. | Address Line 4 (or Address Line 4 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 4 is not Valid for this Country. | Address
 * Line 5 (or Address Line 5 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 5 is not Valid for this Country. | Postal Code is not a valid address component for certain countries. | Municipality is not a valid
 * address component for certain countries . | Postal Code is required for certain countries. | Municipality is required for certain countries. | Address Line 1 is not valid for this Country. | Address Line 2 (or Address Line 2 - Local if configured on
 * Tenant Setup Global) is Required in this Country. | Address Line 2 not Valid for this Country. | Address Line 3 (or Address Line 3 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 3 is not Valid for this
 * Country. | Address Line 1 (or Address Line 1 - Local if configured on Tenant Setup Global) is Required for this Country. | Contains address information.
 * @subpackage Structs
 */
class Global_Address_DataType extends AbstractStructBase
{
    /**
     * The Address_Line_1
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_1;
    /**
     * The Address_Line_2
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_2;
    /**
     * The Address_Line_3
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_3;
    /**
     * The Address_Line_4
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_4;
    /**
     * The Address_Line_5
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_5;
    /**
     * The Address_Line_6
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_6;
    /**
     * The Address_Line_7
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_7;
    /**
     * The Address_Line_8
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_8;
    /**
     * The Address_Line_9
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_9;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The City_Subdivision_1
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City_Subdivision_1;
    /**
     * The City_Subdivision_2
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City_Subdivision_2;
    /**
     * The Country_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - minOccurs: 0
     * @var \StructType\Country_RegionObjectType
     */
    public $Country_Region_Reference;
    /**
     * The Region_Subdivision_1
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Region_Subdivision_1;
    /**
     * The Region_Subdivision_2
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Region_Subdivision_2;
    /**
     * The Postal_Code
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Postal_Code;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - minOccurs: 0
     * @var \StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Address_Line_1___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_1___Local;
    /**
     * The Address_Line_2___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_2___Local;
    /**
     * The Address_Line_3___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_3___Local;
    /**
     * The Address_Line_4___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_4___Local;
    /**
     * The Address_Line_5___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_5___Local;
    /**
     * The Address_Line_6___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_6___Local;
    /**
     * The Address_Line_7___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_7___Local;
    /**
     * The Address_Line_8___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_8___Local;
    /**
     * The Address_Line_9___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_Line_9___Local;
    /**
     * The City___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City___Local;
    /**
     * The City_Subdivision_1___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City_Subdivision_1___Local;
    /**
     * The City_Subdivision_2___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City_Subdivision_2___Local;
    /**
     * The Region_Subdivision_1___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Region_Subdivision_1___Local;
    /**
     * The Region_Subdivision_2___Local
     * Meta information extracted from the WSDL
     * - documentation: Contains Address information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Region_Subdivision_2___Local;
    /**
     * Constructor method for Global_Address_DataType
     * @uses Global_Address_DataType::setAddress_Line_1()
     * @uses Global_Address_DataType::setAddress_Line_2()
     * @uses Global_Address_DataType::setAddress_Line_3()
     * @uses Global_Address_DataType::setAddress_Line_4()
     * @uses Global_Address_DataType::setAddress_Line_5()
     * @uses Global_Address_DataType::setAddress_Line_6()
     * @uses Global_Address_DataType::setAddress_Line_7()
     * @uses Global_Address_DataType::setAddress_Line_8()
     * @uses Global_Address_DataType::setAddress_Line_9()
     * @uses Global_Address_DataType::setCity()
     * @uses Global_Address_DataType::setCity_Subdivision_1()
     * @uses Global_Address_DataType::setCity_Subdivision_2()
     * @uses Global_Address_DataType::setCountry_Region_Reference()
     * @uses Global_Address_DataType::setRegion_Subdivision_1()
     * @uses Global_Address_DataType::setRegion_Subdivision_2()
     * @uses Global_Address_DataType::setPostal_Code()
     * @uses Global_Address_DataType::setCountry_Reference()
     * @uses Global_Address_DataType::setAddress_Line_1___Local()
     * @uses Global_Address_DataType::setAddress_Line_2___Local()
     * @uses Global_Address_DataType::setAddress_Line_3___Local()
     * @uses Global_Address_DataType::setAddress_Line_4___Local()
     * @uses Global_Address_DataType::setAddress_Line_5___Local()
     * @uses Global_Address_DataType::setAddress_Line_6___Local()
     * @uses Global_Address_DataType::setAddress_Line_7___Local()
     * @uses Global_Address_DataType::setAddress_Line_8___Local()
     * @uses Global_Address_DataType::setAddress_Line_9___Local()
     * @uses Global_Address_DataType::setCity___Local()
     * @uses Global_Address_DataType::setCity_Subdivision_1___Local()
     * @uses Global_Address_DataType::setCity_Subdivision_2___Local()
     * @uses Global_Address_DataType::setRegion_Subdivision_1___Local()
     * @uses Global_Address_DataType::setRegion_Subdivision_2___Local()
     * @param string $address_Line_1
     * @param string $address_Line_2
     * @param string $address_Line_3
     * @param string $address_Line_4
     * @param string $address_Line_5
     * @param string $address_Line_6
     * @param string $address_Line_7
     * @param string $address_Line_8
     * @param string $address_Line_9
     * @param string $city
     * @param string $city_Subdivision_1
     * @param string $city_Subdivision_2
     * @param \StructType\Country_RegionObjectType $country_Region_Reference
     * @param string $region_Subdivision_1
     * @param string $region_Subdivision_2
     * @param string $postal_Code
     * @param \StructType\CountryObjectType $country_Reference
     * @param string $address_Line_1___Local
     * @param string $address_Line_2___Local
     * @param string $address_Line_3___Local
     * @param string $address_Line_4___Local
     * @param string $address_Line_5___Local
     * @param string $address_Line_6___Local
     * @param string $address_Line_7___Local
     * @param string $address_Line_8___Local
     * @param string $address_Line_9___Local
     * @param string $city___Local
     * @param string $city_Subdivision_1___Local
     * @param string $city_Subdivision_2___Local
     * @param string $region_Subdivision_1___Local
     * @param string $region_Subdivision_2___Local
     */
    public function __construct($address_Line_1 = null, $address_Line_2 = null, $address_Line_3 = null, $address_Line_4 = null, $address_Line_5 = null, $address_Line_6 = null, $address_Line_7 = null, $address_Line_8 = null, $address_Line_9 = null, $city = null, $city_Subdivision_1 = null, $city_Subdivision_2 = null, \StructType\Country_RegionObjectType $country_Region_Reference = null, $region_Subdivision_1 = null, $region_Subdivision_2 = null, $postal_Code = null, \StructType\CountryObjectType $country_Reference = null, $address_Line_1___Local = null, $address_Line_2___Local = null, $address_Line_3___Local = null, $address_Line_4___Local = null, $address_Line_5___Local = null, $address_Line_6___Local = null, $address_Line_7___Local = null, $address_Line_8___Local = null, $address_Line_9___Local = null, $city___Local = null, $city_Subdivision_1___Local = null, $city_Subdivision_2___Local = null, $region_Subdivision_1___Local = null, $region_Subdivision_2___Local = null)
    {
        $this
            ->setAddress_Line_1($address_Line_1)
            ->setAddress_Line_2($address_Line_2)
            ->setAddress_Line_3($address_Line_3)
            ->setAddress_Line_4($address_Line_4)
            ->setAddress_Line_5($address_Line_5)
            ->setAddress_Line_6($address_Line_6)
            ->setAddress_Line_7($address_Line_7)
            ->setAddress_Line_8($address_Line_8)
            ->setAddress_Line_9($address_Line_9)
            ->setCity($city)
            ->setCity_Subdivision_1($city_Subdivision_1)
            ->setCity_Subdivision_2($city_Subdivision_2)
            ->setCountry_Region_Reference($country_Region_Reference)
            ->setRegion_Subdivision_1($region_Subdivision_1)
            ->setRegion_Subdivision_2($region_Subdivision_2)
            ->setPostal_Code($postal_Code)
            ->setCountry_Reference($country_Reference)
            ->setAddress_Line_1___Local($address_Line_1___Local)
            ->setAddress_Line_2___Local($address_Line_2___Local)
            ->setAddress_Line_3___Local($address_Line_3___Local)
            ->setAddress_Line_4___Local($address_Line_4___Local)
            ->setAddress_Line_5___Local($address_Line_5___Local)
            ->setAddress_Line_6___Local($address_Line_6___Local)
            ->setAddress_Line_7___Local($address_Line_7___Local)
            ->setAddress_Line_8___Local($address_Line_8___Local)
            ->setAddress_Line_9___Local($address_Line_9___Local)
            ->setCity___Local($city___Local)
            ->setCity_Subdivision_1___Local($city_Subdivision_1___Local)
            ->setCity_Subdivision_2___Local($city_Subdivision_2___Local)
            ->setRegion_Subdivision_1___Local($region_Subdivision_1___Local)
            ->setRegion_Subdivision_2___Local($region_Subdivision_2___Local);
    }
    /**
     * Get address_Line value
     * @return address_Line
     */
    public function getAddress_Line_1()
    {
        return $this->Address_Line_1;
    }
    /**
     * Set address_Line value
     * @param address_Line $address_Line
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_1($address_Line_1 = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_1) && !is_string($address_Line_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_1, true), gettype($address_Line_1)), __LINE__);
        }
        $this->Address_Line_1 = $address_Line_1;
        return $this;
    }
    /**
     * Get address_Line value
     * @return address_Line
     */
    public function getAddress_Line_2()
    {
        return $this->Address_Line_2;
    }
    /**
     * Set address_Line value
     * @param address_Line $address_Line
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_2($address_Line_2 = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_2) && !is_string($address_Line_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_2, true), gettype($address_Line_2)), __LINE__);
        }
        $this->Address_Line_2 = $address_Line_2;
        return $this;
    }
    /**
     * Get address_Line value
     * @return address_Line
     */
    public function getAddress_Line_3()
    {
        return $this->Address_Line_3;
    }
    /**
     * Set address_Line value
     * @param address_Line $address_Line
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_3($address_Line_3 = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_3) && !is_string($address_Line_3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_3, true), gettype($address_Line_3)), __LINE__);
        }
        $this->Address_Line_3 = $address_Line_3;
        return $this;
    }
    /**
     * Get address_Line value
     * @return address_Line
     */
    public function getAddress_Line_4()
    {
        return $this->Address_Line_4;
    }
    /**
     * Set address_Line value
     * @param address_Line $address_Line
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_4($address_Line_4 = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_4) && !is_string($address_Line_4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_4, true), gettype($address_Line_4)), __LINE__);
        }
        $this->Address_Line_4 = $address_Line_4;
        return $this;
    }
    /**
     * Get address_Line value
     * @return address_Line
     */
    public function getAddress_Line_5()
    {
        return $this->Address_Line_5;
    }
    /**
     * Set address_Line value
     * @param address_Line $address_Line
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_5($address_Line_5 = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_5) && !is_string($address_Line_5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_5, true), gettype($address_Line_5)), __LINE__);
        }
        $this->Address_Line_5 = $address_Line_5;
        return $this;
    }
    /**
     * Get address_Line value
     * @return address_Line
     */
    public function getAddress_Line_6()
    {
        return $this->Address_Line_6;
    }
    /**
     * Set address_Line value
     * @param address_Line $address_Line
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_6($address_Line_6 = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_6) && !is_string($address_Line_6)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_6, true), gettype($address_Line_6)), __LINE__);
        }
        $this->Address_Line_6 = $address_Line_6;
        return $this;
    }
    /**
     * Get address_Line value
     * @return address_Line
     */
    public function getAddress_Line_7()
    {
        return $this->Address_Line_7;
    }
    /**
     * Set address_Line value
     * @param address_Line $address_Line
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_7($address_Line_7 = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_7) && !is_string($address_Line_7)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_7, true), gettype($address_Line_7)), __LINE__);
        }
        $this->Address_Line_7 = $address_Line_7;
        return $this;
    }
    /**
     * Get address_Line value
     * @return address_Line
     */
    public function getAddress_Line_8()
    {
        return $this->Address_Line_8;
    }
    /**
     * Set address_Line value
     * @param address_Line $address_Line
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_8($address_Line_8 = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_8) && !is_string($address_Line_8)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_8, true), gettype($address_Line_8)), __LINE__);
        }
        $this->Address_Line_8 = $address_Line_8;
        return $this;
    }
    /**
     * Get address_Line value
     * @return address_Line
     */
    public function getAddress_Line_9()
    {
        return $this->Address_Line_9;
    }
    /**
     * Set address_Line value
     * @param address_Line $address_Line
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_9($address_Line_9 = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_9) && !is_string($address_Line_9)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_9, true), gettype($address_Line_9)), __LINE__);
        }
        $this->Address_Line_9 = $address_Line_9;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \StructType\Global_Address_DataType
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get city_Subdivision value
     * @return city_Subdivision
     */
    public function getCity_Subdivision_1()
    {
        return $this->City_Subdivision_1;
    }
    /**
     * Set city_Subdivision value
     * @param city_Subdivision $city_Subdivision
     * @return \StructType\Global_Address_DataType
     */
    public function setCity_Subdivision_1($city_Subdivision_1 = null)
    {
        // validation for constraint: string
        if (!is_null($city_Subdivision_1) && !is_string($city_Subdivision_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city_Subdivision_1, true), gettype($city_Subdivision_1)), __LINE__);
        }
        $this->City_Subdivision_1 = $city_Subdivision_1;
        return $this;
    }
    /**
     * Get city_Subdivision value
     * @return city_Subdivision
     */
    public function getCity_Subdivision_2()
    {
        return $this->City_Subdivision_2;
    }
    /**
     * Set city_Subdivision value
     * @param city_Subdivision $city_Subdivision
     * @return \StructType\Global_Address_DataType
     */
    public function setCity_Subdivision_2($city_Subdivision_2 = null)
    {
        // validation for constraint: string
        if (!is_null($city_Subdivision_2) && !is_string($city_Subdivision_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city_Subdivision_2, true), gettype($city_Subdivision_2)), __LINE__);
        }
        $this->City_Subdivision_2 = $city_Subdivision_2;
        return $this;
    }
    /**
     * Get Country_Region_Reference value
     * @return \StructType\Country_RegionObjectType|null
     */
    public function getCountry_Region_Reference()
    {
        return $this->Country_Region_Reference;
    }
    /**
     * Set Country_Region_Reference value
     * @param \StructType\Country_RegionObjectType $country_Region_Reference
     * @return \StructType\Global_Address_DataType
     */
    public function setCountry_Region_Reference(\StructType\Country_RegionObjectType $country_Region_Reference = null)
    {
        $this->Country_Region_Reference = $country_Region_Reference;
        return $this;
    }
    /**
     * Get region_Subdivision value
     * @return region_Subdivision
     */
    public function getRegion_Subdivision_1()
    {
        return $this->Region_Subdivision_1;
    }
    /**
     * Set region_Subdivision value
     * @param region_Subdivision $region_Subdivision
     * @return \StructType\Global_Address_DataType
     */
    public function setRegion_Subdivision_1($region_Subdivision_1 = null)
    {
        // validation for constraint: string
        if (!is_null($region_Subdivision_1) && !is_string($region_Subdivision_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region_Subdivision_1, true), gettype($region_Subdivision_1)), __LINE__);
        }
        $this->Region_Subdivision_1 = $region_Subdivision_1;
        return $this;
    }
    /**
     * Get region_Subdivision value
     * @return region_Subdivision
     */
    public function getRegion_Subdivision_2()
    {
        return $this->Region_Subdivision_2;
    }
    /**
     * Set region_Subdivision value
     * @param region_Subdivision $region_Subdivision
     * @return \StructType\Global_Address_DataType
     */
    public function setRegion_Subdivision_2($region_Subdivision_2 = null)
    {
        // validation for constraint: string
        if (!is_null($region_Subdivision_2) && !is_string($region_Subdivision_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region_Subdivision_2, true), gettype($region_Subdivision_2)), __LINE__);
        }
        $this->Region_Subdivision_2 = $region_Subdivision_2;
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
     * @return \StructType\Global_Address_DataType
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
     * Get Country_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \StructType\CountryObjectType $country_Reference
     * @return \StructType\Global_Address_DataType
     */
    public function setCountry_Reference(\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get address_Line___Local value
     * @return address_Line___Local
     */
    public function getAddress_Line_1___Local()
    {
        return $this->{'Address_Line_1_-_Local'};
    }
    /**
     * Set address_Line___Local value
     * @param address_Line___Local $address_Line___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_1___Local($address_Line_1___Local = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_1___Local) && !is_string($address_Line_1___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_1___Local, true), gettype($address_Line_1___Local)), __LINE__);
        }
        $this->Address_Line_1___Local = $this->{'Address_Line_1_-_Local'} = $address_Line_1___Local;
        return $this;
    }
    /**
     * Get address_Line___Local value
     * @return address_Line___Local
     */
    public function getAddress_Line_2___Local()
    {
        return $this->{'Address_Line_2_-_Local'};
    }
    /**
     * Set address_Line___Local value
     * @param address_Line___Local $address_Line___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_2___Local($address_Line_2___Local = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_2___Local) && !is_string($address_Line_2___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_2___Local, true), gettype($address_Line_2___Local)), __LINE__);
        }
        $this->Address_Line_2___Local = $this->{'Address_Line_2_-_Local'} = $address_Line_2___Local;
        return $this;
    }
    /**
     * Get address_Line___Local value
     * @return address_Line___Local
     */
    public function getAddress_Line_3___Local()
    {
        return $this->{'Address_Line_3_-_Local'};
    }
    /**
     * Set address_Line___Local value
     * @param address_Line___Local $address_Line___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_3___Local($address_Line_3___Local = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_3___Local) && !is_string($address_Line_3___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_3___Local, true), gettype($address_Line_3___Local)), __LINE__);
        }
        $this->Address_Line_3___Local = $this->{'Address_Line_3_-_Local'} = $address_Line_3___Local;
        return $this;
    }
    /**
     * Get address_Line___Local value
     * @return address_Line___Local
     */
    public function getAddress_Line_4___Local()
    {
        return $this->{'Address_Line_4_-_Local'};
    }
    /**
     * Set address_Line___Local value
     * @param address_Line___Local $address_Line___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_4___Local($address_Line_4___Local = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_4___Local) && !is_string($address_Line_4___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_4___Local, true), gettype($address_Line_4___Local)), __LINE__);
        }
        $this->Address_Line_4___Local = $this->{'Address_Line_4_-_Local'} = $address_Line_4___Local;
        return $this;
    }
    /**
     * Get address_Line___Local value
     * @return address_Line___Local
     */
    public function getAddress_Line_5___Local()
    {
        return $this->{'Address_Line_5_-_Local'};
    }
    /**
     * Set address_Line___Local value
     * @param address_Line___Local $address_Line___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_5___Local($address_Line_5___Local = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_5___Local) && !is_string($address_Line_5___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_5___Local, true), gettype($address_Line_5___Local)), __LINE__);
        }
        $this->Address_Line_5___Local = $this->{'Address_Line_5_-_Local'} = $address_Line_5___Local;
        return $this;
    }
    /**
     * Get address_Line___Local value
     * @return address_Line___Local
     */
    public function getAddress_Line_6___Local()
    {
        return $this->{'Address_Line_6_-_Local'};
    }
    /**
     * Set address_Line___Local value
     * @param address_Line___Local $address_Line___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_6___Local($address_Line_6___Local = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_6___Local) && !is_string($address_Line_6___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_6___Local, true), gettype($address_Line_6___Local)), __LINE__);
        }
        $this->Address_Line_6___Local = $this->{'Address_Line_6_-_Local'} = $address_Line_6___Local;
        return $this;
    }
    /**
     * Get address_Line___Local value
     * @return address_Line___Local
     */
    public function getAddress_Line_7___Local()
    {
        return $this->{'Address_Line_7_-_Local'};
    }
    /**
     * Set address_Line___Local value
     * @param address_Line___Local $address_Line___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_7___Local($address_Line_7___Local = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_7___Local) && !is_string($address_Line_7___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_7___Local, true), gettype($address_Line_7___Local)), __LINE__);
        }
        $this->Address_Line_7___Local = $this->{'Address_Line_7_-_Local'} = $address_Line_7___Local;
        return $this;
    }
    /**
     * Get address_Line___Local value
     * @return address_Line___Local
     */
    public function getAddress_Line_8___Local()
    {
        return $this->{'Address_Line_8_-_Local'};
    }
    /**
     * Set address_Line___Local value
     * @param address_Line___Local $address_Line___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_8___Local($address_Line_8___Local = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_8___Local) && !is_string($address_Line_8___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_8___Local, true), gettype($address_Line_8___Local)), __LINE__);
        }
        $this->Address_Line_8___Local = $this->{'Address_Line_8_-_Local'} = $address_Line_8___Local;
        return $this;
    }
    /**
     * Get address_Line___Local value
     * @return address_Line___Local
     */
    public function getAddress_Line_9___Local()
    {
        return $this->{'Address_Line_9_-_Local'};
    }
    /**
     * Set address_Line___Local value
     * @param address_Line___Local $address_Line___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setAddress_Line_9___Local($address_Line_9___Local = null)
    {
        // validation for constraint: string
        if (!is_null($address_Line_9___Local) && !is_string($address_Line_9___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Line_9___Local, true), gettype($address_Line_9___Local)), __LINE__);
        }
        $this->Address_Line_9___Local = $this->{'Address_Line_9_-_Local'} = $address_Line_9___Local;
        return $this;
    }
    /**
     * Get City___Local value
     * @return string|null
     */
    public function getCity___Local()
    {
        return $this->{'City_-_Local'};
    }
    /**
     * Set City___Local value
     * @param string $city___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setCity___Local($city___Local = null)
    {
        // validation for constraint: string
        if (!is_null($city___Local) && !is_string($city___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city___Local, true), gettype($city___Local)), __LINE__);
        }
        $this->City___Local = $this->{'City_-_Local'} = $city___Local;
        return $this;
    }
    /**
     * Get city_Subdivision___Local value
     * @return city_Subdivision___Local
     */
    public function getCity_Subdivision_1___Local()
    {
        return $this->{'City_Subdivision_1_-_Local'};
    }
    /**
     * Set city_Subdivision___Local value
     * @param city_Subdivision___Local $city_Subdivision___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setCity_Subdivision_1___Local($city_Subdivision_1___Local = null)
    {
        // validation for constraint: string
        if (!is_null($city_Subdivision_1___Local) && !is_string($city_Subdivision_1___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city_Subdivision_1___Local, true), gettype($city_Subdivision_1___Local)), __LINE__);
        }
        $this->City_Subdivision_1___Local = $this->{'City_Subdivision_1_-_Local'} = $city_Subdivision_1___Local;
        return $this;
    }
    /**
     * Get city_Subdivision___Local value
     * @return city_Subdivision___Local
     */
    public function getCity_Subdivision_2___Local()
    {
        return $this->{'City_Subdivision_2_-_Local'};
    }
    /**
     * Set city_Subdivision___Local value
     * @param city_Subdivision___Local $city_Subdivision___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setCity_Subdivision_2___Local($city_Subdivision_2___Local = null)
    {
        // validation for constraint: string
        if (!is_null($city_Subdivision_2___Local) && !is_string($city_Subdivision_2___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city_Subdivision_2___Local, true), gettype($city_Subdivision_2___Local)), __LINE__);
        }
        $this->City_Subdivision_2___Local = $this->{'City_Subdivision_2_-_Local'} = $city_Subdivision_2___Local;
        return $this;
    }
    /**
     * Get region_Subdivision___Local value
     * @return region_Subdivision___Local
     */
    public function getRegion_Subdivision_1___Local()
    {
        return $this->{'Region_Subdivision_1_-_Local'};
    }
    /**
     * Set region_Subdivision___Local value
     * @param region_Subdivision___Local $region_Subdivision___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setRegion_Subdivision_1___Local($region_Subdivision_1___Local = null)
    {
        // validation for constraint: string
        if (!is_null($region_Subdivision_1___Local) && !is_string($region_Subdivision_1___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region_Subdivision_1___Local, true), gettype($region_Subdivision_1___Local)), __LINE__);
        }
        $this->Region_Subdivision_1___Local = $this->{'Region_Subdivision_1_-_Local'} = $region_Subdivision_1___Local;
        return $this;
    }
    /**
     * Get region_Subdivision___Local value
     * @return region_Subdivision___Local
     */
    public function getRegion_Subdivision_2___Local()
    {
        return $this->{'Region_Subdivision_2_-_Local'};
    }
    /**
     * Set region_Subdivision___Local value
     * @param region_Subdivision___Local $region_Subdivision___Local
     * @return \StructType\Global_Address_DataType
     */
    public function setRegion_Subdivision_2___Local($region_Subdivision_2___Local = null)
    {
        // validation for constraint: string
        if (!is_null($region_Subdivision_2___Local) && !is_string($region_Subdivision_2___Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region_Subdivision_2___Local, true), gettype($region_Subdivision_2___Local)), __LINE__);
        }
        $this->Region_Subdivision_2___Local = $this->{'Region_Subdivision_2_-_Local'} = $region_Subdivision_2___Local;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Global_Address_DataType
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
