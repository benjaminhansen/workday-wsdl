<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Attachment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the Committee Attachment
 * @subpackage Structs
 */
class Committee_Attachment_DataType extends AbstractStructBase
{
    /**
     * The Committee_Attachment_Reference
     * Meta information extracted from the WSDL
     * - documentation: Attachment Reference to be used for updating the attachment
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_AttachmentObjectType
     */
    public $Committee_Attachment_Reference;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID can be set here
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - documentation: The filename associated to the attachment
     * - base: xsd:string
     * - maxLength: 255
     * - maxOccurs: 1
     * @var string
     */
    public $FileName;
    /**
     * The File
     * Meta information extracted from the WSDL
     * - documentation: The filedata associated to the attachment in Base64 encoding
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $File;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: The comment associated to the attachment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * Constructor method for Committee_Attachment_DataType
     * @uses Committee_Attachment_DataType::setCommittee_Attachment_Reference()
     * @uses Committee_Attachment_DataType::setID()
     * @uses Committee_Attachment_DataType::setFileName()
     * @uses Committee_Attachment_DataType::setFile()
     * @uses Committee_Attachment_DataType::setComment()
     * @param \WorkdayWsdl\\StructType\Committee_AttachmentObjectType $committee_Attachment_Reference
     * @param string $iD
     * @param string $fileName
     * @param string $file
     * @param string $comment
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_AttachmentObjectType $committee_Attachment_Reference = null, $iD = null, $fileName = null, $file = null, $comment = null)
    {
        $this
            ->setCommittee_Attachment_Reference($committee_Attachment_Reference)
            ->setID($iD)
            ->setFileName($fileName)
            ->setFile($file)
            ->setComment($comment);
    }
    /**
     * Get Committee_Attachment_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_AttachmentObjectType|null
     */
    public function getCommittee_Attachment_Reference()
    {
        return $this->Committee_Attachment_Reference;
    }
    /**
     * Set Committee_Attachment_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_AttachmentObjectType $committee_Attachment_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Attachment_DataType
     */
    public function setCommittee_Attachment_Reference(\WorkdayWsdl\\StructType\Committee_AttachmentObjectType $committee_Attachment_Reference = null)
    {
        $this->Committee_Attachment_Reference = $committee_Attachment_Reference;
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
     * @return \WorkdayWsdl\\StructType\Committee_Attachment_DataType
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
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \WorkdayWsdl\\StructType\Committee_Attachment_DataType
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($fileName) && mb_strlen($fileName) > 255) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
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
     * @return \WorkdayWsdl\\StructType\Committee_Attachment_DataType
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
     * @return \WorkdayWsdl\\StructType\Committee_Attachment_DataType
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
     * @return \WorkdayWsdl\\StructType\Committee_Attachment_DataType
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
