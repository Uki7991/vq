<?php


namespace App\Cast;


use App\Data\BroadcastDataBody;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\DataProperty;

class BroadcastDataBodyCast implements Cast
{
    public function cast(DataProperty $property, mixed $value, array $context): BroadcastDataBody
    {
        return BroadcastDataBody::from($value);
    }
}
