use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
Route::resource('blogs', BlogController::class);
});