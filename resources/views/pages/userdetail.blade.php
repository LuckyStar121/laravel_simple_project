@extends('layouts.app')

@section('content')
    <div id="content" class="flex ">
        <!-- ############ Main START-->

        <div class="d-flex flex" id="content-body">
            <div class="d-flex flex-column flex" data-plugin="user">
                <div class="scroll-y mx-3 mb-3 card">
                    <div class="p-4 d-sm-flex no-shrink b-b">
                        <div>
                            <a href="#" class="avatar w-96">
                                <img src="{{ asset('assets/img/a5.jpg') }}" alt=".">
                            </a>
                        </div>
                        <div class="px-sm-4 my-3 my-sm-0 flex">
                            <h2 class="text-lg">{{ $user->name }}</h2>
                            {{--<small class="d-block text-fade">Senior Industrial Designer</small>--}}
                            <div class="my-3">
                                <a href="#">
                                    <span class="text-muted">Email: </span><strong>{{ $user->email }}</strong>
                                </a>
                                <a href="#" class="mx-2">
                                    <span class="text-muted">Phone: </span><strong>{{ $user->phone }}</strong>
                                </a>
                                <a href="#" class="mx-2">
                                    <span class="text-muted">Count: </span><strong>{{ $count }}</strong>
                                </a>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-icon btn-rounded">
                                <i data-feather="mail"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-rounded">
                                <i data-feather="more-vertical"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="p-4">
                                <h6>Members</h6>
                                <div class="list list-row">
                                    @foreach($members as $member)
                                    <div class="list-item no-border">
                                        <div>
                                            <a href="#">
                                                <span class="w-40 avatar gd-info">
								                    <span class="avatar-status off b-white avatar-right"></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="flex">
                                            <a href="#" class="item-author text-color "><h4>{{ $member->member_name }}</h4></a>
                                            <a href="#" class="item-company text-muted h-1x">
                                                {{ "Address: ".$member->member_address }}
                                            </a>
                                            <a href="#" class="item-company text-muted h-1x">
                                                {{ "Phone: ".$member->member_phone }}
                                            </a>
                                            <a href="#" class="item-company text-muted h-1x">
                                                {{ "Email: ".$member->member_email }}
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 b-r">
                            <div class="p-4">
                                <h6>Notification Logs</h6>
                                <div class="timeline timeline-theme animates animates-fadeInUp bg-black">
                                    @foreach($messages as $message)
                                    <div class="tl-item">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">{{ $message }}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary btn-rounded">Load more</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Main END -->
    </div>
@endsection