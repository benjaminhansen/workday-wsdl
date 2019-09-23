<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_SettingsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper Element that includes Search Settings Data
 * @subpackage Structs
 */
class Search_SettingsType extends AbstractStructBase
{
    /**
     * The Search_Settings_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Search_Settings_DataType
     */
    public $Search_Settings_Data;
    /**
     * Constructor method for Search_SettingsType
     * @uses Search_SettingsType::setSearch_Settings_Data()
     * @param \StructType\Search_Settings_DataType $search_Settings_Data
     */
    public function __construct(\StructType\Search_Settings_DataType $search_Settings_Data = null)
    {
        $this
            ->setSearch_Settings_Data($search_Settings_Data);
    }
    /**
     * Get Search_Settings_Data value
     * @return \StructType\Search_Settings_DataType|null
     */
    public function getSearch_Settings_Data()
    {
        return $this->Search_Settings_Data;
    }
    /**
     * Set Search_Settings_Data value
     * @param \StructType\Search_Settings_DataType $search_Settings_Data
     * @return \StructType\Search_SettingsType
     */
    public function setSearch_Settings_Data(\StructType\Search_Settings_DataType $search_Settings_Data = null)
    {
        $this->Search_Settings_Data = $search_Settings_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Search_SettingsType
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
