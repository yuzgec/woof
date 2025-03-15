<div class="card border-1 border-radius-1 custom-box-shadow-1" id="form">
    <div class="card-body">
        <h4 class="text-transform-none text-color-dark font-weight-bold mb-3">HIZLI İLETİŞİM FORMU</h4>
        <form class="contact-form custom-form-style-1 form-errors-light" action="{{ route('home') }}" method="POST">
            @csrf
            <input type="hidden" name="subject" value="{{ ($Detail->title) ? $Detail->title : null }}">
            <div class="row">
                <div class="form-group col mb-3">
                    <input type="text" value="{{ old('name') }}" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" placeholder="Adınız Soyadınız *">
                    @if($errors->has('name'))
                        <div class="invalid-feedback">{{$errors->first('name')}}</div>
                    @endif
                </div>
            </div>
      
            <div class="row">
                <div class="form-group col mb-3">
                    <input type="text" value="{{ old('phone') }}" class="@if($errors->has('phone')) is-invalid @endif form-control" name="phone"  placeholder="Telefon *">
                    @if($errors->has('phone'))
                        <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col mb-4">
                    <textarea rows="3" class="@if($errors->has('message')) is-invalid @endif form-control" name="message" placeholder="Mesajınız *">{{ old('message') }}</textarea>
                    @if($errors->has('message'))
                        <div class="invalid-feedback">{{$errors->first('message')}}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col text-lg-end mb-0">
                    <button type="submit" class="btn btn-primary font-weight-bold btn-sm text-white">MESAJI GÖNDER</button>
                </div>
            </div>
        </form>
    </div>
</div>
