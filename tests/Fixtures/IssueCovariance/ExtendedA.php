<?php

namespace AutoMapper\Tests\Fixtures\IssueCovariance;

class ExtendedA extends GenericA
{
    /**
     * @var ExtendedB
     */
    protected $b;

    public function getB(): ExtendedB
    {
        return $this->b;
    }
}