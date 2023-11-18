<?php
require('vendor/autoload.php');
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
    public function testExample() {
        $expected = 'hoge';
        $this->assertEquals($expected, 'hoge');
    }
    public function testFoo() {
        $foo = 'foo';
        $this->assertEquals($foo, 'bar');
    }
    public function testFailure(): void {
        $this->assertTrue(false);
    }

    #[TestWith([0, 0, 0])]
    #[TestWith([0, 1, 1])]
    #[TestWith([1, 0, 1])]
    #[TestWith([1, 1, 3])]
    public function testAdd(int $a, int $b, int $expected): void {
        $this->assertSame($expected, $a + $b);
    }
}