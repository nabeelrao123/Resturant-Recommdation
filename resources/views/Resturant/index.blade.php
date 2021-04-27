@include('Resturant.headerfooter')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">
        All Resturant Record
  </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">

<form method="get" action="Resturant/create">

@method('get')

 <input type="submit" class="btn btn-info mb-4 " value="Create New Resturant"/>
</form>
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->


    </div>
    <!-- /.row -->
    <!-- Main row -->

    <!--/.direct-chat -->

    <!-- TO DO List -->
     
  </section>
  <!-- /.Left col -->
  <!-- right col (We are only adding the ID to make the widgets sortable)-->
  <section class="col-lg-12 connectedSortable">
    <div class="container">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Resturant Name</th>
      <th scope="col">Category</th>
      <th scope="col">Location</th>
      <th scope="col">Action</th>
  
    </tr>
  </thead>
  <tbody>

@foreach($user as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->resturname}}</td>
      <td>{{$data->category}}</td>
      <td>{{$data->location}}</td> 
      <td> 
      <form  > 
      <input type="submit" value="Show" class="btn btn-success" />
      </form>
      </td>

      <td> 
      <form action="Resturant/{{$data->id}}/edit" method="get">

      @method('get')
      @csrf 
      <input type="submit" value="Edit" class="btn btn-warning" />
      </form>
      </td>
      <td> 



      <form method="post" action="Resturant/{{$data->id}}">
     @method('delete')
     @csrf
      <input type="submit" value="Delete" class="btn btn-danger" />
      </form>
      </td>
   </tr>
 @endforeach
   
  </tbody>
</table>
    </div>

  </section>
  <!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>