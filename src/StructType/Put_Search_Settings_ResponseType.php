<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Search_Settings_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing tenant setup search data
 * @subpackage Structs
 */
class Put_Search_Settings_ResponseType extends AbstractStructBase
{
    /**
     * The Search_Settings_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Search_Settings_DataType[]
     */
    public $Search_Settings_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Search_Settings_ResponseType
     * @uses Put_Search_Settings_ResponseType::setSearch_Settings_Data()
     * @uses Put_Search_Settings_ResponseType::setVersion()
     * @param \StructType\Search_Settings_DataType[] $search_Settings_Data
     * @param string $version
     */
    public function __construct(array $search_Settings_Data = array(), $version = null)
    {
        $this
            ->setSearch_Settings_Data($search_Settings_Data)
            ->setVersion($version);
    }
    /**
     * Get Search_Settings_Data value
     * @return \StructType\Search_Settings_DataType[]|null
     */
    public function getSearch_Settings_Data()
    {
        return $this->Search_Settings_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSearch_Settings_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearch_Settings_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearch_Settings_DataForArrayConstraintsFromSetSearch_Settings_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $put_Search_Settings_ResponseTypeSearch_Settings_DataItem) {
            // validation for constraint: itemType
            if (!$put_Search_Settings_ResponseTypeSearch_Settings_DataItem instanceof \StructType\Search_Settings_DataType) {
                $invalidValues[] = is_object($put_Search_Settings_ResponseTypeSearch_Settings_DataItem) ? get_class($put_Search_Settings_ResponseTypeSearch_Settings_DataItem) : sprintf('%s(%s)', gettype($put_Search_Settings_ResponseTypeSearch_Settings_DataItem), var_export($put_Search_Settings_ResponseTypeSearch_Settings_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Search_Settings_Data property can only contain items of type \StructType\Search_Settings_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Search_Settings_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Search_Settings_DataType[] $search_Settings_Data
     * @return \StructType\Put_Search_Settings_ResponseType
     */
    public function setSearch_Settings_Data(array $search_Settings_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($search_Settings_DataArrayErrorMessage = self::validateSearch_Settings_DataForArrayConstraintsFromSetSearch_Settings_Data($search_Settings_Data))) {
            throw new \InvalidArgumentException($search_Settings_DataArrayErrorMessage, __LINE__);
        }
        $this->Search_Settings_Data = $search_Settings_Data;
        return $this;
    }
    /**
     * Add item to Search_Settings_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Search_Settings_DataType $item
     * @return \StructType\Put_Search_Settings_ResponseType
     */
    public function addToSearch_Settings_Data(\StructType\Search_Settings_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Search_Settings_DataType) {
            throw new \InvalidArgumentException(sprintf('The Search_Settings_Data property can only contain items of type \StructType\Search_Settings_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Search_Settings_Data[] = $item;
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
     * @return \StructType\Put_Search_Settings_ResponseType
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
     * @return \StructType\Put_Search_Settings_ResponseType
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
