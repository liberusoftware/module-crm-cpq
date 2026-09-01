<?php

declare(strict_types=1);

namespace Liberu\CRM\CPQ\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $owner_id
 * @property string $name
 * @property string $status
 * @property string $currency
 * @property array<string, mixed> $configuration
 * @property array<int, mixed> $lines
 * @property float $subtotal
 * @property float $discount
 * @property float $total
 * @property float|null $margin
 */
final class CpqQuote extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_cpq_quotes';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['configuration' => 'array', 'lines' => 'array', 'subtotal' => 'float', 'discount' => 'float', 'total' => 'float', 'margin' => 'float'];
    }
}
