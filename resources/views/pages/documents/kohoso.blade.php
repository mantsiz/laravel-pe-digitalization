@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Kohoso</h1>
    </div>

    <div class="container-fluid d-flex">
        <!-- Main Content -->
        <div class="content-wrapper bg-white p-8 rounded-lg shadow-lg mx-auto max-w-7xl">
            <!-- Date Range Filter -->
            <div class="filter-section mb-6">
                <form class="flex items-center gap-4">
                    <div class="flex items-center gap-2">
                        <label class="text-gray-700 font-semibold">Year Range:</label>
                        <input type="number" name="start_year" class="year-input" placeholder="Start Year" min="2000" max="2099">
                        <span class="text-gray-600">to</span>
                        <input type="number" name="end_year" class="year-input" placeholder="End Year" min="2000" max="2099">
                    </div>
                    <button type="submit" class="action-button bg-[#006D77] text-white">
                        Filter
                    </button>
                </form>
            </div>

            <!-- Add New Button -->
            <div class="mb-6">
                <button onclick="openAddModal()" class="add-button">
                    Add New Project
                </button>
            </div>

            <!-- Table -->
            <div class="table-responsive overflow-hidden rounded-lg border border-gray-200">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="p-4 text-left text-white bg-[#006D77]">Year</th>
                            <th class="p-4 text-left text-white bg-[#006D77]">Project</th>
                            <th class="p-4 text-left text-white bg-[#006D77]">Line</th>
                            <th class="p-4 text-left text-white bg-[#006D77]">Part</th>
                            <th class="p-4 text-center text-white bg-[#006D77]">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kohosoProjects as $project)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="p-4">{{ $project->year }}</td>
                            <td class="p-4">{{ $project->project_name }}</td>
                            <td class="p-4">{{ $project->line }}</td>
                            <td class="p-4">{{ $project->part }}</td>
                            <td class="p-4 text-center">
                                <button onclick="openEditModal({{ $project->id }})" class="action-button bg-blue-500 text-white mr-2">
                                    Edit
                                </button>
                                <button onclick="deleteProject({{ $project->id }})" class="action-button bg-red-500 text-white">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Modal -->
<div id="projectModal" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden">
    <div class="modal-content w-1/2">
        <h2 id="modalTitle" class="text-xl font-bold mb-4">Add New Project</h2>
        <form id="projectForm" class="space-y-4">
            @csrf
            <input type="hidden" id="project_id">
            <div>
                <label class="block mb-1">Year</label>
                <input type="number" id="year" name="year" class="form-input" required>
            </div>
            <div>
                <label class="block mb-1">Project</label>
                <input type="text" id="project_name" name="project_name" class="form-input" required>
            </div>
            <div>
                <label class="block mb-1">Line</label>
                <input type="text" id="line" name="line" class="form-input" required>
            </div>
            <div>
                <label class="block mb-1">Part</label>
                <input type="text" id="part" name="part" class="form-input" required>
            </div>
            <div class="flex justify-end gap-2 mt-4">
                <button type="button" onclick="closeModal()" class="action-button bg-gray-500 text-white">
                    Cancel
                </button>
                <button type="submit" class="action-button bg-green-500 text-white">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    .full-background {
        background: url('{{ asset("images/sugitybuilding.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        overflow: auto;
        padding: 20px;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 10px;
        margin-bottom: 20px;
    }

    .company-logo {
        width: 120px;
        margin-right: 20px;
    }

    .kpi-title {
        font-size: 40px;
        font-weight: bold;
        color: #006D77;
        flex-grow: 1;
        text-align: center;
    }

    /* Main Content Styles */
    .flex-grow {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Table Styles */
    table {
        background: white;
        border-radius: 8px;
        overflow: hidden;
    }

    thead tr {
        background: #006D77;
        color: white;
    }

    th, td {
        padding: 12px 15px;
    }

    tbody tr:hover {
        background-color: #f8f9fa;
    }

    /* Button Styles */
    .action-button {
        padding: 8px 16px;
        border-radius: 6px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .add-button {
        background-color: #2ecc71;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
    }

    .add-button:hover {
        background-color: #27ae60;
    }

    /* Modal Styles */
    .modal-content {
        background: white;
        border-radius: 12px;
        padding: 24px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-input {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        margin-top: 4px;
    }

    .form-input:focus {
        border-color: #006D77;
        outline: none;
        box-shadow: 0 0 0 2px rgba(0, 109, 119, 0.2);
    }

    /* Filter Section */
    .filter-section {
        background: white;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .year-input {
        width: 120px;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container-fluid {
            padding: 10px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .modal-content {
            width: 95%;
            margin: 10px;
        }
    }
</style>

@push('scripts')
<script>
    function openAddModal() {
        const modal = document.getElementById('projectModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function openEditModal(id) {
        fetch(`/kohoso/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                const modal = document.getElementById('projectModal');
                document.getElementById('modalTitle').textContent = 'Edit Project';
                document.getElementById('project_id').value = data.id;
                document.getElementById('year').value = data.year;
                document.getElementById('project_name').value = data.project_name;
                document.getElementById('line').value = data.line;
                document.getElementById('part').value = data.part;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
    }

    function closeModal() {
        const modal = document.getElementById('projectModal');
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }

    function deleteProject(id) {
        if (confirm('Are you sure you want to delete this project?')) {
            fetch(`/kohoso/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(() => {
                window.location.reload();
            });
        }
    }
</script>
@endpush

@endsection