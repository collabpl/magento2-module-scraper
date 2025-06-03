<?php
/**
 * @category  Collab
 * @package   Collab\Scraper
 * @author    Marcin Jędrzejewski <m.jedrzejewski@collab.pl>
 * @copyright 2024 Collab
 * @license   MIT
 */

declare(strict_types=1);

namespace Collab\Scraper\Service;

use Spekulatius\PHPScraper\PHPScraper;

class Scraper
{
    public function __construct(
        protected PHPScraper $scraper
    ) {
    }

    public function getSource(string $url): PHPScraper
    {
        return $this->scraper->setConfig([
            'agent' => 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4695.0 Mobile Safari/537.36 Chrome-Lighthouse'
        ])->go($url);
    }
}
