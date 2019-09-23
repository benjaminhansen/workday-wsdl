<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Meeting_Agenda_Item_AttachmentsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Holds Agenda Item Attachment Data
 * @subpackage Structs
 */
class Committee_Meeting_Agenda_Item_AttachmentsType extends AbstractStructBase
{
    /**
     * The Committee_Meeting_Agenda_Item_Attachment_Data
     * Meta information extracted from the WSDL
     * - documentation: Data for agenda item attachments
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Committee_Meeting_Agenda_Item_Attachment_DataType[]
     */
    public $Committee_Meeting_Agenda_Item_Attachment_Data;
    /**
     * Constructor method for Committee_Meeting_Agenda_Item_AttachmentsType
     * @uses Committee_Meeting_Agenda_Item_AttachmentsType::setCommittee_Meeting_Agenda_Item_Attachment_Data()
     * @param \StructType\Committee_Meeting_Agenda_Item_Attachment_DataType[] $committee_Meeting_Agenda_Item_Attachment_Data
     */
    public function __construct(array $committee_Meeting_Agenda_Item_Attachment_Data = array())
    {
        $this
            ->setCommittee_Meeting_Agenda_Item_Attachment_Data($committee_Meeting_Agenda_Item_Attachment_Data);
    }
    /**
     * Get Committee_Meeting_Agenda_Item_Attachment_Data value
     * @return \StructType\Committee_Meeting_Agenda_Item_Attachment_DataType[]|null
     */
    public function getCommittee_Meeting_Agenda_Item_Attachment_Data()
    {
        return $this->Committee_Meeting_Agenda_Item_Attachment_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Meeting_Agenda_Item_Attachment_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Meeting_Agenda_Item_Attachment_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Meeting_Agenda_Item_Attachment_DataForArrayConstraintsFromSetCommittee_Meeting_Agenda_Item_Attachment_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_Agenda_Item_AttachmentsTypeCommittee_Meeting_Agenda_Item_Attachment_DataItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_Agenda_Item_AttachmentsTypeCommittee_Meeting_Agenda_Item_Attachment_DataItem instanceof \StructType\Committee_Meeting_Agenda_Item_Attachment_DataType) {
                $invalidValues[] = is_object($committee_Meeting_Agenda_Item_AttachmentsTypeCommittee_Meeting_Agenda_Item_Attachment_DataItem) ? get_class($committee_Meeting_Agenda_Item_AttachmentsTypeCommittee_Meeting_Agenda_Item_Attachment_DataItem) : sprintf('%s(%s)', gettype($committee_Meeting_Agenda_Item_AttachmentsTypeCommittee_Meeting_Agenda_Item_Attachment_DataItem), var_export($committee_Meeting_Agenda_Item_AttachmentsTypeCommittee_Meeting_Agenda_Item_Attachment_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Meeting_Agenda_Item_Attachment_Data property can only contain items of type \StructType\Committee_Meeting_Agenda_Item_Attachment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Meeting_Agenda_Item_Attachment_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Meeting_Agenda_Item_Attachment_DataType[] $committee_Meeting_Agenda_Item_Attachment_Data
     * @return \StructType\Committee_Meeting_Agenda_Item_AttachmentsType
     */
    public function setCommittee_Meeting_Agenda_Item_Attachment_Data(array $committee_Meeting_Agenda_Item_Attachment_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Meeting_Agenda_Item_Attachment_DataArrayErrorMessage = self::validateCommittee_Meeting_Agenda_Item_Attachment_DataForArrayConstraintsFromSetCommittee_Meeting_Agenda_Item_Attachment_Data($committee_Meeting_Agenda_Item_Attachment_Data))) {
            throw new \InvalidArgumentException($committee_Meeting_Agenda_Item_Attachment_DataArrayErrorMessage, __LINE__);
        }
        $this->Committee_Meeting_Agenda_Item_Attachment_Data = $committee_Meeting_Agenda_Item_Attachment_Data;
        return $this;
    }
    /**
     * Add item to Committee_Meeting_Agenda_Item_Attachment_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Meeting_Agenda_Item_Attachment_DataType $item
     * @return \StructType\Committee_Meeting_Agenda_Item_AttachmentsType
     */
    public function addToCommittee_Meeting_Agenda_Item_Attachment_Data(\StructType\Committee_Meeting_Agenda_Item_Attachment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_Meeting_Agenda_Item_Attachment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Meeting_Agenda_Item_Attachment_Data property can only contain items of type \StructType\Committee_Meeting_Agenda_Item_Attachment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Meeting_Agenda_Item_Attachment_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_Meeting_Agenda_Item_AttachmentsType
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
