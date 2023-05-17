@extends('layouts.app')

@section('content')
    <main class="container">
        <section>
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="titlebar">
                    <h1>Add Product</h1>
                    <button>Save</button>
                </div>
                <div class="card">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name">
                        <label>Description (optional)</label>
                        <textarea cols="10" rows="5" name="description"></textarea>
                        <label>Add Image</label>
                        <img src="" alt="" class="img-product" id="file-preview"/>
                        <input type="file" name="image" accept="image/*" onchange="showFile(event)">
                    </div>
                    <div>
                        <label>Category</label>
                        <select name="" id="">
                            <option value="">Email Subscription</option>
                        </select>
                        <hr>
                        <label>Inventory</label>
                        <input type="text" class="input">
                        <hr>
                        <label>Price</label>
                        <input type="text" class="input">
                    </div>
                </div>
                <div class="titlebar">
                    <h1></h1>
                    <button>Save</button>
                </div>
            </form>
        </section>
    </main>
    <script>
        function showFile(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('file-preview');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection
