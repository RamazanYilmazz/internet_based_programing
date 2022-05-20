<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">Catogories</h3>
                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <select class="form-select shadow-none row border-top">
                        <option>March 2021</option>
                        <option>April 2021</option>
                        <option>May 2021</option>
                        <option>June 2021</option>
                        <option>July 2021</option>
                    </select>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Title</th>
                            <th class="border-top-0">keywords</th>
                            <th class="border-top-0">description</th>
                            <th class="border-top-0">Image</th>
                            <th class="border-top-0">status</th>
                            <th style="width: 40px">edit</th>
                            <th style="width: 40px">delete</th>
                            <th style="width: 40px">show</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rs)
                            
                        
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->title }}</td>
                            <td>{{ $rs->keywords }}</td>
                            <td>{{ $rs->description }}</td>
                            <td>{{ $rs->image }}</td>
                            <td>{{ $rs->status }}</td>
                            <td><a href="/admin/category/edit/{{ $rs->id }}"><i class="fas fa-pencil-alt" style="color: green"></i></a></td>
                            <td><a href="/admin/category/delete/{{ $rs->id }}"><i class="fas fa-trash" style="color: red"></i></a></td>
                            <td><a href="/admin/category/show/{{ $rs->id }}"><i class="fas fa-eye" ></i></a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>