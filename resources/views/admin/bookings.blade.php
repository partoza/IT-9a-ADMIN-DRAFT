@extends('layouts.administration')

@section('content')

    <?php
    $clients = [
        ["id" => "1", "name" => "Hans Burger", "amount" => "$863.45", "status" => "For Approval", "date" => "6/10/2020", "avatar" => "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"],
        ["id" => "2", "name" => "Sarah Lee", "amount" => "$123.45", "status" => "Paid", "date" => "5/12/2020", "avatar" => "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"],
        ["id" => "3", "name" => "John Doe", "amount" => "$245.67", "status" => "Ongoing", "date" => "7/15/2020", "avatar" => "https://images.unsplash.com/photo-1534528741775-758b1f8f3b1d?crop=entropy&cs=tinysrgb&fit=max&ixid=MXwyMDg4OHwwfDF8c2VhY2h8MXx8aGFuZHxlbnwwfDF8fDE2ODI3Nzg5NzE&ixlib=rb-1.2.1&q=80&w=1080"],
        ["id" => "4", "name" => "Emily Clark", "amount" => "$543.21", "status" => "Cancel", "date" => "4/5/2020", "avatar" => "https://images.unsplash.com/photo-1508595594018-e53c1237d870?crop=entropy&cs=tinysrgb&fit=max&ixid=MXwyMDg4OHwwfDF8c2VhY2h8OXx8ZW1pbHklMjBjbGFya3xlbnwwfDF8fDE2ODI3NzgwOTI&ixlib=rb-1.2.1&q=80&w=1080"],
        ["id" => "5", "name" => "Mark Thompson", "amount" => "$789.99", "status" => "Due", "date" => "6/25/2020", "avatar" => "https://images.unsplash.com/photo-1573496528412-163eea3efc72?crop=entropy&cs=tinysrgb&fit=max&ixid=MXwyMDg4OHwwfDF8c2VhY2h8Mnx8bWFya3xlbnwwfDF8fDE2ODI3NzgyMzk&ixlib=rb-1.2.1&q=80&w=1080"],
        ["id" => "6", "name" => "Anna Swift", "amount" => "$903.12", "status" => "Damage", "date" => "3/18/2020", "avatar" => "https://images.unsplash.com/photo-1573497046978-5e2b9f971bc2?crop=entropy&cs=tinysrgb&fit=max&ixid=MXwyMDg4OHwwfDF8c2VhY2h8OHx8YW5uYSUyMHN3aWZ0fGVufDB8fDF8fDE2ODI3NzgwMTQ&ixlib=rb-1.2.1&q=80&w=1080"],
        ["id" => "7", "name" => "Jack Daniels", "amount" => "$450.67", "status" => "Paid", "date" => "2/11/2020", "avatar" => "https://images.unsplash.com/photo-1515010564209-e27c1e91b99f?crop=entropy&cs=tinysrgb&fit=max&ixid=MXwyMDg4OHwwfDF8c2VhY2h8Mnx8amFjayUyMGRhbmllbHN8ZW58MHx8fDE2ODI3NzgyMjE&ixlib=rb-1.2.1&q=80&w=1080"],
        ["id" => "8", "name" => "Lily Adams", "amount" => "$654.88", "status" => "For Approval", "date" => "1/21/2020", "avatar" => "https://images.unsplash.com/photo-1573496522283-f1c9c2e00e3c?crop=entropy&cs=tinysrgb&fit=max&ixid=MXwyMDg4OHwwfDF8c2VhY2h8M3x8bGlseSUyMGFkYW1zfGVufDB8fDF8fDE2ODI3NzgwMzM&ixlib=rb-1.2.1&q=80&w=1080"],

    ];

    function getStatusBadge($status)
    {
        switch ($status) {
            case 'For Approval':
                return ['text' => 'For Approval', 'color' => 'bg-sky-100 text-sky-700'];
            case 'Ongoing':
                return ['text' => 'Ongoing', 'color' => 'bg-yellow-100 text-yellow-700'];
            case 'Paid':
                return ['text' => 'Paid', 'color' => 'bg-green-100 text-green-700'];
            case 'Cancel':
                return ['text' => 'Cancel', 'color' => 'bg-red-100 text-red-700'];
            case 'Due':
                return ['text' => 'Due for Returnment', 'color' => 'bg-orange-100 text-orange-700'];
            case 'Damage':
                return ['text' => 'Damage', 'color' => 'bg-purple-100 text-purple-700'];
            default:
                return ['text' => 'Unknown', 'color' => 'bg-gray-100 text-gray-700'];
        }
    }
                                                                ?>

    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Bookings
    </h2>

    <!-- Tab Options Sections -->
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="bookings-tab"
            data-tabs-toggle="#bookings-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="approval-tab" data-tabs-target="#approval"
                    type="button" role="tab" aria-controls="approval" aria-selected="false">For Approval</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="ongoing-tab" data-tabs-target="#ongoing" type="button" role="tab" aria-controls="ongoing"
                    aria-selected="false">Ongoing</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="due-tab" data-tabs-target="#due" type="button" role="tab" aria-controls="due"
                    aria-selected="false">Due</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="cancel-tab" data-tabs-target="#cancel" type="button" role="tab" aria-controls="cancel"
                    aria-selected="false">Cancelled</button>
            </li>
        </ul>
    </div>

    <!-- Approval Bookings Sections -->
    <div id="bookings-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="approval" role="tabpanel"
            aria-labelledby="approval-tab">
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                For Approval Bookings
            </h4>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap text-center">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Client</th>
                                <th class="px-4 py-3">Amount</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                            <?php
    $hasForApproval = false; // Initialize flag
    foreach ($clients as $client):
        if ($client['status'] !== "For Approval")
            continue;
        $hasForApproval = true; // At least one item is found
        $statusBadge = getStatusBadge($client['status']);
                                                    ?>

                            <tr class="text-gray-700 dark:text-gray-400">
                                <!-- For Approval - Client Name Data -->
                                <td class="px-4 py-3">
                                    <div class="flex items-center justify-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="<?= $client['avatar'] ?>" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-semibold"><?= $client['name'] ?></p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <!--  For Approval - Amount -->
                                <td class="px-4 py-3 text-sm"><?= $client['amount'] ?></td>

                                <!--  For Approval - Status -->
                                <td class="px-4 py-3 text-xs">
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight <?= $statusBadge['color'] ?> rounded-full">
                                        <?= $statusBadge['text'] ?>
                                    </span>
                                </td>

                                <!-- For Approval - Date-->
                                <td class="px-4 py-3 text-sm"><?= $client['date'] ?></td>

                                <!--  For Approval - Actions -->
                                <td class="px-4 py-3">

                                    <!-- Wrapper (Position Relative) -->
                                    <div class="relative inline-block text-left">
                                        <!-- Toggle Button -->
                                        <input type="checkbox" id="approval-toggle" class="peer hidden" />
                                        <label for="approval-toggle"
                                            class="flex justify-center items-center w-10 h-10 text-gray-600 dark:text-gray-300 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                            <!-- Three Dots Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-5 h-5 pointer-events-none">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                            </svg>
                                        </label>

                                        <!-- Dropdown Menu -->
                                        <div
                                            class="absolute right-0 mt-2 w-48 bg-white translate-y-ful bottom-50 rounded-md shadow-lg opacity-0 peer-checked:opacity-100 peer-checked:scale-100 peer-checked:block hidden transition-all duration-200 z-40">
                                            <!-- View Details -->
                                            <label for="approval-toggle">
                                                <div data-modal-target="approve-modal"
                                                    class="flex items-center gap-2 px-4 py-2 text-sm text-white bg-blue-600 rounded-md shadow hover:bg-blue-700 cursor-pointer transition mx-2 my-1">
                                                    <svg class="w-5 h-5 text-white dark:text-gray-300" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 4.5C7.03 4.5 3 7.61 3 10.5C3 13.39 7.03 16.5 12 16.5C16.97 16.5 21 13.39 21 10.5C21 7.61 16.97 4.5 12 4.5ZM12 14C9.79 14 8 11.77 8 10.5C8 9.23 9.79 7 12 7C14.21 7 16 9.23 16 10.5C16 11.77 14.21 14 12 14ZM12 9.5C11.17 9.5 10.5 10.17 10.5 11C10.5 11.83 11.17 12.5 12 12.5C12.83 12.5 13.5 11.83 13.5 11C13.5 10.17 12.83 9.5 12 9.5Z" />
                                                    </svg>
                                                    View Details
                                                </div>
                                            </label>

                                            <!-- Approve -->
                                            <label for="approval-toggle">
                                                <div data-modal-target="approve-modal" data-modal-toggle="approve-modal"
                                                    class="flex items-center gap-2 px-4 py-2 text-sm text-white bg-green-600 rounded-md shadow hover:bg-green-700 dark:bg-green-500 dark:hover:bg-green-600 cursor-pointer transition mx-2 my-1">
                                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z" />
                                                    </svg>
                                                    Approve
                                                </div>
                                            </label>

                                            <!-- Cancel -->
                                            </label for="approval-toggle">
                                            <div data-modal-target="cancel-modal" data-modal-toggle="cancel-modal"
                                                class="flex items-center gap-2 px-4 py-2 text-sm text-white bg-red-600 rounded-md shadow hover:bg-red-700 dark:bg-red-500 dark:hover:bg-red-600 cursor-pointer transition mx-2 my-1">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" />
                                                </svg>
                                                Cancel
                                            </div>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Loop Ending Point -->
                            <?php endforeach;?>
                            <!-- If No For Approval Data-->
                            <?php if (!$hasForApproval): ?>
                            <tr>
                                <td colspan="5" class="px-5 py-3 text-center text-sm text-gray-500 dark:text-gray-400">
                                    No For Approval bookings found.
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>
    </div>

    <!-- Approval Modal -->
    <div id="approve-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex justify-start pt-4 bg-black bg-opacity-50 overflow-y-auto">
        <div class="bg-white rounded-lg shadow-lg dark:bg-gray-700 w-full max-w-md mx-auto">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b dark:border-gray-500">
                <h5 class="text-lg font-medium text-gray-700 dark:text-gray-300">
                    Approval Required
                </h5>
                <button data-modal-hide="approve-modal" type="button"
                    class="text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600 p-2 rounded-full">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="p-6 text-center">
                <!-- Icon -->
                <svg class="mx-auto mb-4 text-green-500 w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <!-- Message -->
                <p class="mb-5 text-lg text-gray-700 dark:text-gray-300">
                    Are you sure you want to approve this?
                </p>
            </div>
            <!-- Modal Footer -->
            <div class="flex justify-end items-center p-4 border-t dark:border-gray-500">
                <!-- Approve Button -->
                <button data-modal-hide="approve-modal" type="button"
                    class="text-white bg-green-600 hover:bg-green-700 font-medium rounded-md text-sm px-5 py-2.5 mr-2 shadow">
                    Yes, approve
                </button>
                <!-- Cancel Button -->
                <button data-modal-hide="approve-modal" type="button"
                    class="text-gray-600 bg-white border border-gray-300 hover:bg-gray-100 rounded-md text-sm px-5 py-2.5 dark:bg-gray-600 dark:text-gray-200 dark:border-gray-500 dark:hover:bg-gray-500">
                    No, cancel
                </button>
            </div>
        </div>
    </div>

    <!-- Cancel Modal -->
    <div id="cancel-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex justify-start pt-4 bg-black bg-opacity-50 overflow-y-auto">
        <div class="bg-white rounded-lg shadow dark:bg-gray-700 w-full max-w-md mx-auto">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b dark:border-gray-500">
                <h5 class="text-lg font-medium text-gray-900 dark:text-white">
                    Reason for Cancellation
                </h5>
                <button data-modal-hide="cancel-modal" type="button"
                    class="text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600 p-2 rounded-full">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="p-6 text-center">
                <textarea rows="4"
                    class="w-full p-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter your reason here..."></textarea>
            </div>
            <!-- Modal Footer -->
            <div class="flex justify-end items-center p-4 border-t dark:border-gray-500">
                <!-- Submit Button -->
                <button data-modal-hide="cancel-modal" type="button"
                    class="text-white bg-red-600 hover:bg-red-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 shadow">
                    Submit Reason
                </button>
                <!-- Close Button -->
                <button data-modal-hide="cancel-modal" type="button"
                    class="text-gray-500 bg-white border border-gray-200 hover:bg-gray-100 rounded-lg text-sm px-5 py-2.5 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:bg-gray-600">
                    Close
                </button>
            </div>
        </div>
    </div>

    <!-- Ongoing Bookings Section -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ongoing" role="tabpanel"
        aria-labelledby="ongoing-tab">
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Ongoing Bookings
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap text-center">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b bg-gray-50 dark:bg-gray-800 dark:text-gray-400">
                                <th class="px-4 py-3">Client</th>
                                <th class="px-4 py-3">Amount</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                            <!-- Loop through Ongoing bookings -->
                            <?php
    $hasOngoing = false; // Flag to check if ongoing data exists
    foreach ($clients as $client):
        if ($client['status'] !== "Ongoing")
            continue;
        $hasOngoing = true;
        $statusBadge = getStatusBadge($client['status']);
                                                                                    ?>

                            <tr class="text-gray-700 dark:text-gray-400">
                                <!-- Ongoing - Client Name Data -->
                                <td class="px-4 py-3">
                                    <div class="flex items-center justify-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="<?= $client['avatar'] ?>" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <p class="font-semibold"><?= $client['name'] ?></p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer</p>
                                        </div>
                                    </div>
                                </td>

                                <!-- Ongoing - Amount -->
                                <td class="px-4 py-3 text-sm"><?= $client['amount'] ?></td>

                                <!-- Ongoing - Status -->
                                <td class="px-4 py-3 text-xs">
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight <?= $statusBadge['color'] ?> rounded-full">
                                        <?= $statusBadge['text'] ?>
                                    </span>
                                </td>

                                <!-- Ongoing - Date -->
                                <td class="px-4 py-3 text-sm"><?= $client['date'] ?></td>

                                <!-- Ongoing - Actions -->
                                <td class="px-4 py-3">
                                    <div class="flex justify-center space-x-4 text-sm">
                                        <!-- View Details Button -->
                                        <button data-modal-target="view-details-modal"
                                            data-modal-toggle="view-details-modal"
                                            class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md shadow hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 transition">
                                            <svg class="w-5 h-5 text-white dark:text-gray-300" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 4.5C7.03 4.5 3 7.61 3 10.5C3 13.39 7.03 16.5 12 16.5C16.97 16.5 21 13.39 21 10.5C21 7.61 16.97 4.5 12 4.5ZM12 14C9.79 14 8 11.77 8 10.5C8 9.23 9.79 7 12 7C14.21 7 16 9.23 16 10.5C16 11.77 14.21 14 12 14ZM12 9.5C11.17 9.5 10.5 10.17 10.5 11C10.5 11.83 11.17 12.5 12 12.5C12.83 12.5 13.5 11.83 13.5 11C13.5 10.17 12.83 9.5 12 9.5Z" />
                                            </svg>
                                            View Details
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- End of one Ongoing item -->
                            <?php endforeach; ?>

                            <!-- If No Ongoing Data -->
                            <?php if (!$hasOngoing): ?>
                            <tr>
                                <td colspan="5" class="px-5 py-3 text-center text-sm text-gray-500 dark:text-gray-400">
                                    No Ongoing bookings found.
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>
    </div>

    <!-- Due Bookings Section -->
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="due" role="tabpanel" aria-labelledby="due-tab">
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Due for Returnment Bookings
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full">
                <div class="overflow-x-auto">
                    <table class="min-w-full whitespace-no-wrap text-center">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b">
                                <th class="px-4 py-3">Client</th>
                                <th class="px-4 py-3">Amount</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                            <!-- Loop through Due bookings -->
                            <?php
    $hasDue = false;
    foreach ($clients as $client):
        if ($client['status'] !== "Due")
            continue;
        $hasDue = true;
        $statusBadge = getStatusBadge($client['status']);
                                                                                    ?>

                            <tr class="text-gray-700 dark:text-gray-400">
                                <!-- Due - Client Name -->
                                <td class="px-4 py-3">
                                    <div class="flex items-center justify-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="<?= $client['avatar'] ?>" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <p class="font-semibold"><?= $client['name'] ?></p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer</p>
                                        </div>
                                    </div>
                                </td>

                                <!-- Due - Amount -->
                                <td class="px-4 py-3 text-sm"><?= $client['amount'] ?></td>

                                <!-- Due - Status -->
                                <td class="px-4 py-3 text-xs">
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight <?= $statusBadge['color'] ?> rounded-full">
                                        <?= $statusBadge['text'] ?>
                                    </span>
                                </td>

                                <!-- Due - Date -->
                                <td class="px-4 py-3 text-sm"><?= $client['date'] ?></td>

                                <!-- Due - Actions -->
                                <td class="px-4 py-3">
                                    <div class="relative inline-block text-left z-50">
                                        <!-- Toggle Button -->
                                        <input type="checkbox" id="due-toggle" class="peer hidden" />
                                        <label for="due-toggle"
                                            class="inline-flex justify-center items-center w-10 h-10 text-gray-600 dark:text-gray-300 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                            <!-- Three Dots Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                            </svg>
                                        </label>

                                        <!-- Dropdown Menu -->
                                        <div
                                            class="absolute left-0 mt-2 w-40 bg-white dark:bg-gray-800 rounded-md shadow-lg opacity-0 scale-y-75 peer-checked:opacity-100 peer-checked:scale-y-100 peer-checked:block hidden transition-all duration-200 origin-top">
                                            <div class="py-2">
                                                <!-- Extend Option -->
                                                <label for="due-toggle"
                                                    class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-300"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 4.5C7.03 4.5 3 7.61 3 10.5C3 13.39 7.03 16.5 12 16.5C16.97 16.5 21 13.39 21 10.5C21 7.61 16.97 4.5 12 4.5ZM12 14C9.79 14 8 11.77 8 10.5C8 9.23 9.79 7 12 7C14.21 7 16 9.23 16 10.5C16 11.77 14.21 14 12 14ZM12 9.5C11.17 9.5 10.5 10.17 10.5 11C10.5 11.83 11.17 12.5 12 12.5C12.83 12.5 13.5 11.83 13.5 11C13.5 10.17 12.83 9.5 12 9.5Z" />
                                                    </svg>
                                                    View Details
                                                </label>

                                                <!-- Report Option -->
                                                <label for="due-toggle"
                                                    class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-300"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M4 4h16v2H4zm0 4h10v2H4zm0 4h16v2H4zm0 4h10v2H4z" />
                                                    </svg>
                                                    Report
                                                </label>

                                                <!-- Return Option -->
                                                <label for="due-toggle"
                                                    class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-300"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M16 12H8v-3l-4 4 4 4v-3h8z" />
                                                    </svg>
                                                    Returned
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                            <!-- If No Due Bookings -->
                            <?php if (!$hasDue): ?>
                            <tr>
                                <td colspan="5" class="px-5 py-3 text-center text-sm text-gray-500 dark:text-gray-400">
                                    No Due bookings found.
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>
    </div>

    <!-- Cancelled Bookings Section -->
    <div class="hidden p-4 rounded-lg bg-gray-50" id="cancel" role="tabpanel" aria-labelledby="cancel-tab">
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Cancelled Bookings
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full">
                <div>
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap text-center">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b bg-gray-50">
                                    <th class="px-4 py-3">Client</th>
                                    <th class="px-4 py-3">Amount</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Date</th>
                                    <th class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y">
                                <?php
    $hasCancelled = false;
    foreach ($clients as $client):
        if ($client['status'] !== "Cancel")
            continue;
        $hasCancelled = true;
                                                                                        ?>
                                <tr class="text-gray-700">
                                    <!-- Cancelled - Client Info -->
                                    <td class="px-4 py-3">
                                        <div class="flex items-center justify-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="<?= $client['avatar'] ?>" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                                </div>
                                            </div>
                                            <div class="text-left">
                                                <p class="font-semibold"><?= $client['name'] ?></p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    <?= $client['role'] ?? 'Client' ?>
                                                </p>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Cancelled - Amount -->
                                    <td class="px-4 py-3 text-sm">$ <?= $client['amount'] ?></td>

                                    <!-- Cancelled - Status -->
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full">
                                            Cancelled
                                        </span>
                                    </td>

                                    <!-- Cancelled - Date -->
                                    <td class="px-4 py-3 text-sm"><?= $client['date'] ?></td>

                                    <!-- Cancelled - Actions -->
                                    <td class="px-4 py-3">
                                        <div class="flex justify-center space-x-4 text-sm">
                                            <button data-modal-target="view-reason-modal"
                                                data-modal-toggle="view-reason-modal"
                                                class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md shadow hover:bg-red-700 dark:bg-red-500 dark:hover:bg-red-600 transition">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M12 4C7.03 4 2.73 6.7 2.07 9.99c-.27.92-.27 1.92 0 2.84C2.73 17.3 7.03 20 12 20c4.97 0 9.27-2.7 9.93-5.17.27-.92.27-1.92 0-2.84C21.27 6.7 16.97 4 12 4zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" />
                                                </svg>
                                                View Reason
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                                <!-- If No Cancelled Bookings -->
                                <?php if (!$hasCancelled): ?>
                                <tr>
                                    <td colspan="5" class="px-5 py-3 text-center text-sm text-gray-500 dark:text-gray-400">
                                        No Cancelled bookings found.
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 11-20 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li><button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                            </li>
                            <li><button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li><button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                            </li>
                            <li><span class="px-3 py-1">...</span></li>
                            <li><button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                            </li>
                            <li><button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>
    </div>
@endsection