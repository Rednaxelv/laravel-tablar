
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('titulo') }}</label>
    <div>
        {{ Form::text('titulo', $planilla->titulo, ['class' => 'form-control' .
        ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">planilla <b>titulo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('año') }}</label>
    <div>
        {{ Form::text('año', $planilla->año, ['class' => 'form-control' .
        ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
        {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">planilla <b>año</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('mes') }}</label>
    <div>
        {{ Form::text('mes', $planilla->mes, ['class' => 'form-control' .
        ($errors->has('mes') ? ' is-invalid' : ''), 'placeholder' => 'Mes']) }}
        {!! $errors->first('mes', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">planilla <b>mes</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tipo') }}</label>
    <div>
        {{ Form::text('tipo', $planilla->tipo, ['class' => 'form-control' .
        ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
        {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">planilla <b>tipo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('usuario') }}</label>
    <div>
        {{ Form::text('usuario', $planilla->usuario, ['class' => 'form-control' .
        ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
        {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">planilla <b>usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('archivo') }}</label>
    <div>
        {{ Form::text('archivo', $planilla->archivo, ['class' => 'form-control' .
        ($errors->has('archivo') ? ' is-invalid' : ''), 'placeholder' => 'Archivo']) }}
        {!! $errors->first('archivo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">planilla <b>archivo</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
