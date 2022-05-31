<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h1>All Students</h1>
                    </div>
                    <div class="cad-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{$tudent->firstname}}</td>
                                        <td>{{$tudent->lastname}}</td>
                                        <td>{{$tudent->email}}</td>
                                        <td>{{$tudent->phone}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
