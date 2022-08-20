@extends('layouts.app')

@section('content')
<section class="pb-120 pt-120 window-section">
        <div class="container">
            <h1 class="text-bold mb-32">Электронное обращение</h1>
            <div class="row">
                <div class="col-lg-8">
                    <app-appeal-form1></app-appeal-form1>
                    <!-- <app-appeal-form2></app-appeal-form2> -->
                </div>
                <div class="col-lg-4">
                    @include('partials.single-window-sidebar')
                </div>
            </div>
            
        </div>
</section>
    
@stop