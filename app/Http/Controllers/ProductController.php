<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function landingpage()
    {
        $products = Product::all();
        return view('catalogue', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'harga' => 'required|integer'
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarNama = time() . '_' . $gambar->getClientOriginalName(); // Nama unik
            $gambar->move(public_path('images'), $gambarNama); // Simpan di public/images
            $gambarPath = 'images/' . $gambarNama;
        }

        Product::create([
            'nama' => $request->nama,
            'gambar' => $gambarPath, 
            'harga' => $request->harga
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'harga' => 'required|integer'
        ]);

        $gambarPath = $product->gambar;
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($product->gambar && file_exists(public_path($product->gambar))) {
                unlink(public_path($product->gambar));
            }

            $gambar = $request->file('gambar');
            $gambarNama = time() . '_' . $gambar->getClientOriginalName(); 
            $gambar->move(public_path('images'), $gambarNama); 
            $gambarPath = 'images/' . $gambarNama;
        }

        $product->update([
            'nama' => $request->nama,
            'gambar' => $gambarPath, 
            'harga' => $request->harga
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui');
    }


    public function destroy(Product $product)
    {
        if ($product->gambar && file_exists(public_path($product->gambar))) {
            unlink(public_path($product->gambar));
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }

}
