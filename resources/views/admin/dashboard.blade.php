<x-dashboard-header />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
        <x-dashboard.sidebar />

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h3 class="text-lg font-medium mb-4">Dashboard Overview</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                                <div class="bg-blue-500 text-white p-6 rounded-lg">
                                    <h4 class="text-lg font-semibold">Total Users</h4>
                                    <p class="text-3xl font-bold">{{ $totalUsers }}</p>
                                </div>
                                <div class="bg-green-500 text-white p-6 rounded-lg">
                                    <h4 class="text-lg font-semibold">Total Posts</h4>
                                    <p class="text-3xl font-bold">{{ $totalPosts }}</p>
                                </div>
                                <div class="bg-yellow-500 text-white p-6 rounded-lg">
                                    <h4 class="text-lg font-semibold">Recent Activities</h4>
                                    <p class="text-3xl font-bold">{{ $activities->count() }}</p>
                                </div>
                            </div>

                            <div class="card">
                                <h3>Recent Activity</h3>
                                <div class="table-wrap">
                                    <table class="table">
                                        <thead>
                                            <tr class="bg-gray-100">
                                                <th class="py-2 px-4 border-b">Time</th>
                                                <th class="py-2 px-4 border-b">User</th>
                                                <th class="py-2 px-4 border-b">Action</th>
                                                <th class="py-2 px-4 border-b">Description</th>
                                                <th class="py-2 px-4 border-b">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($activities as $activity)
                                                <tr>
                                                    <td class="py-2 px-4 border-b">{{ $activity->created_at->diffForHumans() }}</td>
                                                    <td class="py-2 px-4 border-b">{{ $activity->user?->email ?? 'N/A' }}</td>
                                                    <td class="py-2 px-4 border-b">{{ $activity->action }}</td>
                                                    <td class="py-2 px-4 border-b">{{ $activity->description }}</td>
                                                    <td class="py-2 px-4 border-b"><span style="color:green;">Success</span></td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5">No recent activity found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
