<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Meeting_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data about the Committee Meeting
 * @subpackage Structs
 */
class Committee_Meeting_DataType extends AbstractStructBase
{
    /**
     * The Committee_Meeting_ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the Committee Meeting
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Committee_Meeting_ID;
    /**
     * The Committee_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee for the Committee Meeting
     * @var \StructType\CommitteeObjectType
     */
    public $Committee_Reference;
    /**
     * The Committee_Meeting_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Meeting Status
     * @var \StructType\Committee_Meeting_StatusObjectType
     */
    public $Committee_Meeting_Status_Reference;
    /**
     * The Committee_Meeting_Host
     * Meta information extracted from the WSDL
     * - documentation: Host
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Committee_Meeting_Host;
    /**
     * The Committee_Meeting_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Meeting Type
     * @var \StructType\Committee_Meeting_TypeObjectType
     */
    public $Committee_Meeting_Type_Reference;
    /**
     * The Committee_Meeting_Subject
     * Meta information extracted from the WSDL
     * - documentation: Committee Meeting Subject
     * - maxOccurs: 1
     * @var string
     */
    public $Committee_Meeting_Subject;
    /**
     * The Committee_Meeting_Abstract
     * Meta information extracted from the WSDL
     * - documentation: Summary of the committee meeting
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Committee_Meeting_Abstract;
    /**
     * The Committee_Meeting_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the committee meeting will take place
     * - maxOccurs: 1
     * @var string
     */
    public $Committee_Meeting_Date;
    /**
     * The Committee_Meeting_Time
     * Meta information extracted from the WSDL
     * - documentation: Time the committee meeting will take place
     * - maxOccurs: 1
     * @var string
     */
    public $Committee_Meeting_Time;
    /**
     * The Committee_Meeting_Time_Zone_Reference
     * Meta information extracted from the WSDL
     * - documentation: Time Zone the committee meeting time and date are based off of
     * @var \StructType\Time_ZoneObjectType
     */
    public $Committee_Meeting_Time_Zone_Reference;
    /**
     * The Duration_in_Hours
     * Meta information extracted from the WSDL
     * - documentation: Duration of the meeting in hours
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 5
     * @var float
     */
    public $Duration_in_Hours;
    /**
     * The Committee_Meeting_Location
     * Meta information extracted from the WSDL
     * - documentation: Location of the meeting
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Committee_Meeting_Location;
    /**
     * The Committee_Meeting_Invite_All_Members
     * Meta information extracted from the WSDL
     * - documentation: All members in the committee as of the meeting date.
     * - choice: Committee_Meeting_Invite_All_Members | Committee_Member_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Committee_Meeting_Invite_All_Members;
    /**
     * The Committee_Member_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee members that are participating in the meeting
     * - choice: Committee_Meeting_Invite_All_Members | Committee_Member_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Committee_Member_EnabledObjectType[]
     */
    public $Committee_Member_Reference;
    /**
     * The Committee_Meeting_Attendee_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee members that attended the meeting
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Committee_Member_EnabledObjectType[]
     */
    public $Committee_Meeting_Attendee_Reference;
    /**
     * The Committee_Meeting_Minutes_Data
     * Meta information extracted from the WSDL
     * - documentation: Meeting minutes
     * - minOccurs: 0
     * @var \StructType\Committee_Meeting_Minutes_SubDataType
     */
    public $Committee_Meeting_Minutes_Data;
    /**
     * The Attachments
     * Meta information extracted from the WSDL
     * - documentation: Attachments for the meeting
     * - minOccurs: 0
     * @var \StructType\Committee_Meeting_AttachmentsType
     */
    public $Attachments;
    /**
     * The Committee_Meeting_Action_Item_Data
     * Meta information extracted from the WSDL
     * - documentation: Action Items for the meeting
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Committee_Meeting_Action_Item_Sub_DataType[]
     */
    public $Committee_Meeting_Action_Item_Data;
    /**
     * The Committee_Meeting_Agenda_Item_Data
     * Meta information extracted from the WSDL
     * - documentation: Meeting Agenda
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Committee_Meeting_Agenda_Item_Data_SubeditType[]
     */
    public $Committee_Meeting_Agenda_Item_Data;
    /**
     * Constructor method for Committee_Meeting_DataType
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_ID()
     * @uses Committee_Meeting_DataType::setCommittee_Reference()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Status_Reference()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Host()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Type_Reference()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Subject()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Abstract()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Date()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Time()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Time_Zone_Reference()
     * @uses Committee_Meeting_DataType::setDuration_in_Hours()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Location()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Invite_All_Members()
     * @uses Committee_Meeting_DataType::setCommittee_Member_Reference()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Attendee_Reference()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Minutes_Data()
     * @uses Committee_Meeting_DataType::setAttachments()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Action_Item_Data()
     * @uses Committee_Meeting_DataType::setCommittee_Meeting_Agenda_Item_Data()
     * @param string $committee_Meeting_ID
     * @param \StructType\CommitteeObjectType $committee_Reference
     * @param \StructType\Committee_Meeting_StatusObjectType $committee_Meeting_Status_Reference
     * @param string $committee_Meeting_Host
     * @param \StructType\Committee_Meeting_TypeObjectType $committee_Meeting_Type_Reference
     * @param string $committee_Meeting_Subject
     * @param string $committee_Meeting_Abstract
     * @param string $committee_Meeting_Date
     * @param string $committee_Meeting_Time
     * @param \StructType\Time_ZoneObjectType $committee_Meeting_Time_Zone_Reference
     * @param float $duration_in_Hours
     * @param string $committee_Meeting_Location
     * @param bool $committee_Meeting_Invite_All_Members
     * @param \StructType\Committee_Member_EnabledObjectType[] $committee_Member_Reference
     * @param \StructType\Committee_Member_EnabledObjectType[] $committee_Meeting_Attendee_Reference
     * @param \StructType\Committee_Meeting_Minutes_SubDataType $committee_Meeting_Minutes_Data
     * @param \StructType\Committee_Meeting_AttachmentsType $attachments
     * @param \StructType\Committee_Meeting_Action_Item_Sub_DataType[] $committee_Meeting_Action_Item_Data
     * @param \StructType\Committee_Meeting_Agenda_Item_Data_SubeditType[] $committee_Meeting_Agenda_Item_Data
     */
    public function __construct($committee_Meeting_ID = null, \StructType\CommitteeObjectType $committee_Reference = null, \StructType\Committee_Meeting_StatusObjectType $committee_Meeting_Status_Reference = null, $committee_Meeting_Host = null, \StructType\Committee_Meeting_TypeObjectType $committee_Meeting_Type_Reference = null, $committee_Meeting_Subject = null, $committee_Meeting_Abstract = null, $committee_Meeting_Date = null, $committee_Meeting_Time = null, \StructType\Time_ZoneObjectType $committee_Meeting_Time_Zone_Reference = null, $duration_in_Hours = null, $committee_Meeting_Location = null, $committee_Meeting_Invite_All_Members = null, array $committee_Member_Reference = array(), array $committee_Meeting_Attendee_Reference = array(), \StructType\Committee_Meeting_Minutes_SubDataType $committee_Meeting_Minutes_Data = null, \StructType\Committee_Meeting_AttachmentsType $attachments = null, array $committee_Meeting_Action_Item_Data = array(), array $committee_Meeting_Agenda_Item_Data = array())
    {
        $this
            ->setCommittee_Meeting_ID($committee_Meeting_ID)
            ->setCommittee_Reference($committee_Reference)
            ->setCommittee_Meeting_Status_Reference($committee_Meeting_Status_Reference)
            ->setCommittee_Meeting_Host($committee_Meeting_Host)
            ->setCommittee_Meeting_Type_Reference($committee_Meeting_Type_Reference)
            ->setCommittee_Meeting_Subject($committee_Meeting_Subject)
            ->setCommittee_Meeting_Abstract($committee_Meeting_Abstract)
            ->setCommittee_Meeting_Date($committee_Meeting_Date)
            ->setCommittee_Meeting_Time($committee_Meeting_Time)
            ->setCommittee_Meeting_Time_Zone_Reference($committee_Meeting_Time_Zone_Reference)
            ->setDuration_in_Hours($duration_in_Hours)
            ->setCommittee_Meeting_Location($committee_Meeting_Location)
            ->setCommittee_Meeting_Invite_All_Members($committee_Meeting_Invite_All_Members)
            ->setCommittee_Member_Reference($committee_Member_Reference)
            ->setCommittee_Meeting_Attendee_Reference($committee_Meeting_Attendee_Reference)
            ->setCommittee_Meeting_Minutes_Data($committee_Meeting_Minutes_Data)
            ->setAttachments($attachments)
            ->setCommittee_Meeting_Action_Item_Data($committee_Meeting_Action_Item_Data)
            ->setCommittee_Meeting_Agenda_Item_Data($committee_Meeting_Agenda_Item_Data);
    }
    /**
     * Get Committee_Meeting_ID value
     * @return string|null
     */
    public function getCommittee_Meeting_ID()
    {
        return $this->Committee_Meeting_ID;
    }
    /**
     * Set Committee_Meeting_ID value
     * @param string $committee_Meeting_ID
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_ID($committee_Meeting_ID = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Meeting_ID) && !is_string($committee_Meeting_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Meeting_ID, true), gettype($committee_Meeting_ID)), __LINE__);
        }
        $this->Committee_Meeting_ID = $committee_Meeting_ID;
        return $this;
    }
    /**
     * Get Committee_Reference value
     * @return \StructType\CommitteeObjectType|null
     */
    public function getCommittee_Reference()
    {
        return $this->Committee_Reference;
    }
    /**
     * Set Committee_Reference value
     * @param \StructType\CommitteeObjectType $committee_Reference
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Reference(\StructType\CommitteeObjectType $committee_Reference = null)
    {
        $this->Committee_Reference = $committee_Reference;
        return $this;
    }
    /**
     * Get Committee_Meeting_Status_Reference value
     * @return \StructType\Committee_Meeting_StatusObjectType|null
     */
    public function getCommittee_Meeting_Status_Reference()
    {
        return $this->Committee_Meeting_Status_Reference;
    }
    /**
     * Set Committee_Meeting_Status_Reference value
     * @param \StructType\Committee_Meeting_StatusObjectType $committee_Meeting_Status_Reference
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Status_Reference(\StructType\Committee_Meeting_StatusObjectType $committee_Meeting_Status_Reference = null)
    {
        $this->Committee_Meeting_Status_Reference = $committee_Meeting_Status_Reference;
        return $this;
    }
    /**
     * Get Committee_Meeting_Host value
     * @return string|null
     */
    public function getCommittee_Meeting_Host()
    {
        return $this->Committee_Meeting_Host;
    }
    /**
     * Set Committee_Meeting_Host value
     * @param string $committee_Meeting_Host
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Host($committee_Meeting_Host = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Meeting_Host) && !is_string($committee_Meeting_Host)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Meeting_Host, true), gettype($committee_Meeting_Host)), __LINE__);
        }
        $this->Committee_Meeting_Host = $committee_Meeting_Host;
        return $this;
    }
    /**
     * Get Committee_Meeting_Type_Reference value
     * @return \StructType\Committee_Meeting_TypeObjectType|null
     */
    public function getCommittee_Meeting_Type_Reference()
    {
        return $this->Committee_Meeting_Type_Reference;
    }
    /**
     * Set Committee_Meeting_Type_Reference value
     * @param \StructType\Committee_Meeting_TypeObjectType $committee_Meeting_Type_Reference
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Type_Reference(\StructType\Committee_Meeting_TypeObjectType $committee_Meeting_Type_Reference = null)
    {
        $this->Committee_Meeting_Type_Reference = $committee_Meeting_Type_Reference;
        return $this;
    }
    /**
     * Get Committee_Meeting_Subject value
     * @return string|null
     */
    public function getCommittee_Meeting_Subject()
    {
        return $this->Committee_Meeting_Subject;
    }
    /**
     * Set Committee_Meeting_Subject value
     * @param string $committee_Meeting_Subject
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Subject($committee_Meeting_Subject = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Meeting_Subject) && !is_string($committee_Meeting_Subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Meeting_Subject, true), gettype($committee_Meeting_Subject)), __LINE__);
        }
        $this->Committee_Meeting_Subject = $committee_Meeting_Subject;
        return $this;
    }
    /**
     * Get Committee_Meeting_Abstract value
     * @return string|null
     */
    public function getCommittee_Meeting_Abstract()
    {
        return $this->Committee_Meeting_Abstract;
    }
    /**
     * Set Committee_Meeting_Abstract value
     * @param string $committee_Meeting_Abstract
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Abstract($committee_Meeting_Abstract = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Meeting_Abstract) && !is_string($committee_Meeting_Abstract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Meeting_Abstract, true), gettype($committee_Meeting_Abstract)), __LINE__);
        }
        $this->Committee_Meeting_Abstract = $committee_Meeting_Abstract;
        return $this;
    }
    /**
     * Get Committee_Meeting_Date value
     * @return string|null
     */
    public function getCommittee_Meeting_Date()
    {
        return $this->Committee_Meeting_Date;
    }
    /**
     * Set Committee_Meeting_Date value
     * @param string $committee_Meeting_Date
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Date($committee_Meeting_Date = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Meeting_Date) && !is_string($committee_Meeting_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Meeting_Date, true), gettype($committee_Meeting_Date)), __LINE__);
        }
        $this->Committee_Meeting_Date = $committee_Meeting_Date;
        return $this;
    }
    /**
     * Get Committee_Meeting_Time value
     * @return string|null
     */
    public function getCommittee_Meeting_Time()
    {
        return $this->Committee_Meeting_Time;
    }
    /**
     * Set Committee_Meeting_Time value
     * @param string $committee_Meeting_Time
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Time($committee_Meeting_Time = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Meeting_Time) && !is_string($committee_Meeting_Time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Meeting_Time, true), gettype($committee_Meeting_Time)), __LINE__);
        }
        $this->Committee_Meeting_Time = $committee_Meeting_Time;
        return $this;
    }
    /**
     * Get Committee_Meeting_Time_Zone_Reference value
     * @return \StructType\Time_ZoneObjectType|null
     */
    public function getCommittee_Meeting_Time_Zone_Reference()
    {
        return $this->Committee_Meeting_Time_Zone_Reference;
    }
    /**
     * Set Committee_Meeting_Time_Zone_Reference value
     * @param \StructType\Time_ZoneObjectType $committee_Meeting_Time_Zone_Reference
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Time_Zone_Reference(\StructType\Time_ZoneObjectType $committee_Meeting_Time_Zone_Reference = null)
    {
        $this->Committee_Meeting_Time_Zone_Reference = $committee_Meeting_Time_Zone_Reference;
        return $this;
    }
    /**
     * Get Duration_in_Hours value
     * @return float|null
     */
    public function getDuration_in_Hours()
    {
        return $this->Duration_in_Hours;
    }
    /**
     * Set Duration_in_Hours value
     * @param float $duration_in_Hours
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setDuration_in_Hours($duration_in_Hours = null)
    {
        // validation for constraint: float
        if (!is_null($duration_in_Hours) && !(is_float($duration_in_Hours) || is_numeric($duration_in_Hours))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($duration_in_Hours, true), gettype($duration_in_Hours)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($duration_in_Hours) && mb_strlen(mb_substr($duration_in_Hours, mb_strpos($duration_in_Hours, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($duration_in_Hours, true), mb_strlen(mb_substr($duration_in_Hours, mb_strpos($duration_in_Hours, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($duration_in_Hours) && $duration_in_Hours < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($duration_in_Hours, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($duration_in_Hours) && mb_strlen(preg_replace('/(\D)/', '', $duration_in_Hours)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($duration_in_Hours, true), mb_strlen(preg_replace('/(\D)/', '', $duration_in_Hours))), __LINE__);
        }
        $this->Duration_in_Hours = $duration_in_Hours;
        return $this;
    }
    /**
     * Get Committee_Meeting_Location value
     * @return string|null
     */
    public function getCommittee_Meeting_Location()
    {
        return $this->Committee_Meeting_Location;
    }
    /**
     * Set Committee_Meeting_Location value
     * @param string $committee_Meeting_Location
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Location($committee_Meeting_Location = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Meeting_Location) && !is_string($committee_Meeting_Location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Meeting_Location, true), gettype($committee_Meeting_Location)), __LINE__);
        }
        $this->Committee_Meeting_Location = $committee_Meeting_Location;
        return $this;
    }
    /**
     * Get Committee_Meeting_Invite_All_Members value
     * @return bool|null
     */
    public function getCommittee_Meeting_Invite_All_Members()
    {
        return isset($this->Committee_Meeting_Invite_All_Members) ? $this->Committee_Meeting_Invite_All_Members : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCommittee_Meeting_Invite_All_Members method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Meeting_Invite_All_Members method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCommittee_Meeting_Invite_All_MembersForChoiceConstraintsFromSetCommittee_Meeting_Invite_All_Members($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Committee_Member_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Committee_Meeting_Invite_All_Members can\'t be set as the property %s is already set. Only one property must be set among these properties: Committee_Meeting_Invite_All_Members, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Committee_Meeting_Invite_All_Members value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param bool $committee_Meeting_Invite_All_Members
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Invite_All_Members($committee_Meeting_Invite_All_Members = null)
    {
        // validation for constraint: boolean
        if (!is_null($committee_Meeting_Invite_All_Members) && !is_bool($committee_Meeting_Invite_All_Members)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($committee_Meeting_Invite_All_Members, true), gettype($committee_Meeting_Invite_All_Members)), __LINE__);
        }
        // validation for constraint: choice(Committee_Meeting_Invite_All_Members, Committee_Member_Reference)
        if ('' !== ($committee_Meeting_Invite_All_MembersChoiceErrorMessage = self::validateCommittee_Meeting_Invite_All_MembersForChoiceConstraintsFromSetCommittee_Meeting_Invite_All_Members($committee_Meeting_Invite_All_Members))) {
            throw new \InvalidArgumentException($committee_Meeting_Invite_All_MembersChoiceErrorMessage, __LINE__);
        }
        if (is_null($committee_Meeting_Invite_All_Members) || (is_array($committee_Meeting_Invite_All_Members) && empty($committee_Meeting_Invite_All_Members))) {
            unset($this->Committee_Meeting_Invite_All_Members);
        } else {
            $this->Committee_Meeting_Invite_All_Members = $committee_Meeting_Invite_All_Members;
        }
        return $this;
    }
    /**
     * Get Committee_Member_Reference value
     * @return \StructType\Committee_Member_EnabledObjectType[]|null
     */
    public function getCommittee_Member_Reference()
    {
        return isset($this->Committee_Member_Reference) ? $this->Committee_Member_Reference : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Member_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Member_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Member_ReferenceForArrayConstraintsFromSetCommittee_Member_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_DataTypeCommittee_Member_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_DataTypeCommittee_Member_ReferenceItem instanceof \StructType\Committee_Member_EnabledObjectType) {
                $invalidValues[] = is_object($committee_Meeting_DataTypeCommittee_Member_ReferenceItem) ? get_class($committee_Meeting_DataTypeCommittee_Member_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Meeting_DataTypeCommittee_Member_ReferenceItem), var_export($committee_Meeting_DataTypeCommittee_Member_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Member_Reference property can only contain items of type \StructType\Committee_Member_EnabledObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCommittee_Member_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Member_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCommittee_Member_ReferenceForChoiceConstraintsFromSetCommittee_Member_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Committee_Meeting_Invite_All_Members',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Committee_Member_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Committee_Member_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Committee_Member_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Member_EnabledObjectType[] $committee_Member_Reference
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Member_Reference(array $committee_Member_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Member_ReferenceArrayErrorMessage = self::validateCommittee_Member_ReferenceForArrayConstraintsFromSetCommittee_Member_Reference($committee_Member_Reference))) {
            throw new \InvalidArgumentException($committee_Member_ReferenceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Committee_Meeting_Invite_All_Members, Committee_Member_Reference)
        if ('' !== ($committee_Member_ReferenceChoiceErrorMessage = self::validateCommittee_Member_ReferenceForChoiceConstraintsFromSetCommittee_Member_Reference($committee_Member_Reference))) {
            throw new \InvalidArgumentException($committee_Member_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($committee_Member_Reference) || (is_array($committee_Member_Reference) && empty($committee_Member_Reference))) {
            unset($this->Committee_Member_Reference);
        } else {
            $this->Committee_Member_Reference = $committee_Member_Reference;
        }
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToCommittee_Member_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToCommittee_Member_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToCommittee_Member_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Committee_Meeting_Invite_All_Members',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Committee_Member_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Committee_Member_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Add item to Committee_Member_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Member_EnabledObjectType $item
     * @return \StructType\Committee_Meeting_DataType
     */
    public function addToCommittee_Member_Reference(\StructType\Committee_Member_EnabledObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_Member_EnabledObjectType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Member_Reference property can only contain items of type \StructType\Committee_Member_EnabledObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Committee_Meeting_Invite_All_Members, Committee_Member_Reference)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToCommittee_Member_Reference($item))) {
            throw new \InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        $this->Committee_Member_Reference[] = $item;
        return $this;
    }
    /**
     * Get Committee_Meeting_Attendee_Reference value
     * @return \StructType\Committee_Member_EnabledObjectType[]|null
     */
    public function getCommittee_Meeting_Attendee_Reference()
    {
        return $this->Committee_Meeting_Attendee_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Meeting_Attendee_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Meeting_Attendee_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Meeting_Attendee_ReferenceForArrayConstraintsFromSetCommittee_Meeting_Attendee_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_DataTypeCommittee_Meeting_Attendee_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_DataTypeCommittee_Meeting_Attendee_ReferenceItem instanceof \StructType\Committee_Member_EnabledObjectType) {
                $invalidValues[] = is_object($committee_Meeting_DataTypeCommittee_Meeting_Attendee_ReferenceItem) ? get_class($committee_Meeting_DataTypeCommittee_Meeting_Attendee_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Meeting_DataTypeCommittee_Meeting_Attendee_ReferenceItem), var_export($committee_Meeting_DataTypeCommittee_Meeting_Attendee_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Meeting_Attendee_Reference property can only contain items of type \StructType\Committee_Member_EnabledObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Meeting_Attendee_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Member_EnabledObjectType[] $committee_Meeting_Attendee_Reference
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Attendee_Reference(array $committee_Meeting_Attendee_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Meeting_Attendee_ReferenceArrayErrorMessage = self::validateCommittee_Meeting_Attendee_ReferenceForArrayConstraintsFromSetCommittee_Meeting_Attendee_Reference($committee_Meeting_Attendee_Reference))) {
            throw new \InvalidArgumentException($committee_Meeting_Attendee_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Committee_Meeting_Attendee_Reference = $committee_Meeting_Attendee_Reference;
        return $this;
    }
    /**
     * Add item to Committee_Meeting_Attendee_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Member_EnabledObjectType $item
     * @return \StructType\Committee_Meeting_DataType
     */
    public function addToCommittee_Meeting_Attendee_Reference(\StructType\Committee_Member_EnabledObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_Member_EnabledObjectType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Meeting_Attendee_Reference property can only contain items of type \StructType\Committee_Member_EnabledObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Meeting_Attendee_Reference[] = $item;
        return $this;
    }
    /**
     * Get Committee_Meeting_Minutes_Data value
     * @return \StructType\Committee_Meeting_Minutes_SubDataType|null
     */
    public function getCommittee_Meeting_Minutes_Data()
    {
        return $this->Committee_Meeting_Minutes_Data;
    }
    /**
     * Set Committee_Meeting_Minutes_Data value
     * @param \StructType\Committee_Meeting_Minutes_SubDataType $committee_Meeting_Minutes_Data
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Minutes_Data(\StructType\Committee_Meeting_Minutes_SubDataType $committee_Meeting_Minutes_Data = null)
    {
        $this->Committee_Meeting_Minutes_Data = $committee_Meeting_Minutes_Data;
        return $this;
    }
    /**
     * Get Attachments value
     * @return \StructType\Committee_Meeting_AttachmentsType|null
     */
    public function getAttachments()
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \StructType\Committee_Meeting_AttachmentsType $attachments
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setAttachments(\StructType\Committee_Meeting_AttachmentsType $attachments = null)
    {
        $this->Attachments = $attachments;
        return $this;
    }
    /**
     * Get Committee_Meeting_Action_Item_Data value
     * @return \StructType\Committee_Meeting_Action_Item_Sub_DataType[]|null
     */
    public function getCommittee_Meeting_Action_Item_Data()
    {
        return $this->Committee_Meeting_Action_Item_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Meeting_Action_Item_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Meeting_Action_Item_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Meeting_Action_Item_DataForArrayConstraintsFromSetCommittee_Meeting_Action_Item_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_DataTypeCommittee_Meeting_Action_Item_DataItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_DataTypeCommittee_Meeting_Action_Item_DataItem instanceof \StructType\Committee_Meeting_Action_Item_Sub_DataType) {
                $invalidValues[] = is_object($committee_Meeting_DataTypeCommittee_Meeting_Action_Item_DataItem) ? get_class($committee_Meeting_DataTypeCommittee_Meeting_Action_Item_DataItem) : sprintf('%s(%s)', gettype($committee_Meeting_DataTypeCommittee_Meeting_Action_Item_DataItem), var_export($committee_Meeting_DataTypeCommittee_Meeting_Action_Item_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Meeting_Action_Item_Data property can only contain items of type \StructType\Committee_Meeting_Action_Item_Sub_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Meeting_Action_Item_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Meeting_Action_Item_Sub_DataType[] $committee_Meeting_Action_Item_Data
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Action_Item_Data(array $committee_Meeting_Action_Item_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Meeting_Action_Item_DataArrayErrorMessage = self::validateCommittee_Meeting_Action_Item_DataForArrayConstraintsFromSetCommittee_Meeting_Action_Item_Data($committee_Meeting_Action_Item_Data))) {
            throw new \InvalidArgumentException($committee_Meeting_Action_Item_DataArrayErrorMessage, __LINE__);
        }
        $this->Committee_Meeting_Action_Item_Data = $committee_Meeting_Action_Item_Data;
        return $this;
    }
    /**
     * Add item to Committee_Meeting_Action_Item_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Meeting_Action_Item_Sub_DataType $item
     * @return \StructType\Committee_Meeting_DataType
     */
    public function addToCommittee_Meeting_Action_Item_Data(\StructType\Committee_Meeting_Action_Item_Sub_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_Meeting_Action_Item_Sub_DataType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Meeting_Action_Item_Data property can only contain items of type \StructType\Committee_Meeting_Action_Item_Sub_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Meeting_Action_Item_Data[] = $item;
        return $this;
    }
    /**
     * Get Committee_Meeting_Agenda_Item_Data value
     * @return \StructType\Committee_Meeting_Agenda_Item_Data_SubeditType[]|null
     */
    public function getCommittee_Meeting_Agenda_Item_Data()
    {
        return $this->Committee_Meeting_Agenda_Item_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Meeting_Agenda_Item_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Meeting_Agenda_Item_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Meeting_Agenda_Item_DataForArrayConstraintsFromSetCommittee_Meeting_Agenda_Item_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_DataTypeCommittee_Meeting_Agenda_Item_DataItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_DataTypeCommittee_Meeting_Agenda_Item_DataItem instanceof \StructType\Committee_Meeting_Agenda_Item_Data_SubeditType) {
                $invalidValues[] = is_object($committee_Meeting_DataTypeCommittee_Meeting_Agenda_Item_DataItem) ? get_class($committee_Meeting_DataTypeCommittee_Meeting_Agenda_Item_DataItem) : sprintf('%s(%s)', gettype($committee_Meeting_DataTypeCommittee_Meeting_Agenda_Item_DataItem), var_export($committee_Meeting_DataTypeCommittee_Meeting_Agenda_Item_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Meeting_Agenda_Item_Data property can only contain items of type \StructType\Committee_Meeting_Agenda_Item_Data_SubeditType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Meeting_Agenda_Item_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Meeting_Agenda_Item_Data_SubeditType[] $committee_Meeting_Agenda_Item_Data
     * @return \StructType\Committee_Meeting_DataType
     */
    public function setCommittee_Meeting_Agenda_Item_Data(array $committee_Meeting_Agenda_Item_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Meeting_Agenda_Item_DataArrayErrorMessage = self::validateCommittee_Meeting_Agenda_Item_DataForArrayConstraintsFromSetCommittee_Meeting_Agenda_Item_Data($committee_Meeting_Agenda_Item_Data))) {
            throw new \InvalidArgumentException($committee_Meeting_Agenda_Item_DataArrayErrorMessage, __LINE__);
        }
        $this->Committee_Meeting_Agenda_Item_Data = $committee_Meeting_Agenda_Item_Data;
        return $this;
    }
    /**
     * Add item to Committee_Meeting_Agenda_Item_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Meeting_Agenda_Item_Data_SubeditType $item
     * @return \StructType\Committee_Meeting_DataType
     */
    public function addToCommittee_Meeting_Agenda_Item_Data(\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_Meeting_Agenda_Item_Data_SubeditType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Meeting_Agenda_Item_Data property can only contain items of type \StructType\Committee_Meeting_Agenda_Item_Data_SubeditType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Meeting_Agenda_Item_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_Meeting_DataType
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
