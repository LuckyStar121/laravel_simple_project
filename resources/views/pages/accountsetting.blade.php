@extends('layouts.app')

@section('content')
    <div id="content" class="flex ">
        <!-- ############ Main START-->
        <div>
            <div class="page-hero page-container " id="page-hero">
                <div class="padding d-flex">
                    <div class="page-title">
                        <h2 class="text-md text-highlight">Account Setting</h2>
                        <small class="text-muted">You can change your Account Information.
                            {{--<strong>Jacqueline Reid</strong>--}}
                        </small>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Main END -->
    </div>
@endsection
