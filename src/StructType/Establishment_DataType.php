<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Establishment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Establishment Data wrapper
 * @subpackage Structs
 */
class Establishment_DataType extends AbstractStructBase
{
    /**
     * The Establishment_Number
     * Meta information extracted from the WSDL
     * - documentation: Establishment Number
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Establishment_Number;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: The ID for Establishment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Establish for Country
     * - minOccurs: 0
     * @var \StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date of Establishment Creation/Edit
     * - maxOccurs: 1
     * @var string
     */
    public $Effective_Date;
    /**
     * The Establishment_Name
     * Meta information extracted from the WSDL
     * - documentation: Establishment Name
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Establishment_Name;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Inactive flag
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Location(s) for Establishment
     * - maxOccurs: unbounded
     * @var \StructType\LocationObjectType[]
     */
    public $Location_Reference;
    /**
     * The Primary_Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Primary Location
     * - minOccurs: 0
     * @var \StructType\LocationObjectType
     */
    public $Primary_Location_Reference;
    /**
     * The Establishment_Legal_Entity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Legal Entities for Establishment
     * - maxOccurs: unbounded
     * @var \StructType\Establishment_Legal_EntityObjectType[]
     */
    public $Establishment_Legal_Entity_Reference;
    /**
     * The CCC_Text
     * Meta information extracted from the WSDL
     * - documentation: CCC #
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CCC_Text;
    /**
     * The DUNS_Text
     * Meta information extracted from the WSDL
     * - documentation: Duns #
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DUNS_Text;
    /**
     * The EEO_Text
     * Meta information extracted from the WSDL
     * - documentation: EEO #
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EEO_Text;
    /**
     * The Industry_Code_Text
     * Meta information extracted from the WSDL
     * - documentation: Industry Code #
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Industry_Code_Text;
    /**
     * The SIREN_Text
     * Meta information extracted from the WSDL
     * - documentation: SIREN #
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SIREN_Text;
    /**
     * The NIC_Text
     * Meta information extracted from the WSDL
     * - documentation: NIC #
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NIC_Text;
    /**
     * The SIRET_Text
     * Meta information extracted from the WSDL
     * - documentation: SIRET #
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SIRET_Text;
    /**
     * The VETS_Text
     * Meta information extracted from the WSDL
     * - documentation: VETS #
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $VETS_Text;
    /**
     * The Establishment_Headquarters
     * Meta information extracted from the WSDL
     * - documentation: Headquarters flag
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Establishment_Headquarters;
    /**
     * Constructor method for Establishment_DataType
     * @uses Establishment_DataType::setEstablishment_Number()
     * @uses Establishment_DataType::setID()
     * @uses Establishment_DataType::setCountry_Reference()
     * @uses Establishment_DataType::setEffective_Date()
     * @uses Establishment_DataType::setEstablishment_Name()
     * @uses Establishment_DataType::setInactive()
     * @uses Establishment_DataType::setLocation_Reference()
     * @uses Establishment_DataType::setPrimary_Location_Reference()
     * @uses Establishment_DataType::setEstablishment_Legal_Entity_Reference()
     * @uses Establishment_DataType::setCCC_Text()
     * @uses Establishment_DataType::setDUNS_Text()
     * @uses Establishment_DataType::setEEO_Text()
     * @uses Establishment_DataType::setIndustry_Code_Text()
     * @uses Establishment_DataType::setSIREN_Text()
     * @uses Establishment_DataType::setNIC_Text()
     * @uses Establishment_DataType::setSIRET_Text()
     * @uses Establishment_DataType::setVETS_Text()
     * @uses Establishment_DataType::setEstablishment_Headquarters()
     * @param string $establishment_Number
     * @param string $iD
     * @param \StructType\CountryObjectType $country_Reference
     * @param string $effective_Date
     * @param string $establishment_Name
     * @param bool $inactive
     * @param \StructType\LocationObjectType[] $location_Reference
     * @param \StructType\LocationObjectType $primary_Location_Reference
     * @param \StructType\Establishment_Legal_EntityObjectType[] $establishment_Legal_Entity_Reference
     * @param string $cCC_Text
     * @param string $dUNS_Text
     * @param string $eEO_Text
     * @param string $industry_Code_Text
     * @param string $sIREN_Text
     * @param string $nIC_Text
     * @param string $sIRET_Text
     * @param string $vETS_Text
     * @param bool $establishment_Headquarters
     */
    public function __construct($establishment_Number = null, $iD = null, \StructType\CountryObjectType $country_Reference = null, $effective_Date = null, $establishment_Name = null, $inactive = null, array $location_Reference = array(), \StructType\LocationObjectType $primary_Location_Reference = null, array $establishment_Legal_Entity_Reference = array(), $cCC_Text = null, $dUNS_Text = null, $eEO_Text = null, $industry_Code_Text = null, $sIREN_Text = null, $nIC_Text = null, $sIRET_Text = null, $vETS_Text = null, $establishment_Headquarters = null)
    {
        $this
            ->setEstablishment_Number($establishment_Number)
            ->setID($iD)
            ->setCountry_Reference($country_Reference)
            ->setEffective_Date($effective_Date)
            ->setEstablishment_Name($establishment_Name)
            ->setInactive($inactive)
            ->setLocation_Reference($location_Reference)
            ->setPrimary_Location_Reference($primary_Location_Reference)
            ->setEstablishment_Legal_Entity_Reference($establishment_Legal_Entity_Reference)
            ->setCCC_Text($cCC_Text)
            ->setDUNS_Text($dUNS_Text)
            ->setEEO_Text($eEO_Text)
            ->setIndustry_Code_Text($industry_Code_Text)
            ->setSIREN_Text($sIREN_Text)
            ->setNIC_Text($nIC_Text)
            ->setSIRET_Text($sIRET_Text)
            ->setVETS_Text($vETS_Text)
            ->setEstablishment_Headquarters($establishment_Headquarters);
    }
    /**
     * Get Establishment_Number value
     * @return string|null
     */
    public function getEstablishment_Number()
    {
        return $this->Establishment_Number;
    }
    /**
     * Set Establishment_Number value
     * @param string $establishment_Number
     * @return \StructType\Establishment_DataType
     */
    public function setEstablishment_Number($establishment_Number = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_Number) && !is_string($establishment_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($establishment_Number, true), gettype($establishment_Number)), __LINE__);
        }
        $this->Establishment_Number = $establishment_Number;
        return $this;
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
     * @return \StructType\Establishment_DataType
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
     * Get Country_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \StructType\CountryObjectType $country_Reference
     * @return \StructType\Establishment_DataType
     */
    public function setCountry_Reference(\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Establishment_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Establishment_Name value
     * @return string|null
     */
    public function getEstablishment_Name()
    {
        return $this->Establishment_Name;
    }
    /**
     * Set Establishment_Name value
     * @param string $establishment_Name
     * @return \StructType\Establishment_DataType
     */
    public function setEstablishment_Name($establishment_Name = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_Name) && !is_string($establishment_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($establishment_Name, true), gettype($establishment_Name)), __LINE__);
        }
        $this->Establishment_Name = $establishment_Name;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \StructType\Establishment_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Location_Reference value
     * @return \StructType\LocationObjectType[]|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_ReferenceForArrayConstraintsFromSetLocation_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $establishment_DataTypeLocation_ReferenceItem) {
            // validation for constraint: itemType
            if (!$establishment_DataTypeLocation_ReferenceItem instanceof \StructType\LocationObjectType) {
                $invalidValues[] = is_object($establishment_DataTypeLocation_ReferenceItem) ? get_class($establishment_DataTypeLocation_ReferenceItem) : sprintf('%s(%s)', gettype($establishment_DataTypeLocation_ReferenceItem), var_export($establishment_DataTypeLocation_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Reference property can only contain items of type \StructType\LocationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationObjectType[] $location_Reference
     * @return \StructType\Establishment_DataType
     */
    public function setLocation_Reference(array $location_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_ReferenceArrayErrorMessage = self::validateLocation_ReferenceForArrayConstraintsFromSetLocation_Reference($location_Reference))) {
            throw new \InvalidArgumentException($location_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Add item to Location_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationObjectType $item
     * @return \StructType\Establishment_DataType
     */
    public function addToLocation_Reference(\StructType\LocationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LocationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Reference property can only contain items of type \StructType\LocationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Reference[] = $item;
        return $this;
    }
    /**
     * Get Primary_Location_Reference value
     * @return \StructType\LocationObjectType|null
     */
    public function getPrimary_Location_Reference()
    {
        return $this->Primary_Location_Reference;
    }
    /**
     * Set Primary_Location_Reference value
     * @param \StructType\LocationObjectType $primary_Location_Reference
     * @return \StructType\Establishment_DataType
     */
    public function setPrimary_Location_Reference(\StructType\LocationObjectType $primary_Location_Reference = null)
    {
        $this->Primary_Location_Reference = $primary_Location_Reference;
        return $this;
    }
    /**
     * Get Establishment_Legal_Entity_Reference value
     * @return \StructType\Establishment_Legal_EntityObjectType[]|null
     */
    public function getEstablishment_Legal_Entity_Reference()
    {
        return $this->Establishment_Legal_Entity_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEstablishment_Legal_Entity_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEstablishment_Legal_Entity_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEstablishment_Legal_Entity_ReferenceForArrayConstraintsFromSetEstablishment_Legal_Entity_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $establishment_DataTypeEstablishment_Legal_Entity_ReferenceItem) {
            // validation for constraint: itemType
            if (!$establishment_DataTypeEstablishment_Legal_Entity_ReferenceItem instanceof \StructType\Establishment_Legal_EntityObjectType) {
                $invalidValues[] = is_object($establishment_DataTypeEstablishment_Legal_Entity_ReferenceItem) ? get_class($establishment_DataTypeEstablishment_Legal_Entity_ReferenceItem) : sprintf('%s(%s)', gettype($establishment_DataTypeEstablishment_Legal_Entity_ReferenceItem), var_export($establishment_DataTypeEstablishment_Legal_Entity_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Establishment_Legal_Entity_Reference property can only contain items of type \StructType\Establishment_Legal_EntityObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Establishment_Legal_Entity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Establishment_Legal_EntityObjectType[] $establishment_Legal_Entity_Reference
     * @return \StructType\Establishment_DataType
     */
    public function setEstablishment_Legal_Entity_Reference(array $establishment_Legal_Entity_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($establishment_Legal_Entity_ReferenceArrayErrorMessage = self::validateEstablishment_Legal_Entity_ReferenceForArrayConstraintsFromSetEstablishment_Legal_Entity_Reference($establishment_Legal_Entity_Reference))) {
            throw new \InvalidArgumentException($establishment_Legal_Entity_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Establishment_Legal_Entity_Reference = $establishment_Legal_Entity_Reference;
        return $this;
    }
    /**
     * Add item to Establishment_Legal_Entity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Establishment_Legal_EntityObjectType $item
     * @return \StructType\Establishment_DataType
     */
    public function addToEstablishment_Legal_Entity_Reference(\StructType\Establishment_Legal_EntityObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Establishment_Legal_EntityObjectType) {
            throw new \InvalidArgumentException(sprintf('The Establishment_Legal_Entity_Reference property can only contain items of type \StructType\Establishment_Legal_EntityObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Establishment_Legal_Entity_Reference[] = $item;
        return $this;
    }
    /**
     * Get CCC_Text value
     * @return string|null
     */
    public function getCCC_Text()
    {
        return $this->CCC_Text;
    }
    /**
     * Set CCC_Text value
     * @param string $cCC_Text
     * @return \StructType\Establishment_DataType
     */
    public function setCCC_Text($cCC_Text = null)
    {
        // validation for constraint: string
        if (!is_null($cCC_Text) && !is_string($cCC_Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cCC_Text, true), gettype($cCC_Text)), __LINE__);
        }
        $this->CCC_Text = $cCC_Text;
        return $this;
    }
    /**
     * Get DUNS_Text value
     * @return string|null
     */
    public function getDUNS_Text()
    {
        return $this->DUNS_Text;
    }
    /**
     * Set DUNS_Text value
     * @param string $dUNS_Text
     * @return \StructType\Establishment_DataType
     */
    public function setDUNS_Text($dUNS_Text = null)
    {
        // validation for constraint: string
        if (!is_null($dUNS_Text) && !is_string($dUNS_Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dUNS_Text, true), gettype($dUNS_Text)), __LINE__);
        }
        $this->DUNS_Text = $dUNS_Text;
        return $this;
    }
    /**
     * Get EEO_Text value
     * @return string|null
     */
    public function getEEO_Text()
    {
        return $this->EEO_Text;
    }
    /**
     * Set EEO_Text value
     * @param string $eEO_Text
     * @return \StructType\Establishment_DataType
     */
    public function setEEO_Text($eEO_Text = null)
    {
        // validation for constraint: string
        if (!is_null($eEO_Text) && !is_string($eEO_Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eEO_Text, true), gettype($eEO_Text)), __LINE__);
        }
        $this->EEO_Text = $eEO_Text;
        return $this;
    }
    /**
     * Get Industry_Code_Text value
     * @return string|null
     */
    public function getIndustry_Code_Text()
    {
        return $this->Industry_Code_Text;
    }
    /**
     * Set Industry_Code_Text value
     * @param string $industry_Code_Text
     * @return \StructType\Establishment_DataType
     */
    public function setIndustry_Code_Text($industry_Code_Text = null)
    {
        // validation for constraint: string
        if (!is_null($industry_Code_Text) && !is_string($industry_Code_Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($industry_Code_Text, true), gettype($industry_Code_Text)), __LINE__);
        }
        $this->Industry_Code_Text = $industry_Code_Text;
        return $this;
    }
    /**
     * Get SIREN_Text value
     * @return string|null
     */
    public function getSIREN_Text()
    {
        return $this->SIREN_Text;
    }
    /**
     * Set SIREN_Text value
     * @param string $sIREN_Text
     * @return \StructType\Establishment_DataType
     */
    public function setSIREN_Text($sIREN_Text = null)
    {
        // validation for constraint: string
        if (!is_null($sIREN_Text) && !is_string($sIREN_Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sIREN_Text, true), gettype($sIREN_Text)), __LINE__);
        }
        $this->SIREN_Text = $sIREN_Text;
        return $this;
    }
    /**
     * Get NIC_Text value
     * @return string|null
     */
    public function getNIC_Text()
    {
        return $this->NIC_Text;
    }
    /**
     * Set NIC_Text value
     * @param string $nIC_Text
     * @return \StructType\Establishment_DataType
     */
    public function setNIC_Text($nIC_Text = null)
    {
        // validation for constraint: string
        if (!is_null($nIC_Text) && !is_string($nIC_Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nIC_Text, true), gettype($nIC_Text)), __LINE__);
        }
        $this->NIC_Text = $nIC_Text;
        return $this;
    }
    /**
     * Get SIRET_Text value
     * @return string|null
     */
    public function getSIRET_Text()
    {
        return $this->SIRET_Text;
    }
    /**
     * Set SIRET_Text value
     * @param string $sIRET_Text
     * @return \StructType\Establishment_DataType
     */
    public function setSIRET_Text($sIRET_Text = null)
    {
        // validation for constraint: string
        if (!is_null($sIRET_Text) && !is_string($sIRET_Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sIRET_Text, true), gettype($sIRET_Text)), __LINE__);
        }
        $this->SIRET_Text = $sIRET_Text;
        return $this;
    }
    /**
     * Get VETS_Text value
     * @return string|null
     */
    public function getVETS_Text()
    {
        return $this->VETS_Text;
    }
    /**
     * Set VETS_Text value
     * @param string $vETS_Text
     * @return \StructType\Establishment_DataType
     */
    public function setVETS_Text($vETS_Text = null)
    {
        // validation for constraint: string
        if (!is_null($vETS_Text) && !is_string($vETS_Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vETS_Text, true), gettype($vETS_Text)), __LINE__);
        }
        $this->VETS_Text = $vETS_Text;
        return $this;
    }
    /**
     * Get Establishment_Headquarters value
     * @return bool|null
     */
    public function getEstablishment_Headquarters()
    {
        return $this->Establishment_Headquarters;
    }
    /**
     * Set Establishment_Headquarters value
     * @param bool $establishment_Headquarters
     * @return \StructType\Establishment_DataType
     */
    public function setEstablishment_Headquarters($establishment_Headquarters = null)
    {
        // validation for constraint: boolean
        if (!is_null($establishment_Headquarters) && !is_bool($establishment_Headquarters)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($establishment_Headquarters, true), gettype($establishment_Headquarters)), __LINE__);
        }
        $this->Establishment_Headquarters = $establishment_Headquarters;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Establishment_DataType
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
