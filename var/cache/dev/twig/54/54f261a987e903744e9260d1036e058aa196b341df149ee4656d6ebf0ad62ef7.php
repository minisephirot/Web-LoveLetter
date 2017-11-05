<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_233978913b15cdfd90e08a693d21ef9796983d6930712e3e9897ca93978349dc extends Twig_Template
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
        $__internal_bf4f198c69af431a497dff5e3120baf2a898a8a275ac2ff3ca5c232129547f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4f198c69af431a497dff5e3120baf2a898a8a275ac2ff3ca5c232129547f97->enter($__internal_bf4f198c69af431a497dff5e3120baf2a898a8a275ac2ff3ca5c232129547f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9b73722476bc90c5d2f8533a3d0467ebf9e0654a6aee443e47248951fe4d632a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b73722476bc90c5d2f8533a3d0467ebf9e0654a6aee443e47248951fe4d632a->enter($__internal_9b73722476bc90c5d2f8533a3d0467ebf9e0654a6aee443e47248951fe4d632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_bf4f198c69af431a497dff5e3120baf2a898a8a275ac2ff3ca5c232129547f97->leave($__internal_bf4f198c69af431a497dff5e3120baf2a898a8a275ac2ff3ca5c232129547f97_prof);

        
        $__internal_9b73722476bc90c5d2f8533a3d0467ebf9e0654a6aee443e47248951fe4d632a->leave($__internal_9b73722476bc90c5d2f8533a3d0467ebf9e0654a6aee443e47248951fe4d632a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
