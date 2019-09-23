<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Former_Worker_Document_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response Element for Put Former Worker Attachment
 * @subpackage Structs
 */
class Put_Former_Worker_Document_ResponseType extends AbstractStructBase
{
    /**
     * The Former_Worker_Attachment_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Former Worker Attachment
     * - minOccurs: 0
     * @var \StructType\Former_Worker_AttachmentObjectType
     */
    public $Former_Worker_Attachment_Reference;
    /**
     * The Former_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the former worker
     * - minOccurs: 0
     * @var \StructType\Former_WorkerObjectType
     */
    public $Former_Worker_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Former_Worker_Document_ResponseType
     * @uses Put_Former_Worker_Document_ResponseType::setFormer_Worker_Attachment_Reference()
     * @uses Put_Former_Worker_Document_ResponseType::setFormer_Worker_Reference()
     * @uses Put_Former_Worker_Document_ResponseType::setVersion()
     * @param \StructType\Former_Worker_AttachmentObjectType $former_Worker_Attachment_Reference
     * @param \StructType\Former_WorkerObjectType $former_Worker_Reference
     * @param string $version
     */
    public function __construct(\StructType\Former_Worker_AttachmentObjectType $former_Worker_Attachment_Reference = null, \StructType\Former_WorkerObjectType $former_Worker_Reference = null, $version = null)
    {
        $this
            ->setFormer_Worker_Attachment_Reference($former_Worker_Attachment_Reference)
            ->setFormer_Worker_Reference($former_Worker_Reference)
            ->setVersion($version);
    }
    /**
     * Get Former_Worker_Attachment_Reference value
     * @return \StructType\Former_Worker_AttachmentObjectType|null
     */
    public function getFormer_Worker_Attachment_Reference()
    {
        return $this->Former_Worker_Attachment_Reference;
    }
    /**
     * Set Former_Worker_Attachment_Reference value
     * @param \StructType\Former_Worker_AttachmentObjectType $former_Worker_Attachment_Reference
     * @return \StructType\Put_Former_Worker_Document_ResponseType
     */
    public function setFormer_Worker_Attachment_Reference(\StructType\Former_Worker_AttachmentObjectType $former_Worker_Attachment_Reference = null)
    {
        $this->Former_Worker_Attachment_Reference = $former_Worker_Attachment_Reference;
        return $this;
    }
    /**
     * Get Former_Worker_Reference value
     * @return \StructType\Former_WorkerObjectType|null
     */
    public function getFormer_Worker_Reference()
    {
        return $this->Former_Worker_Reference;
    }
    /**
     * Set Former_Worker_Reference value
     * @param \StructType\Former_WorkerObjectType $former_Worker_Reference
     * @return \StructType\Put_Former_Worker_Document_ResponseType
     */
    public function setFormer_Worker_Reference(\StructType\Former_WorkerObjectType $former_Worker_Reference = null)
    {
        $this->Former_Worker_Reference = $former_Worker_Reference;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Put_Former_Worker_Document_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Put_Former_Worker_Document_ResponseType
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
