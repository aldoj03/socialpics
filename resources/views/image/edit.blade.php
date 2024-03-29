@extends ('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Actualizar imagen</div>
                <div class="card-body">
                   <form action=" {{ route('image.update') }} " method="POST" enctype="multipart/form-data">
                   @csrf
                   <div class="form-group row">
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
                            
                            
                            
                            <div class="col-md-6">
                                <div class="container-avatar">    
                                      <img src="{{ route('image.file', ['filename' =>$image->image_path ])}}" class="avatar" >
                                </div>
                                <input id="image_path" type="file" class="form-control{{ $errors->has('image_path') ? ' is-invalid' : '' }}" name="image_path" >
                            <input type="hidden" name="image_id" value="{{ $image->id }}">
                                @if ($errors->has('image_path'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image_path') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row ">
                        <label for="description" class="col-md-3 col-form-label text-md-right" >Descripcion</label>
                            <div class="col md-7">
                            <textarea  name="description" class="form-control" required>{{ $image->description }}</textarea>
                            @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                             @endif
                            </div>
                        </div> 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    Guardaar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
