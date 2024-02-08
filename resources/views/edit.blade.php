<h1>Add The Student Information</h1>
<a href="{{route('index.student')}}">Show All</a>
<form action="{{route('student.update',$students->id)}}" method="post">
    @csrf
    <div>
        @if(session()->has('success'))
            <strong>{{session()->get('success')}}</strong>
        @endif
    </div>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-group @error('name') is-invalid @enderror" name="name" value="{{$students->name}}">
        @error('name')
            <span><strong>{{$message}}</strong></span>
        @enderror
    </div>
    <br>
    <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-group @error('address') is-invalid @enderror" name="address" value="{{$students->address}}">
        @error('address')
            <span><strong>{{$message}}</strong></span>
        @enderror
    </div>
    <br>
    <div class="form-group">
        <label for="">Email ID</label>
        <input type="text" class="form-group @error('email') is-invalid @enderror" name="email" value="{{$students->email}}">
        @error('email')
            <span><strong>{{$message}}</strong></span>
        @enderror
    </div>
    <br>
    <div class="form-group">
        <label for="">Phone Number</label>
        <input type="text" class="form-group @error('phone') is-invalid @enderror" name="phone" value="{{$students->phone}}">
        @error('phone')
            <span><strong>{{$message}}</strong></span>
        @enderror
    </div>
    <br>
        <button type="submit" class="btn btn-primary">Create Post</button>
</form>