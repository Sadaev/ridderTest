<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotteryParticipant extends Model
{
    use HasFactory;
    protected $table = 'lottery_participants';
    protected $fillable = ['fio', 'phone', 'hospitalId', 'iin', 'status', 'email'];
}
