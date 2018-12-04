<form>
    <table>
        <tr>
            <td>Username:</td>
            <td>Berechtigun:</td>
            <td>Edit:</td>
            <td>Delete</td>
        </tr>
        @foreach(user)
        <tr>
            <td>username1</td>
            <td>Admin</td>
            <td><input type="button" name="Edit"> </td>
            <td><input type="button" name="Delete"> </td>
        </tr>
        @endforeach

    </table>


</form>