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
        $__internal_a1e0ad379ef9f0deb7f9397b1410005dfe68a8d54583a7a7b7238bf2ece3b602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e0ad379ef9f0deb7f9397b1410005dfe68a8d54583a7a7b7238bf2ece3b602->enter($__internal_a1e0ad379ef9f0deb7f9397b1410005dfe68a8d54583a7a7b7238bf2ece3b602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8f11b6a1b82ff6e1d303aa101b6833f3b72ee226264812b9d5b4b7080c743721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f11b6a1b82ff6e1d303aa101b6833f3b72ee226264812b9d5b4b7080c743721->enter($__internal_8f11b6a1b82ff6e1d303aa101b6833f3b72ee226264812b9d5b4b7080c743721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a1e0ad379ef9f0deb7f9397b1410005dfe68a8d54583a7a7b7238bf2ece3b602->leave($__internal_a1e0ad379ef9f0deb7f9397b1410005dfe68a8d54583a7a7b7238bf2ece3b602_prof);

        
        $__internal_8f11b6a1b82ff6e1d303aa101b6833f3b72ee226264812b9d5b4b7080c743721->leave($__internal_8f11b6a1b82ff6e1d303aa101b6833f3b72ee226264812b9d5b4b7080c743721_prof);

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
