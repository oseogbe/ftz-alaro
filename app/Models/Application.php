<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_name',
        'company_email',
        'status'
    ];

    public function getStatusAttribute($value)
    {
        $status = match ($value) {
            '1' => 'Pending',
            '2' => 'Accepted',
            '3' => 'Declined'
        };

        return $status;
    }

    public function scopeFilter($query)
    {
        $query->when(request('search'), fn ($query, $search) =>
                $query->where('company_name', 'like', "%{$search}%")
                    ->orWhere('company_email', 'like', "%{$search}%")
                    ->orWhere('first_name', 'like', "%{$search}%")
                    ->orWhere('last_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%"))
            ->when(request('status'), fn ($query, $status) => $query->where('status', $status))
            ->when(request('sortBy'), fn ($query, $sortBy) => $query->orderBy($sortBy, request('dir', 'asc')));
    }
}
