<?php
namespace App\Interfaces;
use Illuminate\Http\Request;
interface ImageStorage {
 public function store(Request $request, $pid);
 public function delete($pid);
 public function stores3(Request $request, $pid);
 public function deletes3($pid);
}