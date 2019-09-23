<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attachment_WWS_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Attachment WWS Data element
 * @subpackage Structs
 */
class Attachment_WWS_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying a unique ID for Attachment.
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
     * The File_Content
     * Meta information extracted from the WSDL
     * - documentation: File content in binary format.
     * - maxOccurs: 1
     * @var string
     */
    public $File_Content;
    /**
     * The Mime_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Mime Type Reference
     * - minOccurs: 0
     * @var \StructType\Mime_TypeObjectType
     */
    public $Mime_Type_Reference;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: Comment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * Constructor method for Attachment_WWS_DataType
     * @uses Attachment_WWS_DataType::setID()
     * @uses Attachment_WWS_DataType::setFilename()
     * @uses Attachment_WWS_DataType::setFile_Content()
     * @uses Attachment_WWS_DataType::setMime_Type_Reference()
     * @uses Attachment_WWS_DataType::setComment()
     * @param string $iD
     * @param string $filename
     * @param string $file_Content
     * @param \StructType\Mime_TypeObjectType $mime_Type_Reference
     * @param string $comment
     */
    public function __construct($iD = null, $filename = null, $file_Content = null, \StructType\Mime_TypeObjectType $mime_Type_Reference = null, $comment = null)
    {
        $this
            ->setID($iD)
            ->setFilename($filename)
            ->setFile_Content($file_Content)
            ->setMime_Type_Reference($mime_Type_Reference)
            ->setComment($comment);
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
     * @return \StructType\Attachment_WWS_DataType
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
     * @return \StructType\Attachment_WWS_DataType
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
     * Get File_Content value
     * @return string|null
     */
    public function getFile_Content()
    {
        return $this->File_Content;
    }
    /**
     * Set File_Content value
     * @param string $file_Content
     * @return \StructType\Attachment_WWS_DataType
     */
    public function setFile_Content($file_Content = null)
    {
        // validation for constraint: string
        if (!is_null($file_Content) && !is_string($file_Content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($file_Content, true), gettype($file_Content)), __LINE__);
        }
        $this->File_Content = $file_Content;
        return $this;
    }
    /**
     * Get Mime_Type_Reference value
     * @return \StructType\Mime_TypeObjectType|null
     */
    public function getMime_Type_Reference()
    {
        return $this->Mime_Type_Reference;
    }
    /**
     * Set Mime_Type_Reference value
     * @param \StructType\Mime_TypeObjectType $mime_Type_Reference
     * @return \StructType\Attachment_WWS_DataType
     */
    public function setMime_Type_Reference(\StructType\Mime_TypeObjectType $mime_Type_Reference = null)
    {
        $this->Mime_Type_Reference = $mime_Type_Reference;
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
     * @return \StructType\Attachment_WWS_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Attachment_WWS_DataType
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
