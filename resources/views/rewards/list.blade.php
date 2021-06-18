@extends('layouts.app')
@section('content')
    
             <table>
                 <tr>
                     <th>User</th>
                     <th>Points</th>
                     <th>Amount</th>
                     <th>Expires on </th>
                 </tr>
                 @foreach($rewards as $reward)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $reward->points  }}</td>
                        <td>{{  ($reward-> points * 0.01) }}</td>
                        <td>{{  $reward->expires_on }}</td>
                    </tr>
                 @endforeach
             </table> 
@endsection