<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class AvalancheBundleSitemapBundleSitemapUrlHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id'])) {
            $value = $data['_id'];
            $return = (string) $value;
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['loc'])) {
            $value = $data['loc'];
            $return = (string) $value;
            $this->class->reflFields['loc']->setValue($document, $return);
            $hydratedData['loc'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['lastmod'])) {
            $value = $data['lastmod'];
            if ($value instanceof \MongoDate) { $date = new \DateTime(); $date->setTimestamp($value->sec); $return = $date; } else { $return = new \DateTime($value); }
            $this->class->reflFields['lastmod']->setValue($document, clone $return);
            $hydratedData['lastmod'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['changefreq'])) {
            $value = $data['changefreq'];
            $return = (string) $value;
            $this->class->reflFields['changefreq']->setValue($document, $return);
            $hydratedData['changefreq'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['priority'])) {
            $value = $data['priority'];
            $return = (string) $value;
            $this->class->reflFields['priority']->setValue($document, $return);
            $hydratedData['priority'] = $return;
        }

        /** @Many */
        $mongoData = isset($data['images']) ? $data['images'] : null;
        $return = new \Doctrine\ODM\MongoDB\PersistentCollection(new \Doctrine\Common\Collections\ArrayCollection(), $this->dm, $this->unitOfWork, '$');
        $return->setHints($hints);
        $return->setOwner($document, $this->class->fieldMappings['images']);
        $return->setInitialized(false);
        if ($mongoData) {
            $return->setMongoData($mongoData);
        }
        $this->class->reflFields['images']->setValue($document, $return);
        $hydratedData['images'] = $return;
        return $hydratedData;
    }
}