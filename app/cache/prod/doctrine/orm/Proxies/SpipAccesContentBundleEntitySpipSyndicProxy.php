<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class SpipAccesContentBundleEntitySpipSyndicProxy extends \Spip\AccesContentBundle\Entity\SpipSyndic implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getIdSyndic()
    {
        $this->__load();
        return parent::getIdSyndic();
    }

    public function setIdRubrique($idRubrique)
    {
        $this->__load();
        return parent::setIdRubrique($idRubrique);
    }

    public function getIdRubrique()
    {
        $this->__load();
        return parent::getIdRubrique();
    }

    public function setIdSecteur($idSecteur)
    {
        $this->__load();
        return parent::setIdSecteur($idSecteur);
    }

    public function getIdSecteur()
    {
        $this->__load();
        return parent::getIdSecteur();
    }

    public function setNomSite($nomSite)
    {
        $this->__load();
        return parent::setNomSite($nomSite);
    }

    public function getNomSite()
    {
        $this->__load();
        return parent::getNomSite();
    }

    public function setUrlSite($urlSite)
    {
        $this->__load();
        return parent::setUrlSite($urlSite);
    }

    public function getUrlSite()
    {
        $this->__load();
        return parent::getUrlSite();
    }

    public function setUrlSyndic($urlSyndic)
    {
        $this->__load();
        return parent::setUrlSyndic($urlSyndic);
    }

    public function getUrlSyndic()
    {
        $this->__load();
        return parent::getUrlSyndic();
    }

    public function setDescriptif($descriptif)
    {
        $this->__load();
        return parent::setDescriptif($descriptif);
    }

    public function getDescriptif()
    {
        $this->__load();
        return parent::getDescriptif();
    }

    public function setMaj($maj)
    {
        $this->__load();
        return parent::setMaj($maj);
    }

    public function getMaj()
    {
        $this->__load();
        return parent::getMaj();
    }

    public function setSyndication($syndication)
    {
        $this->__load();
        return parent::setSyndication($syndication);
    }

    public function getSyndication()
    {
        $this->__load();
        return parent::getSyndication();
    }

    public function setStatut($statut)
    {
        $this->__load();
        return parent::setStatut($statut);
    }

    public function getStatut()
    {
        $this->__load();
        return parent::getStatut();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setDateSyndic($dateSyndic)
    {
        $this->__load();
        return parent::setDateSyndic($dateSyndic);
    }

    public function getDateSyndic()
    {
        $this->__load();
        return parent::getDateSyndic();
    }

    public function setDateIndex($dateIndex)
    {
        $this->__load();
        return parent::setDateIndex($dateIndex);
    }

    public function getDateIndex()
    {
        $this->__load();
        return parent::getDateIndex();
    }

    public function setExtra($extra)
    {
        $this->__load();
        return parent::setExtra($extra);
    }

    public function getExtra()
    {
        $this->__load();
        return parent::getExtra();
    }

    public function setModeration($moderation)
    {
        $this->__load();
        return parent::setModeration($moderation);
    }

    public function getModeration()
    {
        $this->__load();
        return parent::getModeration();
    }

    public function setMiroir($miroir)
    {
        $this->__load();
        return parent::setMiroir($miroir);
    }

    public function getMiroir()
    {
        $this->__load();
        return parent::getMiroir();
    }

    public function setOubli($oubli)
    {
        $this->__load();
        return parent::setOubli($oubli);
    }

    public function getOubli()
    {
        $this->__load();
        return parent::getOubli();
    }

    public function setResume($resume)
    {
        $this->__load();
        return parent::setResume($resume);
    }

    public function getResume()
    {
        $this->__load();
        return parent::getResume();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idSyndic', 'idRubrique', 'idSecteur', 'nomSite', 'urlSite', 'urlSyndic', 'descriptif', 'maj', 'syndication', 'statut', 'date', 'dateSyndic', 'dateIndex', 'extra', 'moderation', 'miroir', 'oubli', 'resume');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}