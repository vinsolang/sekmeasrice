@extends('backend.admin')

@section('site-title')
    Admin | View Users
@endsection

@section('page-main-title')
    👥 View Information Customers
@endsection

@section('content')
<div class="p-4 md:p-6 space-y-6">

    {{-- Page Header --}}
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2">
        <h1 class="text-xl md:text-2xl font-bold text-gray-800">Customer Accounts</h1>
        <span class="text-sm text-gray-500">Total: {{ $rows->count() }} users</span>
    </div>

    {{-- Responsive Table Wrapper --}}
    <div class="bg-white shadow-lg rounded-2xl border border-gray-200 overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gradient-to-r from-[#F1C119]/80 to-[#f8f1d0] text-gray-800 uppercase tracking-wider">
                <tr>
                    <th class="px-4 md:px-6 py-3 md:py-4 text-left font-semibold whitespace-nowrap">ID</th>
                    <th class="px-4 md:px-6 py-3 md:py-4 text-left font-semibold whitespace-nowrap">Profile</th>
                    <th class="px-4 md:px-6 py-3 md:py-4 text-left font-semibold whitespace-nowrap">User Name</th>
                    <th class="px-4 md:px-6 py-3 md:py-4 text-left font-semibold whitespace-nowrap">Email</th>
                    <th class="px-4 md:px-6 py-3 md:py-4 text-left font-semibold whitespace-nowrap">Role</th>
                    <th class="px-4 md:px-6 py-3 md:py-4 text-left font-semibold whitespace-nowrap">Created At</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @foreach ($rows as $row)
                <tr class="hover:bg-yellow-50 transition duration-200">
                    <td class="px-4 md:px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                        {{ $row->id }}
                    </td>

                    <td class="px-4 md:px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center justify-center md:justify-start">
                            @php
                                $avatar = null;

                                if (!empty($row->avatar)) {
                                    $avatar = $row->avatar; // Google or Facebook login image
                                } elseif (!empty($row->profile)) {
                                    $avatar = asset('storage/profiles/' . $row->profile); // Uploaded manually
                                } else {
                                    $avatar = asset('images/default-avatar.png'); // Fallback
                                }
                            @endphp

                            <img src="{{ $avatar }}" 
                                 alt="Profile"
                                 class="h-10 w-10 md:h-12 md:w-12 rounded-full object-cover border-2 border-[#F1C119] shadow-sm">
                        </div>
                    </td>

                    <td class="px-4 md:px-6 py-4 font-semibold text-gray-800 whitespace-nowrap">
                        {{ $row->username }}
                    </td>

                    <td class="px-4 md:px-6 py-4 text-gray-600 break-all">
                        {{ $row->email }}
                    </td>

                    <td class="px-4 md:px-6 py-4 whitespace-nowrap">
                        @php
                            $role = $row->role ?? 'Customer';
                            $badgeClass = $role == 'Admin'
                                ? 'bg-indigo-100 text-indigo-800'
                                : 'bg-green-100 text-green-800';
                        @endphp
                        <span class="px-3 py-1 text-xs font-medium rounded-full {{ $badgeClass }}">
                            {{ $role }}
                        </span>
                    </td>

                    <td class="px-4 md:px-6 py-4 text-gray-500 whitespace-nowrap">
                        {{ optional($row->created_at)->diffForHumans() ?? $row->created_at }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Delete Modal --}}
    <form action="{{ route('submit.remove.news') }}" method="POST">
        @csrf
        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-xl shadow-xl border-0">
                    <div class="modal-header bg-[#F1C119]/20">
                        <h5 class="modal-title font-semibold text-gray-800">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-gray-600">
                        Are you sure you want to remove this user?
                    </div>
                    <div class="modal-footer flex justify-end gap-3">
                        <input type="hidden" name="remove_id" id="remove_id">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-danger">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection
