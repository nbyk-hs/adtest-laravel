@extends('layout.contact')

@section('css')
@endsection

@section('content')
<h1>confirm</h1>
<form action="thanks" method="post">
    @csrf
    <table>
        <tr>
            <th>お名前</th>
            <td>
                <input name="last-name" type="text" value="{{$last-name}}" readonly>
                <input name="first-name" type="text" value="{{$first-name}}" readonly>
            </td>
        </tr>
    </table>
</form>
@endsection