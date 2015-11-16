<table class="table table-striped table-vcenter">
    <thead>
        <tr>
            <th>
                <label class="css-input css-checkbox css-checkbox-default">
                    <input type="checkbox" checked=""><span></span> 
                </label>
            </th>
            <th>Title</th>
            <th></th>
            <th></th>
            <th class="text-right" style="padding-right: 35px;">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
            <tr>
                <td>
                    <label class="css-input css-checkbox css-checkbox-default">
                        <input type="checkbox" checked=""><span></span> 
                    </label>
                </td>
                <td class="font-w600"><a href="#" class="post-link">{{ $user->name }}</a></td>
                <td></td>
                <td></td>
                <td class="text-right action-buttons">
                    <a href="#" class="btn btn-success push-5-r push-10" type="button" disabled="disabled"><i class="fa fa-edit"></i></a>
                    <form action="#">
                        <button type="submit" class="btn btn-danger push-5-r push-10" type="button" disabled="disabled" ><i class="fa fa-trash-o"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>