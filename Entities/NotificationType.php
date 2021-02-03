<?php

namespace Modules\Notification\Entities;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class NotificationType extends Model
{
    
    protected $table = 'notification__notification_types';
    
    protected $fillable = [
      'title',
      'system_name'
    ];
}
