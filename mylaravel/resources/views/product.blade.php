@extends('layout.default')

@section('content')
<form>

</form>
<table class="table">
    <thead>

    </thead>
    <tbody>

    </tbody>
</table>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        var count = 1;
        $('#btn-add-product').on('click',function(){
            $("#add-product").append(`

            `)
        }
    })

    $(document).on('click','btn-delete-product',function(){
        $(this).parent().parent().remove();
    })
    </script>
@endsection
