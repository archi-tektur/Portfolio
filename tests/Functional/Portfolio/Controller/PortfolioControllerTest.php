<?php declare(strict_types=1);

namespace App\Tests\Functional\Portfolio\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * PortfolioControllerTest
 */
class PortfolioControllerTest extends WebTestCase
{
    public function testIfPageLoadsOnGetMethodWithCorrectStatusCode(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $this->assertEquals(
            Response::HTTP_OK, // HTTP 200
            $client->getResponse()->getStatusCode()
        );
    }
}
