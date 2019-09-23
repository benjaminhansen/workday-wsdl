<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_Worker_Attachment_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Former Worker Document Response Data containing the retrieved Worker Document information.
 * @subpackage Structs
 */
class Former_Worker_Attachment_Response_DataType extends AbstractStructBase
{
    /**
     * The Former_Worker_Document
     * Meta information extracted from the WSDL
     * - documentation: Contains the retrieved Former Worker Document information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Former_Worker_AttachmentType[]
     */
    public $Former_Worker_Document;
    /**
     * Constructor method for Former_Worker_Attachment_Response_DataType
     * @uses Former_Worker_Attachment_Response_DataType::setFormer_Worker_Document()
     * @param \WorkdayWsdl\\StructType\Former_Worker_AttachmentType[] $former_Worker_Document
     */
    public function __construct(array $former_Worker_Document = array())
    {
        $this
            ->setFormer_Worker_Document($former_Worker_Document);
    }
    /**
     * Get Former_Worker_Document value
     * @return \WorkdayWsdl\\StructType\Former_Worker_AttachmentType[]|null
     */
    public function getFormer_Worker_Document()
    {
        return $this->Former_Worker_Document;
    }
    /**
     * This method is responsible for validating the values passed to the setFormer_Worker_Document method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormer_Worker_Document method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormer_Worker_DocumentForArrayConstraintsFromSetFormer_Worker_Document(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $former_Worker_Attachment_Response_DataTypeFormer_Worker_DocumentItem) {
            // validation for constraint: itemType
            if (!$former_Worker_Attachment_Response_DataTypeFormer_Worker_DocumentItem instanceof \WorkdayWsdl\\StructType\Former_Worker_AttachmentType) {
                $invalidValues[] = is_object($former_Worker_Attachment_Response_DataTypeFormer_Worker_DocumentItem) ? get_class($former_Worker_Attachment_Response_DataTypeFormer_Worker_DocumentItem) : sprintf('%s(%s)', gettype($former_Worker_Attachment_Response_DataTypeFormer_Worker_DocumentItem), var_export($former_Worker_Attachment_Response_DataTypeFormer_Worker_DocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Former_Worker_Document property can only contain items of type \WorkdayWsdl\\StructType\Former_Worker_AttachmentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Former_Worker_Document value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Former_Worker_AttachmentType[] $former_Worker_Document
     * @return \WorkdayWsdl\\StructType\Former_Worker_Attachment_Response_DataType
     */
    public function setFormer_Worker_Document(array $former_Worker_Document = array())
    {
        // validation for constraint: array
        if ('' !== ($former_Worker_DocumentArrayErrorMessage = self::validateFormer_Worker_DocumentForArrayConstraintsFromSetFormer_Worker_Document($former_Worker_Document))) {
            throw new \InvalidArgumentException($former_Worker_DocumentArrayErrorMessage, __LINE__);
        }
        $this->Former_Worker_Document = $former_Worker_Document;
        return $this;
    }
    /**
     * Add item to Former_Worker_Document value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Former_Worker_AttachmentType $item
     * @return \WorkdayWsdl\\StructType\Former_Worker_Attachment_Response_DataType
     */
    public function addToFormer_Worker_Document(\WorkdayWsdl\\StructType\Former_Worker_AttachmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Former_Worker_AttachmentType) {
            throw new \InvalidArgumentException(sprintf('The Former_Worker_Document property can only contain items of type \WorkdayWsdl\\StructType\Former_Worker_AttachmentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Former_Worker_Document[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Former_Worker_Attachment_Response_DataType
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
