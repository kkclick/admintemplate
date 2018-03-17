<?php

namespace App\Http\Controllers;

use App\DataTables\LeaveClaimDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateLeaveClaimRequest;
use App\Http\Requests\UpdateLeaveClaimRequest;
use App\Repositories\LeaveClaimRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class LeaveClaimController extends AppBaseController
{
    /** @var  LeaveClaimRepository */
    private $leaveClaimRepository;

    public function __construct(LeaveClaimRepository $leaveClaimRepo)
    {
        $this->leaveClaimRepository = $leaveClaimRepo;
    }

    /**
     * Display a listing of the LeaveClaim.
     *
     * @param LeaveClaimDataTable $leaveClaimDataTable
     * @return Response
     */
    public function index(LeaveClaimDataTable $leaveClaimDataTable)
    {
        return $leaveClaimDataTable->render('leave_claims.index');
    }

    /**
     * Show the form for creating a new LeaveClaim.
     *
     * @return Response
     */
    public function create()
    {
        return view('leave_claims.create');
    }

    /**
     * Store a newly created LeaveClaim in storage.
     *
     * @param CreateLeaveClaimRequest $request
     *
     * @return Response
     */
    public function store(CreateLeaveClaimRequest $request)
    {
        $input = $request->all();

        $leaveClaim = $this->leaveClaimRepository->create($input);

        Flash::success('Leave Claim saved successfully.');

        return redirect(route('leaveClaims.index'));
    }

    /**
     * Display the specified LeaveClaim.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leaveClaim = $this->leaveClaimRepository->findWithoutFail($id);

        if (empty($leaveClaim)) {
            Flash::error('Leave Claim not found');

            return redirect(route('leaveClaims.index'));
        }

        return view('leave_claims.show')->with('leaveClaim', $leaveClaim);
    }

    /**
     * Show the form for editing the specified LeaveClaim.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leaveClaim = $this->leaveClaimRepository->findWithoutFail($id);

        if (empty($leaveClaim)) {
            Flash::error('Leave Claim not found');

            return redirect(route('leaveClaims.index'));
        }

        return view('leave_claims.edit')->with('leaveClaim', $leaveClaim);
    }

    /**
     * Update the specified LeaveClaim in storage.
     *
     * @param  int              $id
     * @param UpdateLeaveClaimRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeaveClaimRequest $request)
    {
        $leaveClaim = $this->leaveClaimRepository->findWithoutFail($id);

        if (empty($leaveClaim)) {
            Flash::error('Leave Claim not found');

            return redirect(route('leaveClaims.index'));
        }

        $leaveClaim = $this->leaveClaimRepository->update($request->all(), $id);

        Flash::success('Leave Claim updated successfully.');

        return redirect(route('leaveClaims.index'));
    }

    /**
     * Remove the specified LeaveClaim from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leaveClaim = $this->leaveClaimRepository->findWithoutFail($id);

        if (empty($leaveClaim)) {
            Flash::error('Leave Claim not found');

            return redirect(route('leaveClaims.index'));
        }

        $this->leaveClaimRepository->delete($id);

        Flash::success('Leave Claim deleted successfully.');

        return redirect(route('leaveClaims.index'));
    }
}
