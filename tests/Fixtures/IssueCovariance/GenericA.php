<?php

namespace AutoMapper\Tests\Fixtures\IssueCovariance;

class GenericA
{
    /**
     * @var GenericB
     */
    protected $b;

    public function getB(): GenericB
    {
        return $this->b;
    }

    public function setB(GenericB $b): void
    {
        $this->b = $b;
    }
}