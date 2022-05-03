<?php 
require_once 'converter.php';
use PHPUnit\Framework\TestCase; 
    
class FormTestCase extends TestCase { 

    public function convert($test_markdown){
        $convert = new Converter();
        $results = $convert->parseMarkdown($test_markdown);
        return $results;
    }

    // Test h1
    public function testH1ExpectsHtml() { 
        // Put any dummy copy, example is H1 tag
        $test_markdown = strval('# Test Header');
        $results = $this->convert($test_markdown);
        // Convert function encodes into json for rendering w/ frontend.js
        $decode_result = json_decode($results);
        $this->expectOutputString($decode_result);
        print '<h1>Test Header</h1>';
    }

    // Test h2
    public function testH2ExpectsHtml() { 
        // Put any dummy copy, example is H2 tag
        $test_markdown = strval('## Second Header');
        $results = $this->convert($test_markdown);
        // Convert function encodes into json for rendering w/ frontend.js
        $decode_result = json_decode($results);
        $this->expectOutputString($decode_result);
        print '<h2>Second Header</h2>';
    }

    // Test paragraph
    public function testParagraphExpectsHtml() { 
        // Put any dummy copy, example is p tag
        $test_markdown = strval('Hello World!');
        $results = $this->convert($test_markdown);
        // Convert function encodes into json for rendering w/ frontend.js
        $decode_result = json_decode($results);
        $this->expectOutputString($decode_result);
        print '<p>Hello World!</p>';
    }

} ?>