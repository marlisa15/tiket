<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKapalRequest;
use App\Http\Requests\UpdateKapalRequest;
use App\Repositories\KapalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KapalController extends AppBaseController
{
    /** @var  KapalRepository */
    private $kapalRepository;

    public function __construct(KapalRepository $kapalRepo)
    {
        $this->kapalRepository = $kapalRepo;
    }

    /**
     * Display a listing of the Kapal.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->kapalRepository->pushCriteria(new RequestCriteria($request));
        $kapals = $this->kapalRepository->all();

        return view('kapals.index')
            ->with('kapals', $kapals);
    }

    /**
     * Show the form for creating a new Kapal.
     *
     * @return Response
     */
    public function create()
    {
        return view('kapals.create');
    }

    /**
     * Store a newly created Kapal in storage.
     *
     * @param CreateKapalRequest $request
     *
     * @return Response
     */
    public function store(CreateKapalRequest $request)
    {
        $input = $request->all();

        $kapal = $this->kapalRepository->create($input);

        Flash::success('Kapal saved successfully.');

        return redirect(route('kapals.index'));
    }

    /**
     * Display the specified Kapal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kapal = $this->kapalRepository->findWithoutFail($id);

        if (empty($kapal)) {
            Flash::error('Kapal not found');

            return redirect(route('kapals.index'));
        }

        return view('kapals.show')->with('kapal', $kapal);
    }

    /**
     * Show the form for editing the specified Kapal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kapal = $this->kapalRepository->findWithoutFail($id);

        if (empty($kapal)) {
            Flash::error('Kapal not found');

            return redirect(route('kapals.index'));
        }

        return view('kapals.edit')->with('kapal', $kapal);
    }

    /**
     * Update the specified Kapal in storage.
     *
     * @param  int              $id
     * @param UpdateKapalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKapalRequest $request)
    {
        $kapal = $this->kapalRepository->findWithoutFail($id);

        if (empty($kapal)) {
            Flash::error('Kapal not found');

            return redirect(route('kapals.index'));
        }

        $kapal = $this->kapalRepository->update($request->all(), $id);

        Flash::success('Kapal updated successfully.');

        return redirect(route('kapals.index'));
    }

    /**
     * Remove the specified Kapal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kapal = $this->kapalRepository->findWithoutFail($id);

        if (empty($kapal)) {
            Flash::error('Kapal not found');

            return redirect(route('kapals.index'));
        }

        $this->kapalRepository->delete($id);

        Flash::success('Kapal deleted successfully.');

        return redirect(route('kapals.index'));
    }
}
