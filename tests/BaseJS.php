<?php

namespace Tests;

// Tests for Node JS and Deno runtimes

class BaseJS extends Base
{
    public function testConsoleLogs(): void {
        $response = $this->call([]);
        self::assertEquals("log\nwarning\nerror\ninfo\ndebug\nlog1 log2\n{\"hello\": \"world\"}\n[\"hello\", \"world\"]", $response['body']['stdout']);
    }
}