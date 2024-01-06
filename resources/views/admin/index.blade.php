@extends('admin.layouts.main')

@section('title', 'Dashboard')

@section('css-plugins')
@endsection

@section('js-plugins')
@endsection

@section('container')
    <!-- Title -->
    <h1 class="h2">Dashboard</h1>

    <div class="row">
        <div class="col-xxl-5">
            <div class="row">
                <div class="col-md-6">

                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">

                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-success"></span>

                                                                                                    Income
                                                                                                
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                                                                                $3,240
                                                                                            </h2>

                                        <!-- Comment -->
                                        <p class="fs-6 text-muted mb-0">
                                                                                                No additional income
                                                                                            </p>
                                    </div>

                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="32" width="32">
                                            <defs>
                                                <style>
                                                .a {
                                                    fill: none;
                                                    stroke: currentColor;
                                                    stroke-linecap: round;
                                                    stroke-linejoin: round;
                                                    stroke-width: 1.5px;
                                                }
                                                </style>
                                            </defs>
                                            <title>cash-briefcase</title>
                                            <path class="a" d="M9.75,15.937c0,.932,1.007,1.688,2.25,1.688s2.25-.756,2.25-1.688S13.243,14.25,12,14.25s-2.25-.756-2.25-1.688,1.007-1.687,2.25-1.687,2.25.755,2.25,1.687"/>
                                            <line class="a" x1="12" y1="9.75" x2="12" y2="10.875"/>
                                            <line class="a" x1="12" y1="17.625" x2="12" y2="18.75"/>
                                            <rect class="a" x="1.5" y="6.75" width="21" height="15" rx="1.5" ry="1.5"/>
                                            <path class="a" d="M15.342,3.275A1.5,1.5,0,0,0,13.919,2.25H10.081A1.5,1.5,0,0,0,8.658,3.275L7.5,6.75h9Z"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- / .row -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">

                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-danger"></span>

                                                                                                    Expense
                                                                                                
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                                                                                $1,500
                                                                                            </h2>

                                        <!-- Comment -->
                                        <p class="fs-6 text-muted mb-0 text-truncate">
                                                                                                + $6.50 bank charges fee
                                                                                            </p>
                                    </div>

                                    <span class="text-primary">
                                        <svg viewBox="0 0 24 24" height="32" width="32" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.75,14.25H16.717a1.342,1.342,0,0,0-.5,2.587l2.064.826a1.342,1.342,0,0,1-.5,2.587H15.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            <path d="M17.25 14.25L17.25 13.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            <path d="M17.25 21L17.25 20.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            <path d="M11.250 17.250 A6.000 6.000 0 1 0 23.250 17.250 A6.000 6.000 0 1 0 11.250 17.250 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            <path d="M3.75 14.25L8.25 14.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            <path d="M8.25 14.25L8.25 6.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            <path d="M11.25 9.75L11.25 8.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            <path d="M5.25 14.25L5.25 9.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            <path d="M7.5,20.25H2.25a1.43,1.43,0,0,1-1.5-1.415V2.335A1.575,1.575,0,0,1,2.25.75H12.879a1.5,1.5,0,0,1,1.06.439l2.872,2.872a1.5,1.5,0,0,1,.439,1.06V7.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- / .row -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>

        <div class="col-xxl-7">
            <div class="row">
                <div class="col-md-6">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">

                                    <!-- Title -->
                                    <h5 class="text-uppercase text-muted fw-semibold mb-2">
                                                                                        Total
                                                                                    </h5>

                                    <!-- Subtitle -->
                                    <h2 class="mb-0">
                                                                                        $74,925
                                                                                    </h2>

                                    <!-- Comment -->
                                    <p class="fs-6 text-muted mb-0 text-truncate">

                                        <!-- Badge -->
                                        <span class="badge text-bg-success-soft fs-6 fw-bold mb-n1">
                                            <svg viewBox="0 0 24 24" height="10" width="10" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23.25 12.75L23.25 6 16.5 6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                                <path d="M23.25,6l-7.939,7.939a1.5,1.5,0,0,1-2.122,0l-3.128-3.128a1.5,1.5,0,0,0-2.122,0L.75,18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            </svg>

                                                                                                    12%
                                                                                                
                                        </span>

                                                                                            from $65,934
                                                                                        
                                    </p>
                                </div>

                                <div class="col-6">

                                    <!-- Chart -->
                                    <div class="chart-container h-70px">
                                        <canvas id="incomeChart">
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- / .row -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col">

                                    <!-- Title -->
                                    <h5 class="text-uppercase text-muted fw-semibold mb-2 d-flex align-items-center">

                                                                                            Pageviews
                                                
                                                                                            <!-- Icon -->
                                        <a href="javascript: void(0);" class="ms-2 text-secondary" data-bs-toggle="tooltip" title="Pageviews is a metric defined as the total number of pages viewed.">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                                <path d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm.25,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12.25,5ZM14.5,18.5h-4a1,1,0,0,1,0-2h.75a.25.25,0,0,0,.25-.25v-4.5a.25.25,0,0,0-.25-.25H10.5a1,1,0,0,1,0-2h1a2,2,0,0,1,2,2v4.75a.25.25,0,0,0,.25.25h.75a1,1,0,0,1,0,2Z" style="fill: currentColor"/>
                                            </svg>
                                        </a>
                                    </h5>

                                    <!-- Subtitle -->
                                    <h2 class="mb-0">
                                                                                        123,598
                                                                                    </h2>

                                    <!-- Comment -->
                                    <p class="fs-6 text-muted mb-0">

                                        <!-- Badge -->
                                        <span class="badge text-bg-danger-soft fs-6 fw-bold mb-n1">
                                            <svg viewBox="0 0 24 24" height="10" width="10" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23.25 11.25L23.25 18 16.5 18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                                <path d="M23.25,18l-7.939-7.939a1.5,1.5,0,0,0-2.122,0l-3.128,3.128a1.5,1.5,0,0,1-2.122,0L.75,6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            </svg>

                                                                                                    9.2%
                                                                                                
                                        </span>

                                                                                            from 134,969
                                                                                        
                                    </p>
                                </div>
                                <div class="col-5">

                                    <!-- Chart -->
                                    <div class="chart-container h-65px">
                                        <canvas id="pageViewsChart">
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- / .row -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
    </div>
    <!-- / .row -->

    <div class="row">
        <div class="col">

            <!-- Card -->
            <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}' id="users">
                <div class="card-header border-0 card-header-space-between">

                    <!-- Title -->
                    <h2 class="card-header-title h4 text-uppercase">
                                                        Users
                                                    </h2>

                    <!-- Dropdown -->
                    <div class="dropdown ms-4">
                        <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                <g>
                                    <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"/>
                                    <circle cx="12" cy="12" r="3.25" style="fill: currentColor"/>
                                    <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"/>
                                </g>
                            </svg>
                        </a>
                        <div class="dropdown-menu">
                            <a href="javascript: void(0);" class="dropdown-item">
                                                                        Export report
                                                                    </a>
                            <a href="javascript: void(0);" class="dropdown-item">
                                                                        Share
                                                                    </a>
                            <a href="javascript: void(0);" class="dropdown-item">
                                                                        Action
                                                                    </a>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="w-60px">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                                    </div>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                                        Nama Lengkap
                                    </a>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="email">
                                        Email
                                    </a>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="username">
                                        Username
                                    </a>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                        Tanggal Daftar
                                    </a>
                                </th>
                                <th class="w-150px min-w-150px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                        Status
                                    </a>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="list">
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/9e7ac59225f733be5944b3e91271b33adb30cae7/56230/assets/images/profiles/profile-14.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">{{ $user->name }}</span>
                                </td>
                                <td class="email">{{ $user->email }}</td>
                                <td class="username">{{ $user->username }}</td>
                                <td class="date" data-signed="1648252800">{{ $user->created_at }}</td>
                                <td class="status">
                                    <span class="legend-circle bg-success"></span>
                                    Successful
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- / .table-responsive -->

                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-5 text-secondary small">
                            Showing: 
                            <span class="list-pagination-page-first"></span>
                            - 
                            <span class="list-pagination-page-last"></span>
                            of 
                            <span class="list-pagination-pages"></span>
                        </div>

                        <!-- Pagination -->
                        <ul class="pagination list-pagination mb-0"></ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- / .row -->        
@endsection

