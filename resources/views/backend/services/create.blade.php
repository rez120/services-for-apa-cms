@extends('backend.layouts.app')

@section('title', __('Services'))

@section('content')

        <h1>error</h1>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <h1>error</h1>


        <form style="background-color:white; display:flex; flex-direction: column;" action={{route('admin.service.store')}} method="POST">
            @csrf
            {{-- @method('PUT') --}}
            <input name="title" type="text" placeholder="title" >
            <input name="thumbnail" type="text"  >
            {{-- <textarea name="body" id="" cols="30" rows="10" placeholder="descryption"></textarea> --}}
            
            <label >متن</label>
            <input name="body" id="body" type="hidden" >
            <div  dir="ltr" class="standalone-container">
                <div  id="snow-container"></div>
            </div>

            <button>submit</button>
        </form>

        @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

@endsection


@section('custom-head')

<link rel="stylesheet" href="/quill/quill.snow.css" />

<style>
    .standalone-container {

    }
    #snow-container {
        height: 350px;
    }

   
</style>



@endsection

@section('custom-script')

 start of custom script
<script src="/quill/quill.min.js"></script>
<script>
    var toolbarOptions = [
        [{ size: ["small", false, "large", "huge"] }],
        [{ align: ['justify', 'center', false, 'right'] }],
        [{ direction: "rtl" }],
        ["bold", "italic", "underline", "strike"], // toggled buttons
        ["blockquote", "code-block"],

        [{ list: "ordered" }, { list: "bullet" }],
        [{ script: "sub" }, { script: "super" }], // superscript/subscript
        [{ indent: "-1" }, { indent: "+1" }], // outdent/indent
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        // text direction

        // custom dropdown

        [{ color: [] }, { background: [] }], // dropdown with defaults from theme

        ["image"],
    ];
    var quill = new Quill("#snow-container", {
        placeholder: "متن را وارد کنید",
        theme: "snow",
        modules: {
            toolbar: toolbarOptions,
        },
    });
</script>

<script >
    setInterval(function () {
        document.getElementById("body").value = document.querySelector(".ql-editor").innerHTML;
    }, 5);
</script>


<script>
    document.getElementsByClassName('ql-direction')[0].click();
</script>

end of custom script
@endsection
