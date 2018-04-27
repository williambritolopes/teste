<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Content extends \AppBundle\Entity\Content implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'file', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'content', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'created', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'updated', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'deleted', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'magazine', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'issn', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'articleId', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'contrib', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'autorNotes', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'pubDate', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'abstract', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'keywords', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'volume', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'issue', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'fpage', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'lpage', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'contentPt', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'contentEn', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'referencies');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'file', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'content', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'created', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'updated', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'deleted', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'magazine', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'issn', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'articleId', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'contrib', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'autorNotes', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'pubDate', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'abstract', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'keywords', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'volume', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'issue', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'fpage', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'lpage', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'contentPt', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'contentEn', '' . "\0" . 'AppBundle\\Entity\\Content' . "\0" . 'referencies');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Content $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile($file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($created));

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', array($updated));

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', array());

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', array($deleted));

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', array());

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMagazine(\AppBundle\Entity\Magazine $magazine = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMagazine', array($magazine));

        return parent::setMagazine($magazine);
    }

    /**
     * {@inheritDoc}
     */
    public function getMagazine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMagazine', array());

        return parent::getMagazine();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', array($content));

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', array());

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setIssn($issn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIssn', array($issn));

        return parent::setIssn($issn);
    }

    /**
     * {@inheritDoc}
     */
    public function getIssn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIssn', array());

        return parent::getIssn();
    }

    /**
     * {@inheritDoc}
     */
    public function setArticleId($articleId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArticleId', array($articleId));

        return parent::setArticleId($articleId);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticleId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticleId', array());

        return parent::getArticleId();
    }

    /**
     * {@inheritDoc}
     */
    public function setContrib($contrib)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContrib', array($contrib));

        return parent::setContrib($contrib);
    }

    /**
     * {@inheritDoc}
     */
    public function getContrib()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContrib', array());

        return parent::getContrib();
    }

    /**
     * {@inheritDoc}
     */
    public function setAutorNotes($autorNotes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAutorNotes', array($autorNotes));

        return parent::setAutorNotes($autorNotes);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutorNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutorNotes', array());

        return parent::getAutorNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function setPubDate($pubDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPubDate', array($pubDate));

        return parent::setPubDate($pubDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPubDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPubDate', array());

        return parent::getPubDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbstract($abstract)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbstract', array($abstract));

        return parent::setAbstract($abstract);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbstract()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbstract', array());

        return parent::getAbstract();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeywords($keywords)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeywords', array($keywords));

        return parent::setKeywords($keywords);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeywords', array());

        return parent::getKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolume($volume)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolume', array($volume));

        return parent::setVolume($volume);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolume()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolume', array());

        return parent::getVolume();
    }

    /**
     * {@inheritDoc}
     */
    public function setIssue($issue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIssue', array($issue));

        return parent::setIssue($issue);
    }

    /**
     * {@inheritDoc}
     */
    public function getIssue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIssue', array());

        return parent::getIssue();
    }

    /**
     * {@inheritDoc}
     */
    public function setFpage($fpage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFpage', array($fpage));

        return parent::setFpage($fpage);
    }

    /**
     * {@inheritDoc}
     */
    public function getFpage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFpage', array());

        return parent::getFpage();
    }

    /**
     * {@inheritDoc}
     */
    public function setLpage($lpage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLpage', array($lpage));

        return parent::setLpage($lpage);
    }

    /**
     * {@inheritDoc}
     */
    public function getLpage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLpage', array());

        return parent::getLpage();
    }

    /**
     * {@inheritDoc}
     */
    public function setContentPt($contentPt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContentPt', array($contentPt));

        return parent::setContentPt($contentPt);
    }

    /**
     * {@inheritDoc}
     */
    public function getContentPt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContentPt', array());

        return parent::getContentPt();
    }

    /**
     * {@inheritDoc}
     */
    public function setContentEn($contentEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContentEn', array($contentEn));

        return parent::setContentEn($contentEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getContentEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContentEn', array());

        return parent::getContentEn();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferencies($referencies)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferencies', array($referencies));

        return parent::setReferencies($referencies);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferencies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferencies', array());

        return parent::getReferencies();
    }

}