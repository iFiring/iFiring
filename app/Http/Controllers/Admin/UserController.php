<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class UserController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function currentUserInfo()
  {
      $user = Auth::user();
      return response()->json([
          'info' => $user
      ]);
  }
}
