<?php


namespace App\Data;


use App\Cast\BroadcastDataBodyCast;
use Illuminate\Http\Request;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Attributes\WithoutValidation;
use Spatie\LaravelData\Data;

class BroadcastData extends Data
{
    public function __construct(
        #[WithCast(BroadcastDataBodyCast::class), WithoutValidation, DataCollectionOf(BroadcastDataBody::class)]
        public BroadcastDataBody $body,
        #[WithoutValidation]
        public bool $autoStart = false,
    )
    {
    }

    public static function fromRequest(Request $request)
    {
        if (!$request->hasFile('preview')) {
            $request->merge(['preview' => null]);
        }

        return new self(body: new BroadcastDataBody(...$request->only('name', 'description', 'preview')), autoStart: $request->has('autoStart'));
    }
}
