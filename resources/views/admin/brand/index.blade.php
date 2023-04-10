<x-.admin.layouts.master>
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Brands List <a href="{{route('brands.list')}}"><</a>
                                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                    data-bs-target="#addItemModal"> Add Brand  </button>
                                </h4>

                                   
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $brand)
                                            <tr>
                                                <td class="brandid">{{ $brand->id }}</td>
                                                <td>{{ $brand->name }}</td>
                                                <td>{{ $brand->slug }}</td>
                                                <td>{{ $brand->status == 1 ? 'Hidden':'Visible' }}</td>
                                                <td>
                                                    <!-- Replace your edit button code with this code -->
                                                    <button type="button" class="btn btn-primary editbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Edit
                                                      </button>


                                                    <a href="" class="btn btn-danger">Delete</a>
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

            <!-- Add Item Modal -->
            <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="addItemModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{route('brands.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="addItemModalLabel">Add New Brand</h5>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </button>
                            </div>
                            <div class="modal-body">
                               
                                <div class="form-group">
                                    <label for="name">Brand Name <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Brand Slug <span style="color:red">*</span></label>
                                    <input type="text" name="slug" id="slug" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label> <br>
                                    <input type="checkbox" name="status" id="status"> Checked = Hidden, Un-Check =
                                    Visiable

                                </div>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Close</button>
                                <button type="submit" class="btn btn-primary">Add Brand</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- ######################################################################################################################################### --}}
            {{-- update --}}
            <!-- Button trigger modal -->
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
            {{-- ######################################################################################################################################### --}}

</div>
            {{-- update end --}}
        </div>
    </div>

<script>
    $(document).ready(function () {
        $('.editbtn').on('click', function(){
$('#editmodal').modal('show');
        });
    });
</script>
</x-.admin.layouts.master>
