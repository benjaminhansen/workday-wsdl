<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Meeting_Agenda_Item_Vote_Data_SubeditType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for Committee Meeting Agenda Item
 * @subpackage Structs
 */
class Committee_Meeting_Agenda_Item_Vote_Data_SubeditType extends AbstractStructBase
{
    /**
     * The Agenda_Item_Vote_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to agenda item votes
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_VoteObjectType
     */
    public $Agenda_Item_Vote_Reference;
    /**
     * The Passing_Vote
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the agenda items passed
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Passing_Vote;
    /**
     * The Committee_Meeting_Vote_Record_Data_Subedit
     * Meta information extracted from the WSDL
     * - documentation: Vote record data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType[]
     */
    public $Committee_Meeting_Vote_Record_Data_Subedit;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the web service request is only adding new agenda items or if the request will be editing existing agenda items.
     * @var bool
     */
    public $Add_Only;
    /**
     * Constructor method for Committee_Meeting_Agenda_Item_Vote_Data_SubeditType
     * @uses Committee_Meeting_Agenda_Item_Vote_Data_SubeditType::setAgenda_Item_Vote_Reference()
     * @uses Committee_Meeting_Agenda_Item_Vote_Data_SubeditType::setPassing_Vote()
     * @uses Committee_Meeting_Agenda_Item_Vote_Data_SubeditType::setCommittee_Meeting_Vote_Record_Data_Subedit()
     * @uses Committee_Meeting_Agenda_Item_Vote_Data_SubeditType::setAdd_Only()
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_VoteObjectType $agenda_Item_Vote_Reference
     * @param bool $passing_Vote
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType[] $committee_Meeting_Vote_Record_Data_Subedit
     * @param bool $add_Only
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_VoteObjectType $agenda_Item_Vote_Reference = null, $passing_Vote = null, array $committee_Meeting_Vote_Record_Data_Subedit = array(), $add_Only = null)
    {
        $this
            ->setAgenda_Item_Vote_Reference($agenda_Item_Vote_Reference)
            ->setPassing_Vote($passing_Vote)
            ->setCommittee_Meeting_Vote_Record_Data_Subedit($committee_Meeting_Vote_Record_Data_Subedit)
            ->setAdd_Only($add_Only);
    }
    /**
     * Get Agenda_Item_Vote_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_VoteObjectType|null
     */
    public function getAgenda_Item_Vote_Reference()
    {
        return $this->Agenda_Item_Vote_Reference;
    }
    /**
     * Set Agenda_Item_Vote_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_VoteObjectType $agenda_Item_Vote_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType
     */
    public function setAgenda_Item_Vote_Reference(\WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_VoteObjectType $agenda_Item_Vote_Reference = null)
    {
        $this->Agenda_Item_Vote_Reference = $agenda_Item_Vote_Reference;
        return $this;
    }
    /**
     * Get Passing_Vote value
     * @return bool|null
     */
    public function getPassing_Vote()
    {
        return $this->Passing_Vote;
    }
    /**
     * Set Passing_Vote value
     * @param bool $passing_Vote
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType
     */
    public function setPassing_Vote($passing_Vote = null)
    {
        // validation for constraint: boolean
        if (!is_null($passing_Vote) && !is_bool($passing_Vote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passing_Vote, true), gettype($passing_Vote)), __LINE__);
        }
        $this->Passing_Vote = $passing_Vote;
        return $this;
    }
    /**
     * Get Committee_Meeting_Vote_Record_Data_Subedit value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType[]|null
     */
    public function getCommittee_Meeting_Vote_Record_Data_Subedit()
    {
        return $this->Committee_Meeting_Vote_Record_Data_Subedit;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Meeting_Vote_Record_Data_Subedit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Meeting_Vote_Record_Data_Subedit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Meeting_Vote_Record_Data_SubeditForArrayConstraintsFromSetCommittee_Meeting_Vote_Record_Data_Subedit(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_Agenda_Item_Vote_Data_SubeditTypeCommittee_Meeting_Vote_Record_Data_SubeditItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_Agenda_Item_Vote_Data_SubeditTypeCommittee_Meeting_Vote_Record_Data_SubeditItem instanceof \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType) {
                $invalidValues[] = is_object($committee_Meeting_Agenda_Item_Vote_Data_SubeditTypeCommittee_Meeting_Vote_Record_Data_SubeditItem) ? get_class($committee_Meeting_Agenda_Item_Vote_Data_SubeditTypeCommittee_Meeting_Vote_Record_Data_SubeditItem) : sprintf('%s(%s)', gettype($committee_Meeting_Agenda_Item_Vote_Data_SubeditTypeCommittee_Meeting_Vote_Record_Data_SubeditItem), var_export($committee_Meeting_Agenda_Item_Vote_Data_SubeditTypeCommittee_Meeting_Vote_Record_Data_SubeditItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Meeting_Vote_Record_Data_Subedit property can only contain items of type \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Meeting_Vote_Record_Data_Subedit value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType[] $committee_Meeting_Vote_Record_Data_Subedit
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType
     */
    public function setCommittee_Meeting_Vote_Record_Data_Subedit(array $committee_Meeting_Vote_Record_Data_Subedit = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Meeting_Vote_Record_Data_SubeditArrayErrorMessage = self::validateCommittee_Meeting_Vote_Record_Data_SubeditForArrayConstraintsFromSetCommittee_Meeting_Vote_Record_Data_Subedit($committee_Meeting_Vote_Record_Data_Subedit))) {
            throw new \InvalidArgumentException($committee_Meeting_Vote_Record_Data_SubeditArrayErrorMessage, __LINE__);
        }
        $this->Committee_Meeting_Vote_Record_Data_Subedit = $committee_Meeting_Vote_Record_Data_Subedit;
        return $this;
    }
    /**
     * Add item to Committee_Meeting_Vote_Record_Data_Subedit value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType $item
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType
     */
    public function addToCommittee_Meeting_Vote_Record_Data_Subedit(\WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Meeting_Vote_Record_Data_Subedit property can only contain items of type \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Meeting_Vote_Record_Data_Subedit[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType
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
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Vote_Data_SubeditType
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
