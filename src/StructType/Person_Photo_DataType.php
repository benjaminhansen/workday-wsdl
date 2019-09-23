<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Photo_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Person's Photo Information
 * @subpackage Structs
 */
class Person_Photo_DataType extends AbstractStructBase
{
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
     * - documentation: Data of file uploaded
     * - maxOccurs: 1
     * @var string
     */
    public $File;
    /**
     * Constructor method for Person_Photo_DataType
     * @uses Person_Photo_DataType::setFilename()
     * @uses Person_Photo_DataType::setFile()
     * @param string $filename
     * @param string $file
     */
    public function __construct($filename = null, $file = null)
    {
        $this
            ->setFilename($filename)
            ->setFile($file);
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
     * @return \WorkdayWsdl\\StructType\Person_Photo_DataType
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
     * @return \WorkdayWsdl\\StructType\Person_Photo_DataType
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
     * @return \WorkdayWsdl\\StructType\Person_Photo_DataType
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
