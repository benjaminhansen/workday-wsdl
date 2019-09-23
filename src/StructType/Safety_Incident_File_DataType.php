<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_File_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The file that will be attached to the safety incident.
 * @subpackage Structs
 */
class Safety_Incident_File_DataType extends AbstractStructBase
{
    /**
     * The Safety_Incident_File_Attachment_Reference
     * Meta information extracted from the WSDL
     * - documentation: The safety incident file that will be added.
     * - minOccurs: 0
     * @var \StructType\Safety_Incident_FileObjectType
     */
    public $Safety_Incident_File_Attachment_Reference;
    /**
     * The File_Attachment_Data
     * Meta information extracted from the WSDL
     * - documentation: The information for the attachment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Attachment_WWS_DataType[]
     */
    public $File_Attachment_Data;
    /**
     * Constructor method for Safety_Incident_File_DataType
     * @uses Safety_Incident_File_DataType::setSafety_Incident_File_Attachment_Reference()
     * @uses Safety_Incident_File_DataType::setFile_Attachment_Data()
     * @param \StructType\Safety_Incident_FileObjectType $safety_Incident_File_Attachment_Reference
     * @param \StructType\Attachment_WWS_DataType[] $file_Attachment_Data
     */
    public function __construct(\StructType\Safety_Incident_FileObjectType $safety_Incident_File_Attachment_Reference = null, array $file_Attachment_Data = array())
    {
        $this
            ->setSafety_Incident_File_Attachment_Reference($safety_Incident_File_Attachment_Reference)
            ->setFile_Attachment_Data($file_Attachment_Data);
    }
    /**
     * Get Safety_Incident_File_Attachment_Reference value
     * @return \StructType\Safety_Incident_FileObjectType|null
     */
    public function getSafety_Incident_File_Attachment_Reference()
    {
        return $this->Safety_Incident_File_Attachment_Reference;
    }
    /**
     * Set Safety_Incident_File_Attachment_Reference value
     * @param \StructType\Safety_Incident_FileObjectType $safety_Incident_File_Attachment_Reference
     * @return \StructType\Safety_Incident_File_DataType
     */
    public function setSafety_Incident_File_Attachment_Reference(\StructType\Safety_Incident_FileObjectType $safety_Incident_File_Attachment_Reference = null)
    {
        $this->Safety_Incident_File_Attachment_Reference = $safety_Incident_File_Attachment_Reference;
        return $this;
    }
    /**
     * Get File_Attachment_Data value
     * @return \StructType\Attachment_WWS_DataType[]|null
     */
    public function getFile_Attachment_Data()
    {
        return $this->File_Attachment_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setFile_Attachment_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFile_Attachment_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFile_Attachment_DataForArrayConstraintsFromSetFile_Attachment_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $safety_Incident_File_DataTypeFile_Attachment_DataItem) {
            // validation for constraint: itemType
            if (!$safety_Incident_File_DataTypeFile_Attachment_DataItem instanceof \StructType\Attachment_WWS_DataType) {
                $invalidValues[] = is_object($safety_Incident_File_DataTypeFile_Attachment_DataItem) ? get_class($safety_Incident_File_DataTypeFile_Attachment_DataItem) : sprintf('%s(%s)', gettype($safety_Incident_File_DataTypeFile_Attachment_DataItem), var_export($safety_Incident_File_DataTypeFile_Attachment_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The File_Attachment_Data property can only contain items of type \StructType\Attachment_WWS_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set File_Attachment_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Attachment_WWS_DataType[] $file_Attachment_Data
     * @return \StructType\Safety_Incident_File_DataType
     */
    public function setFile_Attachment_Data(array $file_Attachment_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($file_Attachment_DataArrayErrorMessage = self::validateFile_Attachment_DataForArrayConstraintsFromSetFile_Attachment_Data($file_Attachment_Data))) {
            throw new \InvalidArgumentException($file_Attachment_DataArrayErrorMessage, __LINE__);
        }
        $this->File_Attachment_Data = $file_Attachment_Data;
        return $this;
    }
    /**
     * Add item to File_Attachment_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Attachment_WWS_DataType $item
     * @return \StructType\Safety_Incident_File_DataType
     */
    public function addToFile_Attachment_Data(\StructType\Attachment_WWS_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Attachment_WWS_DataType) {
            throw new \InvalidArgumentException(sprintf('The File_Attachment_Data property can only contain items of type \StructType\Attachment_WWS_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->File_Attachment_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Safety_Incident_File_DataType
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
