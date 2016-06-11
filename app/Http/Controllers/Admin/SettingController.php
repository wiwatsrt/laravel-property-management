<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Admin\SettingRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SettingController extends AppBaseController
{
    /** @var  SettingRepository */
    private $settingRepository;

    function __construct(SettingRepository $settingRepo)
    {
        $this->settingRepository = $settingRepo;
    }

    /**
     * Display a listing of the Setting.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->settingRepository->pushCriteria(new RequestCriteria($request));
        $settings = $this->settingRepository->all();

        return view('admin.settings.index')
            ->with('settings', $settings);
    }

    /**
     * Update the specified Setting in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        foreach ($request->all() as $key => $value) {
            if (substr($key, 0, 8) == 'setting_') {
                $skipSave = false;
                $key = substr($key, 8);
                if (!$skipSave) {
                    $this->settingRepository->save($key, $value);
                }
            }
        }

        Flash::success(trans('messages.update.success'));

        return redirect(route('admin.settings.index'));
    }
}
