<?php

namespace Facebook\WebDriver;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\WebDriverSelect;
use Facebook\WebDriver\WebDriverWait;

require_once(__DIR__ . '/vendor/autoload.php');

# $host = 'http://localhost:4444/wd/hub'; // this is the default
$host = 'http://chrome:4444/wd/hub'; // this is the default

$options = new ChromeOptions();
$capabilities = DesiredCapabilities::chrome();
$capabilities->setCapability(ChromeOptions::CAPABILITY_W3C, $options);

$driver = RemoteWebDriver::create($host, $capabilities);

$driver->manage()->timeouts()->implicitlyWait(3);

$driver->get('https://yandex.ru');
$src = $driver->getPageSource();
echo htmlentities($src);