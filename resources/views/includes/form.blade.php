@csrf
    <div class="form-group">
        <select class="custom-select @error('status') is-invalid @enderror" name="status">
            @foreach($client->getStatusOptions() as $key => $value)
                <option value="{{ $key }}" {{ $client->status == $value ? 'selected' : ''}}>{{ $value }}</option>
            @endforeach
        </select>
        @error('status')
        <div class="invalid-feedback">
            {{$errors->first('status')}}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <select class="custom-select @error('entreprise_id') is-invalid @enderror" name="entreprise_id">
            @foreach($entreprises as $entreprise)
        <option value="{{ $entreprise->id }}" {{ $client->entreprise_id == $entreprise->id ? 'selected' : ''}}>{{ $entreprise->name }}</option>
            @endforeach
        </select>
        @error('entreprise_id')
        <div class="invalid-feedback">
            {{$errors->first('entreprise_id')}}
        </div>
        @enderror
    </div>