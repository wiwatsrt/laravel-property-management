<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreatePropertyRequest;
use App\Http\Requests\Admin\UpdatePropertyRequest;
use App\Repositories\Admin\LocationRepository;
use App\Repositories\Admin\PropertyRepository;
use App\Support\PropertyCategory;
use App\Support\PropertyOwnership;
use App\Support\PropertyParkingType;
use App\Support\PropertySwimmingPoolType;
use App\Support\PropertyType;
use App\Support\PropertyView;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PropertyController extends AppBaseController
{
    /** @var  PropertyRepository */
    private $propertyRepository;
    private $locationRepository;

    function __construct(PropertyRepository $propertyRepo, LocationRepository $locationRepo)
    {
        $this->propertyRepository = $propertyRepo;
        $this->locationRepository = $locationRepo;
    }

    /**
     * Display a listing of the Property.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->propertyRepository->pushCriteria(new RequestCriteria($request));
        $properties = $this->propertyRepository->paginate(15);

        return view('admin.properties.index')
            ->with('properties', $properties);
    }

    /**
     * Show the form for creating a new Property.
     *
     * @return Response
     */
    public function create()
    {
        $types = PropertyType::lists();
        $categories = PropertyCategory::lists();
        $views = PropertyView::lists();
        $ownerships = PropertyOwnership::lists();
        $swimmingPoolTypes = PropertySwimmingPoolType::lists();
        $parkingTypes = PropertyParkingType::lists();
        $locations = $this->locationRepository->lists('name', 'id');

        return view('admin.properties.create')->with([
            'locations' => $locations,
            'types' => $types,
            'categories' => $categories,
            'swimmingPoolTypes' => $swimmingPoolTypes,
            'parkingTypes' => $parkingTypes,
            'views' => $views,
            'ownerships' => $ownerships
        ]);
    }

    /**
     * Store a newly created Property in storage.
     *
     * @param CreatePropertyRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertyRequest $request)
    {
        $input = $request->all();

        $property = $this->propertyRepository->create($input);

        Flash::success(trans('messages.create.success'));

        return redirect(route('admin.properties.index'));
    }

    /**
     * Display the specified Property.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $property = $this->propertyRepository->findWithoutFail($id);

        if (empty($property)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.properties.index'));
        }

        return view('admin.properties.show')->with('property', $property);
    }

    /**
     * Show the form for editing the specified Property.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $property = $this->propertyRepository->findWithoutFail($id);

        if (empty($property)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.properties.index'));
        }
        $types = PropertyType::lists();
        $categories = PropertyCategory::lists();
        $views = PropertyView::lists();
        $swimmingPoolTypes = PropertySwimmingPoolType::lists();
        $parkingTypes = PropertyParkingType::lists();
        $ownerships = PropertyOwnership::lists();
        $locations = $this->locationRepository->lists('name', 'id');

        return view('admin.properties.edit')->with([
            'property' => $property,
            'locations' => $locations,
            'types' => $types,
            'categories' => $categories,
            'swimmingPoolTypes' => $swimmingPoolTypes,
            'parkingTypes' => $parkingTypes,
            'views' => $views,
            'ownerships' => $ownerships
        ]);
    }

    /**
     * Update the specified Property in storage.
     *
     * @param  int $id
     * @param UpdatePropertyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertyRequest $request)
    {
        $property = $this->propertyRepository->findWithoutFail($id);

        if (empty($property)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.properties.index'));
        }

        $property = $this->propertyRepository->update($request->all(), $id);

        Flash::success(trans('messages.update.success'));

        return redirect(route('admin.properties.index'));
    }

    /**
     * Remove the specified Property from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $property = $this->propertyRepository->findWithoutFail($id);

        if (empty($property)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.properties.index'));
        }

        $this->propertyRepository->delete($id);

        Flash::success(trans('messages.delete.success'));

        return redirect(route('admin.properties.index'));
    }
}
