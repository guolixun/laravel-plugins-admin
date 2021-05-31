<?php
//+----------------------------------------------------------------------
// | 用户模型
//+----------------------------------------------------------------------
// | Author: Bennent <guolixun@gdi.com.cn>
//+----------------------------------------------------------------------
// | Date: 2021/2/26
//+----------------------------------------------------------------------

namespace Bennent\Geauth\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $guarded = [];

    public static function createOrUpdate($name, $value)
    {
        return self::updateOrCreate(['name' => $name], ['value' => $value]);
    }

}
