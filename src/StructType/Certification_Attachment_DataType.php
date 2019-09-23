<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Certification_Attachment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Attachments for Certification.
 * @subpackage Structs
 */
class Certification_Attachment_DataType extends AbstractStructBase
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
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: Free form text comment about the attachment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
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
     * The Document_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: Category of attachment.
     * @var \StructType\Document_Category__All_ObjectType
     */
    public $Document_Category_Reference;
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
     * Constructor method for Certification_Attachment_DataType
     * @uses Certification_Attachment_DataType::setFile_Name()
     * @uses Certification_Attachment_DataType::setComment()
     * @uses Certification_Attachment_DataType::setFile()
     * @uses Certification_Attachment_DataType::setDocument_Category_Reference()
     * @uses Certification_Attachment_DataType::setContent_Type()
     * @param string $file_Name
     * @param string $comment
     * @param string $file
     * @param \StructType\Document_Category__All_ObjectType $document_Category_Reference
     * @param string $content_Type
     */
    public function __construct($file_Name = null, $comment = null, $file = null, \StructType\Document_Category__All_ObjectType $document_Category_Reference = null, $content_Type = null)
    {
        $this
            ->setFile_Name($file_Name)
            ->setComment($comment)
            ->setFile($file)
            ->setDocument_Category_Reference($document_Category_Reference)
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
     * @return \StructType\Certification_Attachment_DataType
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
     * @return \StructType\Certification_Attachment_DataType
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
     * @return \StructType\Certification_Attachment_DataType
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
     * Get Document_Category_Reference value
     * @return \StructType\Document_Category__All_ObjectType|null
     */
    public function getDocument_Category_Reference()
    {
        return $this->Document_Category_Reference;
    }
    /**
     * Set Document_Category_Reference value
     * @param \StructType\Document_Category__All_ObjectType $document_Category_Reference
     * @return \StructType\Certification_Attachment_DataType
     */
    public function setDocument_Category_Reference(\StructType\Document_Category__All_ObjectType $document_Category_Reference = null)
    {
        $this->Document_Category_Reference = $document_Category_Reference;
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
     * @return \StructType\Certification_Attachment_DataType
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
     * @return \StructType\Certification_Attachment_DataType
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
