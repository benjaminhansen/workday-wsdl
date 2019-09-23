<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Definition_Snapshot_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Committee Definition Snapshot.
 * @subpackage Structs
 */
class Committee_Definition_Snapshot_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date
     * - maxOccurs: 1
     * @var string
     */
    public $Effective_Date;
    /**
     * The Committee_Name
     * Meta information extracted from the WSDL
     * - documentation: Committee Name
     * - maxOccurs: 1
     * @var string
     */
    public $Committee_Name;
    /**
     * The Committee_Code
     * Meta information extracted from the WSDL
     * - documentation: Committee Code
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Committee_Code;
    /**
     * The Sponsoring_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Sponsoring Organization
     * @var \WorkdayWsdl\\StructType\Committee_Sponsoring_OrganizationObjectType
     */
    public $Sponsoring_Organization_Reference;
    /**
     * The Job_Requisition_Reference
     * Meta information extracted from the WSDL
     * - documentation: Job Requisition
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_RequisitionObjectType[]
     */
    public $Job_Requisition_Reference;
    /**
     * The Superior_Committee_Reference
     * Meta information extracted from the WSDL
     * - documentation: Superior Committee
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CommitteeObjectType
     */
    public $Superior_Committee_Reference;
    /**
     * The Committee_Summary
     * Meta information extracted from the WSDL
     * - documentation: Committee Summary
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Committee_Summary;
    /**
     * The Committee_Purpose___Detailed
     * Meta information extracted from the WSDL
     * - documentation: Committee Purpose -Detailed
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Committee_Purpose___Detailed;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Inactive Flag
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Committee_Membership_Target_Data_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType[]
     */
    public $Committee_Membership_Target_Data_Reference;
    /**
     * Constructor method for Committee_Definition_Snapshot_DataType
     * @uses Committee_Definition_Snapshot_DataType::setEffective_Date()
     * @uses Committee_Definition_Snapshot_DataType::setCommittee_Name()
     * @uses Committee_Definition_Snapshot_DataType::setCommittee_Code()
     * @uses Committee_Definition_Snapshot_DataType::setSponsoring_Organization_Reference()
     * @uses Committee_Definition_Snapshot_DataType::setJob_Requisition_Reference()
     * @uses Committee_Definition_Snapshot_DataType::setSuperior_Committee_Reference()
     * @uses Committee_Definition_Snapshot_DataType::setCommittee_Summary()
     * @uses Committee_Definition_Snapshot_DataType::setCommittee_Purpose___Detailed()
     * @uses Committee_Definition_Snapshot_DataType::setInactive()
     * @uses Committee_Definition_Snapshot_DataType::setCommittee_Membership_Target_Data_Reference()
     * @param string $effective_Date
     * @param string $committee_Name
     * @param string $committee_Code
     * @param \WorkdayWsdl\\StructType\Committee_Sponsoring_OrganizationObjectType $sponsoring_Organization_Reference
     * @param \WorkdayWsdl\\StructType\Job_RequisitionObjectType[] $job_Requisition_Reference
     * @param \WorkdayWsdl\\StructType\CommitteeObjectType $superior_Committee_Reference
     * @param string $committee_Summary
     * @param string $committee_Purpose___Detailed
     * @param bool $inactive
     * @param \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType[] $committee_Membership_Target_Data_Reference
     */
    public function __construct($effective_Date = null, $committee_Name = null, $committee_Code = null, \WorkdayWsdl\\StructType\Committee_Sponsoring_OrganizationObjectType $sponsoring_Organization_Reference = null, array $job_Requisition_Reference = array(), \WorkdayWsdl\\StructType\CommitteeObjectType $superior_Committee_Reference = null, $committee_Summary = null, $committee_Purpose___Detailed = null, $inactive = null, array $committee_Membership_Target_Data_Reference = array())
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setCommittee_Name($committee_Name)
            ->setCommittee_Code($committee_Code)
            ->setSponsoring_Organization_Reference($sponsoring_Organization_Reference)
            ->setJob_Requisition_Reference($job_Requisition_Reference)
            ->setSuperior_Committee_Reference($superior_Committee_Reference)
            ->setCommittee_Summary($committee_Summary)
            ->setCommittee_Purpose___Detailed($committee_Purpose___Detailed)
            ->setInactive($inactive)
            ->setCommittee_Membership_Target_Data_Reference($committee_Membership_Target_Data_Reference);
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
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
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
     * Get Committee_Name value
     * @return string|null
     */
    public function getCommittee_Name()
    {
        return $this->Committee_Name;
    }
    /**
     * Set Committee_Name value
     * @param string $committee_Name
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
     */
    public function setCommittee_Name($committee_Name = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Name) && !is_string($committee_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Name, true), gettype($committee_Name)), __LINE__);
        }
        $this->Committee_Name = $committee_Name;
        return $this;
    }
    /**
     * Get Committee_Code value
     * @return string|null
     */
    public function getCommittee_Code()
    {
        return $this->Committee_Code;
    }
    /**
     * Set Committee_Code value
     * @param string $committee_Code
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
     */
    public function setCommittee_Code($committee_Code = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Code) && !is_string($committee_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Code, true), gettype($committee_Code)), __LINE__);
        }
        $this->Committee_Code = $committee_Code;
        return $this;
    }
    /**
     * Get Sponsoring_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Sponsoring_OrganizationObjectType|null
     */
    public function getSponsoring_Organization_Reference()
    {
        return $this->Sponsoring_Organization_Reference;
    }
    /**
     * Set Sponsoring_Organization_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Sponsoring_OrganizationObjectType $sponsoring_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
     */
    public function setSponsoring_Organization_Reference(\WorkdayWsdl\\StructType\Committee_Sponsoring_OrganizationObjectType $sponsoring_Organization_Reference = null)
    {
        $this->Sponsoring_Organization_Reference = $sponsoring_Organization_Reference;
        return $this;
    }
    /**
     * Get Job_Requisition_Reference value
     * @return \WorkdayWsdl\\StructType\Job_RequisitionObjectType[]|null
     */
    public function getJob_Requisition_Reference()
    {
        return $this->Job_Requisition_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Requisition_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Requisition_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Requisition_ReferenceForArrayConstraintsFromSetJob_Requisition_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Definition_Snapshot_DataTypeJob_Requisition_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Definition_Snapshot_DataTypeJob_Requisition_ReferenceItem instanceof \WorkdayWsdl\\StructType\Job_RequisitionObjectType) {
                $invalidValues[] = is_object($committee_Definition_Snapshot_DataTypeJob_Requisition_ReferenceItem) ? get_class($committee_Definition_Snapshot_DataTypeJob_Requisition_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Definition_Snapshot_DataTypeJob_Requisition_ReferenceItem), var_export($committee_Definition_Snapshot_DataTypeJob_Requisition_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Requisition_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_RequisitionObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Requisition_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_RequisitionObjectType[] $job_Requisition_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
     */
    public function setJob_Requisition_Reference(array $job_Requisition_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Requisition_ReferenceArrayErrorMessage = self::validateJob_Requisition_ReferenceForArrayConstraintsFromSetJob_Requisition_Reference($job_Requisition_Reference))) {
            throw new \InvalidArgumentException($job_Requisition_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Requisition_Reference = $job_Requisition_Reference;
        return $this;
    }
    /**
     * Add item to Job_Requisition_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_RequisitionObjectType $item
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
     */
    public function addToJob_Requisition_Reference(\WorkdayWsdl\\StructType\Job_RequisitionObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_RequisitionObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Requisition_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_RequisitionObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Requisition_Reference[] = $item;
        return $this;
    }
    /**
     * Get Superior_Committee_Reference value
     * @return \WorkdayWsdl\\StructType\CommitteeObjectType|null
     */
    public function getSuperior_Committee_Reference()
    {
        return $this->Superior_Committee_Reference;
    }
    /**
     * Set Superior_Committee_Reference value
     * @param \WorkdayWsdl\\StructType\CommitteeObjectType $superior_Committee_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
     */
    public function setSuperior_Committee_Reference(\WorkdayWsdl\\StructType\CommitteeObjectType $superior_Committee_Reference = null)
    {
        $this->Superior_Committee_Reference = $superior_Committee_Reference;
        return $this;
    }
    /**
     * Get Committee_Summary value
     * @return string|null
     */
    public function getCommittee_Summary()
    {
        return $this->Committee_Summary;
    }
    /**
     * Set Committee_Summary value
     * @param string $committee_Summary
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
     */
    public function setCommittee_Summary($committee_Summary = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Summary) && !is_string($committee_Summary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Summary, true), gettype($committee_Summary)), __LINE__);
        }
        $this->Committee_Summary = $committee_Summary;
        return $this;
    }
    /**
     * Get Committee_Purpose___Detailed value
     * @return string|null
     */
    public function getCommittee_Purpose___Detailed()
    {
        return $this->{'Committee_Purpose_-_Detailed'};
    }
    /**
     * Set Committee_Purpose___Detailed value
     * @param string $committee_Purpose___Detailed
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
     */
    public function setCommittee_Purpose___Detailed($committee_Purpose___Detailed = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Purpose___Detailed) && !is_string($committee_Purpose___Detailed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Purpose___Detailed, true), gettype($committee_Purpose___Detailed)), __LINE__);
        }
        $this->Committee_Purpose___Detailed = $this->{'Committee_Purpose_-_Detailed'} = $committee_Purpose___Detailed;
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
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
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
     * Get Committee_Membership_Target_Data_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType[]|null
     */
    public function getCommittee_Membership_Target_Data_Reference()
    {
        return $this->Committee_Membership_Target_Data_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Membership_Target_Data_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Membership_Target_Data_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Membership_Target_Data_ReferenceForArrayConstraintsFromSetCommittee_Membership_Target_Data_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Definition_Snapshot_DataTypeCommittee_Membership_Target_Data_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Definition_Snapshot_DataTypeCommittee_Membership_Target_Data_ReferenceItem instanceof \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType) {
                $invalidValues[] = is_object($committee_Definition_Snapshot_DataTypeCommittee_Membership_Target_Data_ReferenceItem) ? get_class($committee_Definition_Snapshot_DataTypeCommittee_Membership_Target_Data_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Definition_Snapshot_DataTypeCommittee_Membership_Target_Data_ReferenceItem), var_export($committee_Definition_Snapshot_DataTypeCommittee_Membership_Target_Data_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Membership_Target_Data_Reference property can only contain items of type \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Membership_Target_Data_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType[] $committee_Membership_Target_Data_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
     */
    public function setCommittee_Membership_Target_Data_Reference(array $committee_Membership_Target_Data_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Membership_Target_Data_ReferenceArrayErrorMessage = self::validateCommittee_Membership_Target_Data_ReferenceForArrayConstraintsFromSetCommittee_Membership_Target_Data_Reference($committee_Membership_Target_Data_Reference))) {
            throw new \InvalidArgumentException($committee_Membership_Target_Data_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Committee_Membership_Target_Data_Reference = $committee_Membership_Target_Data_Reference;
        return $this;
    }
    /**
     * Add item to Committee_Membership_Target_Data_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType $item
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
     */
    public function addToCommittee_Membership_Target_Data_Reference(\WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Membership_Target_Data_Reference property can only contain items of type \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Membership_Target_Data_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Definition_Snapshot_DataType
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
