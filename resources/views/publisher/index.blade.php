@extends('layouts.utama')
 
@section('title', 'Data Publisher')
 
@section('sidebar')
    @parent
    <br>
    Back to Home
@endsection


@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">City</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($category as $ct) { ?>
                                <tr>
                                    <td><?php echo $ct->publisher_name ?></td>
                                    <td><?php echo $ct->city?></td>
                                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
