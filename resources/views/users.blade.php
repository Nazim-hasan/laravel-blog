<x-header/>
<h1>User Page</h1>
@include('inner');
@foreach($users as $user)
<h4>{{$user}}</h4>
@endforeach;
<script>
    var data=@json($users);
    console.log(data);
</script>