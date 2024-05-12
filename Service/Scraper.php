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
            'agent' => 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.0.0 Safari/537.36'
        ])->go($url);
    }
}
