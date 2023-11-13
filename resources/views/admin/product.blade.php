<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .div_center {
            text-align: center;
            padding: 40px 0;
        }

        .font_size {
            font-size: 40px;
            padding-bottom: 20px;
        }

        .text-color {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            width: 70%;
            margin-bottom: 20px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .text-color:focus {
            border-color: #4caf50;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
        }

        .select-color {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            width: 70%;
            margin-bottom: 20px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .select-color:focus {
            border-color: #4caf50;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
        }

        .btn-primary {
            background-color: #4caf50;
            color: #ffffff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #45a049;
            color: #ffffff;
        }

        label {
            font-size: 15px;
            padding-right: 20px;
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->
    
    <div class="main-panel">
        <div class="content-wrapper">
            @if(Session::has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('message') }}
            </div>
            @endif

            <div class="div_center">
                <h1 class="font_size">Add Product</h1>

                <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="div_design">
                        <label>Product Name:</label>
                        <input class="text-color" type="text" id="product_name" name="product_name" placeholder="Write a title" required>
                    </div>

                    <div class="div_design">
                        <label>Product Price:</label>
                        <input class="text-color" type="number" step="0.01" id="product_price" name="product_price" placeholder="$Price" required>
                    </div>

                    <div class="div_design">
                        <lable>Product Category:</label>
                        <select class="select-color" id="category" name="category">
                            <option value="" selected>Choose Category</option>
                            @foreach($category as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="div_design">
                        <label>Shipping Type:</label>
                        <input class="text-color" type="text" id="shipping_type" name="shipping_type" placeholder="Shipping type" required>
                    </div>

                    <div class="div_design">
                        <label>Date Created:</label>
                        <input class="text-color" type="date" id="date_created" name="date_created" required>
                    </div>

                    <div class="div_design">
                        <label>Time Created:</label>
                        <input class="text-color" type="time" id="time_created" name="time_created" required>
                    </div>

                    <div class="div_design">
                        <label>Date Updated:</label>
                        <input class="text-color" type="date" id="date_updated" name="date_updated" required>
                    </div>

                    <div class="div_design">
                        <label>Main Image:</label>
                        <input class="text-color" type="file" id="main_image" name="main_image" accept="image/*" required>
                    </div>

                    <div class="div_design">
                        <label>Other Images:</label>
                        <input class="text-color" type="file" id="other_images" name="other_images[]" accept="image/*" multiple>
                    </div>

                    <div class="div_design">
                        <label>Product Inventory:</label>
                        <input class="text-color" type="number" id="inventory" name="inventory" placeholder="23" required>
                    </div>

                    <div class="div_design">
                        <label>SKU:</label>
                        <input class="text-color" type="text" id="sku" name="sku" placeholder="FG345432" required>
                    </div>

                    <div class="div_design">
                        <input type="submit" value="Add Product" class="btn btn-primary">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Include scripts here -->
    @include('admin.script')

</div>
</body>

</html>