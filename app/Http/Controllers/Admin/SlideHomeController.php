<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateSlideHomeRequest;
use App\Http\Requests\Admin\UpdateSlideHomeRequest;
use App\Repositories\Admin\SlideHomeRepository;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\File;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SlideHomeController extends Controller
{
    /** @var  SlideHomeRepository */
    private $slideHomeRepository;

    function __construct(SlideHomeRepository $slideHomeRepo)
    {
        $this->slideHomeRepository = $slideHomeRepo;
    }

    /**
     * Display a listing of the SlideHome.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->slideHomeRepository->pushCriteria(new RequestCriteria($request));
        $slideHomes = $this->slideHomeRepository->paginate(15);

        return view('admin.slideHomes.index')
            ->with('slideHomes', $slideHomes);
    }

    /**
     * Show the form for creating a new SlideHome.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.slideHomes.create');
    }

    /**
     * Store a newly created SlideHome in storage.
     *
     * @param CreateSlideHomeRequest $request
     *
     * @return Response
     */
    public function store(CreateSlideHomeRequest $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $filename = sha1($filename . time()) . '.' . $extension;
            $file->move('uploads/slideHomes', $filename);
            $slideHome = $this->slideHomeRepository->create(['filename' => $filename]);
        }

        Flash::success(trans('messages.create.success'));

        return redirect(route('admin.slideHomes.index'));
    }

    /**
     * Display the specified SlideHome.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slideHome = $this->slideHomeRepository->findWithoutFail($id);

        if (empty($slideHome)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.slideHomes.index'));
        }

        return view('admin.slideHomes.show')->with('slideHome', $slideHome);
    }

    /**
     * Show the form for editing the specified SlideHome.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slideHome = $this->slideHomeRepository->findWithoutFail($id);

        if (empty($slideHome)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.slideHomes.index'));
        }

        return view('admin.slideHomes.edit')->with('slideHome', $slideHome);
    }

    /**
     * Update the specified SlideHome in storage.
     *
     * @param  int              $id
     * @param UpdateSlideHomeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSlideHomeRequest $request)
    {
        $slideHome = $this->slideHomeRepository->findWithoutFail($id);

        if (empty($slideHome)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.slideHomes.index'));
        }

        $pathFile = 'uploads/slideHomes/' . $slideHome->filename;
        if (File::exists($pathFile))
        {
            File::delete($pathFile);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $filename = sha1($filename . time()) . '.' . $extension;
            $file->move('uploads/slideHomes', $filename);
            $slideHome = $this->slideHomeRepository->update(['filename' => $filename], $id);
        }

        Flash::success(trans('messages.update.success'));

        return redirect(route('admin.slideHomes.index'));
    }

    /**
     * Remove the specified SlideHome from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slideHome = $this->slideHomeRepository->findWithoutFail($id);

        if (empty($slideHome)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.slideHomes.index'));
        }

        $pathFile = 'uploads/slideHomes/' . $slideHome->filename;
        if (File::exists($pathFile))
        {
            File::delete($pathFile);
        }
        
        $this->slideHomeRepository->delete($id);

        Flash::success(trans('messages.delete.success'));

        return redirect(route('admin.slideHomes.index'));
    }
}
