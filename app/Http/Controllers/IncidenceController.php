<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIncidenceRequest;
use App\Http\Requests\UpdateIncidenceRequest;
use App\Repositories\IncidenceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class IncidenceController extends AppBaseController
{
    /** @var  IncidenceRepository */
    private $incidenceRepository;

    public function __construct(IncidenceRepository $incidenceRepo)
    {
        $this->incidenceRepository = $incidenceRepo;
    }

    /**
     * Display a listing of the Incidence.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $incidences = $this->incidenceRepository->all();

        return view('incidences.index')
            ->with('incidences', $incidences);
    }

    /**
     * Show the form for creating a new Incidence.
     *
     * @return Response
     */
    public function create()
    {
        return view('incidences.create');
    }

    /**
     * Store a newly created Incidence in storage.
     *
     * @param CreateIncidenceRequest $request
     *
     * @return Response
     */
    public function store(CreateIncidenceRequest $request)
    {
        $input = $request->all();

        $incidence = $this->incidenceRepository->create($input);

        Flash::success('Incidence saved successfully.');

        return redirect(route('incidences.index'));
    }

    /**
     * Display the specified Incidence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $incidence = $this->incidenceRepository->find($id);

        if (empty($incidence)) {
            Flash::error('Incidence not found');

            return redirect(route('incidences.index'));
        }

        return view('incidences.show')->with('incidence', $incidence);
    }

    /**
     * Show the form for editing the specified Incidence.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $incidence = $this->incidenceRepository->find($id);

        if (empty($incidence)) {
            Flash::error('Incidence not found');

            return redirect(route('incidences.index'));
        }

        return view('incidences.edit')->with('incidence', $incidence);
    }

    /**
     * Update the specified Incidence in storage.
     *
     * @param int $id
     * @param UpdateIncidenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIncidenceRequest $request)
    {
        $incidence = $this->incidenceRepository->find($id);

        if (empty($incidence)) {
            Flash::error('Incidence not found');

            return redirect(route('incidences.index'));
        }

        $incidence = $this->incidenceRepository->update($request->all(), $id);

        Flash::success('Incidence updated successfully.');

        return redirect(route('incidences.index'));
    }

    /**
     * Remove the specified Incidence from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $incidence = $this->incidenceRepository->find($id);

        if (empty($incidence)) {
            Flash::error('Incidence not found');

            return redirect(route('incidences.index'));
        }

        $this->incidenceRepository->delete($id);

        Flash::success('Incidence deleted successfully.');

        return redirect(route('incidences.index'));
    }
}
