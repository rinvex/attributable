<?php

declare(strict_types=1);

namespace Rinvex\Attributes\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Attributes\Traits\Attributable;

class Thing extends Model
{
    use Attributable;
}
