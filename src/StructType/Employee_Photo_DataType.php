<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Photo_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element Containing Worker Reference and Photo Data.
 * @subpackage Structs
 */
class Employee_Photo_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the worker.
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
     * - minOccurs: 0
     * @var string
     */
    public $Filename;
    /**
     * The File
     * Meta information extracted from the WSDL
     * - documentation: File content in binary format.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $File;
    /**
     * Constructor method for Employee_Photo_DataType
     * @uses Employee_Photo_DataType::setID()
     * @uses Employee_Photo_DataType::setFilename()
     * @uses Employee_Photo_DataType::setFile()
     * @param string $iD
     * @param string $filename
     * @param string $file
     */
    public function __construct($iD = null, $filename = null, $file = null)
    {
        $this
            ->setID($iD)
            ->setFilename($filename)
            ->setFile($file);
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
     * @return \StructType\Employee_Photo_DataType
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
     * @return \StructType\Employee_Photo_DataType
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
     * @return \StructType\Employee_Photo_DataType
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
     * @return \StructType\Employee_Photo_DataType
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
