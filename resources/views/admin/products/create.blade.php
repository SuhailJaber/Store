@extends('layouts.admin')
@section('content')
    <div class="py-4">

        <form method="post" action="{{ url('products/store') }}">
            @csrf
            <div class="mb-3">
                <label for="nameFormControlInput1" class="form-label">اسم المنتج</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="quntityFormControlInput2" class="form-label">الكمية</label>
                <input type="number" class="form-control" id="quntity" name="quntity">
            </div>

            <div class="mb-3">
                <label for="priceFormControlInput3" class="form-label">سعر المنتج</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="descriptionFormControlTextarea" class="form-label">الوصف</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="descriptionFormControlTextarea" class="form-label">اختر الصنف</label>
                <select class="select-control" name="category" id="category">

                    <option value="#"></option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">

                <input type="submit" value="حفظ المنتج" class="btn btn-success">
            </div>
        </form>
    </div>
@endsection
