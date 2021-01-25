<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testBasicTest()
    // {
    //     // $response = $this->get('/home');

    //     // $response->assertStatus(200);
    //     $stack = [];
    //     $this->assertSame(0, count($stack));

    //     array_push($stack, 'foo2');
    //     array_push($stack, 'foo');

    //     $this->assertSame('foo', $stack[count($stack)-1]);
    //     $this->assertSame(2, count($stack));

    //     $this->assertSame('foo', array_pop($stack));
    //     $this->assertSame(1, count($stack));
    // }

    // public function testEmpty(): array
    // {
    //     $stack = [];
    //     $this->assertEmpty($stack);

    //     return $stack;
    // }

    // /**
    //  * @depends testEmpty
    //  */
    // public function testPush(array $stack): array
    // {
    //     array_push($stack, 'foo');
    //     $this->assertSame('foo', $stack[count($stack)-1]);
    //     $this->assertNotEmpty($stack);

    //     return $stack;
    // }

    // /**
    //  * @depends testPush
    //  */
    // public function testPop(array $stack): void
    // {
    //     $this->assertSame('foo', array_pop($stack));
    //     $this->assertEmpty($stack);
    // }
    public function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }

    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }


}
