@extends('layouts.app')
@section('content')
    <section class="container py-5 ">

        <div class="row">
            {{-- col-sm-6 col-md-4 --}}
            @foreach ($presents as $present)
                <div class="col-4  mb-4">
                    <div class="card-body">
                        <img class="my-gif" src="{{ Vite::asset('/resources/img/christmas-elf-unscreen.gif') }}"
                            alt="">
                        <div class="text-center">
                            <img src="{{ Vite::asset('/resources/img/regalino.png') }}"
                                class="img-1  d-flex justify-content-center align-items-center" alt="{{ $present->name }}">
                        </div>

                        <hr>
                        <h1 class="mb-4 card-title">{{ $present->name }} {{ $present->cognome }}</h1>
                        <hr>


                        <div id="" class=" my-2 align-items-center position-relative">

                            <div class="d-flex justify-content-around">
                                <a href="{{ route('presents.show', $present->id) }}" class="">
                                    <button class="tuono_button my-3 tuono_btn_r"><i
                                            class="fa-solid fa-circle-info"></i></button>
                                </a>
                                <a href="{{ route('presents.edit', $present->id) }}" class="">
                                    <button class="tuono_button my-3 tuono_btn_r"><i
                                            class="fa-solid fa-wand-magic-sparkles"></i></button>
                                </a>
                                <button class="tuono_button my-3 tuono_btn_r btn-modal"><i
                                        class="ms-1 fa-solid fa-trash "></i></button>



                                {{-- <form action=" {{ route('presents.destroy', $present->id) }} " class=""
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="tuono_button my-3 tuono_btn_r"><i
                                            class="ms-1 fa-solid fa-trash"></i></button>
                                </form> --}}
                                {{-- --}}
                            </div>

                        </div>
                    </div>







                </div>
                <div id="" class="modal-modal myModal-modal">

                    <!-- Modal content -->
                    <div class="modal-modal-content">
                        <span class="close-modal">CHIUDITI </span>
                        <br>
                        <form action="{{ route('presents.destroy', $present->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="title-delete">sei sicuro di eliminare : <strong>{{ $present->desc_regalo }}
                                </strong></div>
                            <button type="submit" class='btncancella mt-3 btn btn-danger'>cancella</button>

                        </form>
                    </div>

                </div>
            @endforeach


        </div>

    </section>
@endsection
