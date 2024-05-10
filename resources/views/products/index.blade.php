@extends('layouts.app')

@section('title', 'Home Product List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Daftar Produk</h1>
    <div class="flex justify-end mb-3">
        <div class="flex justify-end">
            <a href="{{ route('admin/products/export/excel') }}" class="bg-green-600 hover:bg-green-900 text-white px-2 py-1 rounded flex items-center">
                <span class="flex items-center">
                  <i class="fas fa-download mr-1"></i>
                  Export Excel
                </span>
              </a>
              <a href="{{ route('admin/products/create') }}" class="bg-blue-600 hover:bg-blue-900 text-white px-2 py-1 rounded" >
                <i class="fas fa-plus mr-1"></i> Add Product
            </a>
        </div>
    </div>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Nama Produk</th>
                <th scope="col" class="px-6 py-3">Kategori Produk</th>
                <th scope="col" class="px-6 py-3">Harga Beli (RP)</th>
                <th scope="col" class="px-6 py-3">Harga Jual (RP)</th>
                <th scope="col" class="px-6 py-3">Stok Produk</th>
                <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
            @foreach($product as $rs)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td>
                    {{ $rs->image }}
                </td>
                <td>
                    {{ $rs->nama }}
                </td>
                <td>
                    {{ $rs->kategori }}
                </td>
                <td>
                    {{ $rs->beli }}
                </td>
                <td>
                    {{ $rs->jual }}
                </td>
                <td>
                    {{ $rs->stock }}
                </td>
                <td class="w-36">
                    <div class="h-14 pt-5">
                        <a href="{{ route('admin/products/edit', $rs->id)}}" class="text-green-800 pl-2">Edit</a> |
                        <form action="{{ route('admin/products/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="5">Product not found</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
