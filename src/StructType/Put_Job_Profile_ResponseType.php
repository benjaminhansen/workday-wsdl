<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Job_Profile_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for Put Job Profile.
 * @subpackage Structs
 */
class Put_Job_Profile_ResponseType extends AbstractStructBase
{
    /**
     * The Job_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for a Job Profile. Also known as Job Profile ID.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_ProfileObjectType
     */
    public $Job_Profile_Reference;
    /**
     * The Exceptions_Response_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType[]
     */
    public $Exceptions_Response_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Job_Profile_ResponseType
     * @uses Put_Job_Profile_ResponseType::setJob_Profile_Reference()
     * @uses Put_Job_Profile_ResponseType::setExceptions_Response_Data()
     * @uses Put_Job_Profile_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Job_ProfileObjectType $job_Profile_Reference
     * @param \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType[] $exceptions_Response_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_ProfileObjectType $job_Profile_Reference = null, array $exceptions_Response_Data = array(), $version = null)
    {
        $this
            ->setJob_Profile_Reference($job_Profile_Reference)
            ->setExceptions_Response_Data($exceptions_Response_Data)
            ->setVersion($version);
    }
    /**
     * Get Job_Profile_Reference value
     * @return \WorkdayWsdl\\StructType\Job_ProfileObjectType|null
     */
    public function getJob_Profile_Reference()
    {
        return $this->Job_Profile_Reference;
    }
    /**
     * Set Job_Profile_Reference value
     * @param \WorkdayWsdl\\StructType\Job_ProfileObjectType $job_Profile_Reference
     * @return \WorkdayWsdl\\StructType\Put_Job_Profile_ResponseType
     */
    public function setJob_Profile_Reference(\WorkdayWsdl\\StructType\Job_ProfileObjectType $job_Profile_Reference = null)
    {
        $this->Job_Profile_Reference = $job_Profile_Reference;
        return $this;
    }
    /**
     * Get Exceptions_Response_Data value
     * @return \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType[]|null
     */
    public function getExceptions_Response_Data()
    {
        return $this->Exceptions_Response_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setExceptions_Response_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExceptions_Response_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExceptions_Response_DataForArrayConstraintsFromSetExceptions_Response_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $put_Job_Profile_ResponseTypeExceptions_Response_DataItem) {
            // validation for constraint: itemType
            if (!$put_Job_Profile_ResponseTypeExceptions_Response_DataItem instanceof \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType) {
                $invalidValues[] = is_object($put_Job_Profile_ResponseTypeExceptions_Response_DataItem) ? get_class($put_Job_Profile_ResponseTypeExceptions_Response_DataItem) : sprintf('%s(%s)', gettype($put_Job_Profile_ResponseTypeExceptions_Response_DataItem), var_export($put_Job_Profile_ResponseTypeExceptions_Response_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Exceptions_Response_Data property can only contain items of type \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Exceptions_Response_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType[] $exceptions_Response_Data
     * @return \WorkdayWsdl\\StructType\Put_Job_Profile_ResponseType
     */
    public function setExceptions_Response_Data(array $exceptions_Response_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($exceptions_Response_DataArrayErrorMessage = self::validateExceptions_Response_DataForArrayConstraintsFromSetExceptions_Response_Data($exceptions_Response_Data))) {
            throw new \InvalidArgumentException($exceptions_Response_DataArrayErrorMessage, __LINE__);
        }
        $this->Exceptions_Response_Data = $exceptions_Response_Data;
        return $this;
    }
    /**
     * Add item to Exceptions_Response_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType $item
     * @return \WorkdayWsdl\\StructType\Put_Job_Profile_ResponseType
     */
    public function addToExceptions_Response_Data(\WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType) {
            throw new \InvalidArgumentException(sprintf('The Exceptions_Response_Data property can only contain items of type \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Exceptions_Response_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Profile_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Profile_ResponseType
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
