<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_00ed75d6b6ebafef0f33ae82425d6d77ba0bc6bcef7b2dfdd3a48bada0626ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a6dccc3bab5e8b5af06a8e130b276ac539fb0db001e6869f34237b07077c580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6dccc3bab5e8b5af06a8e130b276ac539fb0db001e6869f34237b07077c580->enter($__internal_5a6dccc3bab5e8b5af06a8e130b276ac539fb0db001e6869f34237b07077c580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_07d878dfd461d721508fc0757e33d1a05fff3266d1595a8250cc1b2823cfd7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d878dfd461d721508fc0757e33d1a05fff3266d1595a8250cc1b2823cfd7b8->enter($__internal_07d878dfd461d721508fc0757e33d1a05fff3266d1595a8250cc1b2823cfd7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5a6dccc3bab5e8b5af06a8e130b276ac539fb0db001e6869f34237b07077c580->leave($__internal_5a6dccc3bab5e8b5af06a8e130b276ac539fb0db001e6869f34237b07077c580_prof);

        
        $__internal_07d878dfd461d721508fc0757e33d1a05fff3266d1595a8250cc1b2823cfd7b8->leave($__internal_07d878dfd461d721508fc0757e33d1a05fff3266d1595a8250cc1b2823cfd7b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
