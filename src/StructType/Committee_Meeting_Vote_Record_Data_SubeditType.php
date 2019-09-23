<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Meeting_Vote_Record_Data_SubeditType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for Committee Meeting Vote Record
 * @subpackage Structs
 */
class Committee_Meeting_Vote_Record_Data_SubeditType extends AbstractStructBase
{
    /**
     * The Agenda_Item_Vote_Record_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Meeting Vote Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Vote_RecordObjectType
     */
    public $Agenda_Item_Vote_Record_Reference;
    /**
     * The Vote_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Meeting Vote Status Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Vote_StatusObjectType
     */
    public $Vote_Status_Reference;
    /**
     * The Vote_Count
     * Meta information extracted from the WSDL
     * - documentation: Vote Count
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Vote_Count;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether this web service request is only adding vote data or both adding and editing vote data.
     * @var bool
     */
    public $Add_Only;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Specifies that the request if for deleting vote data
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Committee_Meeting_Vote_Record_Data_SubeditType
     * @uses Committee_Meeting_Vote_Record_Data_SubeditType::setAgenda_Item_Vote_Record_Reference()
     * @uses Committee_Meeting_Vote_Record_Data_SubeditType::setVote_Status_Reference()
     * @uses Committee_Meeting_Vote_Record_Data_SubeditType::setVote_Count()
     * @uses Committee_Meeting_Vote_Record_Data_SubeditType::setAdd_Only()
     * @uses Committee_Meeting_Vote_Record_Data_SubeditType::setDelete()
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Vote_RecordObjectType $agenda_Item_Vote_Record_Reference
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Vote_StatusObjectType $vote_Status_Reference
     * @param float $vote_Count
     * @param bool $add_Only
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_Meeting_Vote_RecordObjectType $agenda_Item_Vote_Record_Reference = null, \WorkdayWsdl\\StructType\Committee_Meeting_Vote_StatusObjectType $vote_Status_Reference = null, $vote_Count = null, $add_Only = null, $delete = null)
    {
        $this
            ->setAgenda_Item_Vote_Record_Reference($agenda_Item_Vote_Record_Reference)
            ->setVote_Status_Reference($vote_Status_Reference)
            ->setVote_Count($vote_Count)
            ->setAdd_Only($add_Only)
            ->setDelete($delete);
    }
    /**
     * Get Agenda_Item_Vote_Record_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Vote_RecordObjectType|null
     */
    public function getAgenda_Item_Vote_Record_Reference()
    {
        return $this->Agenda_Item_Vote_Record_Reference;
    }
    /**
     * Set Agenda_Item_Vote_Record_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Vote_RecordObjectType $agenda_Item_Vote_Record_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType
     */
    public function setAgenda_Item_Vote_Record_Reference(\WorkdayWsdl\\StructType\Committee_Meeting_Vote_RecordObjectType $agenda_Item_Vote_Record_Reference = null)
    {
        $this->Agenda_Item_Vote_Record_Reference = $agenda_Item_Vote_Record_Reference;
        return $this;
    }
    /**
     * Get Vote_Status_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Vote_StatusObjectType|null
     */
    public function getVote_Status_Reference()
    {
        return $this->Vote_Status_Reference;
    }
    /**
     * Set Vote_Status_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Vote_StatusObjectType $vote_Status_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType
     */
    public function setVote_Status_Reference(\WorkdayWsdl\\StructType\Committee_Meeting_Vote_StatusObjectType $vote_Status_Reference = null)
    {
        $this->Vote_Status_Reference = $vote_Status_Reference;
        return $this;
    }
    /**
     * Get Vote_Count value
     * @return float|null
     */
    public function getVote_Count()
    {
        return $this->Vote_Count;
    }
    /**
     * Set Vote_Count value
     * @param float $vote_Count
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType
     */
    public function setVote_Count($vote_Count = null)
    {
        // validation for constraint: float
        if (!is_null($vote_Count) && !(is_float($vote_Count) || is_numeric($vote_Count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vote_Count, true), gettype($vote_Count)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($vote_Count) && mb_strlen(mb_substr($vote_Count, mb_strpos($vote_Count, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($vote_Count, true), mb_strlen(mb_substr($vote_Count, mb_strpos($vote_Count, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($vote_Count) && $vote_Count < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($vote_Count, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($vote_Count) && mb_strlen(preg_replace('/(\D)/', '', $vote_Count)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($vote_Count, true), mb_strlen(preg_replace('/(\D)/', '', $vote_Count))), __LINE__);
        }
        $this->Vote_Count = $vote_Count;
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
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType
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
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Vote_Record_Data_SubeditType
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
