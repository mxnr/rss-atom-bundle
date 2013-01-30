<?php

namespace Debril\RssBundle\Protocol;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-27 at 00:18:14.
 */
class FeedReaderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var FeedReader
     */
    protected $object;



    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new FeedReader(new \Debril\RssBundle\Driver\FileDriver);

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers Debril\RssBundle\Protocol\FeedReader::addParser
     * @todo   Implement testAddParser().
     */
    public function testAddParser()
    {
        $parser = new Parser\AtomParser;
        $this->object->addParser($parser);

        $this->assertAttributeEquals(array($parser), 'parsers', $this->object);
    }

    /**
     * @covers Debril\RssBundle\Protocol\FeedReader::getDriver
     * @todo   Implement testGetDriver().
     */
    public function testGetDriver()
    {
        $this->assertInstanceOf(
                    "\Debril\RssBundle\Driver\HttpDriver",
                    $this->object->getDriver()
                );
    }

    /**
     * @covers Debril\RssBundle\Protocol\FeedReader::getFeedContent
     * @todo   Implement testGetFeedContent().
     * @expectedException Debril\RssBundle\Protocol\Parser\ParserException
     */
    public function testGetFeedContentException()
    {
        $url = dirname(__FILE__) . '/../../Resources/sample-rss.xml';

        $this->object->getFeedContent($url, new \DateTime);
    }

    /**
     * @covers Debril\RssBundle\Protocol\FeedReader::getResponse
     * @todo   Implement testGetResponse().
     */
    public function testGetResponse()
    {
        $url = dirname(__FILE__) . '/../../Resources/sample-rss.xml';

        $this->object->addParser(new Parser\RssParser);
        $feed = $this->object->getFeedContent($url, new \DateTime);

        $this->assertInstanceOf("\Debril\RssBundle\Protocol\FeedContent", $feed);

        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test is not finished yet.'
        );
    }

    /**
     * @covers Debril\RssBundle\Protocol\FeedReader::parseBody
     * @todo   Implement testParseBody().
     */
    public function testParseBody()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Debril\RssBundle\Protocol\FeedReader::getAccurateParser
     * @todo   Implement testGetAccurateParser().
     */
    public function testGetAccurateParser()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}