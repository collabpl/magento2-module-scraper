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
            'agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0'
        ])->go($url);
    }
}
