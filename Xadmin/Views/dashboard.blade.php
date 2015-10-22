@extends('cms::layouts.default')

@section('content')
	<!-- My Block -->
    <div class="block">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
                </li>
            </ul>
            <h3 class="block-title">My Block</h3>
        </div>
        <div class="block-content">
            <p>...</p>
        </div>
    </div>
    <!-- END My Block -->
@stop