<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Collective_Agreement_Factor_Options_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for collective agreement factors and factor options.
 * @subpackage Structs
 */
class Collective_Agreement_Factor_Options_DataType extends AbstractStructBase
{
    /**
     * The Collective_Agreement_Factor_1_Data
     * Meta information extracted from the WSDL
     * - documentation: Container for the collective agreement factor 1 and factor option 1 data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_Agreement_Factor_1_DataType
     */
    public $Collective_Agreement_Factor_1_Data;
    /**
     * The Collective_Agreement_Factor_2_Data
     * Meta information extracted from the WSDL
     * - documentation: Container for the collective agreement factor 2 and factor option 2 data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_Agreement_Factor_2_DataType
     */
    public $Collective_Agreement_Factor_2_Data;
    /**
     * The Collective_Agreement_Factor_3_Data
     * Meta information extracted from the WSDL
     * - documentation: Container for the collective agreement factor 3 and factor option 3 data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_Agreement_Factor_3_DataType
     */
    public $Collective_Agreement_Factor_3_Data;
    /**
     * The Collective_Agreement_Factor_4_Data
     * Meta information extracted from the WSDL
     * - documentation: Container for the collective agreement factor 4 and factor option 4 data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_Agreement_Factor_4_DataType
     */
    public $Collective_Agreement_Factor_4_Data;
    /**
     * The Collective_Agreement_Factor_5_Data
     * Meta information extracted from the WSDL
     * - documentation: Container for the collective agreement factor 5 and factor option 5 data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_Agreement_Factor_5_DataType
     */
    public $Collective_Agreement_Factor_5_Data;
    /**
     * Constructor method for Collective_Agreement_Factor_Options_DataType
     * @uses Collective_Agreement_Factor_Options_DataType::setCollective_Agreement_Factor_1_Data()
     * @uses Collective_Agreement_Factor_Options_DataType::setCollective_Agreement_Factor_2_Data()
     * @uses Collective_Agreement_Factor_Options_DataType::setCollective_Agreement_Factor_3_Data()
     * @uses Collective_Agreement_Factor_Options_DataType::setCollective_Agreement_Factor_4_Data()
     * @uses Collective_Agreement_Factor_Options_DataType::setCollective_Agreement_Factor_5_Data()
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Factor_1_DataType $collective_Agreement_Factor_1_Data
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Factor_2_DataType $collective_Agreement_Factor_2_Data
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Factor_3_DataType $collective_Agreement_Factor_3_Data
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Factor_4_DataType $collective_Agreement_Factor_4_Data
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Factor_5_DataType $collective_Agreement_Factor_5_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Collective_Agreement_Factor_1_DataType $collective_Agreement_Factor_1_Data = null, \WorkdayWsdl\\StructType\Collective_Agreement_Factor_2_DataType $collective_Agreement_Factor_2_Data = null, \WorkdayWsdl\\StructType\Collective_Agreement_Factor_3_DataType $collective_Agreement_Factor_3_Data = null, \WorkdayWsdl\\StructType\Collective_Agreement_Factor_4_DataType $collective_Agreement_Factor_4_Data = null, \WorkdayWsdl\\StructType\Collective_Agreement_Factor_5_DataType $collective_Agreement_Factor_5_Data = null)
    {
        $this
            ->setCollective_Agreement_Factor_1_Data($collective_Agreement_Factor_1_Data)
            ->setCollective_Agreement_Factor_2_Data($collective_Agreement_Factor_2_Data)
            ->setCollective_Agreement_Factor_3_Data($collective_Agreement_Factor_3_Data)
            ->setCollective_Agreement_Factor_4_Data($collective_Agreement_Factor_4_Data)
            ->setCollective_Agreement_Factor_5_Data($collective_Agreement_Factor_5_Data);
    }
    /**
     * Get collective_Agreement_Factor_Data value
     * @return collective_Agreement_Factor_Data
     */
    public function getCollective_Agreement_Factor_1_Data()
    {
        return $this->Collective_Agreement_Factor_1_Data;
    }
    /**
     * Set collective_Agreement_Factor_Data value
     * @param collective_Agreement_Factor_Data $collective_Agreement_Factor_Data
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType
     */
    public function setCollective_Agreement_Factor_1_Data(\WorkdayWsdl\\StructType\Collective_Agreement_Factor_1_DataType $collective_Agreement_Factor_1_Data = null)
    {
        $this->Collective_Agreement_Factor_1_Data = $collective_Agreement_Factor_1_Data;
        return $this;
    }
    /**
     * Get collective_Agreement_Factor_Data value
     * @return collective_Agreement_Factor_Data
     */
    public function getCollective_Agreement_Factor_2_Data()
    {
        return $this->Collective_Agreement_Factor_2_Data;
    }
    /**
     * Set collective_Agreement_Factor_Data value
     * @param collective_Agreement_Factor_Data $collective_Agreement_Factor_Data
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType
     */
    public function setCollective_Agreement_Factor_2_Data(\WorkdayWsdl\\StructType\Collective_Agreement_Factor_2_DataType $collective_Agreement_Factor_2_Data = null)
    {
        $this->Collective_Agreement_Factor_2_Data = $collective_Agreement_Factor_2_Data;
        return $this;
    }
    /**
     * Get collective_Agreement_Factor_Data value
     * @return collective_Agreement_Factor_Data
     */
    public function getCollective_Agreement_Factor_3_Data()
    {
        return $this->Collective_Agreement_Factor_3_Data;
    }
    /**
     * Set collective_Agreement_Factor_Data value
     * @param collective_Agreement_Factor_Data $collective_Agreement_Factor_Data
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType
     */
    public function setCollective_Agreement_Factor_3_Data(\WorkdayWsdl\\StructType\Collective_Agreement_Factor_3_DataType $collective_Agreement_Factor_3_Data = null)
    {
        $this->Collective_Agreement_Factor_3_Data = $collective_Agreement_Factor_3_Data;
        return $this;
    }
    /**
     * Get collective_Agreement_Factor_Data value
     * @return collective_Agreement_Factor_Data
     */
    public function getCollective_Agreement_Factor_4_Data()
    {
        return $this->Collective_Agreement_Factor_4_Data;
    }
    /**
     * Set collective_Agreement_Factor_Data value
     * @param collective_Agreement_Factor_Data $collective_Agreement_Factor_Data
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType
     */
    public function setCollective_Agreement_Factor_4_Data(\WorkdayWsdl\\StructType\Collective_Agreement_Factor_4_DataType $collective_Agreement_Factor_4_Data = null)
    {
        $this->Collective_Agreement_Factor_4_Data = $collective_Agreement_Factor_4_Data;
        return $this;
    }
    /**
     * Get collective_Agreement_Factor_Data value
     * @return collective_Agreement_Factor_Data
     */
    public function getCollective_Agreement_Factor_5_Data()
    {
        return $this->Collective_Agreement_Factor_5_Data;
    }
    /**
     * Set collective_Agreement_Factor_Data value
     * @param collective_Agreement_Factor_Data $collective_Agreement_Factor_Data
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType
     */
    public function setCollective_Agreement_Factor_5_Data(\WorkdayWsdl\\StructType\Collective_Agreement_Factor_5_DataType $collective_Agreement_Factor_5_Data = null)
    {
        $this->Collective_Agreement_Factor_5_Data = $collective_Agreement_Factor_5_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType
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
