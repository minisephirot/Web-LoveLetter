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
        $__internal_0b03adbb99f8717e399de0d1a1e780e8471f3b3465b49e738f33fd9e31a5b255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b03adbb99f8717e399de0d1a1e780e8471f3b3465b49e738f33fd9e31a5b255->enter($__internal_0b03adbb99f8717e399de0d1a1e780e8471f3b3465b49e738f33fd9e31a5b255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5a64aa73410b99f535ae92ea423e296946d587da18be31eacf893a43b0d66dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a64aa73410b99f535ae92ea423e296946d587da18be31eacf893a43b0d66dd5->enter($__internal_5a64aa73410b99f535ae92ea423e296946d587da18be31eacf893a43b0d66dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0b03adbb99f8717e399de0d1a1e780e8471f3b3465b49e738f33fd9e31a5b255->leave($__internal_0b03adbb99f8717e399de0d1a1e780e8471f3b3465b49e738f33fd9e31a5b255_prof);

        
        $__internal_5a64aa73410b99f535ae92ea423e296946d587da18be31eacf893a43b0d66dd5->leave($__internal_5a64aa73410b99f535ae92ea423e296946d587da18be31eacf893a43b0d66dd5_prof);

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
