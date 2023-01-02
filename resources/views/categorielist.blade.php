@foreach($Categories as $categorie)
    <tr>
        <td>{{ $categorie->categorie }}</td>
        <td>
            <a href='#' class='btn btn-success edit' data-id='{{ $categorie->id }}' data-first='{{ $categorie->categorie }}'> Edit</a>
            <a href='#' class='btn btn-danger delete' data-id='{{ $categorie->id }}'> Delete</a>
        </td>
    </tr>
@endforeach
