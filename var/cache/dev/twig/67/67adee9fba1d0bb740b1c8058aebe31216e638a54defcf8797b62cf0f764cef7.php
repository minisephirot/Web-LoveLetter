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
        $__internal_1ff28dd7cd8334829dec1f9d6286a6f47456980031834a686a5556be0621c864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff28dd7cd8334829dec1f9d6286a6f47456980031834a686a5556be0621c864->enter($__internal_1ff28dd7cd8334829dec1f9d6286a6f47456980031834a686a5556be0621c864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_55289b9416723d6641b90dee54914add374692ce402a1fe08bd7010c96d18dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55289b9416723d6641b90dee54914add374692ce402a1fe08bd7010c96d18dab->enter($__internal_55289b9416723d6641b90dee54914add374692ce402a1fe08bd7010c96d18dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1ff28dd7cd8334829dec1f9d6286a6f47456980031834a686a5556be0621c864->leave($__internal_1ff28dd7cd8334829dec1f9d6286a6f47456980031834a686a5556be0621c864_prof);

        
        $__internal_55289b9416723d6641b90dee54914add374692ce402a1fe08bd7010c96d18dab->leave($__internal_55289b9416723d6641b90dee54914add374692ce402a1fe08bd7010c96d18dab_prof);

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
