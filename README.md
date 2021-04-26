## Overview

Super simple setup to get you up and running with Selenium on docker. After the containers start it will visit a web-site and download the source code.

* 1st container: Chrome browser, Chromedriver and a standalone variant of Selenium
* 2nd container: Tests using phpwebdriver library

This is a basic setup with 2 docker containers as explained by one of phpwebdriver maintainer's [@andrewnicols](https://github.com/andrewnicols)

## Execute

`$ docker-compose up`

This will boot up both containers and execute chromeTest.php which will download source code of a web page.

## NOTE:

Repository was created for educational purposes and may contain elements which could be out out of date. It's a setup "frozen in time" with elements which are compatible with each other but may need to be updated including

* The /vendor folder contains v1.10.0 of the Selenium php library, but for latest version simply delete and redownload from [php-webdriver](https://github.com/php-webdriver/php-webdriver) 
* The ubuntu installation file may need to be updated
* PHP version may need to be updated
