<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_Involved_Party_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: All of the information to add an involved party to the safety incident.
 * @subpackage Structs
 */
class Safety_Incident_Involved_Party_DataType extends AbstractStructBase
{
    /**
     * The Involved_Party_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The worker that is the involved party.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Involved_Party_Worker_Reference;
    /**
     * The Involved_Party_Non_Worker_First_Name
     * Meta information extracted from the WSDL
     * - documentation: The first name of the involved party.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Involved_Party_Non_Worker_First_Name;
    /**
     * The Involved_Party_Non_Worker_Last_Name
     * Meta information extracted from the WSDL
     * - documentation: The last name of the involved party.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Involved_Party_Non_Worker_Last_Name;
    /**
     * The Involved_Party_Non_Worker_Phone_Number
     * Meta information extracted from the WSDL
     * - documentation: The phone number of the involved party.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Involved_Party_Non_Worker_Phone_Number;
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: The organization that the involved party belongs to.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType[]
     */
    public $Organization_Reference;
    /**
     * The Employee_Description_of_Incident
     * Meta information extracted from the WSDL
     * - documentation: The description of the safety incident from the involved party.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Employee_Description_of_Incident;
    /**
     * The Nature_of_Injury_Illness_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public $Nature_of_Injury_Illness_Data;
    /**
     * The Report_Details_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public $Report_Details_Data;
    /**
     * The Time_Lost_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Time_Lost_DataType
     */
    public $Time_Lost_Data;
    /**
     * The Involved_Party_Note_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Safety_Incident_Note_DataType[]
     */
    public $Involved_Party_Note_Data;
    /**
     * The Involved_Party_File_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Safety_Incident_File_DataType[]
     */
    public $Involved_Party_File_Data;
    /**
     * Constructor method for Safety_Incident_Involved_Party_DataType
     * @uses Safety_Incident_Involved_Party_DataType::setInvolved_Party_Worker_Reference()
     * @uses Safety_Incident_Involved_Party_DataType::setInvolved_Party_Non_Worker_First_Name()
     * @uses Safety_Incident_Involved_Party_DataType::setInvolved_Party_Non_Worker_Last_Name()
     * @uses Safety_Incident_Involved_Party_DataType::setInvolved_Party_Non_Worker_Phone_Number()
     * @uses Safety_Incident_Involved_Party_DataType::setOrganization_Reference()
     * @uses Safety_Incident_Involved_Party_DataType::setEmployee_Description_of_Incident()
     * @uses Safety_Incident_Involved_Party_DataType::setNature_of_Injury_Illness_Data()
     * @uses Safety_Incident_Involved_Party_DataType::setReport_Details_Data()
     * @uses Safety_Incident_Involved_Party_DataType::setTime_Lost_Data()
     * @uses Safety_Incident_Involved_Party_DataType::setInvolved_Party_Note_Data()
     * @uses Safety_Incident_Involved_Party_DataType::setInvolved_Party_File_Data()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $involved_Party_Worker_Reference
     * @param string $involved_Party_Non_Worker_First_Name
     * @param string $involved_Party_Non_Worker_Last_Name
     * @param string $involved_Party_Non_Worker_Phone_Number
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $organization_Reference
     * @param string $employee_Description_of_Incident
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType $nature_of_Injury_Illness_Data
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType $report_Details_Data
     * @param \WorkdayWsdl\\StructType\Time_Lost_DataType $time_Lost_Data
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Note_DataType[] $involved_Party_Note_Data
     * @param \WorkdayWsdl\\StructType\Safety_Incident_File_DataType[] $involved_Party_File_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkerObjectType $involved_Party_Worker_Reference = null, $involved_Party_Non_Worker_First_Name = null, $involved_Party_Non_Worker_Last_Name = null, $involved_Party_Non_Worker_Phone_Number = null, array $organization_Reference = array(), $employee_Description_of_Incident = null, \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType $nature_of_Injury_Illness_Data = null, \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType $report_Details_Data = null, \WorkdayWsdl\\StructType\Time_Lost_DataType $time_Lost_Data = null, array $involved_Party_Note_Data = array(), array $involved_Party_File_Data = array())
    {
        $this
            ->setInvolved_Party_Worker_Reference($involved_Party_Worker_Reference)
            ->setInvolved_Party_Non_Worker_First_Name($involved_Party_Non_Worker_First_Name)
            ->setInvolved_Party_Non_Worker_Last_Name($involved_Party_Non_Worker_Last_Name)
            ->setInvolved_Party_Non_Worker_Phone_Number($involved_Party_Non_Worker_Phone_Number)
            ->setOrganization_Reference($organization_Reference)
            ->setEmployee_Description_of_Incident($employee_Description_of_Incident)
            ->setNature_of_Injury_Illness_Data($nature_of_Injury_Illness_Data)
            ->setReport_Details_Data($report_Details_Data)
            ->setTime_Lost_Data($time_Lost_Data)
            ->setInvolved_Party_Note_Data($involved_Party_Note_Data)
            ->setInvolved_Party_File_Data($involved_Party_File_Data);
    }
    /**
     * Get Involved_Party_Worker_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getInvolved_Party_Worker_Reference()
    {
        return $this->Involved_Party_Worker_Reference;
    }
    /**
     * Set Involved_Party_Worker_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $involved_Party_Worker_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setInvolved_Party_Worker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $involved_Party_Worker_Reference = null)
    {
        $this->Involved_Party_Worker_Reference = $involved_Party_Worker_Reference;
        return $this;
    }
    /**
     * Get Involved_Party_Non_Worker_First_Name value
     * @return string|null
     */
    public function getInvolved_Party_Non_Worker_First_Name()
    {
        return $this->{'Involved_Party_Non-Worker_First_Name'};
    }
    /**
     * Set Involved_Party_Non_Worker_First_Name value
     * @param string $involved_Party_Non_Worker_First_Name
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setInvolved_Party_Non_Worker_First_Name($involved_Party_Non_Worker_First_Name = null)
    {
        // validation for constraint: string
        if (!is_null($involved_Party_Non_Worker_First_Name) && !is_string($involved_Party_Non_Worker_First_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($involved_Party_Non_Worker_First_Name, true), gettype($involved_Party_Non_Worker_First_Name)), __LINE__);
        }
        $this->Involved_Party_Non_Worker_First_Name = $this->{'Involved_Party_Non-Worker_First_Name'} = $involved_Party_Non_Worker_First_Name;
        return $this;
    }
    /**
     * Get Involved_Party_Non_Worker_Last_Name value
     * @return string|null
     */
    public function getInvolved_Party_Non_Worker_Last_Name()
    {
        return $this->{'Involved_Party_Non-Worker_Last_Name'};
    }
    /**
     * Set Involved_Party_Non_Worker_Last_Name value
     * @param string $involved_Party_Non_Worker_Last_Name
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setInvolved_Party_Non_Worker_Last_Name($involved_Party_Non_Worker_Last_Name = null)
    {
        // validation for constraint: string
        if (!is_null($involved_Party_Non_Worker_Last_Name) && !is_string($involved_Party_Non_Worker_Last_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($involved_Party_Non_Worker_Last_Name, true), gettype($involved_Party_Non_Worker_Last_Name)), __LINE__);
        }
        $this->Involved_Party_Non_Worker_Last_Name = $this->{'Involved_Party_Non-Worker_Last_Name'} = $involved_Party_Non_Worker_Last_Name;
        return $this;
    }
    /**
     * Get Involved_Party_Non_Worker_Phone_Number value
     * @return string|null
     */
    public function getInvolved_Party_Non_Worker_Phone_Number()
    {
        return $this->{'Involved_Party_Non-Worker_Phone_Number'};
    }
    /**
     * Set Involved_Party_Non_Worker_Phone_Number value
     * @param string $involved_Party_Non_Worker_Phone_Number
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setInvolved_Party_Non_Worker_Phone_Number($involved_Party_Non_Worker_Phone_Number = null)
    {
        // validation for constraint: string
        if (!is_null($involved_Party_Non_Worker_Phone_Number) && !is_string($involved_Party_Non_Worker_Phone_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($involved_Party_Non_Worker_Phone_Number, true), gettype($involved_Party_Non_Worker_Phone_Number)), __LINE__);
        }
        $this->Involved_Party_Non_Worker_Phone_Number = $this->{'Involved_Party_Non-Worker_Phone_Number'} = $involved_Party_Non_Worker_Phone_Number;
        return $this;
    }
    /**
     * Get Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType[]|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_ReferenceForArrayConstraintsFromSetOrganization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $safety_Incident_Involved_Party_DataTypeOrganization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$safety_Incident_Involved_Party_DataTypeOrganization_ReferenceItem instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
                $invalidValues[] = is_object($safety_Incident_Involved_Party_DataTypeOrganization_ReferenceItem) ? get_class($safety_Incident_Involved_Party_DataTypeOrganization_ReferenceItem) : sprintf('%s(%s)', gettype($safety_Incident_Involved_Party_DataTypeOrganization_ReferenceItem), var_export($safety_Incident_Involved_Party_DataTypeOrganization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $organization_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setOrganization_Reference(array $organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_ReferenceArrayErrorMessage = self::validateOrganization_ReferenceForArrayConstraintsFromSetOrganization_Reference($organization_Reference))) {
            throw new \InvalidArgumentException($organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Add item to Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $item
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function addToOrganization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Get Employee_Description_of_Incident value
     * @return string|null
     */
    public function getEmployee_Description_of_Incident()
    {
        return $this->Employee_Description_of_Incident;
    }
    /**
     * Set Employee_Description_of_Incident value
     * @param string $employee_Description_of_Incident
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setEmployee_Description_of_Incident($employee_Description_of_Incident = null)
    {
        // validation for constraint: string
        if (!is_null($employee_Description_of_Incident) && !is_string($employee_Description_of_Incident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee_Description_of_Incident, true), gettype($employee_Description_of_Incident)), __LINE__);
        }
        $this->Employee_Description_of_Incident = $employee_Description_of_Incident;
        return $this;
    }
    /**
     * Get Nature_of_Injury_Illness_Data value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType|null
     */
    public function getNature_of_Injury_Illness_Data()
    {
        return $this->Nature_of_Injury_Illness_Data;
    }
    /**
     * Set Nature_of_Injury_Illness_Data value
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType $nature_of_Injury_Illness_Data
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setNature_of_Injury_Illness_Data(\WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType $nature_of_Injury_Illness_Data = null)
    {
        $this->Nature_of_Injury_Illness_Data = $nature_of_Injury_Illness_Data;
        return $this;
    }
    /**
     * Get Report_Details_Data value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType|null
     */
    public function getReport_Details_Data()
    {
        return $this->Report_Details_Data;
    }
    /**
     * Set Report_Details_Data value
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType $report_Details_Data
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setReport_Details_Data(\WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType $report_Details_Data = null)
    {
        $this->Report_Details_Data = $report_Details_Data;
        return $this;
    }
    /**
     * Get Time_Lost_Data value
     * @return \WorkdayWsdl\\StructType\Time_Lost_DataType|null
     */
    public function getTime_Lost_Data()
    {
        return $this->Time_Lost_Data;
    }
    /**
     * Set Time_Lost_Data value
     * @param \WorkdayWsdl\\StructType\Time_Lost_DataType $time_Lost_Data
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setTime_Lost_Data(\WorkdayWsdl\\StructType\Time_Lost_DataType $time_Lost_Data = null)
    {
        $this->Time_Lost_Data = $time_Lost_Data;
        return $this;
    }
    /**
     * Get Involved_Party_Note_Data value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Note_DataType[]|null
     */
    public function getInvolved_Party_Note_Data()
    {
        return $this->Involved_Party_Note_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setInvolved_Party_Note_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvolved_Party_Note_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvolved_Party_Note_DataForArrayConstraintsFromSetInvolved_Party_Note_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $safety_Incident_Involved_Party_DataTypeInvolved_Party_Note_DataItem) {
            // validation for constraint: itemType
            if (!$safety_Incident_Involved_Party_DataTypeInvolved_Party_Note_DataItem instanceof \WorkdayWsdl\\StructType\Safety_Incident_Note_DataType) {
                $invalidValues[] = is_object($safety_Incident_Involved_Party_DataTypeInvolved_Party_Note_DataItem) ? get_class($safety_Incident_Involved_Party_DataTypeInvolved_Party_Note_DataItem) : sprintf('%s(%s)', gettype($safety_Incident_Involved_Party_DataTypeInvolved_Party_Note_DataItem), var_export($safety_Incident_Involved_Party_DataTypeInvolved_Party_Note_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Involved_Party_Note_Data property can only contain items of type \WorkdayWsdl\\StructType\Safety_Incident_Note_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Involved_Party_Note_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Note_DataType[] $involved_Party_Note_Data
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setInvolved_Party_Note_Data(array $involved_Party_Note_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($involved_Party_Note_DataArrayErrorMessage = self::validateInvolved_Party_Note_DataForArrayConstraintsFromSetInvolved_Party_Note_Data($involved_Party_Note_Data))) {
            throw new \InvalidArgumentException($involved_Party_Note_DataArrayErrorMessage, __LINE__);
        }
        $this->Involved_Party_Note_Data = $involved_Party_Note_Data;
        return $this;
    }
    /**
     * Add item to Involved_Party_Note_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Note_DataType $item
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function addToInvolved_Party_Note_Data(\WorkdayWsdl\\StructType\Safety_Incident_Note_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Safety_Incident_Note_DataType) {
            throw new \InvalidArgumentException(sprintf('The Involved_Party_Note_Data property can only contain items of type \WorkdayWsdl\\StructType\Safety_Incident_Note_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Involved_Party_Note_Data[] = $item;
        return $this;
    }
    /**
     * Get Involved_Party_File_Data value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_File_DataType[]|null
     */
    public function getInvolved_Party_File_Data()
    {
        return $this->Involved_Party_File_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setInvolved_Party_File_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvolved_Party_File_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvolved_Party_File_DataForArrayConstraintsFromSetInvolved_Party_File_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $safety_Incident_Involved_Party_DataTypeInvolved_Party_File_DataItem) {
            // validation for constraint: itemType
            if (!$safety_Incident_Involved_Party_DataTypeInvolved_Party_File_DataItem instanceof \WorkdayWsdl\\StructType\Safety_Incident_File_DataType) {
                $invalidValues[] = is_object($safety_Incident_Involved_Party_DataTypeInvolved_Party_File_DataItem) ? get_class($safety_Incident_Involved_Party_DataTypeInvolved_Party_File_DataItem) : sprintf('%s(%s)', gettype($safety_Incident_Involved_Party_DataTypeInvolved_Party_File_DataItem), var_export($safety_Incident_Involved_Party_DataTypeInvolved_Party_File_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Involved_Party_File_Data property can only contain items of type \WorkdayWsdl\\StructType\Safety_Incident_File_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Involved_Party_File_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Safety_Incident_File_DataType[] $involved_Party_File_Data
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function setInvolved_Party_File_Data(array $involved_Party_File_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($involved_Party_File_DataArrayErrorMessage = self::validateInvolved_Party_File_DataForArrayConstraintsFromSetInvolved_Party_File_Data($involved_Party_File_Data))) {
            throw new \InvalidArgumentException($involved_Party_File_DataArrayErrorMessage, __LINE__);
        }
        $this->Involved_Party_File_Data = $involved_Party_File_Data;
        return $this;
    }
    /**
     * Add item to Involved_Party_File_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Safety_Incident_File_DataType $item
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
     */
    public function addToInvolved_Party_File_Data(\WorkdayWsdl\\StructType\Safety_Incident_File_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Safety_Incident_File_DataType) {
            throw new \InvalidArgumentException(sprintf('The Involved_Party_File_Data property can only contain items of type \WorkdayWsdl\\StructType\Safety_Incident_File_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Involved_Party_File_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Involved_Party_DataType
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
