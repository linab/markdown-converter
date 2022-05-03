<div id="top"></div>
<div align="center">
<h3 align="center">Markdown to HTML Converter</h3>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project
<p>Render specific markup tags into html. Sample markdown provided below:</p>
`# Heading 1` <br>
`## Heading 2` <br>
`...` <br>
`###### Heading 6` <br>
`Unformatted text` <br>
`[Link text](https://www.example.com)`<br>
`Blank line`<br>

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [PHP](https://www.php.net/)
* [JQuery](https://jquery.com)
* [MYSQL](https://www.mysql.com/)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

Local environment will require XAMPP or Docker. Docker file is not included in this build. We will be using XAMPP for this setup.
* Download XAMPP from <a href="https://www.apachefriends.org/index.html" target="_blank">here</a> and install with PHP version 8.1+ and Apache.

### Installation

1. Unzip the folder `markdown-converter` into your XAMPP `htdocs` directory.

2. Install composer and packages in order to run PHPUnit tests. `composer.json` is already included in the files. If you do not have composer on your machine, follow this guide <a href="https://getcomposer.org/download/" target="_blank">here</a> to install composer globally. Check that composer is working prior by running `composer -v`.
  ```sh
  composer install
  ```
3. Once your environment is up and running, go to the directory project on your local URL.
  ```sh
  http://localhost/markdown-converter
   ```
   
<p align="right">(<a href="#top">back to top</a>)</p>

## PHPUnit Testing
There are two tests set up for testing Markdown Converter. In the root directory `phpunit.xml` defines `tests` folder for all our tests. In `tests` folder there is one test file with multiple test functions.

`FormTest.php` tests three(3) conditions which can easily be updated:
<ol>
  <li>testH1ExpectsHtml: Test an H1 dummy header</li>
  <li>testH2ExpectsHtml: Test an H2 dummy header</li>
  <li>testParagraphExpectsHtml: Test paragraph dummy copy</li>
</ol>

#### PHPUnit Setup:
1. Run the composer installation package on Installation Step #2. 
2. Run an administrator terminal command window such as Powershell in your root directory. 
3. Run command `vendor/bin/phpunit` to run all tests present. This was tested in a Windows environment.


<!-- CONTACT -->
## Contact

Elina Beniaminov - elina.beniaminov@gmail.com <br>
LinkedIn: https://www.linkedin.com/in/elinabeniaminov/

<p align="right">(<a href="#top">back to top</a>)</p>
