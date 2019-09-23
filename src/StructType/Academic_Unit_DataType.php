<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Unit_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for all the detail information about the Academic Unit
 * @subpackage Structs
 */
class Academic_Unit_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: A Reference ID for the Academic Unit generated by Workday and used for internal purposes only
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective as of Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The Name of the Academic Unit
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: A functional ID for the Academic Unit available to system users and in the display ID, if desired
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Is_Institution
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Academic Unit is designated as an institution.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Is_Institution;
    /**
     * The Include_Code_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the functional ID should be included as part of the display ID (Name). If this value is set, the Code field is pre-pended to the Name with a hyphen separator
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Code_in_Name;
    /**
     * The Include_Incumbent_Leader_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the person holding the leadership role for the Academic Unit's name will be included as part of the display ID (Name). If set, this value will cause the leader's name to be appended in parentheses to the
     * Academic Unit's name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Incumbent_Leader_in_Name;
    /**
     * The Academic_Organization_Subtype_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Academic Unit Subtype for this Academic Unit (required)
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType
     */
    public $Academic_Organization_Subtype_Reference;
    /**
     * The Include_Subtype_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the Academic Unit Subtype should be part of the Academic Unit's display ID (Name). If set, this value will cause the Subtype Name to be appended to the Academic Unit's Name. The default for this value is
     * false.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Subtype_in_Name;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the Academic Unit is considered Inactive. If set, the static text (Inactive) will be appended to the Academic Unit's default display ID (Name). Inactive Academic Units are not available for selection when
     * adding or updating Appointments. Inactive Academic Units, however, can continue to contain historical Appointments and can be viewed and reported on. Prompts will include the Inactive Academic Units in a separate folder.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Company_Reference
     * Meta information extracted from the WSDL
     * - documentation: Provides a reference to the Company associated with the Academic Unit.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CompanyObjectType
     */
    public $Company_Reference;
    /**
     * The CIP_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: Provides a reference to a CIP code for this Academic Unit.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CIP_Code__Workday_Owned_ObjectType
     */
    public $CIP_Code_Reference;
    /**
     * The External_URL_Reference
     * Meta information extracted from the WSDL
     * - documentation: One or more references to an external URL (e.g. home page for the department or school)
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_URLObjectType
     */
    public $External_URL_Reference;
    /**
     * The Supervisory_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Provides a reference to a Supervisory Organization associated with the Academic Unit.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType[]
     */
    public $Supervisory_Organization_Reference;
    /**
     * The Track_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: A list of references to Academic Track Types allowable for this Academic Unit
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType[]
     */
    public $Track_Type_Reference;
    /**
     * The Acceptable_External_Institution_Grading_Scheme_Point_Value_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an External Institutional Grading Scheme Grade Point Value which determines if external course will receive transfer credit.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Institution_Grading_Scheme_Grade_Point_ValueObjectType
     */
    public $Acceptable_External_Institution_Grading_Scheme_Point_Value_Reference;
    /**
     * The Superior_Academic_Unit_Data
     * Meta information extracted from the WSDL
     * - documentation: Superior Academic Unit Data Element
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Superior_Academic_Unit_DataType
     */
    public $Superior_Academic_Unit_Data;
    /**
     * Constructor method for Academic_Unit_DataType
     * @uses Academic_Unit_DataType::setID()
     * @uses Academic_Unit_DataType::setEffective_Date()
     * @uses Academic_Unit_DataType::setName()
     * @uses Academic_Unit_DataType::setCode()
     * @uses Academic_Unit_DataType::setIs_Institution()
     * @uses Academic_Unit_DataType::setInclude_Code_in_Name()
     * @uses Academic_Unit_DataType::setInclude_Incumbent_Leader_in_Name()
     * @uses Academic_Unit_DataType::setAcademic_Organization_Subtype_Reference()
     * @uses Academic_Unit_DataType::setInclude_Subtype_in_Name()
     * @uses Academic_Unit_DataType::setInactive()
     * @uses Academic_Unit_DataType::setCompany_Reference()
     * @uses Academic_Unit_DataType::setCIP_Code_Reference()
     * @uses Academic_Unit_DataType::setExternal_URL_Reference()
     * @uses Academic_Unit_DataType::setSupervisory_Organization_Reference()
     * @uses Academic_Unit_DataType::setTrack_Type_Reference()
     * @uses Academic_Unit_DataType::setAcceptable_External_Institution_Grading_Scheme_Point_Value_Reference()
     * @uses Academic_Unit_DataType::setSuperior_Academic_Unit_Data()
     * @param string $iD
     * @param string $effective_Date
     * @param string $name
     * @param string $code
     * @param bool $is_Institution
     * @param bool $include_Code_in_Name
     * @param bool $include_Incumbent_Leader_in_Name
     * @param \WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType $academic_Organization_Subtype_Reference
     * @param bool $include_Subtype_in_Name
     * @param bool $inactive
     * @param \WorkdayWsdl\\StructType\CompanyObjectType $company_Reference
     * @param \WorkdayWsdl\\StructType\CIP_Code__Workday_Owned_ObjectType $cIP_Code_Reference
     * @param \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference
     * @param \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType[] $supervisory_Organization_Reference
     * @param \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType[] $track_Type_Reference
     * @param \WorkdayWsdl\\StructType\External_Institution_Grading_Scheme_Grade_Point_ValueObjectType $acceptable_External_Institution_Grading_Scheme_Point_Value_Reference
     * @param \WorkdayWsdl\\StructType\Superior_Academic_Unit_DataType $superior_Academic_Unit_Data
     */
    public function __construct($iD = null, $effective_Date = null, $name = null, $code = null, $is_Institution = null, $include_Code_in_Name = null, $include_Incumbent_Leader_in_Name = null, \WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType $academic_Organization_Subtype_Reference = null, $include_Subtype_in_Name = null, $inactive = null, \WorkdayWsdl\\StructType\CompanyObjectType $company_Reference = null, \WorkdayWsdl\\StructType\CIP_Code__Workday_Owned_ObjectType $cIP_Code_Reference = null, \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference = null, array $supervisory_Organization_Reference = array(), array $track_Type_Reference = array(), \WorkdayWsdl\\StructType\External_Institution_Grading_Scheme_Grade_Point_ValueObjectType $acceptable_External_Institution_Grading_Scheme_Point_Value_Reference = null, \WorkdayWsdl\\StructType\Superior_Academic_Unit_DataType $superior_Academic_Unit_Data = null)
    {
        $this
            ->setID($iD)
            ->setEffective_Date($effective_Date)
            ->setName($name)
            ->setCode($code)
            ->setIs_Institution($is_Institution)
            ->setInclude_Code_in_Name($include_Code_in_Name)
            ->setInclude_Incumbent_Leader_in_Name($include_Incumbent_Leader_in_Name)
            ->setAcademic_Organization_Subtype_Reference($academic_Organization_Subtype_Reference)
            ->setInclude_Subtype_in_Name($include_Subtype_in_Name)
            ->setInactive($inactive)
            ->setCompany_Reference($company_Reference)
            ->setCIP_Code_Reference($cIP_Code_Reference)
            ->setExternal_URL_Reference($external_URL_Reference)
            ->setSupervisory_Organization_Reference($supervisory_Organization_Reference)
            ->setTrack_Type_Reference($track_Type_Reference)
            ->setAcceptable_External_Institution_Grading_Scheme_Point_Value_Reference($acceptable_External_Institution_Grading_Scheme_Point_Value_Reference)
            ->setSuperior_Academic_Unit_Data($superior_Academic_Unit_Data);
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
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
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
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Is_Institution value
     * @return bool|null
     */
    public function getIs_Institution()
    {
        return $this->Is_Institution;
    }
    /**
     * Set Is_Institution value
     * @param bool $is_Institution
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setIs_Institution($is_Institution = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_Institution) && !is_bool($is_Institution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_Institution, true), gettype($is_Institution)), __LINE__);
        }
        $this->Is_Institution = $is_Institution;
        return $this;
    }
    /**
     * Get Include_Code_in_Name value
     * @return bool|null
     */
    public function getInclude_Code_in_Name()
    {
        return $this->Include_Code_in_Name;
    }
    /**
     * Set Include_Code_in_Name value
     * @param bool $include_Code_in_Name
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setInclude_Code_in_Name($include_Code_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Code_in_Name) && !is_bool($include_Code_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Code_in_Name, true), gettype($include_Code_in_Name)), __LINE__);
        }
        $this->Include_Code_in_Name = $include_Code_in_Name;
        return $this;
    }
    /**
     * Get Include_Incumbent_Leader_in_Name value
     * @return bool|null
     */
    public function getInclude_Incumbent_Leader_in_Name()
    {
        return $this->Include_Incumbent_Leader_in_Name;
    }
    /**
     * Set Include_Incumbent_Leader_in_Name value
     * @param bool $include_Incumbent_Leader_in_Name
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setInclude_Incumbent_Leader_in_Name($include_Incumbent_Leader_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Incumbent_Leader_in_Name) && !is_bool($include_Incumbent_Leader_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Incumbent_Leader_in_Name, true), gettype($include_Incumbent_Leader_in_Name)), __LINE__);
        }
        $this->Include_Incumbent_Leader_in_Name = $include_Incumbent_Leader_in_Name;
        return $this;
    }
    /**
     * Get Academic_Organization_Subtype_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType|null
     */
    public function getAcademic_Organization_Subtype_Reference()
    {
        return $this->Academic_Organization_Subtype_Reference;
    }
    /**
     * Set Academic_Organization_Subtype_Reference value
     * @param \WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType $academic_Organization_Subtype_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setAcademic_Organization_Subtype_Reference(\WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType $academic_Organization_Subtype_Reference = null)
    {
        $this->Academic_Organization_Subtype_Reference = $academic_Organization_Subtype_Reference;
        return $this;
    }
    /**
     * Get Include_Subtype_in_Name value
     * @return bool|null
     */
    public function getInclude_Subtype_in_Name()
    {
        return $this->Include_Subtype_in_Name;
    }
    /**
     * Set Include_Subtype_in_Name value
     * @param bool $include_Subtype_in_Name
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setInclude_Subtype_in_Name($include_Subtype_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Subtype_in_Name) && !is_bool($include_Subtype_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Subtype_in_Name, true), gettype($include_Subtype_in_Name)), __LINE__);
        }
        $this->Include_Subtype_in_Name = $include_Subtype_in_Name;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Company_Reference value
     * @return \WorkdayWsdl\\StructType\CompanyObjectType|null
     */
    public function getCompany_Reference()
    {
        return $this->Company_Reference;
    }
    /**
     * Set Company_Reference value
     * @param \WorkdayWsdl\\StructType\CompanyObjectType $company_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setCompany_Reference(\WorkdayWsdl\\StructType\CompanyObjectType $company_Reference = null)
    {
        $this->Company_Reference = $company_Reference;
        return $this;
    }
    /**
     * Get CIP_Code_Reference value
     * @return \WorkdayWsdl\\StructType\CIP_Code__Workday_Owned_ObjectType|null
     */
    public function getCIP_Code_Reference()
    {
        return $this->CIP_Code_Reference;
    }
    /**
     * Set CIP_Code_Reference value
     * @param \WorkdayWsdl\\StructType\CIP_Code__Workday_Owned_ObjectType $cIP_Code_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setCIP_Code_Reference(\WorkdayWsdl\\StructType\CIP_Code__Workday_Owned_ObjectType $cIP_Code_Reference = null)
    {
        $this->CIP_Code_Reference = $cIP_Code_Reference;
        return $this;
    }
    /**
     * Get External_URL_Reference value
     * @return \WorkdayWsdl\\StructType\External_URLObjectType|null
     */
    public function getExternal_URL_Reference()
    {
        return $this->External_URL_Reference;
    }
    /**
     * Set External_URL_Reference value
     * @param \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setExternal_URL_Reference(\WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference = null)
    {
        $this->External_URL_Reference = $external_URL_Reference;
        return $this;
    }
    /**
     * Get Supervisory_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType[]|null
     */
    public function getSupervisory_Organization_Reference()
    {
        return $this->Supervisory_Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSupervisory_Organization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupervisory_Organization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupervisory_Organization_ReferenceForArrayConstraintsFromSetSupervisory_Organization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Unit_DataTypeSupervisory_Organization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$academic_Unit_DataTypeSupervisory_Organization_ReferenceItem instanceof \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType) {
                $invalidValues[] = is_object($academic_Unit_DataTypeSupervisory_Organization_ReferenceItem) ? get_class($academic_Unit_DataTypeSupervisory_Organization_ReferenceItem) : sprintf('%s(%s)', gettype($academic_Unit_DataTypeSupervisory_Organization_ReferenceItem), var_export($academic_Unit_DataTypeSupervisory_Organization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Supervisory_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Supervisory_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType[] $supervisory_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setSupervisory_Organization_Reference(array $supervisory_Organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($supervisory_Organization_ReferenceArrayErrorMessage = self::validateSupervisory_Organization_ReferenceForArrayConstraintsFromSetSupervisory_Organization_Reference($supervisory_Organization_Reference))) {
            throw new \InvalidArgumentException($supervisory_Organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Supervisory_Organization_Reference = $supervisory_Organization_Reference;
        return $this;
    }
    /**
     * Add item to Supervisory_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType $item
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function addToSupervisory_Organization_Reference(\WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Supervisory_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Supervisory_Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Get Track_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType[]|null
     */
    public function getTrack_Type_Reference()
    {
        return $this->Track_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setTrack_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrack_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrack_Type_ReferenceForArrayConstraintsFromSetTrack_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Unit_DataTypeTrack_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$academic_Unit_DataTypeTrack_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType) {
                $invalidValues[] = is_object($academic_Unit_DataTypeTrack_Type_ReferenceItem) ? get_class($academic_Unit_DataTypeTrack_Type_ReferenceItem) : sprintf('%s(%s)', gettype($academic_Unit_DataTypeTrack_Type_ReferenceItem), var_export($academic_Unit_DataTypeTrack_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Track_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Track_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType[] $track_Type_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setTrack_Type_Reference(array $track_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($track_Type_ReferenceArrayErrorMessage = self::validateTrack_Type_ReferenceForArrayConstraintsFromSetTrack_Type_Reference($track_Type_Reference))) {
            throw new \InvalidArgumentException($track_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Track_Type_Reference = $track_Type_Reference;
        return $this;
    }
    /**
     * Add item to Track_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType $item
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function addToTrack_Type_Reference(\WorkdayWsdl\\StructType\Academic_Track_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Track_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Track_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Acceptable_External_Institution_Grading_Scheme_Point_Value_Reference value
     * @return \WorkdayWsdl\\StructType\External_Institution_Grading_Scheme_Grade_Point_ValueObjectType|null
     */
    public function getAcceptable_External_Institution_Grading_Scheme_Point_Value_Reference()
    {
        return $this->Acceptable_External_Institution_Grading_Scheme_Point_Value_Reference;
    }
    /**
     * Set Acceptable_External_Institution_Grading_Scheme_Point_Value_Reference value
     * @param \WorkdayWsdl\\StructType\External_Institution_Grading_Scheme_Grade_Point_ValueObjectType $acceptable_External_Institution_Grading_Scheme_Point_Value_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setAcceptable_External_Institution_Grading_Scheme_Point_Value_Reference(\WorkdayWsdl\\StructType\External_Institution_Grading_Scheme_Grade_Point_ValueObjectType $acceptable_External_Institution_Grading_Scheme_Point_Value_Reference = null)
    {
        $this->Acceptable_External_Institution_Grading_Scheme_Point_Value_Reference = $acceptable_External_Institution_Grading_Scheme_Point_Value_Reference;
        return $this;
    }
    /**
     * Get Superior_Academic_Unit_Data value
     * @return \WorkdayWsdl\\StructType\Superior_Academic_Unit_DataType|null
     */
    public function getSuperior_Academic_Unit_Data()
    {
        return $this->Superior_Academic_Unit_Data;
    }
    /**
     * Set Superior_Academic_Unit_Data value
     * @param \WorkdayWsdl\\StructType\Superior_Academic_Unit_DataType $superior_Academic_Unit_Data
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
     */
    public function setSuperior_Academic_Unit_Data(\WorkdayWsdl\\StructType\Superior_Academic_Unit_DataType $superior_Academic_Unit_Data = null)
    {
        $this->Superior_Academic_Unit_Data = $superior_Academic_Unit_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Academic_Unit_DataType
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
