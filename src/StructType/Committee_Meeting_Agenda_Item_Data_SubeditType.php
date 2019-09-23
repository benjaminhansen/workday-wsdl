<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Meeting_Agenda_Item_Data_SubeditType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for the Agenda Item
 * @subpackage Structs
 */
class Committee_Meeting_Agenda_Item_Data_SubeditType extends AbstractStructBase
{
    /**
     * The Agenda_Item_Reference
     * Meta information extracted from the WSDL
     * - documentation: Agenda reference for meeting
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_ItemObjectType
     */
    public $Agenda_Item_Reference;
    /**
     * The Agenda_Item_ID
     * Meta information extracted from the WSDL
     * - documentation: This error indicates that the RefID submitted is already in use. | Agenda ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Agenda_Item_ID;
    /**
     * The Agenda_Item_Number
     * Meta information extracted from the WSDL
     * - documentation: Agenda item number
     * - maxOccurs: 1
     * @var string
     */
    public $Agenda_Item_Number;
    /**
     * The Agenda_Item_Description
     * Meta information extracted from the WSDL
     * - documentation: Agenda item description
     * - maxOccurs: 1
     * @var string
     */
    public $Agenda_Item_Description;
    /**
     * The Committee_Meeting_Agenda_Item_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Agenda type
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_TypeObjectType
     */
    public $Committee_Meeting_Agenda_Item_Type_Reference;
    /**
     * The Agenda_Item_Presenter
     * Meta information extracted from the WSDL
     * - documentation: Name of the presenter of the agenda
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Agenda_Item_Presenter;
    /**
     * The Agenda_Item_Details
     * Meta information extracted from the WSDL
     * - documentation: Details about the agenda
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Agenda_Item_Details;
    /**
     * The Related_Academic_Appointment_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: This error indicates that the appointment selected is currently not available to be linked to an agenda. | This error indicates that the user has not enabled Education Institution Features. | Academic appointments related to this
     * agenda
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Related_Academic_Appointment_Event_Reference;
    /**
     * The Agenda_Item_Minutes_Data
     * Meta information extracted from the WSDL
     * - documentation: Data for committee meeting minutes
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Minutes_SubDataType
     */
    public $Agenda_Item_Minutes_Data;
    /**
     * The Agenda_Item_Action_Item_Data
     * Meta information extracted from the WSDL
     * - documentation: Data for committee meeting action items
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType[]
     */
    public $Agenda_Item_Action_Item_Data;
    /**
     * The Attachments
     * Meta information extracted from the WSDL
     * - documentation: Data for committee meeting attachments
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentsType
     */
    public $Attachments;
    /**
     * The Committee_Meeting_Agenda_Item_Vote
     * Meta information extracted from the WSDL
     * - documentation: Data for votes on the agenda item
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType[]
     */
    public $Committee_Meeting_Agenda_Item_Vote;
    /**
     * The Delete_Only
     * Meta information extracted from the WSDL
     * - documentation: Delete Flag for deleting Agenda Item for Committee Meeting
     * @var bool
     */
    public $Delete_Only;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only being true will add a new Agenda Item to Committee IFF Delete is false. Add Only being false requires reference to Agenda Item and updates the Agenda Item
     * @var bool
     */
    public $Add_Only;
    /**
     * Constructor method for Committee_Meeting_Agenda_Item_Data_SubeditType
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setAgenda_Item_Reference()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setAgenda_Item_ID()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setAgenda_Item_Number()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setAgenda_Item_Description()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setCommittee_Meeting_Agenda_Item_Type_Reference()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setAgenda_Item_Presenter()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setAgenda_Item_Details()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setRelated_Academic_Appointment_Event_Reference()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setAgenda_Item_Minutes_Data()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setAgenda_Item_Action_Item_Data()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setAttachments()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setCommittee_Meeting_Agenda_Item_Vote()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setDelete_Only()
     * @uses Committee_Meeting_Agenda_Item_Data_SubeditType::setAdd_Only()
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_ItemObjectType $agenda_Item_Reference
     * @param string $agenda_Item_ID
     * @param string $agenda_Item_Number
     * @param string $agenda_Item_Description
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_TypeObjectType $committee_Meeting_Agenda_Item_Type_Reference
     * @param string $agenda_Item_Presenter
     * @param string $agenda_Item_Details
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $related_Academic_Appointment_Event_Reference
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Minutes_SubDataType $agenda_Item_Minutes_Data
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType[] $agenda_Item_Action_Item_Data
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentsType $attachments
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType[] $committee_Meeting_Agenda_Item_Vote
     * @param bool $delete_Only
     * @param bool $add_Only
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_Meeting_Agenda_ItemObjectType $agenda_Item_Reference = null, $agenda_Item_ID = null, $agenda_Item_Number = null, $agenda_Item_Description = null, \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_TypeObjectType $committee_Meeting_Agenda_Item_Type_Reference = null, $agenda_Item_Presenter = null, $agenda_Item_Details = null, \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $related_Academic_Appointment_Event_Reference = null, \WorkdayWsdl\\StructType\Committee_Meeting_Minutes_SubDataType $agenda_Item_Minutes_Data = null, array $agenda_Item_Action_Item_Data = array(), \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentsType $attachments = null, array $committee_Meeting_Agenda_Item_Vote = array(), $delete_Only = null, $add_Only = null)
    {
        $this
            ->setAgenda_Item_Reference($agenda_Item_Reference)
            ->setAgenda_Item_ID($agenda_Item_ID)
            ->setAgenda_Item_Number($agenda_Item_Number)
            ->setAgenda_Item_Description($agenda_Item_Description)
            ->setCommittee_Meeting_Agenda_Item_Type_Reference($committee_Meeting_Agenda_Item_Type_Reference)
            ->setAgenda_Item_Presenter($agenda_Item_Presenter)
            ->setAgenda_Item_Details($agenda_Item_Details)
            ->setRelated_Academic_Appointment_Event_Reference($related_Academic_Appointment_Event_Reference)
            ->setAgenda_Item_Minutes_Data($agenda_Item_Minutes_Data)
            ->setAgenda_Item_Action_Item_Data($agenda_Item_Action_Item_Data)
            ->setAttachments($attachments)
            ->setCommittee_Meeting_Agenda_Item_Vote($committee_Meeting_Agenda_Item_Vote)
            ->setDelete_Only($delete_Only)
            ->setAdd_Only($add_Only);
    }
    /**
     * Get Agenda_Item_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_ItemObjectType|null
     */
    public function getAgenda_Item_Reference()
    {
        return $this->Agenda_Item_Reference;
    }
    /**
     * Set Agenda_Item_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_ItemObjectType $agenda_Item_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setAgenda_Item_Reference(\WorkdayWsdl\\StructType\Committee_Meeting_Agenda_ItemObjectType $agenda_Item_Reference = null)
    {
        $this->Agenda_Item_Reference = $agenda_Item_Reference;
        return $this;
    }
    /**
     * Get Agenda_Item_ID value
     * @return string|null
     */
    public function getAgenda_Item_ID()
    {
        return $this->Agenda_Item_ID;
    }
    /**
     * Set Agenda_Item_ID value
     * @param string $agenda_Item_ID
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setAgenda_Item_ID($agenda_Item_ID = null)
    {
        // validation for constraint: string
        if (!is_null($agenda_Item_ID) && !is_string($agenda_Item_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agenda_Item_ID, true), gettype($agenda_Item_ID)), __LINE__);
        }
        $this->Agenda_Item_ID = $agenda_Item_ID;
        return $this;
    }
    /**
     * Get Agenda_Item_Number value
     * @return string|null
     */
    public function getAgenda_Item_Number()
    {
        return $this->Agenda_Item_Number;
    }
    /**
     * Set Agenda_Item_Number value
     * @param string $agenda_Item_Number
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setAgenda_Item_Number($agenda_Item_Number = null)
    {
        // validation for constraint: string
        if (!is_null($agenda_Item_Number) && !is_string($agenda_Item_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agenda_Item_Number, true), gettype($agenda_Item_Number)), __LINE__);
        }
        $this->Agenda_Item_Number = $agenda_Item_Number;
        return $this;
    }
    /**
     * Get Agenda_Item_Description value
     * @return string|null
     */
    public function getAgenda_Item_Description()
    {
        return $this->Agenda_Item_Description;
    }
    /**
     * Set Agenda_Item_Description value
     * @param string $agenda_Item_Description
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setAgenda_Item_Description($agenda_Item_Description = null)
    {
        // validation for constraint: string
        if (!is_null($agenda_Item_Description) && !is_string($agenda_Item_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agenda_Item_Description, true), gettype($agenda_Item_Description)), __LINE__);
        }
        $this->Agenda_Item_Description = $agenda_Item_Description;
        return $this;
    }
    /**
     * Get Committee_Meeting_Agenda_Item_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_TypeObjectType|null
     */
    public function getCommittee_Meeting_Agenda_Item_Type_Reference()
    {
        return $this->Committee_Meeting_Agenda_Item_Type_Reference;
    }
    /**
     * Set Committee_Meeting_Agenda_Item_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_TypeObjectType $committee_Meeting_Agenda_Item_Type_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setCommittee_Meeting_Agenda_Item_Type_Reference(\WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_TypeObjectType $committee_Meeting_Agenda_Item_Type_Reference = null)
    {
        $this->Committee_Meeting_Agenda_Item_Type_Reference = $committee_Meeting_Agenda_Item_Type_Reference;
        return $this;
    }
    /**
     * Get Agenda_Item_Presenter value
     * @return string|null
     */
    public function getAgenda_Item_Presenter()
    {
        return $this->Agenda_Item_Presenter;
    }
    /**
     * Set Agenda_Item_Presenter value
     * @param string $agenda_Item_Presenter
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setAgenda_Item_Presenter($agenda_Item_Presenter = null)
    {
        // validation for constraint: string
        if (!is_null($agenda_Item_Presenter) && !is_string($agenda_Item_Presenter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agenda_Item_Presenter, true), gettype($agenda_Item_Presenter)), __LINE__);
        }
        $this->Agenda_Item_Presenter = $agenda_Item_Presenter;
        return $this;
    }
    /**
     * Get Agenda_Item_Details value
     * @return string|null
     */
    public function getAgenda_Item_Details()
    {
        return $this->Agenda_Item_Details;
    }
    /**
     * Set Agenda_Item_Details value
     * @param string $agenda_Item_Details
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setAgenda_Item_Details($agenda_Item_Details = null)
    {
        // validation for constraint: string
        if (!is_null($agenda_Item_Details) && !is_string($agenda_Item_Details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agenda_Item_Details, true), gettype($agenda_Item_Details)), __LINE__);
        }
        $this->Agenda_Item_Details = $agenda_Item_Details;
        return $this;
    }
    /**
     * Get Related_Academic_Appointment_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getRelated_Academic_Appointment_Event_Reference()
    {
        return $this->Related_Academic_Appointment_Event_Reference;
    }
    /**
     * Set Related_Academic_Appointment_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $related_Academic_Appointment_Event_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setRelated_Academic_Appointment_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $related_Academic_Appointment_Event_Reference = null)
    {
        $this->Related_Academic_Appointment_Event_Reference = $related_Academic_Appointment_Event_Reference;
        return $this;
    }
    /**
     * Get Agenda_Item_Minutes_Data value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Minutes_SubDataType|null
     */
    public function getAgenda_Item_Minutes_Data()
    {
        return $this->Agenda_Item_Minutes_Data;
    }
    /**
     * Set Agenda_Item_Minutes_Data value
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Minutes_SubDataType $agenda_Item_Minutes_Data
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setAgenda_Item_Minutes_Data(\WorkdayWsdl\\StructType\Committee_Meeting_Minutes_SubDataType $agenda_Item_Minutes_Data = null)
    {
        $this->Agenda_Item_Minutes_Data = $agenda_Item_Minutes_Data;
        return $this;
    }
    /**
     * Get Agenda_Item_Action_Item_Data value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType[]|null
     */
    public function getAgenda_Item_Action_Item_Data()
    {
        return $this->Agenda_Item_Action_Item_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAgenda_Item_Action_Item_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAgenda_Item_Action_Item_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAgenda_Item_Action_Item_DataForArrayConstraintsFromSetAgenda_Item_Action_Item_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_Agenda_Item_Data_SubeditTypeAgenda_Item_Action_Item_DataItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_Agenda_Item_Data_SubeditTypeAgenda_Item_Action_Item_DataItem instanceof \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType) {
                $invalidValues[] = is_object($committee_Meeting_Agenda_Item_Data_SubeditTypeAgenda_Item_Action_Item_DataItem) ? get_class($committee_Meeting_Agenda_Item_Data_SubeditTypeAgenda_Item_Action_Item_DataItem) : sprintf('%s(%s)', gettype($committee_Meeting_Agenda_Item_Data_SubeditTypeAgenda_Item_Action_Item_DataItem), var_export($committee_Meeting_Agenda_Item_Data_SubeditTypeAgenda_Item_Action_Item_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Agenda_Item_Action_Item_Data property can only contain items of type \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Agenda_Item_Action_Item_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType[] $agenda_Item_Action_Item_Data
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setAgenda_Item_Action_Item_Data(array $agenda_Item_Action_Item_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($agenda_Item_Action_Item_DataArrayErrorMessage = self::validateAgenda_Item_Action_Item_DataForArrayConstraintsFromSetAgenda_Item_Action_Item_Data($agenda_Item_Action_Item_Data))) {
            throw new \InvalidArgumentException($agenda_Item_Action_Item_DataArrayErrorMessage, __LINE__);
        }
        $this->Agenda_Item_Action_Item_Data = $agenda_Item_Action_Item_Data;
        return $this;
    }
    /**
     * Add item to Agenda_Item_Action_Item_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType $item
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function addToAgenda_Item_Action_Item_Data(\WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType) {
            throw new \InvalidArgumentException(sprintf('The Agenda_Item_Action_Item_Data property can only contain items of type \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Agenda_Item_Action_Item_Data[] = $item;
        return $this;
    }
    /**
     * Get Attachments value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentsType|null
     */
    public function getAttachments()
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentsType $attachments
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setAttachments(\WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentsType $attachments = null)
    {
        $this->Attachments = $attachments;
        return $this;
    }
    /**
     * Get Committee_Meeting_Agenda_Item_Vote value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType[]|null
     */
    public function getCommittee_Meeting_Agenda_Item_Vote()
    {
        return $this->Committee_Meeting_Agenda_Item_Vote;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Meeting_Agenda_Item_Vote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Meeting_Agenda_Item_Vote method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Meeting_Agenda_Item_VoteForArrayConstraintsFromSetCommittee_Meeting_Agenda_Item_Vote(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_Agenda_Item_Data_SubeditTypeCommittee_Meeting_Agenda_Item_VoteItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_Agenda_Item_Data_SubeditTypeCommittee_Meeting_Agenda_Item_VoteItem instanceof \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType) {
                $invalidValues[] = is_object($committee_Meeting_Agenda_Item_Data_SubeditTypeCommittee_Meeting_Agenda_Item_VoteItem) ? get_class($committee_Meeting_Agenda_Item_Data_SubeditTypeCommittee_Meeting_Agenda_Item_VoteItem) : sprintf('%s(%s)', gettype($committee_Meeting_Agenda_Item_Data_SubeditTypeCommittee_Meeting_Agenda_Item_VoteItem), var_export($committee_Meeting_Agenda_Item_Data_SubeditTypeCommittee_Meeting_Agenda_Item_VoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Meeting_Agenda_Item_Vote property can only contain items of type \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Meeting_Agenda_Item_Vote value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType[] $committee_Meeting_Agenda_Item_Vote
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setCommittee_Meeting_Agenda_Item_Vote(array $committee_Meeting_Agenda_Item_Vote = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Meeting_Agenda_Item_VoteArrayErrorMessage = self::validateCommittee_Meeting_Agenda_Item_VoteForArrayConstraintsFromSetCommittee_Meeting_Agenda_Item_Vote($committee_Meeting_Agenda_Item_Vote))) {
            throw new \InvalidArgumentException($committee_Meeting_Agenda_Item_VoteArrayErrorMessage, __LINE__);
        }
        $this->Committee_Meeting_Agenda_Item_Vote = $committee_Meeting_Agenda_Item_Vote;
        return $this;
    }
    /**
     * Add item to Committee_Meeting_Agenda_Item_Vote value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType $item
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function addToCommittee_Meeting_Agenda_Item_Vote(\WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Meeting_Agenda_Item_Vote property can only contain items of type \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Meeting_Agenda_Item_Vote[] = $item;
        return $this;
    }
    /**
     * Get Delete_Only value
     * @return bool|null
     */
    public function getDelete_Only()
    {
        return $this->Delete_Only;
    }
    /**
     * Set Delete_Only value
     * @param bool $delete_Only
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setDelete_Only($delete_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete_Only) && !is_bool($delete_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete_Only, true), gettype($delete_Only)), __LINE__);
        }
        $this->Delete_Only = $delete_Only;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Data_SubeditType
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
