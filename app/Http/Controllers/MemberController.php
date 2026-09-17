<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMemberRequest;
class MemberController extends Controller
{
    private array $members = [
        [
            'id' => 1,
            'nama' => 'Andi Saputra',
            'nim' => '2201001',
            'email' => 'andi@mail.com',
            'nomor_telepon' => '08123456789',
            'alamat' => 'Jl. Merdeka No. 1',
            'status' => 'aktif',
        ],
        [
            'id' => 2,
            'nama' => 'Budi Santoso',
            'nim' => '2201002',
            'email' => 'budi@mail.com',
            'nomor_telepon' => '08129876543',
            'alamat' => 'Jl. Sudirman No. 5',
            'status' => 'nonaktif',
        ],
    ];

    public function index()
    {
        $members = $this->members;
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();
        return redirect()->route('members.index')
            ->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}