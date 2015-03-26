<?php
namespace mhdev\MhDirectory\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
 
class EntryObject extends AbstractEntity {

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\mhdev\MhDirectory\Domain\Model\State>
     */
    protected $relation_state;

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
    protected $name_intern;
 
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
    protected $map_lng;
    
    /**
     * map_lat
     *
     * @var string
     */
    protected $map_lat;
    
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
    protected $count_clicks;

    /**
     * count_views
     *
     * @var int
     */
    protected $count_views;

    
    /**
     * construction
     */
    public function __construct() {
        $this->initalizeObjectStorages();
    }
 
    /**
     * initialize object storages
     */
    public function initializeObjectStorages() {
        $this->relation_state = new ObjectStorage();
        $this->categories = new ObjectStorage();
    }

    /**
     * Gets the Title for internal use.
     *
     * @return string
     */
    public function getName_intern()
    {
        return $this->name_intern;
    }

    /**
     * Sets the Title for internal use.
     *
     * @param string $name_intern the name_intern
     *
     * @return self
     */
    public function setName_intern($name_intern)
    {
        $this->name_intern = $name_intern;

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
    public function getMap_lng()
    {
        return $this->map_lng;
    }

    /**
     * Sets the map_lng.
     *
     * @param string $map_lng the map_lng
     *
     * @return self
     */
    public function setMap_lng($map_lng)
    {
        $this->map_lng = $map_lng;

        return $this;
    }

    /**
     * Gets the map_lat.
     *
     * @return string
     */
    public function getMap_lat()
    {
        return $this->map_lat;
    }

    /**
     * Sets the map_lat.
     *
     * @param string $map_lat the map_lat
     *
     * @return self
     */
    public function setMap_lat($map_lat)
    {
        $this->map_lat = $map_lat;

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
    public function getCount_clicks()
    {
        return $this->count_clicks;
    }

    /**
     * Sets the count_clicks.
     *
     * @param int $count_clicks the count_clicks
     *
     * @return self
     */
    public function setCount_clicks($count_clicks)
    {
        $this->count_clicks = $count_clicks;

        return $this;
    }

    /**
     * Gets the count_views.
     *
     * @return int
     */
    public function getCount_views()
    {
        return $this->count_views;
    }

    /**
     * Sets the count_views.
     *
     * @param int $count_views the count_views
     *
     * @return self
     */
    public function setCount_views($count_views)
    {
        $this->count_views = $count_views;

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
}