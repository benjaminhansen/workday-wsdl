<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_Worker_AttachmentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the retrieved Former Worker Document information.
 * @subpackage Structs
 */
class Former_Worker_AttachmentType extends AbstractStructBase
{
    /**
     * The Former_Worker_Document_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the former worker document
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Former_Worker_AttachmentObjectType
     */
    public $Former_Worker_Document_Reference;
    /**
     * The Former_Worker_Document_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Former_Worker_Attachment_DataType
     */
    public $Former_Worker_Document_Data;
    /**
     * Constructor method for Former_Worker_AttachmentType
     * @uses Former_Worker_AttachmentType::setFormer_Worker_Document_Reference()
     * @uses Former_Worker_AttachmentType::setFormer_Worker_Document_Data()
     * @param \WorkdayWsdl\\StructType\Former_Worker_AttachmentObjectType $former_Worker_Document_Reference
     * @param \WorkdayWsdl\\StructType\Former_Worker_Attachment_DataType $former_Worker_Document_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Former_Worker_AttachmentObjectType $former_Worker_Document_Reference = null, \WorkdayWsdl\\StructType\Former_Worker_Attachment_DataType $former_Worker_Document_Data = null)
    {
        $this
            ->setFormer_Worker_Document_Reference($former_Worker_Document_Reference)
            ->setFormer_Worker_Document_Data($former_Worker_Document_Data);
    }
    /**
     * Get Former_Worker_Document_Reference value
     * @return \WorkdayWsdl\\StructType\Former_Worker_AttachmentObjectType|null
     */
    public function getFormer_Worker_Document_Reference()
    {
        return $this->Former_Worker_Document_Reference;
    }
    /**
     * Set Former_Worker_Document_Reference value
     * @param \WorkdayWsdl\\StructType\Former_Worker_AttachmentObjectType $former_Worker_Document_Reference
     * @return \WorkdayWsdl\\StructType\Former_Worker_AttachmentType
     */
    public function setFormer_Worker_Document_Reference(\WorkdayWsdl\\StructType\Former_Worker_AttachmentObjectType $former_Worker_Document_Reference = null)
    {
        $this->Former_Worker_Document_Reference = $former_Worker_Document_Reference;
        return $this;
    }
    /**
     * Get Former_Worker_Document_Data value
     * @return \WorkdayWsdl\\StructType\Former_Worker_Attachment_DataType|null
     */
    public function getFormer_Worker_Document_Data()
    {
        return $this->Former_Worker_Document_Data;
    }
    /**
     * Set Former_Worker_Document_Data value
     * @param \WorkdayWsdl\\StructType\Former_Worker_Attachment_DataType $former_Worker_Document_Data
     * @return \WorkdayWsdl\\StructType\Former_Worker_AttachmentType
     */
    public function setFormer_Worker_Document_Data(\WorkdayWsdl\\StructType\Former_Worker_Attachment_DataType $former_Worker_Document_Data = null)
    {
        $this->Former_Worker_Document_Data = $former_Worker_Document_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Former_Worker_AttachmentType
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
