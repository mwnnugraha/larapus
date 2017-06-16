use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
            if ($request->ajax()) {
                $authors = Author::select(['id', 'name']);
                return Datatables::of($authors)
                ->addColumn('action', function($author){
                    return view('datatable._action', [
                        'model'       => $author,
                        'form_url'    => route('authors.destroy', $author->id),
                        'edit_url'    => route('authors.edit', $author->id),
                        'confirm_message' =>'Yakin mau menghapus ' . $author->name . '?'
                        ]);
                })->make(true);
            }

            $html = $htmlBuilder
            ->addColumn(['data' => 'name', 'name'=>'name', 'title'=>'Nama'])
            ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false,'searchable'=>false]);
            return view('authors.index')->with(compact('html'));
    }