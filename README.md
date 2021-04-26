## Overview

Basic setup with 2 docker containers as explained by one of phpwebdriver maintainer's [@andrewnicols](https://github.com/andrewnicols)

* 1st container: Chrome browser, Chromedriver and a standalone variant of Selenium
* 2nd container: Tests using phpwebdriver library

## Installation

Install docker and pull from this repository. The /vendor folder contains v1.10.0 of the Selenium php library, but for latest version simply delete and redownload from [php-webdriver](https://github.com/php-webdriver/php-webdriver) 

## Execute

`$ docker-compose up`

This will boot up both containers and execute chromeTest.php which will download source code of a web page.
