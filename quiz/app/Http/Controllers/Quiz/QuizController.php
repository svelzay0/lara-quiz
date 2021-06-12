<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Service\QuizResultService;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    protected $service;

    public function __construct(QuizResultService $service)
    {
        $this->service = $service;
    }

    public function getQuestions (Request $request) {

        dd('123');
        // return $this->service->getIndexData();
    }

    // public function showContactPersons (Request $request) {

    //     if ($request->has('datatable')) {
    //         return $this->service->getContactPersonDataTable($request);
    //     }
    //     return $this->service->getIndexData();
    // }

    // public function showCustomerTariffs (Request $request) {

    //     if ($request->has('datatable')) {
    //         return $this->service->getCustomerTariffDataTable($request);
    //     }
    //     return $this->service->getIndexData();
    // }

    // public function index(Request $request)
    // {
    //     if ($request->has('datatable')) {
    //         return $this->service->getDataTable($request);
    //     }
    //     return $this->service->getIndexData();
    // }

    // public function create()
    // {
    //     return response()->json($this->service->getCreateData());
    // }

    // public function store(ManagerCustomerStoreRequest $request)
    // {
    //      $this->service->store($request->validated());

    //     return response()->json();
    // }

    // public function edit(Customer $managerCustomer)
    // {
    //     // return new CustomerResource($managerCustomer);
    //     return response()->json($this->service->getEditData($managerCustomer));
    // }

    // public function update(ManagerCustomerStoreRequest $request, Customer $managerCustomer)
    // {
    //     $this->service->update($managerCustomer, $request->all());

    //     return response()->json();
    // }

    // public function destroy(Customer $managerCustomer)
    // {
    //     if ($managerCustomer->delete()) {
    //         return response()->json();
    //     }
    // }

    // public function company_name(Request $request)
    // {
    //     return $this->service->company_name($request->toArray());
    // }

    // public function contact_person(Request $request)
    // {
    //     return $this->service->contact_person($request->toArray());
    // }

    // public function position(Request $request)
    // {
    //     return $this->service->position($request->toArray());
    // }

    // public function created_at(Request $request)
    // {
    //     return $this->service->created_at($request->toArray());
    // }

    // public function dont_call_for_review(Request $request)
    // {
    //     return $this->service->created_at($request->toArray());
    // }

    // public function toOrder(Request $request)
    // {
    //     $this->managerOrderService->leadToOrder($request->all());

    //     return response()->json();
    // }
}
