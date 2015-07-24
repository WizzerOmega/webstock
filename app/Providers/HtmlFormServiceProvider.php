<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormBuilder;
use Collective\Html\HtmlBuilder;

class HtmlFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFormTextField();
        $this->registerFormSubmit();
        $this->registerHtmlButtonBack();
    }

    private function registerFormTextField()
    {
        FormBuilder::macro('textField', function($type, $name, $errors, $label, $labelOptions=array(), $inputOptions=array(), $inputClass)
        {
            $valeur = \Request::old($name) ? \Request::old($name) : null;
            $inputOptions['class'] = 'form-control';
            return sprintf('
                <div class="form-group">
                    %s
                    <div class="'.$inputClass.'">
                        %s
                    </div>
                </div>',
                FormBuilder::label($name, $label, $labelOptions),
                $type == 'email' ? FormBuilder::email($name, $valeur, $inputOptions) : FormBuilder::text($name, $valeur, $inputOptions),
                $errors->first($name, '<small class="help-block">:message</small>')
            );
        });
    }

    private function registerFormSubmit()
    {
        FormBuilder::macro('button_submit', function($texte)
        {
            return FormBuilder::submit($texte, ['class' => 'btn btn-info pull-right']);
        });     
    }

    private function registerHtmlButtonBack()
    {   
        HtmlBuilder::macro('button_back', function()
        {
            return '<a href="javascript:history.back()" class="btn btn-primary">
                    <span class="glyphicon glyphicon-back-arrow-left"></span> Retour
                </a>';
        });         
    }

}
