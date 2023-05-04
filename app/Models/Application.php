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
        $query->when(request('status'), fn ($query) => $query->where('status', request('status')))
            ->when(request('orderBy'), fn ($query) => $query->orderBy(request('orderBy'), request('dir', 'asc')));

        // $query->when(request('search'), fn ($query) =>
        //     $query->where('company_name', 'like', '%'.request('search').'%'))
        //             ->orWhere('company_email', 'like', '%'.request('search').'%')
        //             ->orWhere('first_name', 'like', '%'.request('search').'%')
        //             ->orWhere('last_name', 'like', '%'.request('search').'%')
        //             ->orWhere('email', 'like', '%'.request('search').'%')
        //             ->orWhere('phone', 'like', '%'.request('search').'%')
        // ->when(request('status'), fn ($query) =>
        //         $query->where('status', request('status')))
        // ->when(request('orderBy'), fn ($query) =>
        //         $query->orderBy(request('orderBy'), request('dir', 'asc')));
    }
}
