<?php
namespace CASHMusic\Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * SystemLicenses
 *
 * @Table(name="system_licenses")
 * @Entity
 */
class SystemLicenses extends EntityBase
{

    protected $fillable;
    /**
     * @var string
     *
     * @Column(name="name", type="string", length=255, nullable=false)
     */
    protected $name;

    /**
     * @var string
     *
     * @Column(name="description", type="text", length=65535, nullable=false)
     */
    protected $description;

    /**
     * @var string
     *
     * @Column(name="fulltext", type="blob", length=65535, nullable=false)
     */
    protected $fulltext;

    /**
     * @var string
     *
     * @Column(name="url", type="string", length=255, nullable=false)
     */
    protected $url;

    /**
     * @var integer
     *
     * @Column(name="creation_date", type="integer", nullable=true)
     */
    protected $creationDate;

    /**
     * @var integer
     *
     * @Column(name="modification_date", type="integer", nullable=true)
     */
    protected $modificationDate;

    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") **/
    protected $id;
}

