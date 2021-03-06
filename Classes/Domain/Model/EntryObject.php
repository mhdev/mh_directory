<?php
namespace mhdev\MhDirectory\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
 
class EntryObject extends AbstractEntity {

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\State>
     */
    protected $relationState;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\District>
     */
    protected $relationDistrict;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\City>
     */
    protected $relationCity;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\Type>
     */
    protected $relationType;

    /**
     * categories
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\Category
     */
    protected $categories;

    /**
     * Title for internal use
     *
     * @var string
     */
    protected $nameIntern;
 
    /**
     * company name
     *
     * @var string
     */
    protected $company; 

    /**
     * forename
     *
     * @var string
     */
    protected $forename;
    
    /**
     * middlename
     *
     * @var string
     */
    protected $middlename;
    
    /**
     * lastname
     *
     * @var string
     */
    protected $lastname;
    
    /**
     * address
     *
     * @var string
     */
    protected $address;
    
    /**
     * zip
     *
     * @var string
     */
    protected $zip;
    
    /**
     * city
     *
     * @var string
     */
    protected $city;
    
    /**
     * phone
     *
     * @var string
     */
    protected $phone;   

    /**
     * mobile
     *
     * @var string
     */
    protected $mobile;
    
    /**
     * fax
     *
     * @var string
     */
    protected $fax;
    
    /**
     * link
     *
     * @var string
     */
    protected $link;
    
    /**
     * mail
     *
     * @var string
     */
    protected $mail;
    
    /**
     * twitter
     *
     * @var string
     */
    protected $twitter;
    
    /**
     * facebook
     *
     * @var string
     */
    protected $facebook;  

    /**
     * xing
     *
     * @var string
     */
    protected $xing;   

    /**
     * linkedin
     *
     * @var string
     */
    protected $linkedin;
    
    /**
     * custom1
     *
     * @var string
     */
    protected $custom1;
    
    /**
     * custom2
     *
     * @var string
     */
    protected $custom2;
    
    /**
     * custom3
     *
     * @var string
     */
    protected $custom3;
    
    /**
     * map_lng
     *
     * @var string
     */
    protected $mapLng;
    
    /**
     * map_lat
     *
     * @var string
     */
    protected $mapLat;    
    
    /**
     * opening
     *
     * @var string
     */
    protected $opening;
    
    /**
     * image
     *
     * @var string
     */
    protected $image;

    /**
     * description
     *
     * @var string
     */
    protected $description;

    /**
     * count_clicks
     *
     * @var int
     */
    protected $countClicks;

    /**
     * count_views
     *
     * @var int
     */
    protected $countViews;

    /**
     * count_twitter
     *
     * @var int
     */
    protected $countTwitter;

    /**
     * count_facebook
     *
     * @var int
     */
    protected $countFacebook;

    /**
     * count_xing
     *
     * @var int
     */
    protected $countXing;

    /**
     * count_linkedin
     *
     * @var int
     */
    protected $countLinkedin;

    /**
     * count_link
     *
     * @var int
     */
    protected $countLink;

    /**
     * last_calls
     *
     * @var string
     */
    protected $lastCalls;

    
    /**
     * construction
     */
    public function __construct() {
        $this->initializeObjectStorages();
    }
 
    /**
     * initialize object storages
     */
    public function initializeObjectStorages() {
        $this->relationState = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->relationDistrict = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->relationCity = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->relationType = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Gets the relation
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\State>
     */
    public function getRelationState()
    {
        $this->relationState->rewind();
        if($this->relationState->valid()) {
            return $this->relationState->current();
        }
    }

    /**
     * Gets the relation
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\District>
     */
    public function getRelationDistrict()
    {
        $this->relationDistrict->rewind();
        if($this->relationDistrict->valid()) {
            return $this->relationDistrict->current();
        }
    }    

    /**
     * Gets the relation
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\City>
     */
    public function getRelationCity()
    {
        $this->relationCity->rewind();
        if($this->relationCity->valid()) {
            return $this->relationCity->current();
        }
    }       

    /**
     * Gets the relation
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\Type>
     */
    public function getRelationType()
    {
        $this->relationType->rewind();
        if($this->relationType->valid()) {
            return $this->relationType->current();
        }
    }    


    /**
     * Gets the Title for internal use.
     *
     * @return string
     */
    public function getNameIntern()
    {
        return $this->nameIntern;
    }

    /**
     * Sets the Title for internal use.
     *
     * @param string $name_intern the name_intern
     *
     * @return self
     */
    public function setNameIntern($name_intern)
    {
        $this->nameIntern = $name_intern;

        return $this;
    }

    /**
     * Gets the company name.
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets the company name.
     *
     * @param string $company the company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Gets the forename.
     *
     * @return string
     */
    public function getForename()
    {
        return $this->forename;
    }

    /**
     * Sets the forename.
     *
     * @param string $forename the forename
     *
     * @return self
     */
    public function setForename($forename)
    {
        $this->forename = $forename;

        return $this;
    }

    /**
     * Gets the middlename.
     *
     * @return string
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * Sets the middlename.
     *
     * @param string $middlename the middlename
     *
     * @return self
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    /**
     * Gets the lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the lastname.
     *
     * @param string $lastname the lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Gets the address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address.
     *
     * @param string $address the address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets the zip.
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip.
     *
     * @param string $zip the zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Gets the city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city.
     *
     * @param string $city the city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets the phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone.
     *
     * @param string $phone the phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Gets the mobile.
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets the mobile.
     *
     * @param string $mobile the mobile
     *
     * @return self
     */
    public function setMobile($phone)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Gets the fax.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets the fax.
     *
     * @param string $fax the fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Gets the link.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link.
     *
     * @param string $link the link
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Gets the mail.
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Sets the mail.
     *
     * @param string $mail the mail
     *
     * @return self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Gets the twitter.
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Sets the twitter.
     *
     * @param string $twitter the twitter
     *
     * @return self
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Gets the facebook.
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Sets the facebook.
     *
     * @param string $facebook the facebook
     *
     * @return self
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Gets the custom1.
     *
     * @return string
     */
    public function getCustom1()
    {
        return $this->custom1;
    }

    /**
     * Sets the custom1.
     *
     * @param string $custom1 the custom1
     *
     * @return self
     */
    public function setCustom1($custom1)
    {
        $this->custom1 = $custom1;

        return $this;
    }

    /**
     * Gets the custom2.
     *
     * @return string
     */
    public function getCustom2()
    {
        return $this->custom2;
    }

    /**
     * Sets the custom2.
     *
     * @param string $custom2 the custom2
     *
     * @return self
     */
    public function setCustom2($custom2)
    {
        $this->custom2 = $custom2;

        return $this;
    }

    /**
     * Gets the custom3.
     *
     * @return string
     */
    public function getCustom3()
    {
        return $this->custom3;
    }

    /**
     * Sets the custom3.
     *
     * @param string $custom3 the custom3
     *
     * @return self
     */
    public function setCustom3($custom3)
    {
        $this->custom3 = $custom3;

        return $this;
    }

    /**
     * Gets the map_lng.
     *
     * @return string
     */
    public function getMapLng()
    {
        return $this->mapLng;
    }

    /**
     * Sets the map_lng.
     *
     * @param string $map_lng the map_lng
     *
     * @return self
     */
    public function setMapLng($map_lng)
    {
        $this->mapLng = $map_lng;

        return $this;
    }

    /**
     * Gets the map_lat.
     *
     * @return string
     */
    public function getMapLat()
    {
        return $this->mapLat;
    }

    /**
     * Sets the map_lat.
     *
     * @param string $map_lat the map_lat
     *
     * @return self
     */
    public function setMapLat($map_lat)
    {
        $this->mapLat = $map_lat;

        return $this;
    }

    /**
     * Gets the image.
     *
     * @return array
     */
    public function getImage()
    {
        return $this->image;

        if(empty($this->image))
            return false;

        $aImageArray = explode(',', $this->image);
        return $aImageArray;
    }

    /**
     * Sets the image.
     *
     * @param string $image the image
     *
     * @return self
     */
    public function setImage(blob $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Gets the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description.
     *
     * @param string $description the description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets the count_clicks.
     *
     * @return int
     */
    public function getCountClicks()
    {
        return $this->countClicks;
    }

    /**
     * Sets the count_clicks.
     *
     * @param int $count_clicks the count_clicks
     *
     * @return self
     */
    public function setCountClicks($count_clicks)
    {
        $this->countClicks = $count_clicks;

        return $this;
    }

    /**
     * Gets the count_twitter.
     *
     * @return int
     */
    public function getCountTwitter()
    {
        return $this->countTwitter;
    }

    /**
     * Sets the count_twitter.
     *
     * @param int $count_twitter the twitter click count
     *
     * @return self
     */
    public function setCountTwitter($count_twitter)
    {
        $this->countTwitter = $count_twitter;

        return $this;
    }

    /**
     * Gets the count_facebook.
     *
     * @return int
     */
    public function getCountFacebook()
    {
        return $this->countFacebook;
    }

    /**
     * Sets the count_facebook.
     *
     * @param int $count_facebook the facebook click count
     *
     * @return self
     */
    public function setCountFacebook($count_facebook)
    {
        $this->countFacebook = $count_facebook;

        return $this;
    }

    /**
     * Gets the count_link.
     *
     * @return int
     */
    public function getCountLink()
    {
        return $this->countLink;
    }

    /**
     * Sets the count_link.
     *
     * @param int $count_link the link click count
     *
     * @return self
     */
    public function setCountLink($count_link)
    {
        $this->countLink = $count_link;

        return $this;
    }

    /**
     * Gets the count_views.
     *
     * @return int
     */
    public function getCountViews()
    {
        return $this->countViews;
    }

    /**
     * Sets the count_views.
     *
     * @param int $count_views the count_views
     *
     * @return self
     */
    public function setCountViews($count_views)
    {
        $this->countViews = $count_views;

        return $this;
    }

    /**
     * Gets the last_calls.
     *
     * @return string
     */
    public function getLastCalls()
    {
        return $this->lastCalls;
    }

    /**
     * Sets the last calls
     *
     * @param string $last_calls
     *
     * @return self
     */
    public function setLastCalls($last_calls)
    {
        $this->lastCalls = $last_calls;

        return $this;
    }

    /**
     * Adds a
     *
     * @param Tx_Extbase_Domain_Model_Category $category
     * @return void
     */
    public function addCategories(Tx_Extbase_Domain_Model_Category $category) {
        $this->categories->attach($category);
    }
    /**
     * Removes a
     *
     * @param Tx_Extbase_Domain_Model_Category $categoryToRemove The  to be removed
     * @return void
     */
    public function removeCategories(Tx_Extbase_Domain_Model_Category $categoryToRemove) {
        $this->categories->detach($categoryToRemove);
    }
    /**
     * Returns the category
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\Category
     */
    public function getCategories() {
        return $this->categories;
    }
    /**
     * Sets the category
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_Extbase_Domain_Model_Category> $category
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category) {
        $this->categories = $category;
    }

    /**
     * Sets the value of relationState.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\State> $relationState the relation state
     *
     * @return self
     */
    public function setRelationState(State $relationState)
    {
        $this->relationState = $relationState;

        return $this;
    }

    /**
     * Sets the value of relationDistrict.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\District> $relationDistrict the relation district
     *
     * @return self
     */
    public function setRelationDistrict(District $relationDistrict)
    {
        $this->relationDistrict = $relationDistrict;

        return $this;
    }

    /**
     * Sets the value of relationCity.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\City> $relationCity the relation city
     *
     * @return self
     */
    public function setRelationCity(City $relationCity)
    {
        $this->relationCity = $relationCity;

        return $this;
    }

    /**
     * Sets the value of relationType.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\Type> $relationType the relation type
     *
     * @return self
     */
    public function setRelationType(Type $relationType)
    {
        $this->relationType = $relationType;

        return $this;
    }

    /**
     * Gets the opening.
     *
     * @return string
     */
    public function getOpening()
    {
        return $this->opening;
    }

    /**
     * Sets the opening.
     *
     * @param string $opening the opening
     *
     * @return self
     */
    public function setOpening($opening)
    {
        $this->opening = $opening;

        return $this;
    }

    /**
     * Gets the xing.
     *
     * @return string
     */
    public function getXing()
    {
        return $this->xing;
    }

    /**
     * Gets the linkedin.
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Gets the count_xing.
     *
     * @return int
     */
    public function getCountXing()
    {
        return $this->countXing;
    }

    /**
     * Gets the count_linkedin.
     *
     * @return int
     */
    public function getCountLinkedin()
    {
        return $this->countLinkedin;
    }



    /**
     * Sets the xing.
     *
     * @param string $xing the xing
     *
     * @return self
     */
    public function setXing($xing)
    {
        $this->xing = $xing;

        return $this;
    }

    /**
     * Sets the linkedin.
     *
     * @param string $linkedin the linkedin
     *
     * @return self
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Sets the count_xing.
     *
     * @param int $count_xing the count xing
     *
     * @return self
     */
    public function setCountXing($count_xing)
    {
        $this->countXing = $count_xing;

        return $this;
    }

    /**
     * Sets the count_linkedin.
     *
     * @param int $count_linkedin the count linkedin
     *
     * @return self
     */
    public function setCountLinkedin($count_linkedin)
    {
        $this->countLinkedin = $count_linkedin;

        return $this;
    }
}