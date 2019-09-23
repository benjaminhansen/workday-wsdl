<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Personal_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: City of Birth is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The field Race/Ethnicity is not tracked for the specified Location Context. The
 * Location Context is derived from the Country of the Location for the Position. | HispaniclLatino is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location. | The Political Affiliation is not
 * tracked for the specified Location Context. The Location Context is derived from the Country of the Location. | The Marital Status is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location. |
 * The Religion is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location. | Gender is not tracked for the specified Location Context. The Location Context is derived from the Country of the
 * Location for the Position. | The field Date of Birth is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The Additional Nationalities is not tracked for the specified
 * Location Context. The Location Context is derived from the Country of the Location. | The social benefits locality does not exist in the specified Location Context. The Location Context is derived from the Country of the Location specified for the
 * Position. Currently, the Social Benefits Locality values are ignored for Puts involving applicants since a Social Benefits Locality value is associated with workers and not applicants. | The social benefits locality data has not been activated for
 * this location via the Maintain Localization Settings task. | The Political Affiliation does not exist in the specified Location Context. The Location Context is derived from the Country of the Location specified for the Position. | The field Marital
 * Status is required and must have a value if a Marital Status Date is entered. | Last Medical Exam Date cannot be in the future | Last Medical Exam Valid To Date must be after Last Medical Exam Date | Medical exam history is not tracked for the
 * specified Location Context. The Location Context is derived from the Country of the Location for the Position | Hukou Postal Code is only tracked for China. | The Nationality type is not tracked for the specified Location Context. The Location
 * Context is derived from the Country of the Location for the Position. | The Citizenship Status is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | Hukou Subregion is
 * only tracked in China. | Hukou Region is only tracked for China. | Hukou Locality is only tracked for China. | Hukou Type is only tracked in China. | Native Region is only tracked in China. | The country region of birth is not tracked for the
 * specified Location Context. The Location Context is derived from the Country of the Location for the Position | Usage Type is Invalid for this Contactable. | The marital status does not exist in the specified Location Context. The Location Context is
 * derived from the Country of the Location specified for the Position. | The religion is not valid for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The ethnicity does not exist in
 * the specified Location Context. The Location Context is derived from the Country of the Location of the Position | The country of birth is not tracked for the specified Location Context. The Location Context is derived from the Country of the
 * Location for the Position | Wrapper element for Personal Data.
 * @subpackage Structs
 */
class Personal_Information_DataType extends AbstractStructBase
{
    /**
     * The Universal_ID
     * Meta information extracted from the WSDL
     * - documentation: The universal ID uniquely identifies the Person. It remains the same for a person regardless of what roles they have. This field will be automatically populated if a sequence generator is configured in Edit Tenant Setup-System.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Universal_ID;
    /**
     * The Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the legal, preferred, and additional names for a person.
     * - minOccurs: 0
     * @var \StructType\Person_Name_DataType
     */
    public $Name_Data;
    /**
     * The Gender_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Gender of the person.
     * - minOccurs: 0
     * @var \StructType\GenderObjectType
     */
    public $Gender_Reference;
    /**
     * The Birth_Date
     * Meta information extracted from the WSDL
     * - documentation: Person's date of birth.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Birth_Date;
    /**
     * The Date_of_Death
     * Meta information extracted from the WSDL
     * - documentation: The date of a person's death. The date of death element is not valid for the following web services and will be ignored: Hire Employee, Contract Contingent Worker, and Put Applicant.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Death;
    /**
     * The Country_of_Birth_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country where the person was born.
     * - minOccurs: 0
     * @var \StructType\CountryObjectType
     */
    public $Country_of_Birth_Reference;
    /**
     * The Region_of_Birth_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country Region where the person was born.
     * - minOccurs: 0
     * @var \StructType\Country_RegionObjectType
     */
    public $Region_of_Birth_Reference;
    /**
     * The Region_of_Birth_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: Country Region where the person was born.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Region_of_Birth_Descriptor;
    /**
     * The City_of_Birth
     * Meta information extracted from the WSDL
     * - documentation: Person's City of birth.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City_of_Birth;
    /**
     * The City_of_Birth_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person's City of Birth.
     * - minOccurs: 0
     * @var \StructType\Country_CityObjectType
     */
    public $City_of_Birth_Reference;
    /**
     * The Marital_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for the person's Marital Status. Marital Status Information is localized and based on the country of the location where the worker is assigned. The location effective date must be after the hire effective date.
     * - minOccurs: 0
     * @var \StructType\Marital_StatusObjectType
     */
    public $Marital_Status_Reference;
    /**
     * The Marital_Status_Date
     * Meta information extracted from the WSDL
     * - documentation: The Marital Status Date cannot be before the Date of Birth | Person's Marital Status Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Marital_Status_Date;
    /**
     * The Religion_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for a person's Religions.
     * - minOccurs: 0
     * @var \StructType\ReligionObjectType
     */
    public $Religion_Reference;
    /**
     * The Disability_Status_Data
     * Meta information extracted from the WSDL
     * - documentation: Disability Status Data for a PersonSecurity Note: This element is secured according to the security policy for the Worker Data: Disabilities domain.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Person_Disability_Status_DataType[]
     */
    public $Disability_Status_Data;
    /**
     * The Ethnicity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for the person's Ethnicities.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EthnicityObjectType[]
     */
    public $Ethnicity_Reference;
    /**
     * The Hispanic_or_Latino
     * Meta information extracted from the WSDL
     * - documentation: Returns a true if the person's Ethnicity is Hispanic or Latino.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Hispanic_or_Latino;
    /**
     * The Citizenship_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person's Legal Citizenship status.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Citizenship_StatusObjectType[]
     */
    public $Citizenship_Status_Reference;
    /**
     * The Primary_Nationality_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person's Country of Nationality.
     * - minOccurs: 0
     * @var \StructType\CountryObjectType
     */
    public $Primary_Nationality_Reference;
    /**
     * The Additional_Nationality_Reference
     * Meta information extracted from the WSDL
     * - documentation: Please select different primary and additional nationalities. | Please select a primary nationality or remove the additional nationality. | List of Additional Nationalities for the person. This is a list of countries.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CountryObjectType[]
     */
    public $Additional_Nationality_Reference;
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
     * The Local_Hukou
     * Meta information extracted from the WSDL
     * - documentation: Whether the hukou subregion of the person is local to the location of the primary job. This field is only used in a response and is not used for requests.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Local_Hukou;
    /**
     * The Native_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Native Region for the person.
     * - minOccurs: 0
     * @var \StructType\Country_RegionObjectType
     */
    public $Native_Region_Reference;
    /**
     * The Native_Region_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: The Native Region for the person.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Native_Region_Descriptor;
    /**
     * The Personnel_File_Agency_for_Person
     * Meta information extracted from the WSDL
     * - documentation: Personnel File Agency is used in China to indicate where Workers have their Personnel File Stored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Personnel_File_Agency_for_Person;
    /**
     * The Last_Medical_Exam_Date
     * Meta information extracted from the WSDL
     * - documentation: This field tracks the date of the worker's most recent Medical Exam.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Medical_Exam_Date;
    /**
     * The Last_Medical_Exam_Valid_To
     * Meta information extracted from the WSDL
     * - documentation: This field tracks the expiration date of the worker's most recent Medical Exam.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Medical_Exam_Valid_To;
    /**
     * The Medical_Exam_Notes
     * Meta information extracted from the WSDL
     * - documentation: This field tracks any comments regarding the worker's most recent Medical Exam.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Medical_Exam_Notes;
    /**
     * The Blood_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person's Blood Type.
     * - minOccurs: 0
     * @var \StructType\Blood_TypeObjectType
     */
    public $Blood_Type_Reference;
    /**
     * The Military_Service_Data
     * Meta information extracted from the WSDL
     * - documentation: Returns the military status for a person.Security Note: This element is secured according to the security policy for the "Military/Citizenship for Worker" domain.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Person_Military_Service_DataType[]
     */
    public $Military_Service_Data;
    /**
     * The Identification_Data
     * Meta information extracted from the WSDL
     * - documentation: The id information for the person (national ids, government ids, passport ids, visa ids, license ids, custom ids).Security Note: This is secured to the following domains: My ID Information, Worker ID Information, Applicant Personal
     * Data: ID Information
     * - minOccurs: 0
     * @var \StructType\Person_Identification_DataType
     */
    public $Identification_Data;
    /**
     * The Contact_Data
     * Meta information extracted from the WSDL
     * - documentation: All of the person's contact data (address, phone, email, instant messenger, web address).Security Note: The response for Contact information is secured to the My Contact Information and Worker Private Contact Information domains for
     * Get Workers and Get Payees and secured to the Applicant Data: Contact Information domain for Get Applicants web service.
     * - minOccurs: 0
     * @var \StructType\Contact_Information_DataType
     */
    public $Contact_Data;
    /**
     * The Tobacco_Use
     * Meta information extracted from the WSDL
     * - documentation: True if the person uses tobacco. To update a person's Tobacco Use, use the Put Worker Wellness Data web service.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Tobacco_Use;
    /**
     * The Political_Affiliation_Reference
     * Meta information extracted from the WSDL
     * - documentation: This field tracks the political affiliation of the person.
     * - minOccurs: 0
     * @var \StructType\Political_AffiliationObjectType
     */
    public $Political_Affiliation_Reference;
    /**
     * The Social_Benefits_Locality_Reference
     * Meta information extracted from the WSDL
     * - documentation: The person's Social Benefits Locality. Social Benefits Locality values are ignored for Puts involving applicants since a Social Benefits Locality value is associated with workers and not applicants.
     * - minOccurs: 0
     * @var \StructType\Social_Benefits_LocalityObjectType
     */
    public $Social_Benefits_Locality_Reference;
    /**
     * The Relative_Name_Information_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Relative_Name_Information_DataType
     */
    public $Relative_Name_Information_Data;
    /**
     * Constructor method for Personal_Information_DataType
     * @uses Personal_Information_DataType::setUniversal_ID()
     * @uses Personal_Information_DataType::setName_Data()
     * @uses Personal_Information_DataType::setGender_Reference()
     * @uses Personal_Information_DataType::setBirth_Date()
     * @uses Personal_Information_DataType::setDate_of_Death()
     * @uses Personal_Information_DataType::setCountry_of_Birth_Reference()
     * @uses Personal_Information_DataType::setRegion_of_Birth_Reference()
     * @uses Personal_Information_DataType::setRegion_of_Birth_Descriptor()
     * @uses Personal_Information_DataType::setCity_of_Birth()
     * @uses Personal_Information_DataType::setCity_of_Birth_Reference()
     * @uses Personal_Information_DataType::setMarital_Status_Reference()
     * @uses Personal_Information_DataType::setMarital_Status_Date()
     * @uses Personal_Information_DataType::setReligion_Reference()
     * @uses Personal_Information_DataType::setDisability_Status_Data()
     * @uses Personal_Information_DataType::setEthnicity_Reference()
     * @uses Personal_Information_DataType::setHispanic_or_Latino()
     * @uses Personal_Information_DataType::setCitizenship_Status_Reference()
     * @uses Personal_Information_DataType::setPrimary_Nationality_Reference()
     * @uses Personal_Information_DataType::setAdditional_Nationality_Reference()
     * @uses Personal_Information_DataType::setHukou_Region_Reference()
     * @uses Personal_Information_DataType::setHukou_Subregion_Reference()
     * @uses Personal_Information_DataType::setHukou_Locality()
     * @uses Personal_Information_DataType::setHukou_Postal_Code()
     * @uses Personal_Information_DataType::setHukou_Type_Reference()
     * @uses Personal_Information_DataType::setLocal_Hukou()
     * @uses Personal_Information_DataType::setNative_Region_Reference()
     * @uses Personal_Information_DataType::setNative_Region_Descriptor()
     * @uses Personal_Information_DataType::setPersonnel_File_Agency_for_Person()
     * @uses Personal_Information_DataType::setLast_Medical_Exam_Date()
     * @uses Personal_Information_DataType::setLast_Medical_Exam_Valid_To()
     * @uses Personal_Information_DataType::setMedical_Exam_Notes()
     * @uses Personal_Information_DataType::setBlood_Type_Reference()
     * @uses Personal_Information_DataType::setMilitary_Service_Data()
     * @uses Personal_Information_DataType::setIdentification_Data()
     * @uses Personal_Information_DataType::setContact_Data()
     * @uses Personal_Information_DataType::setTobacco_Use()
     * @uses Personal_Information_DataType::setPolitical_Affiliation_Reference()
     * @uses Personal_Information_DataType::setSocial_Benefits_Locality_Reference()
     * @uses Personal_Information_DataType::setRelative_Name_Information_Data()
     * @param string $universal_ID
     * @param \StructType\Person_Name_DataType $name_Data
     * @param \StructType\GenderObjectType $gender_Reference
     * @param string $birth_Date
     * @param string $date_of_Death
     * @param \StructType\CountryObjectType $country_of_Birth_Reference
     * @param \StructType\Country_RegionObjectType $region_of_Birth_Reference
     * @param string $region_of_Birth_Descriptor
     * @param string $city_of_Birth
     * @param \StructType\Country_CityObjectType $city_of_Birth_Reference
     * @param \StructType\Marital_StatusObjectType $marital_Status_Reference
     * @param string $marital_Status_Date
     * @param \StructType\ReligionObjectType $religion_Reference
     * @param \StructType\Person_Disability_Status_DataType[] $disability_Status_Data
     * @param \StructType\EthnicityObjectType[] $ethnicity_Reference
     * @param bool $hispanic_or_Latino
     * @param \StructType\Citizenship_StatusObjectType[] $citizenship_Status_Reference
     * @param \StructType\CountryObjectType $primary_Nationality_Reference
     * @param \StructType\CountryObjectType[] $additional_Nationality_Reference
     * @param \StructType\Country_RegionObjectType $hukou_Region_Reference
     * @param \StructType\Country_SubregionObjectType $hukou_Subregion_Reference
     * @param string $hukou_Locality
     * @param string $hukou_Postal_Code
     * @param \StructType\Hukou_TypeObjectType $hukou_Type_Reference
     * @param bool $local_Hukou
     * @param \StructType\Country_RegionObjectType $native_Region_Reference
     * @param string $native_Region_Descriptor
     * @param string $personnel_File_Agency_for_Person
     * @param string $last_Medical_Exam_Date
     * @param string $last_Medical_Exam_Valid_To
     * @param string $medical_Exam_Notes
     * @param \StructType\Blood_TypeObjectType $blood_Type_Reference
     * @param \StructType\Person_Military_Service_DataType[] $military_Service_Data
     * @param \StructType\Person_Identification_DataType $identification_Data
     * @param \StructType\Contact_Information_DataType $contact_Data
     * @param bool $tobacco_Use
     * @param \StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @param \StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @param \StructType\Relative_Name_Information_DataType $relative_Name_Information_Data
     */
    public function __construct($universal_ID = null, \StructType\Person_Name_DataType $name_Data = null, \StructType\GenderObjectType $gender_Reference = null, $birth_Date = null, $date_of_Death = null, \StructType\CountryObjectType $country_of_Birth_Reference = null, \StructType\Country_RegionObjectType $region_of_Birth_Reference = null, $region_of_Birth_Descriptor = null, $city_of_Birth = null, \StructType\Country_CityObjectType $city_of_Birth_Reference = null, \StructType\Marital_StatusObjectType $marital_Status_Reference = null, $marital_Status_Date = null, \StructType\ReligionObjectType $religion_Reference = null, array $disability_Status_Data = array(), array $ethnicity_Reference = array(), $hispanic_or_Latino = null, array $citizenship_Status_Reference = array(), \StructType\CountryObjectType $primary_Nationality_Reference = null, array $additional_Nationality_Reference = array(), \StructType\Country_RegionObjectType $hukou_Region_Reference = null, \StructType\Country_SubregionObjectType $hukou_Subregion_Reference = null, $hukou_Locality = null, $hukou_Postal_Code = null, \StructType\Hukou_TypeObjectType $hukou_Type_Reference = null, $local_Hukou = null, \StructType\Country_RegionObjectType $native_Region_Reference = null, $native_Region_Descriptor = null, $personnel_File_Agency_for_Person = null, $last_Medical_Exam_Date = null, $last_Medical_Exam_Valid_To = null, $medical_Exam_Notes = null, \StructType\Blood_TypeObjectType $blood_Type_Reference = null, array $military_Service_Data = array(), \StructType\Person_Identification_DataType $identification_Data = null, \StructType\Contact_Information_DataType $contact_Data = null, $tobacco_Use = null, \StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null, \StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null, \StructType\Relative_Name_Information_DataType $relative_Name_Information_Data = null)
    {
        $this
            ->setUniversal_ID($universal_ID)
            ->setName_Data($name_Data)
            ->setGender_Reference($gender_Reference)
            ->setBirth_Date($birth_Date)
            ->setDate_of_Death($date_of_Death)
            ->setCountry_of_Birth_Reference($country_of_Birth_Reference)
            ->setRegion_of_Birth_Reference($region_of_Birth_Reference)
            ->setRegion_of_Birth_Descriptor($region_of_Birth_Descriptor)
            ->setCity_of_Birth($city_of_Birth)
            ->setCity_of_Birth_Reference($city_of_Birth_Reference)
            ->setMarital_Status_Reference($marital_Status_Reference)
            ->setMarital_Status_Date($marital_Status_Date)
            ->setReligion_Reference($religion_Reference)
            ->setDisability_Status_Data($disability_Status_Data)
            ->setEthnicity_Reference($ethnicity_Reference)
            ->setHispanic_or_Latino($hispanic_or_Latino)
            ->setCitizenship_Status_Reference($citizenship_Status_Reference)
            ->setPrimary_Nationality_Reference($primary_Nationality_Reference)
            ->setAdditional_Nationality_Reference($additional_Nationality_Reference)
            ->setHukou_Region_Reference($hukou_Region_Reference)
            ->setHukou_Subregion_Reference($hukou_Subregion_Reference)
            ->setHukou_Locality($hukou_Locality)
            ->setHukou_Postal_Code($hukou_Postal_Code)
            ->setHukou_Type_Reference($hukou_Type_Reference)
            ->setLocal_Hukou($local_Hukou)
            ->setNative_Region_Reference($native_Region_Reference)
            ->setNative_Region_Descriptor($native_Region_Descriptor)
            ->setPersonnel_File_Agency_for_Person($personnel_File_Agency_for_Person)
            ->setLast_Medical_Exam_Date($last_Medical_Exam_Date)
            ->setLast_Medical_Exam_Valid_To($last_Medical_Exam_Valid_To)
            ->setMedical_Exam_Notes($medical_Exam_Notes)
            ->setBlood_Type_Reference($blood_Type_Reference)
            ->setMilitary_Service_Data($military_Service_Data)
            ->setIdentification_Data($identification_Data)
            ->setContact_Data($contact_Data)
            ->setTobacco_Use($tobacco_Use)
            ->setPolitical_Affiliation_Reference($political_Affiliation_Reference)
            ->setSocial_Benefits_Locality_Reference($social_Benefits_Locality_Reference)
            ->setRelative_Name_Information_Data($relative_Name_Information_Data);
    }
    /**
     * Get Universal_ID value
     * @return string|null
     */
    public function getUniversal_ID()
    {
        return $this->Universal_ID;
    }
    /**
     * Set Universal_ID value
     * @param string $universal_ID
     * @return \StructType\Personal_Information_DataType
     */
    public function setUniversal_ID($universal_ID = null)
    {
        // validation for constraint: string
        if (!is_null($universal_ID) && !is_string($universal_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universal_ID, true), gettype($universal_ID)), __LINE__);
        }
        $this->Universal_ID = $universal_ID;
        return $this;
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
     * @return \StructType\Personal_Information_DataType
     */
    public function setName_Data(\StructType\Person_Name_DataType $name_Data = null)
    {
        $this->Name_Data = $name_Data;
        return $this;
    }
    /**
     * Get Gender_Reference value
     * @return \StructType\GenderObjectType|null
     */
    public function getGender_Reference()
    {
        return $this->Gender_Reference;
    }
    /**
     * Set Gender_Reference value
     * @param \StructType\GenderObjectType $gender_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setGender_Reference(\StructType\GenderObjectType $gender_Reference = null)
    {
        $this->Gender_Reference = $gender_Reference;
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
     * @return \StructType\Personal_Information_DataType
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
     * Get Date_of_Death value
     * @return string|null
     */
    public function getDate_of_Death()
    {
        return $this->Date_of_Death;
    }
    /**
     * Set Date_of_Death value
     * @param string $date_of_Death
     * @return \StructType\Personal_Information_DataType
     */
    public function setDate_of_Death($date_of_Death = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_Death) && !is_string($date_of_Death)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_of_Death, true), gettype($date_of_Death)), __LINE__);
        }
        $this->Date_of_Death = $date_of_Death;
        return $this;
    }
    /**
     * Get Country_of_Birth_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getCountry_of_Birth_Reference()
    {
        return $this->Country_of_Birth_Reference;
    }
    /**
     * Set Country_of_Birth_Reference value
     * @param \StructType\CountryObjectType $country_of_Birth_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setCountry_of_Birth_Reference(\StructType\CountryObjectType $country_of_Birth_Reference = null)
    {
        $this->Country_of_Birth_Reference = $country_of_Birth_Reference;
        return $this;
    }
    /**
     * Get Region_of_Birth_Reference value
     * @return \StructType\Country_RegionObjectType|null
     */
    public function getRegion_of_Birth_Reference()
    {
        return $this->Region_of_Birth_Reference;
    }
    /**
     * Set Region_of_Birth_Reference value
     * @param \StructType\Country_RegionObjectType $region_of_Birth_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setRegion_of_Birth_Reference(\StructType\Country_RegionObjectType $region_of_Birth_Reference = null)
    {
        $this->Region_of_Birth_Reference = $region_of_Birth_Reference;
        return $this;
    }
    /**
     * Get Region_of_Birth_Descriptor value
     * @return string|null
     */
    public function getRegion_of_Birth_Descriptor()
    {
        return $this->Region_of_Birth_Descriptor;
    }
    /**
     * Set Region_of_Birth_Descriptor value
     * @param string $region_of_Birth_Descriptor
     * @return \StructType\Personal_Information_DataType
     */
    public function setRegion_of_Birth_Descriptor($region_of_Birth_Descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($region_of_Birth_Descriptor) && !is_string($region_of_Birth_Descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region_of_Birth_Descriptor, true), gettype($region_of_Birth_Descriptor)), __LINE__);
        }
        $this->Region_of_Birth_Descriptor = $region_of_Birth_Descriptor;
        return $this;
    }
    /**
     * Get City_of_Birth value
     * @return string|null
     */
    public function getCity_of_Birth()
    {
        return $this->City_of_Birth;
    }
    /**
     * Set City_of_Birth value
     * @param string $city_of_Birth
     * @return \StructType\Personal_Information_DataType
     */
    public function setCity_of_Birth($city_of_Birth = null)
    {
        // validation for constraint: string
        if (!is_null($city_of_Birth) && !is_string($city_of_Birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city_of_Birth, true), gettype($city_of_Birth)), __LINE__);
        }
        $this->City_of_Birth = $city_of_Birth;
        return $this;
    }
    /**
     * Get City_of_Birth_Reference value
     * @return \StructType\Country_CityObjectType|null
     */
    public function getCity_of_Birth_Reference()
    {
        return $this->City_of_Birth_Reference;
    }
    /**
     * Set City_of_Birth_Reference value
     * @param \StructType\Country_CityObjectType $city_of_Birth_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setCity_of_Birth_Reference(\StructType\Country_CityObjectType $city_of_Birth_Reference = null)
    {
        $this->City_of_Birth_Reference = $city_of_Birth_Reference;
        return $this;
    }
    /**
     * Get Marital_Status_Reference value
     * @return \StructType\Marital_StatusObjectType|null
     */
    public function getMarital_Status_Reference()
    {
        return $this->Marital_Status_Reference;
    }
    /**
     * Set Marital_Status_Reference value
     * @param \StructType\Marital_StatusObjectType $marital_Status_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setMarital_Status_Reference(\StructType\Marital_StatusObjectType $marital_Status_Reference = null)
    {
        $this->Marital_Status_Reference = $marital_Status_Reference;
        return $this;
    }
    /**
     * Get Marital_Status_Date value
     * @return string|null
     */
    public function getMarital_Status_Date()
    {
        return $this->Marital_Status_Date;
    }
    /**
     * Set Marital_Status_Date value
     * @param string $marital_Status_Date
     * @return \StructType\Personal_Information_DataType
     */
    public function setMarital_Status_Date($marital_Status_Date = null)
    {
        // validation for constraint: string
        if (!is_null($marital_Status_Date) && !is_string($marital_Status_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marital_Status_Date, true), gettype($marital_Status_Date)), __LINE__);
        }
        $this->Marital_Status_Date = $marital_Status_Date;
        return $this;
    }
    /**
     * Get Religion_Reference value
     * @return \StructType\ReligionObjectType|null
     */
    public function getReligion_Reference()
    {
        return $this->Religion_Reference;
    }
    /**
     * Set Religion_Reference value
     * @param \StructType\ReligionObjectType $religion_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setReligion_Reference(\StructType\ReligionObjectType $religion_Reference = null)
    {
        $this->Religion_Reference = $religion_Reference;
        return $this;
    }
    /**
     * Get Disability_Status_Data value
     * @return \StructType\Person_Disability_Status_DataType[]|null
     */
    public function getDisability_Status_Data()
    {
        return $this->Disability_Status_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setDisability_Status_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisability_Status_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisability_Status_DataForArrayConstraintsFromSetDisability_Status_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $personal_Information_DataTypeDisability_Status_DataItem) {
            // validation for constraint: itemType
            if (!$personal_Information_DataTypeDisability_Status_DataItem instanceof \StructType\Person_Disability_Status_DataType) {
                $invalidValues[] = is_object($personal_Information_DataTypeDisability_Status_DataItem) ? get_class($personal_Information_DataTypeDisability_Status_DataItem) : sprintf('%s(%s)', gettype($personal_Information_DataTypeDisability_Status_DataItem), var_export($personal_Information_DataTypeDisability_Status_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Disability_Status_Data property can only contain items of type \StructType\Person_Disability_Status_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Disability_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_Disability_Status_DataType[] $disability_Status_Data
     * @return \StructType\Personal_Information_DataType
     */
    public function setDisability_Status_Data(array $disability_Status_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($disability_Status_DataArrayErrorMessage = self::validateDisability_Status_DataForArrayConstraintsFromSetDisability_Status_Data($disability_Status_Data))) {
            throw new \InvalidArgumentException($disability_Status_DataArrayErrorMessage, __LINE__);
        }
        $this->Disability_Status_Data = $disability_Status_Data;
        return $this;
    }
    /**
     * Add item to Disability_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_Disability_Status_DataType $item
     * @return \StructType\Personal_Information_DataType
     */
    public function addToDisability_Status_Data(\StructType\Person_Disability_Status_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Person_Disability_Status_DataType) {
            throw new \InvalidArgumentException(sprintf('The Disability_Status_Data property can only contain items of type \StructType\Person_Disability_Status_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Disability_Status_Data[] = $item;
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
        foreach ($values as $personal_Information_DataTypeEthnicity_ReferenceItem) {
            // validation for constraint: itemType
            if (!$personal_Information_DataTypeEthnicity_ReferenceItem instanceof \StructType\EthnicityObjectType) {
                $invalidValues[] = is_object($personal_Information_DataTypeEthnicity_ReferenceItem) ? get_class($personal_Information_DataTypeEthnicity_ReferenceItem) : sprintf('%s(%s)', gettype($personal_Information_DataTypeEthnicity_ReferenceItem), var_export($personal_Information_DataTypeEthnicity_ReferenceItem, true));
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
     * @return \StructType\Personal_Information_DataType
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
     * @return \StructType\Personal_Information_DataType
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
     * @return \StructType\Personal_Information_DataType
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
     * Get Citizenship_Status_Reference value
     * @return \StructType\Citizenship_StatusObjectType[]|null
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
        foreach ($values as $personal_Information_DataTypeCitizenship_Status_ReferenceItem) {
            // validation for constraint: itemType
            if (!$personal_Information_DataTypeCitizenship_Status_ReferenceItem instanceof \StructType\Citizenship_StatusObjectType) {
                $invalidValues[] = is_object($personal_Information_DataTypeCitizenship_Status_ReferenceItem) ? get_class($personal_Information_DataTypeCitizenship_Status_ReferenceItem) : sprintf('%s(%s)', gettype($personal_Information_DataTypeCitizenship_Status_ReferenceItem), var_export($personal_Information_DataTypeCitizenship_Status_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Citizenship_Status_Reference property can only contain items of type \StructType\Citizenship_StatusObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Citizenship_Status_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Citizenship_StatusObjectType[] $citizenship_Status_Reference
     * @return \StructType\Personal_Information_DataType
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
     * @param \StructType\Citizenship_StatusObjectType $item
     * @return \StructType\Personal_Information_DataType
     */
    public function addToCitizenship_Status_Reference(\StructType\Citizenship_StatusObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Citizenship_StatusObjectType) {
            throw new \InvalidArgumentException(sprintf('The Citizenship_Status_Reference property can only contain items of type \StructType\Citizenship_StatusObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Citizenship_Status_Reference[] = $item;
        return $this;
    }
    /**
     * Get Primary_Nationality_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getPrimary_Nationality_Reference()
    {
        return $this->Primary_Nationality_Reference;
    }
    /**
     * Set Primary_Nationality_Reference value
     * @param \StructType\CountryObjectType $primary_Nationality_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setPrimary_Nationality_Reference(\StructType\CountryObjectType $primary_Nationality_Reference = null)
    {
        $this->Primary_Nationality_Reference = $primary_Nationality_Reference;
        return $this;
    }
    /**
     * Get Additional_Nationality_Reference value
     * @return \StructType\CountryObjectType[]|null
     */
    public function getAdditional_Nationality_Reference()
    {
        return $this->Additional_Nationality_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditional_Nationality_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditional_Nationality_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditional_Nationality_ReferenceForArrayConstraintsFromSetAdditional_Nationality_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $personal_Information_DataTypeAdditional_Nationality_ReferenceItem) {
            // validation for constraint: itemType
            if (!$personal_Information_DataTypeAdditional_Nationality_ReferenceItem instanceof \StructType\CountryObjectType) {
                $invalidValues[] = is_object($personal_Information_DataTypeAdditional_Nationality_ReferenceItem) ? get_class($personal_Information_DataTypeAdditional_Nationality_ReferenceItem) : sprintf('%s(%s)', gettype($personal_Information_DataTypeAdditional_Nationality_ReferenceItem), var_export($personal_Information_DataTypeAdditional_Nationality_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Additional_Nationality_Reference property can only contain items of type \StructType\CountryObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Additional_Nationality_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\CountryObjectType[] $additional_Nationality_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setAdditional_Nationality_Reference(array $additional_Nationality_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($additional_Nationality_ReferenceArrayErrorMessage = self::validateAdditional_Nationality_ReferenceForArrayConstraintsFromSetAdditional_Nationality_Reference($additional_Nationality_Reference))) {
            throw new \InvalidArgumentException($additional_Nationality_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Additional_Nationality_Reference = $additional_Nationality_Reference;
        return $this;
    }
    /**
     * Add item to Additional_Nationality_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\CountryObjectType $item
     * @return \StructType\Personal_Information_DataType
     */
    public function addToAdditional_Nationality_Reference(\StructType\CountryObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CountryObjectType) {
            throw new \InvalidArgumentException(sprintf('The Additional_Nationality_Reference property can only contain items of type \StructType\CountryObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Additional_Nationality_Reference[] = $item;
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
     * @return \StructType\Personal_Information_DataType
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
     * @return \StructType\Personal_Information_DataType
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
     * @return \StructType\Personal_Information_DataType
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
     * @return \StructType\Personal_Information_DataType
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
     * @return \StructType\Personal_Information_DataType
     */
    public function setHukou_Type_Reference(\StructType\Hukou_TypeObjectType $hukou_Type_Reference = null)
    {
        $this->Hukou_Type_Reference = $hukou_Type_Reference;
        return $this;
    }
    /**
     * Get Local_Hukou value
     * @return bool|null
     */
    public function getLocal_Hukou()
    {
        return $this->Local_Hukou;
    }
    /**
     * Set Local_Hukou value
     * @param bool $local_Hukou
     * @return \StructType\Personal_Information_DataType
     */
    public function setLocal_Hukou($local_Hukou = null)
    {
        // validation for constraint: boolean
        if (!is_null($local_Hukou) && !is_bool($local_Hukou)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($local_Hukou, true), gettype($local_Hukou)), __LINE__);
        }
        $this->Local_Hukou = $local_Hukou;
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
     * @return \StructType\Personal_Information_DataType
     */
    public function setNative_Region_Reference(\StructType\Country_RegionObjectType $native_Region_Reference = null)
    {
        $this->Native_Region_Reference = $native_Region_Reference;
        return $this;
    }
    /**
     * Get Native_Region_Descriptor value
     * @return string|null
     */
    public function getNative_Region_Descriptor()
    {
        return $this->Native_Region_Descriptor;
    }
    /**
     * Set Native_Region_Descriptor value
     * @param string $native_Region_Descriptor
     * @return \StructType\Personal_Information_DataType
     */
    public function setNative_Region_Descriptor($native_Region_Descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($native_Region_Descriptor) && !is_string($native_Region_Descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($native_Region_Descriptor, true), gettype($native_Region_Descriptor)), __LINE__);
        }
        $this->Native_Region_Descriptor = $native_Region_Descriptor;
        return $this;
    }
    /**
     * Get Personnel_File_Agency_for_Person value
     * @return string|null
     */
    public function getPersonnel_File_Agency_for_Person()
    {
        return $this->Personnel_File_Agency_for_Person;
    }
    /**
     * Set Personnel_File_Agency_for_Person value
     * @param string $personnel_File_Agency_for_Person
     * @return \StructType\Personal_Information_DataType
     */
    public function setPersonnel_File_Agency_for_Person($personnel_File_Agency_for_Person = null)
    {
        // validation for constraint: string
        if (!is_null($personnel_File_Agency_for_Person) && !is_string($personnel_File_Agency_for_Person)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personnel_File_Agency_for_Person, true), gettype($personnel_File_Agency_for_Person)), __LINE__);
        }
        $this->Personnel_File_Agency_for_Person = $personnel_File_Agency_for_Person;
        return $this;
    }
    /**
     * Get Last_Medical_Exam_Date value
     * @return string|null
     */
    public function getLast_Medical_Exam_Date()
    {
        return $this->Last_Medical_Exam_Date;
    }
    /**
     * Set Last_Medical_Exam_Date value
     * @param string $last_Medical_Exam_Date
     * @return \StructType\Personal_Information_DataType
     */
    public function setLast_Medical_Exam_Date($last_Medical_Exam_Date = null)
    {
        // validation for constraint: string
        if (!is_null($last_Medical_Exam_Date) && !is_string($last_Medical_Exam_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Medical_Exam_Date, true), gettype($last_Medical_Exam_Date)), __LINE__);
        }
        $this->Last_Medical_Exam_Date = $last_Medical_Exam_Date;
        return $this;
    }
    /**
     * Get Last_Medical_Exam_Valid_To value
     * @return string|null
     */
    public function getLast_Medical_Exam_Valid_To()
    {
        return $this->Last_Medical_Exam_Valid_To;
    }
    /**
     * Set Last_Medical_Exam_Valid_To value
     * @param string $last_Medical_Exam_Valid_To
     * @return \StructType\Personal_Information_DataType
     */
    public function setLast_Medical_Exam_Valid_To($last_Medical_Exam_Valid_To = null)
    {
        // validation for constraint: string
        if (!is_null($last_Medical_Exam_Valid_To) && !is_string($last_Medical_Exam_Valid_To)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Medical_Exam_Valid_To, true), gettype($last_Medical_Exam_Valid_To)), __LINE__);
        }
        $this->Last_Medical_Exam_Valid_To = $last_Medical_Exam_Valid_To;
        return $this;
    }
    /**
     * Get Medical_Exam_Notes value
     * @return string|null
     */
    public function getMedical_Exam_Notes()
    {
        return $this->Medical_Exam_Notes;
    }
    /**
     * Set Medical_Exam_Notes value
     * @param string $medical_Exam_Notes
     * @return \StructType\Personal_Information_DataType
     */
    public function setMedical_Exam_Notes($medical_Exam_Notes = null)
    {
        // validation for constraint: string
        if (!is_null($medical_Exam_Notes) && !is_string($medical_Exam_Notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medical_Exam_Notes, true), gettype($medical_Exam_Notes)), __LINE__);
        }
        $this->Medical_Exam_Notes = $medical_Exam_Notes;
        return $this;
    }
    /**
     * Get Blood_Type_Reference value
     * @return \StructType\Blood_TypeObjectType|null
     */
    public function getBlood_Type_Reference()
    {
        return $this->Blood_Type_Reference;
    }
    /**
     * Set Blood_Type_Reference value
     * @param \StructType\Blood_TypeObjectType $blood_Type_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setBlood_Type_Reference(\StructType\Blood_TypeObjectType $blood_Type_Reference = null)
    {
        $this->Blood_Type_Reference = $blood_Type_Reference;
        return $this;
    }
    /**
     * Get Military_Service_Data value
     * @return \StructType\Person_Military_Service_DataType[]|null
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
        foreach ($values as $personal_Information_DataTypeMilitary_Service_DataItem) {
            // validation for constraint: itemType
            if (!$personal_Information_DataTypeMilitary_Service_DataItem instanceof \StructType\Person_Military_Service_DataType) {
                $invalidValues[] = is_object($personal_Information_DataTypeMilitary_Service_DataItem) ? get_class($personal_Information_DataTypeMilitary_Service_DataItem) : sprintf('%s(%s)', gettype($personal_Information_DataTypeMilitary_Service_DataItem), var_export($personal_Information_DataTypeMilitary_Service_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Military_Service_Data property can only contain items of type \StructType\Person_Military_Service_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Military_Service_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_Military_Service_DataType[] $military_Service_Data
     * @return \StructType\Personal_Information_DataType
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
     * @param \StructType\Person_Military_Service_DataType $item
     * @return \StructType\Personal_Information_DataType
     */
    public function addToMilitary_Service_Data(\StructType\Person_Military_Service_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Person_Military_Service_DataType) {
            throw new \InvalidArgumentException(sprintf('The Military_Service_Data property can only contain items of type \StructType\Person_Military_Service_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Military_Service_Data[] = $item;
        return $this;
    }
    /**
     * Get Identification_Data value
     * @return \StructType\Person_Identification_DataType|null
     */
    public function getIdentification_Data()
    {
        return $this->Identification_Data;
    }
    /**
     * Set Identification_Data value
     * @param \StructType\Person_Identification_DataType $identification_Data
     * @return \StructType\Personal_Information_DataType
     */
    public function setIdentification_Data(\StructType\Person_Identification_DataType $identification_Data = null)
    {
        $this->Identification_Data = $identification_Data;
        return $this;
    }
    /**
     * Get Contact_Data value
     * @return \StructType\Contact_Information_DataType|null
     */
    public function getContact_Data()
    {
        return $this->Contact_Data;
    }
    /**
     * Set Contact_Data value
     * @param \StructType\Contact_Information_DataType $contact_Data
     * @return \StructType\Personal_Information_DataType
     */
    public function setContact_Data(\StructType\Contact_Information_DataType $contact_Data = null)
    {
        $this->Contact_Data = $contact_Data;
        return $this;
    }
    /**
     * Get Tobacco_Use value
     * @return bool|null
     */
    public function getTobacco_Use()
    {
        return $this->Tobacco_Use;
    }
    /**
     * Set Tobacco_Use value
     * @param bool $tobacco_Use
     * @return \StructType\Personal_Information_DataType
     */
    public function setTobacco_Use($tobacco_Use = null)
    {
        // validation for constraint: boolean
        if (!is_null($tobacco_Use) && !is_bool($tobacco_Use)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tobacco_Use, true), gettype($tobacco_Use)), __LINE__);
        }
        $this->Tobacco_Use = $tobacco_Use;
        return $this;
    }
    /**
     * Get Political_Affiliation_Reference value
     * @return \StructType\Political_AffiliationObjectType|null
     */
    public function getPolitical_Affiliation_Reference()
    {
        return $this->Political_Affiliation_Reference;
    }
    /**
     * Set Political_Affiliation_Reference value
     * @param \StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setPolitical_Affiliation_Reference(\StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null)
    {
        $this->Political_Affiliation_Reference = $political_Affiliation_Reference;
        return $this;
    }
    /**
     * Get Social_Benefits_Locality_Reference value
     * @return \StructType\Social_Benefits_LocalityObjectType|null
     */
    public function getSocial_Benefits_Locality_Reference()
    {
        return $this->Social_Benefits_Locality_Reference;
    }
    /**
     * Set Social_Benefits_Locality_Reference value
     * @param \StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @return \StructType\Personal_Information_DataType
     */
    public function setSocial_Benefits_Locality_Reference(\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null)
    {
        $this->Social_Benefits_Locality_Reference = $social_Benefits_Locality_Reference;
        return $this;
    }
    /**
     * Get Relative_Name_Information_Data value
     * @return \StructType\Relative_Name_Information_DataType|null
     */
    public function getRelative_Name_Information_Data()
    {
        return $this->Relative_Name_Information_Data;
    }
    /**
     * Set Relative_Name_Information_Data value
     * @param \StructType\Relative_Name_Information_DataType $relative_Name_Information_Data
     * @return \StructType\Personal_Information_DataType
     */
    public function setRelative_Name_Information_Data(\StructType\Relative_Name_Information_DataType $relative_Name_Information_Data = null)
    {
        $this->Relative_Name_Information_Data = $relative_Name_Information_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Personal_Information_DataType
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
