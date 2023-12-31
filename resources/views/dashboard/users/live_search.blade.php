
 @extends('layouts.admin')

  @section('content')
  <div class="app-content content">
    <div class="content-wrapper">
  <div class="container box">
   <h3 >البحث عن مستخدم</h3><br />
   <div class="panel panel-default">
    <div class="panel-heading">بحث</div>
    <div class="panel-body">
     <div class="form-group">
      <form action="{{ route('search.users') }}" method="GET">
        <input type="text" class="form-control" placeholder="ابحث" name="search" required/>
        <br>
        <button class="btn btn-primary" type="submit">search<i class="la la-check-square-o"></i></button>
      </form>
      </div>
     <div class="table-responsive">
      {{-- <h3 >مجموع النتائج : <span id="total_records"></span></h3> --}}

      <table class="table table-striped table-bordered">
      
       <thead>
        <tr>
         {{-- <th>ID</th> --}}
         <th>name</th>
         <th>email</th>
         {{-- <th>العنوان</th>
          <th>تعديل</th> --}}
        </tr>
       </thead>
       <tbody>
        @if($users->isNotEmpty())
        @foreach ($users as $user)
        <tr>
          {{-- <td>{{ $user->id }}</td> --}}
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          {{-- <td>{{ $user->address }}</td> --}}
          <td>
            <div class="btn-group" role="group"
                aria-label="Basic example">
                <a href="{{ route('admin.users.edit', $user->id) }}"
                    class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a>


                <a href="{{ route('admin.users.delete', $user->id) }}"
                    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a>



            </div>
        </td>
      </tr>
      @endforeach
      @else 
          <div>
              <h2>this user not exist</h2>
          </div>
      @endif
       </tbody>
      </table>
      <div class="justify-content-center d-flex">
        {!! $users->links() !!}
    </div>
     </div>
    </div>    
   </div>
  </div>
</div>
</div>
  @stop
 
 {{-- </body>
</html> --}}
