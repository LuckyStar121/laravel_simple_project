@extends('layouts.app')

@section('content')
    <div id="content" class="flex ">
        <!-- Main START -->
        <div>
            <div class="page-hero page-container " id="page-hero">
                <div class="padding d-flex">
                    <div class="page-title">
                    <h2 class="text-md text-highlight">Users Management</h2>
                    <small class="text-muted">Welcome to come in Olarm
                        <strong>Li LongHuan</strong>
                    </small>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
                </div>
            </div>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div id="toolbar">
                    </div>
                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true"
                           data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                        <thead>
                        <tr>
                            <th data-sortable="true" data-field="id">ID</th>
                            <th data-sortable="true" data-field="name">Name</th>
                            <th data-sortable="true" data-field="email">Email</th>
                            <th data-sortable="true" data-field="phone">Phone</th>
                            <th data-field="finish"><span class="d-none d-sm-block">Setting</span></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class=" " data-id="2">
                                <td style="min-width:30px;text-align:center">
                                    <small class="text-muted">{{ $loop->index + 1 }}</small>
                                </td>
                                <td>
                                    <a class="item-title text-color ">{{ $user->name }}</a>
                                </td>
                                <td>
                                    <a class="item-title text-color ">{{ $user->email }}</a>
                                </td>
                                <td>
                                    <a class="item-title text-color ">{{ $user->phone }}</a>
                                </td>
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <a class="dropdown-item" href="{{ URL::to('/detail/'.$user->id) }}">
                                                See detail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item trash" href="{{ URL::to('/home/delete/'.$user->id) }}">
                                                Delete item
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Main END-->
    </div>
@endsection
