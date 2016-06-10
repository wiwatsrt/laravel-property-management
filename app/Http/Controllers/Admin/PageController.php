<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreatePageRequest;
use App\Http\Requests\Admin\UpdatePageRequest;
use App\Repositories\Admin\PageRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PageController extends AppBaseController
{
    /** @var  PageRepository */
    private $pageRepository;

    function __construct(PageRepository $pageRepo)
    {
        $this->pageRepository = $pageRepo;
    }

    /**
     * Display a listing of the Page.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pageRepository->pushCriteria(new RequestCriteria($request));
        $pages = $this->pageRepository->paginate(15);

        return view('admin.pages.index')
            ->with('pages', $pages);
    }

    /**
     * Show the form for creating a new Page.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created Page in storage.
     *
     * @param CreatePageRequest $request
     *
     * @return Response
     */
    public function store(CreatePageRequest $request)
    {
        $input = $request->all();

        $data = [
            'slug' => $input['slug'],
            'en' => [
                'title' => $input['title_en'],
                'content' => $input['content_en']
            ],
            'th' => [
                'title' => $input['title_th'],
                'content' => $input['content_th']
            ]
        ];

        $page = $this->pageRepository->create($data);

        Flash::success(trans('messages.create.success'));

        return redirect(route('admin.pages.index'));
    }

    /**
     * Display the specified Page.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $page = $this->pageRepository->findWithoutFail($id);

        if (empty($page)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.pages.index'));
        }

        return view('admin.pages.show')->with('page', $page);
    }

    /**
     * Show the form for editing the specified Page.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $page = $this->pageRepository->findWithoutFail($id);

        if (empty($page)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.pages.index'));
        }

        return view('admin.pages.edit')->with('page', $page);
    }

    /**
     * Update the specified Page in storage.
     *
     * @param  int              $id
     * @param UpdatePageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePageRequest $request)
    {
        $page = $this->pageRepository->findWithoutFail($id);

        if (empty($page)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.pages.index'));
        }

        $input = $request->all();
        $data = [
            'slug' => $input['slug'],
            'en' => [
                'title' => $input['title_en'],
                'content' => $input['content_en']
            ],
            'th' => [
                'title' => $input['title_th'],
                'content' => $input['content_th']
            ]
        ];

        $page = $this->pageRepository->update($data, $id);

        Flash::success(trans('messages.update.success'));

        return redirect(route('admin.pages.index'));
    }

    /**
     * Remove the specified Page from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $page = $this->pageRepository->findWithoutFail($id);

        if (empty($page)) {
            Flash::error(trans('messages.404_not_found'));

            return redirect(route('admin.pages.index'));
        }

        $this->pageRepository->delete($id);

        Flash::success(trans('messages.delete.success'));

        return redirect(route('admin.pages.index'));
    }
}
