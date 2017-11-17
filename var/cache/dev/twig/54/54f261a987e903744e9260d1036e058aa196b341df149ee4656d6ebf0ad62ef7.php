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
        $__internal_0a2f46d39b6aff75a08d323bbcd4aaee37fafb00988a0c26ed0180679d378d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2f46d39b6aff75a08d323bbcd4aaee37fafb00988a0c26ed0180679d378d87->enter($__internal_0a2f46d39b6aff75a08d323bbcd4aaee37fafb00988a0c26ed0180679d378d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_abf0532839608299b5aa2f54c6bae73d8d2acc0d9371509a45734cf182e5fe89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf0532839608299b5aa2f54c6bae73d8d2acc0d9371509a45734cf182e5fe89->enter($__internal_abf0532839608299b5aa2f54c6bae73d8d2acc0d9371509a45734cf182e5fe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0a2f46d39b6aff75a08d323bbcd4aaee37fafb00988a0c26ed0180679d378d87->leave($__internal_0a2f46d39b6aff75a08d323bbcd4aaee37fafb00988a0c26ed0180679d378d87_prof);

        
        $__internal_abf0532839608299b5aa2f54c6bae73d8d2acc0d9371509a45734cf182e5fe89->leave($__internal_abf0532839608299b5aa2f54c6bae73d8d2acc0d9371509a45734cf182e5fe89_prof);

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
