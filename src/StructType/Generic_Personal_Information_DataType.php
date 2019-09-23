<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Generic_Personal_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the Personal Information data.
 * @subpackage Structs
 */
class Generic_Personal_Information_DataType extends AbstractStructBase
{
    /**
     * The Gender_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Gender of the person.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\GenderObjectType
     */
    public $Gender_Reference;
    /**
     * The Date_of_Birth
     * Meta information extracted from the WSDL
     * - documentation: Date of birth must precede all military discharge dates currently on the person unless all military service data is being replaced. | Date of birth must precede all disability status dates currently on the person unless all
     * disability data is being replaced. | Date of birth must precede marital status date, medical exam dates and date of death. This applies to the data in this request as well any existing data on the person that is not being modified. | Person's Date of
     * Birth.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Birth;
    /**
     * The Date_of_Death
     * Meta information extracted from the WSDL
     * - documentation: The date of death cannot be in the future | Date of death is only allowed for inactive person. | Person's Date of Death.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Death;
    /**
     * The Birth_Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: The country of birth is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position | Country where the person was born.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Birth_Country_Reference;
    /**
     * The Birth_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: The country region of birth is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | The Region of Birth entered is not valid for the corresponding
     * Country of Birth. | A Person cannot have a Birth Region without a corresponding Birth Country. | Country Region where the person was born.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_RegionObjectType
     */
    public $Birth_Region_Reference;
    /**
     * The City_of_Birth
     * Meta information extracted from the WSDL
     * - documentation: The city of birth is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position | Person's City of Birth.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City_of_Birth;
    /**
     * The Marital_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Inactive marital statuses are not allowed in this request. | The marital status does not exist in the specified Location Context. The Location Context is derived from the Country of the Location specified for the Position. |
     * Reference for the person's Marital Status.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Marital_StatusObjectType
     */
    public $Marital_Status_Reference;
    /**
     * The Marital_Status_Date
     * Meta information extracted from the WSDL
     * - documentation: The field Marital Status is required and must have a value if a Marital Status Date is entered. | Person's Marital Status Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Marital_Status_Date;
    /**
     * The Ethnicity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Multiple Ethnicities are not allowed for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | At least one ethnicity in this request is inactive. Only active ethnicities
     * are allowed. | The ethnicity does not exist in the specified Location Context. The Location Context is derived from the Country of the Location of the Position | Reference for the person's Ethnicities.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EthnicityObjectType[]
     */
    public $Ethnicity_Reference;
    /**
     * The Hispanic_or_Latino
     * Meta information extracted from the WSDL
     * - documentation: Hispanic or Latino is only tracked in the USA and must be enabled in tenant setup by your administrator. | Boolean to indicate if a person is Hispanic or Latino.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Hispanic_or_Latino;
    /**
     * The Religion_Reference
     * Meta information extracted from the WSDL
     * - documentation: The religion is not valid for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | Reference for a person's Religions.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\ReligionObjectType
     */
    public $Religion_Reference;
    /**
     * The Citizenship_Reference
     * Meta information extracted from the WSDL
     * - documentation: Hukou can only be entered for citizens of China. | At least one citizenship status in this request is inactive. Only active statuses are allowed. | The Citizenship Status is not tracked for the specified Location Context. The
     * Location Context is derived from the Country of the Location for the Position. | Reference for the person's Citizenship Status.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Citizenship_StatusObjectType[]
     */
    public $Citizenship_Reference;
    /**
     * The Nationality_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Nationality type is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position. | Reference for the person's Country of Nationality
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Nationality_Reference;
    /**
     * The Hukou_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: The hukou region is not tracked for the specified Location Context. | Hukou Region must be in China. | Country region on the Hukou of the person. This field is only available for the country China and the person with citizenship
     * status of China.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_RegionObjectType
     */
    public $Hukou_Region_Reference;
    /**
     * The Hukou_Subregion_Reference
     * Meta information extracted from the WSDL
     * - documentation: The hukou subregion is not tracked for the specified Location Context. | The Hukou Subregion does not exist within the specified Hukou Region or is inactive. | Country subregion on the Hukou of the person. This field is only
     * available for the country China and the person with citizenship status of China.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_SubregionObjectType
     */
    public $Hukou_Subregion_Reference;
    /**
     * The Hukou_Locality
     * Meta information extracted from the WSDL
     * - documentation: The hukou locality is not tracked for the specified Location Context. | Locality on the Hukou of the person. This field is only available for the country China and the person with citizenship status of China.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Hukou_Locality;
    /**
     * The Hukou_Postal_Code
     * Meta information extracted from the WSDL
     * - documentation: The hukou postal code is not tracked for the specified Location Context. | Hukou postal code for the person. This field is only available for the country China and the person with citizenship status of China.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Hukou_Postal_Code;
    /**
     * The Hukou_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The hukou type is not tracked for the specified Location Context. | Hukou type on the Hukou of the person. This field is only available for the country China and the person with citizenship status of China.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Hukou_TypeObjectType
     */
    public $Hukou_Type_Reference;
    /**
     * The Native_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: The native region is not tracked for the specified Location Context. | Native region on the Hukou of the person. This field is only available for the country China and the person with citizenship status of China.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_RegionObjectType
     */
    public $Native_Region_Reference;
    /**
     * The Personnel_File_Agency
     * Meta information extracted from the WSDL
     * - documentation: The Personnel File Agency is not tracked for the specified Location Context. | Personnel File Agency is used in China to indicate where persons have their personnel file stored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Personnel_File_Agency;
    /**
     * The Political_Affiliation_Reference
     * Meta information extracted from the WSDL
     * - documentation: The political affiliation does not exist in the specified Location Context. | Person's Political Affiliation.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Political_AffiliationObjectType
     */
    public $Political_Affiliation_Reference;
    /**
     * The Social_Benefits_Locality_Reference
     * Meta information extracted from the WSDL
     * - documentation: The social benefits locality does not exist in the specified Location Context. The Location Context is derived from the Country of the Location specified for the Position. Currently, the Social Benefits Locality values are ignored
     * for Puts involving applicants since a Social Benefits Locality value is associated with workers and not applicants. | The social benefits locality data has not been activated for this location via the Maintain Localization Settings task. | Person's
     * social benefits locality.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType
     */
    public $Social_Benefits_Locality_Reference;
    /**
     * The Last_Medical_Exam_Date
     * Meta information extracted from the WSDL
     * - documentation: Medical exam history is not tracked for the specified Location Context. The Location Context is derived from the Country of the Location for the Position | Medical exam history is not tracked for the specified Location Context. |
     * Date of person's most recent Medical Examination.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Medical_Exam_Date;
    /**
     * The Last_Medical_Exam_Valid_To
     * Meta information extracted from the WSDL
     * - documentation: Last Medical Exam Valid To Date must be after Last Medical Exam Date | Expiration date of person's most recent Medical Examination.
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
     * The Disability_Information_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Generic_Disability_Information_DataType[]
     */
    public $Disability_Information_Data;
    /**
     * The Military_Information_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Generic_Military_Information_DataType[]
     */
    public $Military_Information_Data;
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
     * Constructor method for Generic_Personal_Information_DataType
     * @uses Generic_Personal_Information_DataType::setGender_Reference()
     * @uses Generic_Personal_Information_DataType::setDate_of_Birth()
     * @uses Generic_Personal_Information_DataType::setDate_of_Death()
     * @uses Generic_Personal_Information_DataType::setBirth_Country_Reference()
     * @uses Generic_Personal_Information_DataType::setBirth_Region_Reference()
     * @uses Generic_Personal_Information_DataType::setCity_of_Birth()
     * @uses Generic_Personal_Information_DataType::setMarital_Status_Reference()
     * @uses Generic_Personal_Information_DataType::setMarital_Status_Date()
     * @uses Generic_Personal_Information_DataType::setEthnicity_Reference()
     * @uses Generic_Personal_Information_DataType::setHispanic_or_Latino()
     * @uses Generic_Personal_Information_DataType::setReligion_Reference()
     * @uses Generic_Personal_Information_DataType::setCitizenship_Reference()
     * @uses Generic_Personal_Information_DataType::setNationality_Reference()
     * @uses Generic_Personal_Information_DataType::setHukou_Region_Reference()
     * @uses Generic_Personal_Information_DataType::setHukou_Subregion_Reference()
     * @uses Generic_Personal_Information_DataType::setHukou_Locality()
     * @uses Generic_Personal_Information_DataType::setHukou_Postal_Code()
     * @uses Generic_Personal_Information_DataType::setHukou_Type_Reference()
     * @uses Generic_Personal_Information_DataType::setNative_Region_Reference()
     * @uses Generic_Personal_Information_DataType::setPersonnel_File_Agency()
     * @uses Generic_Personal_Information_DataType::setPolitical_Affiliation_Reference()
     * @uses Generic_Personal_Information_DataType::setSocial_Benefits_Locality_Reference()
     * @uses Generic_Personal_Information_DataType::setLast_Medical_Exam_Date()
     * @uses Generic_Personal_Information_DataType::setLast_Medical_Exam_Valid_To()
     * @uses Generic_Personal_Information_DataType::setMedical_Exam_Notes()
     * @uses Generic_Personal_Information_DataType::setDisability_Information_Data()
     * @uses Generic_Personal_Information_DataType::setMilitary_Information_Data()
     * @uses Generic_Personal_Information_DataType::setUses_Tobacco()
     * @param \WorkdayWsdl\\StructType\GenderObjectType $gender_Reference
     * @param string $date_of_Birth
     * @param string $date_of_Death
     * @param \WorkdayWsdl\\StructType\CountryObjectType $birth_Country_Reference
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $birth_Region_Reference
     * @param string $city_of_Birth
     * @param \WorkdayWsdl\\StructType\Marital_StatusObjectType $marital_Status_Reference
     * @param string $marital_Status_Date
     * @param \WorkdayWsdl\\StructType\EthnicityObjectType[] $ethnicity_Reference
     * @param bool $hispanic_or_Latino
     * @param \WorkdayWsdl\\StructType\ReligionObjectType $religion_Reference
     * @param \WorkdayWsdl\\StructType\Citizenship_StatusObjectType[] $citizenship_Reference
     * @param \WorkdayWsdl\\StructType\CountryObjectType $nationality_Reference
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $hukou_Region_Reference
     * @param \WorkdayWsdl\\StructType\Country_SubregionObjectType $hukou_Subregion_Reference
     * @param string $hukou_Locality
     * @param string $hukou_Postal_Code
     * @param \WorkdayWsdl\\StructType\Hukou_TypeObjectType $hukou_Type_Reference
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $native_Region_Reference
     * @param string $personnel_File_Agency
     * @param \WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @param \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @param string $last_Medical_Exam_Date
     * @param string $last_Medical_Exam_Valid_To
     * @param string $medical_Exam_Notes
     * @param \WorkdayWsdl\\StructType\Generic_Disability_Information_DataType[] $disability_Information_Data
     * @param \WorkdayWsdl\\StructType\Generic_Military_Information_DataType[] $military_Information_Data
     * @param bool $uses_Tobacco
     */
    public function __construct(\WorkdayWsdl\\StructType\GenderObjectType $gender_Reference = null, $date_of_Birth = null, $date_of_Death = null, \WorkdayWsdl\\StructType\CountryObjectType $birth_Country_Reference = null, \WorkdayWsdl\\StructType\Country_RegionObjectType $birth_Region_Reference = null, $city_of_Birth = null, \WorkdayWsdl\\StructType\Marital_StatusObjectType $marital_Status_Reference = null, $marital_Status_Date = null, array $ethnicity_Reference = array(), $hispanic_or_Latino = null, \WorkdayWsdl\\StructType\ReligionObjectType $religion_Reference = null, array $citizenship_Reference = array(), \WorkdayWsdl\\StructType\CountryObjectType $nationality_Reference = null, \WorkdayWsdl\\StructType\Country_RegionObjectType $hukou_Region_Reference = null, \WorkdayWsdl\\StructType\Country_SubregionObjectType $hukou_Subregion_Reference = null, $hukou_Locality = null, $hukou_Postal_Code = null, \WorkdayWsdl\\StructType\Hukou_TypeObjectType $hukou_Type_Reference = null, \WorkdayWsdl\\StructType\Country_RegionObjectType $native_Region_Reference = null, $personnel_File_Agency = null, \WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null, \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null, $last_Medical_Exam_Date = null, $last_Medical_Exam_Valid_To = null, $medical_Exam_Notes = null, array $disability_Information_Data = array(), array $military_Information_Data = array(), $uses_Tobacco = null)
    {
        $this
            ->setGender_Reference($gender_Reference)
            ->setDate_of_Birth($date_of_Birth)
            ->setDate_of_Death($date_of_Death)
            ->setBirth_Country_Reference($birth_Country_Reference)
            ->setBirth_Region_Reference($birth_Region_Reference)
            ->setCity_of_Birth($city_of_Birth)
            ->setMarital_Status_Reference($marital_Status_Reference)
            ->setMarital_Status_Date($marital_Status_Date)
            ->setEthnicity_Reference($ethnicity_Reference)
            ->setHispanic_or_Latino($hispanic_or_Latino)
            ->setReligion_Reference($religion_Reference)
            ->setCitizenship_Reference($citizenship_Reference)
            ->setNationality_Reference($nationality_Reference)
            ->setHukou_Region_Reference($hukou_Region_Reference)
            ->setHukou_Subregion_Reference($hukou_Subregion_Reference)
            ->setHukou_Locality($hukou_Locality)
            ->setHukou_Postal_Code($hukou_Postal_Code)
            ->setHukou_Type_Reference($hukou_Type_Reference)
            ->setNative_Region_Reference($native_Region_Reference)
            ->setPersonnel_File_Agency($personnel_File_Agency)
            ->setPolitical_Affiliation_Reference($political_Affiliation_Reference)
            ->setSocial_Benefits_Locality_Reference($social_Benefits_Locality_Reference)
            ->setLast_Medical_Exam_Date($last_Medical_Exam_Date)
            ->setLast_Medical_Exam_Valid_To($last_Medical_Exam_Valid_To)
            ->setMedical_Exam_Notes($medical_Exam_Notes)
            ->setDisability_Information_Data($disability_Information_Data)
            ->setMilitary_Information_Data($military_Information_Data)
            ->setUses_Tobacco($uses_Tobacco);
    }
    /**
     * Get Gender_Reference value
     * @return \WorkdayWsdl\\StructType\GenderObjectType|null
     */
    public function getGender_Reference()
    {
        return $this->Gender_Reference;
    }
    /**
     * Set Gender_Reference value
     * @param \WorkdayWsdl\\StructType\GenderObjectType $gender_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setGender_Reference(\WorkdayWsdl\\StructType\GenderObjectType $gender_Reference = null)
    {
        $this->Gender_Reference = $gender_Reference;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * Get Birth_Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getBirth_Country_Reference()
    {
        return $this->Birth_Country_Reference;
    }
    /**
     * Set Birth_Country_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $birth_Country_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setBirth_Country_Reference(\WorkdayWsdl\\StructType\CountryObjectType $birth_Country_Reference = null)
    {
        $this->Birth_Country_Reference = $birth_Country_Reference;
        return $this;
    }
    /**
     * Get Birth_Region_Reference value
     * @return \WorkdayWsdl\\StructType\Country_RegionObjectType|null
     */
    public function getBirth_Region_Reference()
    {
        return $this->Birth_Region_Reference;
    }
    /**
     * Set Birth_Region_Reference value
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $birth_Region_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setBirth_Region_Reference(\WorkdayWsdl\\StructType\Country_RegionObjectType $birth_Region_Reference = null)
    {
        $this->Birth_Region_Reference = $birth_Region_Reference;
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * Get Marital_Status_Reference value
     * @return \WorkdayWsdl\\StructType\Marital_StatusObjectType|null
     */
    public function getMarital_Status_Reference()
    {
        return $this->Marital_Status_Reference;
    }
    /**
     * Set Marital_Status_Reference value
     * @param \WorkdayWsdl\\StructType\Marital_StatusObjectType $marital_Status_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setMarital_Status_Reference(\WorkdayWsdl\\StructType\Marital_StatusObjectType $marital_Status_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * Get Ethnicity_Reference value
     * @return \WorkdayWsdl\\StructType\EthnicityObjectType[]|null
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
        foreach ($values as $generic_Personal_Information_DataTypeEthnicity_ReferenceItem) {
            // validation for constraint: itemType
            if (!$generic_Personal_Information_DataTypeEthnicity_ReferenceItem instanceof \WorkdayWsdl\\StructType\EthnicityObjectType) {
                $invalidValues[] = is_object($generic_Personal_Information_DataTypeEthnicity_ReferenceItem) ? get_class($generic_Personal_Information_DataTypeEthnicity_ReferenceItem) : sprintf('%s(%s)', gettype($generic_Personal_Information_DataTypeEthnicity_ReferenceItem), var_export($generic_Personal_Information_DataTypeEthnicity_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Ethnicity_Reference property can only contain items of type \WorkdayWsdl\\StructType\EthnicityObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Ethnicity_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EthnicityObjectType[] $ethnicity_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * @param \WorkdayWsdl\\StructType\EthnicityObjectType $item
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function addToEthnicity_Reference(\WorkdayWsdl\\StructType\EthnicityObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\EthnicityObjectType) {
            throw new \InvalidArgumentException(sprintf('The Ethnicity_Reference property can only contain items of type \WorkdayWsdl\\StructType\EthnicityObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * Get Religion_Reference value
     * @return \WorkdayWsdl\\StructType\ReligionObjectType|null
     */
    public function getReligion_Reference()
    {
        return $this->Religion_Reference;
    }
    /**
     * Set Religion_Reference value
     * @param \WorkdayWsdl\\StructType\ReligionObjectType $religion_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setReligion_Reference(\WorkdayWsdl\\StructType\ReligionObjectType $religion_Reference = null)
    {
        $this->Religion_Reference = $religion_Reference;
        return $this;
    }
    /**
     * Get Citizenship_Reference value
     * @return \WorkdayWsdl\\StructType\Citizenship_StatusObjectType[]|null
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
        foreach ($values as $generic_Personal_Information_DataTypeCitizenship_ReferenceItem) {
            // validation for constraint: itemType
            if (!$generic_Personal_Information_DataTypeCitizenship_ReferenceItem instanceof \WorkdayWsdl\\StructType\Citizenship_StatusObjectType) {
                $invalidValues[] = is_object($generic_Personal_Information_DataTypeCitizenship_ReferenceItem) ? get_class($generic_Personal_Information_DataTypeCitizenship_ReferenceItem) : sprintf('%s(%s)', gettype($generic_Personal_Information_DataTypeCitizenship_ReferenceItem), var_export($generic_Personal_Information_DataTypeCitizenship_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Citizenship_Reference property can only contain items of type \WorkdayWsdl\\StructType\Citizenship_StatusObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Citizenship_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Citizenship_StatusObjectType[] $citizenship_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * @param \WorkdayWsdl\\StructType\Citizenship_StatusObjectType $item
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function addToCitizenship_Reference(\WorkdayWsdl\\StructType\Citizenship_StatusObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Citizenship_StatusObjectType) {
            throw new \InvalidArgumentException(sprintf('The Citizenship_Reference property can only contain items of type \WorkdayWsdl\\StructType\Citizenship_StatusObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Citizenship_Reference[] = $item;
        return $this;
    }
    /**
     * Get Nationality_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getNationality_Reference()
    {
        return $this->Nationality_Reference;
    }
    /**
     * Set Nationality_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $nationality_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setNationality_Reference(\WorkdayWsdl\\StructType\CountryObjectType $nationality_Reference = null)
    {
        $this->Nationality_Reference = $nationality_Reference;
        return $this;
    }
    /**
     * Get Hukou_Region_Reference value
     * @return \WorkdayWsdl\\StructType\Country_RegionObjectType|null
     */
    public function getHukou_Region_Reference()
    {
        return $this->Hukou_Region_Reference;
    }
    /**
     * Set Hukou_Region_Reference value
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $hukou_Region_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setHukou_Region_Reference(\WorkdayWsdl\\StructType\Country_RegionObjectType $hukou_Region_Reference = null)
    {
        $this->Hukou_Region_Reference = $hukou_Region_Reference;
        return $this;
    }
    /**
     * Get Hukou_Subregion_Reference value
     * @return \WorkdayWsdl\\StructType\Country_SubregionObjectType|null
     */
    public function getHukou_Subregion_Reference()
    {
        return $this->Hukou_Subregion_Reference;
    }
    /**
     * Set Hukou_Subregion_Reference value
     * @param \WorkdayWsdl\\StructType\Country_SubregionObjectType $hukou_Subregion_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setHukou_Subregion_Reference(\WorkdayWsdl\\StructType\Country_SubregionObjectType $hukou_Subregion_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Hukou_TypeObjectType|null
     */
    public function getHukou_Type_Reference()
    {
        return $this->Hukou_Type_Reference;
    }
    /**
     * Set Hukou_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Hukou_TypeObjectType $hukou_Type_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setHukou_Type_Reference(\WorkdayWsdl\\StructType\Hukou_TypeObjectType $hukou_Type_Reference = null)
    {
        $this->Hukou_Type_Reference = $hukou_Type_Reference;
        return $this;
    }
    /**
     * Get Native_Region_Reference value
     * @return \WorkdayWsdl\\StructType\Country_RegionObjectType|null
     */
    public function getNative_Region_Reference()
    {
        return $this->Native_Region_Reference;
    }
    /**
     * Set Native_Region_Reference value
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $native_Region_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setNative_Region_Reference(\WorkdayWsdl\\StructType\Country_RegionObjectType $native_Region_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * Get Political_Affiliation_Reference value
     * @return \WorkdayWsdl\\StructType\Political_AffiliationObjectType|null
     */
    public function getPolitical_Affiliation_Reference()
    {
        return $this->Political_Affiliation_Reference;
    }
    /**
     * Set Political_Affiliation_Reference value
     * @param \WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setPolitical_Affiliation_Reference(\WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null)
    {
        $this->Political_Affiliation_Reference = $political_Affiliation_Reference;
        return $this;
    }
    /**
     * Get Social_Benefits_Locality_Reference value
     * @return \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType|null
     */
    public function getSocial_Benefits_Locality_Reference()
    {
        return $this->Social_Benefits_Locality_Reference;
    }
    /**
     * Set Social_Benefits_Locality_Reference value
     * @param \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setSocial_Benefits_Locality_Reference(\WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null)
    {
        $this->Social_Benefits_Locality_Reference = $social_Benefits_Locality_Reference;
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * Get Disability_Information_Data value
     * @return \WorkdayWsdl\\StructType\Generic_Disability_Information_DataType[]|null
     */
    public function getDisability_Information_Data()
    {
        return $this->Disability_Information_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setDisability_Information_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisability_Information_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisability_Information_DataForArrayConstraintsFromSetDisability_Information_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $generic_Personal_Information_DataTypeDisability_Information_DataItem) {
            // validation for constraint: itemType
            if (!$generic_Personal_Information_DataTypeDisability_Information_DataItem instanceof \WorkdayWsdl\\StructType\Generic_Disability_Information_DataType) {
                $invalidValues[] = is_object($generic_Personal_Information_DataTypeDisability_Information_DataItem) ? get_class($generic_Personal_Information_DataTypeDisability_Information_DataItem) : sprintf('%s(%s)', gettype($generic_Personal_Information_DataTypeDisability_Information_DataItem), var_export($generic_Personal_Information_DataTypeDisability_Information_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Disability_Information_Data property can only contain items of type \WorkdayWsdl\\StructType\Generic_Disability_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Disability_Information_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Generic_Disability_Information_DataType[] $disability_Information_Data
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setDisability_Information_Data(array $disability_Information_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($disability_Information_DataArrayErrorMessage = self::validateDisability_Information_DataForArrayConstraintsFromSetDisability_Information_Data($disability_Information_Data))) {
            throw new \InvalidArgumentException($disability_Information_DataArrayErrorMessage, __LINE__);
        }
        $this->Disability_Information_Data = $disability_Information_Data;
        return $this;
    }
    /**
     * Add item to Disability_Information_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Generic_Disability_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function addToDisability_Information_Data(\WorkdayWsdl\\StructType\Generic_Disability_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Generic_Disability_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Disability_Information_Data property can only contain items of type \WorkdayWsdl\\StructType\Generic_Disability_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Disability_Information_Data[] = $item;
        return $this;
    }
    /**
     * Get Military_Information_Data value
     * @return \WorkdayWsdl\\StructType\Generic_Military_Information_DataType[]|null
     */
    public function getMilitary_Information_Data()
    {
        return $this->Military_Information_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setMilitary_Information_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMilitary_Information_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMilitary_Information_DataForArrayConstraintsFromSetMilitary_Information_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $generic_Personal_Information_DataTypeMilitary_Information_DataItem) {
            // validation for constraint: itemType
            if (!$generic_Personal_Information_DataTypeMilitary_Information_DataItem instanceof \WorkdayWsdl\\StructType\Generic_Military_Information_DataType) {
                $invalidValues[] = is_object($generic_Personal_Information_DataTypeMilitary_Information_DataItem) ? get_class($generic_Personal_Information_DataTypeMilitary_Information_DataItem) : sprintf('%s(%s)', gettype($generic_Personal_Information_DataTypeMilitary_Information_DataItem), var_export($generic_Personal_Information_DataTypeMilitary_Information_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Military_Information_Data property can only contain items of type \WorkdayWsdl\\StructType\Generic_Military_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Military_Information_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Generic_Military_Information_DataType[] $military_Information_Data
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function setMilitary_Information_Data(array $military_Information_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($military_Information_DataArrayErrorMessage = self::validateMilitary_Information_DataForArrayConstraintsFromSetMilitary_Information_Data($military_Information_Data))) {
            throw new \InvalidArgumentException($military_Information_DataArrayErrorMessage, __LINE__);
        }
        $this->Military_Information_Data = $military_Information_Data;
        return $this;
    }
    /**
     * Add item to Military_Information_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Generic_Military_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public function addToMilitary_Information_Data(\WorkdayWsdl\\StructType\Generic_Military_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Generic_Military_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Military_Information_Data property can only contain items of type \WorkdayWsdl\\StructType\Generic_Military_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Military_Information_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
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
