<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Usar</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                               </thead>
                               <tbody>
                               @foreach($usars as $usar)
                                    <tr>
                                        <td>{{$usar->id}}</td>
                                        <td>{{$usar->name}}</td>
                                        <td>{{$usar->email}}</td>
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
