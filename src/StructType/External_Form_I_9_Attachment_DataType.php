<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_Attachment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request element containing all necessary information for Form I-9 Attachment to assign to the Worker.
 * @subpackage Structs
 */
class External_Form_I_9_Attachment_DataType extends AbstractStructBase
{
    /**
     * The External_Form_I_9_Attachment_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Form I-9 Attachment to be assigned to the Worker's Form I-9.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Form_I_9_AttachmentObjectType
     */
    public $External_Form_I_9_Attachment_Reference;
    /**
     * The Attachment_WWS_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Attachment_WWS_DataType[]
     */
    public $Attachment_WWS_Data;
    /**
     * Constructor method for External_Form_I-9_Attachment_DataType
     * @uses External_Form_I_9_Attachment_DataType::setExternal_Form_I_9_Attachment_Reference()
     * @uses External_Form_I_9_Attachment_DataType::setAttachment_WWS_Data()
     * @param \WorkdayWsdl\\StructType\Form_I_9_AttachmentObjectType $external_Form_I_9_Attachment_Reference
     * @param \WorkdayWsdl\\StructType\Attachment_WWS_DataType[] $attachment_WWS_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Form_I_9_AttachmentObjectType $external_Form_I_9_Attachment_Reference = null, array $attachment_WWS_Data = array())
    {
        $this
            ->setExternal_Form_I_9_Attachment_Reference($external_Form_I_9_Attachment_Reference)
            ->setAttachment_WWS_Data($attachment_WWS_Data);
    }
    /**
     * Get external_Form_I_Attachment_Reference value
     * @return external_Form_I_Attachment_Reference
     */
    public function getExternal_Form_I_9_Attachment_Reference()
    {
        return $this->{'External_Form_I-9_Attachment_Reference'};
    }
    /**
     * Set external_Form_I_Attachment_Reference value
     * @param external_Form_I_Attachment_Reference $external_Form_I_Attachment_Reference
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType
     */
    public function setExternal_Form_I_9_Attachment_Reference(\WorkdayWsdl\\StructType\Form_I_9_AttachmentObjectType $external_Form_I_9_Attachment_Reference = null)
    {
        $this->External_Form_I_9_Attachment_Reference = $this->{'External_Form_I-9_Attachment_Reference'} = $external_Form_I_9_Attachment_Reference;
        return $this;
    }
    /**
     * Get Attachment_WWS_Data value
     * @return \WorkdayWsdl\\StructType\Attachment_WWS_DataType[]|null
     */
    public function getAttachment_WWS_Data()
    {
        return $this->Attachment_WWS_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAttachment_WWS_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttachment_WWS_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttachment_WWS_DataForArrayConstraintsFromSetAttachment_WWS_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $external_Form_I_9_Attachment_DataTypeAttachment_WWS_DataItem) {
            // validation for constraint: itemType
            if (!$external_Form_I_9_Attachment_DataTypeAttachment_WWS_DataItem instanceof \WorkdayWsdl\\StructType\Attachment_WWS_DataType) {
                $invalidValues[] = is_object($external_Form_I_9_Attachment_DataTypeAttachment_WWS_DataItem) ? get_class($external_Form_I_9_Attachment_DataTypeAttachment_WWS_DataItem) : sprintf('%s(%s)', gettype($external_Form_I_9_Attachment_DataTypeAttachment_WWS_DataItem), var_export($external_Form_I_9_Attachment_DataTypeAttachment_WWS_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attachment_WWS_Data property can only contain items of type \WorkdayWsdl\\StructType\Attachment_WWS_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Attachment_WWS_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Attachment_WWS_DataType[] $attachment_WWS_Data
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType
     */
    public function setAttachment_WWS_Data(array $attachment_WWS_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($attachment_WWS_DataArrayErrorMessage = self::validateAttachment_WWS_DataForArrayConstraintsFromSetAttachment_WWS_Data($attachment_WWS_Data))) {
            throw new \InvalidArgumentException($attachment_WWS_DataArrayErrorMessage, __LINE__);
        }
        $this->Attachment_WWS_Data = $attachment_WWS_Data;
        return $this;
    }
    /**
     * Add item to Attachment_WWS_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Attachment_WWS_DataType $item
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType
     */
    public function addToAttachment_WWS_Data(\WorkdayWsdl\\StructType\Attachment_WWS_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Attachment_WWS_DataType) {
            throw new \InvalidArgumentException(sprintf('The Attachment_WWS_Data property can only contain items of type \WorkdayWsdl\\StructType\Attachment_WWS_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Attachment_WWS_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType
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
