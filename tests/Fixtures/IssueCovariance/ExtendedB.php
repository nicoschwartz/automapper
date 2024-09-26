<?php

namespace AutoMapper\Tests\Fixtures\IssueCovariance;

class ExtendedB extends GenericB
{
    public function specificToB(): string
    {
        return 'result from ExtendedB';
    }
}