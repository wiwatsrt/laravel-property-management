<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateLocationRequest;
use App\Http\Requests\Admin\UpdateLocationRequest;
use App\Repositories\Admin\LocationRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LocationController extends AppBaseController
{
    /** @var  LocationRepository */
    private $locationRepository;

    function __construct(LocationRepository $locationRepo)
    {
        $this->locationRepository = $locationRepo;
    }

    /**
     * Display a listing of the Location.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->locationRepository->pushCriteria(new RequestCriteria($request));
        $locations = $this->locationRepository->orderBy('name_en')->paginate(15);

        return view('admin.locations.index')
            ->with('locations', $locations);
    }

    /**
     * Show the form for creating a new Location.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.locations.create');
    }

    /**
     * Store a newly created Location in storage.
     *
     * @param CreateLocationRequest $request
     *
     * @return Response
     */
    public function store(CreateLocationRequest $request)
    {
        $input = $request->all();

        $data = [
            'en'  => ['name' => $input['name_en']],
            'th'  => ['name' => $input['name_th']],
        ];

        $location = $this->locationRepository->create($data);

        Flash::success(trans('messages.create.success'));

        return redirect(route('admin.locations.index'));
    }

    /**
     * Display the specified Location.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $location = $this->locationRepository->findWithoutFail($id);

        if (empty($location)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.locations.index'));
        }

        return view('admin.locations.show')->with('location', $location);
    }

    /**
     * Show the form for editing the specified Location.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $location = $this->locationRepository->findWithoutFail($id);

        if (empty($location)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.locations.index'));
        }

        return view('admin.locations.edit')->with('location', $location);
    }

    /**
     * Update the specified Location in storage.
     *
     * @param  int              $id
     * @param UpdateLocationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocationRequest $request)
    {
        $location = $this->locationRepository->findWithoutFail($id);

        if (empty($location)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.locations.index'));
        }

        $data = [
            'name_en' => $request->input(['name_en']),
            'en' => ['name' => $request->input(['name_en'])],
            'th' => ['name' => $request->input(['name_th'])],
        ];

        $location = $this->locationRepository->update($data, $id);

        Flash::success(trans('messages.update.success'));

        return redirect(route('admin.locations.index'));
    }

    /**
     * Remove the specified Location from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $location = $this->locationRepository->findWithoutFail($id);

        if (empty($location)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.locations.index'));
        }

        $this->locationRepository->delete($id);

        Flash::success(trans('messages.delete.success'));

        return redirect(route('admin.locations.index'));
    }
}
