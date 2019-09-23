<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business_Process_Attachment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element for the attachments pertaining to a Event entered through a web service.
 * @subpackage Structs
 */
class Business_Process_Attachment_DataType extends AbstractStructBase
{
    /**
     * The File_Name
     * Meta information extracted from the WSDL
     * - documentation: Attachment Filename | Filename for the attachment.
     * - base: xsd:string
     * - maxLength: 255
     * - maxOccurs: 1
     * @var string
     */
    public $File_Name;
    /**
     * The Event_Attachment_Description
     * Meta information extracted from the WSDL
     * - documentation: Free form text comment about the attachment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Event_Attachment_Description;
    /**
     * The Event_Attachment_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: Category of attachment.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Event_Attachment_CategoryObjectType
     */
    public $Event_Attachment_Category_Reference;
    /**
     * The File
     * Meta information extracted from the WSDL
     * - documentation: Binary file contents.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $File;
    /**
     * The Content_Type
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Content Type of the document. | Text attribute identifying Content Type of the Attachment.
     * - base: xsd:string
     * - maxLength: 80
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Content_Type;
    /**
     * Constructor method for Business_Process_Attachment_DataType
     * @uses Business_Process_Attachment_DataType::setFile_Name()
     * @uses Business_Process_Attachment_DataType::setEvent_Attachment_Description()
     * @uses Business_Process_Attachment_DataType::setEvent_Attachment_Category_Reference()
     * @uses Business_Process_Attachment_DataType::setFile()
     * @uses Business_Process_Attachment_DataType::setContent_Type()
     * @param string $file_Name
     * @param string $event_Attachment_Description
     * @param \WorkdayWsdl\\StructType\Event_Attachment_CategoryObjectType $event_Attachment_Category_Reference
     * @param string $file
     * @param string $content_Type
     */
    public function __construct($file_Name = null, $event_Attachment_Description = null, \WorkdayWsdl\\StructType\Event_Attachment_CategoryObjectType $event_Attachment_Category_Reference = null, $file = null, $content_Type = null)
    {
        $this
            ->setFile_Name($file_Name)
            ->setEvent_Attachment_Description($event_Attachment_Description)
            ->setEvent_Attachment_Category_Reference($event_Attachment_Category_Reference)
            ->setFile($file)
            ->setContent_Type($content_Type);
    }
    /**
     * Get File_Name value
     * @return string|null
     */
    public function getFile_Name()
    {
        return $this->File_Name;
    }
    /**
     * Set File_Name value
     * @param string $file_Name
     * @return \WorkdayWsdl\\StructType\Business_Process_Attachment_DataType
     */
    public function setFile_Name($file_Name = null)
    {
        // validation for constraint: string
        if (!is_null($file_Name) && !is_string($file_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($file_Name, true), gettype($file_Name)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($file_Name) && mb_strlen($file_Name) > 255) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen($file_Name)), __LINE__);
        }
        $this->File_Name = $file_Name;
        return $this;
    }
    /**
     * Get Event_Attachment_Description value
     * @return string|null
     */
    public function getEvent_Attachment_Description()
    {
        return $this->Event_Attachment_Description;
    }
    /**
     * Set Event_Attachment_Description value
     * @param string $event_Attachment_Description
     * @return \WorkdayWsdl\\StructType\Business_Process_Attachment_DataType
     */
    public function setEvent_Attachment_Description($event_Attachment_Description = null)
    {
        // validation for constraint: string
        if (!is_null($event_Attachment_Description) && !is_string($event_Attachment_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($event_Attachment_Description, true), gettype($event_Attachment_Description)), __LINE__);
        }
        $this->Event_Attachment_Description = $event_Attachment_Description;
        return $this;
    }
    /**
     * Get Event_Attachment_Category_Reference value
     * @return \WorkdayWsdl\\StructType\Event_Attachment_CategoryObjectType|null
     */
    public function getEvent_Attachment_Category_Reference()
    {
        return $this->Event_Attachment_Category_Reference;
    }
    /**
     * Set Event_Attachment_Category_Reference value
     * @param \WorkdayWsdl\\StructType\Event_Attachment_CategoryObjectType $event_Attachment_Category_Reference
     * @return \WorkdayWsdl\\StructType\Business_Process_Attachment_DataType
     */
    public function setEvent_Attachment_Category_Reference(\WorkdayWsdl\\StructType\Event_Attachment_CategoryObjectType $event_Attachment_Category_Reference = null)
    {
        $this->Event_Attachment_Category_Reference = $event_Attachment_Category_Reference;
        return $this;
    }
    /**
     * Get File value
     * @return string|null
     */
    public function getFile()
    {
        return $this->File;
    }
    /**
     * Set File value
     * @param string $file
     * @return \WorkdayWsdl\\StructType\Business_Process_Attachment_DataType
     */
    public function setFile($file = null)
    {
        // validation for constraint: string
        if (!is_null($file) && !is_string($file)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($file, true), gettype($file)), __LINE__);
        }
        $this->File = $file;
        return $this;
    }
    /**
     * Get Content_Type value
     * @return string|null
     */
    public function getContent_Type()
    {
        return $this->Content_Type;
    }
    /**
     * Set Content_Type value
     * @param string $content_Type
     * @return \WorkdayWsdl\\StructType\Business_Process_Attachment_DataType
     */
    public function setContent_Type($content_Type = null)
    {
        // validation for constraint: string
        if (!is_null($content_Type) && !is_string($content_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content_Type, true), gettype($content_Type)), __LINE__);
        }
        // validation for constraint: maxLength(80)
        if (!is_null($content_Type) && mb_strlen($content_Type) > 80) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 80', mb_strlen($content_Type)), __LINE__);
        }
        $this->Content_Type = $content_Type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Business_Process_Attachment_DataType
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
