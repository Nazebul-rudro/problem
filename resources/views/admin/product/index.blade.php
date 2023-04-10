<x-.admin.layouts.master>
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Product List <a href="">
                                        < </a>
                                            
                                </h4>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-warning">
                                        @foreach ($errors->all() as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                @endif

                                <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="product-tab" data-bs-toggle="tab" data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane" aria-selected="false">Product</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-tab-pane" type="button" role="tab" aria-controls="seotag-tab-pane" aria-selected="false">SEO Tags</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">Details</button>
                                      </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="productimage-tab" data-bs-toggle="tab" data-bs-target="#productimage-tab-pane" type="button" role="tab" aria-controls="productimage-tab-pane" aria-selected="false">Product Image</button>
                                      </li>
                                    
                                  </ul> --}}
                                  <div class="tab-content" id="myTabContent">
                                    {{-- <div class="tab-pane fade  border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        ..
                                    </div> --}}
                                    <div class="tab-pane fade border p-3" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab" tabindex="0">
                                        <div class="my-4">
                                           
                                                <div>
                                                    <label for="Category">Category</label>
    
                                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                                        @foreach ($categories as $category)
                                                        <option disabled selected>Open this select menu</option>
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach                                                           
                                                      </select>    
                                                </div>

                                                <div class="my-2">
                                                    <label for="name" class="mb-2">Product Name</label>
                                                    <input type="text" name="name" id="name" class="form-control">
                                                </div>

                                                <div class="my-2">
                                                    <label for="slug" class="mb-2">Product Slug</label>
                                                    <input type="text" name="slug" id="slug" class="form-control">
                                                </div>

                                                <div class="my-2">
                                                    <label for="Category" class="mb-2" >Brand</label>
                                                    <select class="form-select" aria-label="Default select example" name="brand">
                                                        @foreach ($brands as $brand)
                                                        <option disabled selected>Open this select menu</option>
                                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                        @endforeach                                                           
                                                      </select> 
                                                </div>

                                                <div class="my-2">
                                                    <label for="small_description" class="mb-2">Small Description (500 words)</label>
                                                    <textarea name="small_description" id="small_description" cols="30" rows="10" class="form-control"></textarea>
                                                </div>

                                                <div class="my-2">
                                                    <label for="description" class="mb-2">Description (500 words)</label>
                                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                                        <div class="my-4">
                                            
                                                <div class="my-2">
                                                    <label for="meta_title" class="mb-2">Meta Title</label>
                                                    <input type="text" name="meta_title" id="meta_title" class="form-control">
                                                </div>

                                                <div class="my-2">
                                                    <label for="meta_description" class="mb-2">Meta Description</label>
                                                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control"></textarea>
                                                </div>

                                                <div class="my-2">
                                                    <label for="meta_keyword" class="mb-2">Meta Keyword</label>
                                                    <textarea name="meta_keyword" id="meta_keyword" cols="15" rows="3" class="form-control"></textarea>
                                                </div>
                                               
                                        </div>
                                    </div>
                                    <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                                        <div class="my-4">
                                           
                                           <div class="row">
                                            <div class="col-md-4">
                                                <div class="my-2">
                                                    <label for="original_price" class="mb-2">Original Price</label>
                                                    <input type="number" name="original_price" id="original_price" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="my-2">
                                                    <label for="selling_price" class="mb-2">Original Price</label>
                                                    <input type="number" name="selling_price" id="selling_price" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="my-2">
                                                    <label for="quantity" class="mb-2">Original Price</label>
                                                    <input type="number" name="quantity" id="quantity" class="form-control">
                                                </div>
                                            </div>
                                           </div>
                                           <div class="row">
                                            <div class="col-md-4">
                                                <div class="my-2">
                                                    <input type="checkbox" name="treending" id="treending">
                                                    <label for="treending" class="mb-2">Tranding Product</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="my-2">
                                                    <input type="checkbox" name="status" id="status">
                                                    <label for="status" class="mb-2">Status</label> 
                                                </div>
                                            </div>
                                           </div>
                                           
                                           
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade border p-3" id="productimage-tab-pane" role="tabpanel" aria-labelledby="productimage-tab" tabindex="0">
                                        <div class="mx-4">
                                            
                                            <div class="my-2">
                                                <label for="image" class="my-2">Image</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div>
                                            <div class="my-3">
                                                <input type="submit" value="Submit" class="btn btn-primary float-end">
                                            </div> 
                                            
                                        </div>
                                    </div>
                                  </div>

                                </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</x-.admin.layouts.master>
