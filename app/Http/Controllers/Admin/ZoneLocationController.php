<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateZoneLocationRequest;
use App\Http\Requests\Admin\UpdateZoneLocationRequest;
use App\Repositories\Admin\ZoneLocationRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ZoneLocationController extends AppBaseController
{
    /** @var  ZoneLocationRepository */
    private $zoneLocationRepository;

    function __construct(ZoneLocationRepository $zoneLocationRepo)
    {
        $this->zoneLocationRepository = $zoneLocationRepo;
    }

    /**
     * Display a listing of the ZoneLocation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->zoneLocationRepository->pushCriteria(new RequestCriteria($request));
        $zoneLocations = $this->zoneLocationRepository->paginate(15);

        return view('admin.zoneLocations.index')
            ->with('zoneLocations', $zoneLocations);
    }

    /**
     * Show the form for creating a new ZoneLocation.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.zoneLocations.create');
    }

    /**
     * Store a newly created ZoneLocation in storage.
     *
     * @param CreateZoneLocationRequest $request
     *
     * @return Response
     */
    public function store(CreateZoneLocationRequest $request)
    {
        $input = $request->all();

        $data = [
            'name_en' => $input['name_en'],
            'en'  => ['name' => $input['name_en']],
            'th'  => ['name' => $input['name_th']],
        ];
        
        $zoneLocation = $this->zoneLocationRepository->create($data);

        Flash::success(trans('messages.create.success'));

        return redirect(route('admin.zoneLocations.index'));
    }

    /**
     * Display the specified ZoneLocation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $zoneLocation = $this->zoneLocationRepository->findWithoutFail($id);

        if (empty($zoneLocation)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.zoneLocations.index'));
        }

        return view('admin.zoneLocations.show')->with('zoneLocation', $zoneLocation);
    }

    /**
     * Show the form for editing the specified ZoneLocation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $zoneLocation = $this->zoneLocationRepository->findWithoutFail($id);

        if (empty($zoneLocation)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.zoneLocations.index'));
        }

        return view('admin.zoneLocations.edit')->with('zoneLocation', $zoneLocation);
    }

    /**
     * Update the specified ZoneLocation in storage.
     *
     * @param  int              $id
     * @param UpdateZoneLocationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateZoneLocationRequest $request)
    {
        $zoneLocation = $this->zoneLocationRepository->findWithoutFail($id);

        if (empty($zoneLocation)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.zoneLocations.index'));
        }

        $data = [
            'name_en' => $request->input(['name_en']),
            'en' => ['name' => $request->input(['name_en'])],
            'th' => ['name' => $request->input(['name_th'])],
        ];

        $zoneLocation = $this->zoneLocationRepository->update($data, $id);

        Flash::success(trans('messages.update.success'));

        return redirect(route('admin.zoneLocations.index'));
    }

    /**
     * Remove the specified ZoneLocation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $zoneLocation = $this->zoneLocationRepository->findWithoutFail($id);

        if (empty($zoneLocation)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.zoneLocations.index'));
        }

        $this->zoneLocationRepository->delete($id);

        Flash::success(trans('messages.delete.success'));

        return redirect(route('admin.zoneLocations.index'));
    }
}
