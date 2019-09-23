<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Image_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Employee Image data.
 * @subpackage Structs
 */
class Employee_Image_DataType extends AbstractStructBase
{
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
     * The Image
     * Meta information extracted from the WSDL
     * - documentation: File content in binary format.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Image;
    /**
     * Constructor method for Employee_Image_DataType
     * @uses Employee_Image_DataType::setFilename()
     * @uses Employee_Image_DataType::setImage()
     * @param string $filename
     * @param string $image
     */
    public function __construct($filename = null, $image = null)
    {
        $this
            ->setFilename($filename)
            ->setImage($image);
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
     * @return \StructType\Employee_Image_DataType
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
     * Get Image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param string $image
     * @return \StructType\Employee_Image_DataType
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->Image = $image;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Employee_Image_DataType
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
