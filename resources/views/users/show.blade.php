<table class="table table-hover">
    @csrf

    <thead>

      <th>Username</th>

      <th>Orders</th>

      <th>Balance</th>

    </thead>

    <tbody>
        <form action="{{ route('users.create') }}">
            <input type="submit" value="create" />
        </form>
@foreach($users as $user)

        <tr>

          <td>{{$user->name}} </td>

          <td>{{$user->email}} </td>

          {{-- <td>{{$user->role}} </td> --}}

          <td><form action="{{ route('users.edit',$user->id) }}">
            <input type="submit" value="edit" />
        </form></td>

        <td><form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form></td>
        </tr>
</form>
@endforeach

    </tbody>

</table>