@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>


@section('content')
<div class="admin-container">
    <h1 class="admin-title">Dashboard Admin</h1>
    
    <!-- Stats Cards -->
    {{-- <div class="stats-grid">
        <div class="stat-card">
            <h3>Total Workouts</h3>
            <p>124</p>
        </div>
        <div class="stat-card">
            <h3>Total Exercises</h3>
            <p>56</p>
        </div>
        <div class="stat-card">
            <h3>Active Users</h3>
            <p>892</p>
        </div>
    </div> --}}

    <!-- Recent Workouts -->
    <div class="recent-workouts">
        <div class="section-header">
            <h2 class="section-title">User Workout </h2>
            <button class="view-all-btn">
                View All
            </button>
        </div>
        
        <table class="workout-table">
            <thead>
                <tr><th>No.</th>
                    <th>Name User</th>
                    <th>Exercises</th>
                    <th>Reps</th>
                    <th>Sets</th>
                    <th>Status</th>
                </tr>
            </thead>
            @foreach ($workout as $data)
            <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $data->user ? $data->user->name : 'unk' }}</td>
                    <td>{{$data->exercises}}</td>
                    <td>{{$data->reps}}</td>
                    <td>{{$data->sets}}</td>
                    <td><span class="user-role">Completed</span></td>
                
                </tr>
                
            </tbody>
            @endforeach

        </table>
    </div>
</div>

<style>
    /* General Styles */
.admin-container {
    padding: 1.5rem;
}

.admin-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #1e3a8a;
    margin-bottom: 1.5rem;
}

/* Stats Cards */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 1.5rem;
    margin-bottom: 2rem;
}

@media (min-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.stat-card {
    background-color: white;
    padding: 1.5rem;
    border-radius: 0.5rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    border-left: 4px solid #3b82f6;
}

.stat-card h3 {
    color: #6b7280;
    margin-bottom: 0.5rem;
    font-size: 0.875rem;
}

.stat-card p {
    font-size: 1.875rem;
    font-weight: bold;
    color: #1e3a8a;
}

/* Recent Workouts Section */
.recent-workouts {
    background-color: white;
    padding: 1.5rem;
    border-radius: 0.5rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.section-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: #1e3a8a;
}

.view-all-btn {
    background-color: #2563eb;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    border: none;
    cursor: pointer;
}

.view-all-btn:hover {
    background-color: #1d4ed8;
}

/* Table Styles */
.workout-table {
    width: 100%;
    border-collapse: collapse;
}

.workout-table thead {
    background-color: #eff6ff;
}

.workout-table th {
    padding: 0.75rem 1.5rem;
    text-align: left;
    font-size: 0.75rem;
    font-weight: 500;
    color: #1e3a8a;
    text-transform: uppercase;
}

.workout-table td {
    padding: 1rem 1.5rem;
    white-space: nowrap;
    border-bottom: 1px solid #e5e7eb;
}

.difficulty-badge {
    display: inline-block;
    padding: 0.25rem 0.5rem;
    font-size: 0.75rem;
    border-radius: 9999px;
}

.badge-beginner {
    background-color: #dbeafe;
    color: #1e40af;
}

.badge-advanced {
    background-color: #fee2e2;
    color: #991b1b;
}

.action-btn {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 0.875rem;
}

.edit-btn {
    color: #2563eb;
    margin-right: 0.75rem;
}

.edit-btn:hover {
    color: #1e40af;
}

.delete-btn {
    color: #dc2626;
}

.delete-btn:hover {
    color: #b91c1c;
}
.user-role {
  font-weight: bold;
  color: #3b82f6; /* Warna biru */
  padding: 4px 8px;
  border-radius: 4px;
  background-color: #eff6ff;
}
</style>
@endsection
