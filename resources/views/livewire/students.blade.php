<div>
    @include('livewire.create')
    @include('livewire.update')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h1>All Students</h1>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addStudentModal">
                                Add New Student
                            </button>
                        </div>
                        <div class="cad-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->firstname}}</td>
                                        <td>{{$student->lastname}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#updateStudentModal" wire:click.prevent="edit({{$student->id}})">Edit</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
