<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PropertyController extends Controller
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
        $properties = $this->propertyRepository->with('location')->paginate(15);

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
        $categories = PropertyCategory::lists();
        $locations = $this->locationRepository->lists('name', 'id');
        $ownerships = PropertyOwnership::lists();
        $parkingTypes = PropertyParkingType::lists(true);
        $swimmingPoolTypes = PropertySwimmingPoolType::lists(true);
        $types = PropertyType::lists();
        $views = PropertyView::lists();
        
        return view('admin.properties.create')->with([
            'categories' => $categories,
            'locations' => $locations,
            'ownerships' => $ownerships,
            'parkingTypes' => $parkingTypes,
            'swimmingPoolTypes' => $swimmingPoolTypes,
            'types' => $types,
            'views' => $views
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
        $input['en'] = [
            'name' => $input['name_en'],
            'detail' => $input['detail_en'],
            'key_feature' => $input['key_feature_en'],
            'location_detail' => $input['location_detail_en'],
        ];

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

        $categories = PropertyCategory::lists();
        $locations = $this->locationRepository->lists('name', 'id');
        $ownerships = PropertyOwnership::lists();
        $parkingTypes = PropertyParkingType::lists(true);
        $swimmingPoolTypes = PropertySwimmingPoolType::lists(true);
        $types = PropertyType::lists();
        $views = PropertyView::lists();

        return view('admin.properties.edit')->with([
            'categories' => $categories,
            'locations' => $locations,
            'ownerships' => $ownerships,
            'parkingTypes' => $parkingTypes,
            'swimmingPoolTypes' => $swimmingPoolTypes,
            'types' => $types,
            'views' => $views,
            'property' => $property,
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

        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'uploads/property/';
            // Remove old file
            if ($property->image) {
                \File::delete($destinationPath . $property->image);
            }
            $fileName = sha1($file->getClientOriginalName() . time()) . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $fileName);
            $input['image'] = $fileName;
        }

        $input['en'] = [
            'name' => $input['name_en'],
            'detail' => $input['detail_en'],
            'key_feature' => $input['key_feature_en'],
            'location_detail' => $input['location_detail_en'],
        ];

        $property = $this->propertyRepository->update($input, $id);

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
