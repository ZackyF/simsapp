@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
  <h1 class="font-bold text-2xl ml-3">Tambah Produk</h1>
  <hr />
  <section class="max-w-xl mx-0 p-4">
    <form action="{{ route('admin/products/store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <fieldset class="mb-4">
        <div class="grid grid-cols-2">
          <div>
            <div class="grid grid-cols-2 gap-1">
              <div>
                <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Kategori</label>
                <select name="category" id="category" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  <option value="">Pilih kategori</option>
                  <option value="alat_olahraga">Alat Olahraga</option>
                  <option value="alat_musik">Alat Musik</option>
                </select>
              </div>
              <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Barang</label>
                <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-4">
              <div>
                <label for="purchase_price" class="block text-sm font-medium leading-6 text-gray-900">Harga Beli</label>
                <input type="text" name="purchase_price" id="purchase_price" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
              <div>
                <label for="selling_price" class="block text-sm font-medium leading-6 text-gray-900">Harga Jual</label>
                <input type="text" name="selling_price" id="selling_price" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
              <div>
                <label for="stock" class="block text-sm font-medium leading-6 text-gray-900">Stok Barang</label>
                <input type="number" name="stock" id="stock" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
             </div>
            </div>
          </div>
          <div class="col-span-2">
            <form class="border border-dashed border-gray-300 rounded-md p-4">
              <label for="image" class="block text-sm font-medium leading-6 text-gray-900">
                <i class="fas fa-image mr-2"></i> Upload Image
              </label>
              <input type="file" name="image" id="image" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </form>
          </div>
        </div>
      </fieldset>

      <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
    </form>
  </section>
@endsection
