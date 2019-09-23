<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_Worker_Attachment_Request_Criteria__EL_Type
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Criteria for Get Former Worker Documents
 * @subpackage Structs
 */
class Former_Worker_Attachment_Request_Criteria__EL_Type extends AbstractStructBase
{
    /**
     * The Former_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the former worker
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Former_WorkerObjectType[]
     */
    public $Former_Worker_Reference;
    /**
     * Constructor method for Former_Worker_Attachment_Request_Criteria__EL_Type
     * @uses Former_Worker_Attachment_Request_Criteria__EL_Type::setFormer_Worker_Reference()
     * @param \WorkdayWsdl\\StructType\Former_WorkerObjectType[] $former_Worker_Reference
     */
    public function __construct(array $former_Worker_Reference = array())
    {
        $this
            ->setFormer_Worker_Reference($former_Worker_Reference);
    }
    /**
     * Get Former_Worker_Reference value
     * @return \WorkdayWsdl\\StructType\Former_WorkerObjectType[]|null
     */
    public function getFormer_Worker_Reference()
    {
        return $this->Former_Worker_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setFormer_Worker_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormer_Worker_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormer_Worker_ReferenceForArrayConstraintsFromSetFormer_Worker_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $former_Worker_Attachment_Request_Criteria_EL_TypeFormer_Worker_ReferenceItem) {
            // validation for constraint: itemType
            if (!$former_Worker_Attachment_Request_Criteria_EL_TypeFormer_Worker_ReferenceItem instanceof \WorkdayWsdl\\StructType\Former_WorkerObjectType) {
                $invalidValues[] = is_object($former_Worker_Attachment_Request_Criteria_EL_TypeFormer_Worker_ReferenceItem) ? get_class($former_Worker_Attachment_Request_Criteria_EL_TypeFormer_Worker_ReferenceItem) : sprintf('%s(%s)', gettype($former_Worker_Attachment_Request_Criteria_EL_TypeFormer_Worker_ReferenceItem), var_export($former_Worker_Attachment_Request_Criteria_EL_TypeFormer_Worker_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Former_Worker_Reference property can only contain items of type \WorkdayWsdl\\StructType\Former_WorkerObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Former_Worker_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Former_WorkerObjectType[] $former_Worker_Reference
     * @return \WorkdayWsdl\\StructType\Former_Worker_Attachment_Request_Criteria__EL_Type
     */
    public function setFormer_Worker_Reference(array $former_Worker_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($former_Worker_ReferenceArrayErrorMessage = self::validateFormer_Worker_ReferenceForArrayConstraintsFromSetFormer_Worker_Reference($former_Worker_Reference))) {
            throw new \InvalidArgumentException($former_Worker_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Former_Worker_Reference = $former_Worker_Reference;
        return $this;
    }
    /**
     * Add item to Former_Worker_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Former_WorkerObjectType $item
     * @return \WorkdayWsdl\\StructType\Former_Worker_Attachment_Request_Criteria__EL_Type
     */
    public function addToFormer_Worker_Reference(\WorkdayWsdl\\StructType\Former_WorkerObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Former_WorkerObjectType) {
            throw new \InvalidArgumentException(sprintf('The Former_Worker_Reference property can only contain items of type \WorkdayWsdl\\StructType\Former_WorkerObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Former_Worker_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Former_Worker_Attachment_Request_Criteria__EL_Type
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
