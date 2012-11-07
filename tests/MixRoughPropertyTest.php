<?php
class TestDriver extends MixRoughProperty{}
class MixRoughPropertyText extends PHPUnit_Framework_TestCase {

	public function testGetter() {

		// 存在しないプロパティに値がセットできて、参照も出来る事を確認
		$target1 = new TestDriver();
		$target1->foo = "debug";
		$this->assertEquals("debug", $target1->foo);

		// インスタンスが異なれば当然プロパティの中身も違う事を確認
		$target2 = new TestDriver();
		$target2->foo = "dev";
		$this->assertNotEquals($target1->foo, $target2->foo);
	}
}
