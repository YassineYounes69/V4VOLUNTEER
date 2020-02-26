<?php

namespace Proxies\__CG__\ProjectBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Refugies extends \ProjectBundle\Entity\Refugies implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'id_ref', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'paysRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'id_membre', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'etatRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'nomRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'prenomRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'ageRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'genderRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'image'];
        }

        return ['__isInitialized__', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'id_ref', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'paysRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'id_membre', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'etatRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'nomRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'prenomRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'ageRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'genderRef', '' . "\0" . 'ProjectBundle\\Entity\\Refugies' . "\0" . 'image'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Refugies $proxy) {
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
    public function getIdMembre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMembre', []);

        return parent::getIdMembre();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdMembre($id_membre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdMembre', [$id_membre]);

        return parent::setIdMembre($id_membre);
    }

    /**
     * {@inheritDoc}
     */
    public function setAgeRef($ageRef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgeRef', [$ageRef]);

        return parent::setAgeRef($ageRef);
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatRef($etatRef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatRef', [$etatRef]);

        return parent::setEtatRef($etatRef);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgeRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgeRef', []);

        return parent::getAgeRef();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdRef', []);

        return parent::getIdRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdRef($id_ref)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdRef', [$id_ref]);

        return parent::setIdRef($id_ref);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaysRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaysRef', []);

        return parent::getPaysRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaysRef($paysRef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaysRef', [$paysRef]);

        return parent::setPaysRef($paysRef);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomRef', []);

        return parent::getNomRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomRef($nomRef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomRef', [$nomRef]);

        return parent::setNomRef($nomRef);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomRef', []);

        return parent::getPrenomRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomRef($prenomRef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomRef', [$prenomRef]);

        return parent::setPrenomRef($prenomRef);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenderRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenderRef', []);

        return parent::getGenderRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenderRef($genderRef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenderRef', [$genderRef]);

        return parent::setGenderRef($genderRef);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatRef', []);

        return parent::getEtatRef();
    }

}
