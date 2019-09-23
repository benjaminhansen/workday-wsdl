<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Personal_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: A worker can't have a City of Birth without a corresponding Region of Birth. | City of Birth is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The
 * field Relatives' Name is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The field Military Status is not tracked for the specified Location Context. The Location
 * Context is derived from the Country of the Location for the Position | The field Disability is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The field
 * Race/Ethnicity is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The Additional Nationalities is not tracked for the specified Location Context. The Location
 * Context is derived from the Country of the Location. | The Political Affiliation is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location. | The field Blood Type is not tracked for the
 * specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The Marital Status is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location. |
 * The Religion is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location. | Gender is not tracked for the specified Location Context. The Location Context is derived from the Country of the
 * Location for the Position. | The field Date of Birth is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The Pronoun is not tracked for the specified Location
 * Context. The Location Context is derived from the Country of the Location for the Position. | The Gender Identity is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. |
 * The Sexual Orientation is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | Pronoun Reference is not valid or in-active. | Gender Identity Reference is not valid or
 * in-active. | Sexual Orientation Reference is not valid or in-active. | You can't enter a value for Contingent Workers for the Visual Survey Ethnicity Reference or the Hispanic or Latino for Visual Survey element. | Hispanic or Latino for Visual
 * Survey is only tracked in the USA and must be enabled in tenant setup by your administrator. | At least one visual ethnicity in this request is inactive. Only active ethnicities are allowed. | Multiple Visual Ethnicities are not allowed for the
 * specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The visual ethnicity does not exist in the specified Location Context. The Location Context is derived from the Country of the Location
 * of the Position | The Hukou Subregion does not exist within the specified Hukou Region or is inactive. | A Worker cannot have a Birth Region without a corresponding Birth Country. | LGBT Identification is not valid for this country | The social
 * benefits locality does not exist in the specified Location Context. The Location Context is derived from the Country of the Location specified for the Position. Currently, the Social Benefits Locality values are ignored for Puts involving applicants
 * since a Social Benefits Locality value is associated with workers and not applicants. | The social benefits locality data has not been activated for this location via the Maintain Localization Settings task. | The Hukou Subregion specified is not
 * valid for the Location Context. The Location Context is derived from the Country of the Location for the Position. | Hukou can only be entered for citizens of China. | Date of death is only allowed for terminated workers. | Inactive marital statuses
 * are not allowed in this request. | At least one ethnicity in this request is inactive. Only active ethnicities are allowed. | At least one citizenship status in this request is inactive. Only active statuses are allowed. | Multiple Ethnicities are
 * not allowed for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | Hispanic or Latino is only tracked in the USA and must be enabled in tenant setup by your administrator. | The field
 * Marital Status is required and must have a value if a Marital Status Date is entered. | Last Medical Exam Valid To Date must be after Last Medical Exam Date | The city of birth is not tracked for the specified Location Context. The Location Context
 * is derived from the Country of the Location for the Position | Medical exam history is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position | Invalid Date of Death. It must
 * be between today's date and the worker's hire date. | The Political Affiliation does not exist in the specified Location Context. The Location Context is derived from the Country of the Location specified for the Position. | The hukou postal code is
 * not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The Citizenship Status is not tracked for the specified Location Context. The Location Context is derived from the
 * Country of the Location for the Position. | The Nationality type is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The Personnel File Agency is not tracked for the
 * specified Location Context. | The native region is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The hukou type is not tracked for the specified Location Context.
 * The Location Context is derived from the Country of the Location for the Position. | The hukou locality is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The hukou
 * subregion is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The hukou region is not tracked for the specified Location Context. The Location Context is derived from
 * the Country of the Location for the Position. | The country region of birth is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The marital status does not exist in
 * the specified Location Context. The Location Context is derived from the Country of the Location specified for the Position. | The religion is not valid for the specified Location Context. The Location Context is derived from the Country of the
 * Location for the Position. | The ethnicity does not exist in the specified Location Context. The Location Context is derived from the Country of the Location of the Position | The country of birth is not tracked for the specified Location Context.
 * The Location Context is derived from the Country of the Location for the Position | Container for the data changed in the Change Personal Information business process.
 * @subpackage Structs
 */
class Change_Personal_Information_DataType extends AbstractStructBase
{
    /**
     * The Date_of_Birth
     * Meta information extracted from the WSDL
     * - documentation: Date of birth must precede all disability status dates currently on the worker unless all disability data is being replaced. | Date of birth must precede all military discharge dates currently on the worker unless all military
     * service data is being replaced. | Date of birth must precede marital status date, medical exam dates and date of death. This applies to the data in this request as well any existing data on the worker that is not being modified. | Person's Date of
     * Birth.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Birth;
    /**
     * The Birth_Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country where the person was born.
     * - minOccurs: 0
     * @var \StructType\CountryObjectType
     */
    public $Birth_Country_Reference;
    /**
     * The Birth_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Region of Birth entered is not valid for the corresponding Country of Birth. | Country Region where the person was born.
     * - minOccurs: 0
     * @var \StructType\Country_RegionObjectType
     */
    public $Birth_Region_Reference;
    /**
     * The Gender_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Gender of the person.
     * - minOccurs: 0
     * @var \StructType\GenderObjectType
     */
    public $Gender_Reference;
    /**
     * The Disability_Information_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Disability_Information_DataType
     */
    public $Disability_Information_Data;
    /**
     * The Marital_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for the person's Marital Status.
     * - minOccurs: 0
     * @var \StructType\Marital_StatusObjectType
     */
    public $Marital_Status_Reference;
    /**
     * The Citizenship_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for the person's Citizenship Status.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Citizenship_StatusObjectType[]
     */
    public $Citizenship_Reference;
    /**
     * The Primary_Nationality_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for the person's Country of Nationality
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
     * - documentation: Boolean to indicate if a person is Hispanic or Latino.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Hispanic_or_Latino;
    /**
     * The Visual_Survey_Ethnicity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to person's Visual Survey Ethnicities.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EthnicityObjectType[]
     */
    public $Visual_Survey_Ethnicity_Reference;
    /**
     * The Hispanic_or_Latino_for_Visual_Survey
     * Meta information extracted from the WSDL
     * - documentation: Boolean reference to person's Visual Survey for Hispanic or Latino.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Hispanic_or_Latino_for_Visual_Survey;
    /**
     * The Religion_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for a person's Religions.
     * - minOccurs: 0
     * @var \StructType\ReligionObjectType
     */
    public $Religion_Reference;
    /**
     * The Hukou_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: Hukou Region must be in China. | Country region on the Hukou of the person. This field is only available for the country China and the person with citizenship status of China.
     * - minOccurs: 0
     * @var \StructType\Country_RegionObjectType
     */
    public $Hukou_Region_Reference;
    /**
     * The Hukou_Subregion_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country subregion on the Hukou of the person. This field is only available for the country China and the person with citizenship status of China.
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
     * - documentation: Native region on the Hukou of the person. This field is only available for the country China and the person with citizenship status of China.
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
     * The Military_Information_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Military_Information_DataType
     */
    public $Military_Information_Data;
    /**
     * The Political_Affiliation_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person's Political Affiliation.
     * - minOccurs: 0
     * @var \StructType\Political_AffiliationObjectType
     */
    public $Political_Affiliation_Reference;
    /**
     * The Date_of_Death
     * Meta information extracted from the WSDL
     * - documentation: Person's Date of Death.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Death;
    /**
     * The City_of_Birth
     * Meta information extracted from the WSDL
     * - documentation: Person's City of Birth (Text Only).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City_of_Birth;
    /**
     * The City_of_Birth_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person's City of Birth (Prompt Value).
     * - minOccurs: 0
     * @var \StructType\Country_CityObjectType
     */
    public $City_of_Birth_Reference;
    /**
     * The Marital_Status_Date
     * Meta information extracted from the WSDL
     * - documentation: Person's Marital Status Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Marital_Status_Date;
    /**
     * The Last_Medical_Exam_Date
     * Meta information extracted from the WSDL
     * - documentation: Last Medical Exam Date cannot be in the future | Date of person's most recent Medical Examination.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Medical_Exam_Date;
    /**
     * The Last_Medical_Exam_Valid_To
     * Meta information extracted from the WSDL
     * - documentation: Expiration date of person's most recent Medical Examination.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Medical_Exam_Valid_To;
    /**
     * The Medical_Exam_Notes
     * Meta information extracted from the WSDL
     * - documentation: Notes for the person's most recent Medical Examination.
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
     * The Uses_Tobacco
     * Meta information extracted from the WSDL
     * - documentation: True if the person uses tobacco. To update a person's Tobacco Use, use the Put Worker Wellness Data web service.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Uses_Tobacco;
    /**
     * The Social_Benefits_Locality_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person's social benefits locality.
     * - minOccurs: 0
     * @var \StructType\Social_Benefits_LocalityObjectType
     */
    public $Social_Benefits_Locality_Reference;
    /**
     * The LGBT_Identification_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person's sexual orientation and gender identity.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\LGBT_IdentificationObjectType[]
     */
    public $LGBT_Identification_Reference;
    /**
     * The Sexual_Orientation_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the sexual orientation of the person.
     * - minOccurs: 0
     * @var \StructType\Sexual_OrientationObjectType
     */
    public $Sexual_Orientation_Reference;
    /**
     * The Gender_Identity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the gender identity of the person.
     * - minOccurs: 0
     * @var \StructType\Gender_IdentityObjectType
     */
    public $Gender_Identity_Reference;
    /**
     * The Pronoun_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Pronoun of the person.
     * - minOccurs: 0
     * @var \StructType\PronounObjectType
     */
    public $Pronoun_Reference;
    /**
     * The Relative_Name_Information_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Relative_Name_Information_DataType
     */
    public $Relative_Name_Information_Data;
    /**
     * Constructor method for Change_Personal_Information_DataType
     * @uses Change_Personal_Information_DataType::setDate_of_Birth()
     * @uses Change_Personal_Information_DataType::setBirth_Country_Reference()
     * @uses Change_Personal_Information_DataType::setBirth_Region_Reference()
     * @uses Change_Personal_Information_DataType::setGender_Reference()
     * @uses Change_Personal_Information_DataType::setDisability_Information_Data()
     * @uses Change_Personal_Information_DataType::setMarital_Status_Reference()
     * @uses Change_Personal_Information_DataType::setCitizenship_Reference()
     * @uses Change_Personal_Information_DataType::setPrimary_Nationality_Reference()
     * @uses Change_Personal_Information_DataType::setAdditional_Nationality_Reference()
     * @uses Change_Personal_Information_DataType::setEthnicity_Reference()
     * @uses Change_Personal_Information_DataType::setHispanic_or_Latino()
     * @uses Change_Personal_Information_DataType::setVisual_Survey_Ethnicity_Reference()
     * @uses Change_Personal_Information_DataType::setHispanic_or_Latino_for_Visual_Survey()
     * @uses Change_Personal_Information_DataType::setReligion_Reference()
     * @uses Change_Personal_Information_DataType::setHukou_Region_Reference()
     * @uses Change_Personal_Information_DataType::setHukou_Subregion_Reference()
     * @uses Change_Personal_Information_DataType::setHukou_Locality()
     * @uses Change_Personal_Information_DataType::setHukou_Postal_Code()
     * @uses Change_Personal_Information_DataType::setHukou_Type_Reference()
     * @uses Change_Personal_Information_DataType::setNative_Region_Reference()
     * @uses Change_Personal_Information_DataType::setPersonnel_File_Agency()
     * @uses Change_Personal_Information_DataType::setMilitary_Information_Data()
     * @uses Change_Personal_Information_DataType::setPolitical_Affiliation_Reference()
     * @uses Change_Personal_Information_DataType::setDate_of_Death()
     * @uses Change_Personal_Information_DataType::setCity_of_Birth()
     * @uses Change_Personal_Information_DataType::setCity_of_Birth_Reference()
     * @uses Change_Personal_Information_DataType::setMarital_Status_Date()
     * @uses Change_Personal_Information_DataType::setLast_Medical_Exam_Date()
     * @uses Change_Personal_Information_DataType::setLast_Medical_Exam_Valid_To()
     * @uses Change_Personal_Information_DataType::setMedical_Exam_Notes()
     * @uses Change_Personal_Information_DataType::setBlood_Type_Reference()
     * @uses Change_Personal_Information_DataType::setUses_Tobacco()
     * @uses Change_Personal_Information_DataType::setSocial_Benefits_Locality_Reference()
     * @uses Change_Personal_Information_DataType::setLGBT_Identification_Reference()
     * @uses Change_Personal_Information_DataType::setSexual_Orientation_Reference()
     * @uses Change_Personal_Information_DataType::setGender_Identity_Reference()
     * @uses Change_Personal_Information_DataType::setPronoun_Reference()
     * @uses Change_Personal_Information_DataType::setRelative_Name_Information_Data()
     * @param string $date_of_Birth
     * @param \StructType\CountryObjectType $birth_Country_Reference
     * @param \StructType\Country_RegionObjectType $birth_Region_Reference
     * @param \StructType\GenderObjectType $gender_Reference
     * @param \StructType\Disability_Information_DataType $disability_Information_Data
     * @param \StructType\Marital_StatusObjectType $marital_Status_Reference
     * @param \StructType\Citizenship_StatusObjectType[] $citizenship_Reference
     * @param \StructType\CountryObjectType $primary_Nationality_Reference
     * @param \StructType\CountryObjectType[] $additional_Nationality_Reference
     * @param \StructType\EthnicityObjectType[] $ethnicity_Reference
     * @param bool $hispanic_or_Latino
     * @param \StructType\EthnicityObjectType[] $visual_Survey_Ethnicity_Reference
     * @param bool $hispanic_or_Latino_for_Visual_Survey
     * @param \StructType\ReligionObjectType $religion_Reference
     * @param \StructType\Country_RegionObjectType $hukou_Region_Reference
     * @param \StructType\Country_SubregionObjectType $hukou_Subregion_Reference
     * @param string $hukou_Locality
     * @param string $hukou_Postal_Code
     * @param \StructType\Hukou_TypeObjectType $hukou_Type_Reference
     * @param \StructType\Country_RegionObjectType $native_Region_Reference
     * @param string $personnel_File_Agency
     * @param \StructType\Military_Information_DataType $military_Information_Data
     * @param \StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @param string $date_of_Death
     * @param string $city_of_Birth
     * @param \StructType\Country_CityObjectType $city_of_Birth_Reference
     * @param string $marital_Status_Date
     * @param string $last_Medical_Exam_Date
     * @param string $last_Medical_Exam_Valid_To
     * @param string $medical_Exam_Notes
     * @param \StructType\Blood_TypeObjectType $blood_Type_Reference
     * @param bool $uses_Tobacco
     * @param \StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @param \StructType\LGBT_IdentificationObjectType[] $lGBT_Identification_Reference
     * @param \StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference
     * @param \StructType\Gender_IdentityObjectType $gender_Identity_Reference
     * @param \StructType\PronounObjectType $pronoun_Reference
     * @param \StructType\Relative_Name_Information_DataType $relative_Name_Information_Data
     */
    public function __construct($date_of_Birth = null, \StructType\CountryObjectType $birth_Country_Reference = null, \StructType\Country_RegionObjectType $birth_Region_Reference = null, \StructType\GenderObjectType $gender_Reference = null, \StructType\Disability_Information_DataType $disability_Information_Data = null, \StructType\Marital_StatusObjectType $marital_Status_Reference = null, array $citizenship_Reference = array(), \StructType\CountryObjectType $primary_Nationality_Reference = null, array $additional_Nationality_Reference = array(), array $ethnicity_Reference = array(), $hispanic_or_Latino = null, array $visual_Survey_Ethnicity_Reference = array(), $hispanic_or_Latino_for_Visual_Survey = null, \StructType\ReligionObjectType $religion_Reference = null, \StructType\Country_RegionObjectType $hukou_Region_Reference = null, \StructType\Country_SubregionObjectType $hukou_Subregion_Reference = null, $hukou_Locality = null, $hukou_Postal_Code = null, \StructType\Hukou_TypeObjectType $hukou_Type_Reference = null, \StructType\Country_RegionObjectType $native_Region_Reference = null, $personnel_File_Agency = null, \StructType\Military_Information_DataType $military_Information_Data = null, \StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null, $date_of_Death = null, $city_of_Birth = null, \StructType\Country_CityObjectType $city_of_Birth_Reference = null, $marital_Status_Date = null, $last_Medical_Exam_Date = null, $last_Medical_Exam_Valid_To = null, $medical_Exam_Notes = null, \StructType\Blood_TypeObjectType $blood_Type_Reference = null, $uses_Tobacco = null, \StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null, array $lGBT_Identification_Reference = array(), \StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference = null, \StructType\Gender_IdentityObjectType $gender_Identity_Reference = null, \StructType\PronounObjectType $pronoun_Reference = null, \StructType\Relative_Name_Information_DataType $relative_Name_Information_Data = null)
    {
        $this
            ->setDate_of_Birth($date_of_Birth)
            ->setBirth_Country_Reference($birth_Country_Reference)
            ->setBirth_Region_Reference($birth_Region_Reference)
            ->setGender_Reference($gender_Reference)
            ->setDisability_Information_Data($disability_Information_Data)
            ->setMarital_Status_Reference($marital_Status_Reference)
            ->setCitizenship_Reference($citizenship_Reference)
            ->setPrimary_Nationality_Reference($primary_Nationality_Reference)
            ->setAdditional_Nationality_Reference($additional_Nationality_Reference)
            ->setEthnicity_Reference($ethnicity_Reference)
            ->setHispanic_or_Latino($hispanic_or_Latino)
            ->setVisual_Survey_Ethnicity_Reference($visual_Survey_Ethnicity_Reference)
            ->setHispanic_or_Latino_for_Visual_Survey($hispanic_or_Latino_for_Visual_Survey)
            ->setReligion_Reference($religion_Reference)
            ->setHukou_Region_Reference($hukou_Region_Reference)
            ->setHukou_Subregion_Reference($hukou_Subregion_Reference)
            ->setHukou_Locality($hukou_Locality)
            ->setHukou_Postal_Code($hukou_Postal_Code)
            ->setHukou_Type_Reference($hukou_Type_Reference)
            ->setNative_Region_Reference($native_Region_Reference)
            ->setPersonnel_File_Agency($personnel_File_Agency)
            ->setMilitary_Information_Data($military_Information_Data)
            ->setPolitical_Affiliation_Reference($political_Affiliation_Reference)
            ->setDate_of_Death($date_of_Death)
            ->setCity_of_Birth($city_of_Birth)
            ->setCity_of_Birth_Reference($city_of_Birth_Reference)
            ->setMarital_Status_Date($marital_Status_Date)
            ->setLast_Medical_Exam_Date($last_Medical_Exam_Date)
            ->setLast_Medical_Exam_Valid_To($last_Medical_Exam_Valid_To)
            ->setMedical_Exam_Notes($medical_Exam_Notes)
            ->setBlood_Type_Reference($blood_Type_Reference)
            ->setUses_Tobacco($uses_Tobacco)
            ->setSocial_Benefits_Locality_Reference($social_Benefits_Locality_Reference)
            ->setLGBT_Identification_Reference($lGBT_Identification_Reference)
            ->setSexual_Orientation_Reference($sexual_Orientation_Reference)
            ->setGender_Identity_Reference($gender_Identity_Reference)
            ->setPronoun_Reference($pronoun_Reference)
            ->setRelative_Name_Information_Data($relative_Name_Information_Data);
    }
    /**
     * Get Date_of_Birth value
     * @return string|null
     */
    public function getDate_of_Birth()
    {
        return $this->Date_of_Birth;
    }
    /**
     * Set Date_of_Birth value
     * @param string $date_of_Birth
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setDate_of_Birth($date_of_Birth = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_Birth) && !is_string($date_of_Birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_of_Birth, true), gettype($date_of_Birth)), __LINE__);
        }
        $this->Date_of_Birth = $date_of_Birth;
        return $this;
    }
    /**
     * Get Birth_Country_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getBirth_Country_Reference()
    {
        return $this->Birth_Country_Reference;
    }
    /**
     * Set Birth_Country_Reference value
     * @param \StructType\CountryObjectType $birth_Country_Reference
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setBirth_Country_Reference(\StructType\CountryObjectType $birth_Country_Reference = null)
    {
        $this->Birth_Country_Reference = $birth_Country_Reference;
        return $this;
    }
    /**
     * Get Birth_Region_Reference value
     * @return \StructType\Country_RegionObjectType|null
     */
    public function getBirth_Region_Reference()
    {
        return $this->Birth_Region_Reference;
    }
    /**
     * Set Birth_Region_Reference value
     * @param \StructType\Country_RegionObjectType $birth_Region_Reference
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setBirth_Region_Reference(\StructType\Country_RegionObjectType $birth_Region_Reference = null)
    {
        $this->Birth_Region_Reference = $birth_Region_Reference;
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
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setGender_Reference(\StructType\GenderObjectType $gender_Reference = null)
    {
        $this->Gender_Reference = $gender_Reference;
        return $this;
    }
    /**
     * Get Disability_Information_Data value
     * @return \StructType\Disability_Information_DataType|null
     */
    public function getDisability_Information_Data()
    {
        return $this->Disability_Information_Data;
    }
    /**
     * Set Disability_Information_Data value
     * @param \StructType\Disability_Information_DataType $disability_Information_Data
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setDisability_Information_Data(\StructType\Disability_Information_DataType $disability_Information_Data = null)
    {
        $this->Disability_Information_Data = $disability_Information_Data;
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
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setMarital_Status_Reference(\StructType\Marital_StatusObjectType $marital_Status_Reference = null)
    {
        $this->Marital_Status_Reference = $marital_Status_Reference;
        return $this;
    }
    /**
     * Get Citizenship_Reference value
     * @return \StructType\Citizenship_StatusObjectType[]|null
     */
    public function getCitizenship_Reference()
    {
        return $this->Citizenship_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCitizenship_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCitizenship_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCitizenship_ReferenceForArrayConstraintsFromSetCitizenship_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Personal_Information_DataTypeCitizenship_ReferenceItem) {
            // validation for constraint: itemType
            if (!$change_Personal_Information_DataTypeCitizenship_ReferenceItem instanceof \StructType\Citizenship_StatusObjectType) {
                $invalidValues[] = is_object($change_Personal_Information_DataTypeCitizenship_ReferenceItem) ? get_class($change_Personal_Information_DataTypeCitizenship_ReferenceItem) : sprintf('%s(%s)', gettype($change_Personal_Information_DataTypeCitizenship_ReferenceItem), var_export($change_Personal_Information_DataTypeCitizenship_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Citizenship_Reference property can only contain items of type \StructType\Citizenship_StatusObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Citizenship_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Citizenship_StatusObjectType[] $citizenship_Reference
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setCitizenship_Reference(array $citizenship_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($citizenship_ReferenceArrayErrorMessage = self::validateCitizenship_ReferenceForArrayConstraintsFromSetCitizenship_Reference($citizenship_Reference))) {
            throw new \InvalidArgumentException($citizenship_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Citizenship_Reference = $citizenship_Reference;
        return $this;
    }
    /**
     * Add item to Citizenship_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Citizenship_StatusObjectType $item
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function addToCitizenship_Reference(\StructType\Citizenship_StatusObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Citizenship_StatusObjectType) {
            throw new \InvalidArgumentException(sprintf('The Citizenship_Reference property can only contain items of type \StructType\Citizenship_StatusObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Citizenship_Reference[] = $item;
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
     * @return \StructType\Change_Personal_Information_DataType
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
        foreach ($values as $change_Personal_Information_DataTypeAdditional_Nationality_ReferenceItem) {
            // validation for constraint: itemType
            if (!$change_Personal_Information_DataTypeAdditional_Nationality_ReferenceItem instanceof \StructType\CountryObjectType) {
                $invalidValues[] = is_object($change_Personal_Information_DataTypeAdditional_Nationality_ReferenceItem) ? get_class($change_Personal_Information_DataTypeAdditional_Nationality_ReferenceItem) : sprintf('%s(%s)', gettype($change_Personal_Information_DataTypeAdditional_Nationality_ReferenceItem), var_export($change_Personal_Information_DataTypeAdditional_Nationality_ReferenceItem, true));
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
        foreach ($values as $change_Personal_Information_DataTypeEthnicity_ReferenceItem) {
            // validation for constraint: itemType
            if (!$change_Personal_Information_DataTypeEthnicity_ReferenceItem instanceof \StructType\EthnicityObjectType) {
                $invalidValues[] = is_object($change_Personal_Information_DataTypeEthnicity_ReferenceItem) ? get_class($change_Personal_Information_DataTypeEthnicity_ReferenceItem) : sprintf('%s(%s)', gettype($change_Personal_Information_DataTypeEthnicity_ReferenceItem), var_export($change_Personal_Information_DataTypeEthnicity_ReferenceItem, true));
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * Get Visual_Survey_Ethnicity_Reference value
     * @return \StructType\EthnicityObjectType[]|null
     */
    public function getVisual_Survey_Ethnicity_Reference()
    {
        return $this->Visual_Survey_Ethnicity_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setVisual_Survey_Ethnicity_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVisual_Survey_Ethnicity_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVisual_Survey_Ethnicity_ReferenceForArrayConstraintsFromSetVisual_Survey_Ethnicity_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Personal_Information_DataTypeVisual_Survey_Ethnicity_ReferenceItem) {
            // validation for constraint: itemType
            if (!$change_Personal_Information_DataTypeVisual_Survey_Ethnicity_ReferenceItem instanceof \StructType\EthnicityObjectType) {
                $invalidValues[] = is_object($change_Personal_Information_DataTypeVisual_Survey_Ethnicity_ReferenceItem) ? get_class($change_Personal_Information_DataTypeVisual_Survey_Ethnicity_ReferenceItem) : sprintf('%s(%s)', gettype($change_Personal_Information_DataTypeVisual_Survey_Ethnicity_ReferenceItem), var_export($change_Personal_Information_DataTypeVisual_Survey_Ethnicity_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Visual_Survey_Ethnicity_Reference property can only contain items of type \StructType\EthnicityObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Visual_Survey_Ethnicity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\EthnicityObjectType[] $visual_Survey_Ethnicity_Reference
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setVisual_Survey_Ethnicity_Reference(array $visual_Survey_Ethnicity_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($visual_Survey_Ethnicity_ReferenceArrayErrorMessage = self::validateVisual_Survey_Ethnicity_ReferenceForArrayConstraintsFromSetVisual_Survey_Ethnicity_Reference($visual_Survey_Ethnicity_Reference))) {
            throw new \InvalidArgumentException($visual_Survey_Ethnicity_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Visual_Survey_Ethnicity_Reference = $visual_Survey_Ethnicity_Reference;
        return $this;
    }
    /**
     * Add item to Visual_Survey_Ethnicity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\EthnicityObjectType $item
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function addToVisual_Survey_Ethnicity_Reference(\StructType\EthnicityObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EthnicityObjectType) {
            throw new \InvalidArgumentException(sprintf('The Visual_Survey_Ethnicity_Reference property can only contain items of type \StructType\EthnicityObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Visual_Survey_Ethnicity_Reference[] = $item;
        return $this;
    }
    /**
     * Get Hispanic_or_Latino_for_Visual_Survey value
     * @return bool|null
     */
    public function getHispanic_or_Latino_for_Visual_Survey()
    {
        return $this->Hispanic_or_Latino_for_Visual_Survey;
    }
    /**
     * Set Hispanic_or_Latino_for_Visual_Survey value
     * @param bool $hispanic_or_Latino_for_Visual_Survey
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setHispanic_or_Latino_for_Visual_Survey($hispanic_or_Latino_for_Visual_Survey = null)
    {
        // validation for constraint: boolean
        if (!is_null($hispanic_or_Latino_for_Visual_Survey) && !is_bool($hispanic_or_Latino_for_Visual_Survey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hispanic_or_Latino_for_Visual_Survey, true), gettype($hispanic_or_Latino_for_Visual_Survey)), __LINE__);
        }
        $this->Hispanic_or_Latino_for_Visual_Survey = $hispanic_or_Latino_for_Visual_Survey;
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
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setReligion_Reference(\StructType\ReligionObjectType $religion_Reference = null)
    {
        $this->Religion_Reference = $religion_Reference;
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * Get Military_Information_Data value
     * @return \StructType\Military_Information_DataType|null
     */
    public function getMilitary_Information_Data()
    {
        return $this->Military_Information_Data;
    }
    /**
     * Set Military_Information_Data value
     * @param \StructType\Military_Information_DataType $military_Information_Data
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setMilitary_Information_Data(\StructType\Military_Information_DataType $military_Information_Data = null)
    {
        $this->Military_Information_Data = $military_Information_Data;
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
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setPolitical_Affiliation_Reference(\StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null)
    {
        $this->Political_Affiliation_Reference = $political_Affiliation_Reference;
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setCity_of_Birth_Reference(\StructType\Country_CityObjectType $city_of_Birth_Reference = null)
    {
        $this->City_of_Birth_Reference = $city_of_Birth_Reference;
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setBlood_Type_Reference(\StructType\Blood_TypeObjectType $blood_Type_Reference = null)
    {
        $this->Blood_Type_Reference = $blood_Type_Reference;
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setSocial_Benefits_Locality_Reference(\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null)
    {
        $this->Social_Benefits_Locality_Reference = $social_Benefits_Locality_Reference;
        return $this;
    }
    /**
     * Get LGBT_Identification_Reference value
     * @return \StructType\LGBT_IdentificationObjectType[]|null
     */
    public function getLGBT_Identification_Reference()
    {
        return $this->LGBT_Identification_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLGBT_Identification_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLGBT_Identification_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLGBT_Identification_ReferenceForArrayConstraintsFromSetLGBT_Identification_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Personal_Information_DataTypeLGBT_Identification_ReferenceItem) {
            // validation for constraint: itemType
            if (!$change_Personal_Information_DataTypeLGBT_Identification_ReferenceItem instanceof \StructType\LGBT_IdentificationObjectType) {
                $invalidValues[] = is_object($change_Personal_Information_DataTypeLGBT_Identification_ReferenceItem) ? get_class($change_Personal_Information_DataTypeLGBT_Identification_ReferenceItem) : sprintf('%s(%s)', gettype($change_Personal_Information_DataTypeLGBT_Identification_ReferenceItem), var_export($change_Personal_Information_DataTypeLGBT_Identification_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LGBT_Identification_Reference property can only contain items of type \StructType\LGBT_IdentificationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LGBT_Identification_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LGBT_IdentificationObjectType[] $lGBT_Identification_Reference
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setLGBT_Identification_Reference(array $lGBT_Identification_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($lGBT_Identification_ReferenceArrayErrorMessage = self::validateLGBT_Identification_ReferenceForArrayConstraintsFromSetLGBT_Identification_Reference($lGBT_Identification_Reference))) {
            throw new \InvalidArgumentException($lGBT_Identification_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->LGBT_Identification_Reference = $lGBT_Identification_Reference;
        return $this;
    }
    /**
     * Add item to LGBT_Identification_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LGBT_IdentificationObjectType $item
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function addToLGBT_Identification_Reference(\StructType\LGBT_IdentificationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LGBT_IdentificationObjectType) {
            throw new \InvalidArgumentException(sprintf('The LGBT_Identification_Reference property can only contain items of type \StructType\LGBT_IdentificationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LGBT_Identification_Reference[] = $item;
        return $this;
    }
    /**
     * Get Sexual_Orientation_Reference value
     * @return \StructType\Sexual_OrientationObjectType|null
     */
    public function getSexual_Orientation_Reference()
    {
        return $this->Sexual_Orientation_Reference;
    }
    /**
     * Set Sexual_Orientation_Reference value
     * @param \StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setSexual_Orientation_Reference(\StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference = null)
    {
        $this->Sexual_Orientation_Reference = $sexual_Orientation_Reference;
        return $this;
    }
    /**
     * Get Gender_Identity_Reference value
     * @return \StructType\Gender_IdentityObjectType|null
     */
    public function getGender_Identity_Reference()
    {
        return $this->Gender_Identity_Reference;
    }
    /**
     * Set Gender_Identity_Reference value
     * @param \StructType\Gender_IdentityObjectType $gender_Identity_Reference
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setGender_Identity_Reference(\StructType\Gender_IdentityObjectType $gender_Identity_Reference = null)
    {
        $this->Gender_Identity_Reference = $gender_Identity_Reference;
        return $this;
    }
    /**
     * Get Pronoun_Reference value
     * @return \StructType\PronounObjectType|null
     */
    public function getPronoun_Reference()
    {
        return $this->Pronoun_Reference;
    }
    /**
     * Set Pronoun_Reference value
     * @param \StructType\PronounObjectType $pronoun_Reference
     * @return \StructType\Change_Personal_Information_DataType
     */
    public function setPronoun_Reference(\StructType\PronounObjectType $pronoun_Reference = null)
    {
        $this->Pronoun_Reference = $pronoun_Reference;
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
     * @return \StructType\Change_Personal_Information_DataType
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
     * @return \StructType\Change_Personal_Information_DataType
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
