<?php


namespace App\Data;


use Spatie\LaravelData\Attributes\WithoutValidation;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class BroadcastDataBody extends Data
{
    public function __construct(
        public string|null $name,
        #[WithoutValidation]
        public string|null $description,
        #[WithoutValidation]
        public string|null $preview,
        public AuthorData|Optional|null $author = null,
        public string|Optional $streamId = '',
        public string|Optional $rtmpURL = '',
        public string|Optional $status = '',
    )
    {
    }
}
