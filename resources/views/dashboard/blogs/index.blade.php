<x-dash-ui-layout>
<x-slot:title>{{ $title }}</x-slot:title>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Blog</h1>
      </div>

        <div class="table-responsive small col-lg-8">
        <a href="/dashboard/blogs/create" class="badge bg-primary" style="text-decoration: none">Add Blog</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ( $blogs as $blog)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $blog->title }}</td>
              <td>{{ $blog->category->name }}</td>
              <td>
                <a href="/dashboard/blogs/{{ $blog->slug }}" class="badge bg-info" style="text-decoration: none">detail</a>
                <a href="/dashboard/blogs/{{ $blog->id }}" class="badge bg-warning" style="text-decoration: none">update</a>
                <a href="/dashboard/blogs/{{ $blog->id }}" class="badge bg-danger" style="text-decoration: none">delete</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </main>
</x-dash-ui-layout>