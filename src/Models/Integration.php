<?php

namespace Regatta\Stream\Models;

/**
 * @Table(name="integrations")
 * @Entity(repositoryClass="IntegrationRepository")
 * @suite models
 */
class Integration
{
    /** @Id @GeneratedValue @Column(type="integer") */
    private $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
