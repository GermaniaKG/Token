<?php
namespace tests;

use Germania\Token\Token;

class TokenTest extends \PHPUnit\Framework\TestCase
{

	/**
	 * @dataProvider provideTokenData
	 */
	public function testSimple( $content, $lifetime )
	{

		$sut = new Token($content, $lifetime);

		$this->assertEquals( $content,  $sut->getContent() );
		$this->assertEquals( $content,  $sut->__toString() );

		$this->assertEquals( $lifetime, $sut->getLifeTime() );
	}

	/**
	 * @dataProvider provideTokenData
	 */
	public function testDebugInfo( $content, $lifetime )
	{
		$sut = new Token($content, $lifetime);
		$di = $sut->__debugInfo();
		$this->assertIsArray($di);
		$this->assertArrayHasKey("content", $di);
		$this->assertArrayHasKey("lifetime", $di);
	}


	public function provideTokenData()
	{
		return array(
			[ "foo", 200 ],
		);
	}
}
