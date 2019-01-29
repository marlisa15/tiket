<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRuteRequest;
use App\Http\Requests\UpdateRuteRequest;
use App\Repositories\RuteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RuteController extends AppBaseController
{
    /** @var  RuteRepository */
    private $ruteRepository;

    public function __construct(RuteRepository $ruteRepo)
    {
        $this->ruteRepository = $ruteRepo;
    }

    /**
     * Display a listing of the Rute.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ruteRepository->pushCriteria(new RequestCriteria($request));
        $rutes = $this->ruteRepository->all();

        return view('rutes.index')
            ->with('rutes', $rutes);
    }

    /**
     * Show the form for creating a new Rute.
     *
     * @return Response
     */
    public function create()
    {
        return view('rutes.create');
    }

    /**
     * Store a newly created Rute in storage.
     *
     * @param CreateRuteRequest $request
     *
     * @return Response
     */
    public function store(CreateRuteRequest $request)
    {
        $input = $request->all();

        $rute = $this->ruteRepository->create($input);

        Flash::success('Rute saved successfully.');

        return redirect(route('rutes.index'));
    }

    /**
     * Display the specified Rute.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rute = $this->ruteRepository->findWithoutFail($id);

        if (empty($rute)) {
            Flash::error('Rute not found');

            return redirect(route('rutes.index'));
        }

        return view('rutes.show')->with('rute', $rute);
    }

    /**
     * Show the form for editing the specified Rute.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rute = $this->ruteRepository->findWithoutFail($id);

        if (empty($rute)) {
            Flash::error('Rute not found');

            return redirect(route('rutes.index'));
        }

        return view('rutes.edit')->with('rute', $rute);
    }

    /**
     * Update the specified Rute in storage.
     *
     * @param  int              $id
     * @param UpdateRuteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRuteRequest $request)
    {
        $rute = $this->ruteRepository->findWithoutFail($id);

        if (empty($rute)) {
            Flash::error('Rute not found');

            return redirect(route('rutes.index'));
        }

        $rute = $this->ruteRepository->update($request->all(), $id);

        Flash::success('Rute updated successfully.');

        return redirect(route('rutes.index'));
    }

    /**
     * Remove the specified Rute from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rute = $this->ruteRepository->findWithoutFail($id);

        if (empty($rute)) {
            Flash::error('Rute not found');

            return redirect(route('rutes.index'));
        }

        $this->ruteRepository->delete($id);

        Flash::success('Rute deleted successfully.');

        return redirect(route('rutes.index'));
    }
}
