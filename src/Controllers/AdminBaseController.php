<?php
namespace Bennent\Geauth\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class AdminBaseController extends Controller
{
    public function __construct()
    {
        if (file_exists(public_path() . '/install.lock')) {
            if(!$this->checkBlackIP()) abort('403', '禁止访问');
        }
    }

    private function getSettings($name)
    {
        return DB::table(config('admin.database.setting_table'))->where('name', $name)->value('value');
    }

    public function checkBlackIP()
    {
        $blackIps = $this->getSettings('black_ip');
        if ($blackIps == '#') {
            return true;
        }else{
            return in_array(request()->ip(), explode('#', $blackIps)) ? false : true;
        }
        return false;
    }

}
