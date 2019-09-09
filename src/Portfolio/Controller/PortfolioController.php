<?php declare(strict_types=1);

namespace App\Portfolio\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * PortfolioController
 *
 * @package Controller
 */
class PortfolioController extends AbstractController
{
    /**
     * Prints main HTML Portfolio page
     *
     * @Route({
     *     "pl": "/",
     *     "en": "/en"
     * }, name="portfolio_index")
     */
    public function portfolio(): Response
    {
        return $this->render('@Portfolio/portfolio.html.twig');
    }

    /**
     * @Route({
     *     "pl": "/blog",
     *     "en": "/blog"
     * }, name="blog")
     */
    public function blog(): Response
    {
        return $this->render('@Portfolio/blog-soon.html.twig');
    }
}