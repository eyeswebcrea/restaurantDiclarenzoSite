<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class SpipAccesContentBundleEntitySpipBrevesProxy extends \Spip\AccesContentBundle\Entity\SpipBreves implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function getIdBreve()
    {
        $this->__load();
        return parent::getIdBreve();
    }

    public function setDateHeure($dateHeure)
    {
        $this->__load();
        return parent::setDateHeure($dateHeure);
    }

    public function getDateHeure()
    {
        $this->__load();
        return parent::getDateHeure();
    }

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function setTexte($texte)
    {
        $this->__load();
        return parent::setTexte($texte);
    }

    public function getTexte()
    {
        $this->__load();
        return parent::getTexte();
    }

    public function setLienTitre($lienTitre)
    {
        $this->__load();
        return parent::setLienTitre($lienTitre);
    }

    public function getLienTitre()
    {
        $this->__load();
        return parent::getLienTitre();
    }

    public function setLienUrl($lienUrl)
    {
        $this->__load();
        return parent::setLienUrl($lienUrl);
    }

    public function getLienUrl()
    {
        $this->__load();
        return parent::getLienUrl();
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

    public function setLang($lang)
    {
        $this->__load();
        return parent::setLang($lang);
    }

    public function getLang()
    {
        $this->__load();
        return parent::getLang();
    }

    public function setLangueChoisie($langueChoisie)
    {
        $this->__load();
        return parent::setLangueChoisie($langueChoisie);
    }

    public function getLangueChoisie()
    {
        $this->__load();
        return parent::getLangueChoisie();
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


    public function __sleep()
    {
        return array('__isInitialized__', 'idBreve', 'dateHeure', 'titre', 'texte', 'lienTitre', 'lienUrl', 'statut', 'idRubrique', 'lang', 'langueChoisie', 'maj', 'extra');
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