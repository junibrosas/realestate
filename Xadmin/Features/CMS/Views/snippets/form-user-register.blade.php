@if($user->id)
    {!! Form::open(['route' => ['admin.users.update', $user->id], 'method' => 'POST', 'class' => 'form-horizontal push-10-t push-10']) !!}
    <input name="_method" type="hidden" value="PUT">
@else 
    {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'class' => 'form-horizontal push-10-t push-10']) !!}
@endif
    <div class="form-group">
        <div class="col-xs-12">
            <div class="form-material floating">
                <input class="form-control" type="email" id="email" name="email" required="required" value="{{ $user->email }}">
                <label for="email">Email</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="form-material floating">
                <input class="form-control" type="text" id="firstname" name="firstname" value="{{ _profileFirstName($user) }}">
                <label for="firstname">First Name</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="form-material floating">
                <input class="form-control" type="text" id="lastname" name="lastname" value="{{ _profileLastName($user) }}">
                <label for="lastname">Last Name</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="form-material floating">
                <input class="form-control" type="password" id="password" name="password">
                <label for="password">Password</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="form-material floating">
                <input class="form-control" type="password" id="password2" name="password2">
                <label for="password2">Confirm Password</label>
            </div>
        </div>
    </div>
    <div class="form-group  text-right">
        <div class="col-xs-12">
            <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-plus push-5-r"></i> {{ trans('admin.users.register') }}</button>
        </div>
    </div>
{!! Form::close() !!}