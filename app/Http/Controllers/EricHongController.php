<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEricHongRequest;
use App\Http\Requests\UpdateEricHongRequest;
use App\Repositories\EricHongRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\EricHong;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EricHongController extends InfyOmBaseController
{
    /** @var  EricHongRepository */
    private $ericHongRepository;

    public function __construct(EricHongRepository $ericHongRepo)
    {
        $this->ericHongRepository = $ericHongRepo;
    }

    /**
     * Display a listing of the EricHong.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->ericHongRepository->pushCriteria(new RequestCriteria($request));
        $ericHongs = $this->ericHongRepository->all();
        return view('admin.ericHongs.index')
            ->with('ericHongs', $ericHongs);
    }

    /**
     * Show the form for creating a new EricHong.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.ericHongs.create');
    }

    /**
     * Store a newly created EricHong in storage.
     *
     * @param CreateEricHongRequest $request
     *
     * @return Response
     */
    public function store(CreateEricHongRequest $request)
    {
        $input = $request->all();

        $ericHong = $this->ericHongRepository->create($input);

        Flash::success('EricHong saved successfully.');

        return redirect(route('admin.ericHongs.index'));
    }

    /**
     * Display the specified EricHong.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ericHong = $this->ericHongRepository->findWithoutFail($id);

        if (empty($ericHong)) {
            Flash::error('EricHong not found');

            return redirect(route('ericHongs.index'));
        }

        return view('admin.ericHongs.show')->with('ericHong', $ericHong);
    }

    /**
     * Show the form for editing the specified EricHong.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ericHong = $this->ericHongRepository->findWithoutFail($id);

        if (empty($ericHong)) {
            Flash::error('EricHong not found');

            return redirect(route('ericHongs.index'));
        }

        return view('admin.ericHongs.edit')->with('ericHong', $ericHong);
    }

    /**
     * Update the specified EricHong in storage.
     *
     * @param  int              $id
     * @param UpdateEricHongRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEricHongRequest $request)
    {
        $ericHong = $this->ericHongRepository->findWithoutFail($id);

        

        if (empty($ericHong)) {
            Flash::error('EricHong not found');

            return redirect(route('ericHongs.index'));
        }

        $ericHong = $this->ericHongRepository->update($request->all(), $id);

        Flash::success('EricHong updated successfully.');

        return redirect(route('admin.ericHongs.index'));
    }

    /**
     * Remove the specified EricHong from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.ericHongs.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = EricHong::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.ericHongs.index'))->with('success', Lang::get('message.success.delete'));

       }

}
