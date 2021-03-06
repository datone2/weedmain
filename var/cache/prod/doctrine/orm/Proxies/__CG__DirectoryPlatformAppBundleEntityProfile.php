<?php

namespace Proxies\__CG__\DirectoryPlatform\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Profile extends \DirectoryPlatform\AppBundle\Entity\Profile implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'user', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'avatarImage', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'avatarName', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'firstName', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'lastName', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'country', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'address', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'description', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'phone', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'website', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'facebook', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'twitter', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'linkedin', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'created', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'modified'];
        }

        return ['__isInitialized__', 'id', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'user', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'avatarImage', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'avatarName', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'firstName', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'lastName', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'country', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'address', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'description', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'phone', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'website', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'facebook', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'twitter', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'linkedin', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'created', '' . "\0" . 'DirectoryPlatform\\AppBundle\\Entity\\Profile' . "\0" . 'modified'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Profile $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function onPrePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPrePersist', []);

        return parent::onPrePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function onPreUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPreUpdate', []);

        return parent::onPreUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatarImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatarImage', []);

        return parent::getAvatarImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatarImage(\Symfony\Component\HttpFoundation\File\File $avatarImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatarImage', [$avatarImage]);

        return parent::setAvatarImage($avatarImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function getCountryName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountryName', []);

        return parent::getCountryName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsite', []);

        return parent::getWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebsite($website)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsite', [$website]);

        return parent::setWebsite($website);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayName', []);

        return parent::getDisplayName();
    }

    /**
     * {@inheritDoc}
     */
    public function getInitials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInitials', []);

        return parent::getInitials();
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatarName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatarName', []);

        return parent::getAvatarName();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatarName($avatarName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatarName', [$avatarName]);

        return parent::setAvatarName($avatarName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacebook()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacebook', []);

        return parent::getFacebook();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacebook($facebook)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacebook', [$facebook]);

        return parent::setFacebook($facebook);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitter', []);

        return parent::getTwitter();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitter($twitter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitter', [$twitter]);

        return parent::setTwitter($twitter);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinkedin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinkedin', []);

        return parent::getLinkedin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinkedin($linkedin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinkedin', [$linkedin]);

        return parent::setLinkedin($linkedin);
    }

}
