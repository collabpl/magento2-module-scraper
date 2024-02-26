# Magento 2 Scraper Extension

The Collab_Scraper module is a simple wrapper for [PHPScraper](https://github.com/spekulatius/PHPScraper)
which provides service for scraping data from websites.

PHPScraper is a versatile web-utility for PHP. Its primary objective is to streamline the process 
of extracting information from websites, allowing you to focus on accomplishing tasks without getting caught up
in the complexities of selectors, data structure preparation, and conversion.

## Basic usage

```php
use Collab\Scraper\Service\ScraperService;
...
public function __construct(
    ScraperService $scraperService
) {
    $this->scraperService = $scraperService;
}
...
public function getScrapedData(): ?string
{
    $url = 'https://www.example.com';
    $data = $this->scraperService->go($url);
    echo $data->title; // Title of the page
    
    return $data;
}
```

Full documentation for PHPScraper can be found [here](https://phpscraper.de/).

## Installation details
```bash
composer require collab/module-scraper
bin/magento setup:upgrade
```

