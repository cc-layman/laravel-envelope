<?php

namespace Layman\LaravelEnvelope\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string getPublicKey()
 * @method static array decrypt(string $encrypted, string $nonce, string $data)
 * @method static string signature(array $data)
 * @method static array clientEncryptData(array $data)
 * @method static bool clientVerifySignature(array $data, string $signature)
 *
 * @see \Layman\LaravelEnvelope\EnvelopeManager
 */
class Envelope extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'envelope';
    }
}
