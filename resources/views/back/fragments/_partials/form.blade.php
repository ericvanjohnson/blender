@foreach(config('app.locales') as $locale)
    <div class="form__group">
        {!! Form::getLabelForTranslatedField('text', fragment('back.fragments.text'), $locale) !!}

        @if($fragment->contains_html)
        {!! Form::redactor($fragment, 'text', $locale) !!}
        @else
        {!! Form::textarea(translate_field_name('text', $locale), Form::useInitialValue($fragment, 'text', $locale), [
            'data-autosize',
            'rows' => '2',
        ]) !!}
        @endif

        {!! Html::error($errors->first(translate_field_name('text', $locale))) !!}
    </div>
@endforeach

<div class="form__group -buttons">
    {!!  Form::button(fragment('back.fragments.save'), ['type' => 'submit' , 'class' => 'button -default']) !!}
</div>
