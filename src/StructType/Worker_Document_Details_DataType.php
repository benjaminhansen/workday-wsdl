<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Document_Details_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the details of a worker document.
 * @subpackage Structs
 */
class Worker_Document_Details_DataType extends AbstractStructBase
{
    /**
     * The Document_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: The category that the worker document is for.
     * @var \WorkdayWsdl\\StructType\Document_Category__All_ObjectType
     */
    public $Document_Category_Reference;
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
     * - documentation: A comment about the worker document.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The File
     * Meta information extracted from the WSDL
     * - documentation: The document that was attached for the worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $File;
    /**
     * Constructor method for Worker_Document_Details_DataType
     * @uses Worker_Document_Details_DataType::setDocument_Category_Reference()
     * @uses Worker_Document_Details_DataType::setFilename()
     * @uses Worker_Document_Details_DataType::setComment()
     * @uses Worker_Document_Details_DataType::setFile()
     * @param \WorkdayWsdl\\StructType\Document_Category__All_ObjectType $document_Category_Reference
     * @param string $filename
     * @param string $comment
     * @param string $file
     */
    public function __construct(\WorkdayWsdl\\StructType\Document_Category__All_ObjectType $document_Category_Reference = null, $filename = null, $comment = null, $file = null)
    {
        $this
            ->setDocument_Category_Reference($document_Category_Reference)
            ->setFilename($filename)
            ->setComment($comment)
            ->setFile($file);
    }
    /**
     * Get Document_Category_Reference value
     * @return \WorkdayWsdl\\StructType\Document_Category__All_ObjectType|null
     */
    public function getDocument_Category_Reference()
    {
        return $this->Document_Category_Reference;
    }
    /**
     * Set Document_Category_Reference value
     * @param \WorkdayWsdl\\StructType\Document_Category__All_ObjectType $document_Category_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Document_Details_DataType
     */
    public function setDocument_Category_Reference(\WorkdayWsdl\\StructType\Document_Category__All_ObjectType $document_Category_Reference = null)
    {
        $this->Document_Category_Reference = $document_Category_Reference;
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
     * @return \WorkdayWsdl\\StructType\Worker_Document_Details_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Document_Details_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Document_Details_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Document_Details_DataType
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
