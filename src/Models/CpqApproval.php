<?php

declare(strict_types=1);

namespace Liberu\CRM\CPQ\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $quote_id
 * @property int $actor_id
 * @property string $status
 */
final class CpqApproval extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_cpq_approvals';

    protected $guarded = [];
}
