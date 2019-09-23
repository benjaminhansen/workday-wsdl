<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Former_Worker_Document_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for Put Former Worker Document Request
 * @subpackage Structs
 */
class Put_Former_Worker_Document_RequestType extends AbstractStructBase
{
    /**
     * The Former_Worker_Document_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the former worker document.
     * - minOccurs: 0
     * @var \StructType\Former_Worker_AttachmentObjectType
     */
    public $Former_Worker_Document_Reference;
    /**
     * The Former_Worker_Document_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the details of a former worker document.
     * @var \StructType\Former_Worker_Attachment_DataType
     */
    public $Former_Worker_Document_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
     * @var bool
     */
    public $Add_Only;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Former_Worker_Document_RequestType
     * @uses Put_Former_Worker_Document_RequestType::setFormer_Worker_Document_Reference()
     * @uses Put_Former_Worker_Document_RequestType::setFormer_Worker_Document_Data()
     * @uses Put_Former_Worker_Document_RequestType::setAdd_Only()
     * @uses Put_Former_Worker_Document_RequestType::setVersion()
     * @param \StructType\Former_Worker_AttachmentObjectType $former_Worker_Document_Reference
     * @param \StructType\Former_Worker_Attachment_DataType $former_Worker_Document_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Former_Worker_AttachmentObjectType $former_Worker_Document_Reference = null, \StructType\Former_Worker_Attachment_DataType $former_Worker_Document_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setFormer_Worker_Document_Reference($former_Worker_Document_Reference)
            ->setFormer_Worker_Document_Data($former_Worker_Document_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Former_Worker_Document_Reference value
     * @return \StructType\Former_Worker_AttachmentObjectType|null
     */
    public function getFormer_Worker_Document_Reference()
    {
        return $this->Former_Worker_Document_Reference;
    }
    /**
     * Set Former_Worker_Document_Reference value
     * @param \StructType\Former_Worker_AttachmentObjectType $former_Worker_Document_Reference
     * @return \StructType\Put_Former_Worker_Document_RequestType
     */
    public function setFormer_Worker_Document_Reference(\StructType\Former_Worker_AttachmentObjectType $former_Worker_Document_Reference = null)
    {
        $this->Former_Worker_Document_Reference = $former_Worker_Document_Reference;
        return $this;
    }
    /**
     * Get Former_Worker_Document_Data value
     * @return \StructType\Former_Worker_Attachment_DataType|null
     */
    public function getFormer_Worker_Document_Data()
    {
        return $this->Former_Worker_Document_Data;
    }
    /**
     * Set Former_Worker_Document_Data value
     * @param \StructType\Former_Worker_Attachment_DataType $former_Worker_Document_Data
     * @return \StructType\Put_Former_Worker_Document_RequestType
     */
    public function setFormer_Worker_Document_Data(\StructType\Former_Worker_Attachment_DataType $former_Worker_Document_Data = null)
    {
        $this->Former_Worker_Document_Data = $former_Worker_Document_Data;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \StructType\Put_Former_Worker_Document_RequestType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
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
     * @return \StructType\Put_Former_Worker_Document_RequestType
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
     * @return \StructType\Put_Former_Worker_Document_RequestType
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
