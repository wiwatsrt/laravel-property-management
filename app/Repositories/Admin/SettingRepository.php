<?php

namespace App\Repositories\Admin;

use App\Models\Setting;
use Illuminate\Database\QueryException;
use InfyOm\Generator\Common\BaseRepository;
use PDOException;

class SettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [

    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Setting::class;
    }

    public function setAll()
    {
        try {
            $settings = $this->model->all();
            foreach ($settings as $setting) {
                config(['settings.' . $setting->setting_key => $setting->setting_value]);
            }
            return true;
        } catch (QueryException $e) {
            return false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function get($key)
    {
        return $this->model->where('setting_key', $key)->first()->setting_value;
    }

    public function save($key, $value)
    {
        if ($setting = $this->model->where('setting_key', $key)->first()) {
            $setting->setting_value = $value;
            $setting->save();
        } else {
            $this->model->create(['setting_key' => $key, 'setting_value' => $value]);
        }
    }
}
