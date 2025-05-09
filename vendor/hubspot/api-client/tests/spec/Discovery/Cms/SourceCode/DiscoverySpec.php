<?php

namespace spec\HubSpot\Discovery\Cms\SourceCode;

use GuzzleHttp\Client;
use HubSpot\Client\Cms\SourceCode\Api\ContentApi;
use HubSpot\Client\Cms\SourceCode\Api\ExtractApi;
use HubSpot\Client\Cms\SourceCode\Api\MetadataApi;
use HubSpot\Client\Cms\SourceCode\Api\ValidationApi;
use HubSpot\Config;
use HubSpot\Discovery\Cms\SourceCode\Discovery;
use PhpSpec\ObjectBehavior;

class DiscoverySpec extends ObjectBehavior
{
    public function let(Client $client, Config $config)
    {
        $this->beConstructedWith($client, $config);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Discovery::class);
    }

    public function it_creates_clients()
    {
        $this->contentApi()->shouldHaveType(ContentApi::class);
        $this->extractApi()->shouldHaveType(ExtractApi::class);
        $this->metadataApi()->shouldHaveType(MetadataApi::class);
        $this->validationApi()->shouldHaveType(ValidationApi::class);
    }
}
