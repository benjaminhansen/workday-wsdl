<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_Worker_Attachment_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference for Former worker attachment request
 * @subpackage Structs
 */
class Former_Worker_Attachment_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Former_Worker_Document_Reference
     * Meta information extracted from the WSDL
     * - documentation: Former Worker Document Reference
     * - maxOccurs: unbounded
     * @var \StructType\Former_Worker_AttachmentObjectType[]
     */
    public $Former_Worker_Document_Reference;
    /**
     * Constructor method for Former_Worker_Attachment_Request_ReferencesType
     * @uses Former_Worker_Attachment_Request_ReferencesType::setFormer_Worker_Document_Reference()
     * @param \StructType\Former_Worker_AttachmentObjectType[] $former_Worker_Document_Reference
     */
    public function __construct(array $former_Worker_Document_Reference = array())
    {
        $this
            ->setFormer_Worker_Document_Reference($former_Worker_Document_Reference);
    }
    /**
     * Get Former_Worker_Document_Reference value
     * @return \StructType\Former_Worker_AttachmentObjectType[]|null
     */
    public function getFormer_Worker_Document_Reference()
    {
        return $this->Former_Worker_Document_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setFormer_Worker_Document_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormer_Worker_Document_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormer_Worker_Document_ReferenceForArrayConstraintsFromSetFormer_Worker_Document_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $former_Worker_Attachment_Request_ReferencesTypeFormer_Worker_Document_ReferenceItem) {
            // validation for constraint: itemType
            if (!$former_Worker_Attachment_Request_ReferencesTypeFormer_Worker_Document_ReferenceItem instanceof \StructType\Former_Worker_AttachmentObjectType) {
                $invalidValues[] = is_object($former_Worker_Attachment_Request_ReferencesTypeFormer_Worker_Document_ReferenceItem) ? get_class($former_Worker_Attachment_Request_ReferencesTypeFormer_Worker_Document_ReferenceItem) : sprintf('%s(%s)', gettype($former_Worker_Attachment_Request_ReferencesTypeFormer_Worker_Document_ReferenceItem), var_export($former_Worker_Attachment_Request_ReferencesTypeFormer_Worker_Document_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Former_Worker_Document_Reference property can only contain items of type \StructType\Former_Worker_AttachmentObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Former_Worker_Document_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Former_Worker_AttachmentObjectType[] $former_Worker_Document_Reference
     * @return \StructType\Former_Worker_Attachment_Request_ReferencesType
     */
    public function setFormer_Worker_Document_Reference(array $former_Worker_Document_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($former_Worker_Document_ReferenceArrayErrorMessage = self::validateFormer_Worker_Document_ReferenceForArrayConstraintsFromSetFormer_Worker_Document_Reference($former_Worker_Document_Reference))) {
            throw new \InvalidArgumentException($former_Worker_Document_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Former_Worker_Document_Reference = $former_Worker_Document_Reference;
        return $this;
    }
    /**
     * Add item to Former_Worker_Document_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Former_Worker_AttachmentObjectType $item
     * @return \StructType\Former_Worker_Attachment_Request_ReferencesType
     */
    public function addToFormer_Worker_Document_Reference(\StructType\Former_Worker_AttachmentObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Former_Worker_AttachmentObjectType) {
            throw new \InvalidArgumentException(sprintf('The Former_Worker_Document_Reference property can only contain items of type \StructType\Former_Worker_AttachmentObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Former_Worker_Document_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Former_Worker_Attachment_Request_ReferencesType
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
