<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Meeting_Agenda_Item_Attachment_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for Committee Meeting Agenda Item Attachment
 * @subpackage Structs
 */
class Committee_Meeting_Agenda_Item_Attachment_DataType extends AbstractStructBase
{
    /**
     * The Attachment_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to agenda item attachment
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentObjectType
     */
    public $Attachment_Reference;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Agenda item attachment ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Filename
     * Meta information extracted from the WSDL
     * - documentation: The name of the worker document file. | Filename for the attachment. | Text attribute identifying Filename of the Attachment. | Attachment filename | Attachment Filename | Name of file uploaded
     * - base: xsd:string
     * - maxLength: 255
     * - maxOccurs: 1
     * @var string
     */
    public $Filename;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: Attachment comment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The File
     * Meta information extracted from the WSDL
     * - documentation: File
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $File;
    /**
     * Constructor method for Committee_Meeting_Agenda_Item_Attachment_DataType
     * @uses Committee_Meeting_Agenda_Item_Attachment_DataType::setAttachment_Reference()
     * @uses Committee_Meeting_Agenda_Item_Attachment_DataType::setID()
     * @uses Committee_Meeting_Agenda_Item_Attachment_DataType::setFilename()
     * @uses Committee_Meeting_Agenda_Item_Attachment_DataType::setComment()
     * @uses Committee_Meeting_Agenda_Item_Attachment_DataType::setFile()
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentObjectType $attachment_Reference
     * @param string $iD
     * @param string $filename
     * @param string $comment
     * @param string $file
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentObjectType $attachment_Reference = null, $iD = null, $filename = null, $comment = null, $file = null)
    {
        $this
            ->setAttachment_Reference($attachment_Reference)
            ->setID($iD)
            ->setFilename($filename)
            ->setComment($comment)
            ->setFile($file);
    }
    /**
     * Get Attachment_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentObjectType|null
     */
    public function getAttachment_Reference()
    {
        return $this->Attachment_Reference;
    }
    /**
     * Set Attachment_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentObjectType $attachment_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Attachment_DataType
     */
    public function setAttachment_Reference(\WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_AttachmentObjectType $attachment_Reference = null)
    {
        $this->Attachment_Reference = $attachment_Reference;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Attachment_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Filename value
     * @return string|null
     */
    public function getFilename()
    {
        return $this->Filename;
    }
    /**
     * Set Filename value
     * @param string $filename
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Attachment_DataType
     */
    public function setFilename($filename = null)
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($filename) && mb_strlen($filename) > 255) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen($filename)), __LINE__);
        }
        $this->Filename = $filename;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Attachment_DataType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
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
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Attachment_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Agenda_Item_Attachment_DataType
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
