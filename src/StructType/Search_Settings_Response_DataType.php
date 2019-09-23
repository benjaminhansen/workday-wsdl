<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Settings_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element that includes Search Settings data
 * @subpackage Structs
 */
class Search_Settings_Response_DataType extends AbstractStructBase
{
    /**
     * The Search_Settings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Search_SettingsType
     */
    public $Search_Settings;
    /**
     * Constructor method for Search_Settings_Response_DataType
     * @uses Search_Settings_Response_DataType::setSearch_Settings()
     * @param \StructType\Search_SettingsType $search_Settings
     */
    public function __construct(\StructType\Search_SettingsType $search_Settings = null)
    {
        $this
            ->setSearch_Settings($search_Settings);
    }
    /**
     * Get Search_Settings value
     * @return \StructType\Search_SettingsType|null
     */
    public function getSearch_Settings()
    {
        return $this->Search_Settings;
    }
    /**
     * Set Search_Settings value
     * @param \StructType\Search_SettingsType $search_Settings
     * @return \StructType\Search_Settings_Response_DataType
     */
    public function setSearch_Settings(\StructType\Search_SettingsType $search_Settings = null)
    {
        $this->Search_Settings = $search_Settings;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Search_Settings_Response_DataType
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
